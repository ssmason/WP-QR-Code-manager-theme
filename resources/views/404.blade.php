{{--
  404: page not found.
  A "broken QR code" next to the message, a way home, and a note for people
  who scanned a business's code that no longer leads anywhere.
--}}

@extends('layouts.app')

@section('content')
  <section class="relative overflow-hidden bg-paper text-ink">
    <div class="mx-auto grid max-w-6xl items-center gap-10 px-5 py-16 sm:px-8 md:grid-cols-[1.2fr_1fr] md:gap-16 md:py-24">
      <div class="order-2 md:order-1">
        <p class="font-mono text-sm font-medium uppercase tracking-widest text-amber">
          {{ __('Error 404', 'qr-code-manager') }}
        </p>

        <h1 class="mt-3 font-serif text-4xl font-extrabold leading-tight tracking-tight sm:text-5xl">
          {{ __('This code leads nowhere', 'qr-code-manager') }}
        </h1>

        <p class="mt-5 max-w-xl text-lg leading-relaxed text-ink-soft">
          {{ __('We couldn’t find a page at this address. It may have moved, or the link may have a typo.', 'qr-code-manager') }}
        </p>

        <div class="mt-8 flex flex-wrap gap-3">
          <a
            href="{{ home_url('/') }}"
            class="inline-flex items-center gap-2 rounded-full bg-amber px-6 py-3 font-semibold text-white no-underline shadow-sm transition hover:bg-amber-dark focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink"
          >
            <span aria-hidden="true">←</span>
            {{ __('Back to the home page', 'qr-code-manager') }}
          </a>

          <a
            href="{{ home_url('/contact/') }}"
            class="inline-flex items-center rounded-full border-2 border-ink px-6 py-3 font-semibold text-ink no-underline transition hover:bg-ink hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ink"
          >
            {{ __('Contact us', 'qr-code-manager') }}
          </a>
        </div>

        <div class="mt-12 max-w-xl rounded-2xl border border-ink/10 bg-white p-6 shadow-sm">
          <h2 class="font-serif text-lg font-bold">
            {{ __('Scanned a code at a business?', 'qr-code-manager') }}
          </h2>
          <p class="mt-2 leading-relaxed text-ink-soft">
            {{ __('Their page may have been renamed or taken offline. Ask the staff for the menu, or tell us where you found the code and we’ll look into it.', 'qr-code-manager') }}
          </p>
          <p class="mt-3">
            <a href="{{ home_url('/contact/') }}" class="font-semibold text-amber underline decoration-2 underline-offset-4 hover:text-amber-dark">
              {{ __('Report a broken code', 'qr-code-manager') }}
            </a>
          </p>
        </div>
      </div>

      {{-- A QR code with one corner missing: it cannot scan. Decorative. --}}
      <div class="order-1 mx-auto w-48 sm:w-60 md:order-2 md:w-full md:max-w-sm" aria-hidden="true">
        <svg viewBox="0 0 29 29" class="h-auto w-full -rotate-3 drop-shadow-xl" role="presentation" focusable="false">
          <rect x="0" y="0" width="29" height="29" rx="1.5" class="fill-white" />

          {{-- Finder squares (top left, top right). --}}
          <g class="fill-ink">
            <path d="M2 2h7v7H2zM3 3v5h5V3zM4 4h3v3H4z" fill-rule="evenodd" />
            <path d="M20 2h7v7h-7zM21 3v5h5V3zM22 4h3v3h-3z" fill-rule="evenodd" />
          </g>

          {{-- Data modules. --}}
          <g class="fill-ink">
            <path d="M11 2h1v1h-1zM13 2h2v1h-2zM16 3h1v2h-1zM11 4h1v1h-1zM13 5h2v1h-2zM12 6h1v2h-1zM15 7h2v1h-2zM11 9h1v1h-1zM14 9h1v1h-1zM17 10h1v1h-1z" />
            <path d="M2 11h1v1H2zM4 11h2v1H4zM7 12h1v1H7zM3 13h1v2H3zM5 14h2v1H5zM8 15h1v1H8zM2 16h2v1H2zM6 17h1v1H6z" />
            <path d="M11 11h2v2h-2zM14 12h1v1h-1zM16 11h2v1h-2zM12 14h1v2h-1zM15 14h2v1h-2zM18 13h1v2h-1zM10 17h2v1h-2zM14 16h1v2h-1zM17 17h2v1h-2z" />
            <path d="M20 11h1v1h-1zM22 11h2v1h-2zM25 12h2v1h-2zM21 13h1v2h-1zM23 14h1v1h-1zM26 15h1v1h-1zM20 16h2v1h-2zM24 17h1v1h-1z" />
            <path d="M11 20h1v1h-1zM13 21h2v1h-2zM16 20h1v1h-1zM12 23h1v1h-1zM15 23h2v1h-2zM11 25h2v1h-2zM14 26h1v1h-1zM17 25h1v1h-1z" />
            <path d="M20 20h2v1h-2zM23 21h1v1h-1zM25 20h2v2h-2zM21 23h1v1h-1zM24 24h2v1h-2zM20 26h1v1h-1zM22 25h1v2h-1zM26 26h1v1h-1z" />
          </g>

          {{-- The missing corner. --}}
          <rect x="2.25" y="20.25" width="6.5" height="6.5" rx="0.6" class="fill-none stroke-amber" stroke-width="0.5" stroke-dasharray="1 0.8" />
          <text x="5.5" y="25.1" text-anchor="middle" class="fill-amber font-mono" font-size="4.5" font-weight="700">?</text>
        </svg>
      </div>
    </div>
  </section>
@endsection
