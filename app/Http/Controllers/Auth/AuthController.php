<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use DB;
use Response;
use Redirect;
use Auth;
use Input;
use Artisan;
use App;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    private $redirectTo = '/';

    
    public function __construct()
    {
        // $this->middleware('guest', ['except' => 'logout']);
    }

    protected function validator(array $data)
   {
       return Validator::make($data, [
           'name' => 'required|max:255',
           'email' => 'required|email|max:255|unique:users',
           'password' => 'required|confirmed|min:6',
       ]);
   }




    protected function showRegister(){
            return view('auth.register');
    }

    protected function postSignUp(SignUpRequest $request){
        // dd($request->all());
        if($request->password==$request->confirm_password){


     Sentinel::create([
    'first_name'    => $request->first_name,
    'last_name' => $request->last_name,
    'phone_number' => $request->phone_number,
    'address_1' => $request->address_1,
    'address_2' => $request->address_2,
    'city' => $request->city,
    'state' => $request->state,
    'country' => $request->country,
    'zip_code' => $request->zip_code,
    
    'email' => $request->email,
    'password' => $request->password,
     ]);
     // dd("success");


        $sign_up = new SignUp;
        $sign_up->first_name=$request->first_name;
        $sign_up->last_name=$request->last_name;
        $sign_up->email=$request->email;
        $sign_up->password=bcrypt($request->password);
        $sign_up->phone_number=$request->phone_number;
        $sign_up->address_1=$request->address_1;
        $sign_up->address_2=$request->address_2;
        $sign_up->city=$request->city;
        $sign_up->state=$request->state;
        $sign_up->country=$request->country;
        $sign_up->zip_code=$request->zip_code;
        $sign_up->save();
       
       $userdata = array(
            'email'     => $request->email,
            'password'  => $request->password
        );

        // attempt to do the login
        if (Auth::attempt($userdata)) {
          return Redirect::route('dashboard')->with('message','Hello '.Auth::user()->first_name .',Successfully  Registered ')->with('er_type','success');
        } else {        
          return Redirect::to('sign_in')->with('message','Credentials Wrong')->with('er_type','danger');
        }
    }else{
   return Redirect::to('sign_up')->with('message','Password Mismatch')->with('er_type','danger');
   
    }


    }

    protected function showLogin(){
            return view('auth.login');
    }

    public function doLogin(Request $request)
    {
  // validate the info, create rules for the inputs
    $rules = array(
        'name'    => 'required', // make sure the email is an actual email
        'password' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
    );

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {
        return Redirect::to('login')->with('message','Inputs Invalid')->with('er_type','error')
            ->withErrors($validator) // send back all errors to the login form
            ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
    } else {
        // create our user data for the authentication
        $userdata = array(
            'name'     => Input::get('name'),
            'password'  => Input::get('password')
        );

        // attempt to do the login
        if (Auth::attempt($userdata)) {
          return Redirect::route('dashboard')->with('message','Hello '.Auth::user()->first_name .',Successfully Logged In')->with('er_type','success');
        } else { 
            // dd(bcrypt('superadmin'));
            // dd($userdata);
          return Redirect::to('login')->with('message','Credentials Wrong')->with('er_type','error');
        }

    }

    
    }

    public function signOut(){
      Auth::logout();
      return Redirect::route('login');
    }

    // public function deactivate(){
    //     if (App::isDownForMaintenance()){
    //         Artisan::call('up');
    //     }else{
    //         Artisan::call('down');
    //     }
    // }
}

