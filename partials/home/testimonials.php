<?php
    // TESTIMONIALS — parent testimonial videos in a sliding carousel.
    $videos = [
        ['id' => 'jcOHN3-_tIc', 'name' => 'A Parent',  'role' => 'Why We Chose RPS'],
        ['id' => 'ARPmWhNK5mU', 'name' => 'A Parent',  'role' => 'A Joyful Learning Journey'],
        ['id' => 'GGdHEPsKbYM', 'name' => 'A Parent',  'role' => 'Caring Teachers, Happy Child'],
        ['id' => 'cKWXoasn6s', 'name' => 'A Parent',  'role' => 'Growth Beyond Academics'],
    ];
?>
<section class="relative py-24 sec-light">
    <div class="rps-container">
        <div class="mx-auto max-w-2xl text-center">
            <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> In Their Words</div>
            <h2 class="sec-title reveal-up mt-5 text-3xl md:text-5xl">
                What <span class="brand-text">Parents</span> Say
            </h2>
            <p class="reveal-up mt-5 text-slate-400">Real stories from the RPS family.</p>
        </div>

        <div class="relative mt-12">
            <div class="video-swiper swiper reveal-up overflow-hidden">
                <div class="swiper-wrapper">
                    <?php foreach ($videos as $v): ?>
                        <div class="swiper-slide">
                            <div class="glass p-3">
                                <div class="video-thumb group relative aspect-video cursor-pointer overflow-hidden rounded-xl bg-black" data-yt="<?= $v['id'] ?>">
                                    <img src="https://i.ytimg.com/vi/<?= $v['id'] ?>/hqdefault.jpg" alt="Testimonial: <?= $v['role'] ?>" loading="lazy" class="h-full w-full object-cover opacity-80 transition group-hover:opacity-100" onerror="this.style.display='none'">
                                    <span class="absolute inset-0 grid place-items-center">
                                        <span class="grid h-14 w-14 place-items-center rounded-full bg-rps-pink/90 text-white transition group-hover:scale-110">
                                            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                                        </span>
                                    </span>
                                </div>
                                <div class="flex items-center gap-3 px-1 pt-3 pb-1">
                                    <span class="grid h-9 w-9 place-items-center rounded-full bg-gradient-to-br from-rps-pink to-rps-pinkdark text-sm font-bold text-white">❝</span>
                                    <span class="leading-tight">
                                        <span class="block text-sm font-semibold text-white"><?= $v['role'] ?></span>
                                        <span class="block text-xs text-slate-400"><?= $v['name'] ?></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <button class="swiper-button-prev !left-0 !text-white" aria-label="Previous"></button>
            <button class="swiper-button-next !right-0 !text-white" aria-label="Next"></button>
        </div>
    </div>
</section>
