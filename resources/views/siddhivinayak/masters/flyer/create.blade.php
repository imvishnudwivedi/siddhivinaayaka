@extends('siddhivinayak.layouts.dashboard')

@section('title', 'Flyer')

@section('page_title_sub', 'Add Flyer Photos')

@section('content')
<div class='row'>
  <div class='col-md-12'>
    <!-- Box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Add flyer Photos here</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body table-responsive no-padding">
        <div class="clearfix"></div>
        <div class="col-md-12">
          {!!Form::open(array('route' => array('siddhivinayak.masters.flyer.store'), 'method' => 'POST','files'=>true,'id'=>'add-form','onsubmit'=>'return validate()'))!!}





<div class="col-md-4">
  <div class="form-group @if($errors->first('flyer_name')) has-error @endif">
   {!!Form::label('flyer_name','Flyer Name *')!!}
   {!!Form::text('flyer_name',Input::old('flyer_name'),['class' => 'form-control required','id'=>'flyer_name',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter Sub Category ","data-placement"=>"bottom",])!!}
   <small class="text-danger">{{ $errors->first('flyer_name') }}</small>
 </div>
</div>




       <div class="clearfix" ></div>   



<!-- Attach Image field -->
<div class="col-md-4" id="attachment_div">
  {!! Form::label('Attach Image size (1024 X 768)') !!}
  <input type="file" class="form-control" id="file_name" name="file_name" required="">
</div>


<div class="col-md-2" style="margin-top:25px;">
  {!! Form::button('Upload Image', ['class' => 'btn btn-block btn-success btn-block', 'id' => 'upload_btn']) !!}
</div>

<div class="clearfix" ></div>

<div class="col-md-12" id="details_div" hidden style="margin-top:25px;">

 <div class="col-md-8">
  <img src="" id="disp_round_attachment" height="200px" width="200px">
</div>
</div>


<div class="clearfix" ></div></br>






<div class="col-md-2 pull-right">
  <a href="{{URL::route('siddhivinayak.masters.gallery.index')}}">{!! Form::button('Cancel', ['class' => 'btn btn-block btn-danger btn-block','id'=>'clr-btn']) !!}</a>
</div>
<div class="col-md-2 pull-right">
  <div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-block btn-success btn-block','id'=>'save_btn']) !!}
  </div>
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





 });








  //image upload
$('#upload_btn').click(function(){
console.log(11111111);
  var formData = new FormData($('#add-form')[0]);

  var ajax = $.ajax({
    type: 'post',
    url:'{{URL::route("siddhivinayak.masters.flyer.uploadFlyer")}}',

    data: formData,
    contentType: false,
    processData: false
  }).done(function(result) {
        console.log(result);
        if(result){

          console.log($('#public_path').val());
          var public_path=$('#public_path').val();
          
          var path=public_path+result['path'];
          console.log("path");
          console.log(path);
          $('#temp_file_path').val(path);
          $('#disp_round_attachment').attr('src',result['path']);

           $('#details_div').show();
         }else{
          $.notify(" Please Choose file.",{
            type:'danger',
          });
          return false;
        }
      })
  .fail(function() {
    alert("fail");
  });

});

function validate()
  {
    var flag=1;
    if($('#add-form').valid()){

      if($('#folder_id').val()==0){
        $.notify("Please select Folder",{
          type:'danger',
        });
         return false;
      }


      $('#save_btn').attr('disabled',true);
      return true;
    }else{
      return false;
    }
  }
  
</script>
@stop
