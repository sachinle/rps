<?php
    // SOCIAL MEDIA — Instagram-style post grid (2 rows × 5 columns = 10 tiles).
    // Drop square thumbnails in assets/image/social/01..08.webp. The last two are
    // duplicates (01, 02) as placeholders — replace them with 09.jpg / 10.jpg.
    $posts = [1, 2, 3, 4, 5, 6, 7, 8, 1, 2];
?>
<section class="relative py-24 sec-light">
    <div class="rps-container">
        <div class="flex flex-col items-center gap-4 text-center">
            <div>
                <div class="eyebrow reveal-up mx-auto"><span class="dot"></span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
                    RPS on Instagram
                </div>
                <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">
                    Moments from <span class="brand-text">RPS</span>
                </h2>
                <p class="reveal-up mt-4">
                    <a href="https://www.instagram.com/rps.cbe/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-sm font-semibold text-rps-amber hover:underline">
                        Discover More. Follow RPS
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M8 7h9v9"/></svg>
                    </a>
                </p>
            </div>
        </div>

        <div class="mt-10 grid grid-cols-2 gap-3 sm:grid-cols-3 md:grid-cols-4 md:gap-4 lg:grid-cols-5">
            <?php foreach ($posts as $n):
                $file = sprintf('social/%02d.webp', $n); ?>
                <!-- IMAGE NEEDED: assets/image/<?= $file ?> (square instagram post) -->
                <a href="https://www.instagram.com/rps.cbe/" target="_blank" rel="noopener noreferrer" class="reveal-up group relative aspect-square overflow-hidden rounded-2xl border border-white/10 bg-gradient-to-br from-rps-panel to-rps-ink">
                    <img width="600" height="600" src="./assets/image/<?= $file ?>" alt="RPS Instagram post <?= $n ?>" loading="lazy" class="h-full w-full object-cover transition duration-500 group-hover:scale-110"
                         onerror="this.parentElement.classList.add('grid','place-items-center');this.replaceWith(Object.assign(document.createElement('span'),{className:'text-[11px] text-slate-500',textContent:'<?= $file ?>'}))">
                    <span class="absolute inset-0 grid place-items-center bg-rps-ink/60 opacity-0 transition group-hover:opacity-100">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="#fff" stroke="none"/></svg>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>

    </div>
</section>
