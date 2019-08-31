<?php /* Template Name: Artists */ ?>

<?php get_template_part( 'partial/head' ); ?>
<body>
    <div class="main-content">
        <?php get_template_part( 'partial/header' ); ?>
        <div class="content">
            <?php get_template_part('partial/nav'); ?>
            <main>
                <h2>Artists</h2>
                <div class="artist-grid">
                    <a href="/artists/artist1" class="artist-box">
                        <img class="artist-image" src="<?php echo get_bloginfo('template_directory'); ?>/images/artist1.jpg" />
                        <h3>Simon Frost</h3>
                    </a>
                    <a href="/artists/artist2" class="artist-box">
                        <img class="artist-image" src="<?php echo get_bloginfo('template_directory'); ?>/images/artist1.jpg" />
                        <h3>Simon Frost</h3>
                    </a>
                    <a href="/artists/artist3" class="artist-box">
                        <img class="artist-image" src="<?php echo get_bloginfo('template_directory'); ?>/images/artist1.jpg" />
                        <h3>Simon Frost</h3>
                    </a>
                    <a href="/artists/artist4" class="artist-box">
                        <img class="artist-image" src="<?php echo get_bloginfo('template_directory'); ?>/images/artist1.jpg" />
                        <h3>Simon Frost</h3>
                    </a>
                    <a href="/artists/artist5" class="artist-box">
                        <img class="artist-image" src="<?php echo get_bloginfo('template_directory'); ?>/images/artist1.jpg" />
                        <h3>Simon Frost</h3>
                    </a>
                    <a href="/artists/artist6" class="artist-box">
                        <img class="artist-image" src="<?php echo get_bloginfo('template_directory'); ?>/images/artist1.jpg" />
                        <h3>Simon Frost</h3>
                    </a>
                </div>
            </main>
        </div>
        <?php get_template_part( 'partial/footer' ); ?>
    </div>
    <div class="visitors">
        <p>Visitors:</p>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/view-counter.png"/>
    </div>
    <?php wp_footer(); ?>
</body>