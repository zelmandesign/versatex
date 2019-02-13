@extends('layouts.app')

  @section('content')
    @while(have_posts()) @php the_post() @endphp


      <div class="res">
        <div class="menu-wrapper">
          <ul>
            <li>
              <a href="#tail">+ Tail Spend Savings</a>
            </li>
            <li>
              <a href="#compliance">+ Compliance Risk</a>
            </li>
            <li>
              <a href="#spend">+ Spend Visibility</a>
            </li>
            <li>
              <a href="#process">+ Process Efficiency</a>
            </li>
            <li>
              <a href="#supplier">+ Supplier Management</a>
            </li>
          </ul>
        </div>
      </div>

      <section id="top" class="section-class-name" data-section-name="top">
        <div class="video-background">
          <div class="video-foreground">
            @php
              // get iframe HTML
              $iframe = '<iframe src="https://www.youtube.com/embed/OalKYV3Gvz8?rel=0&controls=0&showinfo=0&autoplay=1&loop=1&playlist=OalKYV3Gvz8" frameborder="0" allowfullscreen></iframe>';


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
                    'playlist'=> 'OalKYV3Gvz8'

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
          Versatex delivers customized supply chain solutions for B2B marketplaces in a variety of industries, including healthcare, higher education, pharmaceutical, and GPO collaboratives. 
          <br>
          We partner with procurement professionals grappling with time-consuming, non-strategic, low ROI activities – to streamline processes, aggregate sourcing, capture savings opportunities and maximize transparency within their supply base.
          <br><br>
          <i class="fas fa-long-arrow-alt-down"></i>
        </div>
      </section>

      <section id="tail" class="section-class-name" data-section-name="tail">
        <div class="container">
          <h1>Tail Spend Savings</h1>
          <h3>Reveal strategic savings opportunities in your unmanaged spend. </h3>
          By managing your non-strategic or low value spend, Versatex allows your procurement professionals to re-focus time and resources on greater ROI opportunities. 
          <br>
          Versatex offers a range of integrated solutions, including:
          <br><br>
          <div class="row mb-2">
            <div class="col-md box">
              <div class="card">
                <div class="card-header">
                  Customized Supplier Fitting
                </div>
                <div class="card-body">
                  <p class="card-text">Versatex ensures your supplier base is a perfect fit with your organization's goals, maximizing ROI while simultaneously delivering best value, highest quality, and stable compliance.</p>
                </div>
              </div>
            </div>
            <div class="col-md box">
              <div class="card">
                <div class="card-header">
                  Process Recalibration
                </div>
                <div class="card-body">
                  <p class="card-text">Versatex decreases your costs without a decreased quality of service by standardizing your processes, ultimately driving enhanced end-to-end efficiency.</p>
                </div>
              </div>
            </div>
            <div class="col-md box">
              <div class="card">
                <div class="card-header">
                  Spend Diversification
                </div>
                <div class="card-body">
                  <p class="card-text">Versatex helps you identify and source diverse suppliers for even your most specialized categories.  Our Spend Diversification delivers the convenience of managing the complexities that often arise from working with smaller vendors - so you can focus on more strategic spend.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md box">
              <div class="card">
                <div class="card-header">
                  Aggregated Spend & Supplier Optimization
                </div>
                <div class="card-body">
                  <p class="card-text">Versatex provides complete transparency into each step of the procurement to payment (P2P) system by standardizing your spend analytics, inventory control, and documentation.  This allows you to work through an aggregator in real time across all your locations (versus having to manage hundreds or even thousands of vendors).  </p>
                </div>
              </div>
            </div>
            <div class="col-md box">
              <div class="card">
                <div class="card-header">
                  P2P Streamlining
                </div>
                <div class="card-body">
                  <p class="card-text">Versatex streamlines and automates the management of required approvals to ensure all payments are accurate and verified, reducing overpayment and audit risk.  By providing complete transparency into each step from procurement to payment, we ensure that all payments are supported with the necessary documentation while keeping your suppliers paid on-time.</p>
                </div>
              </div>
            </div>
          </div>
          
          <br>
          <a href="/contact-us" class="btn btn-primary">Contact Us</a>
        </div>
      </section>

      <section id="compliance" class="section-class-name" data-section-name="compliance">
        <div class="container">
          <h1>Compliance Risk</h1>
          <h3>Mitigate supply risk through enforcement and diversification </h3>
          Address Non-Compliance and tackle Maverick Spending, while increasing the diversity of your supply base. Versatex offers integrated solutions, including: 
          <br><br>
          <a href="/contact-us" class="btn btn-primary">Contact Us</a>
        </div>
      </section>

      <section id="spend" class="section-class-name" data-section-name="spend">
        <div class="container">
          <h1>Spend Visibility</h1>
          <h3>Quality data and analytics</h3>
          Quality data provides valuable insights into mid-tail savings opportunities, while you gain visibility into indirect spend. <br>
 Versatex offers a range of integrated solutions, including:
          <br><br>
          <a href="/contact-us" class="btn btn-primary">Contact Us</a>
        </div>
      </section>

      <section id="process" class="section-class-name" data-section-name="process">
        <div class="container">
          <h1>Process Efficiency</h1>
          <h3>Improve cycle time consistency and predictability</h3>
          We understand the value of process and e developed tools to deliver sourcing and procurement efficiency.  
<br>
Versatex offers a range of integrated solutions, including:
          <br><br>
          <a href="/contact-us" class="btn btn-primary">Contact Us</a>
        </div>
      </section>

      <section id="supplier" class="section-class-name" data-section-name="supplier">
        <div class="container">
          <h1>Supplier Management</h1>
          <h3>The best suppliers in all the right places </h3>
          When it comes to a tangled supplier base, your vendors can become the weakest link. We ensure that every contract is expertly managed, and each vendor is held accountable for performance.  
<br>
Versatex offers a range of integrated solutions, including:
          <br><br>
          <a href="/contact-us" class="btn btn-primary">Contact Us</a>
        </div>
      </section>

      
    @endwhile
  @endsection
