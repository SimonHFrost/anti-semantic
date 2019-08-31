<?php /* Template Name: Artists */ ?>

<?php get_template_part( 'partial/head' ); ?>
<body>
    <div class="main-content">
        <?php get_template_part( 'partial/header' ); ?>
        <div class="content">
            <?php get_template_part('partial/nav'); ?>
            <main>
                <h2>Artists</h2>
                <div class="artist-box">
                    <img class="artist-image" src="<?php echo get_bloginfo('template_directory'); ?>/images/artist1.jpg" />
                    <h3>Simon Frost</h3>
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