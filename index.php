<!DOCTYPE html>
<html lang="EN">
	<head>
		
		<title>Moutainbike Adventure</title>

		<!-- Viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/images/favicon.png" />

		<!-- CSS reset -->
		<link href="css/reset.css" rel="stylesheet" type="text/css">
		<!-- Google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<!-- custom SASS -->
		<link href="css/style.css" rel="stylesheet" type="text/css">

		<!-- responsive navbar -->
		<script type="text/javascript" src="js/navbar.js"></script>

		<!-- jquery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<!-- animatescroll.js -->
		<script src="js/animatescroll.js"></script>
		<!-- scroll -->
		<script src="js/myscroll.js"></script>

	</head>

	<body>
	


		<div class="wrap">

			<header>
				<ul class="topnav" id="myTopnav">
				  <li><a href="#home" id="gohome">Home</a></li>
				  <li><a href="#news" id="gofacts">Facts</a></li>
				  <li><a href="#contact" id="goevents">Events</a></li>
				  <li><a href="#about" id="gohowto">How To</a></li>
				  <li><a href="#about" id="gocontact">Contact</a></li>
				  <li class="icon">
				    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
				  </li>
				</ul>
			</header>

			<div class="overlayparent">

				<div class="overlay">
					

				<div class="myjumbotron">

					<div class="logotop"></div>
					<h1>Join the downhill adventure</h1>
					<h2>The registration for this years most anticipated event is now available!</h2>
					<h2 class="myitalic">20th to 26th of June 2017 - Switzerland</h2>
					<a href="#">Register now</a>
				</div>
				
					
				</div>
				<video id="bgvid" autoplay muted loop>
				<!-- POSTER IMAGE -->
				<!-- <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop> -->
				<!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
				<!-- <source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm"> -->
				<source src="assets/video/Moutainbikevideo.mp4" type="video/mp4">
				</video>


			</div>
		</div>
		

		<!-- FACTS -->
		<div class="sectionheader" id="factstop">

			<h1>FACTS</h1>

		</div>
		<div class="factbg">
			<div class="factheader">
			    <div class="factscircles">
					<div class="circle">
						<div>
							<img src="assets/images/terrain.jpg" alt="terrain"  />
						</div>
						<div>
							<h2>1#</h2>
							<p>Downhill Adventure has the biggest driving terrain in Europe.</p>							
						</div>
					</div>
					<div class="circle">
						<div>
							<img src="assets/images/mountain.jpg" alt="mountain" />
						</div>
						<div>
							<h2>2#</h2>
							<p>Downhill Adventure has the best reputation for driving in mountains.</p>							
						</div>
					</div>
					<div class="circle">
						<div>
							<img src="assets/images/cheapcompetition.jpg" alt="cheap competition" />
						</div>
						<div>
						<h2>3#</h2>
							<p>Downhill Advendture is the cheapest location in Europe for mountain bike competition</p>							
						</div>
					</div>
			    </div>
			    <div class="factsquick">
			    	<h2>Summer holiday event</h2>
			    	<p>Lorem ipsum dolor sit amet, a duis, aliquam eros venenatis ultrices integer lectus, ultrices ligula elit blandit libero vehicula ligula. Pede wisi nibh erat, ultricies mi varius ultricies rhoncus, pellentesque maecenas in faucibus mauris eget, praesent pulvinar aliquet dui libero.</p>
			    	<br>
			    	<p>Suscipit cras condimentum curabitur erat pede, lorem eget curabitur pellentesque. Augue ultricies eget, nibh nibh pede natoque tempus. Pulvinar nisl etiam in. Convallis a curabitur fringilla venenatis, dictumst hic id, tempore montes vulputate maecenas.</p>
			    </div>
			</div>
		</div>

		<!-- EVENTS -->
		<div class="sectionheader" id="eventstop">

			<h1>EVENTS</h1>

		</div>
		
		<div class="eventbg">
			<div class="eventheader">
			    <div class="event">
				<img src="assets/images/competition.jpg" alt="Mountain bike competition">
			    <h2>Mountain bike competition</h2>
			    <p class="italic">June 25-26th</p>
				<p>Faucibus pede ad, diam lacus dictum sodales sociosqu aliquam, fermentum nec ultricies ea nihil ut vulputate. Mollis in, dolor justo, et lacinia nunc dui, tempus feugiat laoreet ac.</p>
			    </div>
			    <div class="event">
				<img src="assets/images/grill.jpg" alt="Grill">
			    <h2>Grill party</h2>
			    <p class="italic">June 25-26th</p>
				<p>Faucibus pede ad, diam lacus dictum sodales sociosqu aliquam, fermentum nec ultricies ea nihil ut vulputate. Mollis in, dolor justo, et lacinia nunc dui, tempus feugiat laoreet ac.</p>
			    </div>
			    <div class="event">
				<img src="assets/images/hiking.jpg" alt="Hiking">
			    <h2>Hiking</h2>
			    <p class="italic">June 20-26th</p>
				<p>Faucibus pede ad, diam lacus dictum sodales sociosqu aliquam, fermentum nec ultricies ea nihil ut vulputate. Mollis in, dolor justo, et lacinia nunc dui, tempus feugiat laoreet ac.</p>
			    </div>
			</div>
		</div>

		<!-- HOW-TO -->
		<div class="sectionheader" id="howtostop">

			<h1>HOW TO GET STARTED</h1>

		</div>
		
		<div class="howtobg">
			<div class="howtoheader">
			    <div class="guideinfo">
			    <h2>Price</h2>
				<p>Faucibus pede ad, diam lacus dictum sodales sociosqu aliquam, fermentum nec ultricies ea nihil ut vulputate. Mollis in, dolor justo, et lacinia nunc dui, tempus feugiat laoreet ac. Faucibus pede ad, diam lacus dictum sodales sociosqu aliquam, fermentum nec ultricies ea nihil ut vulputate.</p>
			    </div>
			    <div class="guideinfo">
			    <h2>Accommodation</h2>
				<p>Faucibus pede ad, diam lacus dictum sodales sociosqu aliquam, fermentum nec ultricies ea nihil ut vulputate. Mollis in, dolor justo, et lacinia nunc dui, tempus feugiat laoreet ac. Faucibus pede ad, diam lacus dictum sodales sociosqu aliquam, fermentum nec ultricies ea nihil ut vulputate.</p>
			    </div>
			    <div class="guideinfo">
			    <h2>Equipment</h2>
				<p>Faucibus pede ad, diam lacus dictum sodales sociosqu aliquam, fermentum nec ultricies ea nihil ut vulputate. Mollis in, dolor justo, et lacinia nunc dui, tempus feugiat laoreet ac. Faucibus pede ad, diam lacus dictum sodales sociosqu aliquam, fermentum nec ultricies ea nihil ut vulputate.</p>
			    </div>
			</div>
		</div>

		<!-- ATTENTION PAGE -->
		<div class="sectionheader" id="contactstop">

			<h1>READY?</h1>

		</div>
		<div class="attentionbg">
			<div class="attentionheader">
				<h1>Are you ready for Downhill Adventure?</h1>
			    	<button type="submit" class="greenbutton">Register now</button>
			    	<button type="submit" class="graybutton">I am not prepared</button>
			</div>
		</div>
		
		<!-- CONTACT -->
		<div class="sectionheader" id="contactstop">

			<h1>CONTACT</h1>

		</div>
		<div class="contactbg">
			<div class="contactheader">
				<h1>Any questions?</h1>
				<h2>Send us a message</h2>
			    <form action="#" method="post">
			    	<input type="text" name="email" placeholder="Email">
			    	<textarea name="message" id="contactmessage" placeholder="Write message here..."></textarea>
			    	<button type="submit">Send Message</button>
			    </form>
			</div>
		</div>

		<div id="footer">
			<div class="footerinside">
				<div class="contactinformation">
					<p>Phone: 53 66 22 77</p>
					<p>Email: contact@mbikeadventure.com</p>
					<p>Adress: Baumstrasse 55, Saint-Luc, Switzerland</p>
				</div>

				<div class="socialmedia">
				<a href=""><img src="assets/images/socialmedia/facebook.png" alt=""></a>
				<a href=""><img src="assets/images/socialmedia/youtube.png" alt=""></a>
				<a href=""><img src="assets/images/socialmedia/twitter.png" alt=""></a>
				<a href=""><img src="assets/images/socialmedia/instagram.png" alt=""></a>
				</div>
			</div>

		</div>
	
	</body>
</html>
