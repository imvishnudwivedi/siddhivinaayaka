@extends('family.layouts.dashboard')

@section('title', 'Occasion')

@section('page_title', 'Occasion')

@section('content')
<div class='row'>
 <div class='col-md-12'>
  <!-- Box -->
  <div class="box box-primary">
   <div class="box-header with-border">
    <h3 class="box-title">List of Occasion</h3>
  </div>

  <div class="box-body no-padding">
    <div class="clearfix"></div>
    <div class="col-md-12">
      <div class="pull-right">

        <button class="btn bg-green margin" id="add_btn" data-toggle="tooltip" data-placement="bottom" title="Click here to add Occasion">
         <i class="glyphicon glyphicon-pencil"></i> Add Occasion
       </button>


     </div><div class="clearfix"></div>

     <div class="clearfix"></div>
     {!!Form::open(array('route' => array('family.masters.occasion.store'), 'method' => 'POST','files'=>true,'id'=>'add-form'))!!}

     <table class="table table-bordered" id="view">
      <thead>
        <tr class="bg-blue">
          <th>Name</th>
          <th>Description</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>

        <tr tr class="bg-blue">
          <th><input type="text" class="form-control filter" data-col="Name" name="Name"></th>
          <th><input type="text" class="form-control filter" data-col="Description" name="Description"></th>
          <th></th>
          <th></th>
        </tr>

      </thead>
      <tbody id="row">
       @foreach($occasion as $oc)
        <tr id="occasion_tr{{$oc->id}}"  style="page-break-inside: avoid;" tabindex="-1" data-toggle="popover" data-placement="top" data-trigger="focus" data-html="true" title="Data Information" data-content="Created by: {{$oc->created_by}} <br> Created at: {{getFormatedDate($oc->created_at)}} <br> Updated by:{{$oc->updated_by}} <br> Updated at:{{getFormatedDate($oc->updated_at)}}">
          <td>{{$oc->name}}</td>   
          <td>{{$oc->description}}</td>

          @if($oc->deleted_at==null)
          <td><i class="fa fa-check text-green"></i></td>
          @else
          <td><i class="fa fa-times-circle-o text-red"></i></td>
          @endif

          <td>
            <a class="td-action-btn point-this" data-toggle="tooltip" data-placement="top" title="Edit" onclick="editOccasion('{{$oc->id}}')">
              <i class="glyphicon glyphicon-edit"></i>
            </a>

            <a href="{{URL::to('/')}}/family/masters/occasion/deactivate/{{$oc->id}}" class="td-action-btn" data-toggle="tooltip" data-placement="top" title="Activate/Deactivate" onclick="return confirmDelete('{{$oc->deleted_at}}')">
              <i class="fa fa-lock text-red" style='font-size:18px;'></i>
            </a>
          </td>
        </tr>
        @endforeach 
      </tbody>
      <div class="clearfix"></div>

    </table>
    {!!Form::close()!!}
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
  $('.filter').multifilter({'target':$('#view')});

  var specific_occasion=0;
  var edit_flag=0;

  var occasion = <?php echo json_encode($occasion) ?>;


  $(function(){

    @if(Session::has('message'))
    $.notify("{{Session::get('message')}}",{
      type:'{{Session::get("er_type")}}',
    });
    @endif

    $("#open_search_btn").click(function(){
      $("#search_block").toggle('show');
    });


    $('#clear_btn').click(function(){
      window.location.reload();
    })

    $('#add_btn').click(function(){
      if(edit_flag === 1){
        cancelEdit();
      }
      $(this).attr('disabled',true);
      $(this).tooltip('hide');
      var dis='';
      dis+='<tr>';
      dis+='<td><input type="text" class="form-control required" id="name" name="name"></td>';


      dis+='<td><input type="text" class="form-control " id="description" name="description"></td>';

      dis+='<td></td>';  
      dis+='<td><a class="td-action-btn point-this" data-toggle="tooltip" data-placement="top" title="Save" onclick=saveOccasion()><i class="fa fa-floppy-o"></i></a><a class="td-action-btn point-this" data-toggle="tooltip" data-placement="top" title="Cancel" onclick=cancelAdd()><i class="glyphicon glyphicon-remove text-red"></i></a></td>';
      dis+='</tr>';

      $('#row').prepend(dis);

   });

  });

  function cancelAdd(){
    $('#row tr:first').remove();
    $('#add_btn').attr('disabled',false);
  }

  function saveOccasion()
  {
    if($('#add-form').valid()){

      var formData = new FormData($('#add-form')[0]);
      var ajax = $.ajax({
        type: 'post',
        url:'{{URL::route("family.masters.occasion.store")}}',
        data: formData,
        contentType: false,
        processData: false
      }).done(function(result) {
        console.log(result);

        if(result==1){
         $.notify("Occasion already exist!",{
          type:'danger',
        });

         return false;
       }else{
        window.location.reload();

        $.notify("Occasion saved successfully!",{
          type:'success',
        });
      }
    });
    }


  }


  function editOccasion(id)
  {

    if(edit_flag == 1){
      cancelEdit();
    }
    specific_occasion=0;

    for(var v=0;v<occasion.length;v++)
    {
      if(id == occasion[v]['id'])
      {
        specific_occasion=occasion[v];
        break;
      }
    }

    // console.log(specific_occasion);

    if(specific_occasion['deleted_at']==null){

      edit_flag=1;
      if($('#add_btn').attr('disabled') == 'disabled'){
        cancelAdd();
      } 
      var dis='';
      dis+='<td><input type="text" class="form-control required" id="name" name="name"></td>';

      dis+='<td><textarea class="form-control" id="description" name="description"></textarea></td>'; 
      dis+='<td></td>'
      dis+='<td><a class="td-action-btn point-this" data-toggle="tooltip" data-placement="top" title="Update" onclick=updateOccasion('+id+')><i class="fa fa-floppy-o"></i></a><a class="td-action-btn point-this" data-toggle="tooltip" data-placement="top" title="Cancel" onclick=cancelEdit()><i class="glyphicon glyphicon-remove text-red"></i></a></td>';

      $('#occasion_tr'+id).html(dis);    
      console.log(specific_occasion);
     
      $('#name').val(specific_occasion['name']);
      $('#description').val(specific_occasion['description']);



    }else{
     $.notify({message: 'Cannot Edit Deactivated Occasion.'},{ type: 'danger'});      
     return false;
   }
 }

 function updateOccasion(id)
 {

  if($('#add-form').valid()){

    var formData = new FormData($('#add-form')[0]);

    formData.append('id',id);
    var ajax = $.ajax({
      type: 'post',
      url:'{{URL::route("family.masters.occasion.updateOccasion")}}',
      data: formData,
      contentType: false,
      processData: false
    }).done(function(result) {
      console.log(result);
      if(result==1){

       $.notify("Occasion already exist!",{
        type:'danger',
      });
       return false;
     }else{
      window.location.reload();

      $.notify("Occasion updated successfully!",{
        type:'success',
      });
    }
  });
  }

}

function cancelEdit()
{

  window.location.reload();
}


function confirmDelete(status){
  if(status){
    if (!confirm('Do you really want to Activate...?')) {
      return false;
    }
  }else{
    if (!confirm('Do you really want to Deactivate...?')) {
      return false;
    }
  }
}

</script>
@stop