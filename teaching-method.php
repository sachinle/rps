<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0a0a12">
    <meta name="description" content="Teaching methods at Rathinam International Public School — research-based, experiential, art-integrated, game-based, project-based and blended learning designed by expert educationists.">
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="Teaching Methods | Rathinam International Public School">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <meta property="og:url" content="https://rathinamschool.ac.in/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@TalktoRIPSchool">
    <meta name="twitter:title" content="Teaching Methods | Rathinam International Public School">
    <meta name="twitter:description" content="Teaching methods at Rathinam International Public School — research-based, experiential, art-integrated, game-based, project-based and blended learning designed by expert educationists.">
    <meta name="twitter:image" content="https://rathinamschool.ac.in/assets/image/Banner1.webp">
    <title>Teaching Methods | Rathinam International Public School</title>

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

        // Six core teaching methodologies
        $methods = [
            ['Research based learning', '#FFB811', '<circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/>',
                "Our Inquiry-based learning is an eminent form of active learning. RPS's young learners are left to explore, ask poignant questions, do the required research to find answers to their questions, think, discuss, and finally arrive at conclusions based on available information."],
            ['Experiential learning', '#EC008B', '<path d="M12 2 2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/>',
                'RPS emphasizes experiential learning, engaging students through hands-on activities and real-world experiences. This approach deepens understanding and retention, allowing students to connect theory with practice meaningfully, fostering curiosity and active learning.'],
            ['Art-integrated learning', '#ABD92D', '<path d="M12 2a10 10 0 1 0 0 20 3 3 0 0 0 0-6h-1a2 2 0 0 1 0-4h3a4 4 0 0 0 0-8"/><circle cx="7.5" cy="10.5" r="1"/><circle cx="12" cy="7.5" r="1"/><circle cx="16.5" cy="10.5" r="1"/>',
                'We bring creativity to education through art-integrated learning, blending subjects with visual arts, music, and theatre. This method enhances expression and critical thinking, making learning enjoyable and helping students grasp complex concepts through artistic exploration.'],
            ['Game based Learning', '#5A5FD8', '<rect x="2" y="6" width="20" height="12" rx="4"/><path d="M7 12h4M9 10v4"/><circle cx="16" cy="11" r="1"/><circle cx="18" cy="14" r="1"/>',
                'Game-based learning at Rathinam combines fun with education, using interactive games to reinforce key concepts. This strategy builds problem-solving skills, teamwork, and strategic thinking, ensuring students learn effectively while staying engaged and motivated.'],
            ['Project based learning', '#FFB811', '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M9 15l2 2 4-4"/>',
                'Our project-based learning approach empowers students to explore topics deeply by working on real-world projects. This method promotes critical thinking, research skills, and collaboration, preparing students to tackle real-life challenges creatively and confidently.'],
            ['Blended learning', '#9333EA', '<rect x="2" y="4" width="20" height="13" rx="2"/><path d="M8 21h8M12 17v4"/><path d="M9 10l2 2 4-4"/>',
                'RPS integrates technology and traditional classroom teaching in blended learning, offering students a flexible, personalized educational experience. This approach enhances learning outcomes, enabling students to engage with digital resources and in-person guidance for well-rounded development.'],
        ];

        // Additional approaches
        $approaches = [
            ['Child-centric learning', '<path d="M9 11a3 3 0 1 0 6 0 3 3 0 0 0-6 0z"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/>',
                'RPS promotes interactive and experiential learning methods that engage students in hands-on activities, discussions, and projects. These allow them to explore concepts in depth and apply their knowledge creatively. By prioritizing the development of each child, RPS aims to empower students to become lifelong learners equipped to thrive in an ever-changing world.'],
            ['Montessori Method', '<path d="M3 21h18M5 21V10l7-5 7 5v11M9 21v-6h6v6"/>',
                'The Montessori method of teaching stipulates a more experiential student-centered teaching methodology. Our focus is on learning by doing; hence, experiential activities, toy-based learning, games-based learning, experiments, etc, are an integral part of this learning methodology. Our young learners learn to explore, discover, and experiment through these stimulating activities in a risk-free environment.'],
            ['Flipped Classrooms', '<path d="M3 7l9-4 9 4-9 4-9-4z"/><path d="M3 7v6M21 7v6M7 9v5a5 3 0 0 0 10 0V9"/>',
                'At Rathinam Public School, our flipped classroom model transforms the traditional learning approach. Instead of learning new concepts during class, students are introduced to lessons through pre-recorded video lectures or reading materials at home. This allows classroom sessions to be more interactive and focused on applying knowledge.'],
        ];
    ?>

    <main id="main-content">
        <!-- HERO -->
        <section class="ab-hero" id="teaching-hero">
            <div class="rps-container">
                <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Teaching &amp; Learning</div>
                <h1 class="ab-hero__title sec-title reveal-up mt-5">Teaching Methods That <span class="brand-text">Engage Every Learner</span></h1>
                <p class="ab-hero__sub reveal-up">Our teaching methodologies are designed by expert educationists, keeping in mind the specific types of topics and the unique needs of our students. Our engaging classrooms, labs, and activity areas are always abuzz with excitement, indicating a successful assimilation of learning while having fun.</p>
            </div>
        </section>

        <!-- CORE PHILOSOPHY -->
        <section class="ab-section pt-tight">
            <div class="rps-container">
                <div class="mx-auto max-w-3xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Our Philosophy</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">Learning That Engages <span class="brand-text">All the Senses</span></h2>
                    <p class="reveal-up mt-5 text-slate-400 leading-relaxed">
                        We believe that true learning engages all the senses, experiences, and abilities&mdash;cognitive, mental, physical, and
                        even spiritual. While the CBSE curriculum provides a foundation for what to teach, we place equal importance on how to
                        prepare. We understand that each child is dynamic, with unique learning needs and styles. Traditional, rigid teaching
                        methods may not effectively address these needs or entirely do justice to each subject. That's why RPS embraces flexible,
                        innovative teaching strategies, continuously adapting to the evolving educational landscape. We leverage the latest
                        technology to enhance learning experiences, ensuring our methods meet our students' diverse and changing needs.
                    </p>
                </div>

                <!-- Six methodologies -->
                <div class="ab-tri reveal-up mt-12">
                    <?php foreach ($methods as $m): ?>
                        <div class="ab-tcard <?= rps_acc($m[1]) ?>">
                            <div class="ab-tcard__ico">
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?= $m[2] ?></svg>
                            </div>
                            <h3 class="text-white"><?= $m[0] ?></h3>
                            <p><?= $m[3] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ADDITIONAL APPROACHES -->
        <section class="ab-section pt-0">
            <div class="rps-container">
                <div class="mx-auto max-w-3xl text-center">
                    <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> More Approaches</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">Tailored to <span class="brand-text">How Children Learn Best</span></h2>
                </div>
                <div class="ab-tri reveal-up mt-12">
                    <?php foreach ($approaches as $a): ?>
                        <div class="info-card">
                            <h3>
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $a[1] ?></svg>
                                <?= $a[0] ?>
                            </h3>
                            <p><?= $a[2] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- SAFE SPACES -->
        <section class="ab-section pt-0">
            <div class="rps-container">
                <div class="ab-cta reveal-up band-green">
                    <div class="ab-cta__inner">
                        <div class="eyebrow mx-auto eyebrow-band"><span class="dot"></span> Early Years</div>
                        <h2 class="sec-title mt-5 text-3xl md:text-4xl text-white">Creating a Safe and Trusting Space for <span class="brand-text brand-hero">Little Learners</span></h2>
                        <p class="mt-5 text-white/85 leading-relaxed max-w-3xl mx-auto">
                            For young children at Rathinam Public School, kindergarten is often their first experience away from their mothers.
                            In this new environment, our teachers play a nurturing role, resembling a mother's care at home. With consistent
                            interaction and attentiveness, our teachers look after all aspects of a child's needs&mdash;learning, feeding, or
                            playtime. This consistent care fosters a robust and motherly bond between the children and their teachers, making
                            them feel comfortable and open to sharing their thoughts and emotions. At RPS, this special bond builds trust,
                            helping young learners adjust smoothly to the journey of formal education.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="ab-section pt-0">
            <div class="rps-container">
                <div class="ab-cta reveal-up">
                    <div class="ab-cta__inner">
                        <h2 class="sec-title text-3xl md:text-5xl text-white">Transform Dreams into Reality<br><span class="brand-text brand-hero">through Learning!</span></h2>
                        <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                            <a href="admission#inquiry-form" class="inline-flex items-center gap-2 rounded-2xl btn-primary px-7 py-3.5 font-semibold text-white transition hover:scale-105">Admissions Open
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                            <a href="facilities" class="inline-flex items-center gap-2 rounded-2xl border border-white/20 bg-white/5 px-7 py-3.5 font-semibold text-white backdrop-blur transition hover:bg-white/10">Explore Facilities</a>
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
