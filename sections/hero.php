<?php
$platforms = [
    ['name' => 'Google',  'rating' => '5.0'],
    ['name' => 'Yelp',    'rating' => '4.9'],
    ['name' => 'Houzz',   'rating' => '4.8'],
    ['name' => 'Angi',    'rating' => '4.9'],
];
?>

<section class="mv-hero">
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-12 col-lg-9 col-xl-8">

                <p class="mv-hero-eyebrow">
                    Top Rated Los Angeles Movers Across All Online Platforms
                </p>

                <h1 class="mv-hero-heading">
                    The most trusted<br>moving company in WI
                </h1>

                <!-- Platform rating badges -->
                <div class="mv-platform-badges d-flex flex-wrap gap-3 mb-5">
                    <?php foreach ($platforms as $p): ?>
                    <div class="mv-platform-badge">
                        <div class="mv-badge-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <span><?php echo htmlspecialchars($p['rating']); ?> <?php echo htmlspecialchars($p['name']); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Inline quote form -->
                <div class="mv-hero-form">
                    <div class="row g-2 align-items-end">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <label class="mv-hero-form-label">Your Name</label>
                            <input type="text" class="form-control mv-form-input" placeholder="Enter Your Name">
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <label class="mv-hero-form-label">From</label>
                            <input type="text" class="form-control mv-form-input" placeholder="Pick Up Location">
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <label class="mv-hero-form-label">To</label>
                            <input type="text" class="form-control mv-form-input" placeholder="Drop Off Location">
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <a href="#quote" class="btn mv-btn-yellow w-100 mv-hero-cta">
                                GET A FREE QUOTE
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
