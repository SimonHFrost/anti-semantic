<?php /* Template Name: Manifesto */ ?>

<?php get_template_part( 'head' ); ?>
<body>
    <div class="main-content">
        <?php get_template_part( 'header' ); ?>
        <div class="content">
            <main>
            <?php
                $content = apply_filters('the_content', $post->post_content);
                echo $content;
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