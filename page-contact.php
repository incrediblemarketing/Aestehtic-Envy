<?php get_header(); ?>
<?php $business_location = get_field( 'business_locations', 'options' )[0]; ?>
<div class="row block__contact-page ">
	<div class="col-md-6 col-12">
		<div class="pad-md">
		<h1>Contact Us</h1>
		<h3>We are proud to be with you on this journey!</h3>
		<h4>Phone</h4>
					<a href="tel:<?php echo $business_location['business_phone_url']; ?>"><?php echo $business_location['business_phone_display']; ?></a>
					<?php if ( get_field( 'business_locations', 'option' ) ) : ?>
						<?php while ( has_sub_field( 'business_locations', 'option' ) ) : ?>
							<div class="section--box">
							<?php if ( get_sub_field( 'location_title' ) ) : ?>
				  <h4><?php echo get_sub_field( 'location_title' ); ?></h4>
				<?php endif; ?>
							<?php if ( get_sub_field( 'business_text' ) ) : ?>
					<p><?php echo get_sub_field( 'business_text' ); ?></p>
				<?php endif; ?>
							<?php if ( get_sub_field( 'business_street_address' ) ) : ?>
				  <p><a href="<?php echo get_sub_field( 'business_url' ); ?>" target="_blank"><?php echo get_sub_field( 'business_street_address' ); ?><br/> <?php echo get_sub_field( 'business_city_state_zip' ); ?></a></p>
				<?php endif; ?>
							</div>
			<?php endwhile; ?>
			<?php endif; ?>
			<div class="section--box">
				<h4>Business Hours</h4>
				<p><strong>Monday – Friday:</strong> 9:00am – 5:30 pm</p>
				<p><strong>First & Third Saturday:</strong> 9:00am – 2:00pm</p>
				<p><strong>Sunday:</strong> Closed</p>
			</div>
					<?php get_template_part( 'components/social-icons' ); ?>
				</div>
	</div>
	<div class="col-md-6 col-12 bg--primary">
			<div class="pad-md">
					<h2>Send Us A Message</h2>
					<p>Please use this form for general information purposes only. DO NOT send personal health information through this form. Specific patient care must be addressed during your appointment.</p>
				<?php echo do_shortcode( '[gravityform id=4 title=false description=false ajax=true]' ); ?>
			</div>
	</div>
</div>
<?php get_footer(); ?>
