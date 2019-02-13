@extends('layouts.app')

  @section('content')
    @while(have_posts()) @php the_post() @endphp

      
   <div class="video-background">
    <div class="video-foreground">
      @php
          // get iframe HTML
          $iframe = '<iframe src="https://www.youtube.com/embed/6aO-hYXXRLg?rel=0&controls=0&showinfo=0&autoplay=1&loop=1&playlist=6aO-hYXXRLg" frameborder="0" allowfullscreen></iframe>';


          // use preg_match to find iframe src
          preg_match('/src="(.+?)"/', $iframe, $matches);
          $src = $matches[1];


          // add extra params to iframe src
          $params = array(
              
                'autoplay'=> 1, 
                'controls'=> 0,
                'mute'=> 1,
                'autohide'=>1,
                'enablejsapi'=>1,
                'loop'=>1, 
                'disablekb'=>1, 
                'fs'=> 0, 
                'modestbranding'=> 0, 
                'showinfo'=> 0, 
                'rel'=>0  ,
                'playlist'=> '6aO-hYXXRLg'

          );

          $new_src = add_query_arg($params, $src);

          $iframe = str_replace($src, $new_src, $iframe);


          // add extra attributes to iframe html
          $attributes = 'frameborder="0"';

          $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);


          // echo $iframe
          echo $iframe;
          @endphp
    </div>
  </div>

      <div class="container">
        @include('partials.page-header')
        @include('partials.content-page')
      </div>
    @endwhile
  @endsection
