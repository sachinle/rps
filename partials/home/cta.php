<?php
    // CTA (above footer) — "Book a Campus Visit" form on the LEFT,
    // "Empower Minds, Shape Futures!" content on the RIGHT.
?>
<section id="admission" class="relative py-16">
    <div class="rps-container">
        <div class="relative overflow-hidden rounded-3xl border border-white/10 bg-gradient-to-r from-rps-navy via-rps-blue/60 to-rps-ink p-6 md:p-10">
            <!-- decorative dots + glow -->
            <div class="cta-dots pointer-events-none absolute inset-0 opacity-30"></div>
            <div class="pointer-events-none absolute -right-16 -top-16 h-56 w-56 rounded-full bg-rps-amber/25 blur-3xl"></div>

            <div class="relative grid gap-8 lg:grid-cols-2 lg:items-center lg:gap-12">

                <!-- LEFT: enquiry form -->
                <div class="rounded-2xl border border-white/15 bg-white/[0.06] p-6 backdrop-blur md:p-7 reveal-up lg:order-1">
                    <h3 class="text-xl font-semibold text-white">Book a Campus Visit</h3>
                    <p class="mt-1 text-sm text-slate-300">Fill in your details and our team will call you back.</p>
                    <form class="mt-5 space-y-3" onsubmit="event.preventDefault(); this.reset(); document.getElementById('rps-cta-msg').textContent='Thank you! We\'ll be in touch shortly.';">
                        <input type="text"  name="name"   placeholder="Parent / Student Name" required class="rps-input">
                        <input type="email" name="email"  placeholder="Email Address" required class="rps-input">
                        <input type="tel"   name="phone"  placeholder="Mobile Number" required class="rps-input">
                        <textarea name="message" rows="2" placeholder="Your message (optional)" class="rps-input resize-none"></textarea>
                        <button type="submit" class="inline-flex w-full items-center justify-center gap-2 rounded-xl btn-primary px-6 py-3.5 font-semibold text-white transition hover:scale-[1.02]">
                            Apply Now
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </button>
                        <p id="rps-cta-msg" class="text-sm text-rps-green" role="status" aria-live="polite"></p>
                    </form>
                </div>

                <!-- RIGHT: Empower Minds content -->
                <div class="text-center lg:order-2 lg:text-left">
                    <h2 class="sec-title text-3xl md:text-5xl text-white reveal-up">Empower Minds, <span class="brand-text">Shape Futures!</span></h2>
                    <p class="mt-4 text-slate-300 reveal-up">Give your child the joy of learning at RPS.</p>
                    
                    <div class="mt-7 flex flex-wrap items-center justify-center gap-3 reveal-up lg:justify-start">
                        <a href="#admission" class="inline-flex w-full items-center justify-center gap-2 rounded-2xl btn-primary px-4 py-4 text-center font-semibold text-white shadow-lg shadow-rps-amber/40 transition hover:scale-105 sm:w-auto sm:px-7 whitespace-nowrap">
                            Admissions Open · AY 2026–27
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                        <a href="tel:+918144260260" class="inline-flex items-center gap-2 rounded-2xl border border-white/20 bg-white/10 px-7 py-4 font-semibold text-white backdrop-blur transition hover:bg-white/15">
                            Call Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
