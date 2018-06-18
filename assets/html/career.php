<?php
	$activeMenu = 'contact';
	include_once('includes/header.php'); 
?>

<div class="subpage-banner" style="background:url('images/subpage-banner.jpg');">
	<div class="table-container">
		<div class="table-cell">
			<div class="container">
				<div class="subpage-head">
					<h3>Career Opportunities</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="subpage-wrapper">
	<div class="container">
		<div class="career-page">
			<div class="event-head">
				<h1>Interested in a Career at Bloom?</h1>
				<p>We are always looking to grow our team with creative, passionate professional people!<br>Please fill out the form fields below.</p>
			</div>
			<form class="career-form">
				<div class="form-group">
					<label class="c-label" for="name">Name <span class="mandatory">&#42;</span></label>
					<input type="text" class="form-control" id="name">
				</div>
				
				<div class="form-group">
					<label class="c-label" for="address">Address <span class="mandatory">&#42;</span></label>
					<input type="text" class="form-control" id="address">
				</div>
				
				<div class="form-group row">
					<div class="col-sm-5">
						<label class="c-label" for="city">City <span class="mandatory">&#42;</span></label>
						<input type="text" class="form-control" id="city">
					</div>
					
					<div class="col-sm-4">
						<label class="c-label" for="state">State <span class="mandatory">&#42;</span></label>
						<input type="text" class="form-control" id="state">
					</div>
					
					<div class="col-sm-3">
						<label class="c-label" for="zip">Zip Code <span class="mandatory">&#42;</span></label>
						<input type="text" class="form-control" id="zip">
					</div>
				</div>
				
				<div class="form-group">
					<label class="c-label" for="phone">Phone Number <span class="mandatory">&#42;</span></label>
					<input type="text" class="form-control" id="phone">
				</div>
				
				<div class="form-group">
					<label class="c-label" for="email">Email Address <span class="mandatory">&#42;</span></label>
					<input type="email" class="form-control" id="email">
				</div>
				
				<div class="form-group">
					<label class="c-label">SOCIAL MEDIA HANDLES</label>
					<div class="row">
						<div class="col-sm-4">
							<input type="text" class="form-control" id="city" placeholder="Facebook">
						</div>

						<div class="col-sm-4">
							<input type="text" class="form-control" id="state" placeholder="Twitter">
						</div>

						<div class="col-sm-4">
							<input type="text" class="form-control" id="zip" placeholder="Instagram">
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="c-label">Job you are applying for? <span class="mandatory">&#42;</span></label>
					<div class="row">
						<div class="col-sm-4">
							<label class="r-label">
							  <input type="radio" name="position"> Stylist
							</label>
							<label class="r-label">
							  <input type="radio" name="position"> Assistant
							</label>
							<label class="r-label">
							  <input type="radio" name="position"> Client Specialist
							</label>
						</div>
						
						<div class="col-sm-4">
							<label class="r-label">
							  <input type="radio" name="position"> Barber
							</label>
							<label class="r-label">
							  <input type="radio" name="position"> Esthetician
							</label>
						</div>
						
						<div class="col-sm-4">
							<label class="r-label">
							  <input type="radio" name="position"> Makeup Artist
							</label>
							<label class="r-label">
							  <input type="radio" name="position"> Nail Artist
							</label>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="c-label" for="resume">Resume <span class="mandatory">&#42;</span></label>
					<input type="file" class="form-contro" id="resume">
				</div>
				
				<div class="form-group">
					<label class="c-label" for="notes">Notes</label>
					<textarea class="form-control" rows="5" id="notes"></textarea>
				</div>
				
				<div class="form-group">
					<button class="btn btn-primary btn-lg center-block">Apply Now</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include_once('includes/footer.php'); ?>