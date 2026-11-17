<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0a0a12">
    <meta name="description" content="Careers at Rathinam International Public School (RPS), Coimbatore. Explore current job openings and join our team of passionate educators and staff.">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="Career | Rathinam International Public School">
    <meta property="og:description" content="Explore current job openings at Rathinam International Public School, Coimbatore.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <meta property="og:url" content="https://rathinamschool.ac.in/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@TalktoRIPSchool">
    <meta name="twitter:title" content="Career | Rathinam International Public School">
    <meta name="twitter:description" content="Explore current job openings at Rathinam International Public School, Coimbatore.">
    <meta name="twitter:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <title>Career | Rathinam International Public School</title>

    <!-- Minimal critical CSS -->
    <style>
        html { background: #0a0a12; }
        body { margin: 0 !important; padding: 0 !important; background: #0a0a12; color: #e8e8f0; font-family: 'Clash Grotesk', system-ui, sans-serif; }
        .sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0; }
    </style>

    <!-- Preconnect critical origins -->
    <link rel="preconnect" href="https://api.fontshare.com" crossorigin>
    <link rel="preconnect" href="https://cdn.fontshare.com" crossorigin>
    <link rel="preconnect" href="https://zimyo.work" crossorigin>

    <!-- Fonts: Clash Display + Clash Grotesk -->
    <link rel="preload" as="style" href="https://api.fontshare.com/v2/css?f[]=clash-display@400,500,600,700&f[]=clash-grotesk@400,500,600&display=swap" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://api.fontshare.com/v2/css?f[]=clash-display@400,500,600,700&f[]=clash-grotesk@400,500,600&display=swap"></noscript>

    <!-- Tailwind utilities & custom styles -->
    <link rel="stylesheet" href="./assets/css/tailwind.css?v=28">
    <link rel="stylesheet" href="./assets/css/style.css?v=65">

    <!-- Career widget: give the injected listing room to breathe on the dark theme -->
    <style>
        #job-listing { min-height: 320px; }
        #job-listing a { color: var(--rps-amber, #FBB040); }
    </style>
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
        <!-- HERO -->
        <section class="ab-hero" id="career-hero">
            <div class="rps-container">
                <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Join Our Team</div>
                <h1 class="ab-hero__title sec-title reveal-up mt-5">Build Your <span class="brand-text">Career</span> With Us</h1>
                <p class="ab-hero__sub reveal-up">At Rathinam International Public School we are always looking for passionate educators and dedicated professionals. Explore our current openings below and grow with a community that puts learning first.</p>
            </div>
        </section>

        <!-- CURRENT OPENINGS + JOB WIDGET -->
        <section class="ab-section pt-tight">
            <div class="rps-container">
                <div class="mx-auto max-w-3xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Current Openings</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">Explore <span class="brand-text">Open Positions</span></h2>
                    <p class="reveal-up mt-5 text-slate-400">Live listings update automatically. Click a role to view details and apply.</p>
                </div>

                <div class="reveal-up mt-12 glass p-5 md:p-8">
                    <!-- Zimyo recruitment job widget -->
                    <div id="job-listing"></div>
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

    <!-- Zimyo job widget loader -->
    <script type="text/javascript">
        var USERID = 7381;
    </script>
    <script src="https://zimyo.work/recruit/jobwidget.js"></script>
</body>

</html>
