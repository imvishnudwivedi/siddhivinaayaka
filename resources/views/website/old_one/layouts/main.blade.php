<!DOCTYPE html>

<html lang="en" class="js no-touch backgroundsize csstransforms3d csstransitions" style="padding:0;">

<head>

<title>Welcome to Siddhivinaayak Temple</title>
 <meta charset="utf-8">

  <!-- custom-theme -->
   <meta name="Description" content="Lord Ganesha is the chief deity of this powerful Pooja at 1003 Stewart LN , NE Glen Burnie, MD.21060"/>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="author" content="Marathe">

  <meta name="keywords" content="Promote Hindu traditions, values, culture and heritage including music" />
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('website/images/logo_final_Copy.jpg') }}">


  <script type="application/x-javascript">

    addEventListener("load", function () {

      setTimeout(hideURLbar, 0);

    }, false);



    function hideURLbar() {

      window.scrollTo(0, 1);

    }

  </script>

   <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"

      rel="stylesheet">

  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">





<title>@yield('page_title'," Siddhivinayka")</title>





<!--  Style  -->
<link rel="stylesheet" type="text/css" href="{{ asset("/website/css/bootstrap.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("/website/css/style.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("/website/css/blog.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("/website/css/flexslider.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("/website/css/font-awesome.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("/website/css/owl.carousel.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("/website/css/chocolat.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("/website/css/single.css") }}">
<link rel="stylesheet" type="text/css" href="{{ asset("/website/css/team.css")}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />


  

</head>





   

  <div id="page"> 

<!--     <div class="col-md-12">

 -->    @include('website.layouts.header')



    <!-- End Header -->



    @yield('content')



    <!-- End content -->



    <!-- footer 

      ================================================== -->

    @include('website.layouts.footer')

    <div id="customizer" class="s-close">
      <span class="corner"><span class="cog"></span></span>
      <div id="options" class="visible">
      
        <div class="col-sm-12">
         {!!Form::open(array('route' => array('subscribe.posts'), 'method' => 'POST','files'=>true,'id'=>'contact-form','name'=>'myForm1','onsubmit'=>'return validateFormEnq()'))!!}
              <br>
                <div class="contact-form-box">
                  <div class="form-selector">
                    <label>Name</label>
                    <input type="text" class="form-control input-sm" id="name" name="name" required="">
                  </div>
                  <br>
               
                  <div class="form-selector">
                    <label>Email</label>
                    <input type="text" class="form-control input-sm" id="email" name="email" required="">
                  </div>
                  <br>
        
                  <div class="form-selector">


                   <div class="form-group @if($errors->first('countries_id')) has-error @endif" id="country_div" style="width: 80%;">
                     {!!Form::label('countries_id','Country *')!!}
                     {!! Form::countrySelect1('countries_id',231) !!}
                     <small class="error" hidden="true"></small>
                   </div>

                 </div>
                 <div class="form-group @if($errors->first('country_id')) has-error @endif" id="country_div" style="width: 50%;" >
                   {!!Form::label('country_id','Country Code *')!!}
                   {!! Form::countrySelect('country_id',231)!!}
                 </div>
 <div class="form-selector">
        <label>Mobile</label>
                     <input type="text" required="" class="form-control input-sm" style=""  id="phone_number" name="phone_number">
                     </div>
                
                   <br>

                  <div class="form-selector">
                    <label>Message</label>
                    <textarea class="form-control input-sm" rows="2" id="comment" name="comment"></textarea>
                 {{--   <input type="textarea" class="form-control input-sm" id="message1" name="message1" required=""> --}}
                  </div>
                  <br>
                  
                  <div class="form-selector pull-right" style="
    margin-right: 45PX;
">
                   {!!  Form::submit('Subscribe', ['class' => 'btn btn-ar btn-primary','id'=>'submit_contact']) !!}
                    </div>
                    {!!Form::close()!!}
                  </div>
                </div>
              </div> 

        <div class="options-segment clearfix colors-sel">
         
        </div>  
      </div>



    <!-- End footer -->

     





       

 </div>



    </div>



 





@section('script')









<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery/2.1.3/jquery.min.js"></script>  





<script type="text/javascript" src="{{ asset("/website/js/jquery-2.1.4.min.js") }}"></script>





<script type="text/javascript" src="{{ asset("/website/js/jquery.waypoints.min.js") }}"></script>

<script type="text/javascript" src="{{ asset("/website/js/jquery.countup.js") }}"></script>
<script type="text/javascript" src="{{ asset("/website/js/style_switch_custom.js") }}"></script>


<script>

    $('.counter').countUp();

  </script>



<script type="text/javascript" src="{{ asset("/website/js/responsiveslides.min.js") }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>


  <script>

      // You can also use "$(window).load(function() {"
$('#countries_id').selectpicker();
$('#country_id').selectpicker();
$('#country_id').attr('disabled',true);
      $(function () {


        $('#countries_id').change(function(){
// alert($('#countries_id').val());
          $('#country_id').selectpicker('val',$('#countries_id').val());
 });
        $("#slider").responsiveSlides({

          auto: true,

          nav: true,

          manualControls: '#slider3-pager',

        });

      });

    </script>



<script type="text/javascript" src="{{ asset ("/website/js/simplePlayer.js") }}"></script>

<script>

    $("document").ready(function () {

      $("#video").simplePlayer();

    });

  </script>



<script type="text/javascript" src="{{ asset("/website/js/modernizr-2.6.2.min.js

") }}"></script>

<script type="text/javascript" src="{{ asset("/website/js/jquery.chocolat.js") }}"></script>

<script type="text/javascript ">

    $(function () {

      $('.portfolio-grids a').Chocolat();

    });

  </script>





<script type="text/javascript" src="{{ asset ("/website/js/owl.carousel.js") }}"></script>

<script>

    $(document).ready(function () {

      $("#owl-demo2").owlCarousel({

        items: 1,

        lazyLoad: false,

        autoPlay: true,

        navigation: false,

        navigationText: false,

        pagination: true,

      });

    });

  </script>





<script type="text/javascript" src="{{ asset("/website/js/bootstrap-3.1.1.min.js") }}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111717454-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111717454-1');
</script>
























     @show

     





</body>

</html>