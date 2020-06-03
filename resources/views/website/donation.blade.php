@extends('website.layouts.main')

@section('page_title', 'Siddhivinaayak Temple - Contact Page')

@section('description', 'Lord Ganesha is the chief deity of this powerful Pooja. He is considered the ‘God of Luck’ and he blesses his devotees with smooth success in all their endeavors!')


<style>
  .btns-right {
     float:right; 
     margin-right:5%; 
   }

  .btn-submitpadding {
    padding-top: 7px;
    padding-bottom: 7px;
   }
</style>

@section('content')

<div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">

            <ul class="w3_short">
                <li><a href="{{URL::route('home')}}">Home</a><span>|</span></li>
                <li>Contact</li>
            </ul>
        </div>
      </div>
     
    
 <div class="clearfix"><br><br></div>

        <div class="container">
        <!-- <h4 style="color:#3D3187;"><b>DONATIONS TOWARDS TEMPLE UPCOMING PROJECTS:</b>  
                        <a href="{{ asset('website/images/Appeal.pdf') }}" target="_blank"><span style="font-size: 20px; background-color: orange;" class="button2"><b> Appeal Letter</b></span></a></h4><br>
                      
                       -->



                        <div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<h4 style="color:#3D3187;"><b>DONATIONS TOWARDS TEMPLE UPCOMING PROJECTS:</b>  </h4>
<div class="clearfix"><br></div>

    <div class="btns-right" style="margin-top:-20px;">
    <a href="{{ asset('website/images/Appeal.pdf') }}" target="_blank"><span style="font-size: 20px; background-color: orange;" class="button2"><b> Appeal Letter</b></span></a><br>
    <div class="clearfix"></div>
    <div class="clearfix"><br></div>

      </div>
  </div>







        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sahasra Naama Archana and Sahasra Modaka Pooja </th>
                                    <th><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=HZDWEKXTHFDBE&source=url" target="_blank"><span class="badge"> $ 51</span></a></th>
                                </tr>
                            </thead>
                            <tbody>
                               
                              
                                
                                <tr>
                                    <th>Donate $1 per day for a month - $30</th>
                                    <th><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=S2UJCBUHNL692" target="_blank"><span class="badge"> $ 1 </span></a></th>
                                </tr>
                                <tr>
                                    <th>Donate 50 cents per day for a month - $15</th>
                                    <th><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=FQY8J53ZAFD5L" target="_blank"><span class="badge"> $ 0.5 </span></a></th>
                                </tr>
                                
                                
                                
                                  <tr>
                                    <th> FundRaising Campaign - Construction Work </th>
                                    <th><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=P6YW8L85C9S82"" target="_blank"><span class="badge"> $251 </span></a></th>
                                </tr>
                                
                                
                                 <tr>
                                    <th> FundRaising Campaign - Construction Work </th>
                                    <th><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=99F7YEZA8JPYN"" target="_blank"><span class="badge"> $1000 </span></a></th>
                                </tr>
                                
                                 <tr>
                                    <th> FundRaising Campaign - Construction Work </th>
                                    <th><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3UEGWADBK2R2Q"" target="_blank"><span class="badge"> $3000 </span></a></th>
                                </tr>
                                
                                 <tr>
                                    <th> FundRaising Campaign - Construction Work </th>
                                    <th><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8ANDYRKHGYKV4"" target="_blank"><span class="badge"> $5000 </span></a></th>
                                </tr>
                                
                                  <tr>
                                    <th> FundRaising Campaign - Construction Work </th>
                                    <th><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6LHEF9GXGH3K2"" target="_blank"><span class="badge"> $10000 </span></a></th>
                                </tr>
                                
                                
                             
                            </tbody>
                        </table>
        </div>



        </div>
  


  
  
    <!--  //CONTENT  -->

@section('script')
@parent


@endsection
@stop
