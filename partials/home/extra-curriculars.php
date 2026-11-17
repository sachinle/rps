<?php
    // CO-CURRICULARS — refined card grid (senior-school tone; no playful hexagons).
    // Icons are inline SVGs so no image assets are required here.
    // Four-colour RPS brand pattern (logo palette). The brand navy is brightened to
    // an indigo so it stays legible on the dark #0A0A12 cards; the rest are as-is.
    $c = ['#FFB811', '#EC008B', '#ABD92D', '#5A5FD8']; // gold, pink, green, blue
    // Deliberately varied colour order so tiles don't line up by column (row-wise).
    $order = [0, 2, 1, 3, 0, 2,  3, 1, 2, 0, 1, 3,  2, 0];
    $activities = [
        ['Swimming',   '<path d="M2 16s2-2 4-2 3 2 6 2 4-2 6-2 4 2 4 2"/><path d="M2 20s2-2 4-2 3 2 6 2 4-2 6-2 4 2 4 2"/><circle cx="16" cy="6" r="2"/><path d="m8 12 4-3 3 2"/>'],
        ['Skating',    '<circle cx="6" cy="19" r="2"/><circle cx="18" cy="19" r="2"/><path d="M6 17V5h6l3 5h3M4 9h6"/>'],
        ['Yoga',       '<circle cx="12" cy="5" r="2"/><path d="M12 7v6m0 0 4 6m-4-6-4 6m-4-9h16"/>'],
        ['Taekwondo',  '<path d="M6 12 3 21l6-3 3-6"/><path d="m14 10 7-7-3 8-4-1z"/><circle cx="9" cy="6" r="2"/>'],
        ['Silambam',   '<path d="M4 20 20 4"/><path d="M4 4l3 1-1 3M20 20l-3-1 1-3"/>'],
        ['Music',      '<path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/>'],
        ['Dance',      '<circle cx="12" cy="4" r="2"/><path d="M12 6v6l4 8m-4-8-4 8m-2-11 6 3 6-3"/>'],
        ['Chess',      '<path d="M8 16h8l1 4H7l1-4z"/><path d="M10 16v-3M14 16v-3"/><circle cx="12" cy="6" r="3"/><path d="M9 13h6"/>'],
        ['Art & Craft','<path d="M12 2a10 10 0 1 0 0 20 3 3 0 0 0 0-6h-1a2 2 0 0 1 0-4h3a4 4 0 0 0 0-8"/><circle cx="7.5" cy="10.5" r="1"/><circle cx="12" cy="7.5" r="1"/><circle cx="16.5" cy="10.5" r="1"/>'],
        ['Football',   '<circle cx="12" cy="12" r="9"/><path d="m12 8 3.5 2.5L14 15h-4l-1.5-4.5L12 8z"/>'],
        ['Basketball', '<circle cx="12" cy="12" r="9"/><path d="M12 3v18M3 12h18M5 5c4 4 4 10 0 14M19 5c-4 4-4 10 0 14"/>'],
        ['Athletics',  '<circle cx="15" cy="5" r="2"/><path d="M13 8l-3 3 3 2 1 5m-1-7 4 1"/><path d="M4 20l4-6"/>'],
        ['Robotics',   '<rect x="6" y="8" width="12" height="10" rx="2"/><path d="M12 8V5M9 3h6M9 13h.01M15 13h.01M9 18v3M15 18v3"/>'],
        ['Public Speaking','<path d="M3 11l18-5v12L3 14v-3z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/>'],
    ];
?>
<section id="extra" class="relative py-24">
    <div class="rps-container">
        <div class="mx-auto max-w-3xl text-center">
            <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Beyond Academics</div>
            <h2 class="sec-title reveal-up mt-5 text-3xl md:text-5xl">
                <span class="brand-text">10+</span> Extra-curricular Programs
            </h2>
            <p class="reveal-up mt-5 text-slate-400">
                Beyond the syllabus, RPS offers a diverse range of sports, clubs and creative
                pursuits that help all the students develop confidence, leadership and lifelong skills.
            </p>
        </div>

        <div class="reveal-up mt-14 grid grid-cols-2 gap-3 sm:grid-cols-3 md:gap-4 lg:grid-cols-4 xl:grid-cols-6">
            <?php foreach ($activities as $i => $a):
                $accent = $c[$order[$i % count($order)]]; ?>
                <div class="activity-card <?= rps_acc($accent) ?>">
                    <span class="activity-ico">
                        <svg viewBox="0 0 24 24" fill="none" stroke="<?= $accent ?>" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?= $a[1] ?></svg>
                    </span>
                    <span class="activity-name"><?= $a[0] ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
