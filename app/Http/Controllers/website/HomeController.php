<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\subscribe;

use DB;
use Response;
use Redirect;
use Auth;
use Validator;
use Input;
use Mail;
use App;


class HomeController extends Controller
{

	public function index()
    {

		return view('welcome');
	}

    public function home()
	{

	    return view('website.index');

	}  
  public function about()
  {

    return view('website.about');
  }
  
   public function gallery_folder()
  {

    return view('website.gallery_folder');
  }
   public function gallery()
  {

    return view('website.gallery');
  }
   public function hawan()
  {

    return view('website.hawan');
  }

    public function arati()
  {

    return view('website.arati');
  }
    public function video()
  {

    return view('website.video');
  }

   public function donation()
  {

    return view('website.donation');
  }
   public function events()
  {

    return view('website.events');
  }
  
   public function priests()
  {

    return view('website.priests');
  }
   public function services()
  {

    return view('website.services');
  }
  
  
    public function contact()
  {

    return view('website.contact');
  }
    
    public function subscribe()
  {
    $country_deatils=DB::table('countries')->get();
    $subscribe=DB::table('subscribes')->orderBy('id', 'desc')->get();

    return view('website.subscribe')->with('country_deatils', $country_deatils)->with('subscribe', $subscribe);
  }
  



		 public function postContact(Request $request)
    {

    	$data=$request->all();


      $data = array(
           'name'   => $request->name,
           'phone' => $request->phone,
           'email'  =>  $request->email,
           
           'message1' => $request->message1,
         );
      // dd($data);

       Mail::send('website.contact_request', $data, function($message)
       {
           $message->to("siddhivinaayak2017@gmail.com")->subject('Contact form submission');
       });

		return Redirect::route('contact')->with('message', 'Thanks for contacting us!')->with('er_type','success');

       // return back()->with('message', 'Thanks for contacting us!')->with('er_type','success');

    }


     public function postSubscribe(Request $request)
    {
      

$country_deatils=DB::table('countries')->where('id','=',$request->countries_id)->first();
// dd($country_deatils);
   $subscribe = new subscribe;
    $subscribe->name=$request->name;
    $subscribe->email=$request->email;
    $subscribe->country=$country_deatils->name;

    $subscribe->cc=$country_deatils->phonecode;
      $subscribe->phone_number=$request->phone_number;
 
    $subscribe->comment=$request->comment;
   

      
        $subscribe->save();

          return redirect()->back()->with('message','Successfully Added')->with('er_type','success'); 
   
    }


 


}
