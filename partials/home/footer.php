<?php
    // FOOTER — brand, quick links, contact, socials, copyright.
    // Footer quick links — including Privacy Policy.
    $quickLinks = [
        'About Us'         => 'about',
        'Admission'        => 'admission',
        'Curriculum'       => 'curriculum',
        'Beyond Academics' => 'beyond-academics',
        'Gallery'          => './#gallery',
        'Privacy Policy'   => 'privacy-policy',
    ];
?>
<footer id="footer" class="relative pt-16">
    <!-- Tri-colour top border (logo colours: pink · yellow · green) -->
    <div class="footer-brandbar absolute inset-x-0 top-0 h-1"></div>
    <div class="rps-container">
        <div class="footer-grid">

            <!-- Brand + contact -->
            <div class="footer-col">
                <a href="#top" class="footer-logo">
                    <img width="640" height="284" src="./assets/image/logo2.webp" alt="Rathinam International Public School — The Joy of Learning" loading="lazy">
                </a>
                <p class="mt-2.5 text-xs font-semibold text-rps-amber tracking-wide">
                    CBSE Affiliation number: 1930977
                </p>
                <p class="mt-4 max-w-xs text-sm text-slate-400 leading-relaxed">
                    Rathinam International Public School — a CBSE senior secondary school
                    in Coimbatore, spreading the joy of learning. #HappySchooling.
                </p>

                <div class="mt-6 space-y-3 text-sm text-slate-300">
                    <p class="flex items-start gap-3">
                        <a href="https://www.google.com/maps/place/Rathinam+International+Public+School/@10.9284418,76.8967471,17z/data=!3m1!4b1!4m6!3m5!1s0x3ba85a5f4b6a61c1:0x4f178ffa18134683!8m2!3d10.9284418!4d76.8967471!16s%2Fg%2F11b8z97y0_" target="_blank" rel="noopener noreferrer" class="flex items-start gap-3 hover:text-white transition-colors group">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--rps-pink)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mt-0.5 flex-shrink-0 group-hover:scale-110 transition-transform"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <span>Rathinam International Public School, Eachanari, Coimbatore, Tamil Nadu 641021</span>
                        </a>
                    </p>
                    <p class="flex items-center gap-3">
                        <a href="tel:+918144260260" class="flex items-center gap-3 hover:text-white transition-colors group">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--rps-green)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="flex-shrink-0 group-hover:scale-110 transition-transform"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.98.36 1.93.7 2.85a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.92.34 1.87.57 2.85.7A2 2 0 0 1 22 16.92z"/></svg>
                            <span>+91 81442 60260</span>
                        </a>
                    </p>
                    <p class="flex items-center gap-3">
                        <a href="mailto:&#114;&#112;&#115;&#97;&#100;&#109;&#105;&#115;&#115;&#105;&#111;&#110;&#115;&#64;&#114;&#97;&#116;&#104;&#105;&#110;&#97;&#109;&#46;&#105;&#110;" class="flex items-center gap-3 hover:text-white transition-colors group">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="var(--rps-amber)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="flex-shrink-0 group-hover:scale-110 transition-transform"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 5L2 7"/></svg>
                            <span>&#114;&#112;&#115;&#97;&#100;&#109;&#105;&#115;&#115;&#105;&#111;&#110;&#115;&#64;&#114;&#97;&#116;&#104;&#105;&#110;&#97;&#109;&#46;&#105;&#110;</span>
                        </a>
                    </p>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-col">
                <h3 class="text-sm font-semibold uppercase tracking-wider text-white">Quick Links</h3>
                <ul class="mt-4 space-y-2.5 text-sm text-slate-400">
                    <?php foreach ($quickLinks as $label => $href): ?>
                        <li><a href="<?= $href ?>" class="transition-colors hover:text-rps-amber"><?= $label ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- RHS: ZIA early-years sub-brand + socials -->
            <div class="footer-col">
                <div class="zia-card">
                    <span class="zia-logo">
                        <img width="1951" height="531" src="./assets/image/zia-logo.webp" alt="Zia by Rathinam — International Curriculum School" loading="lazy">
                    </span>
                    <p class="zia-tag">Early Years at RPS</p>
                    <p class="zia-sub">Where every little journey begins — playful, joyful and future-ready learning for our youngest minds.</p>
                    <div class="zia-foot">
                        <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Follow Us</span>
                        <div class="mt-3 flex gap-3">
                            <?php
                                $socials = [
                                    ['label' => 'Facebook',  'url' => 'https://www.facebook.com/rps.cbe', 'path' => '<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>'],
                                    ['label' => 'Instagram', 'url' => 'https://www.instagram.com/rps.cbe/', 'path' => '<rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>'],
                                    ['label' => 'YouTube',   'url' => 'https://www.youtube.com/@rathinaminternationalschool', 'path' => '<path d="M22 8a4 4 0 0 0-3-3.9C17 3.5 12 3.5 12 3.5s-5 0-7 .6A4 4 0 0 0 2 8v8a4 4 0 0 0 3 3.9c2 .6 7 .6 7 .6s5 0 7-.6A4 4 0 0 0 22 16z"/><path d="m10 9 5 3-5 3z" fill="currentColor" stroke="none"/>'],
                                    ['label' => 'LinkedIn',  'url' => 'https://www.linkedin.com/school/rathinam-international-public-school/', 'path' => '<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/>'],
                                    ['label' => 'Twitter',   'url' => 'https://twitter.com/TalktoRIPSchool', 'path' => '<path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>'],
                                ];
                                foreach ($socials as $s): ?>
                                <a href="<?= $s['url'] ?>" target="_blank" rel="noopener noreferrer" aria-label="<?= $s['label'] ?>" class="grid h-10 w-10 place-items-center rounded-xl border border-white/10 bg-white/5 text-slate-300 transition hover:border-rps-amber hover:text-rps-amber">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $s['path'] ?></svg>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- bottom bar -->
        <div class="mt-14 flex flex-col items-center justify-between gap-4 border-t border-white/10 py-6 text-sm text-slate-500 md:flex-row">
            <p>© <?= date('Y') ?> Rathinam International Public School. All rights reserved.</p>
            <div class="flex items-center gap-3">
                <a href="privacy-policy" class="transition-colors hover:text-rps-amber">Privacy Policy</a>
                <span class="text-slate-700">•</span>
                <p class="flex items-center gap-1.5">Made with <span class="text-rps-amber">♥</span> for the joy of learning</p>
            </div>
            <p class="flex items-center gap-1.5">Developed By <a href="https://rankuhigher.in" target="_blank" rel="noopener noreferrer" class="text-rps-amber hover:underline">Rankuhigher.in</a></p>
        </div>
    </div>
</footer>
