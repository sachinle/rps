<?php
    // STAGES — "Nurturing Young Minds" tabbed academic journey.
    // Each stage has copy + a small image collage (drop photos in assets/image/stages/).
    $stages = [
        'foundation' => [
            'tab'    => 'Nursery–Grade 2',
            'label'  => 'Foundation Stage',
            'title'  => 'Foundation Stage · Nursery–Grade 2',
            'desc'   => 'In the Foundation Stage, encompassing Nursery through Grade 2, our holistic curriculum is thoughtfully designed to provide a well-rounded and developmentally appropriate learning experience for young minds. Focused on fostering intellectual, social, emotional and physical growth, our program integrates play-based learning, hands-on activities and interactive experiences — with language development, numeracy skills and creative expression seamlessly woven into a balanced, engaging educational journey.',
            'points' => ['Literacy', 'Numeracy', 'Social & Emotional Development', 'Physical Development'],
            'imgs'   => ['stages/foundation-1.webp', 'stages/foundation-2.webp', 'stages/foundation-3.webp'],
        ],
        'preparatory' => [
            'tab'    => 'Grades 3–5',
            'label'  => 'Preparatory Stage',
            'title'  => 'Preparatory Stage · Grades 3–5',
            'desc'   => 'In the Preparatory Stage, encompassing Grades 3 to 5, our holistic curriculum builds upon the foundational skills acquired in the earlier years, fostering a more advanced and comprehensive learning experience. Emphasizing a student-centered approach, we develop critical thinking, problem-solving and effective communication — going beyond traditional subject boundaries with interdisciplinary projects and a robust focus on literacy and numeracy.',
            'points' => ['Advanced Literacy', 'Mathematical Proficiency', 'Social & Emotional Growth', 'Critical Thinking & Inquiry'],
            'imgs'   => ['stages/primary-1.webp', 'stages/primary-2.webp', 'stages/primary-3.webp'],
        ],
        'middle' => [
            'tab'    => 'Grades 6–8',
            'label'  => 'Middle School',
            'title'  => 'Middle School · Grades 6–8',
            'desc'   => 'In the dynamic Middle School years, spanning Grades 6 to 8, our holistic curriculum is meticulously crafted to guide students through a transformative educational journey. Rooted in academic excellence, our program emphasizes subject-specific knowledge while fostering critical thinking, collaboration and independent inquiry — with project-based learning, real-world applications and collaborative projects that cater to diverse interests and learning styles.',
            'points' => ['Advanced Academics', 'Organizational Studies', 'Communication & Collaboration', 'Digital Literacy'],
            'imgs'   => ['stages/middle-1.webp', 'stages/middle-2.webp', 'stages/middle-3.webp'],
        ],
        'secondary' => [
            'tab'    => 'Grades 9–10',
            'label'  => 'Secondary',
            'title'  => 'Secondary · Grades 9–10',
            'desc'   => 'In the Secondary stage, spanning Grades 9 and 10, our curriculum follows the CBSE framework to build a strong conceptual foundation across core subjects — mathematics, science, social science and languages. With a clear focus on Class 10 board readiness, students strengthen analytical thinking, problem-solving and study discipline through structured practice, projects and continuous assessment, while skill subjects and co-curricular exposure keep learning well-rounded.',
            'points' => ['Board Exam Readiness', 'Conceptual Mastery', 'Analytical Thinking', 'Skill Subjects'],
            'imgs'   => ['stages/secondary-1.webp', 'stages/secondary-2.webp', 'stages/secondary-3.webp'],
        ],
        'seniorsecondary' => [
            'tab'    => 'Grades 11–12',
            'label'  => 'Senior Secondary',
            'title'  => 'Senior Secondary · Grades 11–12',
            'desc'   => 'In the Senior Secondary stage, encompassing Grades 11 and 12, students specialise through their chosen stream and follow the CBSE senior-secondary curriculum. Our program combines in-depth subject expertise with rigorous preparation for board and competitive examinations — supported by research projects, guided practice and personalised career and college guidance that prepares every student for higher education and beyond.',
            'points' => ['Stream Specialisation', 'Board & Competitive Prep', 'Research & Projects', 'Career Guidance'],
            'imgs'   => ['stages/secondary-1.webp', 'stages/secondary-2.webp', 'stages/secondary-3.webp'],
        ],
    ];
    // Show tabs in descending order: Grades 11–12 first … Nursery last.
    $stages = array_reverse($stages, true);
?>
<section id="stages" class="relative py-24">
    <div class="rps-container">
        <div class="mx-auto max-w-3xl text-center">
            <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Our Academic Journey</div>
            <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">
                Nurturing Young Minds from Early Childhood<br>
                to <span class="brand-text whitespace-nowrap">High-School Graduation</span>
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
                                        <span class="stage-tick grid h-5 w-5 flex-shrink-0 place-items-center rounded-full bg-rps-green/20 text-rps-green">
                                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                                        </span>
                                        <?= $p ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="#admission" class="mt-7 inline-flex items-center gap-2 rounded-xl btn-primary px-5 py-3 text-sm font-semibold text-white transition hover:scale-105">
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
                                            <img width="1280" height="720" src="./assets/image/<?= $img ?>" alt="<?= $s['label'] ?> at RPS" loading="lazy" class="h-full w-full object-cover"
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
<script>
/* Deep-link: /admission.php#foundation|#preparatory|#middle|#secondary opens that stage tab */
(function () {
    var keys = ['foundation', 'preparatory', 'middle', 'secondary', 'seniorsecondary'];
    function openFromHash() {
        var h = (location.hash || '').replace('#', '');
        if (keys.indexOf(h) === -1) return;
        var btn = document.querySelector('[data-tab="' + h + '"]');
        if (btn) { btn.click(); document.getElementById('stages').scrollIntoView({ behavior: 'smooth' }); }
    }
    window.addEventListener('load', openFromHash);
    window.addEventListener('hashchange', openFromHash);
})();
</script>
