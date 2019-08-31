<?php /* Template Name: Generic */ ?>

<?php get_template_part( 'partial/head' ); ?>
<body>
    <div class="main-content">
        <?php get_template_part( 'partial/header' ); ?>
        <div class="content">
            <main>
            <?php
                $title = apply_filters('the_title', $post->post_title);
                $content = apply_filters('the_content', $post->post_content);
            ?>
            <h1><?php echo $title ?></h1>
            <?php echo $content ?>
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