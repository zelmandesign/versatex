@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    <!--<video autoplay loop muted poster="@asset('images/darkroom.jpg')" id="background">
      <source src="<?php echo get_template_directory_uri(); ?>/assets/video/home.mp4" type="video/mp4">
    </video>-->

    <div class="video-background">
      <div class="video-foreground">
        @php
          // get iframe HTML
          $iframe = '<iframe width="100%" height="auto" src="https://www.youtube.com/embed/NEciE6pQP2U?rel=0&controls=0&showinfo=0&autoplay=1&loop=1&playlist=NEciE6pQP2U" frameborder="0" allowfullscreen></iframe>';


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
                'modestbranding'=> 1, 
                'showinfo'=> 0, 
                'rel'=>0  ,
                'playlist'=> 'NEciE6pQP2U'

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

      <section id="home">
        <h1>A Leading Management Service Provider (MSP) of </h1>
        <h1>Sourcing +Supply Chain Management</h1>
      </section>

    </div>

  @endwhile
@endsection
