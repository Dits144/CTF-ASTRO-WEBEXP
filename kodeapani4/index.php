<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
    <title>Kode buat apa ni</title>
  </head>
  <body>
  <header><img src="../img/x.png" alt=""></header>
    <h1>Hello, Selamat Datang di Website Saya</h1>
    <h2>cari kacamata untuk menembus pandang?</h2>
    <br />
    <br />
    <form method="POST" action="">
      <input placeholder="Masukan Kode rahasianya" id="userInput" name="code" />
      <br />
      <br />
      <button type="submit" class="btn">Submit</button>
    </form>
    <br />
    <br />
    <h1 id="message"></h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $inputCode = $_POST['code'];
        $correctCode = '#2Hot4U'; // Ganti dengan kode rahasia Anda

        if ($inputCode === $correctCode) {
            echo '<div class="overlay" id="overlay" style="display: flex">';
            echo '  <div class="popup" id="popup" style="display: block">';
            echo '    <h2>SELAMAT</h2>';
            echo '    <p>Flag salah tapi hampir sampai!</p>';
            echo '    <a href="./tidakterlihat.html">next</a>';
            echo '  </div>';
            echo '</div>';
        }
    }
    ?>
<!-- gada di sini sayang -->
    <img src="https://media1.tenor.com/m/j4QUFC60pLkAAAAC/too-hot-for-you-sailor-moon.gif" alt="clue" hidden />
  </body>
</html>
