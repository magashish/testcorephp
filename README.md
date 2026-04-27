# Timely Response Couriers – TRC Homepage Sections

## Time Estimate
Roughly **2–3 hours** to plan, build, and refine cleanly.

---

## Project Structure

```
testcorephp/
├── index.php               # Entry point – includes all sections
├── sections/
│   ├── nav.php             # Navbar
│   ├── hero.php            # Hero section
│   └── services.php        # Services section (PHP array loop)
├── assets/
│   ├── css/
│   │   └── style.css       # All custom styles (namespaced .trc-*)
│   └── images/
│       ├── logo.png        # Place your logo here
│       └── hero-bg.jpg     # Place your hero background here (optional)
└── README.md
```

---

## How to Run Locally

### Option A – PHP built-in server (recommended, no setup required)

```bash
cd testcorephp
php -S localhost:8000
```

Then open **http://localhost:8000** in your browser.

### Option B – Any local PHP server (XAMPP, MAMP, Laragon, etc.)

Place the `testcorephp/` folder inside your server's web root (e.g. `htdocs/` or `www/`), then browse to `http://localhost/testcorephp/`.

---

## Adding Assets

### Logo
Drop your logo file at `assets/images/logo.png`.  
The navbar `<img>` tag references this path. If the file is missing, the
navbar automatically falls back to a styled text treatment (`TRC`).

### Hero Background Image
1. Place your image at `assets/images/hero-bg.jpg`.
2. Open `assets/css/style.css` and find the `.trc-hero` block.
3. Uncomment the three `background-image / background-size / background-position` lines and remove the gradient fallback.

---

## Key Decisions

| Decision | Rationale |
|---|---|
| Plain PHP `include` | Keeps sections modular with zero framework overhead – matches the brief exactly. |
| PHP arrays for services | Makes it easy to add/edit/remove cards without touching HTML. |
| Bootstrap 5 only (CDN) | No build step needed; delivered via CDN so reviewers can open the file with a single `php -S` command. |
| Bootstrap Icons (CDN) | Lightweight icon set that ships with Bootstrap's design language – no extra download. |
| CSS custom properties | Centralises the colour palette so a rebrand touches one block, not every selector. |
| Gradient hero fallback | Site renders correctly even without a real photo; swap in the image via two CSS lines. |
| `onerror` logo fallback | Navbar never shows a broken image – degrades gracefully to a text mark. |
| No animations | Per spec – clean layout focus, no distracting motion. |

---

## Browser Support
All modern browsers (Chrome, Firefox, Safari, Edge). Bootstrap 5 drops IE11 support by design.
