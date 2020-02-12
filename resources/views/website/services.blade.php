@extends('website.layouts.main')


@section('page_title', 'Siddhivinaayak Temple - Services Page')

@section('description', 'Lord Ganesha is the chief deity of this powerful Pooja. He is considered the ‘God of Luck’ and he blesses his devotees with smooth success in all their endeavors!')

@section('content')

<h1></h1>
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">

      <ul class="w3_short">
        <li><a href="{{URL::route('home')}}">Home</a><span>|</span></li>
        <li>Services</li>
      </ul>
    </div>
</div>
<!-- <marquee behavior="alternate"><span class="sliding">Officially Temple will start from Mid of February</span></marquee> -->
 <div class="container">
  <div class="row">
        <div class="col-md-12 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3  bhoechie-tab-menu">
              <div class="list-group">
                 <a href="#Rituals" class="list-group-item active text-center">
                 <br/>Daily Rituals
                </a>
                <a href="#Religious" class="list-group-item  text-center">
                 <br/>Religious
                </a>
                <a href="#PooojaServices" class="list-group-item text-center">
                  <br/>Pooja Services
                </a>
                <a href="#Educational" class="list-group-item text-center">
                 <br/>Educational
                </a>
                <a href="#Miscellaneous" class="list-group-item text-center">
                 </h4><br/>Miscellaneous
                </a>
                <a href="#Cultural" class="list-group-item text-center">
                  <br/> Cultural
                </a>

                {{--   <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/> Community
                </a> --}}
                
              </div>
            </div>
            <div class="col-lg-9 col-md-9  bhoechie-tab">
                <!-- flight section -->
                  <div class="bhoechie-tab-content active" id="Rituals">
                    <center>
                    
                   
                    
                       <h3 style="margin-top: 0;color:#55518a">VRATA / VISHESHA POOJA (TEMPLE ONLY)</h3> <br>
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
                        <tbody>
                            <tr>
                                <td>MONDAY</td>
                                <td>Shiva Abhishekam - 06:30 PM</td>
                                <td>Aarti – 07:00 PM</td>
                               
                            </tr>
                            <tr>
                                <td>TUESDAY </td>
                                <td>Hanuman Abhishekam – 06:30 PM</td>
                                <td>Aarti – 07:00 PM</td>
                                
                            </tr>
                             <tr>
                                <td>WEDNESDAY </td>
                                <td>Ayyappa Abhishekam – 06:30 PM</td>
                                <td>Aarti – 07:00 PM</td>
                                
                            </tr>
                             <tr>
                                <td>THURSDAY </td>
                                <td>Sai Baba Abhishekam – 06:30 PM</td>
                                <td>Aarti – 07:00 PM</td>
                                
                            </tr>
                             <tr>
                                <td>FRIDAY </td>
                                <td>Durga Abhishekam – 06:30 PM</td>
                                <td>Aarti – 07:00 PM</td>
                                
                            </tr>
                             <tr>
                                <td>SATURDAY </td>
                                <td>-------</td>
                                <td>Aarti – 07:00 PM</td>
                                
                            </tr>
                             <tr>
                                <td>SUNDAY </td>
                                <td>Ganesha Abhishekam – 06:30 PM</td>
                                <td>Aarti – 07:00 PM</td>
                                
                            </tr>

                           

                          
                        </tbody>
                    </table>
                    </div>
           
                    
                     <br>
                   
                </div>
    
                <div class="bhoechie-tab-content " id="#Religious">
                    <center>
                    <h3 style="margin-top: 0;color:#55518a">Religious</h3><br>
                      <p style="text-align: justify;" >During one’s journey from mother’s womb to the last breath of life towards God, Vedic rituals are to be performed at the appropriate time, for a particular life event, to achieve great punya in one’s life time and for the next.</p><br>
                      <p style="text-align: justify;" >The present day time-starved busy life style does not allow many to preserve the teachings and Vedic rituals which are meant to be religiously followed to lead a peaceful, blissfully happy and prosperous life, facilitating a very content material life and to awaken and advance the soul towards spiritual upliftment.</p><br>
                      <p style="text-align: justify;" >Vedic rituals are being performed at the Temple daily with the prime goal of your peace, happiness & satisfaction in your life, for special days of your life & your time of emotional, physical & financial struggles.</p><br>

                      <p style="text-align: justify;" >You may e-mail the personal information required for this pooja: your Name, Gothram, Nakshatram. If you are not aware of this information, we can determine it if you provide your date of birth.</p><br>
                      <p style="text-align: justify;" >On the important day of your life, you are welcome to personally attend the ritual. If you cannot join us, the Center can include your name during daily rituals at the Center & mail the prasadam to you.</p><br>
                      <p style="text-align: justify;" >On appointment, the priest can perform the pooja at your preferred location. For providing your services & benefits, donation can be offered to the Center & dakshina to the Priest.</p>
                      <p style="text-align: justify;" >May God Bless you, your family & the entire humanity.</p><br>

                       <h3 style="margin-top: 0;color:#55518a">LOKAH SAMASTAAH SUKHINO BHAVANTU</h3>
                      <p style="text-align: justify;" >We perform all kinds of Parihara Pooja, all kinds of parayanam and japam, all kinds of Yantram, Mandalams.</p><br>
                      <p style="text-align: justify;" >We also do all poorva and apara karmas for different traditions like Aashwalayanam (Rig Vedam),Bodhayanam, Apasthamba (Yajur Vedam), Grahyanama (Sama Vedam)</p>
                     <br>
                    </center>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content" id="PooojaServices">
                    <center>
                    
                      <h3 style="margin-top: 0;color:#55518a">Pooja Services</h3><br>
                      <p style="text-align: justify;" >Lord Ganesha is the chief deity of this powerful Pooja. He is considered the ‘God of Luck’ and he blesses his devotees with smooth success in all their endeavors! Shri Ganesha is remembered by all his devotees at every moment of their lives. Ganesha is the remover of all obstacles in your life. Shri Ganesha is the symbol of auspiciousness, a miraculous combination of an elephant and a human, with four hands to bless his devotees.</p><br>
                       <h3 style="margin-top: 0;color:#55518a">VRATA / VISHESHA POOJA (TEMPLE ONLY)</h3> <br>
                        </center>

                    <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>POOJA</th>
                                <th>AT TEMPLE</th>
                                <th>AT  HOME</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.  Annaprasana</td>
                                <td>$51</td>
                                <td>$151</td>
                               
                            </tr>
                            <tr>
                                <td>2.  Hair Offering	</td>
                                <td>$51</td>
                                <td>--</td>
                                
                            </tr>
                            <tr>
                                <td>3.  Gruha Pravesham </td>
                                <td>--</td>
                                <td>$201</td>
                                
                            </tr>

                            <tr>
                                <td>4.  Grah Shanti</td>
                                <td>$151</td>
                                <td>$201</td>
                                
                            </tr>
                            <tr>
                                <td>5.  Any Homam </td>
                                <td>$101</td>
                                <td>$151</td>
                                
                            </tr>
                            <tr>
                                <td>6.  Namakarana </td>
                                <td>$51</td>
                                <td>$151</td>
                                
                            </tr>
                            <tr>
                                <td>7.  Engagement   </td>
                                <td>$101</td>
                                <td>$151</td>
                                
                            </tr>
                            <tr>
                                <td>8.  Punyahavachanam </td>
                                <td>$51</td>
                                <td>$151</td>
                                
                            </tr>
                            <tr>
                                <td>9.  Satyanarayana Puja </td>
                                <td>$101</td>
                                <td>$181</td>
                                
                            </tr>
                            <tr>
                                <td>10.  Seemantham </td>
                                <td>$151</td>
                                <td>$201</td>
                                
                            </tr>
                            <tr>
                                <td>11.  Shashti Poorthi </td>
                                <td>$201 </td>
                                <td>$301</td>
                                
                            </tr>
                             <tr>
                                <td>12.  Shatabhishekam </td>
                                <td>$201 </td>
                                <td>$301</td>
                                
                            </tr>
                             <tr>
                                <td>13.  Hiranya Shraddham </td>
                                <td>$51 </td>
                                <td>$101</td>
                                
                            </tr>
                             <tr>
                                <td>14.  Upanayanam <br>
