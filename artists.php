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

                <?php $my_query = new WP_Query( array( 'category_name' => 'artists' ) );
                    while ( $my_query->have_posts() ) : $my_query->the_post();
                        global $post;
                        $post_slug=$post->post_name;
                ?>

                    <a href="#artist1" class="artist-box" style="background-image: url('<?php echo get_field('profile_picture')['url'] ?>')"?>
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
        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/view-counter.png"/>
    </div>
    <?php wp_footer(); ?>
</body>