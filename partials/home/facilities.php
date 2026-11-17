<?php
    // FACILITIES — safety & engagement copy + quick enquiry form.
    $facilities = [
        ['Smart Classrooms',     'var(--rps-pink)',  '<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>'],
        ['Science & AI Labs',    'var(--rps-green)', '<path d="M9 3v6l-5 9a2 2 0 0 0 2 3h12a2 2 0 0 0 2-3l-5-9V3"/><path d="M8 3h8"/>'],
        ['Library & Reading',    'var(--rps-amber)', '<path d="M4 4h7v16H4zM13 4h7v16h-7z"/>'],
        ['Sports & Play Zones',  'var(--rps-blue)',  '<circle cx="12" cy="12" r="9"/><path d="M12 3v18M3 12h18"/>'],
        ['Transport & Safety',   'var(--rps-pink)',  '<rect x="3" y="6" width="18" height="10" rx="2"/><path d="M7 16v2M17 16v2M3 11h18"/>'],
        ['CCTV-Secured Campus',  'var(--rps-green)', '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/>'],
    ];
?>
<section class="relative py-24">
    <div class="rps-container">
        <div class="glass relative overflow-hidden p-8 md:p-12">
            <div class="pointer-events-none absolute -left-24 -bottom-24 h-72 w-72 rounded-full bg-rps-amber/20 blur-3xl"></div>

            <div class="relative">
                <!-- Heading + copy -->
                <div class="max-w-3xl">
                    <div class="eyebrow reveal-up"><span class="dot"></span> Modern Facilities</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">
                        Modern Facilities. <span class="brand-text">Safe Spaces.</span>
                        Better Learning.
                    </h2>
                    <p class="reveal-up mt-5 text-slate-300/90 leading-relaxed">
                        Our school houses a portfolio of facilities designed to nurture
                        holistic growth — from smart classrooms and advanced labs to safe
                        transport and secure, engaging play spaces. Every corner of RPS is
                        crafted to keep learning safe, joyful and inspiring.
                    </p>
                </div>

                <!-- Facility cards spread across the full width -->
                <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    <?php foreach ($facilities as $f): ?>
                        <div class="side-card reveal-up flex items-center gap-4 p-5 <?= rps_acc($f[1]) ?>">
                            <span class="ico-18 grid h-12 w-12 flex-shrink-0 place-items-center rounded-xl">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="<?= $f[1] ?>" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?= $f[2] ?></svg>
                            </span>
                            <span class="font-semibold text-white"><?= $f[0] ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
