<?php

namespace App\Providers;

use App\Models\Course;
use App\Models\Exercise;
use App\Models\Point;
use App\Models\Product;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Relation::enforceMorphMap([
            'course' => Course::class,
            'product' => Product::class,
            'topic' => Topic::class,
            'point' => Point::class,
            'exercise' => Exercise::class,
            'user' => User::class
        ]);

        Validator::extend('poly_exists', function ($attribute, $value, $parameters, $validator) {
            if (!$objectType = data_get($validator->getData(), $parameters[0], false)) {
                return false;
            }

            return !empty(resolve(Relation::getMorphedModel($objectType))->find($value));
        }, "Wrong polymorphic object id");
    }
}
