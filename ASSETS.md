# RPS Home — Asset Drop-in Guide

The home page is built to look complete **without any images** (every image slot
has a coded fallback). Drop real files at the exact paths below and they appear
automatically — no code changes needed. Keep the same filenames.

## Images

| Path | Used in | Suggested size | Notes |
|------|---------|----------------|-------|
| `assets/image/logo.png` | `nav.php`, `footer.php` | ~360×110, transparent | Wide RPS logo. (A coded 3-dot + "rps" mark is shown until you add it.) |
| `assets/image/hero/slide-1.jpg` … `slide-4.jpg` | `hero.php` | 1920×1080 | Full-bleed campus / classroom photos for the background slider. |
| `assets/image/hero/qr.png` | `hero.php` | square | Admission QR code. |
| `assets/image/about-campus.jpg` | `about.php` | 4:3 | School building / campus hero shot. |
| `assets/image/stages/foundation-1..3.jpg` | `stages.php` (Nursery–Grade 2 tab) | mixed | 1 tall + 2 small collage. |
| `assets/image/stages/primary-1..3.jpg` | `stages.php` (Grade 3 tab) | mixed | |
| `assets/image/stages/middle-1..3.jpg` | `stages.php` (Grade 4–5 tab) | mixed | |
| `assets/image/stages/secondary-1..3.jpg` | `stages.php` (Grade 6–12 tab) | mixed | |
| `assets/image/ai-robot.png` | `ai-robotics.php` | square, transparent PNG | Robot / AI mascot. |
| `assets/image/social/01.jpg` … `08.jpg` | `social-media.php` | square (1:1) | Instagram post thumbnails. |
| `assets/image/gallery/01.jpg` … `08.jpg` | `gallery.php` | 4:3 | Gallery carousel photos. |

## Videos (YouTube — no files, just IDs)

Set the YouTube video **id** inline in these partials:

- `admission-checker.php` → `$ytId` (the "Unlock Your Child's Full Potential" video)
- `fantabulous.php` → `$videos[]['id']` (5 episodes)
- `testimonials.php` → `$videos[]['id']` (4 parent testimonials)

Thumbnails auto-load from `https://i.ytimg.com/vi/<id>/hqdefault.jpg`; clicking a
tile swaps in the real YouTube iframe (privacy-friendly click-to-load).

## Text/contact to review before launch

- Phone `+91 81442 60260`, email `info@rps.edu.in`, and the campus **address** in
  `footer.php` — replace with the verified details.
- Legacy stat numbers in `about.php` (`20+ / 5+ / 10+ / 5+`) and their labels.
- Social profile URLs in `social-media.php` and `footer.php`.

## Rebuilding the CSS (only if you change Tailwind classes)

```
npx tailwindcss@3 -c tailwind.config.js -i ./assets/css/tailwind-input.css -o ./assets/css/tailwind.css --minify
```

`assets/css/style.css` holds the theme, ambient background and all custom
animations (marquee, hexagons, floating cards, rising-line, etc.) — edit freely,
no build step required.
