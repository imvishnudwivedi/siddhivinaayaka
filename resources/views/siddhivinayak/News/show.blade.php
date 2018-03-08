  @extends('siddhivinayak.layouts.dashboard')

@section('title', 'News')

@section('page_title_sub', 'View News')

@section('content')

<div class='row'>
  <div class='col-md-12'>
    <!-- Box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">View News Here</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          {{-- <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button> --}}
        </div>
      </div>
      <div class="box-body table-responsive no-padding">
        <div class="clearfix"></div>
        <div class="col-md-12">
          {!!Form::model($news,array('method' => 'PUT','files'=>true,'id'=>'view-form'))!!}
          {!!Form::hidden('id',$news->id)!!}

           @include('siddhivinayak.News._form',['submitButtonText'=>'Save'])
          
            <div class="col-md-4">
           <img src="{{asset($news->image_path)}}" class="img-responsive">
      
           
           </div>
           <div class="clearfix"></div>
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

    $('#view-form').find(':input').attr('disabled','disabled');
    $('#clr-btn').attr('disabled',false);
    $('#clr-btn').txt('Close');
      

  });
</script>
@stop
