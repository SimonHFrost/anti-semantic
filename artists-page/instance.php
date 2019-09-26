<?php /* Template Name: Artist */ ?>

<?php get_template_part( 'partial/head' ); ?>
<body>
    <div class="main-content trippy">
        <?php get_template_part( 'partial/header' ); ?>
        <div class="content">
            <?php get_template_part('partial/nav'); ?>
            <main>
                <div class="artist-columns">
                    <div>
                        <img class="bio-image" style="color: <?php echo get_field('highlight_color')?>" src="<?php echo get_field('bio_image')['url'] ?>"/>
                    </div>
                    <div>
                        <div class="artist-header">
                            <h2><?php echo get_the_title(); ?></h2>
                        </div>
                        <img class="artist-image-instance-page" src="<?php echo get_field('profile_picture')['url'] ?>" style="color: <?php echo get_field('highlight_color') ?>"/>
                        <div class="artist-columns">
                            <div class="artist-column">
                                <p><?php echo get_field('bio') ?></p>
                            </div>
                            <div class="artist-column">
                                <p><?php echo get_field('bio2') ?></p>
                            </div>
                        </div>
                    </div>
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