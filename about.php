<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0a0a12">
    <meta name="description" content="About Rathinam International Public School (RPS), Coimbatore — our vision, mission, leadership and philosophy. A CBSE senior secondary school nurturing future-ready, compassionate learners.">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="About Us | Rathinam International Public School">
    <meta property="og:description" content="Discover the vision, mission, leadership and philosophy of Rathinam International Public School, Coimbatore.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <meta property="og:url" content="https://rathinamschool.ac.in/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@TalktoRIPSchool">
    <meta name="twitter:title" content="About Us | Rathinam International Public School">
    <meta name="twitter:description" content="Discover the vision, mission, leadership and philosophy of Rathinam International Public School, Coimbatore.">
    <meta name="twitter:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <title>About Us | Rathinam International Public School</title>

    <!-- Minimal critical CSS -->
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

    <!-- Ambient background -->
    <div class="rps-bg" aria-hidden="true">
        <div class="rps-grid"></div>
        <div class="rps-blob rps-blob--pink"></div>
        <div class="rps-blob rps-blob--green"></div>
        <div class="rps-blob rps-blob--amber"></div>
    </div>

    <?php $navClass = 'nav-solid'; include __DIR__ . '/partials/home/nav.php'; ?>

    <main id="main-content">

        <!-- ============ HERO ============ -->
        <section class="ab-hero ab-hero--img hero-bg-about" id="about-rps">
            <div class="rps-container">
                <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> About RPS</div>
                <h1 class="ab-hero__title sec-title reveal-up mt-5">Nurturing <span class="brand-text">Future-Ready</span> Minds</h1>
                <p class="ab-hero__sub reveal-up">Rathinam International Public School — a CBSE senior secondary school in Coimbatore, shaping confident, compassionate and industry-ready learners through the joy of learning.</p>
                <div class="ab-hero__pills reveal-up">
                    <span class="ab-pill"><b>50+</b>&nbsp;Years of Excellence</span>
                    <span class="ab-pill"><b>70-acre</b>&nbsp;Hi-Tech Campus</span>
                    <span class="ab-pill"><b>CBSE</b>&nbsp;Affiliation · 1930977</span>
                </div>
            </div>
        </section>

        <!-- ============ DISCOVER WHY + STATS ============ -->
        <section class="ab-section">
            <div class="rps-container">
                <div class="mx-auto max-w-3xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Why Choose Us</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">Discover Why We're Your <span class="brand-text">Ideal Choice</span></h2>
                </div>
                <p class="ab-lead reveal-up text-slate-400 leading-relaxed">
                    Rathinam, as a massive team, prepares students to understand, contribute to, and succeed in a rapidly
                    changing society — making the world a better and more just place. We ensure our students develop both the
                    skills a sound education provides and the competencies essential for leadership in the emerging creative
                    economy, while generating practical knowledge that improves conditions for local and global communities.
                    We make sure our students get the best of facilities, and nothing stops them.
                </p>
                <?php
                    $stats = [
                        ['20+', 'Game Applications from Scratch'],
                        ['10+', 'UNICEF Earth Championship'],
                        ['12+', 'Certifications from Kydo Portal'],
                        ['5+',  'Times #1 of the Month'],
                    ];
                ?>
                <div class="ab-stats reveal-up mt-12">
                    <?php foreach ($stats as $st): ?>
                        <div class="ab-stat">
                            <div class="ab-stat__num brand-text"><?= $st[0] ?></div>
                            <div class="ab-stat__label"><?= $st[1] ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ============ LIFE @ RPS ============ -->
        <section class="ab-section">
            <div class="rps-container">
                <div class="ab-split ab-split--rev">
                    <!-- IMAGE: replace with a local campus/students photo -->
                    <div class="ab-split__media reveal-up">
                        <div class="ab-figure ar-43">
                            <img width="2560" height="1319" src="./assets/image/about-campus.webp" alt="Life at Rathinam International Public School" loading="lazy">
                        </div>
                    </div>
                    <div class="reveal-up">
                        <div class="eyebrow"><span class="dot"></span> Life @ RPS</div>
                        <h2 class="sec-title mt-5 text-3xl md:text-4xl">Where Learning Extends <span class="brand-text">Beyond the Classroom</span></h2>
                        <p class="mt-5 text-slate-300/90 leading-relaxed">
                            Our international school fosters the development of students' personalities through an integrated
                            approach to education — helping them become valuable community members. While the primary role of
                            our school is education, our mission extends far beyond the classroom.
                        </p>
                        <p class="mt-4 text-slate-400 leading-relaxed">
                            We nurture cognitive development and overall well-being, helping children think critically, solve
                            problems, and grow emotionally, socially and intellectually. We celebrate diverse ideas and
                            cultures, creating a rich, multicultural environment where every child learns to appreciate the world.
                        </p>
                        <a href="./#stages" class="mt-7 inline-flex items-center gap-2 rounded-xl btn-primary px-5 py-3 text-sm font-semibold text-white transition hover:scale-105">
                            Explore Our Academics
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============ VISION / MISSION / MOTTO ============ -->
        <section class="ab-section sec-light">
            <div class="rps-container">
                <div class="mx-auto max-w-2xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> What Drives Us</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">Our Vision, Mission &amp; <span class="brand-text">Motto</span></h2>
                </div>
                <?php
                    $vmm = [
                        ['id' => 'vision',  'accent' => '#FFB811', 'title' => 'Our Vision',  'icon' => '<circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="4"/><circle cx="12" cy="12" r="1" fill="currentColor" stroke="none"/>', 'text' => 'A world-renowned, Industry-Integrated institution that imparts knowledge, skill and research culture in young minds to suit the emerging world.'],
                        ['id' => 'mission', 'accent' => '#ABD92D', 'title' => 'Our Mission', 'icon' => '<path d="M12 2 15 8l6 .9-4.5 4.3L17.5 20 12 16.8 6.5 20l1-6.8L3 8.9 9 8z"/>', 'text' => 'To provide quality education at an affordable cost and to maintain academic and research excellence with a keen focus on Industry-Integrated Research and Education.'],
                        ['id' => 'motto',   'accent' => '#EC008B', 'title' => 'Our Motto',   'icon' => '<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 1 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"/>', 'text' => 'Meaningful, Industry-Ready education and research — by all means, for every child who walks through our doors.'],
                    ];
                ?>
                <div class="ab-tri reveal-up mt-12">
                    <?php foreach ($vmm as $c): ?>
                        <div class="ab-tcard <?= rps_acc($c['accent']) ?>" id="<?= $c['id'] ?>">
                            <span class="ab-tcard__ico">
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $c['icon'] ?></svg>
                            </span>
                            <h3><?= $c['title'] ?></h3>
                            <p><?= $c['text'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ============ CHAIRMAN'S DESK ============ -->
        <section class="ab-section" id="heads-desk">
            <div class="rps-container">
                <div class="mx-auto max-w-2xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Leadership Message</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">From the <span class="brand-text">Chairman's Desk</span></h2>
                </div>
                <div class="ab-desk reveal-up mt-12">
                    <!-- IMAGE: replace with Dr. Madan A Sendhil's photo -->
                    <div class="ab-desk__photo">
                        <img width="602" height="532" src="./assets/image/about/chairman.webp" alt="Dr. Madan A Sendhil, Chairman" loading="lazy">
                    </div>
                    <div class="ab-desk__body ab-desk__body--green">
                        <span class="ab-desk__mark brand-text">&ldquo;</span>
                        <p class="ab-desk__quote">
                            At Rathinam International Public School, our focus is on nurturing students through creativity,
                            critical thinking and discipline. We inspire them to excel in academic and life skills, ensuring a
                            holistic learning journey. Our students are encouraged to cultivate their talents while we
                            emphasize character-building and ethical growth — creating thinkers and leaders who are rooted in
                            values and equipped for global success.
                        </p>
                        <div class="ab-desk__name">Dr. Madan A Sendhil</div>
                        <div class="ab-desk__role">Chairman · Rathinam Group</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============ PRINCIPAL'S DESK ============ -->
        <section class="ab-section">
            <div class="rps-container">
                <div class="ab-desk ab-desk--rev reveal-up">
                    <!-- IMAGE: replace with the Principal's photo -->
                    <div class="ab-desk__photo">
                        <img width="1536" height="1116" src="./assets/image/about/principal.webp" alt="Mrs. Ashmi S, Principal" loading="lazy">
                    </div>
                    <div class="ab-desk__body ab-desk__body--purple">
                        <div class="eyebrow"><span class="dot"></span> From the Principal's Desk</div>
                        <p class="ab-desk__quote mt-5 fst-italic">
                            "To those who see with loving eyes, life is beautiful.<br>
                            To those who speak with tender voices, life is peaceful.<br>
                            To those who help with gentle hands, life is full."
                        </p>
                        <div class="ab-desk__name">Mrs. Ashmi S</div>
                        <div class="ab-desk__role">Principal · RPS</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============ PHILOSOPHY ============ -->
        <section class="ab-section sec-light">
            <div class="rps-container">
                <div class="mx-auto max-w-2xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Our Approach</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">Our Philosophy Towards <span class="brand-text">Education</span></h2>
                    <p class="reveal-up mt-5 text-slate-400">Shining as sustainable educators, we continue to build upon our education philosophy across every student's journey.</p>
                </div>
                <?php
                    $phil = [
                        ['accent' => '#FFB811', 'title' => 'Holistic Approach', 'icon' => '<path d="M12 2a10 10 0 1 0 0 20 3 3 0 0 0 0-6h-1a2 2 0 0 1 0-4h3a4 4 0 0 0 0-8"/><circle cx="7.5" cy="10.5" r="1"/><circle cx="12" cy="7.5" r="1"/><circle cx="16.5" cy="10.5" r="1"/>', 'text' => 'Under one roof, holistic education at Rathinam concentrates on both the academic and social needs of every student.'],
                        ['accent' => '#ABD92D', 'title' => 'Group Learning',    'icon' => '<circle cx="9" cy="7" r="3"/><path d="M3 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/><path d="M21 21v-2a4 4 0 0 0-3-3.87"/>', 'text' => 'We encourage collaborative learning that shapes students\' futures — building stronger communication skills and sharpening problem-solving.'],
                        ['accent' => '#EC008B', 'title' => 'Problem Solving',   'icon' => '<path d="M9.66 6a2 2 0 1 1 3.34 1.48c-.7.7-1.5 1.2-1.5 2.52v.5"/><circle cx="11.5" cy="15" r="0.6" fill="currentColor" stroke="none"/><rect x="3" y="3" width="18" height="18" rx="4"/>', 'text' => 'Rathinam empowers students to tackle difficulties and enriches them to travel their own unique path.'],
                    ];
                ?>
                <div class="ab-tri reveal-up mt-12">
                    <?php foreach ($phil as $c): ?>
                        <div class="ab-tcard <?= rps_acc($c['accent']) ?>">
                            <span class="ab-tcard__ico">
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $c['icon'] ?></svg>
                            </span>
                            <h3><?= $c['title'] ?></h3>
                            <p><?= $c['text'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="reveal-up mt-10 text-center">
                    <a href="./#admission" class="inline-flex items-center gap-2 rounded-xl btn-primary px-6 py-3 text-sm font-semibold text-white transition hover:scale-105">Admissions Open 2026–27</a>
                </div>
            </div>
        </section>

        <!-- ============ CO-CURRICULAR ============ -->
        <section class="ab-section">
            <div class="rps-container">
                <div class="ab-split">
                    <!-- IMAGE: replace with a co-curricular / activities photo -->
                    <div class="ab-split__media reveal-up">
                        <div class="ab-figure ar-43">
                            <img width="1200" height="800" src="./assets/image/Banner2.webp" alt="Co-curricular activities at RPS" loading="lazy">
                        </div>
                    </div>
                    <div class="reveal-up">
                        <div class="eyebrow"><span class="dot"></span> Beyond Academics</div>
                        <h2 class="sec-title mt-5 text-3xl md:text-4xl">Enriching <span class="brand-text">Co-Curricular</span> Activities</h2>
                        <p class="mt-5 text-slate-300/90 leading-relaxed">
                            Developing well-rounded students through clubs and creative endeavours. Children learn music, dance,
                            karate and yoga to keep body and mind fit, and take part in Literary, Nature, Art &amp; Craft, Math and
                            Science clubs.
                        </p>
                        <p class="mt-4 text-slate-400 leading-relaxed">
                            Students perform plays, skits and storytelling, turn waste into beautiful craft, and even cook
                            without fire. Reading and classroom discussions build thinking skills, while field trips reinforce
                            what's taught in class.
                        </p>
                    </div>
                </div>
                <?php
                    $facilities = [
                        ['accent' => '#FFB811', 'title' => 'Classrooms', 'icon' => '<rect x="3" y="4" width="18" height="14" rx="2"/><path d="M3 18h18M8 22h8"/>', 'text' => 'Spacious, air-conditioned classrooms with audio-visual aids and computers boost participation. Children\'s work on the walls keeps them vibrant and engaging.'],
                        ['accent' => '#ABD92D', 'title' => 'Kids Play Area', 'icon' => '<circle cx="12" cy="5" r="2"/><path d="M12 7v6m0 0 4 6m-4-6-4 6m-4-9h16"/>', 'text' => 'Play fosters emotional intelligence and self-esteem. Our play area nurtures spontaneity, discipline and fun in a safe, joyful space.'],
                        ['accent' => '#EC008B', 'title' => 'Library', 'icon' => '<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>', 'text' => 'A key knowledge source that fosters reading habits — reference books, fiction, non-fiction and periodicals encouraging independent reading from a young age.'],
                    ];
                ?>
                <div class="ab-tri reveal-up mt-14">
                    <?php foreach ($facilities as $c): ?>
                        <div class="ab-tcard <?= rps_acc($c['accent']) ?>">
                            <span class="ab-tcard__ico">
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $c['icon'] ?></svg>
                            </span>
                            <h3><?= $c['title'] ?></h3>
                            <p><?= $c['text'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ============ CORE LEADERSHIP TEAM ============ -->
        <section class="ab-section" id="leadership">
            <div class="rps-container">
                <div class="mx-auto max-w-2xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Meet the Team</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">Our Core <span class="brand-text">Leadership Team</span></h2>
                    <p class="reveal-up mt-5 text-slate-400 leading-relaxed">
                        A team of dedicated and experienced educators committed to nurturing the potential of every student —
                        together fostering academic excellence, personal growth and a love for lifelong learning.
                    </p>
                </div>
                <?php
                    // IMAGE: replace each 'img' with the real team member's photo.
                    $team = [
                        ['name' => 'Dr. Madan A Sendhil', 'role' => 'Chairman · Rathinam Group', 'img' => './assets/image/about/chairman.webp'],
                        ['name' => 'Ms. Shima Sendhil',   'role' => 'Correspondent · RPS',       'img' => './assets/image/about/correspondent.webp'],
                        ['name' => 'Dr. R.Manickam',    'role' => 'Vice Chairman – Rathinam Institutions ,(Chief Operating Officer (COO) – Rathinam Group)', 'img' => './assets/image/about/vicechairman.webp'],
                        ['name' => 'Dr. B. Nagaraj',      'role' => 'CBO · Rathinam Group',     'img' => './assets/image/about/CBO.webp'],
                        ['name' => 'Mrs. Abinaya Shankari','role' => 'Head of Operations · RPS',  'img' => './assets/image/about/HOO.webp'],
                    ];
                ?>
                <div class="ab-team reveal-up mt-12">
                    <?php foreach ($team as $m):
                        $parts = preg_split('/\s+/', trim($m['name']));
                        $initials = strtoupper(substr($parts[0],0,1) . (isset($parts[count($parts)-1]) ? substr($parts[count($parts)-1],0,1) : '')); ?>
                        <div class="ab-member">
                            <div class="ab-member__photo">
                                <img width="1200" height="800" src="<?= $m['img'] ?>" alt="<?= htmlspecialchars($m['name']) ?>" loading="lazy"
                                     onerror="this.parentElement.classList.add('grid','place-items-center');this.replaceWith(Object.assign(document.createElement('span'),{className:'brand-text',style:'font-family:Clash Display;font-size:2rem;font-weight:700',textContent:'<?= $initials ?>'}))">
                            </div>
                            <div class="ab-member__bar"></div>
                            <div class="ab-member__body">
                                <div class="ab-member__name"><?= $m['name'] ?></div>
                                <div class="ab-member__role"><?= $m['role'] ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ============ CTA ============ -->
        <section class="ab-section">
            <div class="rps-container">
                <div class="ab-cta reveal-up">
                    <div class="ab-cta__inner">
                        <div class="eyebrow mx-auto jc-center"><span class="dot"></span> Enrol Today</div>
                        <h2 class="sec-title mt-4 text-3xl md:text-5xl text-white">Quality Education:<br>Your Ticket to <span class="brand-text brand-hero">Tomorrow</span></h2>
                        <p class="mt-4 text-slate-300 max-w-xl mx-auto">Give your child a joyful, future-ready start. Admissions for 2026–27 are now open.</p>
                        <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                            <a href="./#admission" class="inline-flex items-center gap-2 rounded-2xl btn-primary px-7 py-3.5 font-semibold text-white transition hover:scale-105">
                                Admissions Open 2026–27
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

    <button id="rps-top" aria-label="Scroll to top" class="scroll-top">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19V5M5 12l7-7 7 7"/></svg>
    </button>

    <!-- Failsafe: guarantee the reveal-up content becomes visible on this page even
         if the shared scroll-reveal observer doesn't run (this page loads no Swiper/
         Lenis). Reveals with a gentle stagger; harmless if the observer also runs. -->
    <script>
    (function(){
        function revealAll(){
            var els = document.querySelectorAll('.reveal-up');
            for (var i = 0; i < els.length; i++) {
                (function(el, idx){ setTimeout(function(){ el.classList.add('in'); }, Math.min(idx * 35, 550)); })(els[i], i);
            }
        }
        if (document.readyState === 'loading') { document.addEventListener('DOMContentLoaded', revealAll); }
        else { revealAll(); }
    })();
    </script>
    <script src="./assets/js/script.js?v=33" defer></script>
</body>

</html>
