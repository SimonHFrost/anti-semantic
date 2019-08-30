<?php get_template_part( 'head' ); ?>
<body>
    <div class="main-content">
        <?php get_template_part( 'header' ); ?>
        <div class="content">
            <main style="background-size: contain; background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/404.gif)">
                <h1 style="color: white;">404 not found</h1>
            </main>
        </div>
        <?php get_template_part( 'footer' ); ?>
    </div>
    <div class="visitors">
        <p>Visitors:</p>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/view-counter.png"/>
    </div>
    <?php wp_footer(); ?>
</body>