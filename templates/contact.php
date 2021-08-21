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
					<iframe src="https://snazzymaps.com/embed/332440" width="100%" height="435px" style="border:none;"></iframe>
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