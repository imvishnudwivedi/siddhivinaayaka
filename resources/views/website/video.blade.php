@extends('website.layouts.main')
@section('content')


<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">

      <ul class="w3_short">
        <li><a href="{{URL::route('home')}}">Home</a><span>|</span></li>
        <li>Video</li>
      </ul>
    </div>
</div>
<!-- <marquee behavior="alternate"><span class="sliding">Officially Temple will start from Mid of February</span></marquee> -->
<div class="container">
	<div class="col-md-4">
    <div class="video-grid-single-page-agileits">
      
      <iframe width="100%" height="380" src="https://www.youtube.com/embed/TrJ3INVpWvU" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </div>
  </div>
    <div class="col-md-4">
    <div class="video-grid-single-page-agileits">
      
      <iframe width="100%" height="380" src="https://www.youtube.com/embed/1sPe_WLlJKw" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </div>
  </div>
  <div class="col-md-4">
    <div class="video-grid-single-page-agileits">
      
      <iframe width="100%" height="380" src="https://www.youtube.com/embed/5AEpLi2L-Lw" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </div>
  </div>
</div>
 






@section('script')
@parent



@endsection
@stop
