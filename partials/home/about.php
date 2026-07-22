<?php
    // ABOUT — intro copy + "The Legacy of RPS" animated stat counters.
    $stats = [
        ['count' => 20, 'suffix' => '+', 'label' => 'Years of Excellence',   'accent' => 'var(--rps-pink)'],
        ['count' => 5,  'suffix' => '+', 'label' => 'Acre Green Campus',      'accent' => 'var(--rps-green)'],
        ['count' => 10, 'suffix' => '+', 'label' => 'Curriculum Programs',    'accent' => 'var(--rps-amber)'],
        ['count' => 5,  'suffix' => '+', 'label' => 'Awards & Recognitions',  'accent' => 'var(--rps-blue)'],
    ];
?>
<section id="about" class="relative py-24 sec-light">
    <div class="rps-container">
        <div class="flex flex-col gap-10 lg:grid lg:grid-cols-12 lg:items-center lg:gap-14">

            <!-- LEFT: copy -->
            <div class="col-span-12 lg:col-span-7">
                <div class="eyebrow reveal-up"><span class="dot"></span> About RPS</div>
                <h2 class="sec-title reveal-up mt-5 text-3xl md:text-5xl">
                    Rathinam International<br><span class="brand-text">Public School</span>
                </h2>
                <p class="reveal-up mt-6 text-slate-300/90 leading-relaxed">
                    Established with a vision of excellence, Rathinam International Public
                    School stands as an edifice of knowledge that instills the joy of
                    learning in every child. In a nurturing, future-ready environment, we
                    blend academic rigour with values, creativity and character — helping
                    every learner discover their fullest potential.
                </p>
                <p class="reveal-up mt-4 text-slate-400 leading-relaxed">
                    RPS is a co-educational school that integrates its curriculum with
                    emerging technological innovations, creating a joyful foundation of
                    learning for children — from their earliest years right through to
                    high-school graduation.
                </p>

                <div class="reveal-up mt-8 flex flex-wrap gap-4">
                    <a href="#stages" class="inline-flex items-center gap-2 rounded-xl bg-white/5 border border-white/10 px-5 py-3 text-sm font-semibold text-white transition hover:bg-white/10">
                        Our Academics
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="#admission" class="inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-rps-pink to-rps-pinkdark px-5 py-3 text-sm font-semibold text-white transition hover:scale-105">
                        Book a Visit
                    </a>
                </div>
            </div>

            <!-- RIGHT: campus image -->
            <div class="col-span-12 lg:col-span-5">
                <div class="relative reveal-up">
                    <!-- IMAGE NEEDED: assets/image/about-campus.jpg (school building, 4:3) -->
                    <div class="glass overflow-hidden p-2">
                        <div class="aspect-[4/3] overflow-hidden rounded-2xl bg-gradient-to-br from-rps-navy/60 to-rps-ink">
                            <img src="./assets/image/about-campus.jpg" alt="RPS campus building" class="h-full w-full object-cover"
                                 onerror="this.parentElement.innerHTML='<div class=\'grid h-full place-items-center text-slate-500 text-sm\'>assets/image/about-campus.jpg</div>'">
                        </div>
                    </div>
                    <!-- floating accent -->
                    <div class="glass floating-card float-2 absolute -bottom-6 -left-6 flex items-center gap-3 p-4">
                        <span class="stat-num text-3xl brand-text">A++</span>
                        <span class="text-xs leading-tight text-slate-300">Quality<br>Education</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Legacy stats -->
        <div class="mt-20">
            <p class="reveal-up text-center text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">
                The Legacy of Rathinam International Public School
            </p>
            <div class="mt-8 grid grid-cols-2 gap-4 md:grid-cols-4">
                <?php foreach ($stats as $s): ?>
                    <div class="side-card reveal-up p-6 text-center" style="--accent: <?= $s['accent'] ?>">
                        <div class="stat-num text-4xl md:text-5xl text-white" data-count="<?= $s['count'] ?>" data-suffix="<?= $s['suffix'] ?>">0<?= $s['suffix'] ?></div>
                        <div class="mt-2 text-sm text-slate-400"><?= $s['label'] ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
