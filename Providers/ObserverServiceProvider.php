<?php

namespace Modules\Saller\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Saller\Entities\Saller;
use Modules\Saller\Observers\SallerObserver;


class ObserverServiceProvider extends ServiceProvider {

	public function boot() {
		Saller::observe(SallerObserver::class);
	}

	public function register() {
        //
	}

}
