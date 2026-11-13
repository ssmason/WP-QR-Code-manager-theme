# QR Code Manager - theme

The public marketing site for **Qrable** (Home, Register, Contact, header and footer),
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

This updates the synced **Header** and **Footer** patterns and the **Home**, **Register**
and **Contact** pages (creating any that are missing, and setting Home as the front page).
It overwrites edits made to those in wp-admin - the files are the source of truth. It does
not touch their Yoast SEO titles and descriptions (post meta, set in wp-admin per site).

---

## How it fits together

| Piece | Where |
|---|---|
| Home, Register and Contact | Pages using the **Landing** template (`resources/views/template-landing.blade.php`); content from `patterns/landing-home.php`, `patterns/landing-register.php`, `patterns/landing-contact.php` |
| Header and footer | Synced patterns "Header" and "Footer" (Appearance → Patterns), sources `patterns/header.php`, `patterns/footer.php`; rendered by `sections/header` and `sections/footer` via `App\View\Composers\SiteChrome` |
| Brand | `resources/css/brand.css` - the one place for colours, fonts (Google Fonts import) and finish (radius, shadows) |
| Styles | `resources/css/landing.css` (layout and all marketing styles, scoped to `.landing` and the header/footer; uses only brand.css values), imported by `app.css`; `landing-editor.css` loads the same styles in the editor for Landing pages only |
| Logo | Site logo (Customizer → Site Identity) - the 悟り mark in the header. The footer uses `resources/images/brand/satori-logo-white.png` |
| Registration and contact forms | The plugin's blocks; the theme restyles them only through their `--sm-form-*` CSS variables (bottom of `landing.css`) |
| Hero artwork | `resources/images/landing/hero.svg` (drawn signs with real QR codes, phone, NFC waves; fixed colours) and `qr-pattern.svg` (QR texture, used as a CSS mask) |
| SEO | Yoast SEO titles, descriptions and share text for Home, Register and Contact are set in wp-admin (database, per site - not synced from files) |

**Home page, top to bottom** (`patterns/landing-home.php`):

1. Hero - "New · Update prices by just asking your AI" badge (links to `#ai-assistant`), headline, buttons, hero artwork.
2. How it works (`#how-it-works`) - three steps; step 3 mentions updating by AI.
3. AI assistant (`#ai-assistant`) - text, three points and an example chat (`.landing-chat`); "Included with Fully managed" (keep in step with the plugin's `config/ai-assistant.yaml`).
4. Everything you need - feature band.
5. Designs (`#designs`) - design cards and the ready-made layouts card.
6. FAQ (`#faq`) - includes "Can I update my prices with AI?".
7. Call to action.

**Access** - only administrators can edit or delete Landing pages
(`App\Landing\LandingAccess`).

**Brand** - navy and blue with a red accent (`#c8102e`, the red of the hero artwork; on
trial - the previous mint and other palettes are kept as comments in `brand.css` to switch
back), Plus Jakarta Sans headings, Inter text, JetBrains Mono labels. Every value lives in `resources/css/brand.css` (`--brand-*`);
`landing.css` maps them to `--landing-*` names and `app.css` to Tailwind (`@theme`).
Change the brand there only. Not covered (they cannot read CSS): `hero.svg` colours,
the plugin's portal/email colours (Manifest → Settings) and the client page designs.

**Links** - internal links in the patterns are relative (`/register/`), so syncing
locally never writes `localhost` into the database.

**Links** - external links (Satori Digital, Satori 3D Printing, QR code help) open in a
new window with `rel="noreferrer noopener"`, and get a small ↗ in the footer.

---

## Directory structure

```
functions.php               boots Composer, Acorn and app/setup.php, app/filters.php
app/
  setup.php                 theme supports, editor assets, theme.json
  filters.php               small WordPress filters
  Providers/                ThemeServiceProvider - registers the classes below and WP-CLI
  Landing/                  LandingAccess (admins only), LandingEditorStyles
  Patterns/                 SyncedPattern (find/render), PatternSync (files → site)
  Console/                  SyncPatternsCommand (wp qr-code-manager sync-patterns)
  View/Composers/           App, Post, Comments (Sage defaults), SiteChrome (header/footer)
patterns/                   header, footer, landing-home, landing-register, landing-contact
resources/
  css/                      brand.css, app.css, landing.css, landing-editor.css, editor.css
  js/                       app.js, editor.js
  images/brand/             Satori logo variants and site icon
  images/landing/           hero illustration, QR texture, design previews
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

Before finishing a piece of work run the `finish-session` skill (`.claude/skills/`): build,
PHPCS, pattern sync, autoload, smoke test of `/` and `/register/`, secrets check.

## Deploying

Live (qrable.net) is IONOS shared hosting - see `DEPLOY.md` in the project root. Upload
`public/build/` after `npm run build` (it is not in git). Pattern changes live in the
database, so after uploading the files also update the live pages: run `sync-patterns` there
if WP-CLI is available, otherwise copy the page content across (block markup or a database
export).
