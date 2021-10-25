<?
    $GLOBALS['ret_type'] = basename(__FILE__) == basename($_SERVER["SCRIPT_NAME"]) ? 'ajax' : '';
    include_once $_SERVER['DOCUMENT_ROOT'].'/lib/db_function.php';

    $req = $_POST['req'] ?? '';
    $user_rcp = $_POST['game_rcp'] ?? '';
    
    function SQL_get_hasrcp($user_id) {
        $r = libQuery("
            SELECT COUNT(*) AS cnt
            FROM zeus_pointgame
            WHERE user_id = ?
            ;", "i", array($user_id));

        return $r[0]['cnt'];
    }

    function SQL_insert_rcp($user_id) {
        
        libQuery("
            INSERT INTO zeus_pointgame
            VALUES (?, 0, 100, NOW())
            ;", "i", array($user_id));
    }

    function SQL_get_user_rcp($user_id) {
        return libQuery("
            SELECT *
            FROM zeus_pointgame
            WHERE user_id = ?
            ;", "i", array($user_id));
    }

    function SQL_set_rcp($user_id, $score, $point) {
        libQuery("
            UPDATE zeus_pointgame
            SET rcp_score = ?, rcp_point = ?, rcp_date = NOW()
            WHERE user_id = ?
            ;", 'iii', array($score, $point, $user_id));
    }

    function SQL_get_rcp_today($user_id) {
        $r = libQuery("
            SELECT COUNT(*) AS cnt
            FROM zeus_point_log
            WHERE user_id = ? AND category = '포인트게임(가위바위보)' AND DATE_FORMAT(date, '%Y-%m-%d') = CURDATE()
            ;", 'i', array($user_id));

        return $r[0]['cnt'];
    }

    function SQL_get_rcp_ranking($option) {
        if ($option == 'today') {
            $AND = "AND DATE_FORMAT(l.date, '%Y-%m-%d') = CURDATE()";
        } elseif ($option == 'total') {
            $AND = "";
        }
        return libQuery("
            SELECT l.*, a.nickname
            FROM zeus_point_log AS l
                LEFT JOIN zeus_account AS a ON a.user_id = l.user_id
            WHERE l.category = '포인트게임(가위바위보)' $AND
            ORDER BY CAST(REPLACE(REPLACE(l.text, ' 보상', ''), '가위바위보 게임 ', '') AS UNSIGNED) DESC, l.date ASC
            LIMIT 5
            ;");
    }


    function game_rcp($user_rcp, $server_rcp) {
        

        if ($server_rcp == $user_rcp) {
            return "draw";
        } else {
            switch($user_rcp) {
                case '가위':
                    if ($server_rcp == "바위") {
                        return "lose";
                    } elseif ($server_rcp == "보") {
                        return "win";
                    }
                    break;

                case '바위':
                    if ($server_rcp == "가위") {
                        return "win";
                    } elseif ($server_rcp == "보") {
                        return "lose";
                    }
                    break;

                case '보':
                    if ($server_rcp == "가위") {
                        return "lose";
                    } elseif ($server_rcp == "바위") {
                        return "win";
                    }
                    break;
            }
        }
    }

    switch($req) {        
        case 'practice':
            if ($user_rcp) {
                $user_id = $_SESSION['user_id'];
                if (SQL_get_hasrcp($user_id) == 0) SQL_insert_rcp($user_id);
                if (SQL_get_rcp_today($user_id) < 5) {
                    $r = SQL_get_user_rcp($user_id);
                    $score = $r[0]['rcp_score'];
                    $point = $r[0]['rcp_point'];

                    $server_rcp = rand(1,3);

                    if ($server_rcp == 1) $server_rcp = "가위";
                    if ($server_rcp == 2) $server_rcp = "바위";
                    if ($server_rcp == 3) $server_rcp = "보";

                    $rcp_result = game_rcp($user_rcp, $server_rcp);

                    if ($rcp_result == "win") {
                        $score = $score + 1;
                        $point = $point * 2;

                        SQL_set_rcp($user_id, $score, $point);
                    }

                    if ($rcp_result == "lose") {
                        SQL_pointLog($user_id, "포인트게임(가위바위보)", "가위바위보 게임 " . $score . "연승 보상", $point);
                        SQL_setUserPoint($user_id, $point);
                        SQL_set_rcp($user_id, 0, 100);
                    }
                    libReturn("practice", array("result"=>$rcp_result, "server_rcp"=>$server_rcp, "score"=>$score, "point"=>$point));
                } else {
                    libReturn('오늘은 이미 가위바위보를 3회 진행했습니다..!');
                }
            } else {
                libReturn('가위바위보를 선택해주세요!');
            }
            break;
        
        case 'real':
            if ($user_rcp) {
                $server_rcp = rand(1,3);

                if ($server_rcp == 1) $server_rcp = "가위";
                if ($server_rcp == 2) $server_rcp = "바위";
                if ($server_rcp == 3) $server_rcp = "보";
                libReturn("real", array(game_rcp($user_rcp, $server_rcp), $server_rcp));
            } else {
                libReturn('가위바위보를 선택해주세요!');
            }
            break;

        case '':
            $user_id = $_SESSION['user_id'];
            if (SQL_get_hasrcp($user_id) == 0) SQL_insert_rcp($user_id);
            $r = SQL_get_user_rcp($user_id);
            $hasToday = SQL_get_rcp_today($user_id);
            $ranking_rcp = SQL_get_rcp_ranking('today');
            $tot_ranking_rcp = SQL_get_rcp_ranking('total');
            break;
    }
    
?>