<?php
	$activeMenu = 'contact';
	$datapicker = 1;
	include_once('includes/header.php'); 
?>

<div class="subpage-banner" style="background:url('images/subpage-banner.jpg');">
	<div class="table-container">
		<div class="table-cell">
			<div class="container">
				<div class="subpage-head">
					<h3>Bloom Bridal</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="subpage-wrapper">
	<div class="container">
		<div class="bridal-page">
			<div class="event-head">
				<h1>Bloom Bridal</h1>
				<p>More than any other moment in your life, your wedding is a celebration of your joy, passion and <br>the sharing of your friends and family. It is an occasion of meaningful commitment, and a time to celebrate; <br>Bloom feels the same way and we want to be a part of that.</p><br>
				<p>Please fill out the form below and our client specialist will contact you soon!</p>
			</div>
			<form class="bridal-form">
				<div class="bridal-form-group">
					<h4>1. Bride's Information</h4>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="c-label" for="bname">Bride's Name <span class="mandatory">&#42;</span></label>
							<input type="text" class="form-control" id="bname">
						</div>
						<div class="col-sm-6">
							<label class="c-label" for="bphone">Bride's Phone Number <span class="mandatory">&#42;</span></label>
							<input type="text" class="form-control" id="bphone">
						</div>
					</div>

					<div class="form-group">
						<label class="c-label" for="bemail">Bride's Email Address <span class="mandatory">&#42;</span></label>
						<input type="email" class="form-control" id="bemail">
					</div>

					<div class="form-group row">
						<div class="col-sm-6">
							<label class="c-label" for="wdate">Wedding Date <span class="mandatory">&#42;</span></label>
							<input type="text" class="form-control datepicker" id="wdate">
						</div>
						<div class="col-sm-6">
							<label class="c-label" for="tdate">Preferred Trial Date and Time <span class="mandatory">&#42;</span></label>
							<input type="text" class="form-control datetime-picker" id="tdate">
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-6">
							<label class="c-label" for="stime">Ceremony or Picture Start time <span class="mandatory">&#42;</span></label>
							<input type="text" class="form-control" id="stime">
						</div>
						<div class="col-sm-6">
							<label class="c-label" for="ltime">Time you need to leave the salon <span class="mandatory">&#42;</span></label>
							<input type="text" class="form-control" id="ltime">
						</div>
					</div>
				</div>
				
				<div class="bridal-form-group">
					<h4>2. Alternate contact if Bride is not making arrangements</h4>
					
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="c-label" for="aname">Name <span class="mandatory">&#42;</span></label>
							<input type="text" class="form-control" id="aname">
						</div>
						<div class="col-sm-6">
							<label class="c-label" for="aphone">Phone Number <span class="mandatory">&#42;</span></label>
							<input type="text" class="form-control" id="aphone">
						</div>
					</div>
  
					<div class="form-group">
						<label class="c-label" for="aemail">Address <span class="mandatory">&#42;</span></label>
						<input type="text" class="form-control" id="aemail">
					</div>
				</div>
				
				<div class="bridal-form-group">
					<h4>3. Please provide the following information for each appointment</h4>
					<div class="form-group">
						<label class="c-label" for="role">Name and Role in Wedding <span class="mandatory">&#42;</span></label>
						<input type="text" class="form-control" id="role">
					</div>
					
					<div class="form-group">
						<label class="c-label">Are you new to Bloom? <span class="mandatory">&#42;</span></label>
						<div class="radio-group">
							 <label class="radio-inline">
							  <input type="radio" name="new-to-bloom"> Yes
							</label>
							<label class="radio-inline">
							  <input type="radio" name="new-to-bloom"> No
							</label>
						</div>
					</div>
					
					<div class="form-group">
						<label class="c-label">Hair Type: Please check all that apply <span class="mandatory">&#42;</span></label>
						<div class="checkbox-group row">
							<div class="col-sm-4">
								<label class="check-label">
								  <input type="checkbox"> Straight
								</label>
								<label class="check-label">
								  <input type="checkbox"> Curly
								</label>
								<label class="check-label">
								  <input type="checkbox"> Long 
								</label>
							</div>

							<div class="col-sm-4">
								<label class="check-label">
								  <input type="checkbox"> Short
								</label>
								<label class="check-label">
								  <input type="checkbox"> Thick
								</label>
								<label class="check-label">
								  <input type="checkbox"> Thin
								</label>
							</div>

							<div class="col-sm-4">
								<label class="check-label">
								  <input type="checkbox" name="position"> Other, Please Explain
								  <input type="text" class="form-control input-other">
								</label>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="c-label">Preferred style: Please check one <span class="mandatory">&#42;</span></label>
						<div class="checkbox-group row">
							<div class="col-sm-4">
								<label class="r-label">
								  <input type="radio" name="style"> Blown Dry & Down 
								</label>
								<label class="r-label">
								  <input type="radio" name="style"> Half Up
								</label>
								<label class="r-label">
								  <input type="radio" name="style"> Pony Tail 
								</label>
							</div>

							<div class="col-sm-4">
								<label class="r-label">
								  <input type="radio" name="style"> Bun
								</label>
								<label class="r-label">
								  <input type="radio" name="style"> French Twist
								</label>
							</div>

							<div class="col-sm-4">
								<label class="r-label">
								  <input type="radio" name="style"> Other, Please Explain
								  <input type="text" class="form-control input-other">
								</label>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="c-label" for="notes">Notes</label>
						<textarea class="form-control" rows="5" id="notes"></textarea>
					</div>
					
					<div class="form-group">
						<label class="c-label">Make-up Application Desired <span class="mandatory">&#42;</span></label>
						<div class="radio-group">
							 <label class="radio-inline">
							  <input type="radio" name="new-to-bloom"> Yes
							</label>
							<label class="radio-inline">
							  <input type="radio" name="new-to-bloom"> No
							</label>
						</div>
					</div>
					
					<div class="form-group">
						<label class="c-label">Please submit a photo below of yourself as well as your desired look on that day <span class="mandatory">&#42;</span></label>
						<div class="row">
							<div class="col-sm-6">
								<input type="file" class="form-control">
							</div>
							<div class="col-sm-6">
								<input type="file" class="form-control">
							</div>
						</div>
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