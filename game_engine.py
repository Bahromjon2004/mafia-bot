import random

class GameEngine:
    def __init__(self):
        self.players = {}
        self.roles = {}

    def add_player(self, user_id, username):
        if user_id in self.players:
            return f"{username}, siz allaqachon o'yinga qo'shilgansiz!"
        self.players[user_id] = username
        return f"{username} o'yinga qo'shildi!"

    def assign_roles(self):
        available_roles = ["Mafia", "Sherif", "Oddiy fuqaro", "Shifokor"]
        player_ids = list(self.players.keys())
        random.shuffle(player_ids)
        for i, pid in enumerate(player_ids):
            role = available_roles[i % len(available_roles)]
            self.roles[pid] = role

    def get_role(self, user_id):
        if user_id not in self.roles:
            self.assign_roles()
        role = self.roles.get(user_id, None)
        if role:
            return f"Sizning rolingiz: *{role}*"
        return "Sizga rol hali berilmagan."