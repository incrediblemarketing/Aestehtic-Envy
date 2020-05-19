<?php $business_location = get_field( 'business_locations', 'options' )[0]; ?>

<footer id="footer" class="footer-bottom clearfix">
	<div class="newsletter">
		<div class="container">
			<div class="row justify-content-center">
					<div class="col-12">
						<div class="area-flex">
							<h3>Stay <strong>updated</strong></h3>
							<?php echo do_shortcode( '[gravityform id=1 title=false description=false]' ); ?>
						</div>
					</div>
			</div>
		</div>
	</div>
	<div class="ig-feed">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center">Connect With Us | <span>@envyofsacramento</span></h2>
					<?php echo do_shortcode( '[elfsight_instagram_feed id="1"]' ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-row">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 offset-xl-1 col-md-4 col-sm-4 col-12">
					<img src="<?php echo get_field( 'footer_logo', 'options' ); ?>" class="footer-logo" />
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
					<?php get_template_part('components/social-icons'); ?>
				</div>
				<div class="col-xl-5 offset-xl-1 col-md-8 col-sm-8 col-12">
					<div class="footer-inner">
						<h3>Contact Us</h3>
						<?php echo do_shortcode( '[gravityform id=2 title=false description=false]' ); ?>
					</div>
				</div>
			</div>
			<div class="row justify-content-center copyright">
				<div class="col-lg-8 col-md-10 col-12">
					<p>&copy; <?php echo date( 'Y' ); ?> <?php echo $copyright ?: get_bloginfo(); ?> | <a href="/privacy-policy/">Privacy Policy</a> | <a href="/terms-of-use/">Terms of Use</a> | Digital Marketing By <a href="https://www.incrediblemarketing.com/" target="_blank"><?php get_template_part( 'components/svg/incredible-marketing' ); ?>Incredible Marketing</a></p>
				</div>
			</div>
		</div>
	</div>
	</div>
</footer>
