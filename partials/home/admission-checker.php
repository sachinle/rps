<?php
    // ADMISSION CHECKER — front-end availability form + intro video.
    // Set $ytId to the real YouTube video id when available.
    $ytId = 'YgCK2DJ_HVE'; // TODO: replace with RPS admissions video id
    $grades = ['Nursery', 'LKG', 'UKG', 'Grade 1', 'Grade 2', 'Grade 3', 'Grade 4', 'Grade 5', 'Grade 6', 'Grade 7', 'Grade 8', 'Grade 9', 'Grade 10', 'Grade 11', 'Grade 12'];
?>
<section id="admission" class="relative py-24 sec-light">
    <div class="rps-container">
        <div class="flex flex-col gap-8 lg:grid lg:grid-cols-12 lg:items-stretch">

            <!-- LEFT: checker form -->
            <div class="col-span-12 lg:col-span-6">
                <div class="glass reveal-up h-full p-7 md:p-9">
                    <div class="eyebrow"><span class="dot"></span> Instant Admission Checker</div>
                    <h2 class="sec-title mt-5 text-2xl md:text-3xl">
                        Check <span class="brand-text">Seat Availability</span> in Seconds
                    </h2>
                    <p class="mt-3 text-sm text-slate-400">
                        Tell us the class you're looking for and we'll confirm availability right away.
                    </p>

                    <form id="rps-checker" class="mt-7 space-y-4">
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label class="mb-1.5 block text-xs font-medium text-slate-400">Academic Year</label>
                                <select name="year" class="rps-input">
                                    <option value="2026-27">2026 – 2027</option>
                                    <option value="2027-28">2027 – 2028</option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-1.5 block text-xs font-medium text-slate-400">Select Class / Grade</label>
                                <select name="grade" class="rps-input">
                                    <option value="">Choose a grade…</option>
                                    <?php foreach ($grades as $g): ?>
                                        <option value="<?= $g ?>"><?= $g ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="mb-1.5 block text-xs font-medium text-slate-400">Mobile Number</label>
                            <input type="tel" name="mobile" placeholder="+91 " pattern="[0-9+ ]{8,15}" class="rps-input">
                        </div>
                        <button type="submit" class="group inline-flex w-full items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-rps-pink to-rps-pinkdark px-6 py-3.5 font-semibold text-white transition hover:scale-[1.02]">
                            Check Availability
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="transition-transform group-hover:translate-x-1"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </button>
                        <p id="rps-checker-result" class="mt-2 text-sm text-slate-400" role="status" aria-live="polite"></p>
                    </form>
                </div>
            </div>

            <!-- RIGHT: intro video -->
            <div class="col-span-12 lg:col-span-6">
                <div class="glass reveal-up h-full p-4 md:p-5">
                    <div class="mb-4 flex items-center justify-between px-2">
                        <p class="text-sm font-semibold text-white">Unlock Your Child's Full Potential!</p>
                        <span class="rounded-full bg-rps-pink/20 px-3 py-1 text-xs font-semibold text-rps-pink">Admissions Open</span>
                    </div>
                    <!-- YouTube facade (click to load the iframe) -->
                    <div class="video-thumb group relative aspect-video cursor-pointer overflow-hidden rounded-2xl bg-black" data-yt="<?= $ytId ?>">
                        <img src="https://i.ytimg.com/vi/<?= $ytId ?>/hqdefault.jpg" alt="RPS admissions video" loading="lazy" class="h-full w-full object-cover opacity-80 transition group-hover:opacity-100"
                             onerror="this.style.display='none'">
                        <span class="absolute inset-0 grid place-items-center">
                            <span class="grid h-16 w-16 place-items-center rounded-full bg-rps-pink/90 text-white shadow-lg shadow-rps-pink/40 transition group-hover:scale-110">
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                            </span>
                        </span>
                    </div>
                    <p class="mt-4 px-2 text-sm text-slate-400">
                        Take a peek into life at RPS — our happy classrooms, vibrant campus and the joy of learning that awaits your child.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
