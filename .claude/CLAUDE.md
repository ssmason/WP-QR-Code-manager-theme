# QR Code Manager theme - notes for Claude

Sage theme for the public marketing site only (Home, Register, Contact, header, footer). Client
pages, forms, portal, payments and email belong to the Satori Manifest plugin.
Architecture: `README.md`.

## Rules
- WordPress Coding Standards (`phpcs.xml`), with the documented Sage allowances.
- Classes in `app/` (PSR-4, `App\`), one responsibility each, registered from
  `ThemeServiceProvider`. Keep `app/setup.php` / `app/filters.php` to small hooks.
- Brand (colours, fonts, finish) lives only in `resources/css/brand.css`; marketing layout
  and styles in `resources/css/landing.css`, which must not hard-code brand values.
- Pattern links must be relative (`/register/`, `wp_make_link_relative()`), never `home_url()`.
- Blade templates: Tailwind utilities, no inline styles, strings via `__()`.
- Patterns in `patterns/` are the source of truth; after changing one run
  `wp qr-code-manager sync-patterns` (inside the PHP container).
- External links open in a new window with `rel="noreferrer noopener"`.
- No secrets in code - ever. Never read `.env`.

## Working rhythm
Don't lint after every edit. At the end of a piece of work run the `finish-session`
skill and report the results.
