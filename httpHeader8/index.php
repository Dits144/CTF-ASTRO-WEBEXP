<?php
// Simulasi flag yang disembunyikan
$flag = "ASTROCTF{oketerserahtuhansajamaukasihjodohorangmana_asaljanganorangisrael_PAHAM}";

// Mendapatkan semua header yang dikirimkan
$headers = getallheaders();

// Cek header tertentu yang dibutuhkan untuk otentikasi
$real_ip = isset($headers['Accept-Language']) ? $headers['Accept-Language'] : '';
$forwarded_for = isset($headers['X-Forwarded-For']) ? $headers['X-Forwarded-For'] : '';
$user_agent = isset($headers['User-Agent']) ? $headers['User-Agent'] : '';
$referer = isset($headers['Referer']) ? $headers['Referer'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siapa Kau</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header><img src="../img/x.png" alt=""></header>
    <h1>
        <?php 
        // Memulai pengecekan header secara bertahap
        if ($referer !== 'paham') {
            // Setelah X-Forwarded-For benar, berikan petunjuk untuk Referer
            echo "<h1>Tapi tunggu dulu, Ubah Referer : (apa jargon kak gem ?)</h1><br>";
        } 
        elseif (strpos($user_agent, 'alwi') === false) {
            // Setelah Referer benar, berikan petunjuk terakhir untuk User-Agent
            echo "<h1>Tapi tunggu dulu, Ubah User-Agent dulu : (Siapakah Founder NFSCC ?) </h1><br>";
        } 
        else {
            // Jika semua header benar, tampilkan pesan berhasil
            header("X-Flag-Header: $flag");
            echo "Akses berhasil! Periksa header untuk mendapatkan flag.";
        }
        ?>
    </h1>
    <img src="https://media.tenor.com/_kmm9e959IEAAAAM/kak-gem.gif" alt="" class="kakgem">
</body>
</html>
