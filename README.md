## Logging your application problems(achievements) to Telegram
### Ultralight package

## Usage
```
  \Log::telegram('Hey, i am your application, and i\'m have a problem');
```
![laravel telegram logger](https://gitlab.com/MatviiB/assets/raw/master/download.png)

# Instalation
```
composer require matviib/telegram-logger
```
Add to your .env file:
```
TELEGRAM_LOGGER_TOKEN=<YOUR_BOT_TOKEN>
TELEGRAM_LOGGER_CHAT_ID=XXX,YYY
#developer1 - XXX
#developer2 - YYY
```

To get chat_id send message to bot and then open the url:
`https://api.telegram.org/bot<YOUR_BOT_TOKEN>/getUpdates`
Search chat_id. This steps needed for adding EACH developer to listeners of the bot.
