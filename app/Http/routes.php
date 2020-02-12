<?php
//Common Routes
Route::when('*', ['middleware' => 'csrf'], ['POST', 'PUT', 'PATCH', 'DELETE']);
//Temp Routes
Route::get('/',['as' => 'home','uses'=>'Prok\HomeController@index']);

//Auth
// Route::group(['namespace'=>'Auth'], function () {
//   Route::get('login',['as' => 'login','uses'=>'AuthController@showLogin']);
//   Route::post('login',['as' => 'postLogin','uses'=>'AuthController@doLogin']);
//   Route::get('sign_out',['as' => 'sign_out','uses'=>'AuthController@signOut']);
// });

//DAS Routes

//Website




Route::group(['namespace'=>'Auth'], function () {
  Route::get('login',['as' => 'login','uses'=>'AuthController@showLogin']);
  // Route::get('deactivate',['as' => 'deactivate','uses'=>'AuthController@deactivate']);
  Route::post('login',['as' => 'postLogin','uses'=>'AuthController@doLogin']);
  Route::get('sign_out',['as' => 'sign_out','uses'=>'AuthController@signOut']);
});
Route::group(['prefix'=>'siddhivinayak','namespace'=>'siddhivinayak','middleware'=>'auth'],function(){
Route::get('dashboard',['as' => 'dashboard','uses'=>'DashboardController@index']);
  
   Route::resource('news','NewsController');
   Route::get('/news/deactivate/{id}', ['as' => 'news.deactivate', 'uses' => 'NewsController@deactivate']);

    Route::resource('career','CareerController');
  Route::get('/career/deactivate/{id}', ['as' => 'career.deactivate', 'uses' => 'CareerController@deactivate']);

 Route::group(['prefix'=>'masters','namespace'=>'masters'],function(){


   


     Route::resource('gallery','GalleryController');
   Route::post('/upload_gallery/', ['as' => 'siddhivinayak.masters.gallery.uploadGallery', 'uses' => 'GalleryController@uploadGallery']);
   Route::put('/upload_gallery_image/', ['as' => 'siddhivinayak.masters.gallery.uploadGalleryImage', 'uses' => 'GalleryController@uploadGalleryImage']);
    Route::get('/gallery/deactivate/{id}', ['as' => 'masters.gallery.deactivate', 'uses' => 'GalleryController@deactivate']);
    Route::get('/gallery/pushgallery/{id}', ['as' => 'siddhivinayak.masters.gallery.pushgallery', 'uses' => 'GalleryController@pushgallery']);


     Route::resource('folder','FolderController');
   Route::post('/upload_folder/', ['as' => 'siddhivinayak.masters.folder.uploadFolder', 'uses' => 'FolderController@uploadFolder']);
   Route::put('/upload_folder_image/', ['as' => 'siddhivinayak.masters.folder.uploadFolderImage', 'uses' => 'FolderController@uploadFolderImage']);
    Route::get('/folder/deactivate/{id}', ['as' => 'masters.folder.deactivate', 'uses' => 'FolderController@deactivate']);


    //Event Master
    Route::resource('events','EventsController');
    Route::post('/updateEvent/',['as'=>'siddhivinayak.masters.events.updateEvent','uses'=>'EventController@updateEvent']);
    Route::get('/events/deactivate/{id}', ['as' => 'masters.events.deactivate', 'uses' => 'EventsController@deactivate']);








 Route::resource('home_slider','HomeSliderController');
 Route::post('/upload_slider/', ['as' => 'siddhivinayak.masters.home_slider.uploadSlider', 'uses' => 'HomeSliderController@uploadSlider']);
 Route::put('/upload_image/', ['as' => 'siddhivinayak.masters.home_slider.uploadSliderImage', 'uses' => 'HomeSliderController@uploadSliderImage']);
    Route::get('/home_slider/deactivate/{id}', ['as' => 'masters.home_slider.deactivate', 'uses' => 'HomeSliderController@deactivate']);

//Occasion Master
Route::resource('occasion','OccasionController');
Route::get('/occasion/deactivate/{id}', ['as'=> 'siddhivinayak.masters.occasion.deactivate','uses'=>'OccasionController@deactivate']);
Route::post('/updateOccasion/',['as'=>'siddhivinayak.masters.occasion.updateOccasion','uses'=>'OccasionController@updateOccasion']);

//Tags Master

// Route::get('/uom_master/deactivate/{id}', ['as' => 'masters.uom_master.deactivate', 'uses' => 'UomMasterController@deactivate']);
    // Route::post('/updateUom/', ['as' => 'dbs.masters.uom_master.updateUom', 'uses' => 'UomMasterController@updateUom']);


  });
 });







//DAS Routes



