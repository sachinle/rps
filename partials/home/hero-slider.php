<?php
    // HERO IMAGE SLIDER — full-viewport banner slideshow (slides one-by-one).
    // Covers the whole device viewport; the next section only appears on scroll.
    $slides = [
        './assets/image/about-campus.jpg',
        './assets/image/Banner1.png',
        './assets/image/Banner2.png',
        './assets/image/Banner3.png',
        './assets/image/Banner4.png',
    ];
?>
<section id="top" class="relative w-full overflow-hidden" style="height:100svh;min-height:520px;">

    <!-- Sliding banner images -->
    <div class="hero-slider swiper absolute inset-0 h-full w-full">
        <div class="swiper-wrapper">
            <?php foreach ($slides as $i => $src): ?>
                <div class="swiper-slide relative">
                    <img src="<?= $src ?>" alt="Rathinam International Public School campus <?= $i + 1 ?>"
                         class="h-full w-full object-cover"
                         <?= $i === 0 ? 'fetchpriority="high"' : 'loading="lazy"' ?>
                         onerror="this.style.display='none';this.parentElement.style.background='linear-gradient(135deg,#1B1464,#0a0a12 70%)'">
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Cinematic vignette + top/bottom gradients (legibility & mood) -->
    <div class="hero-vignette pointer-events-none absolute inset-0 z-[1]"></div>

    <!-- Pagination dots -->
    <div class="hero-dots absolute bottom-7 left-1/2 z-10 -translate-x-1/2"></div>

    <!-- Mouse scroll animation -->
    <a href="#about" aria-label="Scroll down" class="absolute bottom-16 left-1/2 z-10 flex -translate-x-1/2 flex-col items-center gap-2 text-white/85 transition-colors hover:text-white">
        <span class="text-[11px] font-medium uppercase tracking-[0.3em]">Scroll</span>
        <span class="flex h-9 w-5 items-start justify-center rounded-full border border-white/50 p-1">
            <span class="h-2 w-1 animate-bounce rounded-full bg-rps-amber"></span>
        </span>
    </a>
</section>
