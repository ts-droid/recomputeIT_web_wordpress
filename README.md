# Local WordPress Setup

## 1) Prerequisites
- Docker Desktop installed and running

## 2) Start locally
```bash
cd "/Users/thomassoderberg/Desktop/recompute it web"
cp .env.example .env
docker compose up -d
```

## 3) Open the site
- WordPress: http://localhost:8080
- phpMyAdmin: http://localhost:8081

Then run WordPress first-time install in browser.
WordPress files will live in `/Users/thomassoderberg/Desktop/recompute it web/Public HTML`.

## 4) Stop services
```bash
docker compose down
```

## 5) Reset all local data (optional)
```bash
docker compose down -v
```

This removes DB/WordPress volumes so you can reinstall from scratch.

## 6) Rebuild workflow from existing site
1. Run WordPress install in browser (`http://localhost:8080`).
2. Go to Appearance -> Themes and activate `Recompute Repair`.
3. Go to Settings -> Reading and set "Your homepage displays" to a static page.
4. Create/select a page called "Home" as homepage (theme uses `front-page.php`).
5. Verify that Tradera section loads from `Public HTML/data/tradera.json`.

## 7) Theme location and what is already built
- Theme path: `Public HTML/wp-content/themes/recompute-repair`
- Included: custom hero, services, about/stats, contact footer, Tradera listing grid
- Tradera source: `Public HTML/data/tradera.json` (same as your current static site)
- Language selector: dropdown with `Svenska, English, العربية, Español, Suomi, Kurdî, Türkçe, Polski, Українська`
- Language content is CMS-editable in:
  - `Appearance -> Recompute CMS`
  - Select language and edit all homepage text fields directly in admin.
  - Defaults are prefilled with base translations and can be edited anytime.

## 8) Add your two logos
1. Open Appearance -> Customize -> Recompute Branding
2. Upload light logo to `Header logo`
3. Upload dark/alternate logo to `Footer logo`
4. Upload `Tradera logo` to test different variants from Media Library

The theme will use these logo files in header and footer.

## 9) If you choose pure HTML instead
You can continue in pure HTML/JS and skip WordPress entirely.
Your existing static assets are still in `Public HTML` and can run as before.

## 10) Git + deploy workflow for theme
Initialize Git once:
```bash
sudo xcodebuild -license
cd "/Users/thomassoderberg/Desktop/recompute it web"
git init
```

Package theme zip:
```bash
cd "/Users/thomassoderberg/Desktop/recompute it web"
./scripts/package_theme.sh
```

Deploy zip to server over SSH/SCP:
```bash
cd "/Users/thomassoderberg/Desktop/recompute it web"
DEPLOY_HOST="your-host" \
DEPLOY_USER="your-user" \
DEPLOY_PATH="/home/your-user/domains/your-domain/public_html/wp-content/themes" \
./scripts/deploy_theme.sh
```

Then in WordPress admin:
`Appearance -> Themes -> Add New -> Upload Theme`

One-step release helper (package + open upload page):
```bash
cd "/Users/thomassoderberg/Desktop/recompute it web"
WP_ADMIN_URL="https://your-domain/wp-admin" ./scripts/release_theme.sh
```

If you only want to test without opening browser:
```bash
cd "/Users/thomassoderberg/Desktop/recompute it web"
WP_ADMIN_URL="https://your-domain/wp-admin" NO_OPEN=1 ./scripts/release_theme.sh
```

## 11) Automatic deploy from GitHub to Hostinger
This project includes:
`/.github/workflows/deploy-theme.yml`

It auto-deploys only the custom theme on push to `main`.

Required repository secrets:
- `HOSTINGER_HOST` (SSH host/IP)
- `HOSTINGER_PORT` (SSH port, e.g. `65002`)
- `HOSTINGER_USER` (SSH username)
- `HOSTINGER_SSH_KEY` (private key matching key added in Hostinger SSH Access)
- `HOSTINGER_THEME_PATH` (absolute server path to theme dir, e.g. `/home/u123456789/domains/example.com/public_html/wp-content/themes/recompute-repair`)

After secrets are set:
1. Push changes to `main`
2. Open `GitHub -> Actions -> Deploy WordPress Theme`
3. Verify job succeeds

## 12) Background auto-translation from Swedish CMS content
When you save language content in `Appearance -> Recompute CMS` with language `Svenska`,
the theme schedules a background translation job (WP-Cron) for other supported languages.

Requires OpenAI API key in `wp-config.php`:
```php
define('RECOMPUTE_OPENAI_API_KEY', 'your-openai-api-key');
// Optional:
define('RECOMPUTE_OPENAI_MODEL', 'gpt-4o-mini');
```

Notes:
- The job runs immediately when you save Swedish content, and is also scheduled in WP-Cron as fallback.
- Kurdish (`ku`) is included via OpenAI translation.

## 13) Automatic Tradera JSON refresh (Cron)
Theme now includes a scheduled sync job that updates:
`Public HTML/data/tradera.json`

### A) Add config in `wp-config.php`
```php
define('RECOMPUTE_TRADERA_SOURCE_URL', 'https://your-source.example/tradera.json');
define('RECOMPUTE_CRON_TOKEN', 'replace-with-long-random-token');
```

### B) Hostinger Cron Job (recommended)
In Hostinger -> Advanced -> Cron Jobs, add:
```bash
curl -sS -X POST "https://darkslateblue-wren-905068.hostingersite.com/wp-json/recompute/v1/tradera-sync?key=replace-with-long-random-token" >/dev/null 2>&1
```

Suggested interval:
- every 15 minutes

### C) Fallback
Theme also schedules a WP-Cron event (`recompute_tradera_sync_event`) every 15 minutes.
This runs on site traffic if external cron is not configured.