Route::group(['namespace'=>'website'], function () {

    
      Route::get('/',['as' => 'home','uses'=>'HomeController@home']);
         Route::get('/about',['as' => 'about','uses'=>'HomeController@about']);
      
        Route::get('/contact',['as' => 'contact','uses'=>'HomeController@contact']);
         Route::post('/contact',['as' => 'contact.post','uses'=>'HomeController@postContact']);
           Route::get('/gallery/{folder_id}',['as' => 'gallery','uses'=>'HomeController@gallery']);
           Route::get('/hawan',['as' => 'hawan','uses'=>'HomeController@hawan']);
             Route::get('/arati',['as' => 'arati','uses'=>'HomeController@arati']);
           Route::get('/gallery_folder',['as' => 'gallery_folder','uses'=>'HomeController@gallery_folder']);
           Route::get('/donation',['as' => 'donation','uses'=>'HomeController@donation']);
            Route::get('/events',['as' => 'events','uses'=>'HomeController@events']);
            Route::get('/priests',['as' => 'priests','uses'=>'HomeController@priests']);
             Route::get('/services',['as' => 'services','uses'=>'HomeController@services']);
               Route::get('/video',['as' => 'video','uses'=>'HomeController@video']);


               Route::get('/subscribe',['as' => 'subscribe','uses'=>'HomeController@subscribe']);
                   Route::post('/subscribe',['as' => 'subscribe.posts','uses'=>'HomeController@postSubscribe']);

                   Route::get('/sankalpa',['as' => 'sankalpa','uses'=>'HomeController@sankalpa']);
                   Route::post('/sankalpa',['as' => 'sankalpa.posts','uses'=>'HomeController@postSankalpa']);
             
       Route::get('/satyanarayana_marathe',['as' => 'satyanarayana_marathe','uses'=>'HomeController@satyanarayana_marathe']);
 Route::get('/satyanarayana_marathe_priest',['as' => 'satyanarayana_marathe_priest','uses'=>'HomeController@satyanarayana_marathe_priest']);

  
    Route::post('searchItem',array('as'=>'searchItem','uses'=>'HomeController@searchItem')) ;

    

 //event
        Route::resource('/calendar', 'EventController');
        Route::get('/my_calender', ['as' => 'my_calender', 'uses' => 'EventController@index']);
        Route::post('moveCalendarEvents', ['as' => 'moveCalendarEvents', 'uses' => 'EventController@moveCalendarEvents']);
        Route::post('deleteRecurringEvent', ['as' => 'deleteRecurringEvent', 'uses' => 'EventController@deleteRecurringEvent']);
        Route::post('storeCalendarEvents', ['as' => 'storeCalendarEvents', 'uses' => 'EventController@storeCalendarEvents']);
        Route::post('deleteCalendarEvents', ['as' => 'deleteCalendarEvents', 'uses' => 'EventController@deleteCalendarEvents']);






    // Route::get('/home',['as' => 'home','uses'=>'HomeController@home']);
    
});



use Illuminate\Database\Query\Builder;

Builder::macro('if', function ($condition, $column, $operator, $value) {
    if ($condition) {
        return $this->where($column, $operator, $value);
    }

    return $this;
});

 



  
function getFormatedDate($date){
  $formated_date=date("d F Y",strtotime($date));
  return $formated_date;
}



function getItemUploadedTmpPath($file){
$file_path='';
if (App::environment('local')) {
    $file_path='/siddhivinayak/image/item/'.$file;
    } else{
    $file_path=ENV('DOMAIN_PATH').'/siddhivinayak/image/item/'.$file;
    }
return $file_path;
}



function getItemUploadedPath($file){
  $file_path='';
  if (App::environment('local')) {
    $file_path='/siddhivinayak/image/item/'.$file;
  } else{
    $file_path=ENV('DOMAIN_PATH').'/siddhivinayak/image/item/'.$file;
  }
  return $file_path;
}




function getSliderUploadedTmpPath($file){
$file_path='';
if (App::environment('local')) {
    $file_path='/siddhivinayak/image/home_slider/'.$file;
    } else{
    $file_path=ENV('DOMAIN_PATH').'/siddhivinayak/image/home_slider/'.$file;
    }
return $file_path;
}


function getSliderUploadedPath($file){
  $file_path='';
  if (App::environment('local')) {
    $file_path='/'.$file;
  } else{
    $file_path=ENV('DOMAIN_PATH').'/'.$file;
  }
  return $file_path;
}


function getSubCategoryUploadedTmpPath($file){
$file_path='';
if (App::environment('local')) {
    $file_path='/siddhivinayak/image/sub_category/'.$file;
    } else{
    $file_path=ENV('DOMAIN_PATH').'/siddhivinayak/image/sub_category/id/'.$file;
    }
return $file_path;
}


function getSubCategoryUploadedPath($file){
  $file_path='';
  if (App::environment('local')) {
    $file_path='/'.$file;
  } else{
    $file_path=ENV('DOMAIN_PATH').'/'.$file;
  }
  return $file_path;
}
function getGalleryUploadedTmpPath($file){
$file_path='';
if (App::environment('local')) {
    $file_path='/siddhivinayak/image/gallery/'.$file;
    } else{
    $file_path=ENV('DOMAIN_PATH').'/siddhivinayak/image/sub_category/id/'.$file;
    }
return $file_path;
}
function getFolderUploadedTmpPath($file){
$file_path='';
if (App::environment('local')) {
    $file_path='/siddhivinayak/image/folder/'.$file;
    } else{
    $file_path=ENV('DOMAIN_PATH').'/siddhivinayak/image/folder/id/'.$file;
    }
return $file_path;
}
function getFolderUploadedPath($file){
  $file_path='';
  if (App::environment('local')) {
    $file_path='/'.$file;
  } else{
    $file_path=ENV('DOMAIN_PATH').'/'.$file;
  }
  return $file_path;
}
function getGalleryUploadedPath($file){
  $file_path='';
  if (App::environment('local')) {
    $file_path='/'.$file;
  } else{
    $file_path=ENV('DOMAIN_PATH').'/'.$file;
  }
  return $file_path;
}