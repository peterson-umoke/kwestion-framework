<?php

namespace Modules\CustomCollectives\Providers;

use Form;
use Illuminate\Support\ServiceProvider;

class CustomCollectivesServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerConfig();
        $this->registerViews();
        Form::component('bsTextbox', 'customcollectives::bsText', ['name', 'value' => null, 'type' => 'text', 'attributes' => []]);
        Form::component('bsCheckbox', 'customcollectives::bsCheckbox', ['name', 'value' => null, 'attributes' => [], 'isInline' => false]);
        Form::component('bsRadiobox', 'customcollectives::bsRadio', ['name', 'value' => null, 'attributes' => [], 'isInline' => false]);
        Form::component('bsSelectbox', 'customcollectives::bsSelect', ['name', 'options' => [], 'value' => null, 'placeholder' => 'Choose ...', 'attributes' => []]);
        Form::component('bsTextareabox', 'customcollectives::bsTextArea', ['name', 'value' => null, 'attributes' => []]);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__ . '/../Config/config.php' => config_path('customcollectives.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/config.php', 'customcollectives'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/customcollectives');

        $sourcePath = __DIR__ . '/../views';

        $this->publishes([
            $sourcePath => $viewPath
        ], 'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/customcollectives';
        }, \Config::get('view.paths')), [$sourcePath]), 'customcollectives');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }
}
