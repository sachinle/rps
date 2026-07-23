<?php
    // FANTABULOUS RPS — sliding carousel of YouTube videos.
    // Replace 'id' values with real YouTube video ids.
    $videos = [
        ['id' => 'UrRGOkFghzU', 'title' => 'Fantabulous RPS · Episode 1'],
        ['id' => '9rAdtWjhHeA', 'title' => 'Fantabulous RPS · Episode 2'],
        ['id' => 'wR2IYUZmH20', 'title' => 'Fantabulous RPS · Episode 3'],
        ['id' => 'MvjA2uGUN-g', 'title' => 'Fantabulous RPS · Episode 4'],
        ['id' => 'FEyjnR0Vf0w', 'title' => 'Fantabulous RPS · Episode 5'],
        ['id' => 'u4uMCUl_nog', 'title' => 'Fantabulous RPS · Episode 6'],
        ['id' => 'lJVh881cb9Y', 'title' => 'Fantabulous RPS · Episode 7'],
    ];
?>
<section class="relative py-24">
    <div class="rps-container">
        <div class="mx-auto max-w-2xl text-center">
            <div class="eyebrow reveal-up mx-auto"><span class="dot" style="background:#EAB308;box-shadow:0 0 0 4px rgba(234,179,8,.28)"></span> Watch &amp; Explore</div>
            <h2 class="sec-title reveal-up mt-5 text-3xl md:text-5xl"><span class="brand-text">Fantabulous</span> RPS</h2>
            <p class="reveal-up mt-5 text-slate-400">A glimpse into the vibrant, joyful world of learning at RPS.</p>
        </div>

        <div class="relative mt-12">
            <div class="video-swiper swiper reveal-up overflow-hidden">
                <div class="swiper-wrapper">
                    <?php foreach ($videos as $v): ?>
                        <div class="swiper-slide">
                            <div class="glass p-3">
                                <div class="video-thumb group relative aspect-video cursor-pointer overflow-hidden rounded-xl bg-black" data-yt="<?= $v['id'] ?>">
                                    <img src="https://i.ytimg.com/vi/<?= $v['id'] ?>/hqdefault.jpg" alt="<?= $v['title'] ?>" loading="lazy" class="h-full w-full object-cover opacity-80 transition group-hover:opacity-100" onerror="this.style.display='none'">
                                    <span class="absolute inset-0 grid place-items-center">
                                        <span class="grid h-14 w-14 place-items-center rounded-full bg-rps-amber text-rps-ink transition group-hover:scale-110">
                                            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                                        </span>
                                    </span>
                                </div>
                                <p class="px-1 pt-3 pb-1 text-sm font-medium text-white"><?= $v['title'] ?></p>
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
