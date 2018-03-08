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
<div class="container">
  <div class="admin">
    <h3 style="color: #fff;">On March 10 , 2018 Saturday "Holy Celebration"</h3>
    <ol>
          <p>Timing  : 2:00 PM to 5:00 PM</p>
           <p>Colors, Music, Holy Fire </p>
         
          </ol>
         
        </div>
          <div class="admin">
    <h3 style="color: #fff;">On March 18 , 2018 Sunday "Ugadi - Gudi Padwa" </h3>
    <ol>
          <p> 9:00 AM  - Ganesh Pooja</p>
          <p>  11:00 AM - Sai Bhajan</p>
           <p>  1:00 PM - Maha Prasaad</p>
            <p>  4:00 PM - Open House Formation of New Committee </p>

             <p>  5:00 PM - Panchanga Sravana and Music</p>
         
          </ol>
         
        </div>
          <div class="admin">
    <h3 style="color: #fff;">On March 25 , Shri Rama Navami</h3>
    <ol>
          <p>9:00 AM onwards</p>
         
          </ol>
         
        </div>




</div>






@section('script')
@parent



@endsection
@stop
