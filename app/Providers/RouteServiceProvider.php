<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * O caminho para a "home" do seu aplicativo.
     * Normalmente é onde os usuários são redirecionados após o login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Registre quaisquer serviços de roteamento.
     */
    public function boot(): void
    {
        parent::boot();

        $this->routes(function () {
            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api.php'));
        });
    }
}
