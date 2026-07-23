<?php
    // FOOTER — brand, quick links, contact, socials, copyright.
    $cols = [
        'Quick Links' => [
            'About Us' => '#about', 'Academics' => '#stages', 'Admissions' => '#admission',
            'Beyond Academics' => '#extra', 'Gallery' => '#gallery',
        ],
        'Academics' => [
            'Foundation Stage' => '#stages', 'Preparatory Stage' => '#stages',
            'Middle Stage' => '#stages', 'Senior Secondary' => '#stages', 'AI & Robotics' => '#extra',
        ],
        'Explore' => [
            'Why Choose RPS' => '#about', 'Positive Psychology' => '#about',
            'Facilities' => '#gallery', 'Social Media' => '#gallery', 'Contact' => '#footer',
        ],
    ];
?>
<footer id="footer" class="relative border-t border-white/10 pt-16">
    <div class="rps-container">
        <div class="flex flex-col gap-10 lg:grid lg:grid-cols-12">

            <!-- Brand + contact -->
            <div class="col-span-12 lg:col-span-4">
                <a href="#top" class="flex items-center gap-2">
                    <span class="relative block h-9 w-9">
                        <span class="absolute left-0 top-0 h-3 w-3 rounded-full bg-rps-pink"></span>
                        <span class="absolute right-0 top-0 h-3 w-3 rounded-full bg-rps-green"></span>
                        <span class="absolute left-1 bottom-0 h-3 w-3 rounded-full bg-rps-amber"></span>
                    </span>
                    <span class="leading-none">
                        <span class="block font-display text-xl font-semibold text-white">rps</span>
                        <span class="block text-[8px] font-medium uppercase tracking-[0.28em] text-slate-400">Rathinam Intl.</span>
                    </span>
                </a>
                <p class="mt-5 max-w-xs text-sm text-slate-400 leading-relaxed">
                    Rathinam International Public School — a CBSE senior secondary school
                    in Coimbatore, spreading the joy of learning. #HappySchooling.
                </p>

                <div class="mt-6 space-y-3 text-sm text-slate-300">
                    <p class="flex items-start gap-3">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--rps-pink)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-0.5 flex-shrink-0"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <!-- ADDRESS: update with the exact RPS campus address -->
                        Rathinam International Public School, Eachanari, Coimbatore, Tamil Nadu 641021
                    </p>
                    <p class="flex items-center gap-3">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--rps-green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="flex-shrink-0"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.98.36 1.93.7 2.85a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.92.34 1.87.57 2.85.7A2 2 0 0 1 22 16.92z"/></svg>
                        <a href="tel:+918144260260" class="hover:text-white transition-colors">+91 81442 60260</a>
                    </p>
                    <p class="flex items-center gap-3">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--rps-amber)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="flex-shrink-0"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 5L2 7"/></svg>
                        <a href="mailto:info@rps.edu.in" class="hover:text-white transition-colors">info@rps.edu.in</a>
                    </p>
                </div>
            </div>

            <!-- Link columns -->
            <?php foreach ($cols as $heading => $links): ?>
                <div class="col-span-6 sm:col-span-4 lg:col-span-2 lg:col-start-auto">
                    <h4 class="text-sm font-semibold uppercase tracking-wider text-white"><?= $heading ?></h4>
                    <ul class="mt-4 space-y-2.5 text-sm text-slate-400">
                        <?php foreach ($links as $label => $href): ?>
                            <li><a href="<?= $href ?>" class="transition-colors hover:text-rps-amber"><?= $label ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>

            <!-- Socials + affiliation -->
            <div class="col-span-12 sm:col-span-8 lg:col-span-2">
                <h4 class="text-sm font-semibold uppercase tracking-wider text-white">Follow Us</h4>
                <div class="mt-4 flex gap-3">
                    <?php
                        $socials = [
                            ['label' => 'Facebook',  'path' => '<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>'],
                            ['label' => 'Instagram', 'path' => '<rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>'],
                            ['label' => 'YouTube',    'path' => '<path d="M22 8a4 4 0 0 0-3-3.9C17 3.5 12 3.5 12 3.5s-5 0-7 .6A4 4 0 0 0 2 8v8a4 4 0 0 0 3 3.9c2 .6 7 .6 7 .6s5 0 7-.6A4 4 0 0 0 22 16z"/><path d="m10 9 5 3-5 3z" fill="currentColor" stroke="none"/>'],
                        ];
                        foreach ($socials as $s): ?>
                        <a href="#" aria-label="<?= $s['label'] ?>" class="grid h-10 w-10 place-items-center rounded-xl border border-white/10 bg-white/5 text-slate-300 transition hover:border-rps-amber hover:text-rps-amber">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $s['path'] ?></svg>
                        </a>
                    <?php endforeach; ?>
                </div>
                <div class="mt-6 rounded-xl border border-white/10 bg-white/5 p-3 text-center">
                    <p class="text-[10px] uppercase tracking-wider text-slate-400">CBSE Affiliation</p>
                    <p class="font-display text-lg font-semibold text-white">1930977</p>
                </div>
            </div>
        </div>

        <!-- bottom bar -->
        <div class="mt-14 flex flex-col items-center justify-between gap-4 border-t border-white/10 py-6 text-sm text-slate-500 md:flex-row">
            <p>© <?= date('Y') ?> Rathinam International Public School. All rights reserved.</p>
            <p class="flex items-center gap-1.5">Made with <span class="text-rps-amber">♥</span> for the joy of learning</p>
        </div>
    </div>
</footer>
