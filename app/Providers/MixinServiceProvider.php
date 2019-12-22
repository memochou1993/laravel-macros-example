<?php

namespace App\Providers;

use App\Mixins\CollectionMixin;
use App\Mixins\ResponseMixin;
use App\Mixins\StrMixin;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class MixinServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Str::mixin(new StrMixin());
        Collection::mixin(new CollectionMixin());
        ResponseFactory::mixin(new ResponseMixin());
    }
}
