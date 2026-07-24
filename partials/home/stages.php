<?php
    // STAGES — "Nurturing Young Minds" tabbed academic journey.
    // Each stage has copy + a small image collage (drop photos in assets/image/stages/).
    $stages = [
        'foundation' => [
            'tab'    => 'Grade 2 – Nursery',
            'label'  => 'Foundation Stage',
            'title'  => 'Foundation Stage · Nursery – Grade 2',
            'desc'   => 'In the Foundation Stage, encompassing Nursery through Grade 2, our holistic curriculum is thoughtfully designed to provide a well-rounded and developmentally appropriate learning experience for young minds. Focused on fostering intellectual, social, emotional and physical growth, our program integrates play-based learning, hands-on activities and interactive experiences — with language development, numeracy skills and creative expression seamlessly woven into a balanced, engaging educational journey.',
            'points' => ['Literacy', 'Numeracy', 'Social & Emotional Development', 'Physical Development'],
            'imgs'   => ['stages/foundation-1.jpg', 'stages/foundation-2.jpg', 'stages/foundation-3.jpg'],
        ],
        'preparatory' => [
            'tab'    => 'Grade 5 – 3',
            'label'  => 'Preparatory Stage',
            'title'  => 'Preparatory Stage · Grade 3 – 5',
            'desc'   => 'In the Preparatory Stage, encompassing Grades 3 to 5, our holistic curriculum builds upon the foundational skills acquired in the earlier years, fostering a more advanced and comprehensive learning experience. Emphasizing a student-centered approach, we develop critical thinking, problem-solving and effective communication — going beyond traditional subject boundaries with interdisciplinary projects and a robust focus on literacy and numeracy.',
            'points' => ['Advanced Literacy', 'Mathematical Proficiency', 'Social & Emotional Growth', 'Critical Thinking & Inquiry'],
            'imgs'   => ['stages/primary-1.jpg', 'stages/primary-2.jpg', 'stages/primary-3.jpg'],
        ],
        'middle' => [
            'tab'    => 'Grade 8 – 6',
            'label'  => 'Middle School',
            'title'  => 'Middle School · Grade 6 – 8',
            'desc'   => 'In the dynamic Middle School years, spanning Grades 6 to 8, our holistic curriculum is meticulously crafted to guide students through a transformative educational journey. Rooted in academic excellence, our program emphasizes subject-specific knowledge while fostering critical thinking, collaboration and independent inquiry — with project-based learning, real-world applications and collaborative projects that cater to diverse interests and learning styles.',
            'points' => ['Advanced Academics', 'Organizational Studies', 'Communication & Collaboration', 'Digital Literacy'],
            'imgs'   => ['stages/middle-1.jpg', 'stages/middle-2.jpg', 'stages/middle-3.jpg'],
        ],
        'secondary' => [
            'tab'    => 'Grade 12 – 9',
            'label'  => 'Senior Secondary',
            'title'  => 'Senior Secondary · Grade 9 – 12',
            'desc'   => 'In the High School years, encompassing Grades 9 to 12 and following the NCERT syllabus, our curriculum is designed to provide a comprehensive and rigorous academic foundation. Aligned with NCERT guidelines, our program ensures depth of understanding in core subjects such as mathematics, science, social sciences and languages — structured to prepare students for national-level examinations through research-backed teaching that emphasizes critical thinking, analytical skills and practical application.',
            'points' => ['Advanced Academics', 'Independence & Self-Management', 'Specialized Knowledge', 'Effective Communication'],
            'imgs'   => ['stages/secondary-1.jpg', 'stages/secondary-2.jpg', 'stages/secondary-3.jpg'],
        ],
    ];
    // Show tabs in descending order: Grade 9–12 first … Nursery last.
    $stages = array_reverse($stages, true);
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
                <div data-panel="<?= $key ?>" class="stage-panel<?= $first ? ' active' : '' ?>">
                    <div class="flex flex-col gap-8 lg:grid lg:grid-cols-12 lg:items-center lg:gap-12">
                        <!-- copy -->
                        <div class="col-span-12 lg:col-span-5">
                            <span class="text-xs font-semibold uppercase tracking-[0.25em] text-rps-amber"><?= $s['label'] ?></span>
                            <h3 class="sec-title mt-3 text-2xl md:text-3xl text-white"><?= $s['title'] ?></h3>
                            <p class="mt-4 text-slate-300/90 leading-relaxed"><?= $s['desc'] ?></p>
                            <ul class="mt-6 grid grid-cols-2 gap-3">
                                <?php foreach ($s['points'] as $p): ?>
                                    <li class="flex items-center gap-2.5 rounded-xl border border-white/10 bg-white/[0.03] px-3 py-2.5 text-sm text-slate-200">
                                        <span class="grid h-5 w-5 flex-shrink-0 place-items-center rounded-full bg-rps-amber/20 text-rps-amber">
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
