<?php

namespace App\Services;

// Если Http фасад больше не используется в этом файле, его можно удалить
// use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log; // Опционально для логирования

trait Laralink {

    /**
     * Модифицированный метод для обхода внешней проверки лицензии при установке.
     * Всегда возвращает успешный результат.
     */
    public function verify($code, $username)
    {
        Log::info('[Laralink Bypass - Install] Verification skipped. Returning success.');
        return [
            'success' => true,
            'message' => 'Purchase code successfully verified (Bypassed during install).',
            'note'    => base64_encode('// Laralink install verification bypassed on ' . date('Y-m-d H:i:s'))
        ];
    }

    /**
     * Модифицированный метод core.
     * Всегда возвращает true, чтобы любая проверка Laralink::core() проходила.
     */
    public static function core()
    {
        Log::info('[Laralink Bypass - Runtime] Core check returning true.');
        return true; // <--- **КЛЮЧЕВОЕ ИЗМЕНЕНИЕ ДЛЯ ОШИБКИ 403**
    }
}