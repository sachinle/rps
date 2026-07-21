<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0a0a12">
    <meta name="description" content="Rathinam International Public School (RPS), Coimbatore — a CBSE senior secondary school nurturing young minds from early childhood to high school graduation through positive psychology, AI-driven learning and holistic growth.">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="Rathinam International Public School | The Joy of Learning">
    <meta property="og:description" content="CBSE Senior Secondary School in Coimbatore. #HappySchooling — nurturing young minds from Nursery to Grade 12.">
    <meta property="og:type" content="website">
    <title>Rathinam International Public School | The Joy of Learning</title>

    <!--
      =====================================================================
      RPS HOME — asset drop-in reference (replace placeholders in partials)
      ---------------------------------------------------------------------
      Put your real images under: assets/image/<folder>/...
      Each partial has an "IMAGE NEEDED" comment marking the exact slot & size.
        assets/image/logo.png            RPS logo (transparent, wide)
        assets/image/logo-mark.png       just the 3-dot rps mark (square)
        assets/image/hero/slide-1..4.jpg full-bleed campus photos (1920x1080)
        assets/image/hero/qr.png         admission QR code (square)
        assets/image/stages/*.jpg        classroom / activity photos
        assets/image/ai-robot.png        robot / AI mascot (transparent PNG)
        assets/image/social/*.jpg        instagram post thumbnails (square)
        assets/image/gallery/*.jpg       gallery photos (4:3)
      Videos (FANTABULOUS / TESTIMONIALS) use YouTube IDs — set them inline.
      =====================================================================
    -->

    <!-- Minimal critical CSS to avoid flash before stylesheet loads -->
    <style>
        html { background: #0a0a12; }
        body { margin: 0 !important; padding: 0 !important; background: #0a0a12; color: #e8e8f0; font-family: 'Clash Grotesk', system-ui, sans-serif; }
        .sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); white-space: nowrap; border: 0; }
    </style>

    <!-- Preconnect critical origins -->
    <link rel="preconnect" href="https://api.fontshare.com" crossorigin>
    <link rel="preconnect" href="https://cdn.fontshare.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

    <!-- Fonts: Clash Display (headings) + Clash Grotesk (body) via Fontshare -->
    <link rel="preload" as="style" href="https://api.fontshare.com/v2/css?f[]=clash-display@400,500,600,700&f[]=clash-grotesk@400,500,600&display=swap" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://api.fontshare.com/v2/css?f[]=clash-display@400,500,600,700&f[]=clash-grotesk@400,500,600&display=swap"></noscript>

    <!-- Precompiled Tailwind utilities (see tailwind.config.js — rebuild with:
         npx tailwindcss@3 -c tailwind.config.js -i ./assets/css/tailwind-input.css -o ./assets/css/tailwind.css --minify) -->
    <link rel="stylesheet" href="./assets/css/tailwind.css?v=3">

    <!-- Swiper (hero slider + carousels) -->
    <link rel="preload" as="style" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"></noscript>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

    <link rel="stylesheet" href="./assets/css/style.css?v=3">
</head>

<body class="bg-rps-ink text-slate-200 font-body antialiased overflow-x-hidden">
    <a href="#about" class="sr-only focus:not-sr-only focus:fixed focus:top-2 focus:left-2 focus:z-[10001] focus:bg-white focus:text-black focus:px-3 focus:py-2 focus:rounded">Skip to main content</a>

    <!-- Ambient background: dotted grid + colour blobs -->
    <div class="rps-bg" aria-hidden="true">
        <div class="rps-grid"></div>
        <div class="rps-blob rps-blob--pink"></div>
        <div class="rps-blob rps-blob--green"></div>
        <div class="rps-blob rps-blob--amber"></div>
    </div>

    <?php include __DIR__ . '/partials/home/nav.php'; ?>
    <?php include __DIR__ . '/partials/home/hero.php'; ?>
    <?php include __DIR__ . '/partials/home/marquee.php'; ?>
    <?php include __DIR__ . '/partials/home/about.php'; ?>
    <?php include __DIR__ . '/partials/home/why-choose.php'; ?>
    <?php include __DIR__ . '/partials/home/admission-checker.php'; ?>
    <?php include __DIR__ . '/partials/home/stages.php'; ?>
    <?php include __DIR__ . '/partials/home/extra-curriculars.php'; ?>
    <?php include __DIR__ . '/partials/home/ai-robotics.php'; ?>
    <?php include __DIR__ . '/partials/home/social-media.php'; ?>
    <?php include __DIR__ . '/partials/home/fantabulous.php'; ?>
    <?php include __DIR__ . '/partials/home/testimonials.php'; ?>
    <?php include __DIR__ . '/partials/home/facilities.php'; ?>
    <?php include __DIR__ . '/partials/home/gallery.php'; ?>
    <?php include __DIR__ . '/partials/home/cta.php'; ?>
    <?php include __DIR__ . '/partials/home/footer.php'; ?>

    <?php include __DIR__ . '/partials/home/whatsapp.php'; ?>

    <!-- Floating scroll-to-top — dedicated class (self-contained in style.css),
         stacked just above the WhatsApp launcher. -->
    <button id="rps-top" aria-label="Scroll to top" class="scroll-top">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19V5M5 12l7-7 7 7"/></svg>
    </button>

    <script src="./assets/js/script.js?v=3" defer></script>
</body>

</html>
