@extends('website.layouts.main')
@section('content')


<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">

      <ul class="w3_short">
        <li><a href="{{URL::route('home')}}">Home</a><span>|</span></li>
        <li><a href="{{URL::route('gallery_folder')}}">Gallery</a></li>
      </ul>
    </div>
  </div>
<marquee behavior="alternate"><span class="sliding">Officially Temple will start from Mid of February</span></marquee>

<div class="row">

    <div class="col-lg-12">
        <center> <h2>Arati / Archana</h2> </center>
     {{--    <h1 class="page-header" style="color: #fff;">Thumbnail Gallery</h1> --}}
    
              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Siddhivinayka" data-caption="Arati" data-image="website/images/gallery/arati/IMG_0570.JPG" data-target="#image-gallery">
                <img class="img-responsive" src="website/images/gallery/arati/IMG_0570.JPG" alt="Another alt text">
            </a>
        </div>
              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Siddhivinayka" data-caption="Arati" data-image="website/images/gallery/arati/IMG_0580.JPG" data-target="#image-gallery">
                <img class="img-responsive" src="website/images/gallery/arati/IMG_0580.JPG" alt="Another alt text">
            </a>
        </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Siddhivinayka" data-caption="Arati" data-image="website/images/gallery/arati/IMG_0584.JPG" data-target="#image-gallery">
                <img class="img-responsive" src="website/images/gallery/arati/IMG_0584.JPG" alt="Another alt text">
            </a>
        </div>
         <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Siddhivinayka" data-caption="Arati" data-image="website/images/gallery/arati/IMG_0589.JPG" data-target="#image-gallery">
                <img class="img-responsive" src="website/images/gallery/arati/IMG_0589.JPG" alt="Another alt text">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Siddhivinayka" data-caption="Arati" data-image="website/images/gallery/arati/IMG_0593.JPG" data-target="#image-gallery">
                <img class="img-responsive" src="website/images/gallery/arati/IMG_0593.JPG" alt="Another alt text">
            </a>
        </div>
      
         <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Siddhivinayka" data-caption="Arati" data-image="website/images/gallery/arati/IMG_0576.JPG" data-target="#image-gallery">
                <img class="img-responsive" src="website/images/gallery/arati/IMG_0576.JPG" alt="Another alt text">
            </a>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Siddhivinayka" data-caption="Arati" data-image="website/images/gallery/arati/IMG_0583.JPG" data-target="#image-gallery">
                <img class="img-responsive" src="website/images/gallery/arati/IMG_0583.JPG" alt="Another alt text">
            </a>
        </div>

         <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Siddhivinayka" data-caption="Arati" data-image="website/images/gallery/arati/IMG_0575.JPG" data-target="#image-gallery">
                <img class="img-responsive" src="website/images/gallery/arati/IMG_0575.JPG" alt="Another alt text">
            </a>
        </div>
      
      
      
       
     
     
     
</div>


<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="">
            </div>
            <div class="modal-footer">

                <div class="col-md-2">
                    <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                </div>

                <div class="col-md-8 text-justify" id="image-gallery-caption">
                    This text will be overwritten by jQuery
                </div>

                <div class="col-md-2">
                    <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>






@section('script')
@parent
<script type="text/javascript">
	$(document).ready(function(){

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }
});
</script>

@endsection
@stop
