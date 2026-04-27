<?php
$faqs = [
    [
        'question' => 'How accurate is the moving estimate?',
        'answer'   => 'Our estimates are highly accurate. We assess the volume, distance, and any special requirements involved, and we stand firmly by our quotes — no surprise charges on moving day.',
    ],
    [
        'question' => 'How long does the moving day typically take?',
        'answer'   => 'Move duration depends on home size and distance. A typical local 2-bedroom move takes 4–6 hours. We\'ll provide you with a precise time estimate before we start so you can plan your day.',
    ],
    [
        'question' => 'Why choose VIP Pro Moving?',
        'answer'   => 'We combine trained professionals, modern equipment, and fully transparent pricing with a proven track record of thousands of successful moves and consistently 4.9-star reviews across all major platforms.',
    ],
    [
        'question' => 'Do you provide packing materials?',
        'answer'   => 'Yes! We supply all necessary packing materials — boxes, tape, bubble wrap, furniture pads, and specialty packaging — as part of our full-service packing option.',
    ],
];
?>

<section class="mv-faq section-pad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">

                <div class="text-center mb-5">
                    <h2 class="mv-section-heading">FREQUENTLY ASKED QUESTIONS</h2>
                </div>

                <div class="accordion mv-accordion" id="mvFaqAccordion">
                    <?php foreach ($faqs as $index => $faq): ?>
                    <div class="accordion-item mv-accordion-item">
                        <h3 class="accordion-header">
                            <button
                                class="accordion-button mv-accordion-btn <?php echo $index > 0 ? 'collapsed' : ''; ?>"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faq<?php echo $index; ?>"
                                aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                                aria-controls="faq<?php echo $index; ?>"
                            >
                                <?php echo htmlspecialchars($faq['question']); ?>
                            </button>
                        </h3>
                        <div
                            id="faq<?php echo $index; ?>"
                            class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>"
                            data-bs-parent="#mvFaqAccordion"
                        >
                            <div class="accordion-body mv-accordion-body">
                                <?php echo htmlspecialchars($faq['answer']); ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="text-center mt-5">
                    <a href="tel:+18005550100" class="btn mv-btn-yellow-lg">
                        <i class="bi bi-telephone-fill me-2"></i>1-800-555-0100
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
