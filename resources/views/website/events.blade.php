@extends('website.layouts.main')
@section('content')


<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">

      <ul class="w3_short">
        <li><a href="{{URL::route('home')}}">Home</a><span>|</span></li>
        <li>Events</li>
      </ul>
    </div>
</div>
<!-- <marquee behavior="alternate"><span class="sliding">Officially Temple will start from Mid of February</span></marquee> -->


 <div class="about" id="welcome" style="background-color: #fff">
    <div class="container">

           
        <div class="col-md-3">

  <a class=" navbar-brand" href="{{URL::route('home')}}" style="padding: 0px;"><img style="width: 96px; height: 96px;" src="{{ asset('website/images/bhajan.png') }}"></a>
  </div>
<div class="col-md-3 pull-right">
  <a class=" navbar-brand pull-right" href="{{URL::route('home')}}" style="padding: 0px;"><img style="width: 96px; height: 96px;" src="{{ asset('website/images/logo_final_Copy.jpg') }}"></a>

</div>
      <div class="wthree_head_section">
       <h3 class="w3l_header w3_agileits_header two" style="color:#000;">New Year Celebration</h3>

      </div>

      <div class="agile_wthree_inner_grids">
      <center>  <h5 style="color: #000 ; font-size: 30px;">Start the new year on the right note with the blessings of Sri Ganesha</h5></center> 
      <hr style="border-top: 2px solid #ffb500;
    display: block;
    width: 500px;
    content: "";
    margin: 8px auto 0;">

        <div class="col-md-6 col-md-offset-3 about_agileinfo">
           <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Day</th>
                                <th>Time</th>
                               
                                <th>Description</th>
                                 
                                 
                                
                            </tr>
                        </thead>
                        <tbody style="color: #000;">
                            <tr>
                                <td style="color: #000;">1/11/2018</td>
                                <td style="color: #000;">Tuesday</td>
                                <td style="color: #000;">8.00 AM</td>
                                <td style="color: #000;">SAHASRA NAAMA ARCHANA</td>
                                
                               
                            </tr>
                            <tr>
                                <td style="color: #000;">1/11/2018</td>
                                <td style="color: #000;">Tuesday</td>
                                <td style="color: #000;">9.00 AM</td>
                                <td style="color: #000;">SAHARSRA MODAKA POOJA</td>
                               
                                
                            </tr>
                            
                            
                           

                          
                        </tbody>
                    </table>
                  </div>

               
            </div>

             

        </div>
        <div class="clearfix"></div>

        <div class="agile_wthree_inner_grids">
            <div class="col-md-4 about_agileinfo_grid_imgs">

          <img   src="website/images/vinayka.jpg" alt="vinayka" />
        </div>

        <div class="col-md-8 about_agileinfo_grid_imgs">


        
          
           <center style="margin-top: 10px;">
                    
                   
                    
                       <h3 style="margin-top: 0; color: #000;">TEMPLE SPECIAL EVENTS</h3>
                        <br>
                        </center>


                    <div class="table-responsive">
                    <table class="table table-bordered">
                 
                        <tbody style="color: #000;">

                           <tr>
                                <td style="color: #000;">Navratri Every Day &nbsp;&nbsp;&nbsp;&nbsp; (oct-9 to oct-18)</td>
                                <td style="color: #000;">Navratri Dandiya Rass </td>
                                <td style="color: #000;">From 06:00 PM – 10:00 PM</td>
                               
                            </tr>
                            <tr>
                                <td style="color: #000;">Every Chaturthi</td>
                                <td style="color: #000;">Ganesha Abhishekam, Bhajan, Maha Mangal Aarti & Prasaad  </td>
                                <td style="color: #000;">From 07:00 PM – 08:30 PM</td>
                               
                            </tr>
                            <tr>
                                <td style="color: #000;">Every Pournami </td>
                                <td style="color: #000;">Samoohik Satyanarayan Puja, Aarti & Prasaad</td>
                                <td style="color: #000;">From 07:00 PM – 08:00 PM</td>
                                
                            </tr>
                             <tr>
                                <td style="color: #000;">Every Second Sunday </td>
                                <td style="color: #000;">Ayyappa Abhishekam, Bhajans, Padi Pooja, Aarti & Prasaad</td>
                                <td style="color: #000;">05:30 PM – 07:30 PM</td>
                                
                            </tr>
                             

                           

                          
                        </tbody>
                    </table>

                   <a href="website/images/2018festivalList.pdf" target="_blank">  <h4 style="background-color: orangered; font-size: 22px;">  Click here to Download 2018 Festival List </h4>   </a>
                    </div>
               
                </div>
          
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

<div class="container">




</div>






@section('script')
@parent



@endsection
@stop
