<nav>
    <a class="folder-link <?php if ($_SERVER['REQUEST_URI'] === '/') { echo 'active'; } ?>" href="/">
        <div class="folder"></div>
        <label>Upcoming</label>
    </a>
    <a class="folder-link <?php if (strpos($_SERVER['REQUEST_URI'], 'past')) { echo 'active'; } ?>" href="/past">
        <div class="folder"></div>
        <label>Past</label>
    </a>
    <a class="folder-link <?php if (strpos($_SERVER['REQUEST_URI'], 'artists')) { echo 'active'; } ?>" href="/artists">
        <div class="folder"></div>
        <label>Artists</label>
    </a>
</nav>