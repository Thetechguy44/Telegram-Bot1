<?php

return [
    'bot_token' => env('TELEGRAM_BOT_TOKEN', ''),
    'bot_username' => env('TELEGRAM_BOT_USERNAME', ''),
    
    /*
     * Telegram Bot API Base URI
     */
    'base_uri' => 'https://api.telegram.org',
    
    /*
     * Telegram webhook settings
     */
    'webhook_url' => env('TELEGRAM_WEBHOOK_URL', ''),
    
    /*
     * Default Bot Commands
     */
    'commands' => [
        //Telegram\Bot\Commands\HelpCommand::class,
    ],
];