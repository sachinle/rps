<?php
    // STAGES — "Nurturing Young Minds" tabbed academic journey.
    // Each stage has copy + a small image collage (drop photos in assets/image/stages/).
    $stages = [
        'foundation' => [
            'tab'    => 'Nursery – Grade 2',
            'label'  => 'Foundation Stage',
            'title'  => 'Foundation Stage · Nursery – Grade 2',
            'desc'   => 'In the Foundation Stage, we champion play-based, joyful learning. Grounded in curiosity, children develop core motor, language and social skills as they explore, imagine and discover — laying a strong, happy foundation for lifelong learning.',
            'points' => ['Play & Activity-Based Learning', 'Language Development', 'Sensory & Motor Skills', 'Values & Life Skills'],
            'imgs'   => ['stages/foundation-1.jpg', 'stages/foundation-2.jpg', 'stages/foundation-3.jpg'],
        ],
        'primary' => [
            'tab'    => 'Grade 3',
            'label'  => 'Preparatory Stage',
            'title'  => 'Preparatory Stage · Grade 3',
            'desc'   => 'As children grow, learning becomes more structured yet remains exploratory. We nurture reading, writing, numeracy and creative thinking through hands-on projects that keep the joy of discovery alive.',
            'points' => ['Concept-Based Learning', 'Reading & Writing Fluency', 'Numeracy & Logic', 'Creative Expression'],
            'imgs'   => ['stages/primary-1.jpg', 'stages/primary-2.jpg', 'stages/primary-3.jpg'],
        ],
        'middle' => [
            'tab'    => 'Grade 4 – 5',
            'label'  => 'Middle Stage',
            'title'  => 'Middle Stage · Grade 4 – 5',
            'desc'   => 'Learners deepen conceptual understanding across subjects, building critical-thinking and collaboration skills. Technology-integrated classrooms and real-world projects prepare them for the years ahead.',
            'points' => ['Critical Thinking', 'STEM & Digital Skills', 'Collaborative Projects', 'Sports & Arts'],
            'imgs'   => ['stages/middle-1.jpg', 'stages/middle-2.jpg', 'stages/middle-3.jpg'],
        ],
        'secondary' => [
            'tab'    => 'Grade 6 – 12',
            'label'  => 'Secondary & Senior',
            'title'  => 'Secondary & Senior Stage · Grade 6 – 12',
            'desc'   => 'Our senior programme blends academic rigour with career readiness. Students are guided towards board excellence, competitive exams and confident, future-ready decision-making.',
            'points' => ['Board Exam Excellence', 'Career Guidance', 'Leadership & Ethics', 'AI & Robotics Labs'],
            'imgs'   => ['stages/secondary-1.jpg', 'stages/secondary-2.jpg', 'stages/secondary-3.jpg'],
        ],
    ];
?>
<section id="stages" class="relative py-24">
    <div class="rps-container">
        <div class="mx-auto max-w-3xl text-center">
            <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Our Academic Journey</div>
            <h2 class="sec-title reveal-up mt-5 text-3xl md:text-5xl">
                Nurturing Young Minds from Early<br>
                Childhood to <span class="brand-text">High-School Graduation</span>
            </h2>
            <p class="reveal-up mt-5 text-slate-400">
                Fostering holistic growth &amp; joyful learning experiences for children at every stage.
            </p>
        </div>

        <div data-tabs class="mt-12">
            <!-- Tabs -->
            <div class="mb-10 flex flex-wrap justify-center gap-3">
                <?php $first = true; foreach ($stages as $key => $s): ?>
                    <button type="button" data-tab="<?= $key ?>" class="stage-tab <?= $first ? 'tab-active' : '' ?>"><?= $s['tab'] ?></button>
                <?php $first = false; endforeach; ?>
            </div>

            <!-- Panels -->
            <?php $first = true; foreach ($stages as $key => $s): ?>
                <div data-panel="<?= $key ?>" class="<?= $first ? '' : 'hidden' ?>">
                    <div class="flex flex-col gap-8 lg:grid lg:grid-cols-12 lg:items-center lg:gap-12">
                        <!-- copy -->
                        <div class="col-span-12 lg:col-span-5">
                            <span class="text-xs font-semibold uppercase tracking-[0.25em] text-rps-amber"><?= $s['label'] ?></span>
                            <h3 class="sec-title mt-3 text-2xl md:text-3xl text-white"><?= $s['title'] ?></h3>
                            <p class="mt-4 text-slate-300/90 leading-relaxed"><?= $s['desc'] ?></p>
                            <ul class="mt-6 grid grid-cols-2 gap-3">
                                <?php foreach ($s['points'] as $p): ?>
                                    <li class="flex items-center gap-2.5 rounded-xl border border-white/10 bg-white/[0.03] px-3 py-2.5 text-sm text-slate-200">
                                        <span class="grid h-5 w-5 flex-shrink-0 place-items-center rounded-full bg-rps-green/20 text-rps-green">
                                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                                        </span>
                                        <?= $p ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="#admission" class="mt-7 inline-flex items-center gap-2 rounded-xl bg-white/5 border border-white/10 px-5 py-3 text-sm font-semibold text-white transition hover:bg-white/10">
                                Read More
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>

                        <!-- image collage -->
                        <div class="col-span-12 lg:col-span-7">
                            <div class="grid grid-cols-2 grid-rows-2 gap-3 md:gap-4">
                                <?php foreach ($s['imgs'] as $i => $img): ?>
                                    <!-- IMAGE NEEDED: assets/image/<?= $img ?> (stage photo) -->
                                    <div class="<?= $i === 0 ? 'row-span-2' : '' ?> glass overflow-hidden p-1.5">
                                        <div class="h-full min-h-[130px] overflow-hidden rounded-xl bg-gradient-to-br from-rps-navy/50 to-rps-ink">
                                            <img src="./assets/image/<?= $img ?>" alt="<?= $s['label'] ?> at RPS" loading="lazy" class="h-full w-full object-cover"
                                                 onerror="this.parentElement.innerHTML='<div class=\'grid h-full min-h-[130px] place-items-center text-[11px] text-slate-500 px-2 text-center\'><?= $img ?></div>'">
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php $first = false; endforeach; ?>
        </div>
    </div>
</section>
