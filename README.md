# QR Code Manager — theme

The public marketing site for **QR Code Manager** (Home, Register, header and footer),
in the Satori Digital brand. Built on [Sage](https://roots.io/sage/) (Acorn, Blade,
Vite, Tailwind v4).

The theme only owns the marketing site. Client price-list pages, the registration form
block, the client portal, payments and email all belong to the **Satori Manifest**
plugin, which works with any theme. With the plugin deactivated, Home and Register keep
their look.

---

## Getting started

```bash
composer install
npm install
npm run build         # production assets → public/build/
npm run dev           # Vite dev server with hot reload
```

After changing a pattern in `patterns/` (or rebuilding images it uses), copy the
patterns into the site:

```bash
wp qr-code-manager sync-patterns
```

This updates the synced **Header** and **Footer** patterns and the **Home** and
**Register** pages (creating any that are missing, and setting Home as the front page).
It overwrites edits made to those four in wp-admin — the files are the source of truth.

---

## How it fits together

| Piece | Where |
|---|---|
| Home and Register | Pages using the **Landing** template (`resources/views/template-landing.blade.php`); content from `patterns/landing-home.php`, `patterns/landing-register.php` |
| Header and footer | Synced patterns "Header" and "Footer" (Appearance → Patterns), sources `patterns/header.php`, `patterns/footer.php`; rendered by `sections/header` and `sections/footer` via `App\View\Composers\SiteChrome` |
| Styles | `resources/css/landing.css` (all marketing styles, scoped to `.landing` and the header/footer), imported by `app.css`; `landing-editor.css` loads the same styles in the editor for Landing pages only |
| Logo | Site logo (Customizer → Site Identity) — the 悟り mark in the header. The footer uses `resources/images/brand/satori-logo-white.png` |
| Registration form | The plugin's block; the theme restyles it only through its `--sm-form-*` CSS variables (bottom of `landing.css`) |

**Access** — only administrators can edit or delete Landing pages
(`App\Landing\LandingAccess`).

**Brand** — ink navy and amber, Fraunces headings, Inter text, JetBrains Mono labels,
shared with satori-digital.com and 3dprinting.satori-digital.com. The tokens are at the
top of `landing.css` (`--landing-*`) and in `app.css` (`@theme`, for Tailwind utilities).

**Links** — external links (Satori Digital, Satori 3D Printing, QR code help) open in a
new window with `rel="noreferrer noopener"`, and get a small ↗ in the footer.

---

## Directory structure

```
functions.php               boots Composer, Acorn and app/setup.php, app/filters.php
app/
  setup.php                 theme supports, editor assets, theme.json
  filters.php               small WordPress filters
  Providers/                ThemeServiceProvider — registers the classes below and WP-CLI
  Landing/                  LandingAccess (admins only), LandingEditorStyles
  Patterns/                 SyncedPattern (find/render), PatternSync (files → site)
  Console/                  SyncPatternsCommand (wp qr-code-manager sync-patterns)
  View/Composers/           App, Post, Comments (Sage defaults), SiteChrome (header/footer)
patterns/                   header, footer, landing-home, landing-register
resources/
  css/                      app.css, landing.css, landing-editor.css, editor.css
  js/                       app.js, editor.js
  images/brand/             Satori logo variants and site icon
  images/landing/           hero illustration
  views/                    Blade templates (layouts, sections, partials, Landing template)
theme.json                  editor settings (built into public/build/assets/theme.json)
```

---

## Coding standards

The theme follows the **WordPress Coding Standards** (`phpcs.xml`), like the plugin,
with three framework allowances documented in the ruleset: PSR-4 class file names, the
`App\` namespace, and camelCase methods on Acorn view composers (they become Blade
variables).

```bash
composer lint        # vendor/bin/phpcs
composer lint:fix    # vendor/bin/phpcbf
```

Blade templates use Tailwind utilities and `__()` for strings.
