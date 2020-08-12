<?php

namespace App\Providers;

use App\Setting;
use App\Page;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        config(['app.locale' => 'id']);
        \Carbon\Carbon::setLocale('id');

        Blade::directive('isChecked', function ($expression) {
            list($data, $value) = explode(', ', $expression);
            $parsed = "<?php 
            if(is_null($data)) {
                 echo '';
            } else if(isset($data)){
                echo e(($data == $value) ? 'checked' : '');
            } else {
                echo '';
            }
            ?>";
            return $parsed;   
        }); 

        Blade::directive('isSelected', function ($expression) {
            list($data, $value) = explode(', ', $expression);
            $parsed = "<?php 
            if(is_null($data)) {
                 echo '';
            } else if(isset($data)){
                echo e(($data == $value) ? 'selected' : '');
            } else {
                echo '';
            }
            ?>";
            return $parsed;   
        }); 

        // rupiah
        Blade::directive('rupiah', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });
        
        // pengaturan global
        // $settings = [];
        // $data = Setting::all();
        // foreach((array) $data->toArray() as $r) {
        //     $settings[$r['key']] = $r['value'];
        // }
        // view()->share('SETTING', $settings);

        // // menu home
        // view()->share('SETTING_MENUS', Page::where('page_id', NULL)->get());
    }
}