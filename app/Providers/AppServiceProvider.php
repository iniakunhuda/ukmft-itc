<?php

namespace App\Providers;

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
            if(isset($data)){
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
            if(isset($data)){
                echo e(($data == $value) ? 'selected' : '');
            } else {
                echo '';
            }
            ?>";
            return $parsed;   
        }); 

        // rupiah
        Blade::directive('rupiah', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });
    }
}