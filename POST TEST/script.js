document.addEventListener('DOMContentLoaded', function () {
  //mode dark 
  //bakal ngikutin yang ada di style yang udah dibuat sebelumnya
  const toggleDarkModeButton = document.getElementById('toggleDarkMode');
  const body = document.body;

  toggleDarkModeButton.addEventListener('click', function () {
    body.classList.toggle('dark-mode');
  });

  const board = document.getElementById('board');
  const cells = document.querySelectorAll('.cell');
  const status = document.getElementById('status');
  const resetButton = document.getElementById('reset');

  let currentPlayer = 'X';
  let gameBoard = ['', '', '', '', '', '', '', '', ''];
  let gameActive = true;

  //pola untuk menang
  function checkWinner() {
    const winPatterns = [
      [0, 1, 2],
      [3, 4, 5],
      [6, 7, 8],
      [0, 3, 6],
      [1, 4, 7],
      [2, 5, 8],
      [0, 4, 8],
      [2, 4, 6],
    ];

    for (const pattern of winPatterns) {
      const [a, b, c] = pattern;
      if (
        gameBoard[a] &&
        gameBoard[a] == gameBoard[b] &&
        gameBoard[a] == gameBoard[c]
      ) {
        return gameBoard[a];
      }
    }

    return null;
  }

  function checkDraw() {
    return gameBoard.every((cell) => cell !== '');
  }

  function handleClick(index) {
    if (!gameActive || gameBoard[index] !== '') {
      return;
    }

    gameBoard[index] = currentPlayer;
    cells[index].textContent = currentPlayer;

    //ngecek pemenang
    const winner = checkWinner();
    if (winner) {
      status.textContent = winner + ' pemenangnya!!!';
      gameActive = false;
    } else if (checkDraw()) {
      status.textContent = 'Permainan seri';
      gameActive = false;
    } else {
      currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
      status.textContent = 'Sekarang giliran pemain (' + currentPlayer + ')';
    }
  }

  //ini buat reset 
  function resetGame() {
    gameBoard = ['', '', '', '', '', '', '', '', ''];
    cells.forEach((cell) => (cell.textContent = ''));
    status.textContent = 'Sekarang giliran (' + currentPlayer + ')';
    gameActive = true;
  }

  cells.forEach((cell, index) => {
    cell.addEventListener('click', () => handleClick(index));
  });

  resetButton.addEventListener('click', resetGame);
});
