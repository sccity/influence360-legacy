<?php

namespace Influence360\Core\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Influence360\Core\Acl;
use Influence360\Core\Console\Commands\Version;
use Influence360\Core\Core;
use Influence360\Core\Facades\Acl as AclFacade;
use Influence360\Core\Facades\Core as CoreFacade;
use Influence360\Core\Facades\Menu as MenuFacade;
use Influence360\Core\Facades\SystemConfig as SystemConfigFacade;
use Influence360\Core\Menu;
use Influence360\Core\SystemConfig;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function boot()
    {
        include __DIR__.'/../Http/helpers.php';

        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');

        $this->loadTranslationsFrom(__DIR__.'/../Resources/lang', 'core');

        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'core');

        $this->publishes([
            dirname(__DIR__).'/Config/concord.php' => config_path('concord.php'),
            dirname(__DIR__).'/Config/cors.php'    => config_path('cors.php'),
            dirname(__DIR__).'/Config/sanctum.php' => config_path('sanctum.php'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands();

        $this->registerFacades();
    }

    /**
     * Register Bouncer as a singleton.
     *
     * @return void
     */
    protected function registerFacades()
    {
        $loader = AliasLoader::getInstance();

        $loader->alias('acl', AclFacade::class);

        $loader->alias('core', CoreFacade::class);

        $loader->alias('system_config', SystemConfigFacade::class);

        $loader->alias('menu', MenuFacade::class);

        $this->app->singleton('acl', fn () => app(Acl::class));

        $this->app->singleton('core', fn () => app(Core::class));

        $this->app->singleton('system_config', fn () => app()->make(SystemConfig::class));

        $this->app->singleton('menu', fn () => app()->make(Menu::class));
    }

    /**
     * Register the console commands of this package
     */
    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Version::class,
            ]);
        }
    }
}
