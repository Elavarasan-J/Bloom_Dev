		<!--Footer -->
		<footer class="footer">
			<div class="container">
				<div class="footer-top">
					<div class="row">
						<div class="col-sm-5 col-md-6">
							<div id="footer-map"></div>		
							
						</div>
						<div class="col-sm-4 col-md-3">
							<div class="footer-col">
								<h4 class="footer-title">Hours</h4>
								<ul class="hours-list">
									<li><span>Monday</span> 9am - 5pm</li>
									<li><span>Tuesday</span> 9am - 9pm</li>
									<li><span>Wednesday</span> 9am - 9pm</li>
									<li><span>Thursday</span> 9am - 9pm</li>
									<li><span>Friday</span> 9am - 6pm</li>
									<li><span>Saturday</span> 9am - 5pm</li>
									<li><span>Sunday</span> 10am - 4pm</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-3 col-md-3">
							<div class="footer-col">
								<h4 class="footer-title">Contact Us</h4>
								<div class="footer-contact">
									<p>2 Maple Ave, Morristown, NJ 07960</p>
								</div>

								<div class="footer-contact">
									<h4 class="footer-title">Phone</h4>
									<p>(973)292-3377</p>
								</div>

								<div class="footer-contact">
									<h4 class="footer-title">Email</h4>
									<p>info@bloommorristown.com</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="row">
						<div class="col-sm-6">
							<p class="footer-bottom-links"><a href="#">Terms of Use</a><a href="#">Privacy Policy</a></p>
						</div>
						<div class="col-sm-6">
							<p class="copyright">2018&copy; Bloom | All Rights Reserved</p>
						</div>
					</div>
				</div>
			</div>
		</footer><!--/Footer -->

		</div>
        <!--/Wrapper -->    
	   
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	   	<script src="<?php echo base_url(); ?>assets/js/feather.min.js"></script>
<?php if(isset($datapicker) && ($datapicker == 1)) { ?>
		<script src="<?php echo base_url(); ?>assets/js/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.min.js"></script>
		<script>      
			// Datepicker
			$(function () {
				$('.datepicker').datetimepicker({
					format: 'MM/DD/YYYY'
				});
				
				$('.datetime-picker').datetimepicker();
			});
	   </script>

<?php } ?>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIz1XcGXhRyDpUkvSm2QPipB-l2kOu5sQ&callback=initMap"></script>
		<script>
			// Footer Map
			function initMap() {
				var myStyles =[{
					featureType: "poi",
					elementType: "labels",
					stylers: [{ visibility: "off" }]
				}];

				var map = new google.maps.Map(document.getElementById('footer-map'), {
					zoom: 17,
					center: {lat: 40.795479, lng: -74.482792},
					styles: myStyles 
				});

				var image = '<?php echo base_url(); ?>assets/images/map-marker.png',
					contentString = '<div class="custom-marker-content"><h3>Bloom</h3><p>2 Maple Ave, Morristown, NJ 07960, USA</p></div>',
					infowindow = new google.maps.InfoWindow({content: contentString});

				var marker = new google.maps.Marker({
					position: {lat: 40.795479, lng: -74.482792},
					map: map,
					title:"2 Maple Ave, Morristown, NJ 07960, USA",
					icon: image
				});

				marker.addListener('click', function() {
					infowindow.open(map, marker);
				});
			}
		</script>
		<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

		<?php if(isset($home_page) && ($home_page == true)) { ?>
		<script src="<?php echo base_url(); ?>assets/js/jquery.superslides.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
		<script>
			$('#slides').superslides({
			  play: 8000,
			  animation: 'fade',
			  animation_speed: 'slow'
			});
			
			$('body').on('animated.slides', '#slides', function(e){
				$('.slides-item').removeClass('zoomin');
				var currentSlide = $('#slides').superslides('current');
				$('.slides-container').children().eq(currentSlide).addClass('zoomin');
			});
			 
			 

			// Banner Slick Carousel
			$('.instagram-slick').slick({
			  centerMode: true,
			  slidesToShow: 6,
			  slidesToScroll: 1,
			  autoplay:true,
			  autoplaySpeed: 2200,
			  arrows: false,
			  swipe:false,
			  touchMove : true,
			  responsive: [
				  {
				  breakpoint: 1200,
				  settings: {
					slidesToShow: 4
				  }
				},
				{
				  breakpoint: 1024,
				  settings: {
					slidesToShow: 3
				  }
				},
				{
				  breakpoint: 600,
				  settings: {
					swipe:true,
					slidesToShow: 2
				  }
				}
			  ]
			});
		</script>
		<?php } ?>
	</body>
</html>