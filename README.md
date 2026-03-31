# Unlimitedville - Laravel + Livewire 4 + Tailwind CSS

Converted from React prototype to Laravel stack for production development.

## Stack
- **Laravel** (PHP 8.5)
- **Livewire 4** (reactive components)
- **Tailwind CSS 4** (utility-first CSS with design tokens)
- **Vite 8** (asset bundling)
- **Alpine.js** (lightweight interactivity via Livewire)

## Setup

```bash
composer install
npm install --include=dev
cp .env.example .env
php artisan key:generate
npm run build
php artisan serve
```

## Structure

### Livewire Components (`app/Livewire/`)
- `HomePage` - Main landing page with hero, coverage check, quiz, reviews, FAQ
- `PlansPage` - Plans listing with comparison table, coverage checker
- `CartPage` - Order summary and guarantees
- `CheckoutPage` - Shipping and payment form
- `PlaceholderPage` - Generic placeholder for pages under construction

### Blade Components (`resources/views/components/`)
- `nav` - Frosted glass navigation with mobile menu (Alpine.js)
- `footer` - Site footer with links and legal
- `sticky-bar` - Scroll-triggered bottom bar (Alpine.js)
- `logo-full` - Full SVG wordmark
- `stars` - 4.5 star rating display
- `icons/*` - 20+ inline SVG icon components

### Design Tokens (`resources/css/app.css`)
- Brand green: `#55b685`
- Accessible green text: `#3d8c63`
- Full neutral scale (zinc-based)
- Custom radius tokens (sm/md/lg/full)
- Animation utilities (fade-up, scale-in, card-hover, etc.)

### Config
- `config/plans.php` - Plan data (prices, features, speeds)
- `config/services.php` - Google Maps API key

## Notes for Developer
- The `prototype/` directory contains the original React SPA for reference
- Flux UI Pro components can be added once the license key is configured
- Google Places autocomplete needs the API key in `.env` (`GOOGLE_MAPS_KEY`)
- Mobile-first design (390px frame on desktop via CSS)
- All images currently use `hero.jpg` placeholder -- replace with distinct images
