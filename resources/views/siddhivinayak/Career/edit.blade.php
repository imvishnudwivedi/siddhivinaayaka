@extends('family.layouts.dashboard')

@section('title', 'Career')

@section('page_title_sub', 'Manage Career')

@section('content')

<div class='row'>
  <div class='col-md-12'>
    <!-- Box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Career Here</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          {{-- <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button> --}}
        </div>
      </div>
      <div class="box-body table-responsive no-padding">
        <div class="clearfix"></div>
        <div class="col-md-12">

          
          {!!Form::model($career,array('route' => array('family.career.update', $career->id), 'method' => 'PUT','files'=>true,'id'=>'edit-form'))!!}
          {!!Form::hidden('id',$career->id)!!}

          @include('family.Career._form',['submitButtonText'=>'Update'])
        {{--   <input type="hidden" name="old_image_path" value="{{$career->image_path}}"> --}}
          <div class="clearfix"></div>
        {{--   <div class="col-md-2">
           <button type="button" class="btn btn-block btn-success btn-block"><a href="{{asset($career->image_path)}}" target="_black">
             View Image </a></button>
           </div> --}}
           {!!Form::close()!!}
         </div>
         <div class="box-footer">
          {{-- <form action='#'>
          <input type='text' placeholder='New task' class='form-control input-sm' />
        </form> --}}
      </div><!-- /.box-footer-->
    </div><!-- /.box -->
  </div><!-- /.col -->

</div>
</div><!-- /.row -->
@endsection
@section('script')
@parent
<script type="text/javascript">
  $(function(){
    

  });
</script>
@stop
