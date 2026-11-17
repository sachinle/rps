<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0a0a12">
    <meta name="description" content="Curriculum at Rathinam International Public School — a holistic learning curriculum including innovation, design thinking, the Atal Tinkering Lab, modern education, and world-class facilities.">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="Curriculum | Rathinam International Public School">
    <meta property="og:description" content="Discover our holistic learning curriculum including Atal Tinkering Lab (ATL), STEM education, design thinking, and modern learning facilities at RPS Coimbatore.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <meta property="og:url" content="https://rathinamschool.ac.in/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@TalktoRIPSchool">
    <meta name="twitter:title" content="Curriculum | Rathinam International Public School">
    <meta name="twitter:description" content="Discover our holistic learning curriculum including Atal Tinkering Lab (ATL), STEM education, design thinking, and modern learning facilities at RPS Coimbatore.">
    <meta name="twitter:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <title>Curriculum | Rathinam International Public School</title>

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

        // Holistic Innovation Cards matching PDF / screenshot
        $cards = [
            [
                'accent' => '#EC008B',
                'title' => 'ATAL Tinkering Lab',
                'icon' => '<circle cx="12" cy="12" r="3"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3M5 5l2 2M17 17l2 2M19 5l-2 2M7 17l-2 2"/>',
                'text' => 'Innovation and entrepreneurship have become an integral part of our nation, through which children are introduced to technology innovation by establishing Atal Tinkering Lab (ATL) in schools. Atal Tinkering Lab is the flagship initiative of Atal Innovation Mission (AIM), Government of India to cultivate an innovative mindset amongst high school students across the country.'
            ],
            [
                'accent' => '#ABD92D',
                'title' => 'Fostering Innovation: AIM and ATL in India',
                'icon' => '<path d="M12 2 2 7l10 5 10-5-10-5z"/><path d="m2 17 10 5 10-5M2 12l10 5 10-5"/>',
                'text' => 'The Government of India has set up the Atal Innovation Mission (AIM) at NITI Aayog. Realizing the need to create scientific temper and cultivate the spirit of curiosity and innovation among young minds, AIM proposes to support the establishment of a network of Atal Tinkering Laboratories (ATL) — a workspace where young minds give shape to their ideas through hands-on do-it-yourself mode and learn innovation skills. The vision is to cultivate 1 million children in India as Neoteric Innovators.'
            ],
            [
                'accent' => '#FFB811',
                'title' => 'Cultivating Innovation Through Education!',
                'icon' => '<path d="M9 18h6M10 22h4M12 2a7 7 0 0 0-4 12.7c.6.5 1 1.3 1 2.1V17h6v-.2c0-.8.4-1.6 1-2.1A7 7 0 0 0 12 2z"/>',
                'text' => 'The objective of this scheme is to foster curiosity, creativity, and imagination in young minds and inculcate skills such as design mindset, computational thinking, adaptive learning, physical computing, etc. Young children get a chance to work with tools and equipment to understand what, how, and why aspects of STEM (Science, Technology, Engineering, and Math). ATL would contain educational and learn "do it yourself" kits and equipment on - science, electronics, robotics, open-source microcontroller boards, sensors, 3D printers, etc.'
            ],
            [
                'accent' => '#5A5FD8',
                'title' => 'World-Class Education and Facilities',
                'icon' => '<path d="M12 2 2 7l10 5 10-5-10-5z"/><path d="M6 12v5c0 1 2.7 3 6 3s6-2 6-3v-5"/>',
                'bullets' => [
                    'Ambience and quality of education that matches international quality standards',
                    'Air conditioned classrooms',
                    'Educational equipment and teaching aids matching students\' physical and intellectual growth',
                    'School buses to provide door-to-door pick-up and drop-off',
                    'Tamil and other national faculty members',
                    'Hygienic and nutritious lunch and snacks for dayscholars also',
                    'Well trained professional teachers',
                ]
            ],
        ];

        // Modern Education cards matching PDF / screenshot
        $modern = [
            [
                'accent' => '#FFB811',
                'title' => 'Yoga for Mental Health',
                'icon' => '<circle cx="12" cy="5" r="2"/><path d="M12 7v6m0 0 4 6m-4-6-4 6m-4-9h16"/>',
                'text' => 'TEACHING CHILDREN MINDFULNESS. HOW DOES YOGA PROMOTE MINDFULNESS FOR CHILDREN? We implemented Yoga which helps to enhance flexibility, strength, coordination, and body awareness in children. In addition, their concentration and sense of calmness and relaxation also improve.'
            ],
            [
                'accent' => '#EC008B',
                'title' => 'Dance Training',
                'icon' => '<circle cx="12" cy="4" r="2"/><path d="M12 6v6l4 8m-4-8-4 8m-2-11 6 3 6-3"/>',
                'text' => 'LEARNING THE ART OF DANCE... Dancing is a mix of art and exercise which connects the mind and body and makes one sharper and stronger. Adding dance to academics by Rathinam is not a diversion or disturbance but can actually make students better in life. Our dance programs induce children to various dance forms while allowing them to express themselves through creative movement.'
            ],
            [
                'accent' => '#ABD92D',
                'title' => 'Art Trainings',
                'icon' => '<path d="M12 2a10 10 0 1 0 0 20 3 3 0 0 0 0-6h-1a2 2 0 0 1 0-4h3a4 4 0 0 0 0-8"/><circle cx="7.5" cy="10.5" r="1"/><circle cx="12" cy="7.5" r="1"/><circle cx="16.5" cy="10.5" r="1"/>',
                'text' => 'We clearly grabbed the essence of Arts that "Drawing makes children more expressive". We have been running through regular drawing classes by professional artists which stimulate children\'s skills.'
            ],
            [
                'accent' => '#5A5FD8',
                'title' => 'Regular Field Trips',
                'icon' => '<rect x="3" y="6" width="18" height="11" rx="2"/><circle cx="7" cy="18" r="2"/><circle cx="17" cy="18" r="2"/><path d="M3 11h18"/>',
                'text' => 'Regular field trips make students more engaged, intellectually curious, and confident to understand what, how, and why aspects of STEM. They reach outside their normal environment to learn and obtain skills that drag them to the next level.'
            ],
            [
                'accent' => '#FFB811',
                'title' => 'Drama Coaching',
                'icon' => '<path d="M4 4h7v7a3.5 3.5 0 0 1-7 0z"/><path d="M13 13h7v-2a3.5 3.5 0 0 0-7 0z"/>',
                'text' => 'Learning drama at school can be a positive and life-enhancing experience. Our drama coaching enables creativity in young minds and helps them in various ways like public speaking, body language, etc.'
            ],
            [
                'accent' => '#EC008B',
                'title' => 'Music Classes',
                'icon' => '<path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/>',
                'text' => 'Music helps students to grow their self-esteem. It has major positive impacts on growth and development. We have internal music staff to train our students.'
            ],
        ];

        // 14 Bullets matching "EVEN MORE!" section in attachment
        $evenMore = [
            'Ambience and quality of education that matches international quality standards',
            'Air conditioned classrooms',
            'Educational equipment and teaching aids matching students\' physical and intellectual growth',
            'School buses to provide door-to-door pick-up and drop-off',
            'Tamil and other national faculty members',
            'Hygienic and nutritious lunch and snacks for dayscholars also',
            'Well trained professional teachers',
            'Round the clock security',
            'Multimedia Room for presentations, conferences, and seminars',
            'Attractive library with enough material for reference and information required',
            'Talented teachers for Fine Arts activities',
            'Clean campus with an Eco-friendly approach',
            'Four languages being offered - English, Tamil, Hindi and French',
            'Educationists in the leadership role of administration',
        ];
    ?>

    <main id="main-content">
        <!-- ============ HERO ============ -->
        <section class="ab-hero ab-hero--img hero-bg-curriculum" id="curriculum-hero">
            <div class="rps-container">
                <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> SHAPE THE FUTURE AT RATHINAM INTERNATIONAL PUBLIC SCHOOL</div>
                <h1 class="ab-hero__title sec-title reveal-up mt-5">PREPARING OUR STUDENTS TO BE <span class="brand-text">INNOVATIVE THINKERS!</span></h1>
                <p class="ab-hero__sub reveal-up">Nestled in a serene environment, Rathinam International Public School is a beacon of knowledge, fostering 21st-century innovative skills within a collaborative and community-based learning atmosphere.</p>
                <div class="ab-hero__pills reveal-up">
                    <span class="ab-pill"><b>ADMISSIONS OPEN</b>&nbsp;2026–27</span>
                    <span class="ab-pill"><b>BEST CBSE SCHOOL</b>&nbsp;in Coimbatore</span>
                </div>
                <div class="reveal-up mt-8">
                    <a href="admission" class="apply-btn">
                        Apply Now
                        <span class="apply-btn__ico"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                    </a>
                </div>
            </div>
        </section>

        <!-- ============ HOLISTIC CURRICULUM & ATAL TINKERING LAB ============ -->
        <section class="ab-section" id="holistic">
            <div class="rps-container">
                <div class="mx-auto max-w-3xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> HOLISTIC CURRICULUM</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">HOLISTIC LEARNING CURRICULUM INCLUDING <span class="brand-text">INNOVATION &amp; DESIGN THINKING</span></h2>
                    <blockquote class="reveal-up mt-6 p-6 rounded-2xl border border-white/10 bg-white/[0.03] text-slate-300 italic text-base md:text-lg max-w-3xl mx-auto">
                        &ldquo;Our ethos, 'The whole purpose of education is to turn mirrors into windows', reflects our commitment to transforming education into a portal for future possibilities.&rdquo;
                    </blockquote>
                </div>

                <!-- Innovation Showcase Photos -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 reveal-up mt-10">
                    <div class="ab-figure aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img width="1280" height="720" src="./assets/image/stages/secondary-1.webp" alt="Atal Tinkering Lab RPS" loading="lazy" class="w-full h-full object-cover">
                    </div>
                    <div class="ab-figure aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img width="1280" height="720" src="./assets/image/stages/middle-1.webp" alt="Design Thinking at RPS" loading="lazy" class="w-full h-full object-cover">
                    </div>
                    <div class="ab-figure aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img width="1280" height="720" src="./assets/image/stages/primary-1.webp" alt="Hands-on learning RPS" loading="lazy" class="w-full h-full object-cover">
                    </div>
                    <div class="ab-figure aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        <img width="1280" height="720" src="./assets/image/stages/foundation-1.webp" alt="Students in Lab RPS" loading="lazy" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- 4 Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 reveal-up mt-12" id="atal">
                    <?php foreach ($cards as $c): ?>
                        <div class="ab-tcard flex flex-col justify-between <?= rps_acc($c['accent']) ?>">
                            <div>
                                <span class="ab-tcard__ico">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $c['icon'] ?></svg>
                                </span>
                                <h3><?= $c['title'] ?></h3>
                                <?php if (!empty($c['bullets'])): ?>
                                    <ul class="dot-list mt-4 space-y-2.5">
                                        <?php foreach ($c['bullets'] as $b): ?>
                                            <li><?= $b ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php else: ?>
                                    <p class="mt-3 leading-relaxed"><?= $c['text'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ============ MODERN EDUCATION ============ -->
        <section class="ab-section sec-light" id="modern">
            <div class="rps-container">
                <div class="mx-auto max-w-3xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> MODERN EDUCATION</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">MODERN <span class="brand-text">EDUCATION</span></h2>
                    <p class="ab-lead reveal-up text-slate-600 leading-relaxed mt-4">
                        The objective of this scheme is to foster curiosity, creativity, and imagination in young minds and inculcate skills such as design mindset, computational thinking, adaptive learning, physical computing, etc. Young children will get a chance to work with tools and equipment to understand what, how, and why aspects of STEM.
                    </p>
                </div>

                <div class="ab-tri reveal-up mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php foreach ($modern as $m): ?>
                        <div class="ab-tcard <?= rps_acc($m['accent']) ?>">
                            <span class="ab-tcard__ico">
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $m['icon'] ?></svg>
                            </span>
                            <h3><?= $m['title'] ?></h3>
                            <p><?= $m['text'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ============ EVEN MORE! ============ -->
        <section class="ab-section" id="facilities">
            <div class="rps-container">
                <div class="mx-auto max-w-3xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Comprehensive Facilities</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-5xl">EVEN <span class="brand-text">MORE!</span></h2>
                    <p class="mt-4 text-slate-400">Excellence in every details — providing a safe, comfortable, and world-class learning campus.</p>
                </div>

                <ul class="dot-list dot-list--2 reveal-up mt-12 mx-auto max-w-4xl bg-rps-panel/60 p-8 rounded-3xl border border-white/10 shadow-2xl">
                    <?php foreach ($evenMore as $e): ?>
                        <li class="text-slate-200 font-medium"><?= $e ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>

        <!-- ============ SCHOOL GALLERY ============ -->
        <section class="ab-section sec-light" id="gallery">
            <div class="rps-container">
                <div class="mx-auto max-w-2xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> School Gallery</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">SCHOOL <span class="brand-text">GALLERY</span></h2>
                </div>
                <div class="ab-tri reveal-up mt-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <?php for ($g = 7; $g <= 12; $g++): 
                        $paddedG = sprintf('%02d', $g);
                    ?>
                        <figure class="ab-figure aspect-[4/3] group overflow-hidden rounded-2xl shadow-lg">
                            <img width="1280" height="853" src="./assets/image/gallery/<?= $paddedG ?>.webp" alt="RPS campus gallery photo <?= $g ?>" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.src='https://picsum.photos/seed/rpsc<?= $g ?>/600/450'">
                        </figure>
                    <?php endfor; ?>
                </div>
                <div class="reveal-up mt-10 text-center">
                    <a href="./#gallery" class="inline-flex items-center gap-2 rounded-xl btn-primary px-6 py-3 text-sm font-semibold text-white transition hover:scale-105">
                        View More Photos
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
                        <h2 class="sec-title text-3xl md:text-5xl text-white">INVEST IN KNOWLEDGE,<br><span class="brand-text brand-hero">UNLOCK SUCCESS!</span></h2>
                        <p class="mt-4 text-slate-300 max-w-xl mx-auto">Discover how Rathinam International Public School can prepare your child for future triumphs.</p>
                        <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                            <a href="admission" class="inline-flex items-center gap-2 rounded-2xl btn-primary px-7 py-3.5 font-semibold text-white transition hover:scale-105">
                                Admissions Open 2026-27
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
