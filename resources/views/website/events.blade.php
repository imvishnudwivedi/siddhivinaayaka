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
	<br><br><br><br><br>

<h1 class="bars">Upcoming....... </h1>
<br><br><br><br><br><br><br><br>
</div>






@section('script')
@parent



@endsection
@stop
