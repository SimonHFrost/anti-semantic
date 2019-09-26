<head>
    <?php
        echo "<title>ANTISEMANTIC - ".get_the_title()."</title>";
    ?>
    <meta charset="utf-8" /> 
    <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Berlin based label and collective." />

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    
    <link rel="icon" type="image/png" href="favicon.png">

    <meta property="og:title" content="ANTISEMANTIC" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://www.antisemantic.de/wp-content/themes/anti-semantic/images/logo.svg" />
    <meta property="og:url" content="<?php echo get_permalink() ?>" />

    <meta property="og:description" content="Berlin based label and collective. View upcoming events or book artists." />
    <meta property="og:site_name" content="antisemantic.de" />

    <link href="<?php echo get_bloginfo('template_directory'); ?>/lib/normalize.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/base.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/artists.css" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>