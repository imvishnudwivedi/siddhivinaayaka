<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;
use DB;
use View;
use App\Models\ArtType\ArtTypeModel;

class FormMacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Project Types
        Form::macro('artTypeSelect', function($name,$selected)
        {
            $project_types=['0' => 'Select Project Type'] + DB::table('project_types')->lists('project_type_name', 'id');
            return Form::select($name, $project_types, $selected, ['class' => 'form-control','id'=>'project_type_id']);
        });


        Form::macro('countrySelect', function($country_id,$selected)
         {
          $countries=['0' => 'Select Country code'] +DB::table('countries')->lists(DB::raw('concat ("+",phonecode) as phonecode'),'id');
          return Form::select($country_id, $countries, $selected, ['class' => 'form-control','id'=>'country_id','name'=>'country_id','data-live-search'=>'true']);
        });
        Form::macro('countrySelect1', function($countries_id,$selected)
         {
          $countries=['0' => 'Select Country'] +DB::table('countries')->lists('name','id');
          return Form::select($countries_id, $countries, $selected, ['class' => 'form-control','id'=>'countries_id','name'=>'countries_id','data-live-search'=>'true']);
        });

         View::composer('website/layouts/sidebar', function($view){
      $artTypeByProviders=ArtTypeModel::get();
     $view->with('artTypeByProviders', $artTypeByProviders);
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
