
<? include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php" ?>
	<title>Premium RPG ZEUS - 엠블럼 가이드</title>
	<meta name="description" content="GTA 인생모드(FiveM) 제우스 서버의 엠블럼 시스템을 알아보세요." />
	<meta property="og:description" content="GTA 인생모드(FiveM) 제우스 서버의 엠블럼 시스템을 알아보세요." />
	<meta property="og:title" content="Premium RPG ZEUS - 엠블럼 가이드" />
	<meta property="og:url" content="https://zeusrpg.kr/guide/emblem" />
</head>

<body>
<? include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php" ?>
<div class="container my-5">

	<!-- Page Heading/Breadcrumbs -->
	<h1 class="mt-4 mb-3">서버 가이드
	<small>엠블럼 가이드</small>
	</h1>

	<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="https://zeusrpg.kr">Home</a>
	</li>
	<li class="breadcrumb-item active">엠블럼 가이드</li>
	</ol>
	<div class="row">
		<!-- Sidebar Column -->
		<div class="col-lg-3 mb-4">
			<div class="list-group">
			<a href="/guide/howtoplay" class="list-group-item list-group-item-light ">게임 접속 방법</a>
			<a href="/guide/grades" class="list-group-item list-group-item-light ">등급(단계) 가이드</a>
			<a href="/guide/rebirth" class="list-group-item list-group-item-light ">환생 가이드</a>
			<a href="/guide/jobs/" class="list-group-item list-group-item-light ">직업 가이드</a>
			<a href="/guide/equips" class="list-group-item list-group-item-light">장비 가이드</a>
			<a href="/guide/accessorys" class="list-group-item list-group-item-light ">장신구 가이드</a>
			<a href="/guide/emblem" class="list-group-item list-group-item-light active">엠블럼 가이드</a>
			<a href="/guide/donation" class="list-group-item list-group-item-light ">마일리지 가이드</a>
			
			</div>
		</div>
		<!-- Sidebar Column -->
		<div class="col-lg-9 mb-4">
			<h2 class="mb-5">엠블럼 가이드</h2>
			<div class="card shadow mb-5"  data-aos="fade-up">
				<h4 class="card-header">엠블럼</h4>
				<div class="card-body">
					<ul>
						<li> 제우스 서버에서는 엠블럼이 존재하며, <kbd>/item3</kbd> 또는 <kbd>/엠블럼</kbd> 명령어를 통해 장착중인 엠블럼을 확인할 수 있습니다.</li>
						<li> 엠블럼은 튜토리얼 최종 완료를 통해 얻으실 수 있습니다.(기존 완료하신 분들도 다시 튜토리얼을 선택하시면 획득하실 수 있습니다.)</li>
						<li> 엠블럼에는 특수한 옵션들이 추가로 설정되며, 큐브 사용을 통해 옵션을 변경해 보실 수 있습니다.</li>
						<li> 엠블럼의 등급은 철 > 구리 > 은 > 금 > 백금 > 다이아 > 아다만티움 > 비브라늄 까지 존재하며, 등급이 오를 수록 아래와 같은 옵션 효과가 있습니다.</li>
						<li> 엠블럼의 모든 옵션은 중첩하여 적용 됩니다.</li>
					</ul>
					<table data-aos="fade-right" class="table table-striped border-bottom shadow text-center">
						<thead>
							<tr>
								<th>엠블럼 등급</th>
								<th>효과</th>
								<th>옵션 설정비용</th>
							</tr>
						</thead>
						<tbody>
							<tr><td><span class="rank_iron">철 엠블럼</span></td><td>추가 옵션 1개 (가중치 배수 1)</td><td>0원</td></tr>
							<tr><td><span class="rank_bronze">구리 엠블럼</span></td><td>추가 옵션 2개 (가중치 배수 2, 1)</td><td>500만원</td></tr>
							<tr><td><span class="rank_silver">은 엠블럼</span></td><td>추가 옵션 3개 (가중치 배수 3, 2, 1)</td><td>1000만원</td></tr>
							<tr><td><span class="rank_gold">금 엠블럼</span></td><td>추가 옵션 4개 (가중치 배수 4, 3, 2, 1)</td><td>1500만원</td></tr>
							<tr><td><span class="rank_platinum">백금 엠블럼</span></td><td>추가 옵션 4개 (가중치 배수 5, 4, 3, 2)</td><td>2000만원</td></tr>
							<tr><td><span class="rank_diamond">다이아 엠블럼</span></td><td>추가 옵션 4개 (가중치 배수 6, 5, 4, 3)</td><td>2500만원</td></tr>
							<tr><td><span class="rank_adamantium">아다만티움 엠블럼</span></td><td>추가 옵션 5개 (가중치 배수 6, 5, 4, 3, 2)</td><td>3000만원</td></tr>
							<tr><td><span class="rank_vibranium">비브라늄 엠블럼</span></td><td>추가 옵션 5개 (가중치 배수 7, 6, 5, 4, 3)</td><td>3500만원</td></tr>
						</tbody>
					</table>
				</div>
			</div>
			
			<div class="card shadow mb-5"  data-aos="fade-up">
				<h4 class="card-header">엠블럼 가중치</h4>
				<div class="card-body">
					<ul>
						<li> 가중치란 각 옵션 별 효과의 배수를 의미합니다.</li>
						<li> 예를 들어 A 옵션의 가중치가 3% 이라면, 철 엠블럼에서는 가중치 배수가 1이므로 A 옵션의 최대치가 3% 이지만 금 엠블럼에서는 가중치 배수가 4, 3, 2, 1이므로 A 옵션이 12%, 9%, 6%, 3% 까지 적용될 수 있다는 겁니다!</li>
						<li> 쉽게 말해 높은 등급의 엠블럼일 수록 더 높은 효과를 보실 수 있습니다.</li>
						<li> 또한 2번째 옵션부터는 낮은 확률로 옵션 이탈이 발생하여 각 등급별 최대 단계까지의 가중치 효과가 생길 수 있습니다(!!)</li>
						<li> 예를 들어 정말 운이 좋다면 금 엠블럼 기준 가중치가 모두 4로 설정되면 아이템 획득 확률을 최대 80%까지 효과를 받아볼 수 있다는거죠!</li>
						<li> 엠블럼에서 나오는 효과 및 가중치는 아래와 같습니다.</li>
					</ul>
					<table data-aos="fade-right" class="table table-striped border-bottom shadow text-center">
						<thead>
							<tr>
								<th>효과</th>
								<th>가중치</th>
								<th>비고</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>광물 추가 획득</td>
								<td>5%</td>
								<td></td>
							</tr>
							<tr>
								<td>생선 추가 획득</td>
								<td>5%</td>
								<td></td>
							</tr>
							<tr>
								<td>반짝이는돌 추가 획득</td>
								<td>5%</td>
								<td></td>
							</tr>
							<tr>
								<td>배달부 추가 경험치</td>
								<td>3%</td>
								<td></td>
							</tr>
							<tr>
								<td>통나무 추가 획득</td>
								<td>5%</td>
								<td></td>
							</tr>
							<tr>
								<td>택배 추가 수령</td>
								<td>5%</td>
								<td></td>
							</tr>
							<tr>
								<td>약초 추가 획득</td>
								<td>5%</td>
								<td></td>
							</tr>
							<tr>
								<td>골동품 추가 획득</td>
								<td>5%</td>
								<td></td>
							</tr>
							<tr>
								<td>경험치 주머니 추가 획득</td>
								<td>3%</td>
								<td></td>
							</tr>
							<tr>
								<td>30분마다 추가 월급</td>
								<td>50만원</td>
								<td></td>
							</tr>
							<tr>
								<td>30분마다 랜덤박스 조각</td>
								<td>10개</td>
								<td></td>
							</tr>
							<tr>
								<td>30분마다 배고픔</td>
								<td>1%</td>
								<td>백금 등급 이상 나오지 않는 옵션</td>
							</tr>
							<tr>
								<td>30분마다 목마름</td>
								<td>1%</td>
								<td>백금 등급 이상 나오지 않는 옵션</td>
							</tr>
							<tr>
								<td>30분마다 ZEUS 복권</td>
								<td>1개</td>
								<td>백금 등급 이상 나오지 않는 옵션</td>
							</tr>
							
							<tr>
								<td>장비 강화 비용 회수</td>
								<td>3%</td>
								<td>백금 등급 이상 나오지 않는 옵션</td>
							</tr>
							<tr>
								<td>장신구 강화 비용 회수</td>
								<td>3%</td>
								<td>백금 등급 이상 나오지 않는 옵션</td>
							</tr>
							
							<tr>
								<td>차량 수리 속도 증가</td>
								<td>5%</td>
								<td>백금 등급 이상 나오지 않는 옵션</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="card shadow mb-5"  data-aos="fade-up">
				<h4 class="card-header">큐브</h4>
				<div class="card-body">
					<ul>
						<li> 큐브는 실버 > 골드 > 다이아 > 로얄 > 럭셔리 순으로 존재합니다.</li>
						<li> 큐브의 등급이 높을 수록 엠블럼의 등급 상승확률이 증가합니다.</li>
						<p> - [골드 큐브] : 실버 큐브 등급업 확률의 1.5배</p>
						<p> - [다이아 큐브] : 실버 큐브 등급업 확률의 2배</p>
						<p> - [로얄 큐브] : 실버 큐브 등급업 확률의 3배</p>
						<p> - [럭셔리 큐브] : 실버 큐브 등급업 확률의 3배</p>
					</ul>
					<table data-aos="fade-right" class="table table-striped border-bottom shadow text-center">
						<thead>
							<tr>
								<th style="width: 130px">큐브</th>
								<th style="width: 200px">옵션 설정 가능 등급</th>
								<th>획득 경로</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>실버 큐브</td>
								<td>철 ~ 금 등급</td>
								<td>직업활동 또는 랜덤박스</td>
							</tr>
							<tr>
								<td>골드 큐브</td>
								<td>철 ~ 금 등급</td>
								<td>직업활동 또는 랜덤박스</td>
							</tr>
							<tr>
								<td>다이아 큐브</td>
								<td>철 ~ 백금 등급</td>
								<td>마일리지 상점, 프리미엄 랜덤박스, 아이템 제작(실버큐브 + 골드큐브), 도굴꾼</td>
							</tr>
							<tr>
								<td>로얄 큐브</td>
								<td>철 ~ 다이아 등급</td>
								<td>후원 박스, 스페셜코인 상점, 마일리지 상점, 보물찾기, 각종 이벤트</td>
							</tr>
							<tr>
								<td>럭셔리 큐브</td>
								<td>철 ~ 비브라늄 등급</td>
								<td>아이템 제작(로얄큐브 + 다이아큐브), 각종 이벤트</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

		</div>
	</div>
	<!-- /.row -->

</div>
<!-- /.container -->

    <? include $_SERVER["DOCUMENT_ROOT"]."/inc/footer.php" ?>

</body>
</html>