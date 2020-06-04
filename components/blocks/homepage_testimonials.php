<?php

$content1     = get_sub_field( 'column_1_content' );
$testimonials = get_sub_field( 'testimonials' );

?>

<section class="row sh-row no-overflow testimonial--area">
	<div class="col-xl-4 col-lg-5">
		<?php echo $content1; ?>
	</div>
	<div class="col-xl-7 offset-xl-1">
		<div class="quote">	
			<?php if ( $testimonials ) : ?>
				<div class="swiper-container testimonial--rotator">
					<div class="swiper-wrapper">
						<?php foreach ( $testimonials as $post ) : ?>
							<?php setup_postdata( $post ); ?>
								<div class="swiper-slide">
									<?php the_content(); ?>
									<strong><?php echo get_the_title(); ?></strong>
								</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
