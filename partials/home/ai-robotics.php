<?php
    // AI & ROBOTICS — "The First School in Coimbatore" feature highlight.
    $features = [
        ['accent' => 'var(--rps-pink)',  'title' => 'AI-Powered Classrooms',  'desc' => 'Adaptive lessons that respond to each learner.', 'icon' => '<rect x="4" y="4" width="16" height="16" rx="3"/><path d="M9 9h.01M15 9h.01M9 14h6"/>'],
        ['accent' => 'var(--rps-green)', 'title' => 'Hands-on Robotics Labs',  'desc' => 'Build, code and bring machines to life.',      'icon' => '<rect x="6" y="8" width="12" height="10" rx="2"/><path d="M12 8V5M9 3h6M9 18v3M15 18v3"/>'],
        ['accent' => 'var(--rps-amber)', 'title' => 'Coding from Early Years',  'desc' => 'Computational thinking made playful.',       'icon' => '<path d="m8 8-4 4 4 4M16 8l4 4-4 4M13 6l-2 12"/>'],
        ['accent' => 'var(--rps-blue)',  'title' => 'Future-Ready Skills',      'desc' => 'Innovators prepared for tomorrow.',          'icon' => '<path d="M12 2v6m0 0 3-3m-3 3L9 5"/><path d="M5 12H2m20 0h-3M12 22v-6m0 0 3 3m-3-3-3 3"/>'],
    ];
?>
<section class="relative py-24">
    <div class="rps-container">
        <div class="glass relative overflow-hidden p-8 md:p-12">
            <!-- accent glow -->
            <div class="pointer-events-none absolute -right-24 -top-24 h-72 w-72 rounded-full bg-rps-blue/20 blur-3xl"></div>

            <div class="flex flex-col gap-10 lg:grid lg:grid-cols-12 lg:items-center">
                <!-- LEFT copy + features -->
                <div class="col-span-12 lg:col-span-7">
                    <div class="eyebrow reveal-up"><span class="dot" style="background:var(--rps-blue);box-shadow:0 0 0 4px rgba(46,49,146,.35)"></span> The First School in Coimbatore</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">
                        Learning <span class="brand-text">Artificial Intelligence</span><br>
                        &amp; Robotics through AI
                    </h2>
                    <p class="reveal-up mt-5 max-w-xl text-slate-300/90 leading-relaxed">
                        RPS is proud to be the first school in Coimbatore to introduce an
                        interactive, hands-on journey into Artificial Intelligence and
                        Robotics — sparking curiosity and equipping students with the
                        skills that will define the future.
                    </p>

                    <div class="mt-8 grid gap-4 sm:grid-cols-2">
                        <?php foreach ($features as $f): ?>
                            <div class="side-card reveal-up flex items-start gap-3 p-4" style="--accent: <?= $f['accent'] ?>">
                                <span class="grid h-10 w-10 flex-shrink-0 place-items-center rounded-xl" style="background: color-mix(in srgb, <?= $f['accent'] ?> 18%, transparent)">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="<?= $f['accent'] ?>" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?= $f['icon'] ?></svg>
                                </span>
                                <span>
                                    <span class="block font-semibold text-white"><?= $f['title'] ?></span>
                                    <span class="block text-sm text-slate-400"><?= $f['desc'] ?></span>
                                </span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- RIGHT robot image -->
                <div class="col-span-12 lg:col-span-5">
                    <div class="relative reveal-up">
                        <!-- IMAGE NEEDED: assets/image/ai-robot.png (robot / AI mascot, transparent PNG) -->
                        <div class="floating-card mx-auto grid aspect-square max-w-sm place-items-center rounded-3xl border border-white/10 bg-gradient-to-br from-rps-blue/25 to-rps-ink p-6">
                            <img src="./assets/image/ai-robot.png" alt="AI & Robotics at RPS" class="h-full w-full object-contain"
                                 onerror="this.parentElement.innerHTML='<div class=\'text-center text-slate-500 text-sm\'>🤖<br>assets/image/ai-robot.png</div>'">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
