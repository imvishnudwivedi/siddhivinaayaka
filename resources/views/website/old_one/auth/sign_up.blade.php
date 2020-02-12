@extends('website.layouts.main')

@section('content')

<div class="col-sm-9">
  <div class="Content Widest" id="LayoutColumn1">
<div class="Block Breadcrumb Moveable Panel desktop" id="CreateAccountBreadcrumb">
  <ul class="last">
    <li><a href="{{URL::route('home')}}">Home</a></li><li><a href="javascript:history.go(-1)">... Previous Page</a></li><li>Create Account</li>
  </ul>
</div>
<div class="Block Moveable Panel no-ptop" id="CreateAccountForm">
  <h1 class="TitleHeading">Create an Account</h1>
  <div class="BlockContent BlockContent full-width page-content">
    <p style="display: " class="txt24 blockquote mtm">
      Checkout faster at <em>Kalaavid Store</em>.
    </p>
{!!Form::open(array('route' => array('postSignUp'), 'method' => 'POST','id'=>'add-form','onsubmit'=>'return check_create_account_form()'))!!}
  <div class="box borderB"> 
          <h3>Personal Details</h3>

          <p>Enter your email address and password to create your account.</p>
    
        <div class="col-md-4">
        <div class="form-group @if($errors->first('email')) has-error @endif">
           <label>Email Address <span class="Required FormFieldRequired" style="visibility: visible">*</span>  </label>


         {!!Form::text('email',Input::old('email'),['class' => 'form-control email','id'=>'email',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter a  email","data-placement"=>"bottom",])!!}
           <small class="text-danger">{{ $errors->first('email') }}</small>
        </div>
        </div>


        <div class="col-md-4">
        <div class="form-group @if($errors->first('password')) has-error @endif">
             <label>Password <span class="Required FormFieldRequired" style="visibility: visible">*</span>  </label>

         {!!Form::input('password','password',Input::old('password'),['class' => 'form-control','id'=>'password',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter a  password","data-placement"=>"bottom",])!!}
           <small class="text-danger">{{ $errors->first('password') }}</small>
        </div>
        </div>


        <div class="col-md-4">
        <div class="form-group @if($errors->first('confirm_password')) has-error @endif">
        <label>Confirm Password <span class="Required FormFieldRequired" style="visibility: visible">*</span>  </label>

         {!!Form::input('password','confirm_password','',['class' => 'form-control','id'=>'confirm_password',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter a  confirm_password","data-placement"=>"bottom",])!!}
           <small class="text-danger">{{ $errors->first('confirm_password') }}</small>
        </div>
        </div>

         
        </div>
        <hr>
<div class="clearfix"></div>
          <div class="box borderB"> 
           <h3>Shipping Details</h3>

          <p>Enter the name and address you'd like us to ship your order to.</p>

        <div class="col-md-3">
        <div class="form-group @if($errors->first('first_name')) has-error @endif">
        <label>First Name <span class="Required FormFieldRequired" style="visibility: visible">*</span>  </label>

         {!!Form::text('first_name',Input::old('first_name'),['class' => 'form-control','id'=>'first_name',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter a  first_name","data-placement"=>"bottom",])!!}
           <small class="text-danger">{{ $errors->first('first_name') }}</small>
        </div>
        </div>


            <div class="col-md-3">
        <div class="form-group @if($errors->first('last_name')) has-error @endif">
        <label>Last Name</label>

         {!!Form::text('last_name',Input::old('last_name'),['class' => 'form-control','id'=>'last_name',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter a  last_name","data-placement"=>"bottom",])!!}
           <small class="text-danger">{{ $errors->first('last_name') }}</small>
        </div>
        </div>
          <div class="col-md-3">
        <div class="form-group @if($errors->first('company_name')) has-error @endif">
          <label>Company Name </label>

         {!!Form::text('company_name',Input::old('company_name'),['class' => 'form-control','id'=>'company_name',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter a  company_name","data-placement"=>"bottom",])!!}
           <small class="text-danger">{{ $errors->first('company_name') }}</small>
        </div>
        </div>

             <div class="col-md-3">
        <div class="form-group @if($errors->first('phone_number')) has-error @endif">
        <label>Phone Numbers <span class="Required FormFieldRequired" style="visibility: visible">*</span>  </label>
  
         {!!Form::input('number','phone_number',Input::old('phone_number'),['class' => 'form-control','id'=>'phone_number',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter a  phone_number","data-placement"=>"bottom",])!!}
           <small class="text-danger">{{ $errors->first('phone_number') }}</small>
        </div>
        </div>
        <div class="clearfix"></div>
           <div class="col-md-6">
        <div class="form-group @if($errors->first('address_1')) has-error @endif">
        <label>Address Line 1</label>

         {!!Form::textarea('address_1',Input::old('address_1'),['class' => 'form-control','id'=>'address_1',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter a  address_1","data-placement"=>"bottom",'rows'=>1,'cols'=>1])!!}
           <small class="text-danger">{{ $errors->first('address_1') }}</small>
        </div>
        </div>

           <div class="col-md-6">
        <div class="form-group @if($errors->first('address_2')) has-error @endif">
        <label>Address Line 2</label>

         {!!Form::textarea('address_2',Input::old('address_2'),['class' => 'form-control','id'=>'address_2',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter a address_2","data-placement"=>"bottom",'rows'=>1,'cols'=>1])!!}
           <small class="text-danger">{{ $errors->first('address_2') }}</small>
        </div>
        </div>
 <div class="clearfix"></div>
           <div class="col-md-3">
        <div class="form-group @if($errors->first('city')) has-error @endif">
        <label>City</label>

         {!!Form::text('city',Input::old('city'),['class' => 'form-control','id'=>'city',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter a city","data-placement"=>"bottom",])!!}
           <small class="text-danger">{{ $errors->first('city') }}</small>
        </div>
        </div>

         <div class="col-md-3">
        <div class="form-group @if($errors->first('state')) has-error @endif">
        <label>State</label>

         {!!Form::text('state',Input::old('state'),['class' => 'form-control','id'=>'state',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter a state","data-placement"=>"bottom",])!!}
           <small class="text-danger">{{ $errors->first('state') }}</small>
        </div>
        </div>

         <div class="col-md-3">
        <div class="form-group @if($errors->first('country')) has-error @endif">
        <label>Country</label>

         {!!Form::text('country',Input::old('country'),['class' => 'form-control','id'=>'country',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter a country","data-placement"=>"bottom",])!!}
           <small class="text-danger">{{ $errors->first('country') }}</small>
        </div>
        </div>

        <div class="col-md-3">
        <div class="form-group @if($errors->first('zip_code')) has-error @endif">
        <label>Zip Code</label>

         {!!Form::text('zip_code',Input::old('zip_code'),['class' => 'form-control','id'=>'zip_code',"data-toggle"=>"popover","data-trigger"=>"focus","title"=>"","data-content"=>"Enter a zip_code","data-placement"=>"bottom",])!!}
           <small class="text-danger">{{ $errors->first('zip_code') }}</small>
        </div>
        </div>
          



          </div>

           <div class="col-md-8" style="margin-top:30px;">
            <p class="Submit">
            <input type="submit" class="btn Small" value="Create My Account">&nbsp;<a href="{{route('products')}}" class="alt">Return to store</a>
          </p>
          </div>




    {!! Form::close() !!}  
    </div>
    </div>



</div>
  </div>
        

</div>

@endsection

@section('script')
@parent

@stop