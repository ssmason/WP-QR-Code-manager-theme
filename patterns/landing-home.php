<?php
/**
 * Title: Landing - Home
 * Slug: qr-code-manager/landing-home
 * Categories: featured
 * Description: Marketing home page: hero, how it works, features, designs, FAQ and call to action. Use with the Landing page template.
 * Block Types: core/post-content
 * Inserter: true
 *
 * @package QrCodeManager
 */

?>
<!-- wp:group {"align":"full","className":"landing-hero"} -->
<div class="wp-block-group alignfull landing-hero"><!-- wp:columns {"verticalAlignment":"center","className":"landing-hero__inner"} -->
<div class="wp-block-columns are-vertically-aligned-center landing-hero__inner"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"landing-badge"} -->
<p class="landing-badge"><a href="#ai-assistant"><strong>New</strong> Update prices by just asking your AI <span aria-hidden="true">→</span></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"landing-eyebrow"} -->
<p class="landing-eyebrow">QR &amp; NFC price lists and menus</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Your price&nbsp;list, one scan or&nbsp;tap&nbsp;away.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"landing-lead"} -->
<p class="landing-lead">One QR and NFC code with your live prices. Already have a website? It works there&nbsp;too.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/register/">Register your business</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","linkTarget":"_blank","rel":"noreferrer noopener"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/harbour-kitchen/" target="_blank" rel="noreferrer noopener">See an example</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"landing-hero__note"} -->
<p class="landing-hero__note">No website needed · Works on every phone · No app to download</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"landing-hero__art"} -->
<figure class="wp-block-image size-full landing-hero__art"><img src="<?php echo esc_url( wp_make_link_relative( \Illuminate\Support\Facades\Vite::asset( 'resources/images/landing/hero.svg' ) ) ); ?>" alt="Printed QR code signs opening a price list on a phone" width="520" height="520" fetchpriority="high"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"how-it-works","align":"wide","className":"landing-section landing-section--sand"} -->
<div id="how-it-works" class="wp-block-group alignwide landing-section landing-section--sand"><!-- wp:paragraph {"align":"center","className":"landing-eyebrow"} -->
<p class="has-text-align-center landing-eyebrow">How it works</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">From sign-up to live prices in three steps</h2>
<!-- /wp:heading -->

<!-- wp:columns {"className":"landing-steps"} -->
<div class="wp-block-columns landing-steps"><!-- wp:column {"className":"landing-card"} -->
<div class="wp-block-column landing-card"><!-- wp:paragraph {"className":"landing-step"} -->
<p class="landing-step">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Set up your page, your way</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Pick a design and add your logo and prices yourself in about twenty minutes. Or send your AI app a photo of your menu and it builds the whole page. Or leave it to us: we set it up for €39.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"landing-card"} -->
<div class="wp-block-column landing-card"><!-- wp:paragraph {"className":"landing-step"} -->
<p class="landing-step">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">We make your QR and NFC codes</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>3D-printed codes in your page's colours, each with a QR code to scan and an NFC tag to tap, posted to you ready for tables, the counter or the window. Or print your own QR sign from your dashboard.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"landing-card"} -->
<div class="wp-block-column landing-card"><!-- wp:paragraph {"className":"landing-step"} -->
<p class="landing-step">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Customers scan or tap</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Prices change? Update them in your dashboard from any device, or just tell your AI app, and every printed code shows the new list instantly.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"ai-assistant","align":"wide","className":"landing-section landing-ai"} -->
<div id="ai-assistant" class="wp-block-group alignwide landing-section landing-ai"><!-- wp:columns {"verticalAlignment":"center","className":"landing-ai__inner"} -->
<div class="wp-block-columns are-vertically-aligned-center landing-ai__inner"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"landing-eyebrow"} -->
<p class="landing-eyebrow">New · AI assistant</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Set up and update your page by just asking</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"landing-lead"} -->
<p class="landing-lead">Connect your page to ChatGPT or another AI app once, then build it and keep it up to date in plain words, from your phone. No logging in, no forms.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"landing-ai__list"} -->
<ul class="wp-block-list landing-ai__list"><!-- wp:list-item -->
<li><strong>Your whole page in minutes.</strong> Send a photo of your menu and your website: it builds your price list and sets your logo, colours, fonts and links.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Quick changes.</strong> "Guinness is €5.50" or "cocktails up 5%", live straight away.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Safe by design.</strong> It can only change your own page, never your billing, and every change can be undone.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"landing-ai__note"} -->
<p class="landing-ai__note">Included with Plus. Works with the AI app you already use.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"landing-chat","layout":{"type":"default"}} -->
<div class="wp-block-group landing-chat"><!-- wp:paragraph {"className":"landing-chat__msg landing-chat__msg--you"} -->
<p class="landing-chat__msg landing-chat__msg--you">Here's our menu. Use the logo and colours from harbourkitchen.com and set up my page.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"landing-chat__msg"} -->
<p class="landing-chat__msg">Done: 6 sections and 42 items, your logo, your blue as the accent and the Harbour design. It's live on your page now.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"landing-chat__msg landing-chat__msg--you"} -->
<p class="landing-chat__msg landing-chat__msg--you">Guinness is €5.50 now, and add Sunday roast to Mains at €14.95.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"landing-chat__msg"} -->
<p class="landing-chat__msg">Done. Guinness is €5.50 and Sunday roast is in Mains at €14.95. Say "undo" to put it back.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"landing-band"} -->
<div class="wp-block-group alignfull landing-band"><!-- wp:group {"align":"wide","className":"landing-section"} -->
<div class="wp-block-group alignwide landing-section"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Everything you need, nothing you don't</h2>
<!-- /wp:heading -->

