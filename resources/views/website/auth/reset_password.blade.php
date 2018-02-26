@extends('website.layouts.main')

@section('content')

<div class="col-sm-9">
  <h1 class="TitleHeading">Reset password</h1>

<div class="col-sm-4">
           {!!Form::open(array('route' => array('reset_password'), 'method' => 'POST','id'=>'add-form'))!!}


   <div class="FormContainer">
            <p style="display: none" class="SuccessMessage">
              
            </p>
            <fieldset>
              <label for="password"> Password:</label>
              <input type="password" autocomplete="off" class="form-control required" name="password" id="password">

              <label for="confirm_password">Confirm Password:</label>
              <input type="password" autocomplete="off" class="form-control required" name="confirm_password" id="confirm_password">
              <input type="hidden" id="user_id" name="user_id" value="{{$user_id}}">
            </fieldset>
            <div class="clearfix"></div>
             <div class="clear" style="margin-top:30px;"></div>
            <fieldset class="actions">
              <input id="LoginButton" class="btn Small" type="submit" value="Change my password">
              &nbsp;
            </fieldset>
          </div>


     
  {!!Form::close()!!}
</div>
  </div>
        

</div>

@endsection

@section('script')
@parent
<script type="text/javascript">


</script>
@stop