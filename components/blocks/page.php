<?php
/*
 Content
================================================*/
			$content             = get_sub_field( 'column_1_content' );
				$content_1_image = get_sub_field( 'column_1_image' );
				$content_2       = get_sub_field( 'column_2_content' );
				$content_3       = get_sub_field( 'column_3_content' );
				$content_3_image = get_sub_field( 'column_3_image' );
				$content_4       = get_sub_field( 'column_4_content' );
				$content_5       = get_sub_field( 'column_5_content' );
				$content_5_image = get_sub_field( 'column_5_image' );

				$rc          = get_sub_field( 'row_class' );
				$c1c         = get_sub_field( 'column_1_class' );
				$bc          = get_sub_field( 'background_color' );
				$bi          = get_sub_field( 'background_image' );
				$fc          = get_sub_field( 'font_color' );
				$fs          = get_sub_field( 'font_size' );
				$ta          = get_sub_field( 'text_align' );
				$pad         = get_sub_field( 'padding' );
				$showSidebar = get_sub_field( 'show_sidebar' );

if ( $showSidebar == 1 ) {
	$sideC        = get_sub_field( 'sidebar_content' );
	$sidebarSide  = get_sub_field( 'sidebar_side' );
	$sideCSS      = get_sub_field( 'sidebar_css' );
	$show_gallery = get_sub_field( 'show_gallery' );
	if ( $show_gallery == 1 ) {
		$gallery_link = get_sub_field( 'gallery_link' );
	}
}

				echo '<div class="row page-content justify-content-center ' . $rc . '">';
					echo '<div class="procedure-content ' . $c1c . ' ' . $ta . '">';
						echo '<div class="inner-block">';

							/* Top Intro Row */
if ( $content ) :
	echo '<div class="column__image--content image--left">';
		echo '<div class="holder__image">';
	if ( $content_1_image ) :
							echo '<img src="' . $content_1_image['sizes']['parent_thumb'] . '" alt="' . esc_attr( $content_1_image['alt'] ) . '" />';
			else :
				echo the_post_thumbnail( 'parent_thumb' );
			endif;
			echo '</div>';
			echo '<div class="holder__content">';
			echo '<h1>' . get_the_title() . '</h1>';
			echo $content;
			echo '</div>';
			echo '</div>';
							endif;

if ( $content_3 && $content_4 ) :
	/* echo '<div class="column__scroller"><ul></ul></div>'; */
									endif;

if ( $content_2 ) :
	echo '<div id="content-row-2" class="column__single block__scroll_to">';
		echo $content_2;
	echo '</div>';
									endif;

if ( $content_3 ) :
	echo '<div id="content-row-3" class="column__image--content image--right flex-row-reverse block__scroll_to">';
		echo '<div class="holder__image">';
	if ( $content_3_image ) :
									echo '<img src="' . $content_3_image['sizes']['parent_thumb'] . '" alt="' . esc_attr( $content_3_image['alt'] ) . '" />';
			endif;
		echo '</div>';
		echo '<div class="holder__content">';
			echo $content_3;
		echo '</div>';
										echo '</div>';
									endif;

if ( $content_3 && $content_4 ) :
	echo '<div class="column__contact">';
	echo '<h2>Schedule a Consultation</h2>';
	echo '<a href="/contact/" class="btn btn-primary">Schedule Now</a>';
	echo '</div>';
									endif;

if ( $content_4 ) :
	echo '<div id="content-row-4" class="column__single block__scroll_to">';
		echo $content_4;
	echo '</div>';
									endif;

if ( $content_5 ) :
	echo '<div id="content-row-5" class="row align-items-center block__scroll_to">';
		echo '<div class="col-md-6 col-12">';
	if ( $content_5_image ) :
									echo '<img src="' . $content_5_image['sizes']['parent_thumb'] . '" alt="' . esc_attr( $content_5_image['alt'] ) . '" />';
			endif;
		echo '</div>';
		echo '<div class="col-md-6 col-12 bg--gray">';
			echo $content_5;
		echo '</div>';
										echo '</div>';
									endif;

								echo '</div>';

						echo '</div>'; /*end content*/

if ( $gallery_link ) :
	echo '<div class="row procedure-content">';
	echo '<div class="block__gallery--inner">';
	if ( $gallery_image ) :
						echo '<img src="' . $gallery_image['sizes']['parent_thumb'] . '" alt="' . esc_attr( $gallery_image['alt'] ) . '" />';
		else :
			echo '<img src="/wp-content/uploads/2019/10/gallery-bleph.jpg" />';
		endif;
				echo '<h3>Before & After Gallery</h3>';
				echo '<a href="' . $gallery_link . '" class="btn btn-primary">View Gallery</a>';
		echo '</div>';
		echo '</div>';
					endif;
if($showSidebar) :
					echo '<div class="row procedure-content sidebar">';
						echo '<div class="pl-0 col-md-6">';
									echo '<div class="inner-block">';
										echo '<h3>Contact Us</h3>';
										echo do_shortcode( '[gravityform id=3 title=false description=false]' );
									echo '</div>';
						echo '</div>';

						echo '<div class="pr-0 col-md-6">';
									/*Sidebar Page Menu*/
									$showpages = get_sub_field( 'show_page_menu' );
if ( $showpages == 1 ) {
	$parent = get_sub_field( 'select_parent_page' );
	if ( $parent ) {
		echo '<div class="inner-block">';
		echo '<h3>' . get_the_title( $parent ) . ' Menu</h3>';
		echo '<ul>';
				wp_list_pages(
					array(
						'post_type'   => 'page',
						'title_li'    => '',
						'child_of'    => $parent,
						'depth'       => 1,
						'sort_column' => 'menu_order',
					)
				);
		echo '</ul>';
		echo '</div>';
	}
}

									$showprocedures = get_sub_field( 'show_procedures_menu' );
if ( $showprocedures == 1 ) {
	echo '<div class="inner-block">';
	echo '<h3>Procedures</h3>';
	echo '<ul class="procedure-menu">';
	if ( wp_get_post_parent_id( $post_ID ) == 0 ) {
										wp_list_pages(
											array(
												'post_type' => 'procedures',
												'title_li' => '',
												'depth'    => 1,
												'sort_column' => 'title',
											)
										);
	} else {
											wp_list_pages(
												array(
													'post_type' => 'procedures',
													'title_li' => '',
													'child_of' => wp_get_post_parent_id( $post_ID ),
													'depth'    => 1,
													'sort_column' => 'title',
												)
											);
	}
																			echo '</ul>';
																			echo '</div>';
}
									echo '</div>';
endif;
					echo '</div>';
				echo '</div>';

				echo '</div>';
