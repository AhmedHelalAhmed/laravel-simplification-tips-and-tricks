<?php

namespace App\Providers;

use App\View\Components\CategorySelect;
use App\View\Components\FieldLabel;
use App\View\Components\InputField;
use App\View\Components\TextareaField;
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
        Blade::component('input-field', InputField::class);
        Blade::component('textarea-field', TextareaField::class);
        Blade::component('category-select', CategorySelect::class);
        Blade::component('field-label', FieldLabel::class);

    }
}
