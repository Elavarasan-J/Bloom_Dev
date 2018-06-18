<?php
	$activeMenu = 'contact';
	include_once('includes/header.php'); 
?>

<div class="subpage-banner" style="background:url('images/subpage-banner.jpg');">
	<div class="table-container">
		<div class="table-cell">
			<div class="container">
				<div class="subpage-head">
					<h3>Contact</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="subpage-wrapper">
	<div class="container">
		<div class="contact-page">
			 <div class="form-head">
				 <h3>Career Opportunities</h3>
				 <p>We are always looking to grow our team with creative, passionate professional people!</p>
				 <p class="pos-available">Client Specialists <strong>&bull;</strong> Hairstylists <strong>&bull;</strong> Assistants <br> Barbers <strong>&bull;</strong> Estheticians <strong>&bull;</strong> Nail Technicians <strong>&bull;</strong> Makeup Artists </p>
				 <a href="career.php" class="btn btn-primary btn-outline btn-lg">Apply Now</a>
			</div>
			
			<div class="event-list-wrapper">
				<div class="event-gird">
					<div class="event-col">
						<div class="event-image">
							<img src="images/bloom-bridal.jpg" alt="Bloom Bridal">
						</div>
						<div class="event-content">
							<h3>Bloom Bridal</h3>
							<p>We can't wait to be a part of your special day!</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took and scrambled specimen book.</p>
							<a class="event-button" href="bridal-form.php">
								<i data-feather="chevron-right"></i> Click Here
							</a>
						</div>
					</div>
				</div>

				<div class="event-gird">
					<div class="event-col">
						<div class="event-image">
							<img src="images/bloom-model.jpg" alt="Be a Model">
						</div>
						<div class="event-content">
							<h3>Be a Model</h3>
							<p>Our experienced educators train stylists and apprentices on a daily basis to help them develop their skills and refine their craft, workshops are held once a week so that stylists and apprentices can put their knowledge into practice.</p>
							<p>* Classes are held every Monday from 5:30 - 8:30 *</p>
							<a class="event-button" href="model-form.php">
								<i data-feather="chevron-right"></i> Click Here
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		 
		
		<div class="contact-page hide">
			 <div class="form-head">
				 <h3>Bloom Bridal</h3>
				 <p>We cant wait to be apart of your special day!</p>
				 <a href="bridal-form.php" class="btn btn-primary btn-outline btn-lg">Click Here</a>
			</div>
		</div>
		
		<div class="contact-page hide">
			 <div class="form-head">
				 <h3>Be a Model</h3>
				 <p>Our experienced educators train stylists and apprentices on a daily basis to help them develop their skills<br class="hidden-xs"> and refine their craft, workshops are held once a week so that stylists and apprentices can put their <br class="hidden-xs">knowledge into practice.</p>
				 <p><span class="fw600">*</span> Classes are held every Monday from 5:30 - 8:30 <span class="fw600">*</span></p>
				 <a href="model-form.php" class="btn btn-primary btn-outline btn-lg">Click Here</a>
			</div>
		</div>
		
	</div>
</div>
<?php include_once('includes/footer.php'); ?>