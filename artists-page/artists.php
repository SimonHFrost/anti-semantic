<?php /* Template Name: Artists */ ?>

<?php get_template_part( 'partial/head' ); ?>
<body>
    <div class="main-content trippy">
        <?php get_template_part( 'partial/header' ); ?>
        <div class="content">
            <?php get_template_part('partial/nav'); ?>
            <main>
                <div class="artist-grid">

                <?php $my_query = new WP_Query( array( 'category_name' => 'artists' ) );
                    while ( $my_query->have_posts() ) : $my_query->the_post();
                        global $post;
                        $post_slug=$post->post_name;
                ?>
                    <?php
                        $style = 'color: '.get_field('highlight_color').';';
                    ?>

                    <a
                        href="<?php echo get_permalink() ?>"
                        class="artist-box">
                        <div class="artist-image-wrapper" style="<?php echo $style; ?>">
                            <img class="artist-image" src="<?php echo get_field('profile_picture')['url'] ?>" />
                        </div>
                        <h3 class="artist-name"><?php echo get_the_title(); ?></h3>
                    </a>

                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>

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