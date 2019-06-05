<div id="stickyHeader" class="site-nav site-nav-sticky d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center w-100">
        <div class="d-flex w-100 justify-content-between align-items-center">
            <a class="logo align-self-center" href="<?php echo esc_url(home_url('/')); ?>">
                <?php get_template_part('components/svg/logo'); ?>
            </a>
            <nav role="navigation" class="d-flex align-items-center">
                <?php ubermenu('main', array('menu' => 3)); ?>
            </nav>
            <?php get_template_part('components/call'); ?>
        </div>
    </div>
</div>