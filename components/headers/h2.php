<?php $business_location = get_field( 'business_locations', 'options' )[0]; ?>

<header id="header" class="header2">
	<div class="d-flex align-items-center w-100">
		<div class="d-flex w-100 justify-content-between align-items-center">
			<a class="logo align-self-center" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo get_field( 'logo_image', 'options' ); ?>" class="main-logo" />
			</a>
			<nav role="navigation" class="align-items-center">
				<?php ubermenu( 'main', array( 'menu' => 3 ) ); ?>
			</nav>
			
				<div class="click-text"><span id='MTU1MzAzMDEzMDQwOQ=='><script src='https://c2t.zwt.co/click-to-text?r=OTE2MzMzNDkwNg==&m=&s=TGFyZ2U=&t=Y3VzdG9t&cb=cmdiKDAlMkMlMjAwJTJDJTIwMCk=&cf=cmdiKDI1NSUyQyUyMDI1NSUyQyUyMDI1NSk=&did=MTU1MzAzMDEzMDQwOQ=='></script> </span></div>
				<a href="<?php echo $business_location['business_url']; ?>" class="directions" target="_blank"><i class="fas fa-map-marker-alt"></i></a>
				<?php get_template_part( 'components/call' ); ?>
			
		</div>
	</div>
</header>
