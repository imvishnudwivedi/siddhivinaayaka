@extends('family
.layouts.dashboard')

@section('title', 'Career')

@section('page_title_sub', 'Manage Career')

@section('content')
<div class='row'>
  <div class='col-md-12'>
    <!-- Box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">List of Career</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          {{-- <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button> --}}
        </div>
      </div>

      <div class="box-body table-responsive no-padding">
        <div class="alert alert-danger alert-dismissible fade in" role="alert" id="select_row" hidden>
          <p>Please select row from below table</p>
        </div>

        
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="pull-right">

             <a class="btn bg-maroon margin"  href="{{route('family
             .career.create')}}" data-toggle="tooltip" data-placement="bottom" title="Click here to add New Career">
             <i class="glyphicon glyphicon-pencil"></i> Add Career
           </a> 

           <a type="button" class="btn bg-navy margin" id="edit_btn" onclick="no_select()"  data-toggle="tooltip" data-placement="bottom" title="Select an Career in below table and then Click Edit">
            <i class="glyphicon glyphicon-edit"></i>Edit Career
          </a>

        {{--   <a type="button" class="btn bg-aqua margin" id="view_btn" onclick="no_select()"  data-toggle="tooltip" data-placement="bottom" title="Select an Career in below table and then Click View">
            <i class="glyphicon glyphicon-eye-open"></i>View Career
          </a>
            --}}
          <a type="button" class="btn bg-red margin" onclick="no_select()" id="deactivate_btn" data-toggle="tooltip" data-placement="bottom" title="Select an Career in below table and then Click Activate/De-Activate">
            <i class="glyphicon glyphicon-trash"></i> Activate/Deactivate
          </a>

         
        </div><div class="clearfix"></div>
        <table class="table table-bordered" id="view">
          <thead>
            <tr class="bg-blue">
              <th></th>
              <th>Job Title</th>
              <th>Location</th>
              <th>Created By</th>
              <th>Created On</th>
              <th>Updated By</th>
              <th>Updated On</th>
              <th>Status</th>
             
            </tr>  

           <tr tr class="bg-blue">
            <th></th>
            <th><input type="text" class="form-control filter" data-col="Career Heading"></th>
            <th><input type="text" class="form-control filter" data-col="Career Description"></th>
           <th><input type="text" class="form-control filter" data-col="Created By"></th>
            <th><input type="number" class="form-control filter" data-col="Created On"></th>
            <th><input type="number" class="form-control filter" data-col="Updated By"></th>
            <th><input type="number" class="form-control filter" data-col="Updated On"></th>
            <th></th>

         
             </tr>
        </thead>
          <tbody>
            @foreach($career as $a)
            <!-- {{var_dump($career)}}; -->
            <tr>
              <td><input type="radio" id='{{$a->id}}' name='ch'></td>
              
              <td>{{$a->career_heading}}</td>
              <td>{{$a->career_description}}</td>
			        <td>{{$a->created_by}}</td>
              <td>{{getFormatedDate($a->created_at)}}</td>
              <td>{{$a->updated_by}}</td>
              <td>{{getFormatedDate($a->updated_at)}}</td>
              @if($a->deleted_at==null)
              <td><i class="fa fa-check text-green"></i></td>
              @else
              <td><i class="fa fa-times-circle-o text-red"></i></td>
              @endif

            </tr>
            @endforeach
          </tbody>
          <div class="clearfix"></div>

        </table>
     

        <div class="clearfix"></div>
        
        
      </div>
      <div class="box-footer">
        {{-- <form action='#'>
        <input type='text' placeholder='New task' class='form-control input-sm' />
      </form> --}}
    </div><!-- /.box-footer-->
  </div><!-- /.box -->
</div><!-- /.col -->


</div><!-- /.row -->
@endsection

@section('script')
@parent

<script type="text/javascript">

 $(function(){
  $('.filter').multifilter({'target':$('#view')});
  $('input[name=ch]:radio').attr('checked',false);
  $('input[name=ch]:radio').change(function(){
    var id=$(this).attr('id');
    var status=$(this).attr('status');
    $("#edit_btn").attr('href',"{{URL::to('/')}}/family
      /career/"+id+"/edit");
    $("#edit_btn").attr('onclick',"");
    $("#deactivate_btn").attr('href',"{{URL::to('/')}}/family
      /career/deactivate/"+id);
    if(status){
      $("#deactivate_btn").attr('onclick',"return confirm_delete('Activate');");
    }else{
      $("#deactivate_btn").attr('onclick',"return confirm_delete('Deactivate');");
    }
    $("#view_btn").attr('href',"{{URL::to('/')}}/family
      /career/"+id);
     $("#view_btn").attr('onclick',"");
  });
  @if(Session::has('message'))
  $.notify("{{Session::get('message')}}",{
    type:'{{Session::get("er_type")}}',
  });
  @endif
});
 function no_select(){
    // $("#select_row").fadeIn(1000).delay(5000).fadeOut(100);
    $.notify("Please select row from below table",{
      type:'danger',
    });
  }
  function confirm_delete(status){
    if (!confirm('Do you really want to '+status+' Career?')) {
    // $('#content').load($(this).attr('href'));
    return false;
  }
}

</script>
@stop