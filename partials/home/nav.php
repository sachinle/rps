<?php
    // Top navigation — fixed, transparent over hero, turns to glass on scroll.
    // Logo sits LEFT, menu + Apply CTA sit RIGHT.
    $menu = [
        'Home'             => '#top',
        'About'            => '#about',
        'Academics'        => '#stages',
        'Admissions'       => '#admission',
        'Beyond Academics' => '#extra',
        'Life @ RPS'       => '#gallery',
        'Contact'          => '#footer',
    ];
?>
<header id="rps-nav" class="fixed top-0 inset-x-0 z-[1000] px-4 md:px-8 py-3 md:py-4">
    <div class="mx-auto flex max-w-[1320px] items-center justify-between gap-4">

        <!-- LEFT: logo -->
        <a href="#top" class="flex items-center gap-3 flex-shrink-0">
            <!-- IMAGE NEEDED: assets/image/logo.png  (RPS wide logo, transparent, ~360x110).
                 Fallback below draws the 3-dot mark + wordmark purely in code. -->
            <span class="flex items-center gap-2">
                <span class="relative block h-9 w-9">
                    <span class="absolute left-0 top-0 h-3 w-3 rounded-full bg-rps-pink"></span>
                    <span class="absolute right-0 top-0 h-3 w-3 rounded-full bg-rps-green"></span>
                    <span class="absolute left-1 bottom-0 h-3 w-3 rounded-full bg-rps-amber"></span>
                </span>
                <span class="leading-none">
                    <span class="block font-display text-xl font-semibold tracking-tight text-white">rps</span>
                    <span class="block text-[8px] font-medium uppercase tracking-[0.28em] text-slate-400">Rathinam Intl.</span>
                </span>
            </span>
        </a>

        <!-- RIGHT: desktop menu -->
        <nav class="hidden lg:flex items-center gap-7 text-sm font-medium text-slate-200">
            <?php foreach ($menu as $label => $href): ?>
                <a href="<?= $href ?>" class="nav-link transition-colors hover:text-white"><?= $label ?></a>
            <?php endforeach; ?>
        </nav>

        <div class="hidden lg:flex items-center gap-3">
            <a href="tel:+918144260260" class="flex items-center gap-2 text-sm text-slate-300 hover:text-white transition-colors">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.98.36 1.93.7 2.85a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.92.34 1.87.57 2.85.7A2 2 0 0 1 22 16.92z"/></svg>
                <span class="hidden xl:inline">+91 81442 60260</span>
            </a>
            <a href="#admission" class="group inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-rps-pink to-rps-amber px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-rps-pink/30 transition hover:scale-105">
                Apply Now
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="transition-transform group-hover:translate-x-0.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>

        <!-- Mobile burger -->
        <button id="rps-burger" class="lg:hidden flex h-11 w-11 items-center justify-center rounded-xl border border-white/10 bg-white/5 text-white" aria-label="Toggle menu">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
    </div>

    <!-- Mobile menu -->
    <div id="rps-mobile" class="hidden lg:hidden mt-3 rounded-2xl border border-white/10 bg-rps-ink/95 p-4 backdrop-blur-xl">
        <nav class="flex flex-col gap-1 text-base font-medium text-slate-200">
            <?php foreach ($menu as $label => $href): ?>
                <a href="<?= $href ?>" class="rounded-lg px-3 py-2.5 hover:bg-white/5 hover:text-white transition-colors"><?= $label ?></a>
            <?php endforeach; ?>
            <a href="#admission" class="mt-2 inline-flex items-center justify-center gap-2 rounded-full bg-gradient-to-r from-rps-pink to-rps-amber px-5 py-3 font-semibold text-white">Apply Now</a>
        </nav>
    </div>
</header>
