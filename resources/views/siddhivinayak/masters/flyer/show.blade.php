@extends('siddhivinayak.layouts.dashboard')

@section('title', 'Sub Category')

@section('page_title_sub', 'View Sub Category')

@section('content')
<div class='row'>
  <div class='col-md-12'>
    <!-- Box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">View Sub Category</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body table-responsive no-padding">
        <div class="clearfix"></div>
        <div class="col-md-12">
          {!!Form::model($flyer,array('route' => array('siddhivinayak.masters.flyer.update', $flyer->id), 'method' => 'PUT','files'=>true,'id'=>'view-form','onSubmit'=>'return validate()'))!!}
          {!!Form::hidden('id',$flyer->id)!!}


<div class="col-md-4">
 <div class="form-group @if($errors->first('category_id')) has-error @endif">
   {!!Form::label('category_id','Category *')!!}
   {!!Form::text('category_id',$flyer->category_name,['class' => 'form-control required','id'=>'category_id',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter Item Name","data-placement"=>"bottom","disabled",])!!}
   <small class="text-danger">{{ $errors->first('category_id') }}</small>
 </div>
</div>



<div class="col-md-4">
 <div class="form-group @if($errors->first('flyer_name')) has-error @endif">
   {!!Form::label('flyer_name','flyer_name')!!}
   {!!Form::text('flyer_name',$flyer->flyer_name,['class' => 'form-control required','id'=>'flyer_name',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter Item flyer_name","data-placement"=>"bottom",])!!}
   <small class="text-danger">{{ $errors->first('flyer_name') }}</small>
 </div>
</div>











<div class='clearfix'></div>


        <div class="col-md-4">
          <label>Attachment</label><br/>
          
          @if($flyer->attachment_path)
           <?php $attachment_path=getSubCategoryUploadedPath($flyer->attachment_path) ?>
           <img src="{{$flyer_attachment_path}}" id="disp_round_attachment" height="200px" width="200px" >
           @endif
           
          </div>
          
<div class='clearfix'></div><br/>




          <div class='clearfix'></div>

<div class="col-md-2 pull-right">
  <a href="{{URL::route('siddhivinayak.masters.flyer.index')}}">{!! Form::button('Cancel', ['class' => 'btn btn-block btn-danger btn-block','id'=>'clr-btn']) !!}</a>
</div>

          {!!Form::close()!!}
        </div>
      </div><!-- /.box -->
    </div><!-- /.col -->

  </div>
</div><!-- /.row -->
@endsection
@section('script')
@parent
<script type="text/javascript">



  $(function(){
   $('[data-toggle="popover"]').popover(); 

   $('.form-control').attr('disabled',true);


 });


function validate()
  {
    var flag=1;
    if($('#edit-form').valid()){

      if($('#item_group_id').val()==0){
        $.notify("Please select Item Group!",{
          type:'danger',
        });
         return false;
      }

      if($('#uom_master_id').val()==0){
        $.notify("Please select UoM!",{
          type:'danger',
        });
         return false;
      }

      flag=1;
      $('#save_btn').attr('disabled',true);
      return true;
    }else{
      return false;
    }
  }
  
</script>
@stop
