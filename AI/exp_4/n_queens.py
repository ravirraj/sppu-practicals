def solve_n_queens(n): 
    board = [-1] * n 

    def is_safe(row, col): 
        for i in range(row): 
            if board[i] == col or abs(board[i] - col) == row - i: 
                return False 
        return True 

    def solve(row): 
        if row == n: 
            print(board) 
            return 
        for col in range(n): 
            if is_safe(row, col): 
                board[row] = col 
                solve(row + 1) 
                board[row] = -1 

    solve(0) 

if __name__ == "__main__":
    # Sample execution 
    solve_n_queens(4)
