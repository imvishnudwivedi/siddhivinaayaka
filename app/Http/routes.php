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

Route::get('/deleteAttachment',['as'=>'deleteAttachment','uses'=>'prok\masters\ItemController@deleteAttachment']);
Route::post('/headerAttachment',['as'=>'masters.item.upload.headerAttachment','uses'=>'prok\masters\ItemController@headerAttachment']);
Route::get('/deleteTmpAttachment',['as'=>'deleteTmpAttachment','uses'=>'prok\masters\ItemController@deleteTmpAttachment']);


Route::get('/deleteBoqAttachment',['as'=>'deleteBoqAttachment','uses'=>'prok\masters\ItemController@deleteBoqAttachment']);
Route::post('/boqAttachment',['as'=>'masters.item.upload.boqAttachment','uses'=>'prok\masters\ItemController@boqAttachment']);
Route::get('/deleteBoqTmpAttachment',['as'=>'deleteBoqTmpAttachment','uses'=>'prok\masters\ItemController@deleteBoqTmpAttachment']);



Route::get('/deleteBosAttachment',['as'=>'deleteBosAttachment','uses'=>'prok\masters\ItemController@deleteBosAttachment']);
Route::post('/bosAttachment',['as'=>'masters.item.upload.bosAttachment','uses'=>'prok\masters\ItemController@bosAttachment']);
Route::get('/deleteBosTmpAttachment',['as'=>'deleteBosTmpAttachment','uses'=>'prok\masters\ItemController@deleteBosTmpAttachment']);


Route::group(['namespace'=>'Auth'], function () {
  Route::get('login',['as' => 'login','uses'=>'AuthController@showLogin']);
  // Route::get('deactivate',['as' => 'deactivate','uses'=>'AuthController@deactivate']);
  Route::post('login',['as' => 'postLogin','uses'=>'AuthController@doLogin']);
  Route::get('sign_out',['as' => 'sign_out','uses'=>'AuthController@signOut']);
});


//DAS Routes



Route::group(['namespace'=>'website'], function () {

    
      Route::get('/',['as' => 'home','uses'=>'HomeController@home']);
         Route::get('/about',['as' => 'about','uses'=>'HomeController@about']);
      
        Route::get('/contact',['as' => 'contact','uses'=>'HomeController@contact']);
         Route::post('/contact',['as' => 'contact.post','uses'=>'HomeController@postContact']);
           Route::get('/gallery',['as' => 'gallery','uses'=>'HomeController@gallery']);
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
    $file_path='/prok/image/item/'.$file;
    } else{
    $file_path=ENV('DOMAIN_PATH').'/prok/image/item/'.$file;
    }
return $file_path;
}



function getItemUploadedPath($file){
  $file_path='';
  if (App::environment('local')) {
    $file_path='/prok/image/item/'.$file;
  } else{
    $file_path=ENV('DOMAIN_PATH').'/prok/image/item/'.$file;
  }
  return $file_path;
}




function getSliderUploadedTmpPath($file){
$file_path='';
if (App::environment('local')) {
    $file_path='/prok/image/home_slider/'.$file;
    } else{
    $file_path=ENV('DOMAIN_PATH').'/prok/image/home_slider/'.$file;
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
    $file_path='/prok/image/sub_category/'.$file;
    } else{
    $file_path=ENV('DOMAIN_PATH').'/prok/image/sub_category/id/'.$file;
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
