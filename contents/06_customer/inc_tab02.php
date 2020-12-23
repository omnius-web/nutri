					<!-- 본문 -->
					<div id="content">
						<div class="area_tab">
							<ul class="tab">
								<li><a href="sub0201.php" id="sub0201">이용약관</a></li>
								<li><a href="sub0202.php" id="sub0202">개인정보처리방침</a></li>
								<li><a href="sub0203.php" id="sub0203">마케팅수신동의</a></li>
							</ul>
						</div>

						<?
						$basename = basename($_SERVER['PHP_SELF']);
						$file_ = explode(".", $basename);				
						?>
						<script type="text/javascript">	
							//menu on						
							$(".area_tab #"+"<?=$file_[0]?>").addClass("on");
						</script>
