<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure that the subject field is not empty
	if(trim($_POST['subject']) == '') {
		$hasError = true;
	} else {
		$subject = trim($_POST['subject']);
	}


	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!preg_match('/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)+$/', trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'contact@optimino.com'; //Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: Optimino Website <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>
<!DOCTYPE html>
<!--[if lt IE 9]><html class="no-js ie" lang="en"><![endif]-->
<!--[if IE 9]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>Optimino</title>
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet/less" type="text/css" href="css/scale.less" />
  <link rel="stylesheet/less" type="text/css" href="css/optimino.less" />
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
  <script src="js/libs/jquery-1.9.1.min.js"></script>
  <script src="js/libs/waypoints.min.js"></script>
  <script src="js/libs/less-1.3.3.min.js" type="text/javascript"></script>
  <script src="js/libs/selectnav.min.js" type="text/javascript"></script>
  <script src="js/libs/jquery-scrolltofixed-min.js" type="text/javascript"></script>
  <script src="js/libs/respond.min.js" type="text/javascript"></script>
  <script src="js/libs/jquery.smooth-scroll.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=PT+Serif:700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
</head>
<body>	
  <article>
	<div id="fixed-header">
		<img src="img/optimino-logo.png" class="optimino-logo" />
		<span id="header-logos">
			<a href="#"><img src="img/twitter-logo.png" class="twitter" /></a>
			<a href="#"><img src="img/facebook-logo.png" class="facebook" /></a>
			<a href="mailto:contact@optimino.com"><img src="img/mail-icon.png" class="mail" /></a>
		</span>
	</div>
	<nav>
		<div id="nav-wrapper">
			<ul id="nav">
				<li class="first"><a href="#services">Services</a></li>
				<li><a href="#clients" class="active">Clients</a></li>
				<li><a href="#software">Software</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</div>
	</nav>
	<div id="company-statement">
		<h2>Optimino is a User Experience Strategy & Design consultancy.</h2><h3>We work with large, Fortune 500 companies on building and improving their products, platforms, and ecosystems.</h3>
	</div>
	<div id="services">
		<div class="container">
			<h4>Our Services</h4>
				<div class="row">
					<div class="service-image"><img class="logo" src="img/icon-ux.png" /></div>
					<div class="service-description">
						<h5>User Experience (UX) Design</h5>
						<p>We can create an easy, pleasurable way your users will accomplish your business goals. Our take on UX design incorporates both waterfall and agile approaches, and can be used to create from scratch or improve your product or service.</p>
					</div>
					<div class="service-image"><img class="logo" src="img/icon-ia.png" /></div>
					<div class="service-description">
						<h5>Information Architecture</h5>
						<p>Once we understand your business objectives we can create the Information Architecture (IA) for your product or service, expertly crafting user flows, wireframes, and annotations. These will form the structure for both content and interactions.</p>
					</div>
				</div>
				<div class="row">
					<div class="service-image"><img class="logo" src="img/icon-training.png" /></div>
					<div class="service-description">
						<h5>Agile UX Training</h5>
						<p>We can help jump-start your organization's agile, lean UX methodology. Our training will help bring your UXers, developers, visual designers and product managers up to speed with the latest techniques to help you reach maximum efficiency.</p>
					</div>
					<div class="service-image"><img class="logo" src="img/icon-prototype.png" /></div>
					<div class="service-description">
						<h5>Rapid Prototyping</h5>
						<p>Rapid Prototyping is getting your ideas into the hands of both actual users and business stakeholders - and fast. We can create mobile and web-based prototypes that mimic both native and non-native apps for almost any platform - including iPhone, iPad, Android - even console games.</p>
					</div>
				</div>
				<div class="row">
					<div class="service-image"><img class="logo" src="img/icon-ui.png" /></div>
					<div class="service-description">
						<h5>UI Design</h5>
						<p>We can create an elegant UI for your application - we can create everything from Metro (flat) style UIs to more complex skeumorphic techniques.</p>
					</div>
					<div class="service-image"><img class="logo" src="img/icon-userresearch.png" /></div>
					<div class="service-description">
						<h5>User Research</h5>
						<p>We conduct both online, field, and office-based research to help you understand the usage patterns and pain points of your target user base. We can map their behavior and make recommendations based on our findings.</p>
					</div>
				</div>
				<div class="row">
					<div class="service-image"><img class="logo" src="img/icon-kpis.png" /></div>
					<div class="service-description">
						<h5>KPIs / Metrics</h5>
						<p>We use data-driven techniques to monitor and make sense of your metrics - allow us to integrate our findings from real into your agile or waterfall-based timelines. Using tools like <strong>Google Analytics</strong>, <strong>Kissmetrics</strong>, and <strong>Chartbeat</strong> gives us a strong insight into your product.</p>
					</div>
				</div>
		</div>
	</div>
	<div id="logo-top-scrolled"></div>
	<div id="positioning-statement">
		<div class="container">
			<h4>About Us</h4>
    		<h5>We focus exclusively on <span class="focus">UX</span>, <span class="focus">UI</span>, <span class="focus">Prototyping</span>, and <span class="focus">Design</span> so your team can focus on the rest.</h5>
			<p class="sub">Optimino was started by Timothy Jaeger (LinkedIn profile <a href-"#">here</a>) with one mission: to help large companies capture the hearts and minds of users through amazing, informed product design. We believe that to effectively scale and grow you need data-informed product and service design.</p> <p class="sub"><span>We strive to work on the hardest business challenges facing companies today.</span> We are here to help. We love to work.</p>
			<p class="sub">Write us at <a href="mailto:contact@optimino.com">contact@optimino.com</a> or <a href="#contact">fill in the form below</a>.</p>
		</div>
	</div>
	<div id="clients" class="gradient">
		<div class="container">
			<h4>Our Clients</h4>
			<div id="logos">
				<ul>
					<li><img class="logo" src="img/emc.png" /></li>
					<li><img class="logo" src="img/merrill-lynch.png"></li>
					<li><img class="logo" src="img/company-here.png"></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="software">
		<div class="container">
			<h4>Software we regularly use</h4>
			<ul>
				<li>
					<div class="software-logo"><img src="img/omnigraffle.png" /></div>
					<div class="software-text"><p>Wireframing</p></div>
				</li>
				<li>
					<div class="software-logo"><img src="img/trello.png" /></div>
					<div class="software-text"><p>Product Management</p></div>
				</li>
				<li>
					<div class="software-logo"><img src="img/axure.png" /></div>
					<div class="software-text"><p>Prototyping</p></div>
				</li>	
				<li>
					<div class="software-logo"><img src="img/jquery.png" /></div>
					<div class="software-text"><p>Development / Prototyping</p></div>
				</li>
				<li>
					<div class="software-logo"><img src="img/photoshop.png" /></div>
					<div class="software-text"><p>Design</p></div>
				</li>
				<li>
					<div class="software-logo"><img src="img/google-analytics.png" /></div>
					<div class="software-text"><p>KPI Measurement</p></div>
				</li>
				<li>
					<div class="software-logo"><img src="img/invision.png" /></div>
					<div class="software-text"><p>Prototyping / Usability</p></div>
				</li>
				<li>
					<div class="software-logo"><img src="img/kissmetrics.png" /></div>
					<div class="software-text"><p>KPI Measurement</p></div>
				</li>	
				<li>
					<div class="software-logo"><img src="img/optimal-sort.png" /></div>
					<div class="software-text"><p>Usability Testing</p></div>
				</li>			
			</ul>
		</div>
	</div>
	<div id="contact">
		<div id="contactWrapper" class="container" role="form">
		<h4>Contact</h4>
		<?php if(isset($hasError)) { //If errors are found ?>
			<p class="error">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
		<?php } ?>

		<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
			<div class="success">
				<p>Email Successfully Sent!</p>
				<p>Thank you for using our contact form <strong><?php echo $name;?></strong>! Your email was successfully sent and we 'll be in touch with you soon.</p>
			</div>
		<?php } ?>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>#contact" id="contactform">
			<div class="stage clear">
				<label for="name">Name: <em>*</em></label>
				<input type="text" name="contactname" id="contactname" value="" class="required" role="input" aria-required="true" />
			</div>

			<div class="stage clear">
				<label for="email">Email: <em>*</em></label>
				<input type="text" name="email" id="email" value="" class="required email" role="input" aria-required="true" />
			</div>

			<div class="stage clear">
				<label for="subject">Subject: <em>*</em></label>
				<input type="text" name="subject" id="subject" value="" class="required" role="input" aria-required="true" />
			</div>

			<div class="stage clear">
				<label for="message">Message: <em>*</em></label>
				<textarea rows="8" name="message" id="message" class="required" role="textbox" aria-required="true"></textarea>
			</div>
								
			<p class="requiredNote"><em>*</em> Denotes a required field.</p>
			
			<input type="submit" value="Send Message" name="submit" id="submitButton" title="Click here to submit your message!" />
		</form>
		</div>
	</div>
  </article>
  <footer>
	<p>(c) 2013 Optimino LLC. All rights reserved. Get in touch with us: <a href="mailto:contact@optimino.com">contact@optimino.com</a></p>
  </footer>
  <script type="text/javascript">
	$(document).ready(function() {
		
		$(window).scroll(function() {
		    var y_scroll_pos = window.pageYOffset;
		    var scroll_pos_test = 150;             // set to whatever you want it to be

		    if(y_scroll_pos > scroll_pos_test) {
		        $("#fixed-header").waypoint(function(){
				    $(this).fadeIn(750);
				});
		    }
			
		});
		
		$('#fixed-header').scrollToFixed();
		
		$('#nav-wrapper a').smoothScroll(1000);
		
		// validate signup form on keyup and submit
		var validator = $("#contactform").validate({
			rules: {
				contactname: {
					required: true,
					minlength: 2
				},
				email: {
					required: true,
					email: true
				},
				subject: {
					required: true,
					minlength: 2
				},
				message: {
					required: true,
					minlength: 10
				}
			},
			messages: {
				contactname: {
					required: "Please enter your name",
					minlength: jQuery.format("Your name needs to be at least {0} characters")
				},
				email: {
					required: "Please enter a valid email address",
					minlength: "Please enter a valid email address"
				},
				subject: {
					required: "You need to enter a subject!",
					minlength: jQuery.format("Enter at least {0} characters")
				},
				message: {
					required: "You need to enter a message!",
					minlength: jQuery.format("Enter at least {0} characters")
				}
			},
			// set this class to error-labels to indicate valid fields
			success: function(label) {
				label.addClass("checked");
			}
		});
		
		//$('#fixed-header').waypoint('sticky');
		
		/*
		
		$("#fixed-header").waypoint(function(){
		    $(this).waypoint('sticky');
		},{
		    offset: 'bottom-in-view'
		});
		*/
		
	});
  </script>
  <script src="js/scripts.js"></script>
	<!--[if gte IE 9]>
	  <style type="text/css">
	    .gradient {
	       filter: none;
	    }
	  </style>
	<![endif]-->
	<script>selectnav('nav'); </script>
</body>
</html>