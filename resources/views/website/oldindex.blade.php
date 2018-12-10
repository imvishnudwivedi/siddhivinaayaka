@extends('website.layouts.main')
@section('content')





  <style type="text/css">
    @-webkit-keyframes blinker {
  from {opacity: 1.0;}
  to {opacity: 0.0;}
}
.blink{
  text-decoration: blink;
  -webkit-animation-name: blinker;
  -webkit-animation-duration: 0.6s;
  -webkit-animation-iteration-count:infinite;
  -webkit-animation-timing-function:ease-in-out;
  -webkit-animation-direction: alternate;
}
  </style>

     <div class="about" id="welcome">
    <div class="container">
      <div class="wthree_head_section">
        <h3 class="w3l_header w3_agileits_header two">Siddhivinaayak Murthy Pratishthapana</h3><br> <h4 style="text-align:center;">Along with Durga, Shiva, Hanuman,Shirdi Sai , Satya Sai
Murthy Pratishthapana Mohotsava <br><a class="col-md-4 col-md-offset-4" target="_blank" style="border:1px solid #fff;border-radius:20px;text-align:center;" href="https://goo.gl/maps/G2YPA4vcEtv"><span class="blink" style="font-size: 15px; color: gold;padding-top:-10px;">Click for Driving Direction to Temple</span> </a><br><div class="clearfix"></div> <span>Date: June 8, 9, <u>10</u> - 2018 (Friday, Saturday, Sunday) 
 </span></h4>
 <a class="col-md-4" target="_blank" style="border:1px solid #fff;border-radius:20px;text-align:center;color:orangered;background:#fff;" href="https://mailchi.mp/cd1849771e2f/siddhivinaaytak-temple-pratishthapana-volunteer-sign-up-page"><span style="font-size: 15px; color: orangered;"><b>Volunteer sign up</b></span></a>
          
          <a class="col-md-4" target="_blank" style="border:1px solid #fff;border-radius:20px;text-align:center;color:orangered;background:#fff;" href="https://mailchi.mp/42ee764ddb47/339dw9661a"><span style="font-size: 15px; color: orangered;"><b>Lalitha Sahasra Nama Participant sign up</b></span></a>
          
          <a class="col-md-4" target="_blank" style="border:1px solid #fff;border-radius:20px;text-align:center;color:orangered;background:#fff;" href="https://mailchi.mp/75803ff00715/0vdm0ffr5v"><span style="font-size: 15px; color: orangered;"><b>Temple Donor sign up</b></span></a>
      </div>
      <div class="agile_wthree_inner_grids">

        {{-- <div class="col-md-12 about_agileinfo">
          <h1 class="hc">Siddhivinaayak Temple</h1>
          <h4>Religious events lead by Sri. Venkata Raman Shastri Ji & Sri. Bhaskara Shastri Ji<br>
With blessings from Nalinanand Giri Swami Ji, Rockville, MD</h4>
          <div class="agileits-button two service">
            <a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button">Main Pranapratistapana event on June 10 »</a>
          </div>
        </div> --}}
        <div class="col-md-12 about_agileinfo_grid_imgs1">
          <img  src="{{ asset('website/images/flyer-blue.png') }}" alt="Sri Ganesh" />
          
        </div>
        <div class="clearfix"></div>
        <br><h4>*Main Pranapratistapana event on June 10<sup>th</sup></h4>
        <br>

      </div>
    </div>
  </div>
  <!--    <marquee behavior="alternate"><span class="sliding">Officially Temple will start from Mid of February</span></marquee> -->
    <div class="banner-bottom">
    <div class="container">
      <div class="col-md-4 agileits_banner_bottom_left">
        <div class="agileinfo_banner_bottom_pos">
          <div class="w3_agileits_banner_bottom_pos_grid">
            <div class="col-xs-3 wthree_banner_bottom_grid_left">
              <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                <i class="fa fa-laptop" aria-hidden="true"></i>
              </div>
            </div>
            <div class="col-xs-9 wthree_banner_bottom_grid_right">
              <h4>Services</h4>
              <p> Lord Ganesha is the chief deity of this powerful Pooja. He is considered the ‘God of Luck’ and he blesses his devotees with smooth success in all their endeavors!</p>
              {{-- <div class="agileits-button two">
                <a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button">Read More »</a>
              </div> --}}
            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 agileits_banner_bottom_left">
        <div class="agileinfo_banner_bottom_pos">
          <div class="w3_agileits_banner_bottom_pos_grid">
            <div class="col-xs-3 wthree_banner_bottom_grid_left">
              <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                <i class="fa fa-pencil" aria-hidden="true"></i>
              </div>
            </div>
            <div class="col-xs-9 wthree_banner_bottom_grid_right">
              <h4>Educational</h4>
              <p> The temple spearheads in promoting the learning of our scriptures and Sanskrit language. Classes are held regularly to teach children and adults various slokas, stotras, Ramayanam, Bhagavatam etc.</p>
              {{-- <div class="agileits-button two">
                <a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button">Read More »</a>
              </div> --}}
            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 agileits_banner_bottom_left">
        <div class="agileinfo_banner_bottom_pos">
          <div class="w3_agileits_banner_bottom_pos_grid">
            <div class="col-xs-3 wthree_banner_bottom_grid_left">
              <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                <i class="fa fa-mobile" aria-hidden="true"></i>
              </div>
            </div>
            <div class="col-xs-9 wthree_banner_bottom_grid_right">
              <h4>Mission</h4>
              <p>Promote Hindu traditions, values, culture and heritage including music, dance, slokas and sanskrit among the current and future generations</p>
              {{-- <div class="agileits-button two">
                <a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button">Read More »</a>
              </div> --}}
            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
  <div class="services" id="services">
    <div class="container">
      <div class="wthree_head_section">
        <h3 class="w3l_header w3_agileits_header two">Our <span>Services</span></h3>
      </div>
      <div class="agile_wthree_inner_grids">
        <div class="col-md-4 agileits_banner_bottom_left">
          <div class="agileinfo_banner_bottom_pos">
            <div class="w3_agileits_banner_bottom_pos_grid">
              <div class="col-xs-3 wthree_banner_bottom_grid_left">
                <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                  <i class="fa fa-map-o" aria-hidden="true"></i>
                </div>
              </div>
              <div class="col-xs-9 wthree_banner_bottom_grid_right">
                <h4 class="sub_service_agileits">Pooja  Services</h4>
                <p> Shri Ganesha is the symbol of auspiciousness, a miraculous combination of an elephant and a human, with four hands to bless his devotees.</p>
                {{-- <div class="agileits-button two service">
                  <a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button">Read More »</a>
                </div> --}}
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 agileits_banner_bottom_left">
          <div class="agileinfo_banner_bottom_pos">
            <div class="w3_agileits_banner_bottom_pos_grid">
              <div class="col-xs-3 wthree_banner_bottom_grid_left">
                <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                  <i class="fa fa-rocket" aria-hidden="true"></i>
                </div>
              </div>
              <div class="col-xs-9 wthree_banner_bottom_grid_right">
                <h4 class="sub_service_agileits">Cultural</h4>
                <p>Siddhivinayka believes that the cultural events provide a learning experience for future generation on our traditions</p>
                {{-- <div class="agileits-button two service">
                  <a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button">Read More »</a>
                </div> --}}
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 agileits_banner_bottom_left">
          <div class="agileinfo_banner_bottom_pos">
            <div class="w3_agileits_banner_bottom_pos_grid">
              <div class="col-xs-3 wthree_banner_bottom_grid_left">
                <div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
                  <i class="fa fa-paint-brush" aria-hidden="true"></i>
                </div>
              </div>
              <div class="col-xs-9 wthree_banner_bottom_grid_right">
                <h4 class="sub_service_agileits">Religious</h4>
                <p>During one’s journey from mother’s womb to the last breath of life towards God, Vedic rituals are to be performed</p>
                {{-- <div class="agileits-button two service">
                  <a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button">Read More »</a>
                </div> --}}
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
        </div>
        
      
      

        <div class="clearfix"> </div>
      </div>
    </div>
  </div>


 

  <div class="agile_testimonials" id="testimonials">
    <div class="container">
      <div class="wthree_head_section">
        <h3 class="w3l_header w3_agileits_header">Our <span>Vision</span></h3>
      </div>

      <div class="agile_wthree_inner_grids">
        <div class="test-agile_main_section">
          <div id="owl-demo2" class="owl-carousel">
            <div class="agile">
              <div class="test-grid">

                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <p class="para-w3-agile">To preserve and promote Hindu Shastra and Sanaatana dharma.</p>
                
              </div>
            </div>
            <div class="agile">
              <div class="test-grid">

                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <p class="para-w3-agile">A cultural center to promote Hindu culture through various Indian arts forms. </p>
                
              </div>
            </div>
            <div class="agile">
              <div class="test-grid">

                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <p class="para-w3-agile">A cultural center to promote the dissemination of Vedas and Puranas. </p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    
    <div class="agile_w3_video">
    <div class="video-grid-single-page-agileits">
   {{--    <iframe width="100%" height="400" src="https://www.youtube.com/embed/_oOQ5UYKAKo" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe> --}}
      <iframe width="100%" height="380" src="https://www.youtube.com/embed/TrJ3INVpWvU" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </div>
  </div>


  

  
  
    <!--  //CONTENT  -->

@section('script')
@parent


@endsection
@stop
