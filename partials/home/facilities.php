<?php
    // FACILITIES — safety & engagement copy + quick enquiry form.
    $facilities = [
        ['Smart Classrooms',     'var(--rps-pink)',  '<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>'],
        ['Science & AI Labs',    'var(--rps-green)', '<path d="M9 3v6l-5 9a2 2 0 0 0 2 3h12a2 2 0 0 0 2-3l-5-9V3"/><path d="M8 3h8"/>'],
        ['Library & Reading',    'var(--rps-amber)', '<path d="M4 4h7v16H4zM13 4h7v16h-7z"/>'],
        ['Sports & Play Zones',  'var(--rps-blue)',  '<circle cx="12" cy="12" r="9"/><path d="M12 3v18M3 12h18"/>'],
        ['Transport & Safety',   'var(--rps-pink)',  '<rect x="3" y="6" width="18" height="10" rx="2"/><path d="M7 16v2M17 16v2M3 11h18"/>'],
        ['CCTV Secured Campus',  'var(--rps-green)', '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/>'],
    ];
?>
<section class="relative py-24">
    <div class="rps-container">
        <div class="glass relative overflow-hidden p-8 md:p-12">
            <div class="pointer-events-none absolute -left-24 -bottom-24 h-72 w-72 rounded-full bg-rps-pink/20 blur-3xl"></div>

            <div class="flex flex-col gap-10 lg:grid lg:grid-cols-12">
                <!-- LEFT: copy + facility chips -->
                <div class="col-span-12 lg:col-span-7">
                    <div class="eyebrow reveal-up"><span class="dot"></span> Modern Facilities</div>
                    <h2 class="sec-title reveal-up mt-5 text-3xl md:text-4xl">
                        Ensuring <span class="brand-text">Safety &amp; Engagement</span><br>
                        with Modern Facilities
                    </h2>
                    <p class="reveal-up mt-5 max-w-xl text-slate-300/90 leading-relaxed">
                        Our school houses a portfolio of facilities designed to nurture
                        holistic growth — from smart classrooms and advanced labs to safe
                        transport and secure, engaging play spaces. Every corner of RPS is
                        crafted to keep learning safe, joyful and inspiring.
                    </p>

                    <div class="mt-8 grid gap-3 sm:grid-cols-2">
                        <?php foreach ($facilities as $f): ?>
                            <div class="side-card reveal-up flex items-center gap-3 p-4" style="--accent: <?= $f[1] ?>">
                                <span class="grid h-9 w-9 flex-shrink-0 place-items-center rounded-lg" style="background: color-mix(in srgb, <?= $f[1] ?> 18%, transparent)">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="<?= $f[1] ?>" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?= $f[2] ?></svg>
                                </span>
                                <span class="text-sm font-semibold text-white"><?= $f[0] ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- RIGHT: enquiry form -->
                <div class="col-span-12 lg:col-span-5">
                    <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 md:p-7 reveal-up">
                        <h3 class="text-xl font-semibold text-white">Book a Campus Visit</h3>
                        <p class="mt-1 text-sm text-slate-400">Fill in your details and our team will call you back.</p>
                        <form class="mt-5 space-y-3" onsubmit="event.preventDefault(); this.reset(); document.getElementById('rps-facility-msg').textContent='Thank you! We\'ll be in touch shortly.';">
                            <input type="text"  name="name"   placeholder="Parent / Student Name" required class="rps-input">
                            <input type="email" name="email"  placeholder="Email Address" required class="rps-input">
                            <input type="tel"   name="phone"  placeholder="Mobile Number" required class="rps-input">
                            <textarea name="message" rows="3" placeholder="Your message (optional)" class="rps-input resize-none"></textarea>
                            <button type="submit" class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-rps-pink to-rps-amber px-6 py-3.5 font-semibold text-white transition hover:scale-[1.02]">
                                Apply Now
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </button>
                            <p id="rps-facility-msg" class="text-sm text-rps-green" role="status" aria-live="polite"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
