@extends('layouts.app')

  @section('content')
    @while(have_posts()) @php the_post() @endphp

      <div class="video-background">
        <div class="video-foreground">
        @php
          // get iframe HTML
          $iframe = '<iframe width="100%" height="auto" src="https://www.youtube.com/embed/sQjpDhW9TBo?rel=0&controls=0&showinfo=0&autoplay=1&loop=1&playlist=sQjpDhW9TBo" frameborder="0" allowfullscreen></iframe>';


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
                'playlist'=> 'sQjpDhW9TBo'

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

        <section id="about" class="section-class-name" data-section-name="about">
          
            <div class="container">
              @include('partials.page-header')
              @include('partials.content-page')
            </div>
          
        </section>

        <section id="ingenuity" class="section-class-name" data-section-name="ingenuity">
          <div class='circle-wrapper'>
            <div class="circle circle-32"></div>
            <div class="circle circle-31"></div>
            <div class="circle circle-30"></div>
            <div class="circle circle-29"></div>
            <div class="circle circle-28"></div>
            <div class="circle circle-27"></div>
            <div class="circle circle-26"></div>
            <div class="circle circle-25"></div>
            <div class="circle circle-24"></div>
            <div class="circle circle-23"></div>
            <div class="circle circle-22"></div>
            <div class="circle circle-21"></div>
            <div class="circle circle-20"></div>
            <div class="circle circle-19"></div>
            <div class="circle circle-18"></div>
            <div class="circle circle-17"></div>
            <div class="circle circle-16"></div>
            <div class="circle circle-15"></div>
            <div class="circle circle-14"></div>
            <div class="circle circle-13"></div>
            <div class="circle circle-12"></div>
            <div class="circle circle-11"></div>
            <div class="circle circle-10"></div>
            <div class="circle circle-9"></div>
            <div class="circle circle-8"></div>
            <div class="circle circle-7"></div>
            <div class="circle circle-6"></div>
            <div class="circle circle-5"></div>
            <div class="circle circle-4"></div>
            <div class="circle circle-3"></div>
            <div class="circle circle-2"></div>
            <div class="circle circle-1"></div>
          </div>
          <div class="container">
            <h2 class="mb-5">ESTABLISHED FOR INGENUITY</h2>
            Versatex leverages our leading-edge technology to deliver optimized goods and services, sourcing, management, payment and performance. Our solutions have been used by leading Fortune 500 companies across multiple sectors including Consumer Packaged Goods, Pharmaceutical, Food, Manufacturing, Entertainment and Government. Versatex utilizes our network of vendor partnerships to enable our clients to deliver proven, clear, and customizable solution models.
          </div>
        </section>

        <section id="our-reach" class="section-class-name" data-section-name="our-reach">
          <div class="container">
            <h2 class="mb-5">OUR REACH</h2>
            Versatex offers technology driven solutions allowing us to manage your spend across multiple sites, capture vendor performance and provide you with dashboards that track your most critical success measures.  We provide customized catalogs for many of your key products and services where your employees can easily purchase common items.
          </div>  
        </section>
        
        <section id="our-values" class="section-class-name" data-section-name="our-values">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg">
                <div class="text-center mb-4">
                  <img src="@asset('images/icon1.png')" class="img-fluid">
                </div>
                <h3>OUR PHILOSOPHY</h3>
                We listen to the voice of our customer and are flexible in how we deliver customized solutions to meet their needs. Through our actions, philanthropy and leadership, we strive to embody this commitment. We believe our community, customers and partners are better for it.
              </div>
              <div class="col-lg">
                <div class="text-center mb-4">
                  <img src="@asset('images/icon2.png')" class="img-fluid">
                </div>
                <h3>OUR PEOPLE</h3>
                We bring more than a century of experience providing sourcing, vendor management, productivity and cost savings solutions. We continuously invest in our talent to ensure we are providing our customers with the best thinking and innovation possible.
              </div>
              <div class="col-lg">
                <div class="text-center mb-4">
                  <img src="@asset('images/icon3.png')" class="img-fluid">
                </div>
                <h3>OUR PARTNERS</h3>
                We take pride in our ability to collaborate with our supply chain partners. We believe the ability to unlock superior customer value is connected to our ability to collaborate and innovate with our partners.
              </div>
            </div>
          </div>
        </section>

    @endwhile
  @endsection
