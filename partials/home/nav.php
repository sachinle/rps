<?php
    // Maps an accent colour value to its utility class (keeps per-item colours in
    // the stylesheet instead of inline styles). Loaded here as nav.php is first on
    // every page. Returns '' for unknown colours (caller can fall back).
    if (!function_exists('rps_acc')) {
        function rps_acc($c) {
            static $m = [
                '#FFB811' => 'acc-gold', '#EC008B' => 'acc-pink', '#ABD92D' => 'acc-green', '#5A5FD8' => 'acc-indigo',
                '#EAB308' => 'acc-amber', '#3DB54A' => 'acc-grass', '#9333EA' => 'acc-purple', '#7C3AED' => 'acc-violet',
                'var(--rps-pink)' => 'acc-rpink', 'var(--rps-green)' => 'acc-rgreen',
                'var(--rps-amber)' => 'acc-ramber', 'var(--rps-blue)' => 'acc-rblue',
            ];
            return $m[$c] ?? '';
        }
    }

    // Top navigation — fixed, transparent over hero, glass on scroll. Logo LEFT;
    // menu RIGHT. Items with a 'sub' array show a dropdown (desktop) / accordion
    // (mobile). Data is centralised here so both menus stay in sync.
    $isIndex = basename($_SERVER['PHP_SELF']) === 'index.php';
    $base = $isIndex ? '' : './';   // clean-URL home base: '' on home, './' (root) on subpages
    $gmapsUrl = 'https://www.google.com/maps/place/Rathinam+International+Public+School/@10.9284418,76.8967471,17z/data=!3m1!4b1!4m6!3m5!1s0x3ba85a5f4b6a61c1:0x4f178ffa18134683!8m2!3d10.9284418!4d76.8967471!16s%2Fg%2F11b8z97y0_';
    $navClass = $navClass ?? '';   // set by the including page; default empty (transparent nav)

    $menu = [
        ['label' => 'Home',             'href' => $base . '#top'],
        ['label' => 'About',            'href' => 'about', 'sub' => [
            'About RPS / Motto'                  => 'about#about-rps',
            'Vision'                             => 'about#vision',
            'Mission'                            => 'about#mission',
            "Head's Desk"                        => 'about#heads-desk',
            'Core Leadership Team'               => 'about#leadership',
        ]],
        ['label' => 'Curriculum',       'href' => 'curriculum', 'sub' => [
            'Holistic Curriculum'                => 'curriculum#holistic',
            'ATAL Tinkering Lab'                 => 'curriculum#atal',
            'Modern Education'                   => 'curriculum#modern',
            'Academic Stages'                    => 'admission#stages',
            'School Gallery'                     => 'curriculum#gallery',
        ]],
        ['label' => 'Beyond Academics', 'href' => 'beyond-academics', 'sub' => [
            'Post School Activities'             => 'post-school-activities',
            'Celebrations'                       => 'celebrations',
            'Career Counselling'                 => 'career-counselling',
            'Guest Lectures'                     => 'guest-lectures',
            'CBSE Cluster'                       => 'https://rathinamschool.ac.in/wp-content/uploads/2025/07/CBSE-Rathinam-clustures-2025-26.pdf',
        ]],
        ['label' => 'Teaching &amp; Learning', 'href' => 'teaching-method', 'sub' => [
            'Teaching Method'                    => 'teaching-method',
            'Facilities'                         => 'facilities',
            'Grievance'                          => 'https://forms.gle/q8EajohMUEiCPwLa7',
        ]],
        ['label' => 'Life at RPS',      'href' => $base . '#gallery', 'sub' => [
            'Gallery'                            => $base . '#gallery',
            'Happenings'                         => $base . '#gallery',
            'Achievements'                       => $base . '#gallery',
        ]],
        ['label' => 'Career',           'href' => 'career'],
        ['label' => 'Contact',          'href' => 'contact', 'sub' => [
            'Call'                               => 'tel:+918144260260',
            'Location'                           => $gmapsUrl,
            'Get in Touch'                       => 'contact',
            'Brochure'                           => $base . '#footer', // TODO: point to brochure PDF once available
        ]],
    ];
    $caret = '<svg class="nav-caret" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>';
