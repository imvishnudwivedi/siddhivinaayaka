@extends('website.layouts.main')
@section('content')

<style type="text/css">
    @-webkit-keyframes blinker {
  from {opacity: 1.0;}
  to {opacity: 0.5;}
}
.blink{
  text-decoration: blink;
  -webkit-animation-name: blinker;
  -webkit-animation-duration: 1.6s;
  -webkit-animation-iteration-count:infinite;
  -webkit-animation-timing-function:ease-in-out;
  -webkit-animation-direction: alternate;
}
  </style>
  <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sankalpa Form</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body mx-3" style="padding: 0px;">
         <div class="col-sm-12">
         {!!Form::open(array('route' => array('sankalpa.posts'), 'method' => 'POST','files'=>true,'id'=>'contact-form'))!!}
              <br>
                <div class="contact-form-box">
                  <div class="col-md-6 form-selector" style="margin-bottom: 12px;">
                    <label>Full Name *</label>
                    <input type="text" class="form-control input-md" id="name" name="name" placeholder="Enter Your Name" required="">
                  </div>
                                  <div class="col-md-6 form-selector" style="margin-bottom: 17px;">
                    <label>Gotra</label>
                    <input type="text" class="form-control input-md" id="gotra" name="gotra" placeholder="Enter Your Gotra" >
                  </div>
                    <div class="clearfix"></div>
                  <hr>
                 
                  <div class=" col-md-6 form-selector" style="margin-bottom: 17px;">
                    <label>Nakshatra</label>
                    <input type="text" class="form-control input-md" id="nakshatra" name="nakshatra" placeholder="Enter Your Nakshatra" >
                  </div>
                
                
                  <div class="col-md-6 form-selector" style="margin-bottom: 17px;">
                    <label>Rashi</label>
                    <input type="text" class="form-control input-md" id="rashi" name="rashi" placeholder="Enter Your Rashi" >
                  </div>
                  <div class="clearfix"></div>
                  <hr>
               
                  <div class=" col-md-6 form-selector" style="margin-bottom: 12px;">
                    <label>Email *</label>
                    <input type="text" class="form-control input-md" id="email" name="email" placeholder="Enter Your Email" required="">
                  </div>
               
        
                 
                   <div class="col-md-6 form-selector" style="margin-bottom: 12px;">
                    <label>Phone Number *</label>
                     <input type="text" required="" class="form-control input-md" style="" placeholder="Enter Your Phone  Number"  id="phone_number" name="phone_number">
                     </div>
                <div class="clearfix"></div>
                   <br>

                
                  <br>
                  
                  <div class="form-selector pull-right" style="margin-right: 45PX;">
                   {!!  Form::submit('Submit', ['class' => 'btn btn-ar btn-primary','id'=>'submit_contact']) !!}
                    <button type="button" class="btn btn-ar btn-danger" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">Close</span>
                    </button>
                    </div>
                    
                    {!!Form::close()!!}
                  </div>
                </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
      
      </div>
    </div>
  </div>
</div>

     <div class="about" id="welcome">
    <div class="container">
   <div class="wthree_head_section">
        <h3 class="w3l_header w3_agileits_header two">Siddhivinaayak Temple celebrates New Year on January 1<sup>st</sup> 2019 - 8:00 AM to 11:00 AM</h3> <h4 style="text-align:center;">Ganesha Sahasranama Archana and Sahasra Modaka Pooja<br><br>



<div class="">

<h5><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=HZDWEKXTHFDBE&source=url" target="_blank"><span style="font-size: 18px;padding: 10px; margin-top: 5px;" class="label label-primary"> Sponsorship $51</span></a></h5><br>


    <button style="border-radius: 13px;" data-toggle="modal" data-target="#modalRegisterForm" class="button2" style="">&nbsp;&nbsp;&nbsp;Sankalpa Form &nbsp;&nbsp;&nbsp;</button> 

</div>


          <!-- <div class="col-md-6" style="margin-top: 10px;"><u><a  " target="_blank" style="border:1px solid #fff;border-radius:20px;text-align:center;color:orangered;" href="https://goo.gl/maps/G2YPA4vcEtv"><span class="blink" style="font-size: 15px; color: gold;padding-top:-10px;">Click for Driving Direction to Temple</span> </a></u></div> -->
          
      
           <!-- <div class="col-md-6" style="margin-bottom: 10px;"><u><a  " target="_blank" style="border:1px solid #fff;border-radius:20px;text-align:center;color:orangered;" href="https://siddhivinaayak.us12.list-manage.com/subscribe?u=97febd378bf46b8e602f27c78&id=620fec9917"><span class="blink" style="font-size: 15px; color: gold;padding-top:-10px;" >Click here for Volunteer sign up</span> </a></u>
           </div> -->
              </h4>
            <div class="clearfix"></div>
          
          
      </div>
     <div class="clearfix"></div>
     

       

        <div class="col-md-10 col-md-offset-1 about_agileinfo_grid_imgs1">
 
  <center>   <img src="{{ asset('website/images/newyear1.jpg') }}" alt="Sri Ganesh" />
      
       
 
       
     </div> 
     
 
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
      <iframe width="100%" height="380" src="https://www.youtube.com/embed/rEM7X7e5bVo" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </div>
  </div>


  


  
  
    <!--  //CONTENT  -->

@section('script')
@parent


@endsection
@stop
