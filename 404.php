<?php get_template_part( 'partial/head' ); ?>
<body>
    <div class="main-content">
        <?php get_template_part( 'partial/header' ); ?>
        <div class="content">
            <main style="text-align: center; background-size: contain; background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/404.gif)">
                <h1 style="color: white;">404 - Page not found</h1>
                <a href="/">
                    <button>Take me home!</button>
                </a>
            </main>
        </div>
        <?php get_template_part( 'partial/footer' ); ?>
    </div>
    <div class="visitors">
        <p>Visitors:</p>
        <?php 
            if ($_SERVER['REQUEST_URI'] === '/') {
                setWebsiteView();
            }
        ?>
        <div class="view-counter">0000<?php echo getWebsiteViews(); ?></div>
    </div>
    <?php wp_footer(); ?>
</body>