?>
<header id="rps-nav" class="fixed top-0 inset-x-0 z-[1000] px-4 md:px-8 py-2 <?= $navClass ?>">
    <div class="mx-auto flex max-w-[1320px] items-center justify-between gap-4">

        <!-- LEFT: logo — logo2 (light) over the transparent hero, logo (dark) once solid -->
        <a href="<?= $base ?>#top" class="flex items-center gap-3 flex-shrink-0">
            <img width="640" height="284"
                src="assets/image/logo2.webp"
                alt="Rathinam International Public School logo"
                class="nav-logo nav-logo--light h-16 w-auto max-w-[360px] object-contain md:h-[84px]"
            >
            <img width="640" height="286"
                src="assets/image/logo.webp"
                alt="Rathinam International Public School logo"
                class="nav-logo nav-logo--dark h-16 w-auto max-w-[360px] object-contain md:h-[84px]"
            >
        </a>

        <!-- RIGHT: desktop menu (shown ≥1180px via CSS) -->
        <nav class="desk-menu items-center gap-5 text-sm font-semibold text-slate-700">
            <?php foreach ($menu as $item): ?>
                <?php if (empty($item['sub'])): ?>
                    <a href="<?= $item['href'] ?>" class="nav-link transition-colors hover:text-rps-amberdark"><?= $item['label'] ?></a>
                <?php else: ?>
                    <div class="nav-group relative">
                        <a href="<?= $item['href'] ?>" class="nav-link inline-flex items-center gap-1 transition-colors hover:text-rps-amberdark">
                            <?= $item['label'] ?><?= $caret ?>
                        </a>
                        <div class="nav-dropdown">
                            <?php foreach ($item['sub'] as $sl => $sh): $ext = preg_match('#^https?://#', $sh); ?>
                                <a href="<?= $sh ?>"<?= $ext ? ' target="_blank" rel="noopener"' : '' ?> class="nav-dropdown-link"><?= $sl ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </nav>

        <!-- Mobile burger (shown <1180px via CSS) -->
        <button id="rps-burger" class="h-11 w-11 items-center justify-center rounded-xl border border-slate-200 bg-slate-100 text-slate-800" aria-label="Toggle menu" aria-expanded="false">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
    </div>

    <!-- Mobile menu -->
    <div id="rps-mobile" class="nav-mobile-panel hidden mt-3 rounded-2xl border border-slate-200 bg-white p-3 shadow-xl">
        <nav class="flex flex-col gap-0.5 text-base font-semibold text-slate-700">
            <?php foreach ($menu as $item): ?>
                <?php if (empty($item['sub'])): ?>
                    <a href="<?= $item['href'] ?>" class="rounded-lg px-3 py-2.5 hover:bg-slate-100 hover:text-rps-amberdark transition-colors"><?= $item['label'] ?></a>
                <?php else: ?>
                    <details class="nav-acc">
                        <summary class="flex cursor-pointer items-center justify-between rounded-lg px-3 py-2.5 hover:bg-slate-100">
                            <span><?= $item['label'] ?></span>
                            <svg class="nav-acc-caret" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                        </summary>
                        <div class="mb-1 ml-3 flex flex-col border-l border-slate-200 pl-3">
                            <?php foreach ($item['sub'] as $sl => $sh): $ext = preg_match('#^https?://#', $sh); ?>
                                <a href="<?= $sh ?>"<?= $ext ? ' target="_blank" rel="noopener"' : '' ?> class="rounded-lg px-3 py-2 text-sm font-medium text-slate-600 hover:bg-slate-100 hover:text-rps-amberdark transition-colors"><?= $sl ?></a>
                            <?php endforeach; ?>
                        </div>
                    </details>
                <?php endif; ?>
            <?php endforeach; ?>
        </nav>
    </div>
</header>
