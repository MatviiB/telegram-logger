<?php

namespace MatviiB;

use Illuminate\Support\Facades\Log;

class TelegramLog extends Log
{
    /**
     * Send note to developers with Telegram.
     *
     * @param $note
     */
    public static function telegram($note)
    {
        $token = env('TELEGRAM_LOGGER_TOKEN');
        $chat_id = env('TELEGRAM_LOGGER_CHAT_ID');

        $message = '<b>' . env('APP_NAME') . '</b>' . PHP_EOL
            . '<b>' . env('APP_ENV') . '</b>' . PHP_EOL
            . '<i>Message:</i>' . PHP_EOL
            . '<code>' . $note . '</code>';

        try {
            $ids = explode(',', $chat_id);

            foreach ($ids as $id) {
                file_get_contents(
                    'https://api.telegram.org/bot' . $token . '/sendMessage?'
                    . http_build_query([
                        'text' => $message,
                        'chat_id' => $id,
                        'parse_mode' => 'html'
                    ])
                );
            }
        } catch (\Exception $e) {
            Log::error('TelegramLog bad token/chat_id.');
        }
    }
}
