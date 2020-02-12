@extends('website.layouts.main')

@section('content')

<div class="col-sm-9">
  <h1 class="TitleHeading">Password Reminder</h1>

<div class="col-sm-5">
{{-- <h3>Sign In</h3> --}}
           {!!Form::open(array('route' => array('send_remind'), 'method' => 'POST','id'=>'add-form'))!!}


   <div class="FormContainer">
            <p style="display: none" class="SuccessMessage">
              
            </p>
            <fieldset>
              <label>Email Address:</label>
              <input type="text" class="form-control required" name="email" id="email">

            </fieldset>
            <div class="clearfix" style="margin-top:20px;"></div>
            <fieldset class="actions">
              <input id="LoginButton" class="btn Small" type="submit" value="Send Remind">
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

  function check_login_form() {
    console.log("login_email");
    var login_email = g("email");
    var login_pass = g("password");
console.log(login_email);
    if(login_email.value.indexOf("@") == -1 || login_email.value.indexOf(".") == -1) {
      alert("Please type in a valid email address, such as sandhya@example.com");
      login_email.focus();
      login_email.select();
      return false;
    }

    if(login_pass.value == "") {
      alert("Please type in your password.");
      login_pass.focus();
      return false;
    }

    return true;
  }
</script>
@stop