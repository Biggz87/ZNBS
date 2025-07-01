<!--Designed by Fabian Shamano, www.fabianshamano.com, fabianshamano@yahoo.com-->
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/Dbconnect.php';
include'includes/functions.php';
Include 'includes/SurveyFunctions.php';	
 ?>

	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<title>Zambia National Building Society</title>

		<!-- Bootstrap -->
		<link href="css/owl.carousel.min.css" rel="stylesheet">
		<link href="css/owl.theme.min.css" rel="stylesheet">
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/lightbox.min.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/thumbnail-previews.css" rel="stylesheet">
		<link href="css/color-schemes-white.css" rel="stylesheet">
		<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
		<link rel="icon" type="image/png" href="favicon.png"/>
		
		 <style>
			 #loader .logo-name .letter{
				 opacity: 0;
				 transform: translateX(30px);
				 font-family: 'Bauhaus 93'!important;
			 }
			 
			 #loader .logo-moto .letter{
				 opacity: 0;
				 transform: translateY(30px);
				 font-family: 'Calisto MT';
			 }
			 
			 #loader .loading-gif {
				opacity: 0;
			}

		</style>


	</head>
	
	<body class="remove-anchor-tag">
	
		<div id="loadScreenWrapper">
			<div id="loadScreen">
				<div id="loader">
					<div class="loder-logo display-1">
						<img class="logo-img" src="images/logo-color.jpg">
						<div class="logo-text">
							<div class="logo-name">
								<div class="letter">z</div><div class="letter">a</div><div class="letter">m</div><div class="letter">b</div><div class="letter">i</div><div class="letter">a</div><div class="letter letter-last">n</div> <div class="letter">n</div><div class="letter">a</div><div class="letter">t</div><div class="letter">i</div><div class="letter">o</div><div class="letter">n</div><div class="letter">a</div><div class="letter letter-last">l</div> <div class="letter">b</div><div class="letter">u</div><div class="letter">i</div><div class="letter">l</div><div class="letter">d</div><div class="letter">i</div><div class="letter">n</div><div class="letter letter-last">g</div> <div class="letter">s</div><div class="letter">o</div><div class="letter">c</div><div class="letter">i</div><div class="letter">e</div><div class="letter">t</div><div class="letter">y</div>
							</div>
							<div class="logo-moto">
									<div class="letter">"</div><div class="letter">S</div><div class="letter">h</div><div class="letter">e</div><div class="letter">l</div><div class="letter">t</div><div class="letter">e</div><div class="letter letter-last">r</div> <div class="letter">T</div><div class="letter">h</div><div class="letter">r</div><div class="letter">o</div><div class="letter">u</div><div class="letter">g</div><div class="letter letter-last">h</div> <div class="letter">S</div><div class="letter">a</div><div class="letter">v</div><div class="letter">i</div><div class="letter">n</div><div class="letter">g</div><div class="letter">s</div><div class="letter">"</div>
							</div>
						</div>
						<div class="shimmer"></div>
						<div class="loading-gif"><img src="images/loader.gif"></div>
					</div><br>
				</div>
			</div>
			<script src="js/jquery-3.3.1.min.js"></script>
			<script>
				$('#loader .logo-name .letter').each(function(i){

				  setTimeout(function(){
					$('#loader .logo-name .letter').eq(i).addClass('is-showing');
				  }, (300 * (Math.exp(i * 0.09))) - 300);

				});

				$('#loader .logo-img,#loader .loading-gif').addClass('is-showing');

				$('#loader .logo-moto .letter').each(function(i){

				  setTimeout(function(){
					$('#loader .logo-moto .letter').eq(i).addClass('is-showing');
				  }, (300 * (Math.exp(i * 0.09))) - 300);

				});
				
				
			</script>
    	</div>
		
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			  <a class="navbar-brand" href="#slider">
				<img src="images/logo.png" class="d-inline-block align-top" alt="">
				<div class="logo-caption-wapper">
					<div class="logo-caption">
						<div class="logo-text logo-caption-full">
							<img src="images/logo-caption.png">
							<!--<div class="logo-name">zambian national building society</div>
							<div class="logo-moto"><i>"Shelter Through Savings"</i></div>-->
						</div>

						<div class="logo-text logo-caption-short">
							<img src="images/logo-caption.png">
							<!--<div class="">ZNBS</div>-->
						</div>
					</div>
				</div>
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item active">
					<a class="nav-link" href="#slider">Home <span class="sr-only">(current)</span></a>
				  </li>
					
				  <li class="drop-down nav-item nav-about">
					<a href="#about" class="nav-link drop-down-toggle dropdown-toggle" data-list="tab-1-about">About Us</a>
					<ul class="drop-down-menu">
						<a href="#about" data-list="tab-1-about"><li>About Us</li></a>
						<a href="#about" data-list="tab-1"><li class="middle-list">Mission & Vision</li></a>
						<!--<a href="#about" data-list="tab-2"><li class="middle-list">Board of Directors</li></a>-->
						<a href="#about" data-list="tab-3"><li class="middle-list">Senior Managment</li></a>
						<a href="#about" data-list="tab-4"><li class="middle-list">Background</li></a>
						<!--<a href="#about" data-list="tab-5"><li class="middle-list">Publications & Downloads</li></a>-->
						<a href="#about" data-list="tab-21-main"><li class="middle-list">Procurement</li></a>
					</ul>
				  </li>
						
				
				 <li class="nav-item">
					<a class="nav-link" href="#news">News</a>
				  </li>
				  <li class="drop-down nav-item nav-banking">
					<a href="#banking" class="nav-link drop-down-toggle dropdown-toggle" data-list="tab-6">Banking & Mortgages</a>
					<ul class="drop-down-menu">
						<a href="#banking" data-list="tab-6"><li>Banking</li></a>
						<a href="#banking" data-list="tab-7"><li class="middle-list">Branch Networks</li></a>
						<a href="#banking" data-list="tab-8-account-201"data-toggle="collapse" data-target="#collapseTypesofAccounts"><li class="middle-list">Types of Accounts</li></a>
						<a href="#banking" data-list="tab-6-digital204"><li class="middle-list">Digital Banking</li></a>
						<a href="#banking" data-list="tab-18"><li class="middle-list">Banking Loans</li></a>
						<a href="#banking" data-list="tab-6-Mortgage205"><li class="middle-list">Mortgages</li></a>
						<a href="#banking" data-list="tab-6_survey"><li class="middle-list">Quick Servey</li></a>
					</ul>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#calculators">Calculators</a>
				  </li>
				  <li class="drop-down nav-item nav-property">
					<a class="nav-link drop-down-toggle dropdown-toggle" href="#property" data-list="tab-6">Properties & Estates</a>
					<ul class="drop-down-menu">
						<a href="#property" data-list="tab-6"><li>ZNBS Properties</li></a>
						<a href="#property" data-list="tab-7"><li class="middle-list">Vacant Spaces For Rent</li></a>
						<a href="#property" data-list="tab-8-account-201"><li class="middle-list">Properties Customer Care</li></a>
						<a href="#property" data-list="tab-6-digital204"><li class="middle-list">Office Space Application</li></a>
					</ul>
				  </li>
				  <li class="drop-down nav-item nav-contact-us">
					<a class="nav-link drop-down-toggle dropdown-toggle" href="#contact-us" data-list="tab-30-main">Contact Us</a>
					<ul class="drop-down-menu">
						<a href="#contact-us" data-list="tab-30-main"><li>Contact Us</li></a>
						<a href="#contact-us" data-list="tab-30-feedback"><li class="middle-list">Feedback</li></a>
						<a href="#contact-us" data-list="tab-30-complaint"><li class="middle-list">Complaints</li></a>
						<a href="#contact-us" data-list="tab-30-jobs"><li class="middle-list">Career Oppotunities</li></a>
						<a href="#contact-us" data-list="tab-30-atm"><li class="middle-list">ATM Locator</li></a>
						<a href="#contact-us" data-list="tab-301"><li class="middle-list">Branchs</li></a>
					</ul>
				  </li>
				 <li class="nav-item">
					<a class="nav-link" href="https://onlinebanking.znbs.co.zm/iProfits2/Login.aspx" target="_blank">Login/Register</a>
				  </li>
				</ul>
			  </div>
			</nav>
		</header>
		<?php include 'includes/models.php';?>
		
		<div id="content">
			<section id="slider">
				<?php include 'pages/slider.php'?>
			</section><!--end silder-->

			<section id="about">
				<?php include 'pages/about-us.php'?>		
			</section>

			<section id="news">
				<?php include 'pages/news.php'?>
			</section><!--end news-->

			<section id="banking">
				<?php include 'pages/banking.php'?>
			</section>

			<section id="calculators">
				<?php include 'pages/calculators.php'?>	
			</section>

			<section id="property">
				<?php include'pages/property.php'?>
			</section>

			<section id="contact-us">
				<?php include 'pages/contact-us.php'?>
			</section>

			<section>

				<div id="affiliates" class="owl-carousel owl-theme">

					<div class="affiliate col-md-7">
						<a href="https://nhef.co.zm" target="_blank">
							<img src="images/affiliate-1.jpg">
						</a>
					</div>

					<div class="affiliate col-md-7">
						<a href="https://www.napsa.co.zm" target="_blank">
							<img src="images/affiliate-2.jpg">
						</a>
					</div>

					<div class="affiliate col-md-7" target="_blank">
						<img src="images/affiliate-5.jpg">
					</div>

					<div class="affiliate col-md-7" target="_blank">
						<a href="https://www.makeniheights.com">
							<img src="images/affiliate-3.jpg">
						</a>
					</div>

					<div class="affiliate col-md-7">
						<a href="http://www.thehorizonproperties.com" target="_blank">
							<img src="images/affiliate-4.jpg">
						</a>
					</div>

				</div>

				<div class="col-12 m-0 p-0 map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3846.2572022379486!2d28.28026641485012!3d-15.4166633892869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1940f358d0d526b9%3A0x4bd43665f8e204cd!2sZambia%20National%20Building%20Society%20Lusaka!5e0!3m2!1sen!2szm!4v1592914482178!5m2!1sen!2szm" width="600" height="900" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</section>

			<section>
				<div id="footer">
					<div class="row">
						<div class="col-md-4">
							<p>copyright Zambia National Building Society<br>
							</p>
						</div>

						<div class="col-md-4">
							<p>Developed by : <a href="https://www.fabianshamano.com" target="_blank">Fabian Shamano</a><br>
								<a href="https://www.fabianshamano.com" target="_blank">www.fabianshamano.com</a>
							</p>
						</div>

						<div class="col-md-4">
							<p>email address : <a href="fabianshamano@yahoo.com">fabianshamano@yahoo.com</a> <br>
							Phone : +260950419796
							</p>
						</div>
					</div>
				</div>
			</section>
		
		</div><!--end content-->


	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script>		
		
	function LoadMap(branchId){
		 var Mobile="mobile"+branchId
		 
	// ;
    $.ajax({
       type: "POST",
       url: 'actions/getMap.php',
       data: "branchId="+branchId,
       success: function(data)
       {
        
			
			 
		 document.getElementById(branchId).innerHTML=data;
			 
			  document.getElementById(Mobile).innerHTML=data;
		 
          
		 
			
			
          }
       
   });
		
	}
	
		$("#testimonial-slider").owlCarousel({
			items:3,
			itemsDesktop:[1000,3],
			itemsDesktopSmall:[979,2],
			itemsTablet:[768,2],
			itemsMobile:[650,1],
			pagination:true,
			autoPlay:true
		});
		
		$("#affiliates").owlCarousel({
			items:5,
			itemsDesktop:[1000,5],
			itemsDesktopSmall:[979,3],
			itemsTablet:[768,2],
			itemsMobile:[650,1],
			pagination:true,
			autoPlay:true
		});
		
	</script>
	<script src="js/lightbox-plus-jquery.min.js"></script>
	<script type="text/javascript" src="js/parallaxScroll/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="js/parallaxScroll/jquery.localScroll.js"></script>
	<script src="js/scripts.js"></script>
	<script src="scripts/claculator.js"></script>
	<script src="scripts/message.js"></script>
	<script src="scripts/atmmap.js"></script>
	
	<!-- Import Trumbowyg -->


	</body>
</html>
	
<!--Designed by Fabian Shamano, www.fabianshamano.com, fabianshamano@yahoo.com-->