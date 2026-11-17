<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0a0a12">
    <meta name="description" content="Guest lectures at Rathinam International Public School connect students with experts from diverse fields, bridging classroom learning and real-world application across every phase.">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="Guest Lectures | Rathinam International Public School">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <meta property="og:url" content="https://rathinamschool.ac.in/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@TalktoRIPSchool">
    <meta name="twitter:title" content="Guest Lectures | Rathinam International Public School">
    <meta name="twitter:description" content="Guest lectures at Rathinam International Public School connect students with experts from diverse fields, bridging classroom learning and real-world application across every phase.">
    <meta name="twitter:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <title>Guest Lectures | Rathinam International Public School</title>

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

        $benefits = [
            ['Exposure to Experts', '#FFB811', '<circle cx="9" cy="7" r="3"/><path d="M3 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"/><path d="M16 3.13a4 4 0 0 1 0 7.75M21 21v-2a4 4 0 0 0-3-3.85"/>',
                'Guest lectures are valuable for the exposure they provide — allowing students to interact with experts from diverse fields right here on our Rathinam campus.'],
            ['Deeper Understanding', '#EC008B', '<path d="M12 2a7 7 0 0 0-4 12.7c.6.5 1 1.3 1 2.1V17h6v-.2c0-.8.4-1.6 1-2.1A7 7 0 0 0 12 2z"/><path d="M9 21h6M10 17v4M14 17v4"/>',
                'These lectures let students deepen their understanding of concepts both physically and emotionally, bridging the gap between theoretical knowledge and practical applications.'],
            ['Real-World Connection', '#3DB54A', '<circle cx="12" cy="12" r="9"/><path d="M12 3a15 15 0 0 1 0 18M12 3a15 15 0 0 0 0 18M3 12h18"/>',
                'Direct engagement with professionals enhances comprehension and establishes a meaningful connection between classroom learning and real-world scenarios.'],
        ];
    ?>

    <main id="main-content">
        <!-- HERO -->
        <section class="ab-hero" id="guest-lectures-hero">
            <div class="rps-container">
                <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Guest Lectures</div>
                <h1 class="ab-hero__title sec-title reveal-up mt-5">Learning From <span class="brand-text">Experts, First-Hand</span></h1>
                <p class="ab-hero__sub reveal-up">At our Rathinam, guest lectures are an integral part of the educational experience, starting from the foundation level and continuing through each phase of learning. These guest speakers are carefully selected to align with the curriculum, providing students with valuable insights directly related to their studies.</p>
            </div>
        </section>

        <!-- BENEFITS -->
        <section class="ab-section pt-tight">
            <div class="rps-container">
                <div class="mx-auto max-w-3xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Why They Matter</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">Where Knowledge Meets <span class="brand-text">Real Experience</span></h2>
                </div>
                <div class="ab-tri reveal-up mt-12">
                    <?php foreach ($benefits as $b): ?>
                        <div class="ab-tcard <?= rps_acc($b[1]) ?>">
                            <div class="ab-tcard__ico">
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?= $b[2] ?></svg>
                            </div>
                            <h3 class="text-white"><?= $b[0] ?></h3>
                            <p><?= $b[3] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- STRATEGIC INTEGRATION -->
        <section class="ab-section pt-0">
            <div class="rps-container">
                <div class="ab-split">
                    <div class="reveal-up">
                        <div class="eyebrow"><span class="dot"></span> Curriculum-Aligned</div>
                        <h2 class="sec-title mt-5 text-3xl md:text-4xl">Strategic Integration of Guest Lectures <span class="brand-text">in Curriculum</span></h2>
                        <ul class="dot-list mt-6">
                            <li>Guest lectures are strategically scheduled to align with each theme and phase of the curriculum.</li>
                            <li>Students experience a variety of relevant guest speakers throughout the academic year.</li>
                            <li>These lectures enhance and enrich the students educational experience.</li>
                        </ul>
                        <p class="mt-5 text-slate-300/90 leading-relaxed">
                            These lectures are exclusive to our students and are hosted in various venues within our campus, including open
                            amphitheaters, seminar halls, or indoor auditoriums. This ensures a conducive environment for learning and
                            encourages active engagement with the guest speaker.
                        </p>
                    </div>
                    <div class="reveal-up">
                        <div class="info-card card-violet">
                            <h3>
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11l18-5v13L3 15v-4z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/></svg>
                                A Vital Role in Education
                            </h3>
                            <p class="lead-sm">
                                Guest lectures play a vital role in enhancing education by providing students with firsthand knowledge and
                                insights from experts in their respective fields. By integrating these lectures into the curriculum, we aim to
                                broaden students' perspectives, deepen their understanding of key concepts, and inspire them to pursue their
                                academic interests with passion and curiosity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="ab-section pt-0">
            <div class="rps-container">
                <div class="ab-cta reveal-up">
                    <div class="ab-cta__inner">
                        <h2 class="sec-title text-3xl md:text-5xl text-white">Inspire, Educate,<br><span class="brand-text brand-hero">Achieve!</span></h2>
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
