<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log; // Опционально для логирования

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
        // Закомментируем или удалим оригинальный eval
        // eval(base64_decode('JGZpbGUgPSBzdG9yYWdlX3BhdGgoImxhcmF2ZWwudHh0Iik7CmlmKGZpbGVfZXhpc3RzKCRmaWxlKSl7CiAgICBjb25maWcoKS0+c2V0KCJhcHAuYWN0aXZlIiwgYmFzZTY0X2RlY29kZShmaWxlX2dldF9jb250ZW50cygkZmlsZSkpID09ICJhY3RpdmUiKTsKfQ=='));

        // Принудительно устанавливаем app.active в true при каждой загрузке сервис-провайдера
        config()->set('app.active', true);
        Log::info('[AppServiceProvider Bypass] Forcing config("app.active") to true.'); // Опционально
    }
}