@extends('siddhivinayak.layouts.dashboard')

@section('title', 'Gallery')

@section('page_title', 'Gallery')

@section('content')

<div class='row' style="padding:2px;">

 <div class="box box-primary">
      <div class="box-header with-border">
       <div class="box-body table-responsive no-padding">

   
        <div class="clearfix"></div>
        
       <div class="box-header with-border">
        <h3 class="box-title">List of Gallery photos</h3>
      </div>
        <div class="col-md-12">
          <div class="pull-right">
            
            <a href="{{route('siddhivinayak.masters.gallery.create')}}" class="btn bg-green margin" data-toggle="tooltip" data-placement="bottom" title="Click here to add" id="add_asset">
             <i class="glyphicon glyphicon-pencil"></i> Add 
           </a>
    

 


         
        </div><div class="clearfix"></div>

    
        <table class="table table-bordered" id="view">
          <thead>
            <tr class="bg-blue">
         
              <th>Folder Name</th>
              <th>Photo Name</th>
              
             

            
              <th>Status</th>
              <th width="10%">Action</th>
              <th></th>
            
            </tr>  

           
        </thead>
          <tbody id="row">
          @foreach($gallery as $sd)
            <tr style="page-break-inside: avoid;" tabindex="-1" data-toggle="popover" data-placement="top" data-trigger="focus" data-html="true" data-content="Created by: {{$sd->created_by}}<br> Created at: {{getFormatedDate($sd->created_at)}} <br> Updated by:{{$sd->updated_by}} <br> Updated at:{{getFormatedDate($sd->updated_at)}}">
            
              
              <td>{{$sd->folder_name}}</td>
              <td>{{$sd->gallery_name}}</td>

                 

              

              @if($sd->deleted_at==null)
              <td><i class="fa fa-check text-green"></i></td>
              @else
              <td><i class="fa fa-times-circle-o text-red"></i></td>
              @endif

                <td>
                <a href="{{URL::to('/')}}/siddhivinayak/masters/gallery/{{$sd->id}}/edit" class="td-action-btn point-this" data-toggle="tooltip" data-placement="top" title="Edit">
                  <i class="glyphicon glyphicon-edit"></i>
                </a>

             {{--    <a href="{{URL::to('/')}}/siddhivinayak/masters/gallery/{{$sd->id}}" class="td-action-btn point-this" data-toggle="tooltip" data-placement="top" title="View" >
                  <i class="glyphicon glyphicon-eye-open"></i>
                </a> --}}

                    <a href="{{URL::to('/')}}/siddhivinayak/masters/gallery/pushgallery/{{$sd->id}}" class="td-action-btn" id="" data-toggle="tooltip" data-placement="top" title="click push/pull">
                    <i class="glyphicon glyphicon-sort"></i> 
                    </a>

          {{--      @if($sd->deleted_at==null)
                  <a href="{{URL::to('/')}}/siddhivinayak/masters/gallery/deactivate/{{$sd->id}}" class="td-action-btn text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Deactivate" onclick="return confirm_delete('Deactivate'); ">
                    <i class="fa fa-lock text-red" style='font-size:18px;'></i>
                  </a>
                @else
                  <a href="{{URL::to('/')}}/siddhivinayak/masters/gallery/deactivate/{{$sd->id}}" class="td-action-btn text-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Activate" onclick="return confirm_delete('Activate');">
                    <i class="fa fa-lock text-red" style='font-size:18px;'></i>
                  </a>
                @endif --}}
              </td>

               <td>
              @if($sd->push_pull_flag==1)
              In website
              @else
              Not in website
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