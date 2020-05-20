<?php
/*
 * Template Name: Top Level Page
 * Template Post Type: procedure
 */
global $post;
get_header();  ?>
<div class="row page-content justify-content-center padding-section">
	<div class="col-xl-8 col-md-10 col-12">
		<div class="procedure-grid single-grid">
			<div class="procedure-holder single-holder">
				<div class="image-holder">
					<?php echo get_the_post_thumbnail($thumb_id, 'featured_thumb'); ?>
				</div>
				<div class="procedure-list">
					<h1><?php echo the_title(); ?></h1>
					<ul>
						<?php
							$args = array(
								'post_type'      => 'procedure',
								'posts_per_page' => -1,
								'post_parent'    => $post->ID,
								'order'          => 'ASC',
								'orderby'        => 'title'
							);

							$parent = new WP_Query($args);
							if ($parent->have_posts()) : ?>
							<?php while ($parent->have_posts()) : $parent->the_post(); ?>
								<li><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></li>
							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div><!-- end of #content -->
</div>
<?php get_footer(); ?>