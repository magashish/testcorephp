<?php
$services = [
    [
        'title' => 'Local Moving',
        'text'  => 'Professional local movers handling every aspect of your in-city move with care, speed, and efficiency.',
        'image' => 'https://picsum.photos/seed/mv-local/600/400',
    ],
    [
        'title' => 'Long Distance Moving',
        'text'  => 'Reliable long-distance moving services ensuring your belongings arrive safely and on schedule — coast to coast.',
        'image' => 'https://picsum.photos/seed/mv-longdist/600/400',
    ],
    [
        'title' => 'Commercial Moving',
        'text'  => 'Minimize downtime with our expert commercial and office relocation services tailored to your business needs.',
        'image' => 'https://picsum.photos/seed/mv-commercial/600/400',
    ],
    [
        'title' => 'Packing Services',
        'text'  => 'Full-service packing using professional-grade materials to protect every item from start to finish.',
        'image' => 'https://picsum.photos/seed/mv-packing/600/400',
    ],
    [
        'title' => 'Storage Solutions',
        'text'  => 'Secure, climate-controlled storage options available for short or long-term needs between moves.',
        'image' => 'https://picsum.photos/seed/mv-storage/600/400',
    ],
    [
        'title' => 'Specialty Moving',
        'text'  => 'Expert handling of pianos, antiques, fine art, safes, and other high-value specialty items.',
        'image' => 'https://picsum.photos/seed/mv-specialty/600/400',
    ],
];
?>

<section class="mv-moving-services section-pad" id="services">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="mv-section-heading">OUR MOVING SERVICES</h2>
            <p class="mv-section-body mt-3">
                From local moves to cross-country relocations, we provide comprehensive
                moving solutions tailored to your unique needs.
            </p>
        </div>

        <div class="row g-4">
            <?php foreach ($services as $service): ?>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="mv-service-card h-100">
                    <div class="mv-service-img-wrap">
                        <img
                            src="<?php echo htmlspecialchars($service['image']); ?>"
                            alt="<?php echo htmlspecialchars($service['title']); ?>"
                            class="mv-service-img"
                        >
                    </div>
                    <div class="mv-service-body">
                        <h3 class="mv-service-title"><?php echo htmlspecialchars($service['title']); ?></h3>
                        <p class="mv-service-text"><?php echo htmlspecialchars($service['text']); ?></p>
                        <a href="#quote" class="mv-btn-outline-dark">Learn More</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
