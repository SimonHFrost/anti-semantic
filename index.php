<head>
    <title>ANTISEMANTIC</title>
    <meta charset="utf-8" /> 
    <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    
    <link rel='shortcut icon' type='image/x-icon' href="<?php echo get_bloginfo('template_directory'); ?>/favicon.ico" />
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/lib/normalize.css" rel="stylesheet">
</head>
<body>
    <div class="main-content">
        <header>
            <a href="/"><img class="logo" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg"/></a>
            <div>
                <h1>ANTISEMANTIC</h1>
                <h3>Raven mit Anstand und Würde</h3>
            </div>
        </header>
        <div class="content">
            <nav>
                <a class="folder-link" href="/">
                    <img class="folder" src="<?php echo get_bloginfo('template_directory'); ?>/images/folder.png"/><label>Upcoming</label>
                </a>
                <a class="folder-link" href="#">
                    <img class="folder" src="<?php echo get_bloginfo('template_directory'); ?>/images/folder.png"/><label>Past</label>
                </a>
            </nav>
            <main>
                <h2>Nächste Event</h2>
                <div class="event">
                    <div class="event-header">
                        <h3>HAFEN 2 (24hr Openair & Indoor)</h3>
                        <a href="https://www.facebook.com/events/2247430998901903/">
                            <img class="event-facebook-image" src="<?php echo get_bloginfo('template_directory'); ?>/images/facebook.svg"/>
                        </a>
                    </div>
                    <div class="event-details">
                        <a href="https://www.facebook.com/events/2247430998901903/">
                            <img class="event-picture" src="<?php echo get_bloginfo('template_directory'); ?>/images/event-picture.jpg" />
                        </a>
                        <p>Aug 24. 2019</p>
                        <p>VELVET MONKEY, Herzbergstrasse 53, 10365 Lichtenberg, Berlin</p>
                    </div>

                </div>
                <button>Mehr events</button>
            </main>
        </div>
        <footer>
            <div class="spacer"></div>
            <a class="footer-link" href="#">Impressum</a>
            <a class="footer-link" href="#">Datenschutz</a>
        </footer>
    </div>
    <div class="visitors">
        <p>Visitors:</p>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/view-counter.png"/>
    </div>
</body>