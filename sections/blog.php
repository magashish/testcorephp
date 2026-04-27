<?php
$posts = [
    [
        'title'    => 'Green and Red Flags When Choosing a Moving Company',
        'excerpt'  => 'Learn what to watch for when hiring movers — from suspicious low estimates to the hallmarks of a truly professional moving team.',
        'category' => 'Tips & Advice',
        'date'     => 'March 12, 2024',
        'image'    => 'https://picsum.photos/seed/blog-mv1/600/400',
        'href'     => '#',
    ],
    [
        'title'    => 'Packing Tips and Tricks for a Stress-Free Move',
        'excerpt'  => 'Expert packing strategies that protect your belongings and make unpacking at your new home a breeze.',
        'category' => 'Packing',
        'date'     => 'February 28, 2024',
        'image'    => 'https://picsum.photos/seed/blog-mv2/600/400',
        'href'     => '#',
    ],
    [
        'title'    => 'How to Save Money on Your Next Long Distance Move',
        'excerpt'  => 'Moving across the country doesn\'t have to break the bank. These proven strategies cut costs without cutting corners.',
        'category' => 'Long Distance',
        'date'     => 'February 14, 2024',
        'image'    => 'https://picsum.photos/seed/blog-mv3/600/400',
        'href'     => '#',
    ],
    [
        'title'    => 'Moving with Pets: A Guide to a Smooth Transition',
        'excerpt'  => 'Relocating with furry family members takes extra planning. Here\'s how to keep your pets calm and safe on moving day.',
        'category' => 'Pet Moving',
        'date'     => 'January 30, 2024',
        'image'    => 'https://picsum.photos/seed/blog-mv4/600/400',
        'href'     => '#',
    ],
    [
        'title'    => 'Clean Saving Strategies for an Affordable Move',
        'excerpt'  => 'Smart, practical ways to reduce your moving budget without sacrificing quality or the safety of your belongings.',
        'category' => 'Budget Moving',
        'date'     => 'January 15, 2024',
        'image'    => 'https://picsum.photos/seed/blog-mv5/600/400',
        'href'     => '#',
    ],
    [
        'title'    => 'Moving with Pets: Cards to a Smooth-Free Move',
        'excerpt'  => 'Additional resources and checklists to ensure your moving day goes exactly as planned from start to finish.',
        'category' => 'Checklist',
        'date'     => 'January 8, 2024',
        'image'    => 'https://picsum.photos/seed/blog-mv6/600/400',
        'href'     => '#',
    ],
];
?>

<section class="mv-blog section-pad" id="blog">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="mv-section-heading">OUR BLOG</h2>
        </div>

        <div class="row g-4">
            <?php foreach ($posts as $post): ?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="mv-blog-card h-100">
                    <div class="mv-blog-img-wrap">
                        <img
                            src="<?php echo htmlspecialchars($post['image']); ?>"
                            alt="<?php echo htmlspecialchars($post['title']); ?>"
                            class="mv-blog-img"
                        >
                    </div>
                    <div class="mv-blog-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="mv-blog-category"><?php echo htmlspecialchars($post['category']); ?></span>
                            <span class="mv-blog-date"><?php echo htmlspecialchars($post['date']); ?></span>
                        </div>
                        <h4 class="mv-blog-title">
                            <a href="<?php echo htmlspecialchars($post['href']); ?>">
                                <?php echo htmlspecialchars($post['title']); ?>
                            </a>
                        </h4>
                        <p class="mv-blog-excerpt"><?php echo htmlspecialchars($post['excerpt']); ?></p>
                        <a href="<?php echo htmlspecialchars($post['href']); ?>" class="mv-read-more">
                            Read More <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
