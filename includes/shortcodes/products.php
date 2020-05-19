<?php

function shortcode_products($atts)
{
    global $post;

    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => -1,
        'order'          => 'ASC',
        'orderby'        => 'menu_order'
    );

    $products = new WP_Query($args);
    $content = '';
    if ($products->have_posts()) :
        $content .= '<div class="grid__block--products">';
        while ($products->have_posts()) : $products->the_post();
            $content .= '<div class="block__products">';
            $content .= get_the_post_thumbnail($post->ID, 'large');
            $content .= '<div class="content--area"><h4>' . get_the_title() . '</h4>';
            $content .= get_the_content();
            $content .= '</div></div>';
        endwhile;
        $content .= '</div>';
        wp_reset_postdata();
    endif;

    return $content;
}
add_shortcode('all-products', 'shortcode_products');
