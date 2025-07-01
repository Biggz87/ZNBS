			<div id="sliderWrapper">
				<div class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#screenshot-carousel" data-slide-to="1"></li>
						<li data-target="#screenshot-carousel" data-slide-to="2"></li>
						<li data-target="#screenshot-carousel" data-slide-to="3"></li>
					</ol>

					<div class="carousel-inner" role="listbox">
		
		                    <?php 
								$sql="SELECT `itemrid`, `header1`, `header2`, `header_3`, `Image`, `Published?` FROM `carausel` WHERE `Published?`='Yes'";
								$q1=mysqli_query($conn,$sql)or die(mysqli_error());


								 $count=0;
								while ($row5 = mysqli_fetch_array($q1)) {
                                $count++;
								
								?>
					
						<div class="carousel-item <?php if($count==1){?>active <?php } ?> >">
							<div class="banner d-block w-100 overlay-black" style="background-image: url(Admin/images/<?php echo $row5['Image'];?>)"></div>
							<div class="carousel-caption">
								<h2 class="display-2 animated fadeInDown" style="animation-delay: 1s"><?php echo $row5['header1'];?> <span><?php echo $row5['header2'];?></span></h2>
								<h3 class="display-4 animated fadeInUp" style="animation-delay: 2s"><?php echo $row5['header_3'];?></h3>
								<p><a href="#contact-us" class="display-4 animated zoomIn" style="animation-delay: 3s">Contact Us</a></p>
							</div><!--end carousel-->
						</div><!--end item-->
						
								<?php } ?>
					</div><!-- End Carousel inner -->
					<a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div><!-- End Carousel -->
				
				<div class="carousel-btn-grid">
					<a href="#contact-us"><div class="carousel-btn"><div class="fa fa-comments-o"></div><span>Contact Us</span></div></span></a>
					<a href="#contact-us"><div class="carousel-btn"><div class="fa fa-money"></div><span>Tariff Guide</span></div></a>
					<a href="#contact-us"><div class="carousel-btn"><div class="fa fa-comment"></div><span>Feedback</span></div></a>
					<a href="https://www.facebook.com/Zambia-National-Building-Society-155197338006117" target="_blank"><div class="carousel-btn"><div class="fa fa-facebook-square"></div><span>Facebook</span></div></a>
					<a href="https://www.twitter.com/societyzambia" target="_blank"><div class="carousel-btn"><div class="fa fa-twitter-square"></div><span>Twitter</span></div></a>
					<a href="https://www.linkedin.com/company/zambia-national-building-society" target="_blank"><div class="carousel-btn"><div class="fa fa-linkedin-square"></div><span>Linkedin</span></div></a>
					<a data-toggle="modal" href="" data-target="#youtube"><div class="carousel-btn"><div class="fa fa-youtube-play"></div><span>YouTube</span></div></a>
				</div><!--end carousel-btns-->
			</div><!--end sliderWrapper-->