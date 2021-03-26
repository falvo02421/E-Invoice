<!DOCTYPE html>
<script type="text/javascript">
$(function() {
	$("#login-button").click(function(){
		var sortable = true;
		
		if(sortable) 
		{
			
			var url="<?=APP_ROOT?>index.php/main/do_log";
			//alert('<?php echo $this->security->get_csrf_hash(); ?>');
			
			$.post(url,{"username":$("#username").val(), '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',"password":$("#passwordx").val(),"lang":$("#lang").val(),"security_code":$("#security_code").val()},function(data){
				//alert(data);
				if(data=="Success"){
					window.location = "<?=APP_ROOT?>index.php/main";
				}
				else if(data=="Active"){
					alert("User is active, cannot use concurrent user!");
					toggleOverlay($("#username").val());
				}
				else
				{
					//alert("wrong username & password");
					alert(data);
					//alert("Login Failed : Invalid username or password. \n(see log for detail).");
					toggleOverlay($("#username").val());
				}
				
			});
		}
	});
				
});

function Login(){
		var sortable = true;
		//alert('test');false;
		if(sortable) 
		{
			
			var url="<?=APP_ROOT?>index.php/main/do_log";
			//alert('<?php echo $this->security->get_csrf_hash(); ?>');
			
			$.post(url,{"username":$("#username").val(), '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',"password":$("#passwordx").val(),"lang":$("#lang").val(),"security_code":$("#security_code").val()},function(data){
				//alert(data);
				if(data=="Success"){
					window.location = "<?=APP_ROOT?>index.php/main";
				}
				else if(data=="Active"){
					alert("User is active, cannot use concurrent user!");
					//toggleOverlay($("#username").val());
					location.reload(); 
				}
				else
				{
					//alert("wrong username & password");
					alert(data);
					location.reload(); 
					//alert("Login Failed : Invalid username or password. \n(see log for detail).");
					toggleOverlay($("#username").val());
				}
				
			});
		}
	}

