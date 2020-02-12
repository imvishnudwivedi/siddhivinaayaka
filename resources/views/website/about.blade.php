@extends('website.layouts.main')

@section('page_title', 'Siddhivinaayak Temple - About Page')

@section('description', 'Lord Ganesha is the chief deity of this powerful Pooja. He is considered the ‘God of Luck’ and he blesses his devotees with smooth success in all their endeavors!')

@section('content')


<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">

      <ul class="w3_short">
        <li><a href="{{URL::route('home')}}">Home</a><span>|</span></li>
        <li>About</li>
      </ul>
    </div>
  </div>
<!-- <marquee behavior="alternate"><span class="sliding">Officially Temple will start from Mid of February</span></marquee>
 -->
 

  <div class="about" id="welcome">
    <div class="container">
      <div class="wthree_head_section">
        <h3 class="w3l_header w3_agileits_header two">Welcome to  <span>Siddhivinaayak Temple</span></h3>
        <h1></h1>
      </div>
      <div class="agile_wthree_inner_grids">

        <div class="col-md-6 about_agileinfo">
          <h4>Siddhivinaayak Temple</h4>
          <p>The present day time-starved busy life style does not allow many to preserve the teachings and Vedic rituals which are meant to be religiously followed to lead a peaceful, blissfully happy and prosperous life, facilitating a very content material life and to awaken and advance the soul towards spiritual upliftment.</p>

          <p>Vedic rituals are being performed at the Temple daily with the prime goal of your peace, happiness & satisfaction in your life, for special days of your life & your time of emotional, physical & financial struggles.</p>
          <div class="agileits-button two service">
            <a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button">Read More »</a>
          </div>
        </div>
        <div class="col-md-6 about_agileinfo_grid_imgs">
          <img src="website/images/vinayka.jpg" alt="vinayaka" />
          
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>


 {{--  <div class="medile_agile_its_section">
    <div class="col-md-6 medile_agile_its_blue">
      <h4>Ready to Get Started? <i class="fa fa-hand-o-right" aria-hidden="true"></i> </h4>
    </div>
    <div class="col-md-6 medile_agile_its_green">
      <div class="agileits-button two service click">
        <a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button">click here »</a>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div> --}}
  <!-- agile_testimonials -->
  <div class="agile_testimonials" id="testimonials">
    <div class="container">
      <div class="wthree_head_section">
        <h3 class="w3l_header w3_agileits_header">THE PANCHASHEEL  <span>(MISSION)</span></h3>
      </div>

      <div class="agile_wthree_inner_grids">
        <div class="test-agile_main_section">
          <div id="owl-demo2" class="owl-carousel">
            <div class="agile">
              <div class="test-grid">

                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <p class="para-w3-agile">Provide authentic religious service to help individuals and the community at large to perform various karmas.</p>
              
              </div>
            </div>
            <div class="agile">
              <div class="test-grid">

                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <p class="para-w3-agile">Support the community as a whole by actively participating in various social causes.</p>
              
              </div>
            </div>
            <div class="agile">
              <div class="test-grid">

                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <p class="para-w3-agile">Preserve and propagate the learning of the Vedas, Sastras and Puranas for generations to come.</p>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="admin">
    <h3 style="color: #fff;">WHY DO WE NEED ANOTHER TEMPLE IN THE GREATER DC AREA?</h3>
    <ol>
          <p>Primarily for the convenience of people residing in Ellicott City/Clarksville/Columbia there is a great unmet need that is not being currently served by other temples in the area due to the fact that the closest temple is 45 minutes away</p>
         
          </ol>
         
        </div>
      



@section('script')
@parent



@endsection
@stop

