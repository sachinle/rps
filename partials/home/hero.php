<?php
    // HERO — full viewport. Background is a fading Swiper image slider.
    // Drop campus photos into assets/image/hero/slide-1..4.jpg (1920x1080).
    $heroSlides = [
        './assets/image/hero/slide-1.jpg',
        './assets/image/hero/slide-2.jpg',
        './assets/image/hero/slide-3.jpg',
        './assets/image/hero/slide-4.jpg',
    ];
?>
<section id="journey" class="relative w-full overflow-hidden py-20 md:py-24">

    <!-- ===== Background image slider ===== -->
    <div class="hero-swiper swiper absolute inset-0 h-full w-full">
        <div class="swiper-wrapper">
            <?php foreach ($heroSlides as $i => $src): ?>
                <!-- IMAGE NEEDED: <?= $src ?> (full-bleed campus photo, 1920x1080) -->
                <div class="hero-slide swiper-slide relative">
                    <img src="<?= $src ?>" alt="RPS campus <?= $i + 1 ?>" class="h-full w-full object-cover"
                         onerror="this.style.display='none';this.parentElement.style.background='linear-gradient(135deg,#1B1464,#0a0a12 70%)'">
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination !bottom-6"></div>
    </div>

    <!-- ===== Foreground content ===== -->
    <div class="relative z-10 mx-auto flex max-w-[1320px] flex-col justify-center px-5 md:px-8">
        <div class="flex flex-col gap-8 lg:grid lg:grid-cols-12 lg:items-center">

            <!-- LEFT: headline -->
            <div class="col-span-12 lg:col-span-7">
                <div class="eyebrow reveal-up">
                    <span class="dot"></span>
                    #HappySchooling · CBSE Affiliation 1930977
                </div>

                <h1 class="sec-title reveal-up mt-6 text-4xl sm:text-5xl md:text-6xl xl:text-7xl">
                    The Journey of<br>
                    <span class="brand-text brand-hero">Success</span> Starts Here
                </h1>

                <p class="reveal-up mt-6 max-w-xl text-base md:text-lg text-slate-300/90">
                    Rathinam International Public School, Coimbatore — nurturing young
                    minds from early childhood to high school graduation through
                    positive psychology, AI-powered learning and holistic growth.
                </p>

                <div class="reveal-up mt-8 flex flex-wrap items-center gap-4">
                    <a href="#admission" class="group inline-flex items-center gap-2.5 rounded-2xl btn-primary px-7 py-3.5 font-semibold text-white shadow-lg shadow-rps-amber/40 transition hover:scale-105">
                        Enquire Admission
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="transition-transform group-hover:translate-x-1"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="#about" class="inline-flex items-center gap-2.5 rounded-2xl border border-white/15 bg-white/5 px-7 py-3.5 font-semibold text-white backdrop-blur transition hover:bg-white/10">
                        Explore RPS
                    </a>
                </div>
            </div>

            <!-- RIGHT: floating QR + badge cards -->
            <div class="col-span-12 lg:col-span-5">
                <div class="relative mx-auto max-w-xs lg:ml-auto lg:max-w-sm">
                    <!-- QR admission card -->
                    <div class="glass floating-card float-1 p-5 text-center">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-rps-amber">Admissions Open</p>
                        <p class="mt-1 text-sm text-slate-300">Scan to start your application</p>
                        <!-- IMAGE NEEDED: assets/image/hero/qr.png (admission QR, square) -->
                        <div class="mx-auto mt-4 grid h-32 w-32 place-items-center rounded-xl bg-white/90 p-2">
                            <img src="./assets/image/hero/qr.png" alt="Admission QR code" class="h-full w-full object-contain"
                                 onerror="this.replaceWith(Object.assign(document.createElement('span'),{className:'text-xs text-rps-navy font-semibold',textContent:'QR here'}))">
                        </div>
                    </div>

                    <!-- floating mini badges -->
                    <div class="glass floating-card float-3 absolute -left-6 -bottom-6 hidden lg:flex items-center gap-3 p-3 pr-4">
                        <span class="grid h-9 w-9 place-items-center rounded-lg bg-rps-green/20 text-rps-green">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="M22 4 12 14.01l-3-3"/></svg>
                        </span>
                        <span class="text-left leading-tight">
                            <span class="block text-sm font-semibold text-white">CBSE Senior</span>
                            <span class="block text-xs text-slate-400">Secondary School</span>
                        </span>
                    </div>

                    <div class="glass floating-card float-2 absolute -right-4 -top-12 hidden lg:flex items-center gap-3 p-3 pr-4">
                        <span class="grid h-9 w-9 place-items-center rounded-lg bg-rps-amber/20 text-rps-amber">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 2 7l10 5 10-5-10-5z"/><path d="m2 17 10 5 10-5M2 12l10 5 10-5"/></svg>
                        </span>
                        <span class="text-left leading-tight">
                            <span class="block text-sm font-semibold text-white">Nursery – Grade 12</span>
                            <span class="block text-xs text-slate-400">One joyful journey</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
