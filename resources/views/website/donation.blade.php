@extends('website.layouts.main')
@section('content')


<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">

      <ul class="w3_short">
        <li><a href="{{URL::route('home')}}">Home</a><span>|</span></li>
        <li>Donation</li>
      </ul>
    </div>
  </div>
<marquee behavior="alternate"><span class="sliding">Officially Temple will start from Mid of February</span></marquee>


<div class="container">

<div class="grid_3 grid_5 wthree">
                  <center> <h3>PLEASE DONATE GENEROUSLY TO SUPPORT YOUR TEMPLE!</h3> </center> 
                    <div class="col-md-12 agileits-w3layouts">
                        <h4><b>DONATIONS TOWARDS TEMPLE UPCOMING PROJECTS:</b></h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Mantapa and Murthi sponsorship</th>
                                    <th><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=6CNYEWMCZ5C6Q" target="_blank"><span class="badge"> $ 10,001</span></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Siddhivinaayak Murthi sponsorship</th>
                                    <th><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=38MXZXRTXM4C2" target="_blank"><span class="badge"> $ 5,001</span></a></th>
                                </tr>
                                <tr>
                                    <th>Pancha (five) Modak sponsorship</th>
                                    <th><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=UE45M8WXKLWKU" target="_blank"><span class="badge"> $ 1,221</span></a></th>
                                </tr>
                                <tr>
                                    <th>Yeka (one) Modak sponsorship</th>
                                    <th><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=D4QET7C5PEQ3L" target="_blank"><span class="badge"> $ 251 </span></a></th>
                                </tr>
                                <tr>
                                    <th>Donate $1 per day for a month - $30</th>
                                    <th><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=S2UJCBUHNL692" target="_blank"><span class="badge"> $ 1 </span></a></th>
                                </tr>
                                <tr>
                                    <th>Donate 50 cents per day for a month - $15</th>
                                    <th><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=FQY8J53ZAFD5L" target="_blank"><span class="badge"> $ 0.5 </span></a></th>
                                </tr>
                              
                            </tbody>
                        </table>

                         <center> <h4><b>DONATION INFORMATION</h4></b> </center> 
 <center> <h5>How much would you like to donate?</h5> </center> 
                  <center>   	<h2>
                  	{{-- <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=FQY8J53ZAFD5L" target="_blank"><span class="label label-primary"> $0.5</span></a>
                  	 	<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=S2UJCBUHNL692" target="_blank"><span class="label label-primary"> $1</span></a> --}}
                        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=MBLNF3PV93N4Q" target="_blank"><span class="label label-primary"> $10.00</span></a>
                   <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=M6LTY3EKTXGLU" target="_blank"><span class="label label-primary"> $25.00</span></a></h2>
                      <h2>  <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8MUWNMAT6V2TG" target="_blank"><span class="label label-primary"> $50.00</span></a>
                        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QKXCP5FP3L5KU" target="_blank"><span class="label label-primary"> $100.00</span></a>
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=VUV2XM7MAY8LJ" target="_blank"><span class="label label-primary"> $500.00</span></a>
                     
                    </h2></center>

                  {{--   <div class="input-group" style="width: 30%;">
                           <span class="input-group-addon">$</span> <input style="height: 50px;"  type="text" class="form-control" placeholder="" value="">
                            
                        </div> --}}
                        
                    </div>

              {{--       <div class="col-md-6 w3-agileits">




                         <center> <h4><b>DONER INFORMATION</h4></b> </center> 


                        
					
			<form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>




<div class="form-group">
  <label class="control-label">First Name</label>  
  <div class="inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>



<div class="form-group">
  <label class=" control-label" >Last Name</label> 
    <div class=" inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

       <div class="form-group">
  <label class=" control-label">E-Mail</label>  
    <div class=" inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>



       
<div class="form-group">
  <label class=" control-label">Phone #</label>  
    <div class=" inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="(561)12345-67890" class="form-control" type="text">
    </div>
  </div>
</div>


      
<div class="form-group">
  <label class=" control-label">Address</label>  
    <div class=" inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>


 
<div class="form-group">
  <label class=" control-label">City</label>  
    <div class=" inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="city" placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div>

   



<div class="form-group">
  <label class=" control-label">Postal Code</label>  
    <div class=" inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="postal_code" placeholder="Postal Code" class="form-control"  type="text">
    </div>
</div>
</div>

  
<div class="form-group">
  <label class=" control-label">Special Notes</label>
    <div class=" inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="comment" placeholder="Special Notes"></textarea>
  </div>
  </div>
</div>


<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<div class="form-group pull-right">
  <label class=" control-label"></label>

    <button type="submit" class="btn btn-warning" >Donate <span class="glyphicon glyphicon-send"></span></button>
 
</div>

</fieldset>
</form>
</div> --}}

			
                     



                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>






@section('script')
@parent

@endsection
@stop

