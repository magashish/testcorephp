<?php
$features = [
    [
        'icon'  => 'bi-truck',
        'title' => 'Fully Equipped Moves',
        'text'  => 'All the tools, trucks, and equipment needed for a seamless move — nothing left to chance.',
    ],
    [
        'icon'  => 'bi-brush-fill',
        'title' => 'Painting & Punchlist',
        'text'  => 'We handle minor touch-ups so your old space is move-out ready and looking its best.',
    ],
    [
        'icon'  => 'bi-receipt-cutoff',
        'title' => 'Friendly Transparent Quotes',
        'text'  => 'No hidden fees, no surprises. What we quote is exactly what you pay.',
    ],
    [
        'icon'  => 'bi-shield-check',
        'title' => 'Clean All-Inclusive Pricing',
        'text'  => 'Everything bundled into one clear, competitive price — labor, truck, and materials included.',
    ],
    [
        'icon'  => 'bi-clock-fill',
        'title' => 'On-Time, Every Time',
        'text'  => 'We respect your schedule and your time. Our crews arrive when promised — always.',
    ],
];
?>

<section class="mv-services-include section-pad">
    <div class="container">
        <div class="row align-items-center gy-5">

            <div class="col-12 col-lg-6">
                <h2 class="mv-section-heading-dark">OUR SERVICES INCLUDE</h2>

                <div class="mv-feature-list mt-4">
                    <?php foreach ($features as $feature): ?>
                    <div class="mv-feature-item d-flex gap-3 mb-4">
                        <div class="mv-feature-icon flex-shrink-0">
                            <i class="bi <?php echo htmlspecialchars($feature['icon']); ?>"></i>
                        </div>
                        <div>
                            <h4 class="mv-feature-title">
                                <?php echo htmlspecialchars($feature['title']); ?>
                            </h4>
                            <p class="mv-feature-text mb-0">
                                <?php echo htmlspecialchars($feature['text']); ?>
                            </p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-12 col-lg-6 text-center">
                <img
                    src="https://picsum.photos/seed/mv-include/620/520"
                    alt="Moving services overview"
                    class="img-fluid rounded-3"
                    style="box-shadow: 0 16px 48px rgba(0,0,0,0.18);"
                >
            </div>

        </div>
    </div>
</section>
