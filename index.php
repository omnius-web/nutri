<?php
include_once($_SERVER["DOCUMENT_ROOT"].'/common.php');
include_once($_SERVER["DOCUMENT_ROOT"].'/config.php');
include_once($_SERVER["DOCUMENT_ROOT"].'/front/top.php');
include_once($_SERVER["DOCUMENT_ROOT"].'/front/header.php');
?>



			<!-- popup -->
			<div id="popLayer01" style="display:none;">
				<div class="popbox">
					<h1><img src="/images/common/logo.png" alt="뉴트리톡스"/></h1>
					<h3>나의 세포유형은?</h3>
					<p>세포 건강 상태와 위험요소를 알려드립니다.</p>
					<ul class="link_box">
						<li><a href="#">총 검사시간은 10분 내외입니다.</a></li>
						<li><a href="#">천천히 신중하게 체크하셔도 됩니다.</a></li>
					</ul>
					<ul>
						<li><i>연구진</i> <span>성상엽 의학 박사&middot;문용 의학박사&middot;이상철 약학박사</span></li>
						<li><i>특허명</i> <span>토탈 라이프 스타일 개선 디바이스 방법 및 컴퓨터 프로그램(특허번호 제10-2022628호)</span></li>
					</ul>
					<a href="/contents/01_inspect/sub01.php" class="btn">시작하기</a>
				</div>
			</div>

			<!-- //popup -->

			<!-- visual -->
			<div class="area_visual">
				<div class="inr">
					<div class="visual_txt">
						<span>나의 세포상태는?</span>
						<h2>내 몸이 건강하지 않다고 느끼면, <em>가장 근본적인 세포상태부터 체크해보세요!</em></h2>
						<ul>
							<li><i>연구진</i> 성상엽 의학박사 &middot; 문용 의학박사 &middot; 이상철 약학박사</li>
							<li><i>특허명</i> 토탈 라이프 스타일 개선 디바이스 방법 및 컴퓨터 프로그램(특허번호 제10-2022628호)</li>
						</ul>
						<a href="#" id="pop_btn"><span>검사 시작</span></a>
						<img src="/images/main/img_graph.png" alt="세포상태 그래프" class="pc_graph">
					</div>
				</div>
			</div>
			<!-- //visual -->

			<section id="container">
				<!-- 본문 -->
				<div id="content">
					<div class="condition">
						<div class="inr">
							<img src="/images/main/img_graph_m.png" alt="세포상태 그래프" class="m_graph">
							<ul class="list">
								<li><div class="red"><p>에너지 &middot; 영양</p></div></li>
								<li><div class="orange"><p>근육 &middot; 뼈 &middot; 관절</p> <p>독소 관리 기능</p> <p>면역</p></div></li>
								<li><div class="yellow"><p>심혈관 순환계</p> <p>환경조건</p> <p>뇌 &middot; 호르몬</p> <p>소화흡수</p></div></li>
							</ul>
							<ul class="division">
								<li><div class="red"><p>심각</p></div></li>
								<li><div class="orange"><p>관리</p></div></li>
								<li><div class="yellow"><p>주의</p></div></li>
								<li><div class="green"><p>좋음</p></div></li>
							</ul>
						</div>
					</div>

					<div class="check">
						<div class="inr">
							<div class="tit">
								<h3>어떤 사람이 세포 건강을 <i>체크해야 하나요?</i></h3>
								<p>생활 속 작은 불편함도 의학적으로 ‘미병’ 상태입니다.<p>
								<span><i class="st">* 미병</i> 질병의 전 단계로, <i class="line">노화와 질병으로 이어집니다.</i></span>
							</div>
							<ul class="scroll_up">
								<li class="check01"><p>집중력부족</p></li>
								<li class="check02"><p>수면장애</p></li>
								<li class="check03"><p>염증</p></li>
								<li class="check04"><p>피로감</p></li>
								<li class="check05"><p>무기력감</p></li>
								<li class="check06"><p>통증</p></li>
								<li class="check07"><p>암</p></li>
							</ul>
							<a href="#"><span>검사 시작</span></a>
						</div>
					</div>

					<div class="result">
						<div class="inr">
							<div class="tit">
								<h3>홍길동 님의 검사 결과</h3>
							</div>
							<p class="txt">당신은 <span>지쳐있는 편식쟁이 햄스터</span> 입니다. <i>피곤 &middot; 어지러움 &middot; 근력 약화 &middot; 업무 중 급격한 체력 소모 &middot; 생리불순 &middot; 피부 트러블 &middot; 혓바늘 등</i></p>
							<div class="btn"><p>에너지 &middot; 영양 <i>심각</i></p></div>
							<span class="img">
								<img src="/images/main/img_hamster.png" alt="지쳐있는 편식쟁이 햄스터" />
							</span>
						</div>
					</div>

					<div class="recommend">
						<div class="inr">
							<h3>세포 유형 검사를 통해 <p class="scroll_up"><span>1,020명이</span> 건강 개선 방법을 추천받았습니다.</p></h3>
						</div>
					</div>

					<div class="new_box">
						<div class="inr">
							<div class="tit">
								<h3>내몸에 꼭 맞춘 <p>세포영양필수품, 뉴트리박스</p></h3>
								<span>단 10여 분의 검사로 170여 가지 파이토뉴트리언트를 배합한 <i>내 몸에 꼭 필요한 세포 영양 에센스 선정</i></span>
							</div>
						</div>
					</div>

					<div class="nutrient">
						<div class="inr">
							<div class="img">
								<img src="/images/main/img_nutrient.png" alt="CBD 기초 세포 회복 에센스" />
							</div>
							<div class="txt">
								<h3>
									<span>권장세포영양소</span>
									홍길동님은 <p>파이토카나비노이드 섭취를 권장합니다.</p>
								</h3>
								<div class="sub">
									<div class="box">
										<p>뉴트리박스 ‘CBD 기초 세포영양 오일’ <i>당신의 건강문제를 해결하는 첫 열쇠가 됩니다.</i></p>
										<ul>
											<li>#의학계 추천 고함량 신경전달물질</li>
											<li>#치매 예방 #산화노화방지 #활력 #집중력 #면역력</li>
											<li>#정식통관제품</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="review">
						<div class="inr">
							<ul class="scroll_up">
								<li class="review01">
									<div>
										<p>“탄수화물 섭취는 줄이고 뉴트리박스로 대체했어요. <i>덜 먹는데도 오히려 활기가 넘치고 식곤증이 사라졌어요.”</i></p>
										<span>뉴트리박스 일주일 이용자 sekko****</span>
									</div>
								</li>
								<li class="review02">
									<div>
										<p>“집중할 수 있는 시간이 눈에 띄게 길어졌어요.”</p>
										<span>뉴트리박스 한달 이용자 hero****</span>
									</div>
								</li>
								<li class="review03">
									<div>
										<p>“가족 전부 다 영양제들을 끊고 개인별 뉴트리박스로 대체했습니다.”</p>
										<span>뉴트리박스 가족 이용자 90*****</span>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<div class="verification">
						<div class="inr">
							<ul>
								<li>
									<div>
										<img src="/images/main/img_verification01.jpg" alt="좋은 영양소" />
										<p>아무리 좋은 영양제도 내 몸에 필요한 것이 아니면 오히려 독소로 작용합니다.</p>
									</div>
								</li>
								<li>
									<div>
										<img src="/images/main/img_verification02.jpg" alt="뉴트리박스" />
										<p>뉴트리박스는 과학적 분석으로 내게 꼭 필요한 메디푸드를 추천해줍니다.</p>
									</div>
								</li>
							</ul>
							<div class="report">
								<img src="/images/main/img_report.png" alt="인체적용시험결과보고서" />
								<p>뉴트리박스의 세포검사와 섭취요법은 <span>의학적으로 검증된 방법입니다.</span></p>
							</div>
						</div>
					</div>

					<div class="graph">
						<div class="inr">
							<ul>
								<li>
									<div>
										<img src="/images/main/img_graph01.jpg" alt="콜레스테롤 감소" />
									</div>
								</li>
								<li>
									<div>
										<img src="/images/main/img_graph02.jpg" alt="유해원소(중금속) 감소" />
									</div>
								</li>
								<li>
									<div>
										<img src="/images/main/img_graph03.jpg" alt="산화스트레스 감소" />
									</div>
								</li>
								<li>
									<div>
										<img src="/images/main/img_graph04.jpg" alt="전반적인 삶의 질 응답 점수 향상" />
									</div>
								</li>
								<li>
									<div>
										<img src="/images/main/img_graph05.jpg" alt="혈당 감소" />
									</div>
								</li>
								<li>
									<div>
										<img src="/images/main/img_graph06.jpg" alt="공복 인슐린 감소" />
									</div>
								</li>
							</ul>
							<div class="hide_list">
								<ul>
									<li>
									<div>
										<img src="/images/main/img_graph07.jpg" alt="체내 염증량 감소" />
									</div>
								</li>
								<li>
									<div>
										<img src="/images/main/img_graph08.jpg" alt="근손실 감소" />
									</div>
								</li>
								<li>
									<div>
										<img src="/images/main/img_graph09.jpg" alt="몸무게 감소" />
									</div>
								</li>
								<li>
									<div>
										<img src="/images/main/img_graph10.jpg" alt="체지방 감소" />
									</div>
								</li>
								</ul>
							</div>
							<button onclick="toggle">더 보기</button>

							<i>* 식단조절을 병행하였습니다.</i>
						</div>
					</div>

					<div class="event">
						<div class="inr">
							<img src="/images/main/img_event.png" alt="오픈기념" />
							<div class="txt">
								<h3>특별이벤트</h3>
								<p>지금 바로 참여하세요</p>
								<a href="#"><span>검사 시작</span></a>
							</div>
						</div>
					</div>

					<div class="free_event">
						<div class="share">
							<p>친구에게 뉴트리박스 공유하기</p>
							<ul>
								<li><a href="#" class="kakao">카카오톡</a></li>
								<li><a href="#" class="facebook">페이스북</a></li>
								<li><a href="#" class="twitter">트위터</a></li>
								<li><a href="#" class="insta">인스타그램</a></li>
								<li><a href="#" class="link_share">공유하기</a></li>
							</ul>
						</div>
					</div>

				</div>
			</section>

			<?php include_once($_SERVER["DOCUMENT_ROOT"].'/front/footer.php'); ?>

			<script type="text/javascript">
				$(function(){
					$("#pop_btn").click(function(){
						$("#popLayer01").show();
					});
				});
			</script>
