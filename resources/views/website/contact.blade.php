@extends('website.layouts.main')
@section('content')

<div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">

            <ul class="w3_short">
                <li><a href="{{URL::route('home')}}">Home</a><span>|</span></li>
                <li>Contact</li>
            </ul>
        </div>
      </div>
      <marquee behavior="alternate"><span class="sliding">Officially Temple will start from Mid of February</span></marquee>

  
        <div class="container" style="padding-right: 0px; padding-left: 0px;">

            <div class="contact-form agile_inner_grids">
          <div class=" agile_wthree_inner_grids">
            <div class="wthree_head_section">
            <h4 style="color: #000;"> 1003 Stewart LN , NE Glen Burnie, MD.21060</h4>
            <h4 style="color: #000; font-size: 20px;"> Call Us : 410-766-1003</h4>
                <h3 class="w3l_header w3_agileits_header">Send <span>Message </span></h3>
            {{--    <h4 style="color: #000;"> 1003 Stewart LN , NE Glen Burnie, MD.21060</h4> --}}
            </div>
          </div>
    
    <div class="col-md-6 contact-form agile_inner_grids" style="padding: 0px;">
      
     {!!Form::open(array('route' => array('contact.post'), 'method' => 'POST','files'=>true,'id'=>'contact-form'))!!}
        <div class="fields-grid">
          <div class="styled-input agile-styled-input-top">
            <input type="text" name="name" required="">
            <label>Full Name</label>
            <span></span>
          </div>
          <div class="styled-input agile-styled-input-top">
            <input type="text" name="phone" required="">
            <label>Phone</label>
            <span></span>
          </div>
          <div class="styled-input">
            <input type="email" name="email" required="">
            <label>Email</label>
            <span></span>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="styled-input textarea-grid">
          <textarea name="message1" required=""></textarea>
          <label>Message</label>
          <span></span>
        </div>
      {{--   <input class="pull-right"  type="submit" value="SEND"> --}}

        {!!  Form::submit('Send', ['class' => 'wpcf7-form-control wpcf7-submit red-btn pull-right','id'=>'submit_contact']) !!}


            {!! Form::close() !!}
     
    </div>

      <div class="col-md-6 map" style="padding: 0px;">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4373.929610451966!2d-76.6124319893103!3d39.178465065393546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7fd111a186965%3A0x6a8293c9429b8249!2s1003+Stewart+Ln+NE%2C+Glen+Burnie%2C+MD+21060%2C+USA!5e0!3m2!1sen!2sin!4v1513688958677" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
      </div>

    <div class="clearfix"> </div>
          </div>
        </div>
  
    {{-- <div class="map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4373.929610451966!2d-76.6124319893103!3d39.178465065393546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7fd111a186965%3A0x6a8293c9429b8249!2s1003+Stewart+Ln+NE%2C+Glen+Burnie%2C+MD+21060%2C+USA!5e0!3m2!1sen!2sin!4v1513688958677" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
      </div> --}}



  


  
  
    <!--  //CONTENT  -->

@section('script')
@parent


@endsection
@stop
