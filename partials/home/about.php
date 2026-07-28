<?php
    // ABOUT — auto-sliding content slider (left) + rotating image slider and a
    // rotating stat card with a progress/time line (right). Inspired by the
    // globalsubupdates live-admission pattern.
    $aboutSlides = [
        [
            'title' => 'Rathinam International<br><span class="brand-text">Public School</span>',
            'body'  => 'Established with a vision of excellence, RPS stands as an edifice of knowledge that instills the joy of learning in every child. In a nurturing, future-ready environment, we blend academic rigour with values, creativity and character — helping every learner discover their fullest potential.',
        ],
        [
            'title' => 'A <span class="brand-text">Future-Ready</span><br>Environment',
            'body'  => 'RPS is a co-educational school that integrates its curriculum with emerging technological innovations — from AI-powered classrooms to hands-on robotics — creating a joyful, modern foundation of learning for children at every stage.',
        ],
        [
            'title' => 'The <span class="brand-text">Joy of Learning</span><br>for Every Child',
            'body'  => 'Rooted in positive psychology, our approach nurtures confidence, curiosity and compassion. From their earliest years right through to high-school graduation, every child grows into a capable, caring and future-ready individual.',
        ],
    ];
    $aboutImgs = ['about-campus.jpg', 'Banner1.png', 'Banner2.png', 'Banner3.png', 'Banner4.png'];
    $stats = [
        ['num' => '20+', 'label' => 'Years of Excellence'],
        ['num' => '5+',  'label' => 'Acre Green Campus'],
        ['num' => '10+', 'label' => 'Curriculum Programs'],
        ['num' => '5+',  'label' => 'Awards & Recognitions'],
    ];
?>
<section id="about" class="relative py-24 sec-light">
    <div class="rps-container">
        <div class="flex flex-col gap-10 lg:grid lg:grid-cols-12 lg:items-center lg:gap-14">

            <!-- LEFT: auto-sliding content -->
            <div class="col-span-12 lg:col-span-7">
                <div class="eyebrow reveal-up"><span class="dot"></span> About RPS</div>

                <div class="about-slider swiper reveal-up mt-5">
                    <div class="swiper-wrapper">
                        <?php foreach ($aboutSlides as $sl): ?>
                            <div class="swiper-slide">
                                <h2 class="sec-title text-3xl md:text-5xl"><?= $sl['title'] ?></h2>
                                <p class="mt-5 max-w-xl text-slate-300/90 leading-relaxed"><?= $sl['body'] ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="about-pagination swiper-pagination !relative !mt-6 !text-left"></div>
                </div>

                <div class="mt-7 flex flex-wrap gap-4">
                    <a href="#stages" class="inline-flex items-center gap-2 rounded-xl bg-white/5 border border-white/10 px-5 py-3 text-sm font-semibold text-white transition hover:bg-white/10">
                        Our Academics
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="#admission" class="inline-flex items-center gap-2 rounded-xl btn-primary px-5 py-3 text-sm font-semibold text-white transition hover:scale-105">
                        Book a Visit
                    </a>
                </div>
            </div>

            <!-- RIGHT: image slider + rotating stat card -->
            <div class="col-span-12 lg:col-span-5">
                <div class="glass reveal-up overflow-hidden p-2">
                    <div class="about-img-slider swiper overflow-hidden rounded-2xl">
                        <div class="swiper-wrapper">
                            <?php foreach ($aboutImgs as $img): ?>
                                <div class="swiper-slide">
                                    <div class="aspect-[4/3] overflow-hidden bg-gradient-to-br from-rps-navy/50 to-rps-ink">
                                        <img src="./assets/image/<?= $img ?>" alt="RPS campus" loading="lazy" class="h-full w-full object-cover"
                                             onerror="this.parentElement.style.display='none'">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Rotating stat card with a progress (time) line -->
                <div class="glass reveal-up relative mt-5 overflow-hidden p-6">
                    <div class="about-stats relative h-[92px]">
                        <?php foreach ($stats as $i => $st): ?>
                            <div class="stat-slide absolute inset-0 flex flex-col items-center justify-center text-center transition-all duration-700 <?= $i === 0 ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-full' ?>">
                                <span class="stat-num brand-text text-5xl md:text-6xl"><?= $st['num'] ?></span>
                                <span class="mt-2 text-xs font-semibold uppercase tracking-[0.22em] text-slate-400"><?= $st['label'] ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="absolute inset-x-0 bottom-0 h-[3px] bg-black/10">
                        <div class="about-progress h-full w-0" style="background:linear-gradient(90deg,#EC008C,#EAB308,#3DB54A)"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
