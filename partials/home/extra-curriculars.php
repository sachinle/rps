<?php
    // CO-CURRICULARS — refined card grid (senior-school tone; no playful hexagons).
    // Icons are inline SVGs so no image assets are required here.
    $c = ['var(--rps-amber)', 'var(--rps-blue)', 'var(--rps-green)', 'var(--rps-navy)'];
    $activities = [
        ['Swimming',   '<path d="M2 16s2-2 4-2 3 2 6 2 4-2 6-2 4 2 4 2"/><path d="M2 20s2-2 4-2 3 2 6 2 4-2 6-2 4 2 4 2"/><circle cx="16" cy="6" r="2"/><path d="m8 12 4-3 3 2"/>'],
        ['Skating',    '<circle cx="6" cy="19" r="2"/><circle cx="18" cy="19" r="2"/><path d="M6 17V5h6l3 5h3M4 9h6"/>'],
        ['Yoga',       '<circle cx="12" cy="5" r="2"/><path d="M12 7v6m0 0 4 6m-4-6-4 6m-4-9h16"/>'],
        ['Karate',     '<path d="M6 12 3 21l6-3 3-6"/><path d="m14 10 7-7-3 8-4-1z"/><circle cx="9" cy="6" r="2"/>'],
        ['Music',      '<path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/>'],
        ['Dance',      '<circle cx="12" cy="4" r="2"/><path d="M12 6v6l4 8m-4-8-4 8m-2-11 6 3 6-3"/>'],
        ['Chess',      '<path d="M8 16h8l1 4H7l1-4z"/><path d="M10 16v-3M14 16v-3"/><circle cx="12" cy="6" r="3"/><path d="M9 13h6"/>'],
        ['Art & Craft','<path d="M12 2a10 10 0 1 0 0 20 3 3 0 0 0 0-6h-1a2 2 0 0 1 0-4h3a4 4 0 0 0 0-8"/><circle cx="7.5" cy="10.5" r="1"/><circle cx="12" cy="7.5" r="1"/><circle cx="16.5" cy="10.5" r="1"/>'],
        ['Football',   '<circle cx="12" cy="12" r="9"/><path d="m12 8 3.5 2.5L14 15h-4l-1.5-4.5L12 8z"/>'],
        ['Basketball', '<circle cx="12" cy="12" r="9"/><path d="M12 3v18M3 12h18M5 5c4 4 4 10 0 14M19 5c-4 4-4 10 0 14"/>'],
        ['Athletics',  '<circle cx="15" cy="5" r="2"/><path d="M13 8l-3 3 3 2 1 5m-1-7 4 1"/><path d="M4 20l4-6"/>'],
        ['Robotics',   '<rect x="6" y="8" width="12" height="10" rx="2"/><path d="M12 8V5M9 3h6M9 13h.01M15 13h.01M9 18v3M15 18v3"/>'],
        ['Public Speaking','<path d="M3 11l18-5v12L3 14v-3z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/>'],
        ['Entrepreneurship','<path d="M3 21h18M6 21V9l6-4 6 4v12M10 21v-6h4v6"/>'],
        ['Coding Club','<path d="m8 8-4 4 4 4M16 8l4 4-4 4M13 6l-2 12"/>'],
        ['Photography','<path d="M4 8h3l2-2h6l2 2h3v11H4V8z"/><circle cx="12" cy="13" r="3"/>'],
    ];
?>
<section id="extra" class="relative py-24 sec-light">
    <div class="rps-container">
        <div class="mx-auto max-w-3xl text-center">
            <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Beyond Academics</div>
            <h2 class="sec-title reveal-up mt-5 text-3xl md:text-5xl">
                <span class="brand-text">15+</span> Co-Curricular Programs
            </h2>
            <p class="reveal-up mt-5 text-slate-400">
                Beyond the syllabus, RPS offers a structured spectrum of clubs, sports and
                creative pursuits — helping every senior-school student build character,
                leadership and lifelong skills.
            </p>
        </div>

        <div class="reveal-up mt-14 grid grid-cols-2 gap-3 sm:grid-cols-3 md:gap-4 lg:grid-cols-4 xl:grid-cols-6">
            <?php foreach ($activities as $i => $a):
                $accent = $c[$i % count($c)]; ?>
                <div class="activity-card" style="--accent: <?= $accent ?>">
                    <span class="activity-ico">
                        <svg viewBox="0 0 24 24" fill="none" stroke="<?= $accent ?>" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?= $a[1] ?></svg>
                    </span>
                    <span class="activity-name"><?= $a[0] ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
