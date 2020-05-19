<?php

/**
 * Procedures Archive Template
 *
 *
 * @file           archive-procedures.php
 * @package        StrapPress 
 * @author         Brad Williams 
 * @copyright      2011 - 2014 Brag Interactive
 * @license        license.txt
 * @version        Release: 3.2.0.1
 * @link           http://codex.wordpress.org/Theme_Development#Archive_.28archive.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>
<div class="row page-content justify-content-center padding-section">
<div class="col-lg-8 col-md-10 col-12">
	<div class="procedure-content">
			<h1>Procedures</h1>
			<?php
			$args = array(
				'post_type'      => 'procedure',
				'posts_per_page' => -1,
				'post_parent'    => 0,
				'order'          => 'ASC',
				'orderby'        => 'title',
			);

			$parent = new WP_Query($args);
			if ($parent->have_posts()) :
				echo '<div class="procedure-grid">';
				while ($parent->have_posts()) : $parent->the_post(); ?>
					<?php $thumb_id = get_post_thumbnail_id(); ?>
					<div class="procedure-holder single-holder">
						<div class="image-holder">
							<?php echo wp_get_attachment_image($thumb_id, 'featured_thumb'); ?>
						</div>
						<div class="procedure-list">
							<h2><?php the_title(); ?></h2>
							<?php
									$args = array(
										'post_type'      => 'procedure',
										'posts_per_page' => -1,
										'post_parent'    => $post->ID,
										'order'          => 'ASC',
										'orderby'        => 'title'
									);

									$parent2 = new WP_Query($args);
									if ($parent2->have_posts()) :
										echo '<ul>';
										while ($parent2->have_posts()) : $parent2->the_post();
											echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
										endwhile;
										echo '</ul>';
									endif;
									?>
						</div>
					</div>
				<?php endwhile; ?>
		</div>
	<?php endif; ?>
	</div>
</div><!-- end of #content -->
</div>
<?php get_footer(); ?>