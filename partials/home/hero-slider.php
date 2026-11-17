<?php
    // HERO IMAGE SLIDER — full-viewport banner slideshow (slides one-by-one).
    // Covers the whole device viewport; the next section only appears on scroll.
    $slides = [
        './assets/image/Banner1.webp',
        './assets/image/Banner2.webp',
        './assets/image/Banner3.webp',
        './assets/image/Banner4.webp',
    ];
    // Floating circular quick-links (right side) — like the globalsubupdates banner circles.
    // Each circle is tinted with one logo colour (frosted-glass, dark text).
    $circles = [
        ['label' => 'ADMISSIONS<br>OPEN', 'aria' => 'Admissions open — check seat availability', 'href' => '#admission',            'color' => '#FFB811', 'icon' => '<path d="M22 10 12 5 2 10l10 5 10-5z"/><path d="M6 12v5c0 1 2.7 3 6 3s6-2 6-3v-5"/>'],
        ['label' => 'APPLY<br>NOW',       'aria' => 'Apply now — go to the admission page',     'href' => 'admission#inquiry-form', 'color' => '#EC008B', 'icon' => '<path d="M22 2 11 13"/><path d="M22 2 15 22 11 13 2 9l20-7z"/>'],
        ['label' => 'ENQUIRE<br>NOW',     'aria' => 'Enquire now — contact us',                 'href' => 'contact',                'color' => '#ABD92D', 'icon' => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.98.36 1.93.7 2.85a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.92.34 1.87.57 2.85.7A2 2 0 0 1 22 16.92z"/>'],
    ];
?>
<section id="top" class="hero-cover relative w-full overflow-hidden">

    <!-- Sliding banner images -->
    <div class="hero-slider swiper absolute inset-0 h-full w-full">
        <div class="swiper-wrapper">
            <?php foreach ($slides as $i => $src): ?>
                <?php $srcM = str_replace('.webp', '-m.webp', $src); ?>
                <div class="swiper-slide relative">
                    <img width="1742" height="903" src="<?= $src ?>"
                         srcset="<?= $srcM ?> 820w, <?= $src ?> 1742w" sizes="100vw"
                         alt="Rathinam International Public School campus <?= $i + 1 ?>"
                         class="h-full w-full object-cover"
                         <?= $i === 0 ? 'fetchpriority="high" decoding="async"' : 'loading="lazy" decoding="async"' ?>
                         onerror="this.style.display='none';this.parentElement.style.background='linear-gradient(135deg,#1B1464,#0a0a12 70%)'">
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Cinematic vignette + top/bottom gradients (legibility & mood) -->
    <div class="hero-vignette pointer-events-none absolute inset-0 z-[1]"></div>

    <!-- Right-side circular quick-links — FIXED (sticky) so they stay visible on the
         right, vertically centred, across the whole home page on desktop AND mobile.
         Home-only (this partial is index-only). -->
    <div class="hero-quicklinks fixed top-1/2 flex -translate-y-1/2 flex-col items-center gap-3">
        <?php foreach ($circles as $i => $c): $circ = ['#FFB811' => 'circ-gold', '#EC008B' => 'circ-pink', '#ABD92D' => 'circ-green'][$c['color']] ?? ''; ?>
            <a href="<?= $c['href'] ?>" aria-label="<?= $c['aria'] ?>" class="hero-circle floating-card float-<?= ($i % 4) + 1 ?> <?= $circ ?>">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?= $c['icon'] ?></svg>
                <span><?= $c['label'] ?></span>
            </a>
        <?php endforeach; ?>
    </div>

    <!-- Pagination dots -->
    <div class="hero-dots absolute bottom-7 left-1/2 z-10 -translate-x-1/2"></div>

</section>
