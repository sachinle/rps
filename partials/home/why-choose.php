<?php
    // WHY CHOOSE RPS  +  POSITIVE PSYCHOLOGY IN LEARNING
    // Left: reasons as one-side-accent reveal cards. Right: colourful trait grid.
    $reasons = [
        ['accent' => 'var(--rps-pink)',  'title' => 'Holistic Curriculum',   'desc' => 'A balanced blend of academics, arts, sports and life-skills that shapes the whole child.', 'icon' => '<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>'],
        ['accent' => 'var(--rps-green)', 'title' => 'Experienced Faculty',   'desc' => 'Passionate, well-trained mentors who bring learning alive with care and expertise.', 'icon' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>'],
        ['accent' => 'var(--rps-amber)', 'title' => 'Digital Classrooms',    'desc' => 'Smart, technology-integrated classrooms that make every lesson interactive and engaging.', 'icon' => '<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>'],
        ['accent' => 'var(--rps-blue)',  'title' => 'Safe & Caring Campus',  'desc' => 'A secure, supervised and joyful environment where every child feels valued and safe.', 'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>'],
    ];
    $traits = [
        [
            'label'  => 'Growth Mindset',
            'accent' => '#EAB308',
            'icon'   => '<path d="M12 2a7 7 0 0 1 7 7c0 2.38-1.19 4.47-3 5.74V17a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1v-2.26C6.19 13.47 5 11.38 5 9a7 7 0 0 1 7-7z"/><path d="M9 21h6"/>',
        ],
        [
            'label'  => 'Emotional Intelligence',
            'accent' => '#3DB54A',
            'icon'   => '<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l8.72-8.72 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>',
        ],
        [
            'label'  => 'Confidence & Courage',
            'accent' => '#EAB308',
            'icon'   => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>',
        ],
        [
            'label'  => 'Curiosity & Wonder',
            'accent' => '#3DB54A',
            'icon'   => '<path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3z"/>',
        ],
        [
            'label'  => 'Resilience',
            'accent' => '#EAB308',
            'icon'   => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        ],
        [
            'label'  => 'Empathy & Kindness',
            'accent' => '#3DB54A',
            'icon'   => '<path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-4-11a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm8 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm-8 4a5 5 0 0 0 8 0H8z"/>',
        ],
    ];
?>
<section class="relative py-24 sec-light">
    <div class="rps-container">
        <div class="flex flex-col gap-10 lg:grid lg:grid-cols-12 lg:gap-14">

            <!-- LEFT: Why choose RPS -->
            <div class="col-span-12 lg:col-span-6">
                <div class="eyebrow reveal-up"><span class="dot"></span> Why Choose RPS</div>
                <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">
                    A School Built Around<br><span class="brand-text">Every Child</span>
                </h2>
                <div class="mt-8 grid gap-4 sm:grid-cols-2">
                    <?php foreach ($reasons as $r): ?>
                        <div class="side-card reveal-up flex h-full flex-col p-5 <?= rps_acc($r['accent']) ?>">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="<?= $r['accent'] ?>" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?= $r['icon'] ?></svg>
                            <h3 class="mt-3 text-lg font-semibold text-white"><?= $r['title'] ?></h3>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- RIGHT: Positive Psychology -->
            <div class="col-span-12 lg:col-span-6 lg:self-center">
                <div class="glass reveal-up p-7 md:p-8">
                    <div class="eyebrow"><span class="dot dot--amber"></span> Positive Psychology in Learning</div>
                    <p class="mt-5 text-slate-300/90 leading-relaxed">
                        At RPS, learning is rooted in well-being. Our positive-psychology
                        approach helps children build the inner strengths that carry them
                        far beyond the classroom.
                    </p>
                    <div class="mt-7 grid grid-cols-2 gap-3 sm:grid-cols-3">
                        <?php foreach ($traits as $t): ?>
                            <div class="trait-chip floating-card flex min-h-[105px] flex-col items-center justify-center gap-2.5 rounded-2xl border p-4 text-center transition hover:scale-105 <?= rps_acc($t['accent']) ?>">
                                <span class="trait-chip__ico grid h-8 w-8 place-items-center rounded-xl">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?= $t['icon'] ?></svg>
                                </span>
                                <span class="text-sm font-semibold text-white"><?= $t['label'] ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
