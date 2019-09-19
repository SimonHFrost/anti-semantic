<nav>
    <a class="folder-link <?php if (strpos($_SERVER['REQUEST_URI'], 'past') === false) { echo 'active'; } ?>" href="/">
        <div class="folder"></div>
        <label>Upcoming</label>
    </a>
    <a class="folder-link <?php if (strpos($_SERVER['REQUEST_URI'], 'past') !== false) { echo 'active'; } ?>" href="/past">
        <div class="folder"></div>
        <label>Past</label>
    </a>
</nav>