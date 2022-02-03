<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        //
        Schema::defaultStringLength(191);

        Builder::macro('search', function ($field, $string) {

            $field  = (array) $field;
            $string = '%' . $string . '%';

            return $this->where(function ($query) use ($field, $string) {
                foreach ($field as $f) {
                    $query->orWhere($f, 'like', $string);
                }
            });
        });
    }
}
