<?php
$nav_links = [
    ['label' => 'Home',      'href' => '#'],
    ['label' => 'About',     'href' => '#'],
    ['label' => 'Services',  'href' => '#'],
    ['label' => 'Locations', 'href' => '#'],
    ['label' => 'Contact',   'href' => '#'],
];
?>

<nav class="navbar navbar-expand-lg navbar-dark trc-navbar sticky-top">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand trc-brand" href="#">
            <img
                src="assets/images/logo.png"
                alt="Timely Response Couriers"
                class="trc-logo-img"
                onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';"
            >
            <span class="trc-logo-text" style="display:none;">
                <span class="trc-logo-highlight">TRC</span>
            </span>
        </a>

        <!-- Mobile toggle -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#trcNavMenu"
            aria-controls="trcNavMenu"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Nav links -->
        <div class="collapse navbar-collapse" id="trcNavMenu">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                <?php foreach ($nav_links as $index => $link): ?>
                <li class="nav-item">
                    <a
                        class="nav-link trc-nav-link<?php echo $index === 0 ? ' active' : ''; ?>"
                        href="<?php echo htmlspecialchars($link['href']); ?>"
                    >
                        <?php echo htmlspecialchars($link['label']); ?>
                    </a>
                </li>
                <?php endforeach; ?>
                <li class="nav-item ms-lg-3">
                    <a class="btn trc-btn-nav" href="#">Call Now</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
