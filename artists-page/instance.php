<?php /* Template Name: Artist */ ?>

<?php get_template_part( 'partial/head' ); ?>
<body>
    <div class="main-content">
        <?php get_template_part( 'partial/header' ); ?>
        <div class="content">
            <?php get_template_part('partial/nav'); ?>
            <main>
                <div class="artist-columns">
                    <div>
                        <img class="bio-image" src="<?php echo get_field('bio_image')['url'] ?>"/>
                    </div>
                    <div class="artist-column">
                        <h2><?php echo get_the_title(); ?></h2>
                        <p><?php echo get_field('bio') ?></p>
                    </div>
                    <div class="artist-column">
                        <p><?php echo get_field('bio2') ?></p>
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