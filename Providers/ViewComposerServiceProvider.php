<?php

namespace Modules\Saller\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Modules\Saller\Http\ViewComposers\IndexComposer;
use Modules\Saller\Http\ViewComposers\EditComposer;


class ViewComposerServiceProvider extends ServiceProvider {

	public function boot() {
		View::composer('saller::index', IndexComposer::class);
		View::composer('saller::edit', EditComposer::class);
	}

	public function register() {
        //
	}

}
