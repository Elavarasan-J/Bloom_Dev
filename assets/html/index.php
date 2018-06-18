<?php
	$home_page = true;
	$activeMenu = 'home';

	include_once('includes/header.php');	
?>

<!--Banner Carousel -->
<div id="slides">
	<ul class="slides-container">
		<li class="slides-item">
			<div class="slides-bg" style="background:url('images/slider2.jpg');" alt=""></div>
		</li>
		
		<li class="slides-item">
			<div class="slides-bg" style="background:url('images/slider1.jpg');" alt=""></div>
		</li>
	</ul>

	<nav class="slides-navigation">
		<a href="#" class="next"></a>
		<a href="#" class="prev"></a>
	</nav>
	
	<div class="scroll-down">
		<span class="scroll-dot"></span>
	</div>
</div>
<!--/Banner Carousel -->

<!--Event Section -->
<div class="event-section">
	<div class="container">
		<div class="event-head">
			<h1>Bloom Morristown</h1>
			<p>A first impression is the most defining statement about you. <br class="hidden-xs">Bloom will help you discover the image you want the world to see.</p>
			<h3>Our Latest Event &amp; Promotion Special</h3>
		</div>
		
		<div class="event-list-wrapper">
			<div class="event-gird">
				<div class="event-col">
					<div class="event-image">
						<img src="images/event1.jpg" alt="Event">
					</div>
					<div class="event-content">
						<h3>Event Title One</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
						<a class="event-button" href="#">
							<i data-feather="chevron-right"></i> Read More
						</a>
					</div>
				</div>
			</div>
			
			<div class="event-gird">
				<div class="event-col">
					<div class="event-image">
						<img src="images/event2.jpg" alt="Event">
					</div>
					<div class="event-content">
						<h3>Event Title Two</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
						<a class="event-button" href="#">
							<i data-feather="chevron-right"></i> Read More
						</a>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
<!--/Event Section -->

<!-- Instagram Photos -->
<div class="instagram-section">
	<div class="instagram-head">
		<h3>GET INSPIRED BY FOLLOWING US</h3>
		<ul class="social-list">
			<li><a href="#"><i class="fill" data-feather="facebook"></i></a></li>
			<li><a href="#"><i data-feather="instagram"></i></a></li>
			<li><a href="#"><i class="fill" data-feather="twitter"></i></a></li>
		</ul>
	</div>
	 
	<div class="instagram-slick">
		<div class="instagram-slick-col"> 
			<a href="#">
				<img src="images/insta1.jpg" alt="Instagram" title="Instagram">
			</a>
		</div>
		<div class="instagram-slick-col"> 
			<a href="#">
				<img src="images/insta1.jpg" alt="Instagram" title="Instagram">
			</a>
		</div>
		<div class="instagram-slick-col"> 
			<a href="#">
				<img src="images/insta2.jpg" alt="Instagram" title="Instagram">
			</a>
		</div>
		<div class="instagram-slick-col"> 
			<a href="">
				<img src="images/insta3.jpg" alt="Instagram" title="Instagram">
			</a>
		</div>
		<div class="instagram-slick-col"> 
			<a href="">
				<img src="images/insta4.jpg" alt="Instagram" title="Instagram">
			</a>
		</div>
		<div class="instagram-slick-col"> 
			<a href="">
				<img src="images/insta5.jpg" alt="Instagram" title="Instagram">
			</a>
		</div>
		<div class="instagram-slick-col"> 
			<a href="">
				<img src="images/insta6.jpg" alt="Instagram" title="Instagram">
			</a>
		</div>
		<div class="instagram-slick-col"> 
			<a href="">
				<img src="images/insta6.jpg" alt="Instagram" title="Instagram">
			</a>
		</div>
	</div>
</div>
<!--/Instagram Photos -->

<div class="app-download-section">
	<div class="container">
		<div class="app-download-inner">
			<div class="app-download-content">
				<h4>Download Our BLOOM App</h4>
				<p>Enjoy the Benefits: Mobile Confirmations, Check Upcoming Appointments, Request an Appointment,<br class="hidden-xs"> Purchase E- Gift Cards and much, much, more! </p>
			</div>
			<div class="app-download-action">
				 <a href="#" class="android-app"></a>
				 <a href="#" class="ios-app"></a>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>

<?php include_once('includes/footer.php'); ?>