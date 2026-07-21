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
        ['label' => 'Growth Mindset',        'accent' => 'var(--rps-pink)'],
        ['label' => 'Emotional Intelligence','accent' => 'var(--rps-green)'],
        ['label' => 'Confidence & Courage',  'accent' => 'var(--rps-amber)'],
        ['label' => 'Curiosity & Wonder',    'accent' => 'var(--rps-blue)'],
        ['label' => 'Resilience',            'accent' => 'var(--rps-green)'],
        ['label' => 'Empathy & Kindness',    'accent' => 'var(--rps-pink)'],
    ];
?>
<section class="relative py-24">
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
                        <div class="side-card reveal-card reveal-up p-5" style="--accent: <?= $r['accent'] ?>">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="<?= $r['accent'] ?>" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?= $r['icon'] ?></svg>
                            <h3 class="mt-3 text-lg font-semibold text-white"><?= $r['title'] ?></h3>
                            <p class="reveal-desc mt-1 text-sm text-slate-400"><?= $r['desc'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- RIGHT: Positive Psychology -->
            <div class="col-span-12 lg:col-span-6">
                <div class="glass reveal-up h-full p-7 md:p-8">
                    <div class="eyebrow"><span class="dot" style="background:var(--rps-green);box-shadow:0 0 0 4px rgba(61,181,74,.25)"></span> Positive Psychology in Learning</div>
                    <p class="mt-5 text-slate-300/90 leading-relaxed">
                        At RPS, learning is rooted in well-being. Our positive-psychology
                        approach helps children build the inner strengths that carry them
                        far beyond the classroom.
                    </p>
                    <div class="mt-7 grid grid-cols-2 gap-3 sm:grid-cols-3">
                        <?php foreach ($traits as $t): ?>
                            <div class="floating-card rounded-2xl border p-4 text-center transition hover:scale-105"
                                 style="border-color: color-mix(in srgb, <?= $t['accent'] ?> 45%, transparent); background: color-mix(in srgb, <?= $t['accent'] ?> 12%, transparent)">
                                <span class="mx-auto mb-2 block h-2.5 w-2.5 rounded-full" style="background: <?= $t['accent'] ?>"></span>
                                <span class="text-sm font-semibold text-white"><?= $t['label'] ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
