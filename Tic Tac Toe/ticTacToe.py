import random

class TicTacToe:
  def __init__(self , player1 , player2):
    self.player1 = player1
    self.player2 = player2
    self.board = [' '] * 9
    self.player1_turn = random.choice([True , False])

  def check_full(self , ):
    emptys = [x for x in self.board if x == ' ']
    if len(emptys) == 0:
      return True
    return False

  def print_board(self , ):
    b  = self.board
    board = f"""
        {b[0]} | {b[1]} | {b[2]}
        --|---|---
        {b[3]} | {b[4]} | {b[5]}
        --|---|---
        {b[6]} | {b[7]} | {b[8]}
    """

    print (board)



  def check_winner(self , char):
    b = self.board
    winner = False
    conditions = (
        (0 , 1 , 2) , (3 , 4 , 5) , (6 , 7 , 8) ,
        (0 , 3 , 6) , (1 , 4 , 7) , (2 , 5 , 8) ,
        (0 , 4 , 8) , (2 , 4 , 6)
    )


    for each_conditions in conditions:
      i1 , i2 , i3 = each_conditions
      if char == b[i1] == b[i2] == b[i3]:
        winner = True
        return winner

    return winner

  def play(self , ):
    self.player1.new_game()
    self.player2.new_game()
    while True:
      if self.player1_turn:
        player = self.player1
      else:
        player = self.player2
      self.print_board()
      #Ask for move
      if player.player_type == 'human':
        print(f'{player.name} Turn')

      move = player.make_move()


      #check validity
      if (move < 0 or move > 8) or (self.board[move] != ' '):
        print('Invalid Move!!!')
        continue
      #put char
      self.board[move] = player.char
      #check winner
      win =self.check_winner(player.char)
      if win :
        player.winner()
        player.reward('Lollypop')
        self.print_board()
        break
      #check full(draw)
      full = self.check_full()
      if full:
        print('Game ended as draw')
        self.print_board()
        break
      #swap turn
      self.player1_turn = not self.player1_turn

class Player:
  def __init__(self , name , char , player_type = 'human'):
    self.name = name
    self.char = char
    self.player_type = player_type


  def make_move(self , ):
    move = input('Make your move: ')
    return int(move)


  def new_game(self,):
    print(f'{self.name} is {self.char}')


  def winner(self , ):
    print(f'{self.name} is winner')


  def reward(self , reward_value):
    print(f'{self.name} gets {reward_value}')

p1 = Player('Ghana Shayam' , 'X')
p2 = Player('Radha Piyari' , 'O')
game = TicTacToe(p1 , p2)
game.play()