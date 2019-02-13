@extends('layouts.app')

  @section('content')
    @while(have_posts()) @php the_post() @endphp

      <video autoplay loop muted poster="@asset('images/darkroom.jpg')" id="background">
        <source src="@php get_field('background_video') @endphp" type="video/mp4">
      </video>

      <div class="container">
        @include('partials.page-header')
        @include('partials.content-page')
      </div>
    @endwhile
  @endsection
