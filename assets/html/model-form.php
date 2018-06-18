<?php
	$activeMenu = 'contact';
	include_once('includes/header.php'); 
?>

<div class="subpage-banner" style="background:url('images/subpage-banner.jpg');">
	<div class="table-container">
		<div class="table-cell">
			<div class="container">
				<div class="subpage-head">
					<h3>Be a Model</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="subpage-wrapper">
	<div class="container">
		<div class="model-page">
			<div class="event-head">
				<h1>Be a Model</h1>
				<p>Please complete the form below to be a model at one of our next workshops!</p>
			</div>
			<form class="career-form">
				<div class="form-group">
					<label class="c-label" for="name">Name <span class="mandatory">&#42;</span></label>
					<input type="text" class="form-control" id="name">
				</div>
				
				<div class="form-group">
					<label class="c-label" for="cell">Cell# <span class="mandatory">&#42;</span></label>
					<input type="text" class="form-control" id="cell">
				</div>
				
				<div class="form-group">
					<label class="c-label" for="email">Email Address <span class="mandatory">&#42;</span></label>
					<input type="email" class="form-control" id="email">
				</div>
				
				<div class="form-group">
					<label class="c-label" for="image">Please Upload an Image of your Current hair <span class="mandatory">&#42;</span></label>
					<input type="file" class="form-contro" id="image">
				</div>
				
				<div class="form-group">
					<label class="c-label">Interested in being a model for <span class="mandatory">&#42;</span></label>
					<div class="">
						<label class="radio-inline">
						  <input type="radio" name="model-for"> Male
						</label>
						<label class="radio-inline">
						  <input type="radio" name="model-for"> Female
						</label>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-sm-4">
							<label class="r-label">
							  <input type="checkbox" name="cat"> Haircut
							</label>
							<label class="r-label">
							  <input type="checkbox" name="cat"> One Process
							</label>
							<label class="r-label">
							  <input type="checkbox" name="cat"> Foils
							</label>
						</div>
						
						<div class="col-sm-4">
							<label class="r-label">
							  <input type="checkbox" name="cat"> Balayage
							</label>
							<label class="r-label">
							  <input type="checkbox" name="cat"> Color Correction
							</label>
							<label class="r-label">
							  <input type="checkbox" name="cat"> Relaxer
							</label>
						</div>
						
						<div class="col-sm-4">
							<label class="r-label">
							  <input type="checkbox" name="cat"> Blowout
							</label>
							<label class="r-label">
							  <input type="checkbox" name="cat"> Up Do
							</label>
							<label class="r-label">
							  <input type="checkbox" name="cat"> Braid
							</label>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<label class="c-label">Is your hair chemically treated ?<span class="mandatory">&#42;</span></label>
					<div class="">
						<label class="radio-inline">
						  <input type="radio" name="hair"> Color
						</label>
						<label class="radio-inline">
						  <input type="radio" name="hair"> Highlights
						</label>
						<label class="radio-inline">
						  <input type="radio" name="hair"> Perm
						</label>
						<label class="radio-inline">
						  <input type="radio" name="hair"> Relaxer
						</label>
					</div>
				</div>
				
				
				<div class="form-group row">
					<div class="col-sm-6">
						<label class="c-label" for="hair-texture">Hair Texture <span class="mandatory">&#42;</span></label>
						<select class="form-control">
							<option>Fine</option>
							<option>Medium</option>
							<option>Thick</option>
							<option>Course</option>
							<option>Wavy</option>
							<option>Curly</option>
							<option>Not Sure</option>
						</select>
					</div>
					
					<div class="col-sm-6">
						<label class="c-label" for="state">Current Length  <span class="mandatory">&#42;</span></label>
						<select class="form-control">
							<option>0-6 inches</option>
							<option>Shoulder Length</option>
							<option>Below the shoulders</option>
						</select>
					</div>
				</div>
				  
				<div class="form-group">
					<button class="btn btn-primary btn-lg center-block">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include_once('includes/footer.php'); ?>