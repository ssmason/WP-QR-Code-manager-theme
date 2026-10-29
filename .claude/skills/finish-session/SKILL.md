---
name: finish-session
description: End-of-session quality gate for the QR Code Manager theme — build assets, run PHPCS, sync patterns and smoke-test the marketing pages, then report. Use when a piece of theme work is finished, before handing back to the user or committing.
---

# Finish session — QR Code Manager theme

Run from the theme folder (`web/app/themes/qr-code-manager`). Run every step, then
report all results together.

1. **Build** — `npm run build`. Must end with "built in …".
2. **PHP standards** — `vendor/bin/phpcs`. Must report nothing (fix with
   `vendor/bin/phpcbf`, then by hand).
3. **Patterns** — if anything in `patterns/` or `resources/images/` changed:
   `docker exec qr-code-manager-php-1 vendor/bin/wp qr-code-manager sync-patterns --allow-root`.
4. **Autoload** — if classes were added: `composer dump-autoload -o`.
5. **Smoke** — `http://localhost:5080/` and `/register/` return 200 and contain
   `site-header` and `site-footer`; check them in a browser at phone (390px) and
   desktop widths if styles changed.
6. **Secrets** — search `app/`, `patterns/` and `resources/` for anything that looks
   like a real API key, token or password. Nothing secret belongs in the theme.

## Report

A short table: step, result (pass / fail with the first error), anything fixed. Do not
claim a step passed unless its output was seen in this session.
