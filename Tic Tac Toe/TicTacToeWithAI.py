import random

class TicTacToe:
    def __init__(self, player1, player2):
        self.player1 = player1
        self.player2 = player2
        self.board = [' '] * 9
        self.player1_turn = random.choice([True, False])

    def check_full(self):
        return ' ' not in self.board

    def print_board(self):
        b = self.board
        board = f"""
        {b[0]} | {b[1]} | {b[2]}
        --|---|---
        {b[3]} | {b[4]} | {b[5]}
        --|---|---
        {b[6]} | {b[7]} | {b[8]}
        """
        print(board)

    def check_winner(self, char):
        b = self.board
        win_conditions = (
            (0, 1, 2), (3, 4, 5), (6, 7, 8),
            (0, 3, 6), (1, 4, 7), (2, 5, 8),
            (0, 4, 8), (2, 4, 6)
        )
        for i1, i2, i3 in win_conditions:
            if char == b[i1] == b[i2] == b[i3]:
                return True
        return False

    def play(self):
        self.player1.new_game()
        self.player2.new_game()

        while True:
            if self.player1_turn:
                player = self.player1
                other_player = self.player2
            else:
                player = self.player2
                other_player = self.player1

            move = player.make_move(self.board.copy())

            # Check validity
            if (move < 0 or move > 8) or (self.board[move] != ' '):
                player.reward(-0.25, self.board.copy())
                print('Invalid Move!')
                continue

            self.board[move] = player.char

            # Check for winner
            if self.check_winner(player.char):
                player.winner()
                player.reward(5, self.board.copy())
                other_player.reward(-5, self.board.copy())
                self.print_board()
                break

            # Check for draw
            if self.check_full():
                print('Game ended in a draw.')
                player.reward(0.5, self.board.copy())
                other_player.reward(0.5, self.board.copy())
                self.print_board()
                break

            # Continue
            player.reward(0.25, self.board.copy())
            self.player1_turn = not self.player1_turn


class Player:
    def __init__(self, name, char, player_type='human'):
        self.name = name
        self.char = char
        self.player_type = player_type

    def make_move(self, board):
        move = input(f'{self.name}, make your move (0-8): ')
        return int(move)

    def new_game(self):
        print(f'{self.name} is {self.char}')

    def winner(self):
        print(f'{self.name} is the winner!')

    def reward(self, reward_value, board):
        print(f'{self.name} gets a reward of {reward_value}')


class AI(Player):
    def __init__(self, name, char, epsilon=1, gamma=0.9, alpha=0.01):
        super().__init__(name, char, player_type='AI')
        self.epsilon = epsilon  # Exploration rate
        self.gamma = gamma      # Discount factor
        self.alpha = alpha      # Learning rate
        self.q_table = {}

    def get_Q(self, state, action):
        key = (state, action)
        if key not in self.q_table:
            self.q_table[key] = 5.0  # Initialize to a neutral value
        return self.q_table[key]

    def available_moves(self, board):
        return [i for i, v in enumerate(board) if v == ' ']

    def q_learn(self, state, action, reward, new_state):
        prev_q = self.get_Q(state, action)
        next_actions = self.available_moves(list(new_state))
        if next_actions:
            max_future_q = max(self.get_Q(new_state, a) for a in next_actions)
        else:
            max_future_q = 0  # No future Q-value in terminal states

        self.q_table[(state, action)] = prev_q + self.alpha * (reward + self.gamma * max_future_q - prev_q)

    def reward(self, reward_value, board):
        if hasattr(self, 'prev_board') and hasattr(self, 'prev_action'):
            self.q_learn(self.prev_board, self.prev_action, reward_value, tuple(board))

    def make_move(self, board):
        state = tuple(board)
        available = self.available_moves(board)

        if random.random() < self.epsilon:
            action = random.choice(available)  # Exploration
        else:
            q_values = [self.get_Q(state, a) for a in available]
            max_q = max(q_values)
            best_actions = [a for a, q in zip(available, q_values) if q == max_q]
            action = random.choice(best_actions)  # Exploitation

        self.prev_board = state
        self.prev_action = action
        self.epsilon *= 0.99  # Decay epsilon
        return action


# Training episodes
p1 = AI('P-One', 'X')
p2 = AI('P-Two', 'O')

for i in range(5):
    print(f'\nEpisode {i + 1}')
    game = TicTacToe(p1, p2)
    game.play()
