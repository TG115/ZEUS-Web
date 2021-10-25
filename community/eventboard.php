<? include_once 'bbs.proc.php'; ?>
<?
    include_once 'list.proc.php';
    $r_max_row 	= $r['max_row'];
	$r_page 	= $r['page'];
	$r_prev 	= $r['prev'];
	$r_next 	= $r['next'];
	$r_tot_cnt 	= $r['tot_cnt'];

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
	<title>Premium RPG ZEUS - <?=$bbs?></title>
    <meta name="description" content="다양하고 푸짐한 혜자 서버 이벤트와 함께 GTA 인생모드(FiveM) 제우스 서버를 즐겨보세요!" />
	<meta property="og:description" content="다양고 푸짐한 혜자 서버 이벤트와 함께 GTA 인생모드(FiveM) 제우스 서버를 즐겨보세요!" />
	<meta property="og:title" content="Premium RPG ZEUS - <?=$bbs?>" />
    <link rel="canonical" href="https://zeusrpg.kr/community/eventboard" />
    <meta property="og:url" content="https://zeusrpg.kr/community/eventboard" />
</head>

<body>
<? include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php" ?>
<div class="container my-5 table-responsive">

	<!-- Page Heading/Breadcrumbs -->
	<h1 class="mt-4 mb-3">커뮤니티
	<small><?=$bbs?></small>
	</h1>

	<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="https://zeusrpg.kr">Home</a>
	</li>
    <li class="breadcrumb-item disabled">커뮤니티</li>
	<li class="breadcrumb-item active"><?=$bbs?></li>
	</ol>

    <ul class="nav nav-tabs mb-5">
        <li class="nav-item">
            <a class="nav-link" href="notice">공지사항</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="freeboard">자유 게시판</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="eventboard">이벤트 게시판</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tipboard">꿀팁 게시판</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="qnaboard">질문 게시판</a>
        </li>
    </ul>
    
    <table class="table shadow border-bottom text-center">
        <thead class="bg-dark text-white table-hover">
            <tr>
                <th style="width: 100px">구분</th>
                <th style="width: 150px">카테고리</th>
                <th style="width: 450px">제목</th>
                <th style="width: 150px">작성자</th>
                <th>등록일</th>
                <th>추천</th>
                <th>조회수</th>
            </tr>
        </thead>
        <tbody>
            <? foreach ($noti_list as $el) { 
				$r_cmt_cnt = SQL_Get_bbs_comment($el['idx']);
				?>
                <tr class="bbs_noti">
                    <td><?=$el['wflag']?></td>
                    <td><?=$el['cname']?></td>
                    <td class="text-left"><div class="bbs_title"><a class="link-dark" href="view?idx=<?=$el['idx']?>"><?=$el['title']?><?if ($r_cmt_cnt) {?> <strong>[<?=$r_cmt_cnt?>]</strong><?}?></a></div></td>
                    <td><? if (isAdminId($el['user_id'])) echo "<img src='/img/logo.png' width='22px'>"; ?> <?=SQL_getUserName($el['user_id'])?> [<?=$el['user_id']?>]</td>
                    <td><?if (date("Y-m-d", strtotime($el['wdate'])) == date("Y-m-d")) {
                            echo date("H:i:s", strtotime($el['wdate']));
                        } else {
                            echo date("Y-m-d", strtotime($el['wdate']));
                        }?></td>
                    <td><?=number_format(SQL_Get_bbs_like($el['idx']))?></td>
                    <td><?=number_format($el['hit'])?></td>
                </tr>
            <? } ?>
            <? foreach ($r_list as $el) { 
				$r_cmt_cnt = SQL_Get_bbs_comment($el['idx']);
				?>
                <tr>
                    <td><?=$el['wflag']?></td>
                    <td><?=$el['cname']?></td>
                    <td class="text-left"><div class="bbs_title"><a class="link-dark" href="view?idx=<?=$el['idx']?>"><?=$el['title']?><?if ($r_cmt_cnt) {?> <strong>[<?=$r_cmt_cnt?>]</strong><?}?></a></div></td>
                    <td><? if (isAdminId($el['user_id'])) echo "<img src='/img/logo.png' width='22px'>"; ?> <?=SQL_getUserName($el['user_id'])?> [<?=$el['user_id']?>]</td>
                    <td><?if (date("Y-m-d", strtotime($el['wdate'])) == date("Y-m-d")) {
                            echo date("H:i:s", strtotime($el['wdate']));
                        } else {
                            echo date("Y-m-d", strtotime($el['wdate']));
                        }?></td>
                    <td><?=number_format(SQL_Get_bbs_like($el['idx']))?></td>
                    <td><?=number_format($el['hit'])?></td>
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
    
    <div class="text-right">
        <? if (isset($_SESSION['isadmin'])) { ?>
        <a href="write?bbs=<?=$bbs?>">
            <button class="btn btn-primary">글쓰기</button>
        </a>
        <? } ?>
    </div>
</div>
<? include $_SERVER["DOCUMENT_ROOT"]."/inc/footer.php" ?>
</body>
</html>