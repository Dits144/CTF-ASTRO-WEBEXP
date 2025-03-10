<?php
// Flag yang ingin disembunyikan
$flag = 'ASTROCTF{hp_k3nt4ng_b4yem_br0k0li_s1nk0ng_c4b3_s4yur24n}';

// Menggunakan ROT13 untuk mengenkripsi flag
$rot13_flag = str_rot13($flag);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Hidden Flag in PHP with ROT13</title>
    <style>
        body {
            background-color: black;
            color: aliceblue;
            font-family: Arial, sans-serif;
        }

        header {
            text-align: center;
        }

        .hidden-flag {
            display: none;
            background-color: yellow;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            font-size: 7px;
            color: black;
        }

        @media (max-width: 252px) {
            .hidden-flag {
                display: block;
            }
        }
    </style>
</head>
<body>
    <header>
        <img src="../img/x.png" alt="">
        <h1>HAIIIIIIIIIIII!</h1>
        <p>Hanya orang yang mempunyai HP terkecil di dunia yang dapat melihat flag.</p>
    </header>

    <div class="container">
        <!-- Tempat untuk menampilkan flag -->
        <div class="hidden-flag" id="flag-container"></div>
    </div>

    <!-- Menambahkan file JavaScript eksternal -->
    <script>
        // Fungsi untuk mendekripsi ROT13
        function rot13(str) {
            return str.replace(/[A-Za-z]/g, function (c) {
                return String.fromCharCode(
                    c.charCodeAt(0) + (c.toLowerCase() < 'n' ? 13 : -13)
                );
            });
        }

        // Fungsi untuk cek ukuran layar dan menampilkan flag
        function checkScreenSize() {
            if (window.innerWidth <= 252) {
                // Mengambil flag terenkripsi dari PHP
                var encryptedFlag = "<?php echo $rot13_flag; ?>";
                
                // Dekripsi flag menggunakan ROT13
                var decryptedFlag = rot13(encryptedFlag);

                // Menampilkan flag di halaman
                document.getElementById('flag-container').innerText = decryptedFlag;
            } else {
                // Jika ukuran layar lebih besar dari 252px, sembunyikan flag
                document.getElementById('flag-container').innerText = '';
            }
        }

        // Jalankan checkScreenSize saat halaman dimuat
        window.onload = checkScreenSize;

        // Jalankan checkScreenSize setiap kali ukuran layar berubah
        window.onresize = checkScreenSize;
    </script>
</body>
</html>
