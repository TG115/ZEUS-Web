<?
    $GLOBALS['ret_type'] = basename(__FILE__) == basename($_SERVER["SCRIPT_NAME"]) ? 'ajax' : '';
    include_once $_SERVER['DOCUMENT_ROOT'].'/lib/db_function.php';

    $req = $_POST['req'] ?? '';
    
    function SQL_change_password($user_id, $upw) {
        libQuery("
            UPDATE zeus_account
            SET upw = ?
            WHERE user_id = ?
        ;", 'si', array($upw, $user_id));
    }

    function SQL_getUserIdentity($user_id) {
        return libQuery("
            SELECT *
            FROM vrp_user_identities
            WHERE user_id = ?
        ;", 'i', array($user_id));
    }

    function SQL_getUserRanking($user_id) {
        return libQuery("
            SELECT lv_exp
            FROM vrp_user_moneys
            WHERE user_id = ?
        ;", 'i', array($user_id));
    }

    function SQL_getUserHome($user_id) {
        return libQuery("
            SELECT home, number
            FROM vrp_user_homes
            WHERE user_id = ?
        ;", 'i', array($user_id));
    }

    function SQL_getUserAccount($user_id) {
        return libQuery("
            SELECT *
            FROM zeus_account
            WHERE user_id = ?
        ;", 'i', array($user_id));
    }

    switch($req) {        
        case 'changePW':
            if ($_POST['zeus_nowpw']) {
                if ($_POST['zeus_pw']) {
                    if ($_POST['zeus_pw2']) {
                        if ($_POST['zeus_nowpw'] == SQL_getUserAccount($_SESSION['user_id'])) {
                            if ($_POST['zeus_pw'] == $_POST['zeus_pw2']) {
                                SQL_change_password($_SESSION['user_id'], $_POST['zeus_pw']);
                                libReturn('OK');
                            } else {
                                libReturn('변경할 비밀번호가 일치하지 않습니다.');
                            }
                        } else {
                            libReturn('현재 비밀번호를 확인해주세요.');
                        }
                    } else {
                        libReturn('변경할 비밀번호 확인을 입력해주세요.');
                    }
                } else {
                    libReturn('변경할 비밀번호를 입력해주세요.');
                }
            } else {
                libReturn('현재 비밀번호를 입력해주세요.');
            }
            break;
        
        case '':
            $identity = SQL_getUserIdentity($_SESSION['user_id'])[0];
            $ranking = SQL_getUserRanking($_SESSION['user_id'])[0];
            $home = SQL_getUserHome($_SESSION['user_id'])[0] ?? '';
            $point = SQL_getUserAccount($_SESSION['user_id'])[0] ?? 0;
            break;
    }
    
?>