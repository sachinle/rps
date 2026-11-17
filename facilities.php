<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0a0a12">
    <meta name="description" content="World-class facilities at Rathinam International Public School, Coimbatore — AC classrooms, sports facilities, auditorium, swimming pool, GPS-tracked transport and science laboratories.">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="Facilities | Rathinam International Public School">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <meta property="og:url" content="https://rathinamschool.ac.in/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@TalktoRIPSchool">
    <meta name="twitter:title" content="Facilities | Rathinam International Public School">
    <meta name="twitter:description" content="World-class facilities at Rathinam International Public School, Coimbatore — AC classrooms, sports facilities, auditorium, swimming pool, GPS-tracked transport and science laboratories.">
    <meta name="twitter:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <title>Facilities | Rathinam International Public School</title>

    <style>
        html { background: #0a0a12; }
        body { margin: 0 !important; padding: 0 !important; background: #0a0a12; color: #e8e8f0; font-family: 'Clash Grotesk', system-ui, sans-serif; }
        .sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0; }
        .feat-grid { display: grid; gap: 24px; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); }
        .feat-card { overflow: hidden; border-radius: 22px; }
        .feat-card__media { aspect-ratio: 16/10; overflow: hidden; background: linear-gradient(135deg, #16162a, #0a0a12); }
        .feat-card__media img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform .5s ease; }
        .feat-card:hover .feat-card__media img { transform: scale(1.06); }
        .feat-card__body { padding: 22px 24px 26px; }
        .feat-card h3 { font-family: 'Clash Display', sans-serif; font-weight: 600; font-size: 1.18rem; color: #fff; display: flex; align-items: center; gap: 10px; }
        .feat-card h3 svg { color: var(--rps-amber, #FBB040); flex-shrink: 0; }
        .feat-card p { margin-top: 10px; color: #a9a9c2; line-height: 1.62; font-size: 0.94rem; }
        .feat-ico { display: grid; place-items: center; height: 100%; color: var(--rps-amber, #FBB040); }
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

        $facilities = [
            [
                'title' => 'Well-equipped Classrooms',
                'img'   => './assets/image/live/facilities/classroom.webp',
                'ico'   => '<rect x="3" y="4" width="18" height="12" rx="2"/><path d="M8 20h8M12 16v4"/>',
                'desc'  => 'Our classrooms are spacious, well-lit, and equipped with modern teaching aids and multimedia resources to facilitate interactive learning.',
            ],
            [
                'title' => 'Sports Facilities',
                'img'   => './assets/image/live/facilities/sports.webp',
                'ico'   => '<circle cx="12" cy="12" r="9"/><path d="M12 3a15 15 0 0 1 0 18M12 3a15 15 0 0 0 0 18M3 12h18"/>',
                'desc'  => 'We offer a range of sports facilities including playgrounds, courts, and gymnasiums, where students can participate in various sports and physical activities to promote fitness and well-being.',
            ],
            [
                'title' => 'Auditorium',
                'img'   => './assets/image/live/facilities/auditorium.webp',
                'ico'   => '<path d="M3 10h18M5 10V6a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4M4 10l1 10h14l1-10"/>',
                'desc'  => 'Our spacious auditorium serves as a venue for various school events, assemblies, and performances, providing students with opportunities to showcase their talents and build confidence.',
            ],
            [
                'title' => 'Swimming Pool',
                'img'   => './assets/image/live/facilities/pool.webp',
                'ico'   => '<path d="M2 16s2-2 4-2 3 2 6 2 4-2 6-2 4 2 4 2"/><path d="M2 20s2-2 4-2 3 2 6 2 4-2 6-2 4 2 4 2"/><circle cx="16" cy="6" r="2"/><path d="m8 12 4-3 3 2"/>',
                'desc'  => "We offer students the opportunity to learn swimming and water safety skills, promotes physical fitness and healthy lifestyle habits, serves as a venue for swimming competitions and recreational activities, enhances the school's sports facilities.",
            ],
            [
                'title' => 'Transportation Services',
                'img'   => './assets/image/live/facilities/transport.webp',
                'ico'   => '<rect x="3" y="5" width="18" height="12" rx="2"/><path d="M3 11h18M7 17v2M17 17v2"/><circle cx="7.5" cy="14.5" r="1"/><circle cx="16.5" cy="14.5" r="1"/>',
                'desc'  => 'We provide safe and reliable transportation services with GPS tracking for students who commute to and from school, ensuring their convenience and peace of mind.',
            ],
            [
                'title' => 'Science Laboratories',
                'img'   => '',
                'ico'   => '<path d="M9 3h6M10 3v6l-5 9a2 2 0 0 0 2 3h10a2 2 0 0 0 2-3l-5-9V3"/><path d="M7 15h10"/>',
                'desc'  => 'Our fully-equipped science laboratories provide students with the opportunity to conduct hands-on experiments and explore scientific concepts in-depth.',
            ],
        ];
    ?>

    <main id="main-content">
        <!-- HERO -->
        <section class="ab-hero" id="facilities-hero">
            <div class="rps-container">
                <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Campus Facilities</div>
                <h1 class="ab-hero__title sec-title reveal-up mt-5">Facilities at <span class="brand-text">RPS</span></h1>
                <p class="ab-hero__sub reveal-up">Our large, green campus environment delivers an outstanding learning experience and trains youth in holistic development facilitated by experienced dedicated faculty.</p>
                <div class="ab-hero__pills reveal-up">
                    <span class="ab-pill"><b>Green</b>&nbsp;Campus</span>
                    <span class="ab-pill"><b>State-of-the-Art</b>&nbsp;Infrastructure</span>
                </div>
            </div>
        </section>

        <!-- INTRO + FACILITY GRID -->
        <section class="ab-section pt-tight">
            <div class="rps-container">
                <div class="mx-auto max-w-3xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Facilities at RPS</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">A Nurturing Environment That <span class="brand-text">Supports Growth</span></h2>
                    <p class="reveal-up mt-5 text-slate-400 leading-relaxed">
                        Welcome to Rathinam school, where we strive to provide a nurturing environment that supports holistic growth and
                        development. Our state-of-the-art facilities are designed to enhance the learning experience and cater to the
                        diverse needs of our students. Here's a glimpse of the facilities we offer:
                    </p>
                </div>

                <div class="feat-grid reveal-up mt-12">
                    <?php foreach ($facilities as $f): ?>
                        <div class="feat-card glass">
                            <div class="feat-card__media">
                                <?php if ($f['img']): ?>
                                    <img width="1280" height="800" src="<?= $f['img'] ?>" alt="<?= $f['title'] ?> at RPS" loading="lazy">
                                <?php else: ?>
                                    <div class="feat-ico">
                                        <svg width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><?= $f['ico'] ?></svg>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="feat-card__body">
                                <h3>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?= $f['ico'] ?></svg>
                                    <?= $f['title'] ?>
                                </h3>
                                <p><?= $f['desc'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="ab-section pt-0">
            <div class="rps-container">
                <div class="ab-cta reveal-up">
                    <div class="ab-cta__inner">
                        <h2 class="sec-title text-3xl md:text-5xl text-white">Building Brighter Futures With<br><span class="brand-text brand-hero">Quality Learning!</span></h2>
                        <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                            <a href="admission#inquiry-form" class="inline-flex items-center gap-2 rounded-2xl btn-primary px-7 py-3.5 font-semibold text-white transition hover:scale-105">Admissions Open
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                            <a href="contact" class="inline-flex items-center gap-2 rounded-2xl border border-white/20 bg-white/5 px-7 py-3.5 font-semibold text-white backdrop-blur transition hover:bg-white/10">Contact Us</a>
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
