 <div class="col-md-4">
  <div class="form-group @if($errors->first('career_heading')) has-error @endif">
   {!!Form::label('career_heading','Job Title*')!!}
   {!!Form::text('career_heading',Input::old('career_heading'),['class' => 'form-control','id'=>'art_type',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter a Job Title","data-placement"=>"bottom",])!!}
   <small class="text-danger">{{ $errors->first('career_heading') }}</small>

 </div>
</div>
<div class="col-md-4">
  <div class="form-group @if($errors->first('expr_required')) has-error @endif">
   {!!Form::label('expr_required','Experience (year)')!!}
   {!!Form::text('expr_required',Input::old('expr_required'),['class' => 'form-control','id'=>'art_type',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter Experience in year ","data-placement"=>"bottom",])!!}
   <small class="text-danger">{{ $errors->first('expr_required') }}</small>

 </div>
</div>
<div class="col-md-4">
  <div class="form-group @if($errors->first('domain')) has-error @endif">
   {!!Form::label('domain','Description')!!}
   {!!Form::text('domain',Input::old('domain'),['class' => 'form-control','id'=>'art_type',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter a Heading","data-placement"=>"bottom",])!!}
   <small class="text-danger">{{ $errors->first('domain') }}</small>

 </div>
</div>
{{-- <div class="col-md-4">
  <div class="form-group @if($errors->first('offered_salary')) has-error @endif">
   {!!Form::label('offered_salary','Offered salary(CTC)')!!}
   {!!Form::text('offered_salary',Input::old('offered_salary'),['class' => 'form-control','id'=>'art_type',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter a Heading","data-placement"=>"bottom",])!!}
   <small class="text-danger">{{ $errors->first('offered_salary') }}</small>

 </div>
</div> --}}
<div class="clearfix"></div>

<div class="col-md-4">
  <div>
    {!! Form::label('career_description', 'Location') !!}
    {!! Form::text('career_description', Input::old('career_description'), ['class' => 'form-control', "data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter Location","data-placement"=>"bottom",'rows'=>'3']) !!}
  </div>
</div>




<div class="clearfix"></div>


<div class='clearfix'></div>
<div class="col-md-2 pull-right">
  <a href="{{URL::route('bachmann.career.index')}}">{!! Form::button('Cancel', ['class' => 'btn btn-block btn-danger btn-block','id'=>'clr-btn']) !!}</a>
</div>
<div class="col-md-2 pull-right">
  <div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-block btn-success btn-block']) !!}
  </div>
</div>


@section('script')
@parent
<script type="text/javascript">
  $(function(){
   
  });
</script>
@stop
