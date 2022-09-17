<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $dataUrl =[
            'open works'=>'الاعمال المفتوحة',
            'd'=>'المحافظة',
            'd1'=>'صنعاء',
            'profile'=>'الملف الشخصي',
             'settings'=>'الاعدادات',
             'worker' =>'العمال',


        ];
       view()->share('currentPath',explode('/',substr_replace(request()->path(),'',0,0)));
       view()->share('dataUrl',$dataUrl);

    }
}
