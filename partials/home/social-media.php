<?php
    // SOCIAL MEDIA — Instagram-style post grid.
    // Drop square thumbnails in assets/image/social/01..08.jpg
    $posts = range(1, 8);
?>
<section class="relative py-24 sec-light">
    <div class="rps-container">
        <div class="flex flex-col items-center gap-6 md:flex-row md:items-end md:justify-between">
            <div class="text-center md:text-left">
                <div class="eyebrow reveal-up"><span class="dot"></span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
                    RPS in Social Media
                </div>
                <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">
                    Moments from Our <span class="brand-text">Happy Campus</span>
                </h2>
            </div>
            <a href="https://www.instagram.com/" target="_blank" rel="noopener" class="reveal-up inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-rps-pink to-rps-pinkdark px-5 py-2.5 text-sm font-semibold text-white transition hover:scale-105">
                Follow @rps
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M8 7h9v9"/></svg>
            </a>
        </div>

        <div class="mt-10 grid grid-cols-2 gap-3 sm:grid-cols-3 md:gap-4 lg:grid-cols-4">
            <?php foreach ($posts as $n):
                $file = sprintf('social/%02d.jpg', $n); ?>
                <!-- IMAGE NEEDED: assets/image/<?= $file ?> (square instagram post) -->
                <a href="https://www.instagram.com/" target="_blank" rel="noopener" class="reveal-up group relative aspect-square overflow-hidden rounded-2xl border border-white/10 bg-gradient-to-br from-rps-panel to-rps-ink">
                    <img src="./assets/image/<?= $file ?>" alt="RPS Instagram post <?= $n ?>" loading="lazy" class="h-full w-full object-cover transition duration-500 group-hover:scale-110"
                         onerror="this.parentElement.classList.add('grid','place-items-center');this.replaceWith(Object.assign(document.createElement('span'),{className:'text-[11px] text-slate-500',textContent:'<?= $file ?>'}))">
                    <span class="absolute inset-0 grid place-items-center bg-rps-ink/60 opacity-0 transition group-hover:opacity-100">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="#fff" stroke="none"/></svg>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
