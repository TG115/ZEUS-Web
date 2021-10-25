<?
    if (!isset($_SESSION)) session_start();
    if (!isset($_SESSION['zeus_id'])) {
        echo '<script>alert("로그인 후 이용하실 수 있습니다."); location.href="/login";</script>';
    }
    include_once $_SERVER["DOCUMENT_ROOT"]."/point/pointshop.proc.php";
?>

<? include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php" ?>
	<title>Premium RPG ZEUS - 포인트 상점</title>
    <meta name="description" content="포인트를 이용하여 GTA 인생모드(FiveM) 제우스 서버 플레이에 도움이 되는 다양한 아이템을 구매할 수 있습니다." />
	<meta property="og:description" content="포인트를 이용하여 GTA 인생모드(FiveM) 제우스 서버 플레이에 도움이 되는 다양한 아이템을 구매할 수 있습니다." />
	<meta property="og:title" content="Premium RPG ZEUS - 포인트 상점" />
</head>

<body>
<? include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php" ?>

    <!-- Main content -->
<div class="container my-5">
	<!-- Header -->
	<div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
        <div class="container">
            <div class="header-body mb-3">
                <div class="row py-3">
                    <div class="col-xl-12 col-lg-12 col-md-12 px-5">
                        <h1>포인트 상점</span></h1>
                    
                    </div>
                </div>
            </div>
            <div class="card mb-5 border-secondary">
                <div class="card-header bg-secondary text-white">
                    <h4>내 포인트 : <span class=""><?= number_format(SQL_myPoint($_SESSION['user_id']))?></h4>
                </div>
                <div class="card-body">
                    <p class="text-lead">획득한 포인트로 다양한 아이템을 구매하실 수 있습니다!</p>
                    <p class="text-lead">구매 내역은 <a href="/mypage/buylog">아이템 구매내역</a>에서 통해 확인하실 수 있습니다.</p>
                    <p class="text-lead">구매한 아이템은 게임 내 <strong>휴대폰[k] > 관리 > 내 선물함</strong> 을 통해 수령하실 수 있습니다.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Page content -->
    <div class="container">
        <div class="row">

        <div class="col-lg-4 mb-4">
                <form autocomplete="off">
                    <input type="hidden" name="itemname" value="일반 귀환서">
                    <div class="card h-100 shadow">
                        <h3 class="card-header">일반 귀환서 <span class="badge bg-danger rounded-pill text-white">NEW</span></h3>
                        
                        <div class="card-body">
                            <div class="h4"><?=number_format(getItemInfo("일반 귀환서")['price'])?> 포인트</div>
                            <div class="font-italic">1개당 가격</div>
                        </div>
                        <ul class="list-group list-group-flush">
                            
                            <li class="list-group-item" style="height:300px">주요 장소로 이동할 수 있는 귀환서<br>
                                <div class="alert alert-info mt-2" role="alert">
                                <strong>[이동 가능 장소]</strong><br>
                                - 메인차고<br>
                                - 시청<br>
                                - 아이템 제작/강화소<br>
                                - 프리미엄 랜덤박스 교환소<br>
                                - 카지노 입구
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="tel" value=1 name="amount">
                                    <div class="input-group-append">
                                        <span class="input-group-text">개</span>
                                    </div>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary" onclick="fAjax($(this.form).serializeArray())">구매하기</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>

            <div class="col-lg-4 mb-4">
                <form autocomplete="off">
                    <input type="hidden" name="itemname" value="고급 귀환서">
                    <div class="card h-100 shadow">
                        <h3 class="card-header">고급 귀환서 <span class="badge bg-danger rounded-pill text-white">NEW</span></h3>
                        <div class="card-body">
                            <div class="h4"><?=number_format(getItemInfo("고급 귀환서")['price'])?> 포인트</div>
                            <div class="font-italic">1개당 가격</div>
                        </div>
                        <ul class="list-group list-group-flush">
                            
                            <li class="list-group-item" style="height:300px">주요 장소로 이동할 수 있는 귀환서<br>
                                <div class="alert alert-info mt-2" role="alert">
                                <strong>[이동 가능 장소]</strong><br>
                                - 메인차고<br>
                                - 시청<br>
                                - 아이템 제작/강화소<br>
                                - 프리미엄 랜덤박스 교환소<br>
                                - 카지노 입구<br>
                                - 좀비 사냥터 및 무기상점<br>
                                - 각종 직업 설정 위치
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="tel" value=1 name="amount">
                                    <div class="input-group-append">
                                        <span class="input-group-text">개</span>
                                    </div>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary" onclick="fAjax($(this.form).serializeArray())">구매하기</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
            
            <div class="col-lg-4 mb-4">
                <form autocomplete="off">
                    <input type="hidden" name="itemname" value="마일리지">
                    <div class="card h-100 shadow">
                        <h3 class="card-header">마일리지</h3>
                        <div class="card-body">
                            <div class="h4"><?=number_format(getItemInfo("마일리지")['price'])?> 포인트</div>
                            <div class="font-italic">1개당 가격</div>
                        </div>
                        <ul class="list-group list-group-flush">
                            
                            <li class="list-group-item" style="height:300px">다양한 용도로 활용할 수 있는 게임 재화</li>
                            <li class="list-group-item">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="tel" value=1 name="amount">
                                    <div class="input-group-append">
                                        <span class="input-group-text">개</span>
                                    </div>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary" onclick="fAjax($(this.form).serializeArray())">구매하기</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>

            <div class="col-lg-4 mb-4">
                <form autocomplete="off">
                    <input type="hidden" name="itemname" value="로얄 큐브">
                    <div class="card h-100 shadow">
                        <h3 class="card-header">로얄 큐브</h3>
                        <div class="card-body">
                            <div class="h4"><?=number_format(getItemInfo("로얄 큐브")['price'])?> 포인트</div>
                            <div class="font-italic">1개당 가격</div>
                        </div>
                        <ul class="list-group list-group-flush">
                            
                            <li class="list-group-item" style="height:100px">철 ~ 다이아 엠블럼의 옵션을 재조정 하는 큐브, 럭셔리 큐브의 재료 아이템</li>
                            <li class="list-group-item">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="tel" value=1 name="amount">
                                    <div class="input-group-append">
                                        <span class="input-group-text">개</span>
                                    </div>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary" onclick="fAjax($(this.form).serializeArray())">구매하기</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>

            <div class="col-lg-4 mb-4">
                <form autocomplete="off">
                    <input type="hidden" name="itemname" value="후원 박스">
                    <div class="card h-100 shadow">
                        <h3 class="card-header">후원 박스</h3>
                        <div class="card-body">
                            <div class="h4"><?=number_format(getItemInfo("후원 박스")['price'])?> 포인트</div>
                            <div class="font-italic">1개당 가격</div>
                        </div>
                        <ul class="list-group list-group-flush">
                            
                            <li class="list-group-item" style="height:100px">한정 헬기, 한정 바이크, 스페셜 코인 등 다양한 고급 아이템을 뽑아볼 수 있는 박스!</li>
                            <li class="list-group-item">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="tel" value=1 name="amount">
                                    <div class="input-group-append">
                                        <span class="input-group-text">개</span>
                                    </div>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary" onclick="fAjax($(this.form).serializeArray())">구매하기</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>

            <div class="col-lg-4 mb-4">
                <form autocomplete="off">
                    <input type="hidden" name="itemname" value="스페셜 코인">
                    <div class="card h-100 shadow">
                        <h3 class="card-header">스페셜 코인</h3>
                        <div class="card-body">
                            <div class="h4"><?=number_format(getItemInfo("스페셜 코인")['price'])?> 포인트</div>
                            <div class="font-italic">1개당 가격</div>
                        </div>
                        <ul class="list-group list-group-flush">
                            
                            <li class="list-group-item" style="height:100px">게임 내 코인상점 이용에 필요한 재화</li>
                            <li class="list-group-item">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="tel" value=1 name="amount">
                                    <div class="input-group-append">
                                        <span class="input-group-text">개</span>
                                    </div>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary" onclick="fAjax($(this.form).serializeArray())">구매하기</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>

            <div class="col-lg-4 mb-4">
                <form autocomplete="off">
                    <input type="hidden" name="itemname" value="다이아 장비 선택권">
                    <div class="card h-100 shadow">
                        <h3 class="card-header">다이아 장비 선택권</h3>
                        <div class="card-body">
                            <div class="h4"><?=number_format(getItemInfo("다이아 장비 선택권")['price'])?> 포인트</div>
                            <div class="font-italic">1개당 가격</div>
                        </div>
                        <ul class="list-group list-group-flush">
                            
                            <li class="list-group-item" style="height:100px">다이아 일반 장비 (장갑, 곡괭이, 예초기, 도끼, 수신기, 괭이) 중 하나의 장비를 선택할 수 있다.</li>
                            <li class="list-group-item">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="tel" value=1 name="amount">
                                    <div class="input-group-append">
                                        <span class="input-group-text">개</span>
                                    </div>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary" onclick="fAjax($(this.form).serializeArray())">구매하기</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>

            <div class="col-lg-4 mb-4">
                <form autocomplete="off">
                    <input type="hidden" name="itemname" value="백금 장신구 선택권">
                    <div class="card h-100 shadow">
                        <h3 class="card-header">백금 장신구 선택권</h3>
                        <div class="card-body">
                            <div class="h4"><?=number_format(getItemInfo("백금 장신구 선택권")['price'])?> 포인트</div>
                            <div class="font-italic">1개당 가격</div>
                        </div>
                        <ul class="list-group list-group-flush">
                            
                            <li class="list-group-item" style="height:100px">백금 장신구 (반지, 목걸이, 귀고리, 팔찌, 뱃지) 중 하나의 장신구를 선택할 수 있다.</li>
                            <li class="list-group-item">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="tel" value=1 name="amount">
                                    <div class="input-group-append">
                                        <span class="input-group-text">개</span>
                                    </div>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary" onclick="fAjax($(this.form).serializeArray())">구매하기</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>

            
        </div>
    </div>
    <!-- /.container -->
</div>

	<? include $_SERVER["DOCUMENT_ROOT"]."/inc/footer.php" ?>

<script>
    function fAjax(frm) {
		if (document.xhr) {
            alert("구매 진행중입니다."); 
            return;
        }

        var itemname = frm[0].value;
        var amount = frm[1].value;

        if (confirm("[" + itemname + "] " + amount +"개를 정말 구매하시겠습니까?")) {
            document.xhr = $.ajax({
                url: 'pointshop.proc.php',
                type: 'post',
                data: "req=buy&itemname=" + itemname + "&amount=" + amount,
                dataType: 'json',
                success: function (r) {
                    console.log(r);
                    switch (r.state) {
                        case 'success':
                            alert(r.arr.price + "포인트를 사용하여 \n[" + r.arr.itemname + "] " + r.arr.amount + "개를 구입하였습니다.");
                            location.reload();
                        break;
                        default:
                            if (r.state) alert(r.state);
                        break;
                    }
                },
                error: function (request, status, error) {
                    console.warn(request, status, error);
                },
                complete: function () {
                    document.xhr = false;
                }
            });
        }
	}
</script>
</body>

</html>