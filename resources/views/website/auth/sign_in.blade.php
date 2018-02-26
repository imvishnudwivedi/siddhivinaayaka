@extends('website.layouts.main')

@section('content')

<div class="col-sm-9">
<div class="Block Breadcrumb Moveable Panel desktop" id="CreateAccountBreadcrumb">
  <ul class="last">
    <li><a href="{{URL::route('home')}}">Home</a></li><li><a href="javascript:history.go(-1)">... Previous Page</a></li><li>Sign In</li>
  </ul>
</div>
  <h1 class="TitleHeading">Sign in or Create Account</h1>
<div class="col-sm-5" >
<h3>Create a New Account</h3>
  <div style="">
          <p>If this is your first purchase from Kalaavid Store please click the "Continue." button to get started.</p>
          <form action="{{URL::route('sign_up')}}" method="get">
            <input type="hidden" name="action" value="create_account">
            <input type="hidden" name="checking_out" value="yes">
            <input type="submit" value="Continue »" style="padding:2px 10px 2px 10px" class="btn Small">
          </form>
        </div>
        <div class="clearfix"></div>
         <div style="display: ">
          <p>Create an account with us and you'll be able to:</p><ul><li>Check out faster</li><li>Access your order history</li><li>Track new orders</li>{{-- <li>Save items to your wish list</li> --}}</ul> <a href="{{route('sign_up')}}" class="btn Small">Click here to create a new account.</a>
        </div>
</div>

<div class="col-sm-4">
<h3>Sign In</h3>
           {!!Form::open(array('route' => array('sign_in'), 'method' => 'POST','id'=>'add-form'))!!}


   <div class="FormContainer">
            <p style="display: none" class="SuccessMessage">
              
            </p>
            <fieldset>
              <label>Email Address:</label>
              <input type="text" class="form-control required" name="email" id="email">
              <label for="password">Password:</label>
              <input type="password" autocomplete="off" class="form-control required" name="password" id="password">
            </fieldset>
            <div class="clearfix"></div>
            <fieldset class="actions">
              <input id="LoginButton" class="btn Small" type="submit" value="Sign In">
              &nbsp;<a href="{{route('forgot_password')}}">Forgot your password?</a>
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