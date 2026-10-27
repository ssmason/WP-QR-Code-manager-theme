{{--
  Template Name: Landing
--}}

{{--
  Marketing pages (Home, Register): full-width block content, no page title.
  Styles live in resources/css/landing.css, scoped to .landing.
  Editing is limited to administrators (see app/filters.php).
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="landing">
      @php(the_content())
    </div>
  @endwhile
@endsection
