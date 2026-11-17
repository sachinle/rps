<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0a0a12">
    <meta name="description" content="Celebrations at Rathinam International Public School — Color Day, Culmination Day, Sports Day, Annual Day and more festivities woven into the curriculum throughout the year.">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="Celebrations | Rathinam International Public School">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <meta property="og:url" content="https://rathinamschool.ac.in/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@TalktoRIPSchool">
    <meta name="twitter:title" content="Celebrations | Rathinam International Public School">
    <meta name="twitter:description" content="Celebrations at Rathinam International Public School — Color Day, Culmination Day, Sports Day, Annual Day and more festivities woven into the curriculum throughout the year.">
    <meta name="twitter:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <title>Celebrations | Rathinam International Public School</title>

    <style>
        html { background: #0a0a12; }
        body { margin: 0 !important; padding: 0 !important; background: #0a0a12; color: #e8e8f0; font-family: 'Clash Grotesk', system-ui, sans-serif; }
        .sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0; }
        .gal-grid { display: grid; gap: 14px; grid-template-columns: repeat(2, 1fr); }
        @media (min-width: 720px) { .gal-grid { grid-template-columns: repeat(4, 1fr); } }
        .gal-item { position: relative; overflow: hidden; border-radius: 16px; aspect-ratio: 4/3; background: #16162a; }
        .gal-item img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform .5s ease; }
        .gal-item:hover img { transform: scale(1.07); }
        .gal-item--tall { aspect-ratio: 4/3; }
        @media (min-width: 720px) { .gal-item--wide { grid-column: span 2; aspect-ratio: 8/3; } }
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

        $features = [
            ['Diverse Festivities', '#EC008B', '<path d="M4 20l6-16 4 10 2-5 4 11z"/><path d="M4 20h16"/>',
                'Rathinam International Public School emphasizes a vibrant and celebratory atmosphere, encouraging students to participate in a range of festivities throughout the academic year.'],
            ['Inclusive Engagement', '#FFB811', '<circle cx="9" cy="7" r="3"/><path d="M3 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
                'The school celebrates central government and state government functions with enthusiasm, ensuring students are actively involved in these events.'],
            ['Integrated Events', '#3DB54A', '<rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18M9 16l2 2 4-4"/>',
                'Various events such as color days and culmination days are organized seamlessly, integrating them into the curriculum to enhance student engagement and enjoyment.'],
        ];

        $gallery = ['rat-8857','rat-8838','rat-8800','rat-8745','rat-9239','rat-8976','rat-8728','rat-8567'];
    ?>

    <main id="main-content">
        <!-- HERO -->
        <section class="ab-hero" id="celebrations-hero">
            <div class="rps-container">
                <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Celebrations</div>
                <h1 class="ab-hero__title sec-title reveal-up mt-5">Celebratory Atmosphere at <span class="brand-text">Rathinam International Public School</span></h1>
            </div>
        </section>

        <!-- THREE FEATURES -->
        <section class="ab-section pt-tight">
            <div class="rps-container">
                <div class="ab-tri reveal-up">
                    <?php foreach ($features as $f): ?>
                        <div class="ab-tcard <?= rps_acc($f[1]) ?>">
                            <div class="ab-tcard__ico">
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?= $f[2] ?></svg>
                            </div>
                            <h3 class="text-white"><?= $f[0] ?></h3>
                            <p><?= $f[3] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- CURRICULUM INTEGRATION + COLOR/CULMINATION -->
        <section class="ab-section pt-0">
            <div class="rps-container">
                <div class="mx-auto max-w-3xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> In the Curriculum</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">Integrating Celebrations into the <span class="brand-text">Curriculum</span></h2>
                    <p class="reveal-up mt-5 text-slate-400 leading-relaxed">
                        The curriculum is thoughtfully designed to incorporate celebrations as an integral part of students' learning
                        experiences. These events serve as not just moments of joy and merriment but also as valuable educational tools.
                    </p>
                    <p class="reveal-up mt-4 text-slate-400 leading-relaxed">
                        Through these celebrations, students are provided with the opportunity to enjoy the spirit of togetherness while
                        gaining a deeper understanding of the cultural, social, and historical significance behind each occasion.
                    </p>
                </div>

                <div class="ab-split reveal-up mt-12 items-stretch2">
                    <div class="info-card">
                        <h3>
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="13.5" cy="6.5" r="2.5"/><circle cx="19" cy="13" r="2.5"/><circle cx="6" cy="12" r="2.5"/><circle cx="10" cy="18" r="2.5"/><path d="M12 12a8 8 0 1 0 0-.01"/></svg>
                            Color Day Celebration
                        </h3>
                        <p>
                            Color Day, specifically celebrated in the foundation stage, is a delightful event where young learners come
                            together to celebrate unity and explore the world of colors. This celebration goes beyond mere revelry, as it
                            aids in the identification and comprehension of various color-related concepts, fostering a holistic learning
                            experience for the students.
                        </p>
                    </div>
                    <div class="info-card">
                        <h3>
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M8 21h8M12 17v4M7 4h10v5a5 5 0 0 1-10 0V4zM7 6H4v1a3 3 0 0 0 3 3M17 6h3v1a3 3 0 0 1-3 3"/></svg>
                            Culmination Day Celebration
                        </h3>
                        <ul class="dot-list mt-4">
                            <li><b>Event Overview:</b>&nbsp;Culmination Day, also known as the 18th Day, is a significant celebration held once per theme.</li>
                            <li><b>Student Showcase:</b>&nbsp;This day provides students with a platform to demonstrate the talents and skills they have acquired during the preceding theme.</li>
                            <li><b>Parental Involvement:</b>&nbsp;Parents are invited to witness impressive student presentations, fostering a sense of pride and accomplishment for both students and families.</li>
                            <li><b>Phase-Wise Approach:</b>&nbsp;The celebration is structured throughout the academic year in four phases, extending to the preparatory stage.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- MAJOR EVENTS -->
        <section class="ab-section pt-0">
            <div class="rps-container">
                <div class="ab-cta reveal-up band-violet">
                    <div class="ab-cta__inner mw-820c">
                        <div class="eyebrow mx-auto eyebrow-band"><span class="dot"></span> Signature Events</div>
                        <h2 class="sec-title mt-5 text-3xl md:text-4xl text-white">Major Events at <span class="brand-text brand-hero">Rathinam</span></h2>
                        <p class="mt-5 text-white/85 leading-relaxed">
                            In addition to these regular celebrations, Rathinam International Public School hosts two major events &ndash;
                            Sports Day and Annual Day &ndash; both eagerly anticipated by students. These grand celebrations not only motivate
                            students to actively participate in sports but also provide a platform for showcasing their talents in cultural
                            activities.
                        </p>
                        <p class="mt-4 text-white/75 leading-relaxed">
                            The presence of eminent judges, including esteemed personalities like Sailendira Babu, adds an extra layer of
                            prestige to these events. Our Institutions Silver Jubilee celebrations stand out as iconic moments, marked by
                            unexpected surprises and very important personages (VVIPs) as judges for special occasions. These landmark events
                            further highlight the school's commitment to creating a memorable enriching educational journey for its students,
                            where every celebration becomes a cherished part of their holistic development.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- GALLERY -->
        <section class="ab-section pt-0" id="gallery">
            <div class="rps-container">
                <div class="mx-auto max-w-3xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Moments</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">Glimpses of Our <span class="brand-text">Celebrations</span></h2>
                    <p class="reveal-up mt-5 text-slate-400">Splashes of joy, creativity, and teamwork captured across the year.</p>
                </div>
                <div class="gal-grid reveal-up mt-12">
                    <?php foreach ($gallery as $i => $g): ?>
                        <div class="gal-item<?= ($i === 0 || $i === 4) ? ' gal-item--wide' : '' ?>">
                            <img width="1024" height="576" src="./assets/image/live/celebrations/<?= $g ?>.webp" alt="RPS celebration moment" loading="lazy">
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
                        <h2 class="sec-title text-3xl md:text-5xl text-white">Discover Potential,<br><span class="brand-text brand-hero">Ignite Passion!</span></h2>
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
