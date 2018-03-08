@extends('family.layouts.dashboard')

@section('title', 'Career')

@section('page_title_sub', 'Manage Career')

@section('content')

<div class='row'>
  <div class='col-md-12'>
    <!-- Box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Add Career Here</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          {{-- <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button> --}}
        </div>
      </div>
      <div class="box-body table-responsive nom-padding">
        <div class="clearfix"></div>
        <div class="col-md-12">
          {!!Form::open(array('route' => array('family.career.store'), 'method' => 'POST','files'=>true,'id'=>'add-form'))!!}
          
          @include('family.Career._form',['submitButtonText'=>'Save'])
          
          {!!Form::close()!!}
        </div>
        <div class="box-footer">
         
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
   $('[data-toggle="popover"]').popover(); 
 });
</script>
@stop
