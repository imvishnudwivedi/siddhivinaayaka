  <!--  LEFT MENU  -->
    <div class="left-menu" style="opacity: 1;">
        <!--  LOGO  -->
        <a class="logo" href="{{URL::route('home')}}">
              <img src="{{asset("/website/img/dam_logo.jpg") }}" alt="" class="img-responsive">

        <!--     fot<em class="glyph fa-bullseye"></em>hunter -->
        </a>
        <!--  //LOGO  -->

        <!--  NAVIGATION  -->
        <nav class="main-navi">
            <ul>
                <li>
                    <a {{{ (Request::is('/') ? 'class=active' : '') }}}  href="{{URL::route('home')}}" >
                        Home
                        <span class="dot"></span>
                        <span class="corner"></span>
                    </a>
                </li>
              
                <li>
                    <a {{{ (Request::is('about') ? 'class=active' : '') }}} href="{{URL::route('about')}}" >
                        About
                        <span class="dot"></span>
                        <span class="corner"></span>
                    </a>
                </li>

                <li >
                    <a {{{ (Request::is('my_art') ? 'class=active' : '') }}} href="{{URL::route('my_art')}}">
                        My Art
                        <span class="dot"></span>
                        <span class="corner"></span>
                    </a>
                </li>

                <li>
                    <a {{{ (Request::is('gallery') ? 'class=active' : '') }}} href="{{URL::route('gallery')}}">
                        Gallery
                        <span class="dot"></span>
                        <span class="corner"></span>
                    </a>
                </li>

                <li>
                    <a {{{ (Request::is('contact') ? 'class=active' : '') }}} href="{{URL::route('contact')}}">
                        Contact Us
                        <span class="dot"></span>
                        <span class="corner"></span>
                    </a>
                </li>
            </ul>
            <em id="showHideMenu" class="show-hide-menu glyph fa-bars" href=""></em>
        </nav>
        <!--  //NAVIGATION  -->

        <!--  TWITTER  -->
        <div class="twitter-block flexslider">
         {{--    <span class="glyph fa-twitter"></span> --}}
            
        <div class="flex-viewport" style="overflow: hidden; position: relative;">
        <ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-50px, 0px, 0px);">
        <li class="clone" aria-hidden="true" style="width: 220px; float: left; display: block;">
                    <div class="name">Oil paintings</div>
                    <p class="mini">Description on oil paintings.</p>
                   
                </li>
                <li class="" style="width: 220px; float: left; display: block;">
                    <div class="name">Acyclic</div>
                    <p class="mini">Description on acyclic.</p>
                  
                </li>
                <li class="" style="width: 220px; float: left; display: block;">
                    <div class="name">Pencil Work</div>
                    <p class="mini">Description on pencil work</p>
                  
                </li>
                <li class="flex-active-slide" style="width: 220px; float: left; display: block;">
                    <div class="name">Water color</div>
                    <p class="mini">Description on water work.</p>
                </li>
           
                </ul></div>
                {{-- <ol class="flex-control-nav flex-control-paging">
                <li><a class="">1</a></li>
                <li><a class="">2</a></li>
                <li><a class="flex-active">3</a></li>
                </ol> --}}
                <ul class="flex-direction-nav">
                <li><a class="flex-prev glyph fa-angle-left" href=""></a></li>
                <li><a class="flex-next glyph fa-angle-right" href=""></a></li>
                </ul></div>
        <!--  //TWITTER  -->



        <div class="clearfix"></div>
        <!--  SOCIAL ICONS  -->
        <div class="soc-icons">
           {{--  <a class="glyph fa-twitter" href=""></a> --}}
            <a class="glyph fa-facebook" href=""></a>
            <a class="glyph fa-google-plus" href=""></a>
            {{-- <a class="glyph fa-linkedin" href=""></a> --}}
         {{--    <a class="glyph fa-dribbble" href=""></a>
            <a class="glyph fa-pinterest" href=""></a> --}}
        </div>
        <!--  //SOCIAL ICONS  -->
        <p class="copy">
             <span class="copyRight">© 2016 Dig My Art</span> 
        <span class="pie">|</span>

      <span class="powered-by">Powered by <a rel="nofollow" href="http://www.dooziesoft.com/" target="_blank">DoozieSoft</a></span>
        </p>
    </div>
    <!--  //LEFT MENU  -->