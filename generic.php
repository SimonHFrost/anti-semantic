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
        <?php 
            if ($_SERVER['REQUEST_URI'] === '/') {
                setWebsiteView();
            }
        ?>
        <div class="view-counter">0000<?php echo getWebsiteViews(); ?></div>
    </div>
    <?php wp_footer(); ?>
</body>