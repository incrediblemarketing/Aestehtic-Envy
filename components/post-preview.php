<article id="post-<?php the_ID(); ?>">

	<?php if (has_post_thumbnail()) : ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
			<?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
		</a>
	<?php endif; ?>
	<div class="content--area">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf('Permanent Link to %s', the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>

		<?php get_template_part('components/post-meta'); ?>
		
		<?php the_excerpt(); ?>

		</div>
</article>
