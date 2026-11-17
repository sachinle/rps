<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0a0a12">
    <meta name="description" content="Beyond Academics at Rathinam International Public School — post-school activities, sports, fine arts, and skill development activities that nurture well-rounded, confident learners.">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="Beyond Academics | Rathinam International Public School">
    <meta property="og:description" content="Explore post-school activities, fine arts, sports, and skill development programs at Rathinam International Public School, Coimbatore.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <meta property="og:url" content="https://rathinamschool.ac.in/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@TalktoRIPSchool">
    <meta name="twitter:title" content="Beyond Academics | Rathinam International Public School">
    <meta name="twitter:description" content="Explore post-school activities, fine arts, sports, and skill development programs at Rathinam International Public School, Coimbatore.">
    <meta name="twitter:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <title>Beyond Academics | Rathinam International Public School</title>

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

    <?php
        $navClass = 'nav-solid';
        include __DIR__ . '/partials/home/nav.php';

        // Post-school activities list with icons
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

        // Featured sport cards matching screenshot/PDF
        $sportCards = [
            [
                'title' => 'FOOTBALL',
                'img' => './assets/image/gallery/15.webp',
                'fallback' => 'https://picsum.photos/seed/rps-badminton/600/420',
                'text' => 'Football is a dynamic sport that promotes teamwork, strategic thinking, and physical fitness. Our football program encourages students to develop their skills, build camaraderie, and embrace the spirit'
            ],
            [
                'title' => 'MUSIC',
                'img' => './assets/image/gallery/12.webp',
                'fallback' => 'https://picsum.photos/seed/rps-handball/600/420',
                'text' => 'Music is a universal language that nurtures creativity, emotional expression, and cognitive development. Our music program allows students to explore various instruments and vocal techniques, fostering a lifelong appreciation for the arts.'
            ],
            [
                'title' => 'SWIMMING',
                'img' => './assets/image/Banner1.webp',
                'fallback' => 'https://picsum.photos/seed/rps-swimming/600/420',
                'text' => 'Our swimming program allows the children to hone their skills, gain strength in physique, and learn to be safe in the water, hence gaining confidence and tenacity in every stroke.'
            ],
            [
                'title' => 'KARATE',
                'img' => './assets/image/gallery/03.webp',
                'fallback' => 'https://picsum.photos/seed/rps-karate/600/420',
                'text' => 'Our karate classes and training practice instill discipline, focus, and self-defence skills, empowering our students to gain confidence and physical fitness through martial arts.'
            ],
        ];

        // Skill development cards with gradients matching design attachment
        $skills = [
            [
                'title' => 'Advance Dance',
                'sub' => '(Contemporary + Bollywood + Hip Hop)',
                'grad' => 'linear-gradient(135deg, #FF7E5F, #FEB47B)',
                'icon' => '<circle cx="12" cy="4" r="2"/><path d="M12 6v6l4 8m-4-8-4 8m-2-11 6 3 6-3"/>'
            ],
            [
                'title' => 'Focus on Physical Health & Cognitive Activities',
                'sub' => 'Activities which stimulate both, Body and Mind',
                'grad' => 'linear-gradient(135deg, #00c6ff, #0072ff)',
                'icon' => '<circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 3"/>'
            ],
            [
                'title' => 'Increased Emotional Stability & Added Sense of Joy',
                'sub' => 'For your Little Ones',
                'grad' => 'linear-gradient(135deg, #f857a6, #ff5858)',
                'icon' => '<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 1 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78z"/>'
            ],
            [
                'title' => 'Enhanced Teamwork & Synergies',
                'sub' => 'Added focus on collaborative growth & social bonding',
                'grad' => 'linear-gradient(135deg, #11998e, #38ef7d)',
                'icon' => '<circle cx="9" cy="7" r="3"/><path d="M3 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>'
            ],
            [
                'title' => 'Increased Academic Grasp & Retention',
                'sub' => 'Helps children retain concepts faster & excel academically',
                'grad' => 'linear-gradient(135deg, #FFB75E, #ED8F03)',
                'icon' => '<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>'
            ],
        ];
    ?>

    <main id="main-content">
        <!-- ============ HERO ============ -->
        <section class="ab-hero ab-hero--img hero-bg-beyond">
            <div class="rps-container">
                <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Beyond Academics</div>
                <h1 class="ab-hero__title sec-title reveal-up mt-5">POST SCHOOL <span class="brand-text">ACTIVITIES</span></h1>
                <p class="ab-hero__sub reveal-up">Nurturing curiosity, sportsmanship, and creative talents. Beyond the traditional syllabus, RPS provides a vibrant spectrum of post-school programs for holistic growth.</p>
                <div class="ab-hero__pills reveal-up">
                    <span class="ab-pill"><b>15+</b>&nbsp;Extracurricular Clubs</span>
                    <span class="ab-pill"><b>Fine Arts</b>&nbsp;&amp; Performing Arts</span>
                    <span class="ab-pill"><b>Sports</b>&nbsp;&amp; Physical Fitness</span>
                </div>
            </div>
        </section>

        <!-- ============ SCHOOL GALLERY (FEATURED SPORTS) ============ -->
        <section class="ab-section" id="activities">
            <div class="rps-container">
                <div class="mx-auto max-w-3xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> School Gallery</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">Moments of <span class="brand-text">Joy, Creativity &amp; Teamwork</span></h2>
                </div>
                <p class="ab-lead reveal-up text-slate-300 leading-relaxed text-center">
                    Rathinam International Public School's glittering gallery is filled with momentary splashes of joy, creativity, and teamwork. The photograph submitted mentions all the academic achievements, sporty triumphs, etc. These moments of light reflect the spirit, zeal, and commitment toward excellence in the students' bodies. This inspiring collection cartes the effervescent glow of dynamic and holistic education that fuels their growth and admires their journey into uniqueness.
                </p>

                <div class="ab-tri reveal-up mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php foreach ($sportCards as $c): ?>
                        <div class="ab-member flex flex-col justify-between group">
                            <div class="ab-figure aspect-[4/3] overflow-hidden">
                                <img width="1200" height="750" src="<?= $c['img'] ?>" alt="<?= $c['title'] ?> at RPS" loading="lazy" class="group-hover:scale-105 transition-transform duration-500" onerror="this.src='<?= $c['fallback'] ?>'">
                            </div>
                            <div class="p-5 flex-1 flex flex-col justify-between bg-rps-panel/60">
                                <div>
                                    <h3 class="font-display font-bold text-lg text-white tracking-wide group-hover:text-rps-amber transition-colors"><?= $c['title'] ?></h3>
                                    <p class="mt-2 text-slate-300 text-xs leading-relaxed"><?= $c['text'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ============ POST SCHOOL ACTIVITIES PROVIDED BY US ============ -->
        <section class="ab-section sec-light" id="fine-arts">
            <div class="rps-container">
                <div class="mx-auto max-w-3xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Provided By Us</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">POST SCHOOL ACTIVITIES <span class="brand-text">PROVIDED BY US</span></h2>
                    <p class="mt-4 text-slate-600 max-w-2xl mx-auto">From performing arts to competitive sports and cutting-edge research, we empower every child to explore their passions.</p>
                </div>

                <!-- Hexagonal / Tile Grid -->
                <div class="act-grid reveal-up mt-12">
                    <?php foreach ($activities as $i => $a): ?>
                        <div class="act-tile <?= rps_acc($accents[$i % count($accents)]) ?>">
                            <span class="act-tile__ico">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $a[1] ?></svg>
                            </span>
                            <span class="act-tile__label"><?= $a[0] ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Fine Arts & Sports Summary Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 reveal-up mt-10">
                    <div class="info-card border-l-4 border-l-rps-pink">
                        <h3>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/></svg>
                            Fine Arts
                        </h3>
                        <p>Key board, Guitar, Violin, Classical Dance, Western Dance, Drawing, Painting, Vocal Music etc. Instilling discipline, focus, and creative expression through structured artistic coaching.</p>
                    </div>
                    <div class="info-card border-l-4 border-l-rps-green">
                        <h3>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 3v18M3 12h18"/></svg>
                            Sports
                        </h3>
                        <p>Badminton, Basketball, Football, Cricket, Table tennis, Carrom, Chess, Swimming, Martial arts etc. Building endurance, physical agility, self-defence, and leadership on and off the field.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============ SKILL DEVELOPMENT ACTIVITIES ============ -->
        <section class="ab-section" id="skills">
            <div class="rps-container">
                <div class="mx-auto max-w-3xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Nurturing Well-Rounded Minds</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">SKILL DEVELOPMENT <span class="brand-text">ACTIVITIES</span></h2>
                    <p class="mt-4 text-slate-400 max-w-2xl mx-auto">Structured non-academic programs engineered to enhance cognitive, physical, and emotional capabilities in every student.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 reveal-up mt-12">
                    <?php foreach ($skills as $si => $s): ?>
                        <div class="skill-card flex flex-col justify-between p-6 rounded-2xl transition-transform hover:-translate-y-2 cursor-pointer shadow-xl skill-g<?= $si + 1 ?>">
                            <div class="w-12 h-12 rounded-xl bg-white/20 backdrop-blur grid place-items-center text-white mb-6">
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?= $s['icon'] ?></svg>
                            </div>
                            <div>
                                <h3 class="font-display font-bold text-xl text-slate-900 leading-snug"><?= $s['title'] ?></h3>
                                <p class="mt-2 text-slate-800/90 text-sm font-medium leading-relaxed"><?= $s['sub'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ============ GALLERY ============ -->
        <section class="ab-section sec-light" id="gallery">
            <div class="rps-container">
                <div class="mx-auto max-w-2xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Life at RPS</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">GALLERY OF <span class="brand-text">MEMORIES</span></h2>
                    <p class="mt-4 text-slate-600">A glimpse into our campus activities, competitions, and student celebrations.</p>
                </div>
                <div class="ab-tri reveal-up mt-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <?php for ($g = 1; $g <= 6; $g++): 
                        $paddedG = sprintf('%02d', $g);
                    ?>
                        <figure class="ab-figure aspect-[4/3] group overflow-hidden rounded-2xl shadow-lg">
                            <img width="1200" height="750" src="./assets/image/gallery/<?= $paddedG ?>.webp" alt="RPS activity photo <?= $g ?>" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.src='https://picsum.photos/seed/rpsg<?= $g ?>/600/450'">
                        </figure>
                    <?php endfor; ?>
                </div>
                <div class="reveal-up mt-10 text-center">
                    <a href="./#gallery" class="inline-flex items-center gap-2 rounded-xl btn-primary px-6 py-3 text-sm font-semibold text-white transition hover:scale-105">
                        View Full Gallery
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- ============ CTA ============ -->
        <section class="ab-section">
            <div class="rps-container">
                <div class="ab-cta reveal-up">
                    <div class="ab-cta__inner">
                        <h2 class="sec-title text-3xl md:text-5xl text-white">BUILDING BRIGHTER FUTURES<br>WITH <span class="brand-text brand-hero">QUALITY LEARNING!</span></h2>
                        <p class="mt-4 text-slate-300 max-w-xl mx-auto">Give your child an enriching, future-ready education. Admissions for 2026–27 are now open.</p>
                        <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                            <a href="admission" class="inline-flex items-center gap-2 rounded-2xl btn-primary px-7 py-3.5 font-semibold text-white transition hover:scale-105">
                                Admissions Open 2026-27
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                            <a href="curriculum" class="inline-flex items-center gap-2 rounded-2xl border border-white/20 bg-white/5 px-7 py-3.5 font-semibold text-white backdrop-blur transition hover:bg-white/10">Explore Curriculum</a>
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
