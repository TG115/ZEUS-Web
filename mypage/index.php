<? 
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['zeus_id'])) {
    echo '<script>alert("로그인 후 이용하실 수 있습니다."); location.href="/login";</script>';
}
include_once $_SERVER["DOCUMENT_ROOT"]."/mypage/mypage.proc.php" ?>

<? include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php" ?>
	<title>Premium RPG ZEUS - 마이페이지</title>
    <meta name="description" content="GTA 인생모드(FiveM) 제우스 서버와 연동된 개인 정보를 확인해 볼 수 있습니다." />
	<meta property="og:description" content="GTA 인생모드(FiveM) 제우스 서버와 연동된 개인 정보를 확인해 볼 수 있습니다." />
	<meta property="og:title" content="Premium RPG ZEUS - 마이페이지" />
    <link rel="canonical" href="https://zeusrpg.kr/mypage/" />
</head>

<body>
<? include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php" ?>

    <!-- Main content -->
<div class="container my-5">
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
        <div class="container">
            <div class="header-body mb-3">
            <div class="row py-3">
                <div class="col-xl-12 col-lg-12 col-md-12 px-5">
                <h1>마이 페이지</h1>
                <p class="text-lead">개인정보를 확인하거나 변경할 수 있습니다.</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-12 mb-5">
                <div class="card shadow bg-secondary border-0 mb-0">
                    <div class="card-header bg-dark">
                        <h5 class="form-text fw-bold text-white">내 정보</h5>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <table class="table table-dark table-striped table-hover align-items-center table-flush mg-table dual-table">
                            <tr>
                                <th>고유번호</th>
                                <td><?=$_SESSION['user_id']?></td>
                                <th>닉네임</th>
                                <td><?=$_SESSION['zeus_nickname']?></td>
                            </tr>
                            <tr>
                                <th>차량번호</th>
                                <td><?=$identity['registration']?></td>
                                <th>전화(계좌)번호</th>
                                <td><?=$identity['phone']?></td>
                            </tr>
                            <tr>
                                <th>등급</th>
                                <td><?=myRank($ranking['lv_exp'])?></td>
                                <th>경험치</th>
                                <td><?=number_format($ranking['lv_exp'])?></td>
                            </tr>
                            <tr>
                                <th>소유중인 주택</th>
                                <td colspan="3"><? if ($home == '') {?>없음<?} else {?><?=$home['home']?> (<?=$home['number']?>층)<?}?></td>
                            </tr>
                            <tr>
                                <th>포인트</th>
                                <td colspan="3"><?=number_format($point['point'])?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card shadow bg-secondary border-0 mb-0">
                    <div class="card-header bg-dark">
                        <h5 class="form-text fw-bold text-white">비밀번호 변경하기</h5>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" action="mypage.proc.php" method="post">
                            <div class="form-group mb-5">
                                <span class="form-text h6 fw-bold text-light">현재 비밀번호<span class="text-danger">*</span></span>
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" name="zeus_nowpw" placeholder="비밀번호를 입력하세요." type="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-text h6 fw-bold text-light">변경할 비밀번호<span class="text-danger">*</span></span>
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" name="zeus_pw" placeholder="비밀번호를 입력하세요." type="password">
                                </div>
                                <div class="form-text text-white-50 mini-info">비밀번호는 8자리 이상 문자, 숫자, 특수문자로 구성하여야 합니다.</div>
                            </div>
                            <div class="form-group">
                                <span class="form-text h6 fw-bold text-light">변경할 비밀번호 확인<span class="text-danger">*</span></span>
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" name="zeus_pw2" placeholder="비밀번호를 한번 더 입력하세요" type="password">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary my-4" onclick="changePW('req=changePW&' + $(this.form).serialize());">변경하기</button>
                            </div>
                            <div class="text-center">
                            <!-- <a href="#" class="text-white-50">아이디 찾기</a> | <a href="#" class="text-white-50">비밀번호 찾기</a>  -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

	<? include $_SERVER["DOCUMENT_ROOT"]."/inc/footer.php" ?>

</body>

</html>