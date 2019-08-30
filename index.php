<?php get_template_part( 'head' ); ?>
<body>
    <div class="main-content">
        <?php get_template_part( 'header' ); ?>
        <div class="content">
            <?php get_template_part('nav'); ?>
            <main>
                <h2><?php echo get_the_title() ?></h2>

                <?php
                    // Set category filter from url 
                    if(strpos($_SERVER['REQUEST_URI'], 'past') !== false){
                        $page_category = 'past';
                    } else {
                        $page_category = 'upcoming';
                    }
                ?>

                <?php $my_query = new WP_Query( array( 'category_name' => 'event+'.$page_category ) );
                    while ( $my_query->have_posts() ) : $my_query->the_post();
                        global $post;
                        $post_slug=$post->post_name;
                ?>
                    <div class="event">
                        <div class="event-header">
                            <h3><?php echo get_the_title(); ?></h3>
                            <a href="<?php echo get_field('event_link') ?>">
                                <img class="event-facebook-image" src="<?php echo get_bloginfo('template_directory'); ?>/images/facebook.svg"/>
                            </a>
                        </div>
                        <div class="event-details">
                            <a href="<?php echo get_field('event_link') ?>">
                                <img 
                                    class="event-picture"
                                    src="<?php echo get_field('event_image')['url'] ?>"
                                    alt="<?php echo get_field('event_image')['alt'] ?>"
                                />
                            </a>
                            <p><?php echo get_field('event_date'); ?></p>
                            <p><?php echo get_field('event_location') ?></p>
                        </div>
                    </div>

                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
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