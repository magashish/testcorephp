<?php
$reviews = [
    [
        'name'   => 'Sarah M.',
        'rating' => 5,
        'text'   => 'Best moving experience I\'ve ever had! The team was professional, careful, and incredibly efficient. They treated every item like it was their own.',
        'image'  => 'https://i.pravatar.cc/80?img=1',
    ],
    [
        'name'   => 'James K.',
        'rating' => 5,
        'text'   => 'They handled all my belongings with great care. The crew arrived on time and finished ahead of schedule. Would highly recommend to anyone!',
        'image'  => 'https://i.pravatar.cc/80?img=3',
    ],
    [
        'name'   => 'Lisa R.',
        'rating' => 5,
        'text'   => 'From booking to completion, the entire process was seamless. Five stars without hesitation — absolutely the best movers in LA!',
        'image'  => 'https://i.pravatar.cc/80?img=5',
    ],
    [
        'name'   => 'Michael T.',
        'rating' => 5,
        'text'   => 'Incredibly punctual and hard-working team. My long-distance move was completed well ahead of schedule and nothing was damaged.',
        'image'  => 'https://i.pravatar.cc/80?img=7',
    ],
    [
        'name'   => 'Amanda C.',
        'rating' => 5,
        'text'   => 'Professional, friendly, and affordable. The packing service saved me so much stress. This is the only moving company I\'ll ever use!',
        'image'  => 'https://i.pravatar.cc/80?img=9',
    ],
];
?>

<section class="mv-reviews section-pad">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="mv-section-heading">REVIEWS THAT MOVED US</h2>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($reviews as $review): ?>
            <div class="col-12 col-sm-6 col-md-4 col-xl">
                <div class="mv-review-card">
                    <div class="mv-review-avatar">
                        <img
                            src="<?php echo htmlspecialchars($review['image']); ?>"
                            alt="<?php echo htmlspecialchars($review['name']); ?>"
                            class="mv-avatar-img"
                        >
                    </div>
                    <div class="mv-review-stars mb-1">
                        <?php for ($i = 0; $i < $review['rating']; $i++): ?>
                        <i class="bi bi-star-fill"></i>
                        <?php endfor; ?>
                    </div>
                    <p class="mv-review-name"><?php echo htmlspecialchars($review['name']); ?></p>
                    <p class="mv-review-text"><?php echo htmlspecialchars($review['text']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
