<?php
$stats = [
    ['value' => '4.9★', 'label' => 'Average Rating'],
    ['value' => '2,500+', 'label' => 'Successful Moves'],
    ['value' => '10+',   'label' => 'Years Experience'],
    ['value' => '99%',   'label' => 'Satisfaction Rate'],
];

$reasons = [
    [
        'icon'  => 'bi-shield-fill-check',
        'title' => 'Licensed & Insured',
        'text'  => 'Fully licensed, bonded, and insured — giving you complete peace of mind on every move.',
    ],
    [
        'icon'  => 'bi-people-fill',
        'title' => 'Expert Team',
        'text'  => 'Trained, background-checked professionals who treat every item — and every customer — with care.',
    ],
    [
        'icon'  => 'bi-currency-dollar',
        'title' => 'Transparent Pricing',
        'text'  => 'No surprise fees. Get a fair, all-inclusive quote before we ever lift a single box.',
    ],
];
?>

<section class="mv-why-love section-pad" id="about">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="mv-section-heading">WHY PEOPLE LOVE US</h2>
        </div>

        <!-- Stats row -->
        <div class="row g-4 mb-5">
            <?php foreach ($stats as $stat): ?>
            <div class="col-6 col-lg-3">
                <div class="mv-stat-card text-center">
                    <div class="mv-stat-value"><?php echo htmlspecialchars($stat['value']); ?></div>
                    <div class="mv-stat-label"><?php echo htmlspecialchars($stat['label']); ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Reasons row -->
        <div class="row g-4">
            <?php foreach ($reasons as $reason): ?>
            <div class="col-12 col-md-4">
                <div class="mv-reason-card text-center p-4 h-100">
                    <div class="mv-reason-icon mb-3 mx-auto">
                        <i class="bi <?php echo htmlspecialchars($reason['icon']); ?>"></i>
                    </div>
                    <h4 class="mv-reason-title"><?php echo htmlspecialchars($reason['title']); ?></h4>
                    <p class="mv-reason-text mb-0"><?php echo htmlspecialchars($reason['text']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
