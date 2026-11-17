/* =====================================================================
   RPS Home — interactions
   ===================================================================== */
(function () {
    "use strict";

    const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    /* ---- Nav: shrink/glass on scroll + scroll-to-top button ---- */
    const nav = document.getElementById("rps-nav");
    const topBtn = document.getElementById("rps-top");

    // Nav stays transparent over the hero, turns solid once it's scrolled past.
    let navSolidAt = 60;
    function computeNavThreshold() {
        const hero = document.getElementById("top");
        navSolidAt = hero ? Math.max(60, hero.offsetHeight - 80) : 60;
    }
    computeNavThreshold();
    window.addEventListener("resize", computeNavThreshold);

    function onScroll() {
        const y = window.scrollY;
        const hero = document.getElementById("top");
        if (nav) {
            if (hero) {
                nav.classList.toggle("scrolled", y > navSolidAt);
            } else {
                nav.classList.add("scrolled");
            }
        }
        if (topBtn) topBtn.classList.toggle("show", y > 400);
    }
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();

    /* ---- Testimonials: show full comments in an accessible dialog ---- */
    const testimonialDialog = document.getElementById("testimonial-dialog");
    const testimonialSection = document.getElementById("testimonials");
    let testimonialDialogOpen = false;
    if (testimonialDialog instanceof HTMLDialogElement && testimonialSection) {
        const testimonialName = testimonialDialog.querySelector(".testimonial-dialog__name");
        const testimonialRole = testimonialDialog.querySelector(".testimonial-dialog__role");
        const testimonialText = testimonialDialog.querySelector(".testimonial-dialog__text");
        const testimonialImage = testimonialDialog.querySelector(".testimonial-dialog__image");
        const testimonialInitials = testimonialDialog.querySelector(".testimonial-dialog__initials");
        const closeTestimonialDialog = testimonialDialog.querySelector(".testimonial-dialog__close");
        let testimonialScrollY = 0;
        let testimonialBodyStyles = null;

        function updateTestimonialReadMore() {
            document.querySelectorAll(".tcard__text").forEach((text) => {
                const readMore = text.parentElement.querySelector(".tcard__read-more");
                if (readMore) readMore.hidden = text.scrollHeight <= text.clientHeight + 1;
            });
        }

        updateTestimonialReadMore();
        window.addEventListener("resize", updateTestimonialReadMore);

        document.addEventListener("click", (event) => {
            const button = event.target instanceof Element ? event.target.closest(".tcard__read-more") : null;
            if (!button || !testimonialSection.contains(button)) return;
            if (!testimonialName || !testimonialRole || !testimonialText || !testimonialImage || !testimonialInitials) return;
            testimonialName.textContent = button.dataset.testimonialName || "";
            testimonialRole.textContent = button.dataset.testimonialRole || "";
            testimonialText.textContent = button.dataset.testimonialText || "";
            testimonialImage.hidden = true;
            testimonialInitials.textContent = button.dataset.testimonialInitials || "";
            testimonialInitials.hidden = false;
            const image = button.dataset.testimonialImage;
            if (image) {
                testimonialImage.src = image;
                testimonialImage.alt = button.dataset.testimonialName || "Testimonial author";
                testimonialImage.hidden = false;
                testimonialInitials.hidden = true;
            } else {
                testimonialImage.removeAttribute("src");
                testimonialImage.alt = "";
            }
            testimonialScrollY = window.scrollY;
            testimonialBodyStyles = {
                position: document.body.style.position,
                top: document.body.style.top,
                left: document.body.style.left,
                right: document.body.style.right,
                width: document.body.style.width,
            };
            document.body.style.position = "fixed";
            document.body.style.top = `-${testimonialScrollY}px`;
            document.body.style.left = "0";
            document.body.style.right = "0";
            document.body.style.width = "100%";
            testimonialDialogOpen = true;
            testimonialDialog.showModal();
        });

        testimonialImage.addEventListener("error", () => {
            testimonialImage.hidden = true;
            testimonialInitials.hidden = false;
        });

        if (closeTestimonialDialog) {
            closeTestimonialDialog.addEventListener("click", () => testimonialDialog.close());
        }
        testimonialDialog.addEventListener("close", () => {
            testimonialDialogOpen = false;
            if (testimonialBodyStyles) {
                document.body.style.position = testimonialBodyStyles.position;
                document.body.style.top = testimonialBodyStyles.top;
                document.body.style.left = testimonialBodyStyles.left;
                document.body.style.right = testimonialBodyStyles.right;
                document.body.style.width = testimonialBodyStyles.width;
                testimonialBodyStyles = null;
            }
            const scrollBehavior = document.documentElement.style.scrollBehavior;
            document.documentElement.style.scrollBehavior = "auto";
            window.scrollTo({ top: testimonialScrollY, left: 0, behavior: "instant" });
            if (lenis) {
                lenis.scrollTo(testimonialScrollY, { immediate: true, force: true });
            }
            requestAnimationFrame(() => {
                document.documentElement.style.scrollBehavior = scrollBehavior;
            });
        });
        testimonialDialog.addEventListener("click", (event) => {
            if (event.target === testimonialDialog) testimonialDialog.close();
        });
    }

    /* ---- Lenis: momentum smooth scrolling (skipped for reduced-motion) ---- */
    let lenis = null;
    if (typeof Lenis !== "undefined" && !prefersReducedMotion) {
        lenis = new Lenis({
            duration: 1.15,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            smoothWheel: true,
        });
        lenis.on("scroll", onScroll);
        (function raf(time) {
            if (!testimonialDialogOpen) lenis.raf(time);
            requestAnimationFrame(raf);
        })();

        // Route in-page anchor links through Lenis (offset clears the fixed nav)
        document.querySelectorAll('a[href^="#"]').forEach((a) => {
            a.addEventListener("click", (e) => {
                const href = a.getAttribute("href");
                if (href && href.length > 1) {
                    const target = document.querySelector(href);
                    if (target) { e.preventDefault(); lenis.scrollTo(target, { offset: -68, duration: 1.2 }); }
                }
            });
        });
    }

    function scrollToTop() {
        if (lenis) lenis.scrollTo(0, { duration: 1.1 });
        else window.scrollTo({ top: 0, behavior: "smooth" });
    }
    if (topBtn) topBtn.addEventListener("click", scrollToTop);

    /* ---- Mobile menu ---- */
    const burger = document.getElementById("rps-burger");
    const mobile = document.getElementById("rps-mobile");
    if (burger && mobile) {
        burger.addEventListener("click", () => {
            mobile.classList.toggle("hidden");
            document.body.classList.toggle("overflow-hidden");
        });
        mobile.querySelectorAll("a").forEach((a) =>
            a.addEventListener("click", () => {
                mobile.classList.add("hidden");
                document.body.classList.remove("overflow-hidden");
            })
        );
    }

    /* ---- Tabbed stages ("Nurturing Young Minds") ---- */
    document.querySelectorAll("[data-tabs]").forEach((group) => {
        const tabs = group.querySelectorAll("[data-tab]");
        const panels = group.querySelectorAll("[data-panel]");
        tabs.forEach((tab) => {
            tab.addEventListener("click", () => {
                const key = tab.getAttribute("data-tab");
                tabs.forEach((t) => t.classList.remove("tab-active"));
                tab.classList.add("tab-active");
                // toggle .active → CSS fades/slides the incoming panel in
                panels.forEach((p) => p.classList.toggle("active", p.getAttribute("data-panel") === key));
            });
        });
    });

    /* ---- Animated counters ---- */
    function animateCount(el) {
        const target = parseFloat(el.getAttribute("data-count"));
        const suffix = el.getAttribute("data-suffix") || "";
        const dur = 1400;
        const start = performance.now();
        function step(now) {
            const p = Math.min((now - start) / dur, 1);
            const eased = 1 - Math.pow(1 - p, 3);
            el.textContent = Math.round(target * eased) + suffix;
            if (p < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }

    /* ---- Reveal-on-scroll + counters via IntersectionObserver ---- */
    const io = new IntersectionObserver(
        (entries) => {
            entries.forEach((e) => {
                if (!e.isIntersecting) return;
                e.target.classList.add("in");
                if (e.target.hasAttribute("data-count")) animateCount(e.target);
                io.unobserve(e.target);
            });
        },
        { threshold: 0.2 }
    );
    document.querySelectorAll(".reveal-up, [data-count]").forEach((el) => io.observe(el));

    /* ---- Marquee: duplicate track for seamless loop ---- */
    document.querySelectorAll(".marquee").forEach((m) => {
        const track = m.querySelector(".marquee__track");
        if (track) m.appendChild(track.cloneNode(true));
    });

    /* ---- Admission availability checker (front-end demo) ---- */
    const checker = document.getElementById("rps-checker");
    if (checker) {
        checker.addEventListener("submit", (ev) => {
            ev.preventDefault();
            const out = document.getElementById("rps-checker-result");
            const grade = checker.querySelector("[name=grade]").value;
            if (!grade) {
                out.textContent = "Please select a class to check availability.";
                out.className = "mt-4 text-sm text-rps-amber";
                return;
            }
            out.textContent = "🎉 Great news — seats are available for " + grade + "! Our team will reach out shortly.";
            out.className = "mt-4 text-sm text-rps-green font-medium";
        });
    }

    /* ---- YouTube facade: swap thumbnail for iframe on click ---- */
    document.querySelectorAll("[data-yt]").forEach((el) => {
        el.addEventListener("click", () => {
            const id = el.getAttribute("data-yt");
            const iframe = document.createElement("iframe");
            iframe.src = "https://www.youtube.com/embed/" + id + "?autoplay=1&rel=0";
            iframe.title = "YouTube video player";
            iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
            iframe.allowFullscreen = true;
            iframe.className = "absolute inset-0 h-full w-full";
            el.innerHTML = "";
            el.appendChild(iframe);
        });
    });

    /* ---- WhatsApp widget: pop greeting messages one-by-one ---- */
    (function () {
        const launcher = document.getElementById("wa-launcher");
        const popup = document.getElementById("wa-popup");
        const closeBtn = document.getElementById("wa-close");
        const typing = document.getElementById("wa-typing");
        if (!launcher || !popup) return;
        const msgs = popup.querySelectorAll(".wa-msg");
        let timers = [];
        function clearTimers() { timers.forEach(clearTimeout); timers = []; }
        function reset() {
            clearTimers();
            if (typing) typing.classList.remove("show");
            msgs.forEach((m) => m.classList.remove("show"));
        }
        function play() {
            reset();
            const seq = [
                [300, () => typing && typing.classList.add("show")],
                [1100, () => { if (typing) typing.classList.remove("show"); if (msgs[0]) msgs[0].classList.add("show"); }],
                [1700, () => typing && typing.classList.add("show")],
                [2500, () => { if (typing) typing.classList.remove("show"); if (msgs[1]) msgs[1].classList.add("show"); }],
            ];
            seq.forEach(([t, fn]) => timers.push(setTimeout(fn, t)));
        }
        function openChat() { popup.classList.remove("wa-hidden"); play(); }
        function closeChat() { popup.classList.add("wa-hidden"); reset(); }
        launcher.addEventListener("click", () => popup.classList.contains("wa-hidden") ? openChat() : closeChat());
        if (closeBtn) closeBtn.addEventListener("click", closeChat);
    })();

    /* ---- Swiper initialisation (runs after swiper-bundle loads) ---- */
    let swiperTries = 0;
    function initSwipers() {
        // Pages that don't load Swiper (e.g. About / Admission / Curriculum) must
        // not poll forever — give up after ~3s instead of an infinite timer loop.
        if (typeof Swiper === "undefined") {
            if (++swiperTries < 25) setTimeout(initSwipers, 120);
            return;
        }

        // Top hero: full-screen banner images sliding one-by-one.
        if (document.querySelector(".hero-slider")) {
            new Swiper(".hero-slider", {
                loop: true,
                speed: 1000,
                grabCursor: true,
                autoplay: { delay: 4500, disableOnInteraction: false },
                pagination: { el: ".hero-dots", clickable: true },
            });
        }

        // Closing hero (before footer): fading background slider.
        if (document.querySelector(".hero-swiper")) {
            new Swiper(".hero-swiper", {
                loop: true,
                effect: "fade",
                fadeEffect: { crossFade: true },
                speed: 1200,
                autoplay: { delay: 4500, disableOnInteraction: false },
                pagination: { el: ".hero-swiper .swiper-pagination", clickable: true },
            });
        }

        // About section: synced content slider + stats slider with continuous leftward loop
        if (document.querySelector(".about-slider") && document.querySelector(".about-stats-swiper")) {
            const delay = 4500;
            const progress = document.querySelector(".about-progress");

            function resetProgress() {
                if (!progress) return;
                progress.style.transition = "none";
                progress.style.width = "0%";
                setTimeout(() => {
                    progress.style.transition = "width " + delay + "ms linear";
                    progress.style.width = "100%";
                }, 40);
            }

            const aboutStatsSwiper = new Swiper(".about-stats-swiper", {
                loop: true,
                speed: 700,
                allowTouchMove: false,
            });

            new Swiper(".about-slider", {
                loop: true,
                speed: 700,
                autoHeight: true,
                autoplay: { delay: delay, disableOnInteraction: false },
                pagination: { el: ".about-slider .about-pagination", clickable: true },
                on: {
                    init: resetProgress,
                    slideChangeTransitionStart: function () {
                        resetProgress();
                        // Advance stats by one on every content change → same cadence
                        // (synced), cycles all 4 stats, always sliding leftward (loop).
                        if (aboutStatsSwiper && typeof aboutStatsSwiper.slideNext === "function") {
                            aboutStatsSwiper.slideNext();
                        }
                    }
                }
            });
        }

        // Video carousels (Fantabulous / Testimonials): loop + step autoplay so
        // they visibly move on their own, while thumbnails stay click-to-play.
        document.querySelectorAll(".video-swiper").forEach((node) => {
            new Swiper(node, {
                slidesPerView: 1.1,
                spaceBetween: 16,
                grabCursor: true,
                loop: true,
                speed: 800,
                autoplay: { delay: 3000, disableOnInteraction: false, pauseOnMouseEnter: true },
                navigation: { nextEl: node.parentElement.querySelector(".swiper-button-next"), prevEl: node.parentElement.querySelector(".swiper-button-prev") },
                breakpoints: { 640: { slidesPerView: 2.1 }, 1024: { slidesPerView: 3 } },
            });
        });

        // Gallery: continuous, marquee-style smooth flow (linear timing via CSS).
        document.querySelectorAll(".gallery-swiper").forEach((node) => {
            new Swiper(node, {
                loop: true,
                slidesPerView: 1.15,
                spaceBetween: 18,
                speed: 4200,
                allowTouchMove: true,
                freeMode: { enabled: true, momentum: false },
                autoplay: { delay: 0, disableOnInteraction: false, pauseOnMouseEnter: true },
                breakpoints: { 640: { slidesPerView: 1.8 }, 1024: { slidesPerView: 2.6 } },
            });
        });

        // Testimonials: continuous, never-stopping marquee of parent comments.
        // Card widths come from CSS (slidesPerView 'auto'); linear timing via CSS.
        document.querySelectorAll(".testimonial-swiper").forEach((node) => {
            new Swiper(node, {
                loop: true,
                slidesPerView: "auto",
                spaceBetween: 20,
                speed: 6000,
                allowTouchMove: true,
                grabCursor: true,
                freeMode: { enabled: true, momentum: false },
                autoplay: { delay: 0, disableOnInteraction: false, pauseOnMouseEnter: true },
            });
        });
    }
    initSwipers();
})();
