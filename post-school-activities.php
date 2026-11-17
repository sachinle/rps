<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0a0a12">
    <meta name="description" content="Post-school activities at Rathinam International Public School — a wide range of sports and specialized coaching with a competitive pathway from zonal to national and Asian-level achievement.">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="Post-School Activities | Rathinam International Public School">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <meta property="og:url" content="https://rathinamschool.ac.in/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@TalktoRIPSchool">
    <meta name="twitter:title" content="Post-School Activities | Rathinam International Public School">
    <meta name="twitter:description" content="Post-school activities at Rathinam International Public School — a wide range of sports and specialized coaching with a competitive pathway from zonal to national and Asian-level achievement.">
    <meta name="twitter:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <title>Post-School Activities | Rathinam International Public School</title>

    <style>
        html { background: #0a0a12; }
        body { margin: 0 !important; padding: 0 !important; background: #0a0a12; color: #e8e8f0; font-family: 'Clash Grotesk', system-ui, sans-serif; }
        .sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0; }
        .path-grid { display: grid; gap: 20px; grid-template-columns: 1fr; }
        @media (min-width: 800px) { .path-grid { grid-template-columns: repeat(3, 1fr); } }
        .path-step { position: relative; padding: 30px 26px; border-radius: 20px; background: var(--panel-2, #16162a); border: 1px solid var(--line, rgba(255,255,255,0.08)); overflow: hidden; }
        .path-step__num { font-family: 'Clash Display', sans-serif; font-size: 3.4rem; line-height: 1; font-weight: 700; -webkit-text-stroke: 1.5px color-mix(in srgb, var(--accent, #FFB811) 70%, transparent); color: transparent; }
        .path-step h3 { margin-top: 8px; font-family: 'Clash Display', sans-serif; font-weight: 600; font-size: 1.2rem; color: #fff; }
        .path-step p { margin-top: 8px; color: #a9a9c2; line-height: 1.6; font-size: 0.94rem; }
        .path-step__medal { position: absolute; top: 22px; right: 24px; color: var(--accent, #FFB811); opacity: 0.9; }
    </style>

    <link rel="preconnect" href="https://api.fontshare.com" crossorigin>
    <link rel="preconnect" href="https://cdn.fontshare.com" crossorigin>
    <link rel="preload" as="style" href="https://api.fontshare.com/v2/css?f[]=clash-display@400,500,600,700&f[]=clash-grotesk@400,500,600&display=swap" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://api.fontshare.com/v2/css?f[]=clash-display@400,500,600,700&f[]=clash-grotesk@400,500,600&display=swap"></noscript>
    <link rel="stylesheet" href="./assets/css/tailwind.css?v=28">
    <link rel="stylesheet" href="./assets/css/style.css?v=65">
    <?php include __DIR__ . '/partials/home/analytics.php'; ?>
</head>

<body class="bg-rps-ink text-slate-200 font-body antialiased overflow-x-hidden">
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-2 focus:left-2 focus:z-[10001] focus:bg-white focus:text-black focus:px-3 focus:py-2 focus:rounded">Skip to main content</a>

    <div class="rps-bg" aria-hidden="true">
        <div class="rps-grid"></div>
        <div class="rps-blob rps-blob--pink"></div>
        <div class="rps-blob rps-blob--green"></div>
        <div class="rps-blob rps-blob--amber"></div>
    </div>

    <?php
        $navClass = 'nav-solid';
        include __DIR__ . '/partials/home/nav.php';

        // Sports & activities offered (icon tiles)
        $sports = [
            ['Badminton', '<path d="M17 3 21 7 8 20l-5 1 1-5L17 3z"/><circle cx="19" cy="5" r="1.4"/>'],
            ['Table Tennis', '<circle cx="10" cy="10" r="7"/><path d="m15 15 5 5"/><circle cx="19" cy="6" r="1.3"/>'],
            ['Swimming', '<path d="M2 16s2-2 4-2 3 2 6 2 4-2 6-2 4 2 4 2"/><path d="M2 20s2-2 4-2 3 2 6 2 4-2 6-2 4 2 4 2"/><circle cx="16" cy="6" r="2"/><path d="m8 12 4-3 3 2"/>'],
            ['Karate', '<path d="M6 12 3 21l6-3 3-6"/><path d="m14 10 7-7-3 8-4-1z"/><circle cx="9" cy="6" r="2"/>'],
            ['Basketball', '<circle cx="12" cy="12" r="9"/><path d="M12 3v18M3 12h18M5 5c4 4 4 10 0 14M19 5c-4 4-4 10 0 14"/>'],
            ['Football', '<circle cx="12" cy="12" r="9"/><path d="m12 8 3 2-1 4h-4l-1-4 3-2z"/>'],
            ['Skating', '<circle cx="6" cy="19" r="2"/><circle cx="18" cy="19" r="2"/><path d="M6 17V5h6l3 5h3M4 9h6"/>'],
            ['Chess', '<path d="M8 16h8l1 4H7l1-4z"/><path d="M10 16v-3M14 16v-3"/><circle cx="12" cy="6" r="3"/><path d="M9 13h6"/>'],
        ];

        $medal = '<svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M7 3 4 9l5 3M17 3l3 6-5 3"/><circle cx="12" cy="15" r="6"/><path d="m11 13 1 1 2-2"/></svg>';
        $pathway = [
            ['#ABD92D', 'Zonal Competitions', 'Students start their competitive journey at the zonal level.'],
            ['#FFB811', 'District &amp; State', 'Successful participants at the zonal level advance to district and state competitions.'],
            ['#EC008B', 'National Competitions', 'Outstanding performers may have the opportunity to compete at the national level.'],
        ];
    ?>

    <main id="main-content">
        <!-- HERO -->
        <section class="ab-hero" id="post-school-hero">
            <div class="rps-container">
                <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Post-School Activities</div>
                <h1 class="ab-hero__title sec-title reveal-up mt-5">After-School Activities at <span class="brand-text">Rathinam</span></h1>
                <p class="ab-hero__sub reveal-up">Rathinam International Public School recognizes the significance of post-school activities in fostering holistic development and providing students with opportunities to excel beyond the classroom. The school proudly offers a diverse array of after-school activities, catering to a wide range of interests and talents.</p>
            </div>
        </section>

        <!-- SPORTS OFFERED -->
        <section class="ab-section pt-tight" id="sports">
            <div class="rps-container">
                <div class="mx-auto max-w-3xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Sports &amp; Coaching</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">Sports <span class="brand-text">Offered</span></h2>
                    <p class="reveal-up mt-5 text-slate-400 leading-relaxed">
                        The school proudly offers a diverse array of after-school activities, catering to a wide range of interests and talents.
                    </p>
                </div>
                <div class="act-grid reveal-up mt-12">
                    <?php foreach ($sports as $s): ?>
                        <div class="act-tile">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?= $s[1] ?></svg>
                            <span><?= $s[0] ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- SPECIALIZED CLASSES -->
        <section class="ab-section pt-0">
            <div class="rps-container">
                <div class="ab-cta reveal-up band-indigo">
                    <div class="ab-cta__inner mw-760c">
                        <div class="eyebrow mx-auto eyebrow-band"><span class="dot"></span> Specialized After-School Classes</div>
                        <h2 class="sec-title mt-5 text-3xl md:text-4xl text-white">Expert Guidance for <span class="brand-text brand-hero">Every Passion</span></h2>
                        <p class="mt-5 text-white/85 leading-relaxed">
                            Students who harbor a keen interest in a specific extracurricular domain are encouraged to enroll in these
                            after-school classes. These classes not only serve as platforms for honing skills but also offer specialized
                            coaching to elevate students' proficiency in their chosen activity. The presence of dedicated coaches ensures that
                            students receive expert guidance, allowing them to refine their techniques and develop a deeper understanding of
                            the sport.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- COMPETITION PATHWAY -->
        <section class="ab-section pt-0">
            <div class="rps-container">
                <div class="mx-auto max-w-3xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> The Competitive Journey</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">Progressive Pathway in <span class="brand-text">Extracurricular Competitions</span></h2>
                    <p class="reveal-up mt-5 text-slate-400 leading-relaxed">
                        Participation in these extracurricular activities goes beyond mere skill development &ndash; it opens doors for students
                        to compete at various levels. Rathinam International Public School provides a structured pathway for students to
                        progress from:
                    </p>
                </div>
                <div class="path-grid reveal-up mt-12">
                    <?php foreach ($pathway as $i => $p): ?>
                        <div class="path-step <?= rps_acc($p[0]) ?>">
                            <div class="path-step__medal"><?= $medal ?></div>
                            <div class="path-step__num"><?= sprintf('%02d', $i + 1) ?></div>
                            <h3><?= $p[1] ?></h3>
                            <p><?= $p[2] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- NATIONAL / ASIAN ACHIEVEMENTS -->
        <section class="ab-section pt-0">
            <div class="rps-container">
                <div class="mx-auto max-w-3xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Elite Achievement</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">Nurturing National &amp; <span class="brand-text">Asian-Level</span> Sports Achievements</h2>
                </div>
                <div class="mx-auto max-w-3xl mt-8 space-y-5 text-slate-300/90 leading-relaxed">
                    <p class="reveal-up">One of Rathinam's proudest achievements lies in its consistent support for students who aspire to compete at the national and Asian levels in sports. Through dedicated coaching, state-of-the-art facilities, and a commitment to nurturing talent, the school has been instrumental in propelling many students towards national recognition. The success stories of students who have achieved milestones at the national and Asian levels stand as a testament to the school's dedication to excellence in sports.</p>
                    <p class="reveal-up">In essence, Rathinam International Public School's after-school activities transcend the realm of mere recreation they serve as crucibles for budding talents, offering a structured path to success in the competitive arena of sports.</p>
                    <p class="reveal-up">By providing specialized coaching, fostering a spirit of competition, and facilitating students' progression to higher levels, the school continues to be a catalyst for excellence in extracurricular pursuits.</p>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="ab-section pt-0">
            <div class="rps-container">
                <div class="ab-cta reveal-up">
                    <div class="ab-cta__inner">
                        <h2 class="sec-title text-3xl md:text-5xl text-white">Education Transforms,<br><span class="brand-text brand-hero">One Mind at a Time!</span></h2>
                        <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                            <a href="admission#inquiry-form" class="inline-flex items-center gap-2 rounded-2xl btn-primary px-7 py-3.5 font-semibold text-white transition hover:scale-105">Admissions Open
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                            <a href="beyond-academics" class="inline-flex items-center gap-2 rounded-2xl border border-white/20 bg-white/5 px-7 py-3.5 font-semibold text-white backdrop-blur transition hover:bg-white/10">Beyond Academics</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/partials/home/footer.php'; ?>
    <?php include __DIR__ . '/partials/home/whatsapp.php'; ?>

    <button id="rps-top" aria-label="Scroll to top" class="scroll-top">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19V5M5 12l7-7 7 7"/></svg>
    </button>

    <script src="./assets/js/script.js?v=33" defer></script>
</body>

</html>
