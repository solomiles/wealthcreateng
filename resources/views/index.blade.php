<!DOCTYPE HTML>
<html>
<head>
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="author" content="codesBySolomiles" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>{{ config('app.name', 'Laravel') }}</title>

<!--Stylesheet-->

<!--[if IE 7]>
<link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->

<link href="{{asset ('css/font.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset ('css/fontello.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset ('css/main.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{asset ('css/ui.totop.css')}}" />
<link rel="stylesheet" href="{{asset ('css/jquery-ui-1.8.23.custom.css')}}" />
<link rel="stylesheet" href="{{ asset ('css/flexslider.css')}}" />
<link rel="stylesheet" href="{{ asset ('assets/css/countdown.css')}}" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset ('assets/plugins/bootstrap/css/bootstrap.css')}}" />

    <!-- <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" /> -->



<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<!--[if lt IE 8]>

	</style>
<![endif]-->

<style>
	.teaserTitl {
		margin-top: 110px;
		opacity: 1;
	}
	#teaser {
		padding-bottom: 65px;
		color: #ffffff;
		background: #4682b4 no-repeat center center fixed;
		height: 550px;
		text-align: center;
	}
	#teaser , .overlay {
		height: 450px;
		padding-bottom: 65px;

	}
	@media (max-width: 767px){
		#teaser , .overlay {

			padding-bottom: 65px;
			min-height: 700px;
		}
	}

</style>
</head>

<body>

	<!-- Preloader -->
	<div id="loader">
	  <div id="loaderInner"></div>
	</div>



