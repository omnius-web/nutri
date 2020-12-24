<?php include_once($_SERVER["DOCUMENT_ROOT"].'/front/top_sub.php'); ?>
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/front/header.php'); ?>
<?php
var_dump($_POST);
?>
		<form class="" action="http://nutribox.co.kr/contents/01_inspect/sub01.php" method="post">

			<input type="submit" name="" value="submit">
			<section id="container">
				<!-- 본문 -->
				<div id="content" class="inspect">
					<div class="inspect_top">
						<div class="inr">
							<ul>
								<li class="om_inspect_top_li top01 on">
									<a href="#"></a>
									<span class="om_qs_top_tit">1. 에너지&middot;영양</span>
								</li>
								<li class="om_inspect_top_li top02">
									<a href="#"></a>
									<span class="om_qs_top_tit">2. 뇌&middot;호르몬</span>
								</li>
								<li class="om_inspect_top_li top03">
									<a href="#"></a>
									<span class="om_qs_top_tit">3. 면역</span>
								</li>
								<li class="om_inspect_top_li top04">
									<a href="#"></a>
									<span class="om_qs_top_tit">4. 소화 흡수</span>
								</li>
								<li class="om_inspect_top_li top05">
									<a href="#"></a>
									<span class="om_qs_top_tit">5. 심혈관 순환계</span>
								</li>
								<li class="om_inspect_top_li top06">
									<a href="#"></a>
									<span class="om_qs_top_tit">6. 독소 관리 기능</span>
								</li>
								<li class="om_inspect_top_li top07">
									<a href="#"></a>
									<span class="om_qs_top_tit">7. 근육/뼈/관절</span>
								</li>
								<li class="om_inspect_top_li top08" data-qs2="2">
									<a href="#"></a>
									<span class="om_qs_top_tit">8. 환경 조건</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="mail">
						<input type="text" name="email" id="" placeholder="검사 결과를 안내해드릴 이메일 주소를 입력하세요.">
					</div>
					<div class="list qs_on" data-qs1="1">
						<?php include_once($_SERVER["DOCUMENT_ROOT"].'/contents/qs/qs1.php'); ?>
					</div>
					<div class="list">
						<?php include_once($_SERVER["DOCUMENT_ROOT"].'/contents/qs/qs2.php'); ?>
					</div>
					<div class="list">
						<?php include_once($_SERVER["DOCUMENT_ROOT"].'/contents/qs/qs3.php'); ?>
					</div>
					<div class="list">
						<?php include_once($_SERVER["DOCUMENT_ROOT"].'/contents/qs/qs4.php'); ?>
					</div>
					<div class="list">
						<?php include_once($_SERVER["DOCUMENT_ROOT"].'/contents/qs/qs5.php'); ?>
					</div>
					<div class="list">
						<?php include_once($_SERVER["DOCUMENT_ROOT"].'/contents/qs/qs6.php'); ?>
					</div>
					<div class="list">
						<?php include_once($_SERVER["DOCUMENT_ROOT"].'/contents/qs/qs7.php'); ?>
					</div>
					<div class="list">
						<?php include_once($_SERVER["DOCUMENT_ROOT"].'/contents/qs/qs8.php'); ?>
					</div>
					<div class="individual_info list2">
						<?php include_once($_SERVER["DOCUMENT_ROOT"].'/contents/qs/qs9.php'); ?>
					</div>
					<div class="btn">
						<ul>
							<li class="btn01 om_qs_bt_prev"><input type="button" value="이 전"></li>
							<li class="btn02 om_qs_bt_next"><p>세포 건강을 위한 첫걸음, 끝까지 Go Go!</p><input type="button" value="다 음"></li>
						</ul>
					</div>
				</div>
				<!-- //본문 -->
			</section>

		</form>

			<script type="text/javascript">
			$(function(){
				if($('.qs_on').data('qs1')!=='1'){
					$('.om_qs_bt_prev').css('display','inline-block');
				}
				if($('.qs_on').data('qs1')=='1'){
					$('.om_qs_bt_prev').css('display','none');
				}
			});
			$('.om_qs_bt_next').click(function(){
				if($('.on').data('qs2')=='2'){
					$('.on').addClass('on_last');
					$('.om_inspect_top_li').children('.om_qs_top_tit').removeClass('om_qs_top_tit').addClass('om_qs_top_tit_none');
					$('.om_inspect_top_li').addClass('on');
					$('.top08').children('.om_qs_top_tit_none').removeClass('om_qs_top_tit_none').addClass('om_qs_top_tit');
					$('.om_qs_top_tit').text('100%');
				} else {
					$('.on').removeClass('on').next().addClass('on');
				}

				$('.qs_on').removeClass('qs_on').next().addClass('qs_on');

				if($('.qs_on').data('qs1')!=='1'){
					$('.mail input').css('display','none');
					$('.om_qs_bt_prev').css('display','inline-block');
				}
				if($('.qs_on').data('qs1')=='1'){
					$('.mail input').css('display','inline-block');
					$('.om_qs_bt_prev').css('display','none');
				}
				$('html, body').stop().animate({scrollTop: 0}, 300);

			});

			$('.om_qs_bt_prev').click(function(){
				if($('.on_last').data('qs2')=='2'){
					$('.om_inspect_top_li').children('.om_qs_top_tit_none').removeClass('om_qs_top_tit_none').addClass('om_qs_top_tit');
					$('.om_inspect_top_li').removeClass('on');
					$('.top08').addClass('on');
					$('.on').removeClass('on_last');
					$('.top08').children('.om_qs_top_tit').text('8. 환경 조건');
				} else {
					$('.on').removeClass('on').prev().addClass('on');
				}
				$('.qs_on').removeClass('qs_on').prev().addClass('qs_on');
				// $('.on').removeClass('on').prev().addClass('on');
				if($('.qs_on').data('qs1')!=='1'){
					$('.mail input').css('display','none');
					$('.om_qs_bt_prev').css('display','inline-block');
				}
				if($('.qs_on').data('qs1')=='1'){
					$('.mail input').css('display','inline-block');
					$('.om_qs_bt_prev').css('display','none');
				}
				$('html, body').stop().animate({scrollTop: 0}, 300);
			});

			</script>

			<?php include_once($_SERVER["DOCUMENT_ROOT"].'/front/footer.php'); ?>
