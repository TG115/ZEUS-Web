<?
    $GLOBALS['ret_type'] = basename(__FILE__) == basename($_SERVER["SCRIPT_NAME"]) ? 'ajax' : '';
    include_once $_SERVER['DOCUMENT_ROOT'].'/lib/db_function.php';

    $req = @$_POST['req'] ?? '';

    function getItemInfo($itemname) {
        
        switch($itemname) {
            case '후원 박스':
                $idname = "cashrb"; 
                $price = 50000;
                break;
            case '마일리지': 
                $idname = "mileage";
                $price = 3;
                break;
            case '스페셜 코인': 
                $idname = "specialcoin"; 
                $price = 50000;
                break;
            case '다이아 장비 선택권': 
                $idname = "choice_diamond";
                $price = 50000;
                break;
            case '백금 장신구 선택권': 
                $idname = "choice_acc_platinum"; 
                $price = 75000;
                break;
            case '로얄 큐브': 
                $idname = "cube_R"; 
                $price = 10500;
                break;
            case '일반 귀환서': 
                $idname = "tpscroll"; 
                $price = 1000;
                break;
            case '고급 귀환서': 
                $idname = "adv_tpscroll"; 
                $price = 2500;
                break;
        }
        return array("idname"=>$idname, "price"=>$price);
    }

    function SQL_buy_items($user_id, $itemname, $amount) {
        $itemInfo = getItemInfo($itemname);

        libQuery("
            INSERT INTO zeus_giveitem (user_id, idname, itemname, amount, price, flag, wdate)
            VALUES (?, ?, ?, ?, ?, '구매완료', NOW())
        ;", "issii", array($user_id, $itemInfo['idname'], $itemname, $amount, $itemInfo['price'] * $amount));
    }

    function SQL_get_Mypoint($user_id) {
        $r = libQuery("
            SELECT point
            FROM zeus_account
            WHERE user_id = ?
        ;", "i", array($user_id));

        return $r[0]['point'];
    }

    switch ($req) {
        case 'buy':
            $user_id = $_SESSION['user_id'];
            $itemname = $_POST['itemname'];
            $amount = $_POST['amount'];
            $itemInfo = getItemInfo($itemname);

            if ($amount > 0) {
                $price = $itemInfo['price'] * $amount;
                $myPoint = SQL_get_Mypoint($user_id);
                if ($myPoint >= $price) {
                    SQL_pointLog($user_id, "아이템 구매", "[" . $itemname ."] " . $amount . "개", ($price * -1));
                    SQL_setUserPoint($user_id, ($price * -1));
                    SQL_buy_items($user_id, $itemname, $amount);
                    libReturn("success", array("itemname"=>$itemname, "amount"=>$amount, "price"=>$price));
                } else {
                    libReturn("보유 포인트가 부족합니다.");
                }
            } else {
                libReturn("구매 개수를 확인해주세요.");
            }
            break;
    }
?>