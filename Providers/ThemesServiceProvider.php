<?php

namespace Modules\Themes\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

define('THEMES_MODULE', 'themes');

class ThemesServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    
    /**
     *
     * @var array
     */
    public static $themes = [
        'grey' => ['primary' => '#97A4B0', 'secondary' => '#', 'hover' => '#8897A6'],
        'green' => ['primary' => '#52AD67', 'secondary' => '#', 'hover' => '#24963F'],
        'blue' => ['primary' => '#349DE9', 'secondary' => '#', 'hover' => '#0C5DD2'],
        'orange' => ['primary' => '#F68F33', 'secondary' => '#', 'hover' => '#E38330'],
        'purple' => ['primary' => '#864493', 'secondary' => '#F0E7F3', 'hover' => '#6E067A'],
        'red' => ['primary' => '#F0554F', 'secondary' => '#', 'hover' => '#E52F28'],
        'brown' => ['primary' => '#9E6937', 'secondary' => '#', 'hover' => '#844204']
    ];

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->hooks();
    }

    /**
     * Module hooks.
     */
    public function hooks()
    {
        // Add module's CSS file to the application layout.
        \Eventy::addFilter('stylesheets', function($styles) {
            $styles[] = \Module::getPublicPath(THEMES_MODULE).'/css/module.css';
            return $styles;
        });
        
        // Add module's JS file to the application layout.
        \Eventy::addFilter('javascripts', function($javascripts) {
            $javascripts[] = \Module::getPublicPath(THEMES_MODULE).'/js/module.js';
            return $javascripts;
        });

        // Add item to settings sections.
        \Eventy::addFilter('settings.sections', function($sections) {
            $sections[THEMES_MODULE] = ['title' => __('Themes'), 'icon' => 'tint', 'order' => 355];

            return $sections;
        }, 20);

        // Section settings
        \Eventy::addFilter('settings.section_settings', function($settings, $section) {
            if ($section == THEMES_MODULE) {
                $settings['themes.theme'] = \Option::get('themes.theme', \Config::get('themes.theme'));
            }
            return $settings;
        }, 20, 2);

        // Settings view name
        \Eventy::addFilter('settings.view', function($view, $section) {
            if ($section == THEMES_MODULE) {
                $view = 'themes::settings';
            }
            return $view;
        }, 20, 2);

        // Set theme colour.
        \Eventy::addFilter('layout.theme_color', function($color) {
            $color = self::$themes[\Option::get('themes.theme', \Config::get('themes.theme'))]['primary'];
            return $color;
        });

        // On settings save
        \Eventy::addFilter('settings.before_save', function($request, $section, $settings) {
            if ($section != THEMES_MODULE) {
                return $request;
            }

            # Get new settings
            $vars = $request->settings;
            $vars['theme'] = self::$themes[$request->settings['themes.theme']];

            # Build CSS from template
            ob_start();
            include(__DIR__.'/../Public/css/module.css.php');
            $css = ob_get_contents();
            ob_end_clean();

            # Save CSS file
            file_put_contents(__DIR__.'/../Public/css/module.css', $css);

            return $request;
        }, 20, 4);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerTranslations();
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('themes.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'themes'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/themes');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/themes';
        }, \Config::get('view.paths')), [$sourcePath]), 'themes');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $this->loadJsonTranslationsFrom(__DIR__ .'/../Resources/lang');
    }

    /**
     * Register an additional directory of factories.
     * @source https://github.com/sebastiaanluca/laravel-resource-flow/blob/develop/src/Modules/ModuleServiceProvider.php#L66
     */
    public function registerFactories()
    {
        if (! app()->environment('production')) {
            app(Factory::class)->load(__DIR__ . '/../Database/factories');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
