<?php

namespace Modules\Saller\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Dashboard\Entities\Company;
use Modules\Saller\Entities\Saller;
use Modules\Dashboard\Entities\Admin;

class GuardsServiceProvider extends ServiceProvider {

    //protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {

        $guards = config('auth.guards');

        $guards['app'] = [
            'driver' => 'session',
            'provider' => 'sallers',
        ];

        config(['auth.guards' => $guards]);

        $providers = config('auth.providers');

        $providers['sallers'] =  [
            'driver' => 'eloquent',
            'model' => Saller::class,
        ];

        config(['auth.providers' => $providers]);


        /*$passwords = config('auth.passwords');
        $passwords['sallers'] =  [
            'provider' => 'sallers',
            'table' => 'companies_password_resets',
            'expire' => 60,
        ];

        config(['auth.passwords' => $passwords]); 
    
        $filesystems = config('filesystems.disks');
        $filesystems['modules_assets'] =  [
            'driver' => 'local',
            'root' => public_path('modules'),
        ];

        config(['filesystems.disks' => $filesystems]);
*/

    }

}