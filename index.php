<?php get_template_part( 'partial/head' ); ?>
<body>
    <div class="main-content">
        <?php get_template_part( 'partial/header' ); ?>
        <div class="content">
            <?php get_template_part('partial/nav'); ?>
            <main>
                <p><?php
                    $content = apply_filters('the_content', $post->post_content);
                    echo $content;
                ?></p>

                <?php
                    function getAntisemanticUrl() {
                        if(strpos($_SERVER['REQUEST_URI'], 'past') !== false){
                            return 'past';
                        } else {
                            return 'upcoming';
                        }
                    }

                    $my_query = new WP_Query( array( 'category_name' => 'event+'.getAntisemanticUrl() ) );

                    $count = $my_query->found_posts;
                    if (!$count) {
                        echo '<h1>No upcoming events</h1>';
                    }

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