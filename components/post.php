<article id="post-<?php the_ID(); ?>">

	<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
	<?php endif; ?>

	<h1><?php the_title(); ?></h1>

	<?php get_template_part('components/post-meta'); ?>
	
	<?php the_content(); ?>
		
</article>
