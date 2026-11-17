<?php
    // A SNEAK PEEK INTO RPS — sliding carousel of YouTube videos, grouped by category.
    $videos = [
        // Celebrations
        ['id' => 'WG0gDD3iAhk', 'title' => 'Celebrations'],
        ['id' => 'fgIwwuAiAEc', 'title' => 'Celebrations'],
        ['id' => 'RPZImuzuknE', 'title' => 'Celebrations'],
        ['id' => '-VjLV6IwoB8', 'title' => 'Celebrations'],
        // Activities
        ['id' => 'khD2D8JxTUI', 'title' => 'Activities'],
        ['id' => '-Qza_l66NrQ', 'title' => 'Activities'],
        // Field Trips
        ['id' => '6AWllycL5dM', 'title' => 'Field Trips'],
        ['id' => 'qL1ODeU2_iM', 'title' => 'Field Trips'],
        // Campus Life
        ['id' => 'MZnoCr9TFo0', 'title' => 'Campus Life'],
        ['id' => 'gX_dv1lpJ2I', 'title' => 'Campus Life'],
        // Events
        ['id' => '3bFSVzNehL4', 'title' => 'Events'],
        ['id' => 'Dhh-6PEhrEE', 'title' => 'Events'],
        // Existing highlight videos
        ['id' => 'UrRGOkFghzU', 'title' => 'RPS · Episode 1'],
        ['id' => '9rAdtWjhHeA', 'title' => 'RPS · Episode 2'],
        ['id' => 'wR2IYUZmH20', 'title' => 'RPS · Episode 3'],
        ['id' => 'MvjA2uGUN-g', 'title' => 'RPS · Episode 4'],
        ['id' => 'FEyjnR0Vf0w', 'title' => 'RPS · Episode 5'],
        ['id' => 'u4uMCUl_nog', 'title' => 'RPS · Episode 6'],
        ['id' => 'lJVh881cb9Y', 'title' => 'RPS · Episode 7'],
    ];
?>
<section class="relative py-24 sec-light">
    <div class="rps-container">
        <div class="mx-auto max-w-2xl text-center">
            <div class="eyebrow reveal-up mx-auto"><span class="dot dot--amber"></span> Watch &amp; Explore</div>
            <h2 class="sec-title reveal-up mt-5 text-3xl md:text-5xl">A Sneak Peek into <span class="brand-text">RPS</span></h2>
            <p class="reveal-up mt-5 text-slate-400">Celebrations, activities, field trips, campus life and events — a closer look at life at RPS.</p>
        </div>

        <div class="relative mt-12">
            <div class="video-swiper swiper reveal-up overflow-hidden">
                <div class="swiper-wrapper">
                    <?php foreach ($videos as $v): ?>
                        <div class="swiper-slide">
                            <div class="glass p-3">
                                <div class="video-thumb group relative aspect-video cursor-pointer overflow-hidden rounded-xl bg-black" data-yt="<?= $v['id'] ?>">
                                    <img width="1200" height="800" src="https://i.ytimg.com/vi/<?= $v['id'] ?>/hqdefault.jpg" alt="<?= $v['title'] ?>" loading="lazy" class="h-full w-full object-cover opacity-80 transition group-hover:opacity-100" onerror="this.style.display='none'">
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
            <button class="swiper-button-prev !left-0" aria-label="Previous"></button>
            <button class="swiper-button-next !right-0" aria-label="Next"></button>
        </div>
    </div>
</section>
