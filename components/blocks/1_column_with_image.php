<?php

$title   = get_sub_field( 'column_1_title' );
$content = get_sub_field( 'column_1_content' );
$image   = get_sub_field( 'column_1_image' );

?>
<div class="single--column-image">
	<div class="container">
		<?php if ( $title ) : ?>
			<div class="row">
				<div class="col-12">
					<h2><?php echo $title; ?></h2>
				</div>
			</div>
		<?php endif; ?>
		<div class="overlap--area">
			<div class="image--area">
				<?php if ( ! empty( $image ) ) : ?>
					<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
				<?php endif; ?>
			</div>
			<div class="content--area">
				<?php echo $content; ?>
			</div>
		</div>
	</div>
</div>
