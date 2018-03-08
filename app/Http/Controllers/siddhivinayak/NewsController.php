<?php

namespace App\Http\Controllers\siddhivinayak;

use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\Models\News\NewsModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Redirect;
use Auth;
use view;
 
class NewsController extends Controller
{
    
    public function index()
    {
      $news=DB::table('news_master AS a')
          ->join('users AS u','a.created_by','=','u.id')
          ->leftjoin('users AS u1','a.updated_by','=','u1.id')
          ->select('a.*','u.name AS created_by','u1.name AS updated_by')
          ->get();
          return view('siddhivinayak.News.index')->with('news',$news);   
    }

    
    public function create()
    {
         $news=NewsModel::withTrashed()->orderBy('id','DESC')->paginate(env('PAGE_SIZE',10));

          return view('siddhivinayak.News.create')->with('news',$news);
    
    }

   
  public function store(NewsRequest $request)
  {
         // dd( $request->all());
        $news = new NewsModel;
        $news->news_heading=$request->news_heading;
        $news->news_description=$request->news_description;
        $news->created_by=Auth::user()->id;

       if ($request->file('image')){
        // unset($request->old_logo);
        $image=$request->file('image');
        $filePath='siddhivinayak/image/news/';
        $filename=time().'.'.pathinfo($image->getClientOriginalName(),PATHINFO_EXTENSION);
        // $image->move($filePath,$filename);
        $image = $image->move($filePath, $filename);


         $news->image_path='siddhivinayak/image/news/'.$filename;
       }
        $news->save();
       return redirect()->route('siddhivinayak.news.index')->with('message','Successfully Added')->with('er_type','success'); 
    }

   
     public function show($id)
    {
        $news=NewsModel::where('id',$id)->first();
        
         
       
    if($news){
      return view('siddhivinayak.News.show')->with('news',$news);
    }else{
        $news=NewsModel::onlyTrashed()->where('id', '=', $id)->first();
      return view('siddhivinayak.News.show')->with('news',$news);
    }
    }

    
   public function edit($id)
    {
      //  
         $news=NewsModel::where('id',$id)->first();
    
    if($news){
      return view('siddhivinayak.News.edit')->with('news',$news);
    
    }else{

     return redirect()->route('siddhivinayak.news.index')->with('message','Cannot Edit Deactivated News')->with('er_type','danger');
    }
    }

     
    public function update(NewsRequest $request, $id)
    {
         // dd($request->all());
        $news=NewsModel::where('id', '=', $id)->first();
        $news->news_heading=$request->news_heading;
        $news->news_description=$request->news_description; 
        $news->updated_by=Auth::user()->id;
        if ($request->file('image')){
        $image=$request->file('image');
        $filePath='siddhivinayak/image/news/';
        $filename=time().'.'.pathinfo($image->getClientOriginalName(),PATHINFO_EXTENSION);
        // $image->move(public_path() .'/siddhivinayak/image/news/',$filename);
        $image = $image->move($filePath, $filename);
         $news->image_path='siddhivinayak/image/news/'.$filename;
         if(isset($request->old_image_path)){
         unset($request->old_image_path);
       }
       }
       if(!$news->isDirty()){
            return redirect()->route('siddhivinayak.news.index');
        }
        $news->save();
       return redirect()->route('siddhivinayak.news.index')->with('message','Successfully Updated')->with('er_type','success'); 
           }

   
    public function destroy($id)
    {
        //
    }



    public function deactivate($id)
    {
         $news=NewsModel::where('id', '=', $id)->first();
        if($news){
          $news->delete();
          return redirect()->route('siddhivinayak.news.index')->with('message','Successfully deactivated')->with('er_type','danger');
        }else{
          $news=NewsModel::onlyTrashed()->where('id', '=', $id)->first();
          $news->restore();
          return redirect()->route('siddhivinayak.news.index')->with('message','Successfully activated')->with('er_type','success ');
        }
    }
}
