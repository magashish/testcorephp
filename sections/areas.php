<?php
$areas = [
    [
        'city'          => 'LOS ANGELES',
        'image'         => 'https://picsum.photos/seed/la-city/1200/380',
        'neighborhoods' => [
            'Santa Monica', 'Beverly Hills', 'Hollywood', 'Culver City',
            'West LA', 'Brentwood', 'Malibu', 'Pasadena', 'Glendale',
            'Burbank', 'Sherman Oaks', 'Studio City',
        ],
    ],
    [
        'city'          => 'SAN FRANCISCO',
        'image'         => 'https://picsum.photos/seed/sf-city/1200/380',
        'neighborhoods' => [
            'Mission District', 'Castro', 'Noe Valley', 'Pacific Heights',
            'Marina', 'SoMa', 'Richmond', 'Sunset', 'Bernal Heights',
            'Haight', 'Tenderloin', 'Potrero Hill',
        ],
    ],
];
?>

<section class="mv-areas section-pad" id="areas">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="mv-section-heading">AREAS WE SERVE</h2>
        </div>

        <?php foreach ($areas as $area): ?>
        <div class="mv-area-block mb-5">
            <div class="mv-area-image-wrap position-relative">
                <img
                    src="<?php echo htmlspecialchars($area['image']); ?>"
                    alt="<?php echo htmlspecialchars($area['city']); ?>"
                    class="mv-area-img"
                >
                <div class="mv-area-label">
                    <?php echo htmlspecialchars($area['city']); ?>
                </div>
            </div>
            <div class="mv-neighborhood-tags d-flex flex-wrap gap-2 mt-3">
                <?php foreach ($area['neighborhoods'] as $hood): ?>
                <span class="mv-tag"><?php echo htmlspecialchars($hood); ?></span>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</section>
