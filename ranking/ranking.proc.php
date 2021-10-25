<?
$GLOBALS['ret_type'] = basename(__FILE__) == basename($_SERVER["SCRIPT_NAME"]) ? 'ajax' : '';
include_once $_SERVER['DOCUMENT_ROOT'].'/lib/db_function.php';

function fAPI() {
	$page = (int)(@$_GET['page'] ?: 1);
	$user_id = (int)(@$_GET['user_id'] ?: 0);
	$where = '';
	if ($user_id) {
		$where = 'WHERE u.user_id = '.$user_id;
	}
	$max_row = 20;
	$offset = ($page - 1) * $max_row;

	$r_cnt = libQuery("
		SELECT COUNT(*) AS cnt
		FROM vrp_user_moneys AS u
		$where
	");

	if ($r_cnt[0]['cnt'] < 1) {
		echo "<script>alert('고유번호를 다시 확인해주세요.');location.href='/';</script>";
	}

	$r_list = libQuery("
		SELECT u.user_id, u.lv_exp, a.nickname, a.rebirth_cnt, rank() over(order by a.rebirth_cnt DESC, u.lv_exp DESC) AS rank
		FROM vrp_user_moneys AS u
			LEFT JOIN zeus_account AS a ON a.user_id = u.user_id
		$where
		ORDER BY a.rebirth_cnt DESC, u.lv_exp DESC
		LIMIT ?
		OFFSET ?
	", 'ii', array($max_row, $offset));

	if ($user_id) {
		$myrank = libQuery("
			select count(*)+1 as rank 
			from zeus_account AS a
				LEFT JOIN vrp_user_moneys as u ON a.user_id = u.user_id
			where u.lv_exp > (select lv_exp from vrp_user_moneys where user_id=$user_id)
			and a.rebirth_cnt = (select rebirth_cnt from zeus_account where user_id=$user_id)")[0]['rank'];

		$rebirth_rank = libQuery("
			select count(*) as rank 
			from zeus_account AS a
				LEFT JOIN vrp_user_moneys as u ON a.user_id = u.user_id
			where a.rebirth_cnt > (select rebirth_cnt from zeus_account where user_id=$user_id)")[0]['rank'];
		
		$myrank = $myrank + $rebirth_rank;


		$r_list[0]['rank'] = $myrank;
	}

	$r_is_exist_next = $max_row * $page < $r_cnt[0]['cnt'];

	$page > 1 
		? $prev = $page-1 : $prev="";
	$r_is_exist_next
		? $next = $page+1 : $next="";


	

	return libReturn('blog_list', array('max_row'=>$max_row, 'page'=>$page, 'tot_cnt'=>ceil($r_cnt[0]['cnt'] / $max_row), 'prev'=>$prev, 'next'=>$next, 'list'=>$r_list));

}
return fAPI();
?>