Upanayanam (2days)
 </td>
                                <td>$151 <br> $301</td>
                                <td>$251 <br> $501</td>
                                
                            </tr>
                             <tr>
                                <td>15. Vidyarambhama </td>
                                <td>$51 </td>
                                <td>$151</td>
                                
                            </tr>
                             <tr>
                                <td>16. Vivaham </td>
                                <td>$151 </td>
                                <td>$251</td>
                                
                            </tr>
                             <tr>
                                <td>17. Griha Pravesham &
Satyanarayana Puja
 </td>
                                <td>-- </td>
                                <td>$301</td>
                                
                            </tr>
                           
                        </tbody>
                    </table>
                    </div>
           
                    
                     <br>
                   
                </div>
    
                <!-- hotel search -->
                
                <div class="bhoechie-tab-content" >
                	
                    <center>
                       <h3 style="margin-top: 0;color:#55518a">Educational</h3><br>
                      <p style="text-align: justify;" >The temple spearheads in promoting the learning of our scriptures and Sanskrit language. Classes are held regularly to teach children and adults various slokas, stotras, Ramayanam, Bhagavatam etc. Also regular Sanskrit classes and workshops are organized in the temple for children and adults. The temple has plans to start Music, Dance, Indian languages classes in addition to the academic related classes for students in the future. </p><br>
                       </center>


                       <h3 class="bars">Temple Timing  : Monday to Friday 5 pm to 9 pm and 
                       weekend 9 am to 9 pm </h3>
                       <h3 class="bars">Vedic classes for adults :By Satyanarayana Marathe
                       Sunday   5pm onwards </h3>
                       <h3 class="bars">Ganapati Atharva sheersha class    6 pm </h3>
		
                    
             
                </div>
                <div class="bhoechie-tab-content">
                   

                     <h3 style="margin-top: 0;color:#55518a">JAI SIDDHIVINAYKA</h3><br>
                      <p style="text-align: justify;" >This temple is known for bestowing better health to the devotees. The idol is believed to have special power and is considered a healer. The main Temple building has path-ways all around the sanctum sanctorum and also a large covered space (Mandapam) for devotees to assemble in front of the Lord for offering worship. On the North-West corner, a full-fledged Sannidhi for Sri Rama has been built and here He has taken abode with Seetha and Lakshmana with Anjaneya in attendance. The Gods are facing East. Rama’s role as the protector and ruler is signified here as Rama is seen carrying his bow, hence the name “Kothanda Rama” for the Lord here.</p><br>
                   
                </div>
                <div class="bhoechie-tab-content" id="Cultural">
                    <center>
                     <h3 style="margin-top: 0;color:#55518a">Cultural</h3><br>
                      <p style="text-align: justify;" >Siddhivinayka believes that the cultural events provide a learning experience for future generation on our traditions. The temple provides a platform for many music and dance teachers and students alike by encouraging them to participate and showcase their talent in our various special poojas. The temple organizes special concerts on the 1st Saturday of every month to encourage and nourish the local pool of talented and budding youngsters. In addition to that, Namasankeertanam and bhajans are organized every 2nd Saturday in our temple to spread our bhakthi culture and tradition.</p><br>
                       </center>
                   
                </div>
            </div>
        </div>
  </div>
</div>
<br>
  <style type="text/css">
          
/*  bhoechie tab */
div.bhoechie-tab-container{
  z-index: 10;
  background-color: #ffffff;
  padding: 0 !important;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  margin-top: 20px;
/*  margin-left: 50px;*/
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
}
div.bhoechie-tab-menu{
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 0;
}
div.bhoechie-tab-menu div.list-group{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a{
  margin-bottom: 0;
  color: black;
  font-size: 20px;
}
div.bhoechie-tab-menu div.list-group>a .glyphicon,
div.bhoechie-tab-menu div.list-group>a .fa {
  color: #5A55A3;
}
div.bhoechie-tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a.active,
div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
div.bhoechie-tab-menu div.list-group>a.active .fa{
  background-color: #3D3187;
  background-image: #5A55A3;
  color: #ffffff;
}
div.bhoechie-tab-menu div.list-group>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #5A55A3;
}

div.bhoechie-tab-content{
  background-color: #ffffff;
  /* border: 1px solid #eeeeee; */
  padding-left: 20px;
  padding-top: 10px;
}

div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}
        </style>






@section('script')
@parent

<script type="text/javascript">
  $(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script>



@endsection
@stop
