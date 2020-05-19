<?php

$gallery = get_sub_field( 'gallery_area' );

?>

<div class="gallery--accordion">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<?php if ( $gallery ) : ?>
						<div class="acc-grid">
								<?php foreach ( $gallery as $image ) : ?>
										<div class="item">
										<img src="<?php echo esc_url( $image['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
										</div>
								<?php endforeach; ?>
						</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
