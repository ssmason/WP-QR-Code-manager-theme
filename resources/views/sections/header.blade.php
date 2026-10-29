{{-- Site header: the synced pattern "Header" (see App\View\Composers\SiteChrome). --}}
@if ($headerContent)
  <header class="header-theme">
    {!! $headerContent !!}
  </header>
@endif
