<?
$r = include 'ranking.proc.php';

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
	<title>Premium RPG ZEUS - 서버 랭킹</title>
	<meta name="description" content="GTA 인생모드(FiveM) 제우스 서버를 플레이하는 모든 유저의 랭킹 정보입니다." />
	<meta property="og:description" content="GTA 인생모드(FiveM) 제우스 서버를 플레이하는 모든 유저의 랭킹 정보입니다." />
	<meta property="og:title" content="Premium RPG ZEUS - 서버 랭킹" />
	<meta property="og:url" content="https://zeusrpg.kr/ranking/" />
	<link rel="canonical" href="https://zeusrpg.kr/ranking/" />
</head>

<body>
<? include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php" ?>
<div class="container my-5" style="max-width:1300px">
	<div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
		<div class="header-body mb-3">
			<div class="row py-3">
				<div class="col-xl-12 col-lg-12 col-md-12 px-5">
					<h1>ZEUS 서버 랭킹</h1>
					<p class="text-lead">로그인을 통해 내 서버 랭킹 정보를 보다 쉽게 확인하실 수 있습니다.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="card shadow text-white bg-secondary mb-3">
		<div class="card-header bg-dark">
			<h5 class="form-text fw-bold text-white">ZEUS RPG 서버 랭킹</h5>
		</div>
		<div class="card-body table-responsive">
			<div class="row">
				<div class="col-sm-8">
				</div>
				<div class="col-sm-4">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="고유번호로 랭킹을 검색해보세요." aria-label="고유번호로 랭킹을 검색해보세요." aria-describedby="button-addon" id="txt_userid">
						<button class="btn btn-dark" type="button" id="button-addon" onclick="idSearch($('#txt_userid').val());">검색</button>
					</div>
				</div>
			</div>
			<table class="table table-dark table-striped table-hover text-center align-items-center table-flush mg-table">
				<thead>
					<tr>
						<th>순위</th>
						<th>고유번호</th>
						<th>닉네임</th>
						<th>환생</th>
						<th>등급</th>
						<th>경험치</th>
					</tr>
				</thead>
				<tbody>
				<? foreach ($r_list as $el) { ?>
					<tr <? if ($el['user_id'] == @$_SESSION['user_id']) {?>class="zeus-myinfo"<?}?>>
						<td><?=$el['rank']?>등</td>
						<td><?=$el['user_id']?></td>
						<td><?=$el['nickname'] ?? '<i>최근접속없음</i>'?></td>
						<td><?=$el['rebirth_cnt'] ?? 0 ?>회</td>
						<td class="<?
							if (is_numeric(strpos(myRank($el['lv_exp']), 'M'))) {
								echo "rank_master";
							} elseif (is_numeric(strpos(myRank($el['lv_exp']), 'V'))) {
								echo "rank_vibranium";
							} elseif (is_numeric(strpos(myRank($el['lv_exp']), 'A'))) {
								echo "rank_adamantium";
							} elseif (is_numeric(strpos(myRank($el['lv_exp']), 'D'))) {
								echo "rank_diamond";
							} elseif (is_numeric(strpos(myRank($el['lv_exp']), 'P'))) {
								echo "rank_platinum";
							} elseif (is_numeric(strpos(myRank($el['lv_exp']), 'G'))) {
								echo "rank_gold";
							} elseif (is_numeric(strpos(myRank($el['lv_exp']), 'S'))) {
								echo "rank_silver";
							} elseif (is_numeric(strpos(myRank($el['lv_exp']), 'B'))) {
								echo "rank_bronze";
							} elseif (is_numeric(strpos(myRank($el['lv_exp']), 'I'))) {
								echo "rank_iron";
							}
						?>"><?=myRank($el['lv_exp'])?></td>
						<td class="<?
							if (is_numeric(strpos(myRank($el['lv_exp']), 'M'))) {
								echo "rank_master";
							} elseif (is_numeric(strpos(myRank($el['lv_exp']), 'V'))) {
								echo "rank_vibranium";
							} elseif (is_numeric(strpos(myRank($el['lv_exp']), 'A'))) {
								echo "rank_adamantium";
							} elseif (is_numeric(strpos(myRank($el['lv_exp']), 'D'))) {
								echo "rank_diamond";
							} elseif (is_numeric(strpos(myRank($el['lv_exp']), 'P'))) {
								echo "rank_platinum";
							} elseif (is_numeric(strpos(myRank($el['lv_exp']), 'G'))) {
								echo "rank_gold";
							} elseif (is_numeric(strpos(myRank($el['lv_exp']), 'S'))) {
								echo "rank_silver";
							} elseif (is_numeric(strpos(myRank($el['lv_exp']), 'B'))) {
								echo "rank_bronze";
							} elseif (is_numeric(strpos(myRank($el['lv_exp']), 'I'))) {
								echo "rank_iron";
							}
						?>"><?=number_format($el['lv_exp'])?></td>	
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