<!-- wp:columns {"className":"landing-features"} -->
<div class="wp-block-columns landing-features"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Always up to date</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>No reprinting when prices change. Edit once and it's live on every sign you've put out.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Looks like your brand</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Your logo, colours and fonts on a professionally designed page.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">No website needed</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Use it as a standalone page, or link it to and from your existing website.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Your contact details</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Opening hours, address, phone, social links and a booking button in one place.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Fast on every phone</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lightweight pages that open instantly. No app and no sign-up for your customers.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Your own private login</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A simple dashboard just for your page. Nobody else can see or change it.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"designs","align":"wide","className":"landing-section landing-section--sand"} -->
<div id="designs" class="wp-block-group alignwide landing-section landing-section--sand"><!-- wp:paragraph {"align":"center","className":"landing-eyebrow"} -->
<p class="has-text-align-center landing-eyebrow">Designs</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Nine looks to start from</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"landing-lead"} -->
<p class="has-text-align-center landing-lead">Ready-made pages in Noir, Harbour, Morning, Serene and Edge, or a simple price list in Atelier, Studio, Bloom and Mono. Every design is a starting point. Change colours, fonts and layout to suit you, and switch whenever you like.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"landing-design-row__title"} -->
<h3 class="wp-block-heading has-text-align-center landing-design-row__title">Six ready-made layouts</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"landing-design-row__lead"} -->
<p class="has-text-align-center landing-design-row__lead">Build a full menu page in a few clicks: a photo hero, menu sections, a two-column menu, a photo strip and a closing banner, or the whole page at once. Works with every design and looks right on phones.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"landing-design-cards landing-design-cards--layouts"} -->
<div class="wp-block-columns landing-design-cards landing-design-cards--layouts"><!-- wp:column {"className":"landing-card landing-card--noir"} -->
<div class="wp-block-column landing-card landing-card--noir"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"landing-card__preview"} -->
<figure class="wp-block-image size-full landing-card__preview"><img src="<?php echo esc_url( wp_make_link_relative( \Illuminate\Support\Facades\Vite::asset( 'resources/images/landing/designs/noir.webp' ) ) ); ?>" alt="The Noir design on a phone" width="352" height="1354" loading="lazy"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"landing-card__tag"} -->
<p class="landing-card__tag">Bars &amp; restaurants</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Noir</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Moody and luxurious with gold accents.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"landing-card__link"} -->
<p class="landing-card__link"><a href="/obsidian-cocktail-bar/" target="_blank" rel="noreferrer noopener">See it live →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"landing-card landing-card--harbour"} -->
<div class="wp-block-column landing-card landing-card--harbour"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"landing-card__preview"} -->
<figure class="wp-block-image size-full landing-card__preview"><img src="<?php echo esc_url( wp_make_link_relative( \Illuminate\Support\Facades\Vite::asset( 'resources/images/landing/designs/harbour.webp' ) ) ); ?>" alt="The Harbour layout on a phone" width="352" height="1354" loading="lazy"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"landing-card__tag"} -->
<p class="landing-card__tag">Restaurants &amp; seafood</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Harbour</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A big photo hero, the menu in chapters with a photo strip between them and a harbour banner to finish.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"landing-card__link"} -->
<p class="landing-card__link"><a href="/the-anchor/" target="_blank" rel="noreferrer noopener">See it live →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"landing-card landing-card--morning"} -->
<div class="wp-block-column landing-card landing-card--morning"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"landing-card__preview"} -->
<figure class="wp-block-image size-full landing-card__preview"><img src="<?php echo esc_url( wp_make_link_relative( \Illuminate\Support\Facades\Vite::asset( 'resources/images/landing/designs/morning.webp' ) ) ); ?>" alt="The Morning layout on a phone" width="352" height="1354" loading="lazy"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"landing-card__tag"} -->
<p class="landing-card__tag">Cafés &amp; brunch</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Morning</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Text beside a big photo, the menu as cards, a row of photos and a "come and say hello" section.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"landing-card__link"} -->
<p class="landing-card__link"><a href="/sunday-kitchen/" target="_blank" rel="noreferrer noopener">See it live →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:details {"className":"landing-more"} -->
<details class="wp-block-details landing-more"><summary>See all six layouts</summary><!-- wp:columns {"className":"landing-design-cards landing-design-cards--layouts"} -->
<div class="wp-block-columns landing-design-cards landing-design-cards--layouts"><!-- wp:column {"className":"landing-card landing-card--serene"} -->
<div class="wp-block-column landing-card landing-card--serene"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"landing-card__preview"} -->
<figure class="wp-block-image size-full landing-card__preview"><img src="<?php echo esc_url( wp_make_link_relative( \Illuminate\Support\Facades\Vite::asset( 'resources/images/landing/designs/serene.webp' ) ) ); ?>" alt="The Serene layout on a phone" width="352" height="1354" loading="lazy"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"landing-card__tag"} -->
<p class="landing-card__tag">Salons, spas &amp; nails</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Serene</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A soft photo hero, a short welcome, prices with dotted leaders and a booking panel.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"landing-card__link"} -->
<p class="landing-card__link"><a href="/stillwater-spa/" target="_blank" rel="noreferrer noopener">See it live →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"landing-card landing-card--edge"} -->
<div class="wp-block-column landing-card landing-card--edge"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"landing-card__preview"} -->
<figure class="wp-block-image size-full landing-card__preview"><img src="<?php echo esc_url( wp_make_link_relative( \Illuminate\Support\Facades\Vite::asset( 'resources/images/landing/designs/edge.webp' ) ) ); ?>" alt="The Edge layout on a phone" width="352" height="1354" loading="lazy"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"landing-card__tag"} -->
<p class="landing-card__tag">Barbers</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Edge</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Big condensed headlines, the price list in two columns, a photo strip and a brass banner.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"landing-card__link"} -->
<p class="landing-card__link"><a href="/ironside-barbers/" target="_blank" rel="noreferrer noopener">See it live →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"landing-card landing-card--layouts"} -->
<div class="wp-block-column landing-card landing-card--layouts"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"landing-card__preview"} -->
<figure class="wp-block-image size-full landing-card__preview"><img src="<?php echo esc_url( wp_make_link_relative( \Illuminate\Support\Facades\Vite::asset( 'resources/images/landing/designs/layouts.webp' ) ) ); ?>" alt="A full menu page built from the ready-made layouts" width="352" height="1354" loading="lazy"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"landing-card__tag"} -->
<p class="landing-card__tag">Restaurants &amp; cafés</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Harbour Kitchen</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>The complete example: a full menu page with headings, jump links and photos.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"landing-card__link"} -->
<p class="landing-card__link"><a href="/harbour-kitchen/" target="_blank" rel="noreferrer noopener">See it live →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></details>
<!-- /wp:details -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"landing-design-row__title"} -->
<h3 class="wp-block-heading has-text-align-center landing-design-row__title">Or start simple</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"landing-design-row__lead"} -->
<p class="has-text-align-center landing-design-row__lead">Just your price list, beautifully styled. Add photos and ready-made sections whenever you like.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"landing-design-cards landing-design-cards--starters"} -->
<div class="wp-block-columns landing-design-cards landing-design-cards--starters"><!-- wp:column {"className":"landing-card landing-card--atelier"} -->
<div class="wp-block-column landing-card landing-card--atelier"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"landing-card__preview"} -->
<figure class="wp-block-image size-full landing-card__preview"><img src="<?php echo esc_url( wp_make_link_relative( \Illuminate\Support\Facades\Vite::asset( 'resources/images/landing/designs/atelier.webp' ) ) ); ?>" alt="The Atelier design on a phone" width="352" height="1354" loading="lazy"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"landing-card__tag"} -->
<p class="landing-card__tag">Salons &amp; spas</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Atelier</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Elegant serif type and a classic dotted-leader menu.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"landing-card__link"} -->
<p class="landing-card__link"><a href="/willow-rose-hair-studio/" target="_blank" rel="noreferrer noopener">See it live →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"landing-card landing-card--studio"} -->
<div class="wp-block-column landing-card landing-card--studio"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"landing-card__preview"} -->
<figure class="wp-block-image size-full landing-card__preview"><img src="<?php echo esc_url( wp_make_link_relative( \Illuminate\Support\Facades\Vite::asset( 'resources/images/landing/designs/studio.webp' ) ) ); ?>" alt="The Studio design on a phone" width="352" height="1354" loading="lazy"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"landing-card__tag"} -->
<p class="landing-card__tag">Barbers &amp; studios</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Studio</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Bold, modern cards with a punchy accent colour.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"landing-card__link"} -->
<p class="landing-card__link"><a href="/fade-republic/" target="_blank" rel="noreferrer noopener">See it live →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"landing-card landing-card--bloom"} -->
<div class="wp-block-column landing-card landing-card--bloom"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"landing-card__preview"} -->
<figure class="wp-block-image size-full landing-card__preview"><img src="<?php echo esc_url( wp_make_link_relative( \Illuminate\Support\Facades\Vite::asset( 'resources/images/landing/designs/bloom.webp' ) ) ); ?>" alt="The Bloom design on a phone" width="352" height="1354" loading="lazy"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"landing-card__tag"} -->
<p class="landing-card__tag">Nails &amp; beauty</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Bloom</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Soft, friendly and rounded.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"landing-card__link"} -->
<p class="landing-card__link"><a href="/petal-polish-nail-bar/" target="_blank" rel="noreferrer noopener">See it live →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"landing-card landing-card--mono"} -->
<div class="wp-block-column landing-card landing-card--mono"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"landing-card__preview"} -->
<figure class="wp-block-image size-full landing-card__preview"><img src="<?php echo esc_url( wp_make_link_relative( \Illuminate\Support\Facades\Vite::asset( 'resources/images/landing/designs/mono.webp' ) ) ); ?>" alt="The Mono design on a phone" width="352" height="1354" loading="lazy"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"landing-card__tag"} -->
<p class="landing-card__tag">Cafés</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Mono</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Minimal and typographic, perfect on its own.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"landing-card__link"} -->
<p class="landing-card__link"><a href="/daily-grind-coffee/" target="_blank" rel="noreferrer noopener">See it live →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"faq","align":"wide","className":"landing-section landing-faq"} -->
<div id="faq" class="wp-block-group alignwide landing-section landing-faq"><!-- wp:columns {"className":"landing-faq__layout"} -->
<div class="wp-block-columns landing-faq__layout"><!-- wp:column {"width":"36%","className":"landing-faq__intro"} -->
<div class="wp-block-column landing-faq__intro" style="flex-basis:36%"><!-- wp:paragraph {"className":"landing-eyebrow"} -->
<p class="landing-eyebrow">FAQ</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Questions</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"landing-lead"} -->
<p class="landing-lead">Everything you need to know before you start.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"landing-faq__ask"} -->
<p class="landing-faq__ask">Something else? <a href="/contact/">Ask us anything</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"landing-faq__list"} -->
<div class="wp-block-column landing-faq__list"><!-- wp:details -->
<details class="wp-block-details"><summary>Do I need a website?</summary><!-- wp:paragraph -->
<p>No. Your price list page works perfectly on its own. If you do have a website, you can add links between the two.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>What happens when my prices change?</summary><!-- wp:paragraph -->
<p>Log in, edit your prices and save. Your printed QR code always opens the latest version, so there is nothing to reprint.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Can I update my prices with AI?</summary><!-- wp:paragraph -->
<p>Yes. Connect your page to ChatGPT or another AI app once from a computer, then tell it what to change from your phone. It can only edit your price list, page details and design, and you can undo any change. Included with Plus.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Can I change the design later?</summary><!-- wp:paragraph -->
<p>Any time. Switch design and keep your content, or start fresh from a new layout.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>What's NFC?</summary><!-- wp:paragraph -->
<p>A small chip inside your sign. Customers hold their phone near it and your page opens, with no camera needed. Works on modern iPhones and Android phones.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Can you make a stand or sign for my QR code?</summary><!-- wp:paragraph -->
<p>Yes. Our sister studio, <a href="https://3dprinting.satori-digital.com/" target="_blank" rel="noreferrer noopener">Satori 3D Printing</a>, makes custom counter stands, table signs and illuminated displays to hold your code.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>What does the €39 set-up include?</summary><!-- wp:paragraph -->
<p>We build your page for you. After you sign up, send us photos or a PDF of your menu, your logo and a few photos of your place through your dashboard. We set up your price list, design and details and have your page ready within 2 working days. It's a one-off fee, paid when you sign up.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>How do I get started?</summary><!-- wp:paragraph -->
<p>Choose a plan and start your 30-day free trial. Your account is ready straight away and we email you a link to set your password.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"landing-cta"} -->
<div class="wp-block-group alignfull landing-cta"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Ready to put your prices in your customers' hands?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">It takes two minutes to register. We'll do the rest.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/register/">Register your business</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
