<div class="main_section_agile" id="home">
    <div class="agileits_w3layouts_banner_nav">

      
      <nav class="navbar navbar-default ">
        

        <div class="navbar-header navbar-left">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
<a class=" navbar-brand" href="{{URL::route('home')}}" style="padding: 0px;"><img style="width: 96px; height: 96px;" alt="Sri Ganesh" src="{{ asset('website/images/logo_final_Copy.jpg') }}" ></a>
<a class=" navbar-brand1" href="{{URL::route('home')}}" style="padding: 0px;"><img style="width: 70px; height: 70px;" alt="Sri Ganesh" src="{{ asset('website/images/logo_final_Copy.jpg') }}" ></a>

    <!-- div class="col-md-3">
<a class="navbar-brand" href="#hero-area"><img src="website/images/logo_mobile.png"></a>
</div>
       -->    

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" style="    padding-top: 22px;">
          <nav class="menu-hover-effect menu-hover-effect-4">
            <ul class="nav navbar-nav">
              <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{URL::route('home')}}" class="hvr-ripple-in"> Home</a></li>
              <!-- <li><a href="about.html" class="hvr-ripple-in">Temple</a></li> -->
              <li class="{{ Request::is('about') ? 'active' : '' }} || {{ Request::is('priests') ? 'active' : '' }} ">
                <a href="#" class="dropdown-toggle hvr-ripple-in" data-toggle="dropdown">Temple <b class="fa fa-caret-down" aria-hidden="true"></b></a>
                <ul class="dropdown-menu agile_short_dropdown">
                  <li><a href="{{URL::route('about')}}">About</a></li>
                  <li><a href="{{URL::route('priests')}}">Priest</a></li>
                   <li><a href="{{URL::route('my_calender')}}">Calendar</a></li> 

                </ul>
              </li>
              <li class="{{ Request::is('events') ? 'active' : '' }}"><a href="{{URL::route('events')}}" class="hvr-ripple-in">Events</a></li>
              <!-- <li><a href="#" class="hvr-ripple-in">Services</a></li> -->
              
              <li class="{{ Request::is('services') ? 'active' : '' }}"><a href="{{URL::route('services')}}" class="hvr-ripple-in">Services</a></li>

              <li class="{{ Request::is('temple_hall_rental') ? 'active' : '' }}"><a href="{{URL::route('temple_hall_rental')}}" class="hvr-ripple-in">Temple Hall Rental</a></li>
             
             
              <li class="{{ Request::is('donation') ? 'active' : '' }}"><a href="{{URL::route('donation')}}" class="hvr-ripple-in">Donation</a></li>
           {{--    <li class="{{ Request::is('gallery') ? 'active' : '' }}"> <a href="{{URL::route('gallery')}}" class="hvr-ripple-in">Gallery</a></li> --}}

              <li class="{{ Request::is('gallery') ? 'active' : '' }} || {{ Request::is('video') ? 'active' : '' }} ">
                <a href="#" class="dropdown-toggle hvr-ripple-in" data-toggle="dropdown">Gallery <b class="fa fa-caret-down" aria-hidden="true"></b></a>
                <ul class="dropdown-menu agile_short_dropdown">
                  <li><a href="{{URL::route('gallery_folder')}}">Photos</a></li>
                  <li><a href="{{URL::route('video')}}">Video</a></li>
                

                </ul>
              </li>
              
              <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{URL::route('contact')}}" class="hvr-ripple-in">Contact</a></li>
            </ul>
          </nav>

        </div>
      </nav>
      <div class="clearfix"> </div>
    </div>
  </div>
