import telebot
from config import TOKEN, ADMIN_ID
from game_engine import GameEngine

bot = telebot.TeleBot(TOKEN)
game = GameEngine()

@bot.message_handler(commands=['start'])
def start(message):
    bot.reply_to(message, "Mafia o'yiniga xush kelibsiz! /join deb yozib qo'shiling.")

@bot.message_handler(commands=['join'])
def join(message):
    user_id = message.from_user.id
    username = message.from_user.username or message.from_user.first_name
    resp = game.add_player(user_id, username)
    bot.reply_to(message, resp)

@bot.message_handler(commands=['role'])
def role(message):
    user_id = message.from_user.id
    resp = game.get_role(user_id)
    bot.reply_to(message, resp, parse_mode="Markdown")

if __name__ == "__main__":
    bot.polling()