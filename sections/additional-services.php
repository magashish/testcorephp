<?php
$additional = [
    [
        'title'  => 'Crating Services',
        'text'   => 'Custom wooden crating for fragile, oversized, or irregularly shaped items that need extra protection during transit.',
        'is_new' => true,
    ],
    [
        'title'  => 'Furniture Assembly and Disassembly',
        'text'   => 'Expert assembly and disassembly of all furniture types — beds, wardrobes, desks, bookshelves, and more.',
        'is_new' => true,
    ],
    [
        'title'  => 'Furniture Disposal',
        'text'   => 'Responsible disposal and donation drop-off for unwanted items, so your old space is cleared before your move.',
        'is_new' => true,
    ],
    [
        'title'  => 'COI Assistance',
        'text'   => 'We help coordinate Certificates of Insurance required by buildings and property managers so your move-in goes smoothly.',
        'is_new' => true,
    ],
];
?>

<section class="mv-additional section-pad">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="mv-section-heading">ADDITIONAL SERVICES</h2>
        </div>

        <div class="mv-additional-list mx-auto">
            <?php foreach ($additional as $item): ?>
            <div class="mv-additional-item">
                <div class="d-flex align-items-start gap-3">
                    <div class="flex-grow-1">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <h4 class="mv-additional-title mb-0">
                                <?php echo htmlspecialchars($item['title']); ?>
                            </h4>
                            <?php if ($item['is_new']): ?>
                            <span class="mv-badge-new">NEW</span>
                            <?php endif; ?>
                        </div>
                        <p class="mv-additional-text mb-0">
                            <?php echo htmlspecialchars($item['text']); ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="d-flex flex-wrap gap-3 mt-5 justify-content-center">
            <a href="#quote" class="btn mv-btn-yellow-lg">Get a Free Quote</a>
            <a href="tel:+18005550100" class="btn mv-btn-dark-outline-lg">
                <i class="bi bi-telephone-fill me-2"></i>Call Us Now
            </a>
        </div>

    </div>
</section>
