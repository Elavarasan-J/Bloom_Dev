<?php
	$activeMenu = 'service';
	include_once('includes/header.php'); 
?>

<div class="subpage-banner" style="background:url('images/subpage-banner.jpg');">
	<div class="table-container">
		<div class="table-cell">
			<div class="container">
				<div class="subpage-head">
					<h3>SERVICES</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="subpage-wrapper">
	<div class="container-fluid">
		<div class="service-page">
			 
			<div class="event-head">
				<h1>GREATNESS FROM NATURE</h1>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration <br class="hidden-xs">in some form, by injected humour, or randomised words which don't look even</p>
			</div>
			
			<div class="flex-row">
				<div class="fcol-md-8">
					<div id="service-slider" class="carousel carousel-fade slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="images/service-slider1.jpg" alt="Slider">
							</div>
							<div class="item">
								<img src="images/service-slider2.jpg" alt="Slider">
							</div>
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#service-slider" role="button" data-slide="prev">
							<i data-feather="chevron-left"></i>
						</a>
						<a class="right carousel-control" href="#service-slider" role="button" data-slide="next">
							<i data-feather="chevron-right"></i>
						</a>
					</div>
				</div>
				<div class="fcol-md-4">
					<div class="service-menu">
						<ul class="service-menu-list">
							<li><a href="hair.php">Hair</a></li>
							<li><a href="color.php">Color</a></li>
							<li><a href="treatment.php">Treatment</a></li>
							<li><a href="beauty-bar.php">Beauty Bar</a></li>
							<li><a href="blade.php">Blades</a></li>
							<li><a href="esthetique.php">Esthetique</a></li>
							<li>
								<a href="javascript:void(0);">Cancellation Policy:</a>
								<span>At times we understand it may be necessary to cancel or change and appointment. Please notify us at least 24 hours in advance to avoid being charge 50% of the service. Late arrivals may experience a shortened service.</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
			 
		</div>
	</div>
</div>
<?php include_once('includes/footer.php'); ?>