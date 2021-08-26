<?php 
    /* Template Name: Contact template */
    get_header();

?>

<section class="contact">
	<div class="grid-container">
        <div class="grid-x grid-margin-x cols2-s2">
            <div class="cell large-5 medium-12">
                <div class="text-group">
					<h2><span class="lightgrey">Contact</span> Us</h2>
					<p>Contact our Support team. Need to get in<br/> touch with the team? We’re all ears.</p>
				</div>
				<div class="icon_blurbs">
				<div class="icon_blurb phone">
						<div class="media_left">							
							<figure class=""><img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-phone.svg" alt="" width="30" height="30" /></figure>
						</div>
						<div class="media_body">
							<h4><a href="tel:6894488833">(689) 448-8833</a></h4>
						</div>
					</div>
					<div class="icon_blurb">
						<div class="media_left">							
							<figure class=""><img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-email.svg" alt="" width="30" height="30" /></figure>
						</div>
						<div class="media_body">
							<h4>info@candidspeech.com</h4>
						</div>
					</div>
					<div class="icon_blurb">
						<div class="media_left">							
							<figure class=""><img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-clock.svg" alt="" width="30" height="30" /></figure>
						</div>
						<div class="media_body">
							<h4>7:00 AM - 6:00 PM</h4>
						</div>
					</div>
					<div class="icon_blurb">
						<div class="media_left">							
							<figure class=""><img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-calendar.svg" alt="" width="30" height="30" /></figure>
						</div>
						<div class="media_body">
							<h4>Monday to Friday</h4>
						</div>
					</div>
				</div>
				<div class="text-group">
					<figure><img src="<?php echo MBN_ASSETS_URI ?>/img/img_map.jpg" alt="" width="562" height="436" /></figure>	
					<!-- <div  class="map_bg" >
						<div id="the-map"style="height: 100%;"></div>
							<script>
								function initMap() {
									var map_center = {lat:33.409545,lng:-111.806718};
									var array_maps = [{lat:33.409545,lng:-111.806718}];
									var contentString ='';
									var map = new google.maps.Map(document.getElementById('the-map'), {
										zoom: 9,
										center: map_center,
										disableDefaultUI: true,
										styles: 
										[{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
									});

									var iw = new google.maps.InfoWindow({});
									for(var i=0;i<array_maps.length;i++){
										var ulrp = array_maps[i];
										var marker = new google.maps.Marker({
										position: ulrp,
										icon:"<?php echo MBN_ASSETS_URI ?>/img/icon/icn-marker-map.svg",
										map: map
									});
									
										google.maps.event.addListener(window, 'load', initMap);
									}//end
								}
							</script>
						<script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo MBN_MAP_API_KEY ?>&callback=initMap"></script>
					</div> -->
				</div>
            </div>
            <div class="cell large-6 medium-12 large-offset-1 col-form">
				<h3>Find out how we can help you today!</h3>
				<?= do_shortcode('[gravityform id="1" title="false" description="false" ajax="false"]'); ?>	
			</div>
        </div>
    </div>
</section>

<?php get_footer() ?>