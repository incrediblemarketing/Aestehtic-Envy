<?php
$procedures = get_sub_field('procedures');
$title = get_sub_field('title');
$content = get_sub_field('content');

$rc = get_sub_field('row_class');
$c1c = get_sub_field('column_1_class');
$bc = get_sub_field('background_color');
$fc = get_sub_field('font_color');
$fs = get_sub_field('font_size');
$ta = get_sub_field('text_align');
$pad = get_sub_field('padding');
$bt = get_sub_field('button_text');
$bu = get_sub_field('button_url');
echo '<div class="container">';
echo '<section class="row procedures--grid ' . $rc . '" data-color="' . $fc . '" data-size="' . $fs . '" data-bgc="' . $bc . '">';
echo '<div class="col-12 ' . $c1c . ' ' . $ta  . ' sh-col">';
if ($pad) {
    echo '<div class="' . $pad . '">';
}

if ($title || $content) {
    echo '<div class="info"><div class="inner">';
    if ($title) {
        echo '<h2>' . $title . '</h2>';
    }

    if ($content) {
        echo $content;
    }
    echo '</div></div>';
}

if ($posts) : ?>
    <div class="swiper-container procedure-layout">
			<div class="swiper-wrapper">
        <?php foreach ($procedures as $post) :
            setup_postdata($post);
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'postslider_thumb', true);
            $thumb_url = $thumb_url_array[0]; ?>
            <div class="swiper-slide procedure-card">
                <a href="<?php the_permalink(); ?>">
                    <div class="card-bottom">
											<img src="<?php echo $thumb_url; ?>" />
                      <h3><?php echo get_the_title(); ?></h3>
                    </div>
                </a>
            </div>
				<?php endforeach; ?>
				</div>
				<div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
    		<div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
    </div>
    <?php
    wp_reset_postdata();
endif;
if ($pad) {
    echo '</div>';
}
echo '</div>';
echo '</section>';
echo '</div>';
