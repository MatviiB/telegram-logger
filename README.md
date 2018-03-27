## Logging your application problems(achievements) to Telegram
### Ultralight package

## Usage
```
  \Log::telegram('Hey, i am your application, and i have a problem');
```
![laravel telegram logger](https://gitlab.com/MatviiB/assets/raw/master/download%20(2).png)

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

# Bonus
### Creating telegram bot tutorial
Find BotFather. Send `/newbot`. Set up name and bot-name for your bot. Get token and add it to your .env file.
Find your bot (BotFather already generate link to it in last message). Send one or few messages to him.

Open next url `https://api.telegram.org/bot<YOUR_BOT_TOKEN>/getUpdates` and find `chat_id`.
This step needed for adding EACH developer to listeners of the bot.

![laravel telegram logger](https://gitlab.com/MatviiB/assets/raw/master/download%20(1).png)
