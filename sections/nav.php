<?php
$nav_links = [
    ['label' => 'About Us',          'href' => '#about'],
    ['label' => 'Service Locations', 'href' => '#areas'],
    ['label' => 'Contact Us',        'href' => '#contact'],
];
?>

<nav class="mv-navbar navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand mv-brand" href="#">
            <img
                src="assets/images/logo.png"
                alt="VIP Pro Moving"
                class="mv-logo-img"
                onerror="this.style.display='none'; this.nextElementSibling.style.display='inline-block';"
            >
            <span class="mv-logo-text" style="display:none;">
                <span class="mv-logo-highlight">VIP</span> Pro Moving
            </span>
        </a>

        <!-- Mobile toggle -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mvNavMenu"
            aria-controls="mvNavMenu"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Nav links -->
        <div class="collapse navbar-collapse" id="mvNavMenu">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                <?php foreach ($nav_links as $link): ?>
                <li class="nav-item">
                    <a
                        class="nav-link mv-nav-link"
                        href="<?php echo htmlspecialchars($link['href']); ?>"
                    >
                        <?php echo htmlspecialchars($link['label']); ?>
                    </a>
                </li>
                <?php endforeach; ?>
                <li class="nav-item ms-lg-3">
                    <a class="btn mv-btn-nav" href="#quote">Request a Quote</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