<!--Wrapper-->
	<div id="wrapper">


		<!--Header-->
		<header id="header" class=" default clearfix">

			<!--Holder 960-->
			<div class=" clearfix">



			<!--Logo-->
			<div class="logo">
			<a href="#wrapper"><h1><span>WEALTH</span> CREATE<span>NG</span></h1></a>
			</div>
			<!--End logo-->


			<!--Navigation-->
				<nav id="mainNav" >
					<a href="#" class="mobileBtn" ><i class="icon-menu"></i></a>

				<ul>
					<li><a href="#about">Ideology</a></li>
					<!-- <li><a href="#gallery">ideology</a></li> -->
					<!-- <li><a href="#login">login</a></li> -->
					<!-- <li><a href="#faq">faq</a></li>
					<li><a href="#pricing">packages</a></li>
					<li><a class="buy" href="#"><i class="icon-right-big"></i>purchase</a></li> -->
					<li><a href="#contact">contact us</a></li>


				</ul>

				</nav>
			<!--End navigation-->
				</div>
				<!--End Holder 960-->
			</header>
			<!--Header-->


			<!--Teaser-->
			<div id="teaser" class="clearfix">

					<!--Overlay-->
					<div class="overlay">


					<!--Holder 960-->
					<div class="holder960 clearfix">

						<!--Teaser title-->
						<div class="teaserTitl">
							<h1>Boost your<span> account balance</span></h1>
							<h2>30% profit return on all Investment
								within 3 Days </h2>
							<p>Minimum investment amount is &#8358;5000 <span> Maximum investment amount is &#8358;200,000 </span></p>
						</div>
						<!--End teaser title-->

						<!--Down-->
						<div class="down">
							<a href="#about"><input type="button" class="btn btn-secondary btn-lg" value="Learn More" ></a>
						</div>
						<!--End down-->

					</div>

					<!--End Holder 960-->
					</div>
					<!--End overlay-->

			</div>

			<!--End teaser-->




			<!--About section-->
			<section id="about" class="clearfix section">

				<!--Holder 960-->
				<div class="holder960 clearfix">

						<!--Section title-->
						<div class="secArrow">
						<div class="arrowHolder"><img src="{{ asset('images/bigArrow-1.png')}}" alt=""></div>

						<i class="glyphicon glyphicon-thumbs-up"></i>
						</div>
						<!--End section title-->

				<!--Intro-->
				<div class="aboutIntro">

					<h1><span class="black">IDEOLOGY</span><br>
					<span class="orange">Simple &amp; Straight</span></h1>

					<p></p>



				</div>
				<!--End intro-->



				<!--Features-->
				<div class="features">
				<div class="row">
				<!--Features holder-->
				<div class="featureHolder clearfix">
					<!--Feature single-->
					<div class="featureSingle column clearfix">
						<div class=""><i class="glyphicon glyphicon-ok"></i></div>
						<div class="desc column">
							<h2>Vision</h2>
							<p>Raising a generation of people who are financially active, but with a good sense of investment, constantly putting smiles on the faces of community members.
						 </p>
						</div>
					</div>
					<!--End feature single-->

					<!--Feature single-->
					<div class="featureSingle column clearfix">
						<div class=""><i class="glyphicon glyphicon-ok"></i></div>
						<div class="desc column">
							<h2>Mission</h2>
							<p>Giving it's members financial freedom.
						 </p>
						</div>
					</div>
					<!--End feature single-->

					<!--Feature single-->
					<div class="featureSingle column clearfix">
						<div class=""><i class="glyphicon glyphicon-ok"></i></div>
						<div class="desc column">
							<h2>Target</h2>
							<p>With Us, You Are Sure To Get 30% Interest on all investments.
							 </p>
						</div>
					</div>
					<!--End feature single-->
				</div>
				</div></div>
				<!--End features holder-->


				<!--Features holder-->

				<!--End features holder-->

					</div>
					<!--End features-->



						<!-- <h1><span class="black">we are exited about our new</span>
						<span class="orange">new product</span><br>here some sneak peek</h1>


					</div> -->
					<!--End intro-->



					<!--Slider-->
							<!-- <div class="slider  flexslider">


								<ul class="slides clearfix">
								<li><a href="#"><img src="images/sliderImages/gal1.png" alt=""/></a></li>
								<li><a href="#"><img src="images/sliderImages/gal3.png" alt="" /></a></li>
								  </ul>

							</div> -->

					<!--End slider-->


					<!--Quick notification-->
						<!-- <div class="moreBtn">
							<a href="#"><i class="icon-info-circled"></i>Learn more...</a>
						</div> -->
						<!--End quick notification-->


				<!-- </div> -->
				<!--End Holder 960-->
			<!-- </section> -->
			<!--End gallery section-->






				<!--Newsletter-->
				<!-- <section id="newsletter"> -->
				<!--Subscribe container-->
										<!-- <div class="subscribeContainer"> -->


											<!--Overlay-->
											<!-- <div class="overlay"> -->
											<!--Holder 960-->
											<!-- <div class="holder960 clearfix"> -->

												<!--Subscribe-->
												<!-- <div class="subscribe"> -->

													<!-- <div class="letter"><span><i class="icon-mail"></i></span></div> -->


											<!--Subscribe holder-->
													<!-- <div class="subscribeHolder"> -->


														<!-- <h1><span>Join our mailing list and stay informed</span><br> about our  news and updates.</h1>

														<form id="notForm" target="_blank" action="http://eepurl.com/Gthqj" method="post" novalidate="novalidate">
															<input type="email" class="required email" placeholder="Enter your email here..."  name="email">
															<div id="btnSubmit">
															<input type="submit" value="Subscribe" id="send" name="submit">
															</div>
														</form> -->
													<!-- </div> -->
												<!--End subscribe holder-->


												<!-- </div> -->
												<!--End subscribe container-->
												<!-- </div> -->
												<!--End Holder 960-->

													<!-- </div> -->
													<!--End overlay-->
										<!-- </div> -->
										<!--End subscribe container-->

						<!-- </section> -->
						<!--End newsletter-->





							<!--Login section-->
							<!-- <section id="login" class="clearfix section"> -->

								<!--Holder 960-->
								<!-- <div class="holder960 clearfix"> -->

										<!--Section title-->
										<!-- <div class="secArrow">
										<div class="arrowHolder"><img src="images/bigArrow-1.png" alt=""></div>
										<i class="icon-user"></i>
										</div> -->
										<!--End section title-->


											<!--Intro-->
											<!-- <div class="loginIntro">
												<h1><span class="black">customer login</span>
											connect to your account</h1>



												<form  method="post" id="loginForm" action="#">
												  <label>Your mail</label> <input type="text" name="u" size="15" />
												  <label>Password</label> <input type="password" name="p" size="15" />
												  <input type="submit" value="Login" name="action" />
												</form>

											</div> -->
											<!--End intro-->

								<!-- </div> -->
								<!--End Holder 960-->

							<!-- </section> -->
						<!--End login-->



										<!--End pricing-->



										<!--Client-->
										<!-- <section id="cliet"> -->
										<!--Client container-->
										<div class="container">


													<!--Overlay-->
													<div class="panel panel-info">
													<!--Holder 960-->
													<div class="holder960 clearfix">

														<!--Client content-->
														<div class=" col-md-12 clientContent">

													<h1 class="text-info"><span class="black">Investments </span> like no other</h1>

													<p class="text-info" style="font-size:1.5em">Best online peer to peer community with standard functionalities that offers 30% growth on your investment within 3 days (72 hours). </p>
															<br>
													<!--Client list-->
												<div class="row">
													<div class="col-md-12">

														<div class="Holder clearfix">
															<!-- single-->
															<div class="col-md-3">
																<div class="Single colum clearfix">
																	<div class="btn btn-success"><i class="glyphicon glyphicon-ok"></i></div>
																	<div class="desc column">
																		<h2>Full auto merging functionality</h2>

																	</div>
																</div>
															</div>
																<!--End  single-->

																<!-- single-->
															<div class="col-md-3">
																<div class="Single colum clearfix">
																	<div class="btn btn-success"><i class="glyphicon glyphicon-ok"></i></div>
																	<div class="desc column">
																		<h2>30% in 3 days</h2>

																	</div>
																</div>
															</div>
																<!--End  single-->

																<!-- single-->
															<div class="col-md-3">
																<div class="Single colum clearfix">
																	<div class="btn btn-success"><i class="glyphicon glyphicon-ok"></i></div>
																	<div class="desc column">
																		<h2>10% commitment</h2>

																	</div>
																</div>
															</div>
															<!--End  single-->
															<div class="col-md-3">
																<div class="Single colum clearfix">
																	<div class="btn btn-success"><i class="glyphicon glyphicon-ok"></i></div>
																	<div class="desc column">
																		<h2>5% continous referrer bonuses</h2>

																	</div>
																</div>
															</div>
																<!--End  single-->

																<!-- single-->
															<div class="col-md-3">
																<div class="Single colum clearfix">
																	<div class="btn btn-success"><i class="glyphicon glyphicon-ok"></i></div>
																	<div class="desc column">
																		<h2>Minimum PH amount &#8358;5000</h2>

																	</div>
																</div>
															</div>
																<!--End  single-->

																<!-- single-->
															<div class="col-md-3">
																<div class="Single colum clearfix">
																	<div class="btn btn-success"><i class="glyphicon glyphicon-ok"></i></div>
																	<div class="desc column">
																		<h2>Maximum PH amount &#8358;200,000</h2>

																	</div>
																</div>
															</div>
															<!--End  single-->
														</div>

													<!--End s holder-->

													</div>
												</div>
													</div>

													<!--End client list-->


														</div>
														<!--End client container-->
														</div>
														<!--End Holder 960-->

															</div>
															<!--End overlay-->
												</div>
												<!--End client container-->

												<!-- </section> -->
												<!--End client-->
									<!-- countdown section -->
									<!--MAIN CONTAINER -->

									<div class="clearfix">

								   </div>
								   <div id="counter" ></div>

								   <!-- <div id="counter-default" class="container row">
									   <div class="col-lg-3 col-sm-6">
										   <div class="inner">
											   <div id="day-number" class="timer-number"></div>
											   <div class="timer-text">DAYS</div>
											   <div class="progress mini progress-striped active">
												   <div id="day-bar" class="progress-bar progress-bar-primary"></div>
											   </div>
										   </div>
									   </div>
									   <div class="col-lg-3 col-sm-6">
										   <div class="inner">
											   <div id="hour-number" class="timer-number"></div>
											   <div class="timer-text">HOURS</div>
											   <div class="progress mini progress-striped active">
												   <div id="hour-bar" class="progress-bar progress-bar-primary"></div>
											   </div>
										   </div>
									   </div>
									   <div class="col-lg-3 col-sm-6">
										   <div class="inner">
											   <div id="minute-number" class="timer-number"></div>
											   <div class="timer-text">MINUTES</div>
											   <div class="progress mini progress-striped active">
												   <div id="minute-bar" class="progress-bar progress-bar-primary"></div>
											   </div>
										   </div>
									   </div>
									   <div class="col-lg-3 col-sm-6">
										   <div class="inner">
											   <div id="second-number" class="timer-number"></div>
											   <div class="timer-text">SECOND</div>

											   <div class="progress mini progress-striped active">
												   <div id="second-bar" class="progress-bar progress-bar-primary"></div>
											   </div>

										   </div>
									   </div>
								   </div> -->
									  <div class="col-lg-12 title">
									   <h2  >Our Site Is <span class="">U</span>nder <span class="">C</span>onstruction</h2>
									 We are done with the backend just front end to go.
									 </div>
									 <br /><br />
								   <div class=" row">
									 <div class=" container col-lg-12">
									   <div class="progress progress-striped active" rel="tooltip" data-placement="bottom"
											data-original-title="Total Progress">
										 <div id="total-bar" class="progress-bar progress-bar-primary"></div>
									   </div>
									 </div>
								   </div>
								   <hr/>


								 </div>
									 <!--END PAGE CONTENT -->
							   </div>
								<!--END MAIN CONTAINER -->
							   <!-- end countdown section -->







								<!--Contact section-->
							<section id="contact" class="clearfix section">

								<!--Holder 960-->
								<div class="holder960 clearfix">


									<!--Section title-->
									<div class="secArrow">
									<div class="arrowHolder"><img src="{{asset ('images/bigArrow-2.png')}}" alt=""></div>
									<i class="icon-paper-plane"></i>
									</div>
									<!--End section title-->

									<!--Intro-->
									<div class="touchIntro">
										<h1><span class="black">any further question ?</span> drop us a message</h1>
									</div>
									<!--End intro-->

									<!--Touch holder-->
									<div class="touchHolder">

							<!--Get in touch-->
											<div class="getinTouch clearfix">

														<!-- Contact form -->
												<div class="contactForm column">
													<form class="clearfix"  method="post" action="#">

														<div id="inputs">
												        <input type="text" name="name" id="name" placeholder="Name *" >
												        <input type="text" name="email" id="email"  placeholder="Email *" >
												 		<!-- <input type="text"  name="compagny" id="compagny"  placeholder="Compagny "> -->
														</div>

												<div id="textArea">
												 <textarea name="message" id="message"  cols="45" rows="10" placeholder="Message *"></textarea>
												</div>
												        <input type="submit" name="submit" id="submit" value="Send your message">
												      </form>
													<!-- <div id="success"><h2>Your message has been sent. Thank you!</h2></div>
													<div id="error"><h2>Sorry your message can not be sent.</h2></div> -->
												</div>
												<!-- End contact form -->



												</div>
												<!--End get in touch-->
										</div>
										<!--End touch holder-->

									</div>
									<!--End Holder 960-->

									</section>
									<!--End contact section-->


						<!--Footer-->
					<footer id="footer" class="clearfix">

                                <p>&copy; <script type="text/javascript"> var now = new Date().getFullYear();
                            document.write(now);</script> <span>WEALTHCREATENG</span> All Rights Reserved.</p>

								<ul>
									<li><a href="#">Privacy</a></li>
									<li><a href="#">Support</a></li>
									<li><a href="#">Terms</a></li>
								</ul>
							</footer>
					<!--End footer-->
	</div>
<!--ENd wrapper-->

<!--Javascript-->
<script src="{{ asset('js/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
<script src="js/jquery-migrate-1.2.1.js"></script>
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.8.23.custom.min.js" type="text/javascript"></script>
<script src="js/waypoints.js" type="text/javascript"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/Placeholders.min.js" type="text/javascript"></script>
<script src="js/jquery.ui.totop.min.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>


<!-- page level analytics -->
 <script type="text/javascript" src="assets/plugins/countdown/jquery.countdown.min.js"></script><!--

<script type="text/javascript" src="assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js"></script> -->

<script type="text/javascript" src="assets/js/countdown.js"></script>

<!-- End page level analytics -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5eb278ba81d25c0e58493efe/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
</script>
<!--End of Tawk.to Script-->


</body>
</html>
