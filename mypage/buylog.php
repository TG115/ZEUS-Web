<?
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['zeus_id'])) {
	echo '<script>alert("로그인 후 이용하실 수 있습니다."); location.href="/login";</script>';
}
$r = include 'buylog.proc.php';

	$r_max_row 	= $r['arr']['max_row'];
	$r_page 	= $r['arr']['page'];
	$r_prev 	= $r['arr']['prev'];
	$r_next 	= $r['arr']['next'];
	$r_tot_cnt 	= $r['arr']['tot_cnt'];
	$r_list 	= $r['arr']['list'];

	$uri = $_SERVER['REQUEST_URI'];

	$cur_page = $_GET['page'] ?? 1;
    if ($r_tot_cnt < $cur_page) $cur_page = $r_tot_cnt;
    $startPage = (($cur_page - 1) / 10) * 10 + 1 - 5;
    if($startPage <= 0) $startPage = 1;
    $endPage = $startPage + 10 - 1;
    if ($endPage > $r_tot_cnt) $endPage = $r_tot_cnt;


	if ($r_prev) {
		$r_page > 2 ?
			$prevUrl = "?page=".$r_prev : 
			$prevUrl = "";
}
?>

<? include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php" ?>
	<title>Premium RPG ZEUS - 아이템 구매내역</title>
	<meta name="description" content="포인트 상점에서 구매한 내역을 확인할 수 있습니다." />
	<meta property="og:description" content="포인트 상점에서 구매한 내역을 확인할 수 있습니다." />
	<meta property="og:title" content="Premium RPG ZEUS - 아이템 구매내역" />
</head>

<body>
<? include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php" ?>
<div class="container my-5" style="max-width:1300px">
	<div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
			<div class="header-body mb-3">
				<div class="row py-3">
					<div class="col-xl-12 col-lg-12 col-md-12 px-5">
					<h1>아이템 구매내역</h1>
					<p class="text-lead">포인트로 구매한 아이템 내역을 확인할 수 있습니다.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="card shadow text-white bg-secondary mb-3">
			<div class="card-header bg-dark">
				<h5 class="form-text fw-bold text-white">구매내역</h5>
			</div>
			<div class="card-body table-responsive">
				<table class="table table-dark table-striped table-hover text-center align-items-center table-flush mg-table">
					<thead>
						<tr>
							<th>구매한 아이템</th>
							<th>개수</th>
                            <th>사용 포인트</th>
							<th>상태</th>
							<th>구매 날짜</th>
                            <th>수령 날짜</th>
						</tr>
					</thead>
					<tbody>
					<? foreach ($r_list as $el) { ?>
						<tr>
							<td><?=$el['itemname']?></td>
							<td><?=number_format($el['amount'])?></td>
                            <td><?=number_format($el['price'])?> 포인트</td>
							<td><?=$el['flag']?></td>
							<td><?=$el['wdate']?></td>
							<td><?=@$el['mdate']?></td>	
						</tr>
					<? } ?>
					</tbody>
				</table>
				<nav aria-label="Page navigation">
					<ul class="pagination justify-content-end">
						<?if ($startPage > 1) {?><li class="page-item"><a class="page-link" href="?page=1">처음</a></li><?}?>
						<?if ($cur_page > 1) {?><li class="page-item"><a class="page-link" href="?page=<?=$cur_page - 1?>">이전</a></li><?}?>
						<? if ($r_tot_cnt) for ($i = $startPage; $i <= $endPage; $i++) { ?>
						<li class="page-item<?=$cur_page == $i ? ' active' : '' ?>">
							<a class="page-link" href="?page=<?=$i?>"><?=$i?></a>
						</li>
						<? } ?>
						<?if ($cur_page < $r_tot_cnt) {?><li class="page-item"><a class="page-link" href="?page=<?=$cur_page + 1?>">다음</a></li><?}?>
						<?if ($endPage < $r_tot_cnt) {?><li class="page-item"><a class="page-link" href="?page=<?=$r_tot_cnt?>">끝</a></li><?}?>
					</ul>

				</nav>
			</div>
		</div>
	</div>

	<? include $_SERVER["DOCUMENT_ROOT"]."/inc/footer.php" ?>

	<script>
		function idSearch(num) {
			location.href='?user_id=' + num;
		}
	</script>
</body>

</html>