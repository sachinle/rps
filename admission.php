<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0a0a12">
    <meta name="description" content="Admissions Open 2026-27 at Rathinam International Public School, Coimbatore. Learn about our teaching methodology, curriculum scopes, philosophy and enquire online.">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="Admission | Rathinam International Public School">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <meta property="og:url" content="https://rathinamschool.ac.in/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@TalktoRIPSchool">
    <meta name="twitter:title" content="Admission | Rathinam International Public School">
    <meta name="twitter:description" content="Admissions Open 2026-27 at Rathinam International Public School, Coimbatore. Learn about our teaching methodology, curriculum scopes, philosophy and enquire online.">
    <meta name="twitter:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <title>Admission | Rathinam International Public School</title>

    <style>
        html { background: #0a0a12; }
        body { margin: 0 !important; padding: 0 !important; background: #0a0a12; color: #e8e8f0; font-family: 'Clash Grotesk', system-ui, sans-serif; }
        .sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0; }
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

        // RPS curriculum scopes
        $scopes = [
            ['#FFB811', 'Kid a greater and lovable learning atmosphere', '<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>'],
            ['#EC008B', 'Demos, discussions, and assignments', '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M9 13h6M9 17h6"/>'],
            ['#ABD92D', 'Academics with skill development', '<circle cx="12" cy="12" r="3"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3"/>'],
            ['#5A5FD8', 'Priority to communication skills', '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>'],
            ['#FFB811', 'Projects in each subject linked to real life', '<circle cx="12" cy="12" r="9"/><path d="M12 3a15 15 0 0 1 0 18M12 3a15 15 0 0 0 0 18M3 12h18"/>'],
        ];

        // Co-curricular activities (icons)
        $activities = [
            ['Yoga', '<circle cx="12" cy="5" r="2"/><path d="M12 7v6m0 0 4 6m-4-6-4 6m-4-9h16"/>'],
            ['Art & Craft', '<path d="M12 2a10 10 0 1 0 0 20 3 3 0 0 0 0-6h-1a2 2 0 0 1 0-4h3a4 4 0 0 0 0-8"/><circle cx="7.5" cy="10.5" r="1"/><circle cx="12" cy="7.5" r="1"/><circle cx="16.5" cy="10.5" r="1"/>'],
            ['Badminton', '<path d="M17 3 21 7 8 20l-5 1 1-5L17 3z"/><circle cx="19" cy="5" r="1.4"/>'],
            ['Table Tennis', '<circle cx="10" cy="10" r="7"/><path d="m15 15 5 5"/><circle cx="19" cy="6" r="1.3"/>'],
            ['Music', '<path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/>'],
            ['Dance', '<circle cx="12" cy="4" r="2"/><path d="M12 6v6l4 8m-4-8-4 8m-2-11 6 3 6-3"/>'],
            ['Basketball, Volleyball, Football', '<circle cx="12" cy="12" r="9"/><path d="M12 3v18M3 12h18M5 5c4 4 4 10 0 14M19 5c-4 4-4 10 0 14"/>'],
            ['Swimming', '<path d="M2 16s2-2 4-2 3 2 6 2 4-2 6-2 4 2 4 2"/><path d="M2 20s2-2 4-2 3 2 6 2 4-2 6-2 4 2 4 2"/><circle cx="16" cy="6" r="2"/><path d="m8 12 4-3 3 2"/>'],
            ['Skating', '<circle cx="6" cy="19" r="2"/><circle cx="18" cy="19" r="2"/><path d="M6 17V5h6l3 5h3M4 9h6"/>'],
            ['Research', '<circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/>'],
            ['Robotics', '<rect x="6" y="8" width="12" height="10" rx="2"/><path d="M12 8V5M9 3h6M9 13h.01M15 13h.01M9 18v3M15 18v3"/>'],
            ['Scouts & Guide', '<path d="M12 2 3 21h18L12 2z"/><path d="M12 8v7"/>'],
            ['Martial Arts', '<path d="M6 12 3 21l6-3 3-6"/><path d="m14 10 7-7-3 8-4-1z"/><circle cx="9" cy="6" r="2"/>'],
            ['Field & Track', '<circle cx="15" cy="5" r="2"/><path d="M13 8l-3 3 3 2 1 5m-1-7 4 1"/><path d="M4 20l4-6"/>'],
            ['Chess', '<path d="M8 16h8l1 4H7l1-4z"/><path d="M10 16v-3M14 16v-3"/><circle cx="12" cy="6" r="3"/><path d="M9 13h6"/>'],
        ];
        $accents = ['#FFB811', '#EC008B', '#ABD92D', '#5A5FD8'];

        // Philosophy pillars
        $pillars = [
            ['Social Skills', '#ABD92D', '<circle cx="9" cy="7" r="3"/><path d="M3 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>'],
            ['Physical Development', '#FFB811', '<circle cx="12" cy="5" r="2"/><path d="M12 7v6m0 0 4 6m-4-6-4 6m-4-9h16"/>'],
            ['Emotional Development', '#EC008B', '<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 1 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"/>'],
            ['Creativity', '#5A5FD8', '<path d="M9 18h6M10 22h4M12 2a7 7 0 0 0-4 12.7c.6.5 1 1.3 1 2.1V17h6v-.2c0-.8.4-1.6 1-2.1A7 7 0 0 0 12 2z"/>'],
            ['Cognitive Development', '#9333EA', '<circle cx="12" cy="12" r="10"/><path d="M12 2a15 15 0 0 1 0 20M12 2a15 15 0 0 0 0 20M2 12h20"/>'],
        ];
    ?>

    <main id="main-content">
        <!-- HERO -->
        <section class="ab-hero ab-hero--img hero-bg-admission">
            <div class="rps-container">
                <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Admissions Open</div>
                <h1 class="ab-hero__title sec-title reveal-up mt-5">Academic Session <span class="brand-text">2026 – 27</span></h1>
                <p class="ab-hero__sub reveal-up">Shape your child's future with us. Enrol now for the upcoming academic year and build a strong foundation for lifelong learning.</p>
                <div class="ab-hero__pills reveal-up">
                    <span class="ab-pill"><b>CBSE</b>&nbsp;Senior Secondary</span>
                    <span class="ab-pill"><b>Nursery</b>&nbsp;to Grade 12</span>
                </div>
            </div>
        </section>

        <!-- TEACHING METHODOLOGY + FORM -->
        <section id="methodology" class="ab-section pt-tight2">
            <div class="rps-container">
                <div class="ab-split items-start2">
                    <div class="reveal-up">
                        <div class="eyebrow"><span class="dot"></span> Our Approach</div>
                        <h2 class="sec-title mt-5 text-3xl md:text-4xl">What Is Our <span class="brand-text">Teaching Methodology?</span></h2>
                        <ul class="dot-list mt-6">
                            <li>Our teaching methodology is focused on discussions, debates, pep talks, seminars, projects, high-quality self-study, and the usage of mind maps.</li>
                            <li>Our motto is to replace books with experiments, exams with enquiries, and homework with discussions.</li>
                        </ul>
                        <h3 class="mt-8 text-lg font-semibold text-white">RPS curriculum gives the following scopes:</h3>
                        <div class="act-grid mt-5 grid-af150">
                            <?php foreach ($scopes as $s): ?>
                                <div class="act-tile <?= rps_acc($s[0]) ?>">
                                    <span class="act-tile__ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?= $s[2] ?></svg></span>
                                    <span class="act-tile__label"><?= $s[1] ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Admission Inquiry form -->
                    <div id="inquiry-form" class="glass reveal-up p-6 md:p-8">
                        <h3 class="text-xl font-semibold text-white">Admission Inquiry</h3>
                        <form id="rps-admission" class="mt-6 space-y-4" novalidate>
                            <input type="text" name="student" placeholder="Enter Student Name *" class="rps-input" required>
                            <input type="email" name="email" placeholder="Enter Parent Email *" class="rps-input" required>
                            <input type="tel" name="mobile" placeholder="+91 · Enter Parent Mobile Number *" class="rps-input" required>
                            <div class="grid gap-4 sm:grid-cols-2">
                                <select name="state" class="rps-input"><option value="">Select State *</option><option>Tamil Nadu</option><option>Kerala</option><option>Karnataka</option><option>Other</option></select>
                                <select name="city" class="rps-input"><option value="">Select City *</option><option>Coimbatore</option><option>Other</option></select>
                            </div>
                            <select name="campus" class="rps-input"><option value="">Select Campus Applying For *</option><option>Eachanari, Coimbatore</option></select>
                            <div class="grid gap-4 sm:grid-cols-2">
                                <select name="board" class="rps-input"><option value="">Board Applying For *</option><option>CBSE</option></select>
                                <select name="grade" class="rps-input"><option value="">Grade Applying For *</option>
                                    <?php foreach (['Nursery','LKG','UKG','Grade 1','Grade 2','Grade 3','Grade 4','Grade 5','Grade 6','Grade 7','Grade 8','Grade 9','Grade 10','Grade 11','Grade 12'] as $g): ?><option><?= $g ?></option><?php endforeach; ?>
                                </select>
                            </div>
                            <label class="flex items-start gap-2 text-xs text-slate-400">
                                <input type="checkbox" name="consent" class="mt-0.5" required>
                                I agree to receive information regarding my enquiry from Rathinam International Public School.
                            </label>
                            <button type="submit" class="inline-flex w-full items-center justify-center gap-2 rounded-xl btn-primary px-6 py-3.5 font-semibold text-white transition hover:scale-[1.02]">Apply Now
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </button>
                            <p id="rps-admission-result" class="text-sm text-rps-amber" role="status" aria-live="polite"></p>
                        </form>
                    </div>
                </div>

                <!-- Notes -->
                <ul class="dot-list reveal-up mt-14 mx-auto mw-960">
                    <li>Early registration is recommended for potential students seeking admission. If you would like to learn more about us, we conduct regular information sessions at our campus, and online open-day sessions are organized as well.</li>
                    <li>We maintain a waiting list for students to whom we are unable to offer seats immediately; the list is updated as vacancies arise.</li>
                    <li>You can visit us at our school campuses between 9:30 am and 2:30 pm on most working days. We recommend fixing prior appointments to avoid delays and to ensure that the school office is available on the day of your visit.</li>
                </ul>
            </div>
        </section>

        <!-- CO-CURRICULAR ACTIVITIES -->
        <section class="ab-section sec-light">
            <div class="rps-container">
                <div class="mx-auto max-w-2xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> About RPS</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">Co-Curricular <span class="brand-text">Activities</span></h2>
                    <p class="reveal-up mt-5 text-slate-400">RPS has designed numerous co-curricular activities that are mandatory for RPS students — because logical, analytical and creative thinking is equally important for every child.</p>
                </div>
                <div class="act-grid reveal-up mt-12">
                    <?php foreach ($activities as $i => $a): ?>
                        <div class="act-tile <?= rps_acc($accents[$i % count($accents)]) ?>">
                            <span class="act-tile__ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?= $a[1] ?></svg></span>
                            <span class="act-tile__label"><?= $a[0] ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="ab-split reveal-up mt-8">
                    <div class="info-card">
                        <h3><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="14" rx="2"/><path d="M3 18h18M8 22h8M12 8v3"/></svg> Fine Arts</h3>
                        <p>Keyboard, Guitar, Violin, Classical Dance, Western Dance, Drawing, Painting, Vocal Music, and more.</p>
                    </div>
                    <div class="info-card">
                        <h3><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 3v18M3 12h18"/></svg> Sports</h3>
                        <p>Badminton, Basketball, Football, Cricket, Table Tennis, Carrom, Chess, Swimming, Martial Arts, and more.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- NURTURING YOUNG MINDS (stages tabs) -->
        <?php include __DIR__ . '/partials/home/stages.php'; ?>

        <!-- PHILOSOPHY -->
        <section id="philosophy" class="ab-section">
            <div class="rps-container">
                <div class="mx-auto max-w-2xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Philosophy</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">Nurturing Every <span class="brand-text">Dimension</span></h2>
                    <p class="reveal-up mt-5 text-slate-400">Each child is unique and is treated differently. One method of guiding and disciplining may work for one child but not another. When your child socialises in a safe, positive, and nurturing environment, it aids in enhancing:</p>
                </div>
                <div class="phil-row reveal-up mt-12">
                    <?php foreach ($pillars as $p): ?>
                        <div class="phil-item <?= rps_acc($p[1]) ?>">
                            <span class="phil-ring"><svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><?= $p[2] ?></svg></span>
                            <span><?= $p[0] ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- GUIDANCE & DISCIPLINE -->
        <section class="ab-section sec-light">
            <div class="rps-container mw-900">
                <div class="reveal-up">
                    <div class="eyebrow"><span class="dot"></span> Guidance &amp; Discipline</div>
                    <h2 class="sec-title mt-5 text-3xl md:text-4xl">Our Guidance &amp; Discipline <span class="brand-text">Philosophy</span></h2>
                    <p class="mt-6 text-slate-500 leading-relaxed">We believe that children should be treated with respect and that the child's self-image is the most important part of the learning process. Children need to perceive themselves as worthwhile, capable and significant; therefore their experiences should be positive and reinforcing. By allowing such experiences to occur, they develop self-confidence and high self-esteem. It is also important that we, as caregivers, communicate acceptance and allow a child to develop a sense of belonging.</p>
                    <p class="mt-4 text-slate-500 leading-relaxed">Children must be allowed to make mistakes — this is all part of the learning process. As caregivers, it is our responsibility to listen to and acknowledge children's feelings and frustrations, and to offer calm, positive guidance when situations arise. Developmentally appropriate expectations and limits are set. One must remember to be firm and to be kind, while looking at what the "real" problem is. Under no circumstance do we physically or emotionally abuse a child.</p>
                </div>
            </div>
        </section>

        <!-- STRUCTURE OF SUPPORT -->
        <section class="ab-section">
            <div class="rps-container mw-900">
                <div class="mx-auto max-w-2xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Structure of Support</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">Structure of Support <span class="brand-text">by RPS</span></h2>
                    <p class="reveal-up mt-5 text-slate-400">The institutional life of young people is interesting and successful only when there is purpose and integrity associated with education. At RPS, we channel students and resources by emphasizing twin objectives.</p>
                </div>
                <div class="reveal-up mt-10 glass p-7 md:p-9">
                    <div class="support-block mt-0i">
                        <div class="support-block__head"><span class="support-dot bgc-pink"></span> Strong Academic Foundation</div>
                        <p class="mt-3 text-slate-300">Language skills, Environmental study, and Numeric Talent.</p>
                    </div>
                    <div class="support-block">
                        <div class="support-block__head"><span class="support-dot bgc-gold"></span> Strong Social Foundation</div>
                        <ul class="dot-list mt-3">
                            <li>Responsive classrooms — manners, discipline, ethics.</li>
                            <li>Culture-cohesive group — more effective in enhancing individual performance and group productivity.</li>
                            <li>Leaders of tomorrow — evolving children into culturally civilised and compassionate human beings.</li>
                        </ul>
                    </div>
                    <div class="support-block">
                        <div class="support-block__head"><span class="support-dot bgc-green"></span> Our Teaching Methodology</div>
                        <p class="mt-3 text-slate-300">Children are naturally curious. They love to explore, experiment, discover, touch and ask questions. We teach them in a manner that hooks into this natural desire to learn, using methods that encourage — rather than dampen — children's enthusiasm.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="ab-section">
            <div class="rps-container">
                <div class="ab-cta reveal-up">
                    <div class="ab-cta__inner">
                        <h2 class="sec-title text-3xl md:text-5xl text-white">Learning Today,<br><span class="brand-text brand-hero">Leading Tomorrow</span></h2>
                        <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                            <a href="#rps-admission" class="inline-flex items-center gap-2 rounded-2xl btn-primary px-7 py-3.5 font-semibold text-white transition hover:scale-105">Apply Now
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                            <a href="./#footer" class="inline-flex items-center gap-2 rounded-2xl border border-white/20 bg-white/5 px-7 py-3.5 font-semibold text-white backdrop-blur transition hover:bg-white/10">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/partials/home/footer.php'; ?>
    <?php include __DIR__ . '/partials/home/whatsapp.php'; ?>
    <button id="rps-top" aria-label="Scroll to top" class="scroll-top"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19V5M5 12l7-7 7 7"/></svg></button>

    <script>
    (function(){
        function r(){var e=document.querySelectorAll('.reveal-up');for(var i=0;i<e.length;i++){(function(el,x){setTimeout(function(){el.classList.add('in');},Math.min(x*30,500));})(e[i],i);}}
        if(document.readyState==='loading')document.addEventListener('DOMContentLoaded',r);else r();
        var f=document.getElementById('rps-admission');
        if(f){f.addEventListener('submit',function(ev){ev.preventDefault();var out=document.getElementById('rps-admission-result');
            if(!f.checkValidity()){out.textContent='Please fill in all required fields.';return;}
            out.textContent='Thank you! Your enquiry has been received. Our admissions team will contact you shortly.';f.reset();});}
    })();
    </script>
    <script src="./assets/js/script.js?v=33" defer></script>
</body>

</html>
