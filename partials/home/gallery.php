<?php
    // GALLERY — auto-sliding photo carousel. Drop 4:3 photos in assets/image/gallery/01..08.jpg
    $photos = range(1, 8);
?>
<section id="gallery" class="relative py-24 sec-light">
    <div class="rps-container">
        <div class="mx-auto max-w-2xl text-center">
            <div class="eyebrow reveal-up mx-auto"><span class="dot" style="background:var(--rps-amber);box-shadow:0 0 0 4px rgba(251,176,64,.25)"></span> Life @ RPS</div>
            <h2 class="sec-title reveal-up mt-5 text-3xl md:text-5xl">Our <span class="brand-text">Gallery</span></h2>
            <p class="reveal-up mt-5 text-slate-400">Snapshots of everyday joy, celebration and learning at RPS.</p>
        </div>
    </div>

    <div class="mt-12">
        <div class="gallery-swiper swiper reveal-up overflow-hidden px-4">
            <div class="swiper-wrapper">
                <?php foreach ($photos as $n):
                    $file = sprintf('gallery/%02d.jpg', $n); ?>
                    <!-- IMAGE NEEDED: assets/image/<?= $file ?> (gallery photo, 4:3) -->
                    <div class="swiper-slide">
                        <div class="glass overflow-hidden p-1.5">
                            <div class="aspect-[4/3] overflow-hidden rounded-2xl bg-gradient-to-br from-rps-panel to-rps-ink">
                                <img src="./assets/image/<?= $file ?>" alt="RPS gallery photo <?= $n ?>" loading="lazy" class="h-full w-full object-cover transition duration-500 hover:scale-110"
                                     onerror="this.parentElement.innerHTML='<div class=\'grid aspect-[4/3] place-items-center text-[11px] text-slate-500\'><?= $file ?></div>'">
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination !relative !mt-6"></div>
        </div>
    </div>

    <div class="mt-8 text-center">
        <a href="#" class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/5 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/10">
            View Full Gallery
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
    </div>
</section>
