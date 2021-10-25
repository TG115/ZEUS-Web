
<? include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php" ?>
	<title>Premium RPG ZEUS - 장비 가이드</title>
	<meta name="description" content="GTA 인생모드(FiveM) 제우스 서버의 개인 장비 시스템을 알아보세요." />
	<meta property="og:description" content="GTA 인생모드(FiveM) 제우스 서버의 개인 장비 시스템을 알아보세요." />
	<meta property="og:title" content="Premium RPG ZEUS - 장비 가이드" />
	<meta property="og:url" content="https://zeusrpg.kr/guide/equips" />
</head>

<body>
<? include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php" ?>
<div class="container my-5">

	<!-- Page Heading/Breadcrumbs -->
	<h1 class="mt-4 mb-3">서버 가이드
	<small>장비 가이드</small>
	</h1>

	<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="https://zeusrpg.kr">Home</a>
	</li>
	<li class="breadcrumb-item active">장비 가이드</li>
	</ol>

	<!-- Content Row -->
	<div class="row">
	<!-- Sidebar Column -->
		<div class="col-lg-3 mb-4">
			<div class="list-group">
			<a href="/guide/howtoplay" class="list-group-item list-group-item-light ">게임 접속 방법</a>
			<a href="/guide/grades" class="list-group-item list-group-item-light ">등급(단계) 가이드</a>
			<a href="/guide/rebirth" class="list-group-item list-group-item-light ">환생 가이드</a>
			<a href="/guide/jobs/" class="list-group-item list-group-item-light ">직업 가이드</a>
			<a href="/guide/equips" class="list-group-item list-group-item-light  active">장비 가이드</a>
			<a href="/guide/accessorys" class="list-group-item list-group-item-light ">장신구 가이드</a>
			<a href="/guide/emblem" class="list-group-item list-group-item-light ">엠블럼 가이드</a>
			<a href="/guide/donation" class="list-group-item list-group-item-light ">마일리지 가이드</a>
			
			</div>
		</div>
		<!-- Content Column -->
		<div class="col-lg-9 mb-4">
			<h2 class="mb-5">장비 가이드</h2>
			<div class="card shadow mb-5"  data-aos="fade-up">
			<h4 class="card-header">개인 장비</h4>
				<div class="card-body">
					<ul>
						<li> 제우스 서버에서는 각 직업마다 고유장비가 존재하며, <kbd>/item</kbd> 또는 <kbd>/아이템</kbd> 명령어를 통해 장착중인 장비를 확인할 수 있습니다.</li>
						<li> 좋은 장비를 장착할수록 작업의 속도가 증가합니다.</li>
						<li> 장비는 아이템 제작을 통해 제작하실 수 있으며, 높은 등급의 장비를 획득하기 위해 장비 강화를 할 수 있습니다. (장착중인 장비만 강화할 수 있습니다.) </li>
						<li> 아이템 제작은 각 등급에 맞는 광물(광부 획득)과 나무 판자(나무꾼 획득)를 이용하여 제작할 수 있습니다.</li>
						<li> 장비는 미장착일 경우, 직업을 얻으면 기본적으로 일반 등급의 장비를 지급합니다.</li>
						<li> 장비 아이템을 장착 시 회수가 불가능하며, 거래 역시 불가능합니다.</li>
						<li> 장비의 등급은 일반 > 철 > 구리 > 은 > 금 > 백금 > 다이아 로 나뉩니다.</li>
						<li> 도굴꾼의 도굴삽, 의료봉사자의 무전기는 고급 장비로 분류됩니다.</li>
						<li>각 직업별 장비의 종류는 다음과 같습니다.</li>
					</ul>
					<table data-aos="fade-right" class="table table-striped w-50 ml-5 text-center shadow">
						<thead>
							<tr>
								<th style="width: 40%">직업</th>
								<th>장비</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>정원사</td>
								<td>예초기</td>
							</tr>
							<tr>
								<td>택배 기사</td>
								<td>장갑</td>
							</tr>
							<tr>
								<td>광부</td>
								<td>곡괭이</td>
							</tr>
							<tr>
								<td>어부</td>
								<td>낚시대</td>
							</tr>
							<tr>
								<td>나무꾼</td>
								<td>도끼</td>
							</tr>
							<tr>
								<td>배달부</td>
								<td>수신기</td>
							</tr>
							<tr>
								<td>심마니</td>
								<td>괭이</td>
							</tr>
							<tr>
								<td>도굴꾼</td>
								<td>도굴삽</td>
							</tr>
							<tr>
								<td>의료봉사자</td>
								<td>무전기</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="card shadow mb-5"  data-aos="fade-up">
				<h4 class="card-header">경험의부적</h4>
				<div class="card-body">
					<ul>
						<li> 경험의 부적을 장착할 시 15분마다 추가 경험치가 지급됩니다.</li>
						<li> 경험의 부적은 정원사 직업을 통해서만 획득할 수 있으며, 강화 시 더 많은 경험치를 획득하실 수 있습니다. (최대 15등급까지 강화 가능)</li>
						<li> 경험의 부적 강화는 각 등급에 맞는 경험의 부적과 돈을 이용하여 강화할 수 있습니다.</li>
						<li> 장착중인 강화의 부적은 <kbd>/item</kbd> 명령어를 통해 개인 장비와 함께 확인하실 수 있습니다.</li>
					</ul>
				</div>
			</div>

			<div class="card shadow mb-5"  data-aos="fade-up">
				<h4 class="card-header">아이템 제작소 및 강화소 위치</h4>
				<div class="card-body">
					<div class="card-text">
						<img src="img/equip1.png" alt="아이템 제작소 및 장비 강화소 위치">
					</div>
				</div>
			</div>
			<div class="card shadow mb-5"  data-aos="fade-up">
				<h4 class="card-header">일반 장비 강화 확률표</h4>
				<div class="card-body">
					<div class="card-text">
						<h5><strong>적용 대상 장비</strong></h5>
						<p>예초기, 장갑, 곡괭이, 낚시대, 도끼, 수신기, 괭이</p>
						<table data-aos="fade-right" class="table table-striped text-center shadow">
							<thead>
								<tr>
								<th style="width: 130px;">강화 등급</th>
									<th><span class="rank_iron">철 등급</span></th>
									<th><span class="rank_bronze">구리 등급</span></th>
									<th><span class="rank_silver">은 등급</span></th>
									<th><span class="rank_gold">금 등급</span></th>
									<th><span class="rank_platinum">백금 등급</span></th>
									<th><span class="rank_diamond">다이아 등급</span></th>
								</tr>
							</thead>
							<tbody>
								<tr><th>필요한 <br>장비강화권</th><td>2개</td><td>4개</td><td>6개</td><td>9개</td><td>12개</td><td>15개</td></tr>
								<tr><th>강화 비용</th><td>2500만원</td><td>5000만원</td><td>1억원</td><td>2.5억원</td><td>5억원</td><td>10억원</td></tr>
								<tr><th style="color:green">성공 확률</th><td>70%</td><td>60%</td><td>50%</td><td>40%</td><td>35%</td><td>30%</td></tr>
								<tr><th style="color:orange">실패 확률</th><td>30%(유지)</td><td>40%(유지)</td><td>50%(유지)</td><td>55%(유지)</td><td>55%(하락)</td><td>50%(하락)</td></tr>
								<tr><th style="color:red">파괴 확률</th><td>0%</td><td>0%</td><td>0%</td><td>5%</td><td>10%</td><td>20%</td></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
			<div class="card shadow mb-5"  data-aos="fade-up">
				<h4 class="card-header">고급 장비 강화 확률표</h4>
				<div class="card-body">
					<div class="card-text">
						<h5><strong>적용 대상 장비</strong></h5>
						<p>도굴삽, 무전기</p>
						<table data-aos="fade-right" class="table table-striped text-center shadow">
							<thead>
								<tr>
								<th style="width: 130px;">강화 등급</th>
									<th><span class="rank_iron">철 등급</span></th>
									<th><span class="rank_bronze">구리 등급</span></th>
									<th><span class="rank_silver">은 등급</span></th>
									<th><span class="rank_gold">금 등급</span></th>
									<th><span class="rank_platinum">백금 등급</span></th>
									<th><span class="rank_diamond">다이아 등급</span></th>
								</tr>
							</thead>
							<tbody>
								<tr><th>필요한 <br>고급장비강화권</th><td>2개</td><td>4개</td><td>6개</td><td>9개</td><td>12개</td><td>15개</td></tr>
								<tr><th>강화 비용</th><td>2500만원</td><td>5000만원</td><td>1억원</td><td>2.5억원</td><td>5억원</td><td>10억원</td></tr>
								<tr><th style="color:green">성공 확률</th><td>70%</td><td>60%</td><td>50%</td><td>40%</td><td>35%</td><td>30%</td></tr>
								<tr><th style="color:orange">실패 확률</th><td>30%(유지)</td><td>40%(유지)</td><td>50%(유지)</td><td>60%(유지)</td><td>65%(하락)</td><td>70%(하락)</td></tr>
								<tr><th style="color:red">파괴 확률</th><td>0%</td><td>0%</td><td>0%</td><td>0%</td><td>0%</td><td>0%</td></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="card shadow mb-5"  data-aos="fade-up">
				<h4 class="card-header">경험의 부적 강화 확률표</h4>
				<div class="card-body">
					<div class="card-text">
						<h5><strong>적용 대상 장비</strong></h5>
						<p>경험의 부적</p>
						
						<table data-aos="fade-right" class="table table-striped text-center border-bottom shadow">
							<thead>
								<tr><th style="width: 130px;">강화 등급</th><th>+1</th><th>+2</th><th>+3</th><th>+4</th><th>+5</th></tr>
							</thead>
							<tbody>
								<tr><th>경험치 <br>효과(15분)</th><td>+50</td><td>+80</td><td>+120</td><td>+160</td><td>+200</td></tr>
								<tr><th>필요한 부적</th><td>1개</td><td>2개</td><td>3개</td><td>4개</td><td>5개</td></tr>
								<tr><th>강화 비용</th><td>2000만원</td><td>3500만원</td><td>6000만원</td><td>9000만원</td><td>1억 5천만원</td></tr>
								<tr><th style="color:green">성공 확률</th><td>90%</td><td>80%</td><td>70%</td><td>60%</td><td>50%</td></tr>
								<tr><th style="color:orange">실패 확률</th><td>10%(유지)</td><td>20%(유지)</td><td>30%(유지)</td><td>40%(유지)</td><td>50%(유지)</td></tr>
								<tr><th style="color:red">파괴 확률</th><td>0%</td><td>0%</td><td>0%</td><td>0%</td><td>0%</td></tr>
							</tbody>
						</table>
						<table data-aos="fade-right" class="table table-striped text-center border-bottom shadow">
							<thead>
								<tr><th style="width: 130px;">강화 등급</th><th>+6</th><th>+7</th><th>+8</th><th>+9</th><th>+10</th></tr>
							</thead>
							<tbody>
								<tr><th>경험치 <br>효과(15분)</th><td>+250</td><td>+300</td><td>+400</td><td>+600</td><td>+1000</td></tr>
								<tr><th>필요한 부적</th><td>6개</td><td>7개</td><td>8개</td><td>9개</td><td>10개</td></tr>
								<tr><th>강화 비용</th><td>2억원</td><td>3억원</td><td>5억원</td><td>8억원</td><td>12억원</td></tr>
								<tr><th style="color:green">성공 확률</th><td>45%</td><td>40%</td><td>35%</td><td>30%</td><td>25%</td></tr>
								<tr><th style="color:orange">실패 확률</th><td>55%(유지)</td><td>60%(유지)</td><td>65%(하락)</td><td>70%(하락)</td><td>70%(하락)</td></tr>
								<tr><th style="color:red">파괴 확률</th><td>0%</td><td>0%</td><td>0%</td><td>0%</td><td>5%</td></tr>
							</tbody>
						</table>
						<table data-aos="fade-right" class="table table-striped text-center border-bottom shadow">
							<thead>
								<tr><th style="width: 130px;">강화 등급</th><th>+11</th><th>+12</th><th>+13</th><th>+14</th><th>+15</th></tr>
							</thead>
							<tbody>
								<tr><th>경험치 <br>효과(15분)</th><td>+2000</td><td>+4000</td><td>+7000</td><td>+10000</td><td>+15000</td></tr>
								<tr><th>필요한 부적</th><td>11개</td><td>12개</td><td>13개</td><td>14개</td><td>15개</td></tr>
								<tr><th>강화 비용</th><td>17억원</td><td>23억원</td><td>30억원</td><td>38억원</td><td>50억원</td></tr>
								<tr><th style="color:green">성공 확률</th><td>25%</td><td>25%</td><td>25%</td><td>20%</td><td>20%</td></tr>
								<tr><th style="color:orange">실패 확률</th><td>70%(하락)</td><td>70%(하락)</td><td>70%(하락)</td><td>70%(하락)</td><td>70%(하락)</td></tr>
								<tr><th style="color:red">파괴 확률</th><td>5%</td><td>5%</td><td>5%</td><td>10%</td><td>10%</td></tr>
							</tbody>
						</table>
					</div>
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