
					<!-- lnb -->
					<div class="lnb">
						<h2>고객센터</h2><!-- 
						<a href="#" class="btn_m_lnb">메뉴열림</a> -->
						<ul>
							<li><a href="/contents/06_customer/sub01.php" id="sub01">플러스친구</a></li>
							<li><a href="/contents/06_customer/sub0201.php" id="sub02">약관 및 방침</a></li>
						</ul>
					</div>
					<!-- //lnb -->

			
					<?
					$basename = basename($_SERVER['PHP_SELF']);
					$file_ = explode(".", $basename);
					$common_ = substr($file_[0], 0, 5);
					?>
					<script type="text/javascript">	
						//menu on						
						$("#"+"<?=$common_?>").addClass("on");
										
						//loacation title / tit
						$('.lnb li').each(function(){
							if($(this).children('a').hasClass('on')){
								var loaction = $(this).text();
							}
						});
					</script>