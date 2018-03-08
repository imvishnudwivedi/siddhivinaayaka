@extends('siddhivinayak.layouts.dashboard')

@section('title', 'Events')

@section('page_title_sub', 'Add Events')

@section('content')
<div class='row'>
  <div class='col-md-12'>
    <!-- Box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Add Events</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body table-responsive no-padding">
        <div class="clearfix"></div>

        <div class="col-md-12">
          {!!Form::open(array('route' => array('siddhivinayak.masters.events.store'), 'method' => 'POST','files'=>true,'id'=>'add-form','onsubmit'=>'return validate()'))!!}

<div class="col-md-4">
  <div class="form-group @if($errors->first('name')) has-error @endif">
   {!!Form::label('name','Event Name *')!!}
   {!!Form::text('name',Input::old('name'),['class' => 'form-control required','id'=>'name',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter Folder name","data-placement"=>"bottom",])!!}
   <small class="text-danger">{{ $errors->first('name') }}</small>
 </div>
</div>

<div class="col-md-4">
  <div class="form-group @if($errors->first('description')) has-error @endif">
   {!!Form::label('description','Description')!!}
   {!!Form::text('description',Input::old('description'),['class' => 'form-control required','id'=>'description',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter Folder name","data-placement"=>"bottom",])!!}
   <small class="text-danger">{{ $errors->first('description') }}</small>
 </div>
</div>



  <div class="col-md-4">
          <div class="form-group @if($errors->first('from_date')) has-error @endif">
           {!!Form::label('from_date','From Date *')!!}
           {!!Form::text('from_date',Input::old('from_date'),['class' => 'form-control required' ,'id'=>'from_date',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter Date","data-placement"=>"bottom",])!!}
           <small class="text-danger">{{ $errors->first('from_date') }}</small>
         </div>
       </div>

<div class="col-md-4">
  <div class="form-group @if($errors->first('to_date')) has-error @endif">
           {!!Form::label('to_date','To Date *')!!}
           {!!Form::text('to_date',Input::old('to_date'),['class' => 'form-control required' ,'id'=>'to_date',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter Date","data-placement"=>"bottom",])!!}
   <small class="text-danger">{{ $errors->first('to_date') }}</small>
 </div>
</div>
<div class="clearfix"></div>



<div class="col-md-2 pull-right">
  <a href="{{URL::route('siddhivinayak.masters.events.index')}}">{!! Form::button('Cancel', ['class' => 'btn btn-block btn-danger btn-block','id'=>'clr-btn']) !!}</a>
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

  $('#from_date').datepicker();
  $('#to_date').datepicker();
  $(function(){
   $('[data-toggle="popover"]').popover(); 


 });

function validate()
  {
      

  }
  
</script>
@stop
