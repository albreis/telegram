# SDK PHP PARA BOT DE TELEGRAM

```php

use Albreis\Telegram\Bot as TelegramBot;
use Albreis\Telegram\Config as TelegramConfig;

include 'vendor/autoload.php';

$chat_id = 'insira o id do seu chat';

TelegramConfig::setToken(getenev('TELEGRAM_BOT_TOKEN'));

/**
 * Utilize parâmetros/argumentos nomeados (Named Arguments / Named Parameters)
 */
$response = TelegramBot::sendMessage(
    chat_id: $chat_id,
    text: 'Test message'
);

var_dump($response);

```