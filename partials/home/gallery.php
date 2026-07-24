<?php
    // GALLERY — two-row marquee. Rows scroll in OPPOSITE directions with mixed
    // image sizes (wide = big, ~square = small). Reuses .marquee (JS clones each
    // track for a seamless infinite loop). Photos: assets/image/gallery/01..08.jpg
    $photos = [];
    for ($n = 1; $n <= 8; $n++) { $photos[] = sprintf('gallery/%02d.jpg', $n); }
    // Varied aspect ratios cycled per item to create the big/small mix.
    $ratios = [1.55, 0.92, 1.35, 1.15, 1.7, 0.88, 1.3, 1.05];
    $row1 = $photos;
    $row2 = array_reverse($photos);

    // Small helper to render a marquee row of gallery images.
    $renderRow = function ($imgs, $offset) use ($ratios) {
        foreach ($imgs as $i => $img):
            $ratio = $ratios[($i + $offset) % count($ratios)];
    ?>
        <figure class="gallery-item" style="aspect-ratio: <?= $ratio ?>">
            <img src="./assets/image/<?= $img ?>" alt="RPS gallery" loading="lazy"
                 onerror="this.parentElement.style.background='linear-gradient(135deg,#c9cbe0,#e7e9f6)'">
        </figure>
    <?php endforeach;
    };
?>
<section id="gallery" class="relative overflow-hidden py-24 sec-light">
    <div class="rps-container">
        <div class="mx-auto max-w-2xl text-center">
            <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Life @ RPS</div>
            <h2 class="sec-title reveal-up mt-5 text-3xl md:text-5xl">Our <span class="brand-text">Gallery</span></h2>
            <p class="reveal-up mt-5 text-slate-400">Snapshots of everyday joy, celebration and learning at RPS.</p>
        </div>
    </div>

    <div class="mt-12 space-y-4">
        <!-- Row 1 — scrolls left -->
        <div class="marquee" style="--mq-speed:58s">
            <div class="marquee__track gallery-row"><?php $renderRow($row1, 0); ?></div>
        </div>
        <!-- Row 2 — scrolls right (opposite direction) -->
        <div class="marquee marquee--reverse" style="--mq-speed:66s">
            <div class="marquee__track gallery-row"><?php $renderRow($row2, 3); ?></div>
        </div>
    </div>

    <div class="mt-10 text-center">
        <a href="#" class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/5 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/10">
            View Full Gallery
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
    </div>
</section>
