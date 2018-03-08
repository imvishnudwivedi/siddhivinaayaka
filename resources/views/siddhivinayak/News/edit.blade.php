@extends('siddhivinayak.layouts.dashboard')

@section('title', 'News')

@section('page_title_sub', 'Manage News')

@section('content')

<div class='row'>
  <div class='col-md-12'>
    <!-- Box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Edit News Here</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          {{-- <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button> --}}
        </div>
      </div>
      <div class="box-body table-responsive no-padding">
        <div class="clearfix"></div>
        <div class="col-md-12">

          
          {!!Form::model($news,array('route' => array('siddhivinayak.news.update', $news->id), 'method' => 'PUT','files'=>true,'id'=>'edit-form'))!!}
          {!!Form::hidden('id',$news->id)!!}

          @include('siddhivinayak.News._form',['submitButtonText'=>'Update'])
         
          <input type="hidden" name="old_image_path" value="{{$news->image_path}}">
          <div class="clearfix"></div>
          <div class="col-md-2">
           <button type="button" class="btn btn-block btn-success btn-block"><a href="{{asset($news->image_path)}}" target="_black">
             View Image </a></button>
           </div>
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

  var news = <?php echo json_encode($news) ?>;
  $(function(){
console.log(news);
console.log('news');

    $('#news_description').val(news['news_description']);
     loadTinyMc();

  });

  function loadTinyMc(){
   
  tinymce.init({
        selector: '#news_description',
        height: 500,
            theme: 'modern',
            plugins: ['advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
            ],
           toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
           toolbar2: 'print preview media | forecolor backcolor emoticons fontsizeselect jbimages',
           image_advtab: true,
           fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
           templates: [
           { title: 'Test template 1', content: 'Test 1' },
           { title: 'Test template 2', content: 'Test 2' }
           ],
           content_css: ['https://fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
            'https://www.tinymce.com/css/codepen.min.css'
           ],
            font_formats: 'Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;AkrutiKndPadmini=Akpdmi-n',
           relative_urls: false,
           
    });





}
</script>
@stop
