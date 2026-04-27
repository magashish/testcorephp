<?php
$footer_links = [
    ['label' => 'About Us',          'href' => '#about'],
    ['label' => 'Service Locations', 'href' => '#areas'],
    ['label' => 'Moving Services',   'href' => '#services'],
    ['label' => 'Get a Quote',       'href' => '#quote'],
    ['label' => 'Our Blog',          'href' => '#blog'],
    ['label' => 'Contact Us',        'href' => '#contact'],
];
?>

<footer class="mv-footer" id="contact">
    <div class="container">

        <div class="row gy-5 pt-5">

            <!-- Brand column -->
            <div class="col-12 col-md-5 col-lg-4">
                <div class="mv-footer-brand mb-3">
                    <span class="mv-logo-highlight">VIP</span> Pro Moving
                </div>
                <p class="mv-footer-text">
                    The most trusted moving company delivering stress-free, on-time moves
                    across California and beyond.
                </p>
                <div class="mv-social-links d-flex gap-3 mt-4">
                    <a href="#" class="mv-social-link" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="mv-social-link" aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="mv-social-link" aria-label="Twitter / X">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                    <a href="#" class="mv-social-link" aria-label="Google">
                        <i class="bi bi-google"></i>
                    </a>
                </div>
            </div>

            <!-- Navigation links -->
            <div class="col-6 col-md-3 col-lg-2 offset-lg-2">
                <h5 class="mv-footer-heading">Navigation</h5>
                <ul class="list-unstyled mv-footer-list">
                    <?php foreach ($footer_links as $link): ?>
                    <li>
                        <a
                            href="<?php echo htmlspecialchars($link['href']); ?>"
                            class="mv-footer-link"
                        >
                            <?php echo htmlspecialchars($link['label']); ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Contact info -->
            <div class="col-6 col-md-4">
                <h5 class="mv-footer-heading">Contact Us</h5>
                <ul class="list-unstyled mv-footer-contact-list">
                    <li class="mb-3">
                        <i class="bi bi-telephone-fill mv-contact-icon"></i>
                        <a href="tel:+18005550100" class="mv-footer-link">1-800-555-0100</a>
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-envelope-fill mv-contact-icon"></i>
                        <a href="mailto:info@vippromoving.com" class="mv-footer-link">info@vippromoving.com</a>
                    </li>
                    <li>
                        <i class="bi bi-geo-alt-fill mv-contact-icon"></i>
                        <span class="mv-footer-link">Los Angeles, CA</span>
                    </li>
                </ul>
            </div>

        </div>

        <hr class="mv-footer-divider">

        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 pb-4">
            <p class="mv-footer-copy mb-0">
                &copy; <?php echo date('Y'); ?> VIP Pro Moving. All rights reserved.
            </p>
            <div class="d-flex gap-3">
                <a href="#" class="mv-footer-link" style="font-size:0.8rem;">Privacy Policy</a>
                <a href="#" class="mv-footer-link" style="font-size:0.8rem;">Terms of Service</a>
            </div>
        </div>

    </div>
</footer>
