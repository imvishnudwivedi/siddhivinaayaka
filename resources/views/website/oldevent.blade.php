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


 <div class="about" id="welcome" style="background-color: #3D3187">
    <div class="container">

           
        <div class="col-md-3">

  <a class=" navbar-brand" href="{{URL::route('home')}}" style="padding: 0px;"><img style="width: 96px; height: 96px;" src="{{ asset('website/images/bhajan.png') }}"></a>
  </div>
<div class="col-md-3 pull-right">
  <a class=" navbar-brand pull-right" href="{{URL::route('home')}}" style="padding: 0px;"><img style="width: 96px; height: 96px;" src="{{ asset('website/images/logo_final_Copy.jpg') }}"></a>

</div>
      <div class="wthree_head_section">
       <h3 class="w3l_header w3_agileits_header two">BHAJAN SANDHYA  <span style="font-size: 30px;">SIDDHIVINAYAK TEMPLE, GLEN BURNIE </span></h3>
      </div>
      <div class="agile_wthree_inner_grids">
<div class="wthree_head_section">
        <h3 class="w3l_header w3_agileits_header two" style="font-size: 28px;">SIDDHIVINAYAK TEMPLE presents 
BHAJAN SANDHYA  <span style="font-size: 30px;">&nbsp;</span></h3>
      </div>
        <div class="col-md-6 about_agileinfo">
          <h4 style="font-size: 25px;">An evening with very talented Artists - Mamlatdarnaji, ChandreshGanesh Jagtapjiand Himanshu Chaudhari </h4>
          <h4 style="background-color: orangered;">On Sunday, July 15, 2018 - <br>From 5.00pm to 7.00pm</h4>
          <h4 style="font-size: 15px;"> Followed by Mahaprasaadam</h4>

          <p style="font-size: 15px;" > Please bring all your family and friends for the charity of new upcoming temple </p>
        <p style="font-size: 15px;" >Your donation towards the temple will be greatly appreciated.</p>


        <hr>


<div class="wthree_head_section">
        <h3 class="w3l_header w3_agileits_header two" style="font-size: 28px;">Kanchi Kamakoti Seva Foundation, (Washington, DC) presents  <span style="font-size: 30px;">&nbsp;</span></h3>
      </div>
       <h4 style="font-size: 25px;"> Atirudra Sathachandi MahaYagna Sarva Shaka Sammelana Mahotsavam</h4>
      <p></p>
       <h4 style="background-color: orangered;">On July 16 to July 22, 2018  </h4>

       <p style="font-size: 15px;">For Loka Kshemam (Peace and Prosperity of all living being in the world) </p>
 <p style="font-size: 15px;">at Sri Bhakta Anjaneya Temple, MD 4143 Ayodhya Ijamsville, MD 21754</p>
  


          <p style="font-size: 15px;">PLEASE CONTACT CHIEF TEMPLE PRIEST</p>
            <p>Satyanarayana Marathe-410-766-1003,</p>
           <p> 1003 STEWART LN , NE GLEN BURNIE, MD.21060 </p>

        </div>
        <div class="col-md-6 about_agileinfo_grid_imgs">


          <img src="website/images/ganesh1.jpg" alt="vinayka" />
          <br>
           <center style="margin-top: 10px;">
                    
                   
                    
                       <h3 style="margin-top: 0; color: #fff;">TEMPLE SPECIAL EVENTS</h3>
                        <br>
                        </center>


                    <div class="table-responsive">
                    <table class="table table-bordered">
                   <!--      <thead>
                            <tr>
                                <th>MONDAY</th>
                                <th>Shiva Abhishekam - 06:30 PM</th>
                                <th>AT  HOME</th>
                                
                            </tr>
                        </thead> -->
                        <tbody style="color: #fff;">
                            <tr>
                                <td style="color: #fff;">Every Chaturthi</td>
                                <td style="color: #fff;">Ganesha Abhishekam, Bhajan, Maha Mangal Aarti & Prasaad  </td>
                                <td style="color: #fff;">From 07:00 PM – 08:30 PM</td>
                               
                            </tr>
                            <tr>
                                <td style="color: #fff;">Every Pournami </td>
                                <td style="color: #fff;">Samoohik Satyanarayan Puja, Aarti & Prasaad</td>
                                <td style="color: #fff;">From 07:00 PM – 08:00 PM</td>
                                
                            </tr>
                             <tr>
                                <td style="color: #fff;">Every Second Sunday </td>
                                <td style="color: #fff;">Ayyappa Abhishekam, Bhajans, Padi Pooja, Aarti & Prasaad</td>
                                <td style="color: #fff;">05:30 PM – 07:30 PM</td>
                                
                            </tr>
                             

                           

                          
                        </tbody>
                    </table>

                   <a href="website/images/2018festivalList.pdf" target="_blank">  <h4 style="background-color: orangered; font-size: 22px;">  Click here to Download 2018 Festival List </h4>
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
