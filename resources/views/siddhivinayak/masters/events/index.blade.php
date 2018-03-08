@extends('siddhivinayak.layouts.dashboard')

@section('title', 'Events')

@section('page_title', 'Events')

@section('content')

<div class='row' style="padding:2px;">

 <div class="box box-primary">
      <div class="box-header with-border">
       <div class="box-body table-responsive no-padding">

   
        <div class="clearfix"></div>
        
       <div class="box-header with-border">
        <h3 class="box-title">List of Events</h3>
      </div>
        <div class="col-md-12">
          <div class="pull-right">
            
            <a href="{{route('siddhivinayak.masters.events.create')}}" class="btn bg-green margin" data-toggle="tooltip" data-placement="bottom" title="Click here to add event" id="add_event">
             <i class="glyphicon glyphicon-pencil"></i> Add 
           </a>
    
         
        </div><div class="clearfix"></div>

    
        <table class="table table-bordered" id="view">
          <thead>
            <tr class="bg-blue">
         
              <th>Event Name</th>
              <th>Description</th>
              <th>From Date</th>
              <th>To Date</th>  
              <th>Status</th>
              <th width="10%">Action</th>
            
            </tr>  

           
        </thead>
          <tbody id="row">
          @foreach($events as $ev)
            <tr style="page-break-inside: avoid;" tabindex="-1" data-toggle="popover" data-placement="top" data-trigger="focus" data-html="true" data-content="Created at: {{getFormatedDate($ev->created_at)}} <br> Updated at:{{getFormatedDate($ev->updated_at)}}">
            
              
              <td>{{$ev->name}}</td>
              <td>{{$ev->description}}</td>
              <td>{{getFormatedDate($ev->from_date)}}</td>
              <td>{{getFormatedDate($ev->to_date)}}</td>   

              @if($ev->deleted_at==null)
              <td><i class="fa fa-check text-green"></i></td>
              @else
              <td><i class="fa fa-times-circle-o text-red"></i></td>
              @endif

                <td>
                <a href="{{URL::to('/')}}/siddhivinayak/masters/events/{{$ev->id}}/edit" class="td-action-btn point-this" data-toggle="tooltip" data-placement="top" title="Edit">
                  <i class="glyphicon glyphicon-edit"></i>
                </a>

               @if($ev->deleted_at==null)
                  <a href="{{URL::to('/')}}/siddhivinayak/masters/events/deactivate/{{$ev->id}}" class="td-action-btn text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Deactivate" onclick="return confirm_delete('Deactivate'); ">
                    <i class="fa fa-lock text-red" style='font-size:18px;'></i>
                  </a>
                @else
                  <a href="{{URL::to('/')}}/siddhivinayak/masters/events/deactivate/{{$ev->id}}" class="td-action-btn text-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Activate" onclick="return confirm_delete('Activate');">
                    <i class="fa fa-lock text-red" style='font-size:18px;'></i>
                  </a>
                @endif
              </td>

            </tr>
            @endforeach 
          </tbody>
          <div class="clearfix"></div>

        </table>
     

        <div class="clearfix"></div>
        
        
      </div>
       
    </div>
  </div><!-- /.box -->
</div><!-- /.col -->
</div><!-- /.row -->

@endsection

@section('script')  
@parent

<script type="text/javascript">

events=<?php echo json_encode($events); ?>

 $(function(){
  $('.filter').multifilter({'target':$('#view')});
  $('input[name=ch]:radio').attr('checked',false);


  @if(Session::has('message'))
  $.notify("{{Session::get('message')}}",{
    type:'{{Session::get("er_type")}}',
  });
  @endif





});


   function confirm_delete(status){
    if (!confirm('Do you really want to '+status+'?')) {
    return false;
  }
}

</script>
@stop