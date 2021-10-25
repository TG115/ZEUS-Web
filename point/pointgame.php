<?
    if (!isset($_SESSION)) session_start();
    if (!isset($_SESSION['zeus_id'])) {
        echo '<script>alert("로그인 후 이용하실 수 있습니다."); location.href="/login";</script>';
    }
    include_once $_SERVER["DOCUMENT_ROOT"]."/point/pointgame.proc.php";
    $score = $r[0]['rcp_score'];
    $point = $r[0]['rcp_point'];
?>

<? include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php" ?>
	<title>Premium RPG ZEUS - 포인트게임</title>
    <meta name="description" content="매일매일 점점 보상이 늘어나는 포인트 게임을 플레이 해보세요." />
	<meta property="og:description" content="매일매일 점점 보상이 늘어나는 포인트 게임을 플레이 해보세요." />
	<meta property="og:title" content="Premium RPG ZEUS - 포인트 게임" />
</head>

<body>
<? include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php" ?>

    <!-- Main content -->
<div class="container my-5" style="max-width:1300px">
	<!-- Header -->
	<div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
        <div class="header-body mb-3">
            <div class="row py-3">
                <div class="col-xl-12 col-lg-12 col-md-12 px-5">
                <h1>포인트 게임</h1>
                <p class="text-lead">포인트를 획득하여 게임에 필요한 아이템을 구매해보세요!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="row justify-content-center my-3">
        <div class="col-lg-12 col-md-12">
            <div class="card shadow bg-secondary border-0 mb-0 h-100">
                <div class="card-header bg-dark">
                    <h5 class="form-text fw-bold text-white">연승! 가위바위보</h5>
                </div>
                <div class="card-body px-lg-5 py-lg-5">
                    <div class="form-text h6 fw-bold text-light">매일 5번 연승에 도전하고, 무료 포인트 받아가세요!</div>
                    <div class="text-warning">(승리 시 획득 포인트 2배, 패배 시 포인트 지급 및 게임 종료)</div>
                    <div class="m-5 row row-cols-lg-auto text-center fw-bold">
                        <div class="form-check col-4">
                            <input class="form-check-input" type="radio" name="game_rcp" value="가위" id="가위" style="margin-left:-5px">
                            <br>
                            <label class="form-check-label text-white btn-dark p-3 rounded" for="가위" data-micron="swing">
                                ✌️ 가위
                            </label>
                        </div>
                        <div class="form-check col-4">
                            <input class="form-check-input" type="radio" name="game_rcp" value="바위" id="바위" style="margin-left:-5px">
                            <br>
                            <label class="form-check-label text-white btn-dark p-3 rounded" for="바위" data-micron="swing">
                                ✊ 바위
                            </label>
                        </div>
                        <div class="form-check col-4">
                            <input class="form-check-input" type="radio" name="game_rcp" value="보" id="보" style="margin-left:-5px">
                            <br>
                            <label class="form-check-label text-white btn-dark p-3 rounded" for="보" data-micron="swing">
                                🖐️ 보 
                            </label>
                        </div>
                    </div>
                    <? if ($hasToday >= 5) { ?>
                        <div class="mini-info p-3 border border-danger rounded bg-dark text-white">안타깝네요! 가위바위보에 5회 패배하여 오늘은 더 이상 게임을 진행할 수 없습니다.</div>
                    <? } else { ?>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary my-4"  data-micron="pop" onclick="game_rcp('req=practice&game_rcp=' + $(':input:radio[name=game_rcp]:checked').val());">도전하기</button>
                    </div>
                    <div class="mini-info">현재 <span id="result_score" class="text-warning fw-bold"><?=$score?></span>연승중!<br> 패배시 받는 포인트 : <span id="result_point" class="text-light fw-bold"><?=number_format($point)?></span> 포인트</div>
                    <div class="mini-info text-white">(패배를 해야 연승 포인트가 지급됩니다.)</div>
                    <? } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-3">
        <div class="col-lg-6 col-md-6 my-3">
            <div class="card shadow bg-secondary border-0 mb-0 h-100">
                <div class="card-header bg-dark">
                    <h5 class="form-text fw-bold text-white">🥇 오늘의 가위바위보 TOP5 실력자는?</h5>
                </div>
                <div class="card-body px-lg-5 py-lg-5">
                    <table class="table table-dark table-striped text-center">
                        <thead>
                            <tr>
                                <th>닉네임</th>
                                <th>게임결과</th>
                                <th>획득 포인트</th>
                                <th>시간</th>
                            </tr>
                        </thead>
                        </tbody>
                            <? if (isset($ranking_rcp[0]['nickname'])) {
                                foreach ($ranking_rcp as $el) { ?>
                                    <tr>
                                        <td><?=$el['nickname']?> [<?=$el['user_id']?>]</td>
                                        <td><?=str_replace(" 보상", "", str_replace("가위바위보 게임 ","", $el['text']))?></td>
                                        <td><?=number_format($el['point'])?></td>
                                        <td><?=date("H:i:s", strtotime($el['date']))?></td>	
                                    </tr>
                                <? }
                            } else { ?>
                                <tr>
                                    <td colspan="4">등록 된 실력자가 없습니다! 지금 도전하세요!</td>	
                                </tr>
                            <? } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 my-3">
            <div class="card shadow bg-secondary border-0 mb-0 h-100">
                <div class="card-header bg-dark">
                    <h5 class="form-text fw-bold text-white">🏆 역대 가위바위보 TOP5 실력자는?</h5>
                </div>
                <div class="card-body px-lg-5 py-lg-5">
                    <table class="table table-dark table-striped text-center">
                        <thead>
                            <tr>
                                <th>닉네임</th>
                                <th>게임결과</th>
                                <th>획득 포인트</th>
                                <th>날짜</th>
                            </tr>
                        </thead>
                        </tbody>
                            <? if (isset($tot_ranking_rcp[0]['nickname'])) {
                                foreach ($tot_ranking_rcp as $el) { ?>
                                    <tr>
                                        <td><?=$el['nickname']?> [<?=$el['user_id']?>]</td>
                                        <td><?=str_replace(" 보상", "", str_replace("가위바위보 게임 ","", $el['text']))?></td>
                                        <td><?=number_format($el['point'])?></td>
                                        <td><?
                                            if (date("Y-m-d", strtotime($el['date'])) == date("Y-m-d")) {
                                                echo date("H:i:s", strtotime($el['date']));
                                            } else {
                                                echo date("Y-m-d", strtotime($el['date']));
                                            }
                                            ?></td>	
                                    </tr>
                                <? }
                            } else { ?>
                                <tr>
                                    <td colspan="4">등록 된 실력자가 없습니다! 지금 도전하세요!</td>	
                                </tr>
                            <? } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

	<? include $_SERVER["DOCUMENT_ROOT"]."/inc/footer.php" ?>

</body>

</html>