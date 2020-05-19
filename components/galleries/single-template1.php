<?php
		wp_reset_postdata();
		global $post;
		$children = get_pages( array( 'post_type' => 'gallery', 'child_of' => $post->ID, 'sort_order' => 'asc', 'sort_column' => 'menu_order' ) );
	
		if (count( $children ) > 0 ) : 
			if ( $children ) : ?>
			<div class="row justify-content-center">
				<div class="col-sm-10 col-12">
					<div class="pad-v-md">
						<h1><?php echo the_title(); ?></h1>
						<div class="gallery-flex">
						<?php
						foreach ( $children as $pages ) : 
							echo '<div class="child-page text-center" data-bg="'.get_the_post_thumbnail_url($pages->ID, 'postslider_thumb').'">';
								echo '<a href="'.get_the_permalink($pages->ID).'">';
									echo '<h4>'.get_the_title($pages->ID).'</h4>';
								echo '</a>';
							echo '</div>';
						endforeach;?>
						</div>
					</div>
				</div>
			</div> <?php
			endif;
		else: ?>
			<div class="row justify-content-center gallery g1">
				<div class="col-sm-10 col-12">
					<div class="pad-v-md">
						<div class="inner-gallery">
						<h1><?php echo the_title(); ?></h1>
						<p class="small text-center">* Individual results will vary.</p>
						<?php 
							$images = get_field('gallery_images'); ?>
						<div class="swiper-container gallery-carousel">
						<div class="swiper-wrapper">
						<?php
							$counter = 0;
							if( $images  ): ?>
							<?php foreach( $images as $image ): ?>
								<div class="swiper-slide">
									<img src="<?php echo $image['url']; ?>" />
								</div>
							<?php endforeach; ?>
						<?php endif; ?>
							</div>
							<div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
    				<div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
						</div>
							</div>
					</div>
				</div>
			</div>
		<?php endif; ?>