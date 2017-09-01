<?php

namespace Modules\Matchinggame\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Matchinggame\Events\Handlers\RegisterMatchinggameSidebar;

class MatchinggameServiceProvider extends ServiceProvider
{
    use CanPublishConfiguration;
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
        $this->app['events']->listen(BuildingSidebar::class, RegisterMatchinggameSidebar::class);
    }

    public function boot()
    {
        $this->publishConfig('matchinggame', 'permissions');

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Matchinggame\Repositories\MatchingGameRepository',
            function () {
                $repository = new \Modules\Matchinggame\Repositories\Eloquent\EloquentMatchingGameRepository(new \Modules\Matchinggame\Entities\MatchingGame());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Matchinggame\Repositories\Cache\CacheMatchingGameDecorator($repository);
            }
        );
// add bindings

    }
}
