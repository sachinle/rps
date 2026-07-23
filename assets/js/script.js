/* =====================================================================
   RPS Home — interactions
   ===================================================================== */
(function () {
    "use strict";

    const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    /* ---- Nav: shrink/glass on scroll + scroll-to-top button ---- */
    const nav = document.getElementById("rps-nav");
    const topBtn = document.getElementById("rps-top");
    function onScroll() {
        const y = window.scrollY;
        if (nav) nav.classList.toggle("scrolled", y > 40);
        if (topBtn) topBtn.classList.toggle("show", y > 400);
    }
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();

    /* ---- Lenis: momentum smooth scrolling (skipped for reduced-motion) ---- */
    let lenis = null;
    if (typeof Lenis !== "undefined" && !prefersReducedMotion) {
        lenis = new Lenis({
            duration: 1.15,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            smoothWheel: true,
        });
        lenis.on("scroll", onScroll);
        (function raf(time) { lenis.raf(time); requestAnimationFrame(raf); })();

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
    function initSwipers() {
        if (typeof Swiper === "undefined") return setTimeout(initSwipers, 120);

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
                slidesPerView: 1.3,
                spaceBetween: 14,
                speed: 4000,
                allowTouchMove: true,
                freeMode: { enabled: true, momentum: false },
                autoplay: { delay: 0, disableOnInteraction: false, pauseOnMouseEnter: true },
                breakpoints: { 640: { slidesPerView: 2.4 }, 1024: { slidesPerView: 3.4 } },
            });
        });
    }
    initSwipers();
})();
