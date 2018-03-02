@extends('website.layouts.main')
@section('content')

<link href="{{ asset("/website/calendar/fullcalendar.min.css ")}}" rel="stylesheet" type="text/css" />
<link href="{{ asset("/website/calendar/fullcalendar.print.min.css ")}}" rel="stylesheet" type="text/css" media='print' />
<style type="text/css">
  body {
    margin: 40px 10px;
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 1100px;
    margin: 0 auto;
  }
</style>
@section('content')

<div class="row">
  <div class="col-md-12">

   <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title"></h3>
      <div class="box-tools pull-right">
        <!-- <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button> -->
      
      </div>
    </div>
    <div class="box-body table-responsive no-padding">
     <div id='calendar'></div>



   </div>
 </div>
</div>
</div>



<input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
<!-- Add event -->
<div class="modal fade" id="event_details" aria-hidden="true"  data-keyboard="false">
  <div class="modal-dialog" style="margin-left:250px;">
    <div class="modal-content" >
      <div class="modal-header">

        <h4 class="modal-title">Event</h4>
        <button type="button" class="close" 
      data-dismiss="modal">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>

      </div>


     <div class="modal-body">

      <form class="addEvent" role="form" id="event_form">

  
<input type="hidden" id="edit_id"  value="0">
<div style="background:lightblue;border:1px solid #cccccc;padding: 10px;" contextmenu="mymenu">
Name : <span id="event_name"></span></div><br>

<div style="background:lightblue;border:1px solid #cccccc;padding: 10px;" contextmenu="mymenu">
Description : <span id="event_description"></span></div><br>

<!-- <div style="background:lightblue;border:1px solid #cccccc;padding: 10px;" contextmenu="mymenu">
From Date : <span id="event_from_date"></span></div><br>

<div style="background:lightblue;border:1px solid #cccccc;padding: 10px;" contextmenu="mymenu">
From time : <span id="event_from_time"></span></div><br>

<div style="background:lightblue;border:1px solid #cccccc;padding: 10px;" contextmenu="mymenu">
To Date : <span id="event_to_date"></span></div><br>

<div style="background:lightblue;border:1px solid #cccccc;padding: 10px;" contextmenu="mymenu">
To Time : <span id="event_to_time"></span></div><br> -->
</form>
</div>

<div class="modal-footer">
  <div class="col-md-2 pull-right">
    <button type="button" class="btn btn-block btn-danger btn-block" data-dismiss="modal">Close</button>
  </div>

 
</div>
</div>
</div>
</div>



@endsection

@section('script')
@parent



<script src="{{ asset ("/website/calendar/moment.min.js") }}"></script> 
{{-- <script src="{{ asset ("/website/calendar/jquery.min.js") }}"></script>  --}}
<script src="{{ asset ("/website/calendar/fullcalendar.min.js") }}"></script> 
<script type="text/javascript">

  var today=<?php echo json_encode($today_date) ?>;
var token=$("#token").val();

