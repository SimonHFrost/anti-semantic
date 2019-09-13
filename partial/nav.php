<nav>
    <a class="folder-link <?php if (strpos($_SERVER['REQUEST_URI'], 'past') === false) { echo 'active'; } ?>" href="/">
        <img class="folder" src="<?php echo get_bloginfo('template_directory'); ?>/images/folder.png"/><label>Upcoming</label>
    </a>
    <a class="folder-link <?php if (strpos($_SERVER['REQUEST_URI'], 'past') !== false) { echo 'active'; } ?>" href="/past">
        <img class="folder" src="<?php echo get_bloginfo('template_directory'); ?>/images/folder.png"/><label>Past</label>
    </a>
</nav>