$(document).ready(function() {
	//sql injection protection
	$(":input").keyup(function(event) {
		// $(this).val($(this).val().replace(/[@\*\-#=,;:'"()\[\]/\\]/gi, ''));
		$(this).val($(this).val().replace(/[\*\-#=,;:'"()?%~`$^&+{}|<>\[\]/\\]/gi, ''));
	});
});

$(document).ready(function() {
	//sql injection protection
	$(":input").keyup(function(event) {
		// $(this).val($(this).val().replace(/[@\*\-#=,;:'"()\[\]/\\]/gi, ''));
		$(this).val($(this).val().replace(/[\*\-#=,;:'"()?%~`$^&+{}|<>\[\]/\\]/gi, ''));
	});
});
</script>

<html>
<head>

<!-- /.website title -->
<title>IPC eService</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- CSS Files -->
<link href="<?=CSS2_;?>/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?=CSS2_;?>/font-awesome.min.css" rel="stylesheet">
<link href="<?=CSS2_;?>/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
<link href="<?=CSS2_;?>/animate.css" rel="stylesheet" media="screen">
<link href="<?=CSS2_;?>/owl.theme.css" rel="stylesheet">
<link href="<?=CSS2_;?>/owl.carousel.css" rel="stylesheet">

<!-- Colors -->
<link href="<?=CSS2_;?>/css-index.css" rel="stylesheet" media="screen">
<!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
<!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
<!-- <link href="css/css-index-red.css" rel="stylesheet" media="screen"> -->
<!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
<!-- <link href="css/css-index-yellow.css" rel="stylesheet" media="screen"> -->

<!-- Google Fonts -->
<link rel="stylesheet" href="<?=CSS2_;?>/fonts/font_css.css" />

</head>
  
<body data-spy="scroll" data-target="#navbar-scroll">

<!-- /.preloader -->
<div id="preloader"></div>
<div id="top"></div>

<!-- /.parallax full screen background image -->
<div class="fullscreen landing parallax" style="background-image:url('<?=CSS2_;?>/images/bg.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">
	
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
				
					<!-- /.logo -->
					<div class="logo wow fadeInDown"> <a href=""><img src="<?=CSS2_;?>/images/logo.png" alt="logo"></a></div>

					<!-- /.main title -->
						<h1 class="wow fadeInLeft">
						IPC eService
						</h1>

					<!-- /.header paragraph -->
					<div class="landing-text wow fadeInUp">
						<!--<p>Backyard is a modern and customizable landing page template designed to increase conversion of your product. Backyard is flexible to suit any kind of your business. Try now and join with our happy customers!</p>-->
						<p>Find your port service, in eService. eService will help you to apply any of port service in IPC (PT. Pelabuhan Indonesia II) area on One Site, One Click, One Pay, and only one our point is customer satisfaction.</p>
					</div>				  

					<!-- /.header button -->
					<div class="head-btn wow fadeInLeft">
						
						<a href="<?=CSS2_;?>/manual e-service.rar" class="btn-default">Download User Guide</a>
					</div>
	
		  

				</div> 
				
				<!-- /.signup form -->
				<div class="col-md-5">
				
					<div class="signup-header wow fadeInUp">
						<h3 class="form-title text-center">Sign In</h3>
						<form class="form-header" action="" autocomplete="off" role="form" id="#">
						<input type="hidden" name="u" value="503bdae81fde8612ff4944435">
						<input type="hidden" name="id" value="bfdba52708">
							<div class="form-group">
								<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
								<input class="form-control input-lg" name="username" id="username" type="text" placeholder="User name" required>
								<?php echo form_error('username'); ?>
							</div>
							<div class="form-group">
								<input class="form-control input-lg" name="passwordx" id="passwordx" type="password" placeholder="Password" required>
								 <p><input type="checkbox" onchange="document.getElementById('passwordx').type = this.checked ? 'text' : 'password'">&nbsp;Show password<p>
								 <?php echo form_error('password'); ?>
							</div>
							<div class="form-group" align="center">
							<center>Please Input this code:</center>
							<select placeholder="language" id="lang">
								<option value="ID">Bahasa</option>
								<option value="EN">English</option>
							</select><br>
							<?=$image;?>
							<input type="text" placeholder="Entry Security Code" name="security_code" id="security_code">
							<?php echo form_error('security_code') ?>
							</div>
							<div class="form-group last">
								<input type="button" class="btn btn-warning btn-block btn-lg" id="login-button" onclick="Login()" value="Sign In">
								<br>
								<a href="<?=ROOT?>reguser"><input type="button" class="btn btn-warning btn-block btn-lg" id="login-button" value="Sign Up"></a>
								<a style="color:white;" href="<?=ROOT?>forgotpassword">forgot password?</a>
							</div>
							<p class="privacy text-center">We will not share your account. Read our <a href="privacy.html">privacy policy</a>.</p>
						</form>
					</div>				
				
				</div>
			</div>
		</div> 
	</div> 
</div>
 
<!-- NAVIGATION -->
<div id="menu">
	<nav class="navbar-wrapper navbar-default" role="navigation">
		<div class="container">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-backyard">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand site-name" href="#top"><img src="<?=CSS2_;?>/images/logo2.png" alt="logo"></a>
			  </div>
	 
			  <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
				<ul class="nav navbar-nav">
					<!--<li><a href="#intro">About</a></li>-->
					<li><a href="#feature">Features</a></li>
					<!--<li><a href="#download">Download</a></li>-->
					<!--<li><a href="#package">Pricing</a></li>-->
					<!--<li><a href="#testi">Partner</a></li>-->
					<li><a href="#contact">Contact</a></li>
				</ul>
			  </div>
		</div>
	</nav>
</div>

<!-- /.intro section -->
<!--<div id="intro">
	<div class="container">
		<div class="row">

		<!-- /.intro image -->
<!--			<div class="col-md-6 intro-pic wow slideInLeft">
				<img src="images/intro-image.jpg" alt="image" class="img-responsive">
			</div>	
			
			<!-- /.intro content -->
<!--			<div class="col-md-6 wow slideInRight">
				<h2>Optimize performance through advanced targeting solutions</h2>
				<p>Good marketing makes the company look smart. <a href="#">Great marketing</a> makes the customer feel smart, - Joe Chernov. Never doubt a small group of thoughtful, committed people can change the world. Indeed, it is the only thing that ever has, - Margaret Mead. The best way to predict the future is to create it, - Peter Drucker.
				</p>

					<div class="btn-section"><a href="#feature" class="btn-default">Learn More</a></div>
		
			</div>
		</div>			  
	</div>
</div>

<!-- /.feature section -->

<div id="feature">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-sm-12 text-center feature-title">

			<!-- /.feature title -->

			<h2>IPC eService Feature</h2>
				<p>Increase our customer loyalty by maintaining mutual relation and provide the best port service.</p>
			</div>
		</div>
		<div class="row row-feat">
			<div class="col-md-4 text-center">

			<!-- /.feature image -->

			<div class="feature-img">
					<img src="<?=CSS2_;?>/images/feature-image.png" alt="image" class="img-responsive wow fadeInLeft">
				</div>
			</div>
		
			<div class="col-md-8">
			
				<!-- /.feature 1 -->

				<div class="col-sm-6 feat-list">
					<i class="pe-7s-notebook pe-5x pe-va wow fadeInUp"></i>
					<div class="inner">
						<h4>Vessel Track & Trace Service</h4>
						<p>Customer can track and trace Vessel Service in IPC (PT. Pelabuhan Indonesia II).<br>						
						</p>
					</div>
				</div>
			
				<!-- /.feature 2 -->

				<div class="col-sm-6 feat-list">
					<i class="pe-7s-cash pe-5x pe-va wow fadeInUp" data-wow-delay="0.2s"></i>
					<div class="inner">
						<h4>Receiving Container Service</h4>
						<p>Customer can create Receiving Container Service in IPC (PT. Pelabuhan Indonesia II).</p>
					</div>
				</div>
			
				<!-- /.feature 3 -->

				<div class="col-sm-6 feat-list">
					<i class="pe-7s-cart pe-5x pe-va wow fadeInUp" data-wow-delay="0.4s"></i>
					<div class="inner">
						<h4>Delivery Container Service</h4>
						<p>Customer can create Delivery Container Service in IPC (PT. Pelabuhan Indonesia II).</p>
					</div>
				</div>
			
				<!-- /.feature 4 -->

				<div class="col-sm-6 feat-list">
					<i class="pe-7s-users pe-5x pe-va wow fadeInUp" data-wow-delay="0.6s"></i>
					<div class="inner">
						<h4>Loading Cancel Container Service</h4>
						<p>Customer can create Loading Cancel Container Service in IPC (PT. Pelabuhan Indonesia II).</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- /.feature 2 section -->
<!--<div id="feature-2">
	<div class="container">
		<div class="row">
	
			<!-- /.feature content -->
	<!--		<div class="col-md-6 wow fadeInLeft">
				<h2>Learn how to make your app marketing efficient</h2>
				<p>Good marketing makes the company look smart. <span class="highlight">Great marketing</span> makes the customer feel smart, - Joe Chernov. Never doubt a small group of thoughtful, committed people can change the world. Indeed, it is the only thing that ever has, - Margaret Mead. The best way to predict the future is to create it, - Peter Drucker.
				</p>

					<div class="btn-section"><a href="#download" class="btn-default">Download Now</a></div>
		
			</div>
			  
			<!-- /.feature image -->
		<!--	<div class="col-md-6 feature-2-pic wow fadeInRight">
				<img src="images/feature2-image.jpg" alt="macbook" class="img-responsive">
			</div>				  
		</div>			  
  
	</div>
</div>


<!-- /.download section -->
<!--
<div id="download">
	<div class="action fullscreen parallax" style="background-image:url('images/bg.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">
		<div class="overlay">
			<div class="container">
				<div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
				
					<!-- /.download title -->
<!--					<h2 class="wow fadeInRight">Would like to know more?</h2>
					<p class="download-text wow fadeInLeft">We'll research the market, identify the right target audience, analyze competitors and avoid users churn to increase retention. Download now for free and join with thousands happy clients.</p>
					
					<!-- /.download button -->
<!--						<div class="download-cta wow fadeInLeft">
							<a href="#contact" class="btn-secondary">Get Connected</a>
						</div>
				</div>	
			</div>	
		</div>
	</div>
</div>

<!-- /.pricing section -->
<!--
<div id="package">
	<div class="container">
		<div class="text-center">
		
			<!-- /.pricing title -->
<!--			<h2 class="wow fadeInLeft">PACKAGES</h2>
			<div class="title-line wow fadeInRight"></div>
		</div>
		<div class="row package-option">

			<!-- /.package 1 -->
<!--			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
			   
			   <!-- /.package icon -->
<!--					<i class="pe-7s-radio pe-5x"></i>
					
					<!-- /.package name -->
<!--					<h3>Basic</h3>
			   </div>
			   
			   <!-- /.price -->
<!--				<div class="price-group text-center">
					<span class="dollar">$</span>
					<span class="price">9</span>
					<span class="time">/mo</span>
				</div>
			
				<!-- /.package features -->
<!--			   <ul class="price-feature text-center">
				  <li><strong>100MB</strong> Disk Space</li>
				  <li><strong>200MB</strong> Bandwidth</li>
				  <li><strong>2</strong> Subdomains</li>
				  <li><strong>5</strong> Email Accounts</li>
				  <li><strike>Webmail Support</strike></li>				  
			   </ul>
			   
			   <!-- /.package button -->
	<!--		   <div class="price-footer text-center">
				 <a class="btn btn-price" href="#">BUY NOW</a>
				</div>	
			  </div>
			</div>
			
			<!-- /.package 2 -->
	<!--		<div class="col-sm-3">
			  <div class="price-box wow fadeInUp" data-wow-delay="0.2s">
			   <div class="price-heading text-center">

			   <!-- /.package icon -->
<!--				<i class="pe-7s-joy pe-5x"></i>

			   <!-- /.package name -->
<!--				<h3>Standard</h3>
			   </div>
			   
			   <!-- /.price -->
<!--				<div class="price-group text-center">
					<span class="dollar">$</span>
					<span class="price">19</span>
					<span class="time">/mo</span>
				</div>
			
				<!-- /.package features -->
<!--			   <ul class="price-feature text-center">
				  <li><strong>300MB</strong> Disk Space</li>
				  <li><strong>400MB</strong> Bandwidth</li>
				  <li><strong>5</strong> Subdomains</li>
				  <li><strong>10</strong> Email Accounts</li>
				  <li><strike>Webmail Support</strike></li>			  
			   </ul>

				<!-- /.package button -->
	<!--		   <div class="price-footer text-center">
				 <a class="btn btn-price" href="#">BUY NOW</a>
				</div>
			  </div>
			</div>	
			
			<!-- /.package 3 -->
	<!--		<div class="col-sm-3">
			  <div class="price-box wow fadeInUp" data-wow-delay="0.4s">
			   <div class="price-heading text-center">
			   
					<!-- /.package icon -->
	<!--				<i class="pe-7s-science pe-5x"></i>
				
					<!-- /.package name -->
	<!--				<h3>Advance</h3>
			   </div>
			   
			   <!-- /.price -->
	<!--			<div class="price-group text-center">
					<span class="dollar">$</span>
					<span class="price">29</span>
					<span class="time">/mo</span>
				</div>
			
				<!-- /.package features -->
	<!--		   <ul class="price-feature text-center">
				  <li><strong>1GB</strong> Disk Space</li>
				  <li><strong>1GB</strong> Bandwidth</li>
				  <li><strong>10</strong> Subdomains</li>
				  <li><strong>25</strong> Email Accounts</li>
				  <li>Webmail Support</li>					  
			   </ul>
			   
			   <!-- /.package button -->
	<!--		   <div class="price-footer text-center">
				 <a class="btn btn-price" href="#">BUY NOW</a>
				</div>	
			  </div>
			</div>
			
			<!-- /.package 4 -->
	<!--		<div class="col-sm-3">
			  <div class="price-box wow fadeInUp" data-wow-delay="0.6s">
			   <div class="price-heading text-center">
			   
					<!-- /.package icon -->
	<!--				<i class="pe-7s-tools pe-5x"></i>
					
					<!-- /.package name -->
	<!--				<h3>Ultimate</h3>
			   </div>
			   
			   <!-- /.price -->
	<!--			<div class="price-group text-center">
					<span class="dollar">$</span>
					<span class="price">49</span>
					<span class="time">/mo</span>
				</div>
			
				<!-- /.package features -->
	<!--		   <ul class="price-feature text-center">
				  <li><strong>5GB</strong> Disk Space</li>
				  <li><strong>5GB</strong> Bandwidth</li>
				  <li><strong>50</strong> Subdomains</li>
				  <li><strong>50</strong> Email Accounts</li>
				  <li>Webmail Support</li>			  
			   </ul>
			   
			   <!-- /.package button -->
	<!--		   <div class="price-footer text-center">
				 <a class="btn btn-price" href="#">BUY NOW</a>
				</div>
			  </div>
			</div>

		</div>
	</div>
</div>

<!-- /.client section -->
<!--<div id="client"> 
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<img alt="client" src="images/company.jpg" class="wow fadeInUp">
					<img alt="client" src="images/company.jpg" class="wow fadeInUp" data-wow-delay="0.2s">
					<img alt="client" src="images/company.jpg" class="wow fadeInUp" data-wow-delay="0.4s">
					<img alt="client" src="images/company.jpg" class="wow fadeInUp" data-wow-delay="0.6s">
				</div>
			</div>
		</div>	
</div>

<!-- /.testimonial section -->
<!--<div id="testi">
	<div class="container">
		<div class="text-center">
			<h2 class="wow fadeInLeft">Partner</h2>
			<div class="title-line wow fadeInRight"></div>
		</div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">	
			   <div id="owl-testi" class="owl-carousel owl-theme wow fadeInUp">
				 
					<!-- /.testimonial 1 -->
	<!--				<div class="testi-item">
						<div class="client-pic text-center">
						
							<!-- /.client photo -->
		<!--					<img src="<?=CSS2_;?>/images/client.jpg" alt="client">
						</div>
						<div class="box">
						
							<!-- /.testimonial content -->
			<!--				<p class="message text-center">"We are very happy and satisfied with Backyard service. Our account manager is efficient and very knowledgeable. It was able to create a vast fan base within very short period of time. We would highly recommend Backyard App to anyone."</p>
						</div>
						<div class="client-info text-center">
						
						<!-- /.client name -->
				<!--			Jennifer Lopez, <span class="company">Microsoft</span>	
						</div>
					</div>		
					
					<!-- /.testimonial 2 -->
					<!--<div class="testi-item">
						<div class="client-pic text-center">

							<!-- /.client photo -->
						<!--	<img src="<?=CSS2_;?>/images/client.jpg" alt="client">
						</div>
						<div class="box">

							<!-- /.testimonial content -->
						<!--	<p class="message text-center">"Everything looks great... Thanks for the quick revision turn around. We were lucky to find you guys and will definitely be using some of your other services in the near future."</p>
						</div>
						<div class="client-info text-center">

							<!-- /.client name -->
<!--							Mike Portnoy, <span class="company">Dream Theater</span>	
						</div>
					</div>				
					
					<!-- /.testimonial 3 -->
	<!--				<div class="testi-item">
						<div class="client-pic text-center">

							<!-- /.client photo -->
<!--							<img src="<?=CSS2_;?>/images/client.jpg" alt="client">
						</div>
						<div class="box">

							<!-- /.testimonial content -->
							<!--<p class="message text-center">"Overall, the two reports were very clear and helpful so thank you for the suggestion to do the focus group. We are currently working with our developer to implement some of these suggestions."</p>
						</div>
						<div class="client-info text-center">

							<!-- /.client name -->
<!--							Jennifer Love Hewitt, <span class="company">Lead Vocal</span>	
						</div>
					</div>			
				 
				</div>
			</div>	
		</div>	
	</div>
</div>

<!-- /.contact section -->
<div id="contact">
	<div class="contact fullscreen parallax" style="background-image:url('<?=CSS2_;?>/images/bg.jpg');" data-img-width="2000" data-img-height="1334" data-diff="100">
		<div class="overlay">
			<div class="container">
				<div class="row contact-row">
				
					<!-- /.address and contact -->
					<div class="col-sm-5 contact-left wow fadeInUp">
						<h2><span class="highlight">Pelabuhan</span> Tanjung Priok</h2>
							<ul class="ul-address">
							<li><i class="pe-7s-map-marker"></i>Jl. Pasoso No.1, Tanjung Priok, Jakarta Utara</br>
							Jakarta 14310
							</li>
							<li><i class="pe-7s-phone"></i>+62-21 4367505</br>
							+62-21 4301080
							</li>
							<li><i class="pe-7s-mail"></i><a href="mailto:info@yoursite.com">corp_sec@indonesiaport.co.id</a></li>
							<li><i class="pe-7s-portfolio"></i><a href="#">http://www.indonesiaport.co.id/</a></li>
							</ul>	
								
					</div>
					<div class="col-sm-5 contact-left wow fadeInUp">
						<h2><span class="highlight">Pelabuhan</span> Panjang</h2>
							<ul class="ul-address">
							<li><i class="pe-7s-map-marker"></i>Jl. Pasoso No.1, Tanjung Priok, Jakarta Utara</br>
							Jakarta 14310
							</li>
							<li><i class="pe-7s-phone"></i>+62-21 4367505</br>
							+62-21 4301080
							</li>
							<li><i class="pe-7s-mail"></i><a href="mailto:info@yoursite.com">corp_sec@indonesiaport.co.id</a></li>
							<li><i class="pe-7s-portfolio"></i><a href="#">http://www.indonesiaport.co.id/</a></li>
							</ul>	
								
					</div>
					
					<!-- /.contact form -->
					<!--
					<div class="col-sm-7 contact-right">
						<form method="POST" id="contact-form" class="form-horizontal" action="contactengine.php" onSubmit="alert('Thank you for your feedback!');">
							<div class="form-group">
							<input type="text" name="Name" id="Name" class="form-control wow fadeInUp" placeholder="Name" required/>
							</div>
							<div class="form-group">
							<input type="text" name="Email" id="Email" class="form-control wow fadeInUp" placeholder="Email" required/>
							</div>					
							<div class="form-group">
							<textarea name="Message" rows="20" cols="20" id="Message" class="form-control input-message wow fadeInUp"  placeholder="Message" required></textarea>
							</div>
							<div class="form-group">
							<input type="submit" name="submit" value="Submit" class="btn btn-success wow fadeInUp" />
							</div>
						</form>		
					</div>
					-->
				</div>
			</div>
		</div>
	</div>
</div>
  
<!-- /.footer -->
<footer id="footer">
	<div class="container">
		<div class="col-sm-4 col-sm-offset-4">
			<!-- /.social links -->
				<div class="social text-center">
					<ul>
						<li><a class="wow fadeInUp" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
						<li><a class="wow fadeInUp" href="https://www.facebook.com/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
						<li><a class="wow fadeInUp" href="https://plus.google.com/" data-wow-delay="0.4s"><i class="fa fa-google-plus"></i></a></li>
						<li><a class="wow fadeInUp" href="https://instagram.com/" data-wow-delay="0.6s"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>	
			<div class="text-center wow fadeInUp" style="font-size: 14px;">Copyright Biro Sistem Informasi 2016 - Template by <a href="http://www.moxdesign.com">MoxDesign</a></div>
			<a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
		</div>	
	</div>	
</footer>
	
	<!-- /.javascript files -->
    <script src="<?=CSS2_;?>/js/jquery.js"></script>
    <script src="<?=CSS2_;?>/js/bootstrap.min.js"></script>
    <script src="<?=CSS2_;?>/js/custom.js"></script>
    <script src="<?=CSS2_;?>/js/jquery.sticky.js"></script>
	<script src="<?=CSS2_;?>/js/wow.min.js"></script>
	<script src="<?=CSS2_;?>/js/owl.carousel.min.js"></script>
	<script>
		new WOW().init();
	</script>

<link rel="stylesheet" type="text/css" href="<?=CUBE_?>css/libs/ns-default.css"/>
<link rel="stylesheet" type="text/css" href="<?=CUBE_?>css/libs/ns-style-growl.css"/>
<link rel="stylesheet" type="text/css" href="<?=CUBE_?>css/libs/ns-style-bar.css"/>
<link rel="stylesheet" type="text/css" href="<?=CUBE_?>css/libs/ns-style-attached.css"/>
<link rel="stylesheet" type="text/css" href="<?=CUBE_?>css/libs/ns-style-other.css"/>
<link rel="stylesheet" type="text/css" href="<?=CUBE_?>css/libs/ns-style-theme.css"/>

<script src="<?=CUBE_?>js/jquery.nanoscroller.min.js"></script>
<script src="<?=CUBE_?>js/modernizr.custom.js"></script>
<script src="<?=CUBE_?>js/snap.svg-min.js"></script> <!-- For Corner Expand and Loading circle effect only -->
<script src="<?=CUBE_?>js/classie.js"></script>
<script src="<?=CUBE_?>js/notificationFx.js"></script>
	
	<script>
	$(document).ready(function() {
		<?php
		if(isset($_GET['msg']))
		{
		?>
		var notification = new NotificationFx({
		message : "<p><?php echo $_GET['msg'];?></p>",
		layout : 'bar',
		effect : 'exploader',
		type : 'warning' // notice, warning, error or success
		});

		// show the notification
		notification.show();
		<?php }?>
		
		$("#security_code").keypress(function(e) {
		  if(e.which == 13) {
			Login("");
		  }
		});		
	});	
	</script>
  </body>
</html>