var wd='<option value="0">Select Option</option>';
for(var g=1;g<32;g++){
  wd+='<option>'+g+'</option>';
}
$('#month_day').html(wd).selectpicker();




  $(document).ready(function() {
    $('#calendar').fullCalendar({
      header: {
        left: '',
        center: 'title',
        right: 'prev,next today'
        // right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: today,
            navLinks: true, // can click day/week names to navigate views
            timezone:'Asia/Kolkata',
            weekNumbers: true,
            weekNumbersWithinDays: true,
            weekNumberCalculation: 'ISO',
            selectable: true,
            eventLimit: true, // allow "more" link when too many events
            editable: true,
            events: [
             
            ],
            select: function(start, end, allDay) {
            

            },
           
            eventClick: function(event, jsEvent, view) { 
              
console.log(event,11);
              $('#delete_event_div').show();
              $("#edit_id").val(event.id);
              
              $("#event_details").modal('show');
              $("#event_name").text(event.title);
              $("#event_description").text(event.description);
              $("#event_from_time").text(event.from_time);
              $("#event_to_time").text(event.to_time);
              /*$("#event_to_date").text(moment(event.end.format()).format('DD-MM-YYYY'));
              $("#event_from_date").text(moment(event.start.format()).format('DD-MM-YYYY'));*/
             
             
            $(".form-control").attr('disabled','disabled');



                
        },


        eventDrop: function(event, delta, revertFunc) {

                     // alert(event.title + " was dropped on " + event.start.format());

                     var from_date_time=moment(event.start.format()).format('YYYY-MM-DD')+' '+moment(event.start.format()).format('h:mm:ss');
                     var to_date_time=moment(event.end.format()).format('YYYY-MM-DD')+' '+moment(event.end.format()).format('h:mm:ss');

                     updateDateTime(event.id,from_date_time,to_date_time);
                   },
                   eventResize: function(event, delta, revertFunc) {

                    var from_date_time=moment(event.start.format()).format('YYYY-MM-DD')+' '+moment(event.start.format()).format('h:mm:ss');
                    var to_date_time=moment(event.end.format()).format('YYYY-MM-DD')+' '+moment(event.end.format()).format('h:mm:ss');
                  updateDateTime(event.id,from_date_time,to_date_time);
                  }


        });  // end of calendar



var myCalendar=<?php echo json_encode($events)?>;
console.log("myCalendar");
console.log(myCalendar);
for (var i = 0; i < myCalendar.length; i++) {
  var date = new Date(myCalendar[i]['event_date']);
  var d = date.getDate();
  var m = date.getMonth();
  var y = date.getFullYear();
  var ss=moment(myCalendar[i]['event_date']).toString();


  $('#calendar').fullCalendar('renderEvent',{

    title: myCalendar[i]['name'],
    start: myCalendar[i]['event_from_date_time'],
    end: myCalendar[i]['event_to_date_time'],
    id:myCalendar[i]['id'],
    description:myCalendar[i]['description'].replace(/(<p[^>]+?>|<p>|<\/p>)/img, ""),
    from_time:myCalendar[i]['format_from_time'],
    to_time:myCalendar[i]['format_to_time'],
                        },true ); //Stick the event

};


disableDayOnclick();



$('.fc-prev-button').click(function(){
  disableDayOnclick();
});


$('.fc-next-button').click(function(){
   disableDayOnclick();
});



$('body').on('click', '#addEvent', function(){
  console.log("add");


  var type = $('#type').val();
  var tagColor = $('.event-tag > span.selected').attr('data-tag');
  var from_time = $('#from_time').val();
  var to_time = $('#to_time').val();
  var to_date = $('#to_date').val();

  var subject = $('#subject').val();
  var description = $('#description').val();
  var edit_id = $('#edit_id').val();



  if (type != 0 && from_time != '' && subject !='') {
                        //Render Event

                        var token=$("#token").val();
                        var date=moment($('#getStart').val()).format('YYYY-MM-DD');
                        var subject=$("#subject").val();

                        $.ajax({
                          type:'POST',
                          url:"{{route('storeCalendarEvents')}}",
                          data:{_token:token,type:type,tag_color:tagColor,from_time:from_time,event_date:date,subject:subject,to_time:to_time,description:description,edit_id:edit_id,to_date:to_date},
                        }).done(function(result){
                          console.log(result);

                        });
                        showMessage("success","saved successfully");
                        window.location.reload();
                        $('#event_details form')[0].reset()
                        $('#event_details').modal('hide');
                      }
                      else {
                       $("#error_message").fadeIn(100).delay(4000).fadeOut(100);
                       $('#eventName').closest('.form-group').addClass('has-error');
                     }
                   });


});


function disableDayOnclick() {
  $("table > thead > tr > td a").each(function(idx) {
 
  $(this).bind("click", function (e) {
                        e.stopImmediatePropagation();
                        e.preventDefault();
                        this.blur();
                        // alert('no way! ');
                        return false;
                    });
  
});
}

function getFormatedTime(time) {
  var t=time.split(":");

  var hours = t[0];
  var minutes = t[1];

  var strTime = hours + ':' + minutes;
  return strTime;
}

function updateDateTime(event_id,from_date_time,to_date_time){
  $.ajax({
    type:'POST',
    url:"{{route('moveCalendarEvents')}}",
    data:{_token:token,id:event_id,from_date_time:from_date_time,to_date_time:to_date_time},
  }).done(function(result){
    console.log(result);

  });
}

</script>
@stop