<?php
    // AI & ROBOTICS — "Pioneering AI & Robotics Education" feature highlight.
    $features = [
        ['accent' => 'var(--rps-pink)',  'title' => 'AI-Powered Classrooms',  'desc' => 'Adaptive lessons that respond to each learner.', 'icon' => '<rect x="4" y="4" width="16" height="16" rx="3"/><path d="M9 9h.01M15 9h.01M9 14h6"/>'],
        ['accent' => 'var(--rps-green)', 'title' => 'Hands-on Robotics Labs',  'desc' => 'Build, code and bring machines to life.',      'icon' => '<rect x="6" y="8" width="12" height="10" rx="2"/><path d="M12 8V5M9 3h6M9 18v3M15 18v3"/>'],
        ['accent' => 'var(--rps-amber)', 'title' => 'Coding from Early Years',  'desc' => 'Computational thinking made playful.',       'icon' => '<path d="m8 8-4 4 4 4M16 8l4 4-4 4M13 6l-2 12"/>'],
        ['accent' => 'var(--rps-blue)',  'title' => 'Future-Ready Skills',      'desc' => 'Innovators prepared for tomorrow.',          'icon' => '<path d="M12 2v6m0 0 3-3m-3 3L9 5"/><path d="M5 12H2m20 0h-3M12 22v-6m0 0 3 3m-3-3-3 3"/>'],
    ];
?>
<section class="relative py-24 sec-light">
    <div class="rps-container">
        <div class="glass relative overflow-hidden p-8 md:p-12">
            <!-- accent glow -->
            <div class="pointer-events-none absolute -right-24 -top-24 h-72 w-72 rounded-full bg-rps-blue/20 blur-3xl"></div>

            <div class="flex flex-col gap-10 lg:grid lg:grid-cols-12 lg:items-center">
                <!-- LEFT copy + features -->
                <div class="col-span-12 lg:col-span-7">
                    <div class="eyebrow reveal-up"><span class="dot dot--amber"></span> Pioneering AI &amp; Robotics Education</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">
                        Pioneering <span class="brand-text">Artificial Intelligence</span><br>
                        &amp; Robotics Learning through ATL
                    </h2>
                    <p class="reveal-up mt-5 max-w-xl text-slate-300/90 leading-relaxed">
                        RPS offers an interactive, hands-on journey into Artificial
                        Intelligence and Robotics through our Atal Tinkering Lab (ATL) —
                        sparking curiosity and equipping students with the skills that
                        will define the future.
                    </p>

                    <div class="mt-8 grid gap-4 sm:grid-cols-2">
                        <?php foreach ($features as $f): ?>
                            <div class="side-card reveal-up flex items-start gap-3 p-4 <?= rps_acc($f['accent']) ?>">
                                <span class="ico-18 grid h-10 w-10 flex-shrink-0 place-items-center rounded-xl">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="<?= $f['accent'] ?>" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?= $f['icon'] ?></svg>
                                </span>
                                <span>
                                    <span class="block font-semibold text-white"><?= $f['title'] ?></span>
                                    <!-- <span class="block text-sm text-slate-400"><?= $f['desc'] ?></span> -->
                                </span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- RIGHT robot image -->
                <div class="col-span-12 lg:col-span-5">
                    <!-- IMAGE NEEDED: assets/image/ai-robot.webp (robot / AI mascot, transparent PNG) -->
                    <img width="1000" height="665" src="./assets/image/ai-robot.webp" alt="AI & Robotics at RPS" class="floating-card reveal-up mx-auto block h-auto w-full max-w-sm rounded-3xl object-contain"
                         onerror="this.style.display='none'">
                </div>
            </div>
        </div>
    </div>
</section>
