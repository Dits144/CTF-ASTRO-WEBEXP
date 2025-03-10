<?php
session_start();

// Simulasi login pengguna (misalnya pengguna dengan ID 1 login)
$_SESSION['user_id'] = 29; // Bisa diganti dengan ID pengguna yang login

// Daftar pengguna dengan nama, profil, dan password
$users = [
    1 => ["name" => "Budi", "profile" => "Seorang pedagang di pasar.", "password" => "budi123"],
    2 => ["name" => "Siti", "profile" => "Seorang guru SD.", "password" => "siti456"],
    3 => ["name" => "Andi", "profile" => "Teknisi IT.", "password" => "andi789"],
    4 => ["name" => "Rina", "profile" => "Dokter.", "password" => "rina123"],
    5 => ["name" => "Joko", "profile" => "Petani.", "password" => "joko456"],
    6 => ["name" => "Sari", "profile" => "Pengacara.", "password" => "sari789"],
    7 => ["name" => "Eko", "profile" => "Mahasiswa.", "password" => "eko123"],
    8 => ["name" => "Dewi", "profile" => "Desainer grafis.", "password" => "dewi456"],
    9 => ["name" => "Ali", "profile" => "Programmer.", "password" => "ali789"],
    10 => ["name" => "Nina", "profile" => "Perawat.", "password" => "nina123"],
    11 => ["name" => "Rudi", "profile" => "Jurnalis.", "password" => "rudi456"],
    12 => ["name" => "Wati", "profile" => "Penyanyi.", "password" => "wati789"],
    13 => ["name" => "Lina", "profile" => "Pemandu wisata.", "password" => "lina123"],
    14 => ["name" => "Toni", "profile" => "Karyawan bank.", "password" => "toni456"],
    15 => ["name" => "Beni", "profile" => "Koki.", "password" => "beni789"],
    16 => ["name" => "Fani", "profile" => "Animator.", "password" => "fani123"],
    17 => ["name" => "Rika", "profile" => "Akuntan.", "password" => "rika456"],
    18 => ["name" => "Dimas", "profile" => "Petugas pemadam kebakaran.", "password" => "dimas789"],
    19 => ["name" => "Cindy", "profile" => "Perancang busana.", "password" => "cindy123"],
    20 => ["name" => "Yani", "profile" => "Fotografer.", "password" => "yani456"],
    21 => ["name" => "Ayu", "profile" => "Ilmuwan.", "password" => "ayu789"],
    22 => ["name" => "Tia", "profile" => "Psikolog.", "password" => "tia123"],
    23 => ["name" => "Gina", "profile" => "Wirausahawan.", "password" => "gina456"],
    24 => ["name" => "Rina", "profile" => "Pengembang web.", "password" => "rina789"],
    25 => ["name" => "Fadli", "profile" => "Artis.", "password" => "fadli123"],
    26 => ["name" => "Laila", "profile" => "Pelukis.", "password" => "laila456"],
    27 => ["name" => "Hendra", "profile" => "Dokter gigi.", "password" => "hendra789"],
    28 => ["name" => "Putri", "profile" => "Pembawa acara.", "password" => "putri123"],
    29 => ["name" => "Citra", "profile" => "Ahli kecantikan.", "password" => "ASTROCTF{C1t4_c!t4ku_1ng!n_m3nj4d1_bjorka_aw0kaw0kaw0k}"],
    30 => ["name" => "Fahri", "profile" => "Penulis skenario.", "password" => "fahri123"]
];


// Cek apakah ID pengguna diberikan dalam parameter URL
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Cek apakah pengguna ada di dalam daftar
    if (array_key_exists($user_id, $users)) {
        // Ambil detail pengguna
        $user = $users[$user_id];

        // Cek apakah pengguna yang login adalah pemilik profil
        $logged_in_user_id = $_SESSION['user_id'];
        $is_owner = $logged_in_user_id == $user_id;

        // Tampilkan profil pengguna
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Profile Pengguna</title>
            <style>
                body { margin: 0; font-family: Arial, sans-serif; background-color: #f4f4f9; color: #333; }
                header { background-color: #151515; padding: 20px; text-align: center; color: orange; }
                footer { background-color: #333; color: white; text-align: center; padding: 10px; position: fixed; width: 100%; bottom: 0; }
                .container { max-width: 800px; margin: 50px auto; background-color: white; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
                table { width: 100%; border-collapse: collapse; margin-top: 20px; margin-bottom: 100px; }
                th, td { padding: 15px; border-bottom: 1px solid #ddd; }
                th { text-align: left; background-color: #f1f1f1; }
                h2 { text-align: center; color: orange; }
                img{
            width: auto;
            height: 100px;
        }
            </style>
        </head>
        <body>
            <!-- Header -->
            <header>
            <img src="../img/x.png" alt="">
                <h1>Website Pemerintah</h1>
                <h3>Sistem Informasi Warga</h3>
            </header>

            <!-- Konten Utama -->
            <div class="container">
                <h2>Profile Kamu #<?php echo htmlspecialchars($user_id) ?> </h2>
                <table>
                    <tr>
                        <th>Nama</th>
                        <td><?php echo htmlspecialchars($user['name']); ?></td>
                    </tr>
                    <tr>
                        <th>Pekerjaan</th>
                        <td><?php echo htmlspecialchars($user['profile']); ?></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><?php echo htmlspecialchars($user['password']); ?></td>
                    </tr>
                </table>
            </div>

            <!-- Footer -->
            <footer>
                <p>&copy; 2024 Website Pemerintah - Sistem Informasi Warga</p>
            </footer>
        </body>
        </html>
        <?php
    } else {
        // Tampilkan pesan jika pengguna tidak ditemukan
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Pengguna Tidak Ditemukan</title>
            <style>
                body { margin: 0; font-family: Arial, sans-serif; background-color: #f4f4f9; color: #333; }
                header { background-color: #151515; padding: 20px; text-align: center; color: orange; }
                footer { background-color: #333; color: white; text-align: center; padding: 10px; position: fixed; width: 100%; bottom: 0; }
                .container { max-width: 800px; margin: 50px auto; background-color: white; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); text-align: center; }
                h2 { color: red; }
                table { width: 100%; border-collapse: collapse; margin-top: 20px; margin-bottom: 100px; }
                th, td { padding: 15px; border-bottom: 1px solid #ddd; }
                th { text-align: left; background-color: #f1f1f1; }
                h2 { text-align: center; color: orange; }
                img{
            width: auto;
            height: 100px;
        }
            </style>
        </head>
        <body>
            <!-- Header -->
            <header>
            <img src="../img/x.png" alt="">
                <h1>Website Pemerintah</h1>
                <h3>Sistem Informasi Warga</h3>
            </header>

            <!-- Pesan pengguna tidak ditemukan -->
            <div class="container">
                <h2>Pengguna Tidak Ditemukan!</h2>
                <p>Maaf, pengguna dengan ID <?php echo htmlspecialchars($user_id); ?> tidak ditemukan dalam sistem kami.</p>
                <h2>Profile Kamu #</h2>
        <table>
            <tr>
                <th>Nama</th>
                <td>AKSES TIDAK SAH</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>AKSES TIDAK SAH</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>AKSES TIDAK SAH</td>
            </tr>
        </table>
            </div>
            <div class="container">
       
            </div>
            <!-- Footer -->
            <footer>
                <p>&copy; 2024 Website Pemerintah - Sistem Informasi Warga</p>
            </footer>
        </body>
        </html>
        <?php
    }
} else {
    // Tampilkan pesan jika ID pengguna tidak diberikan
    ?>
    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Pengguna Tidak Ditemukan</title>
            <style>
                body { margin: 0; font-family: Arial, sans-serif; background-color: #f4f4f9; color: #333; }
                header { background-color: #151515; padding: 20px; text-align: center; color: orange; }
                footer { background-color: #333; color: white; text-align: center; padding: 10px; position: fixed; width: 100%; bottom: 0; }
                .container { max-width: 800px; margin: 50px auto; background-color: white; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); text-align: center; }
                h2 { color: red; }
                table { width: 100%; border-collapse: collapse; margin-top: 20px; margin-bottom: 100px; }
                th, td { padding: 15px; border-bottom: 1px solid #ddd; }
                th { text-align: left; background-color: #f1f1f1; }
                h2 { text-align: center; color: orange; }
                img{
            width: auto;
            height: 100px;
        }
            </style>
        </head>
        <body>
            <!-- Header -->
            <header>
            <img src="../img/x.png" alt="">
                <h1>Website Pemerintah</h1>
                <h3>Sistem Informasi Warga</h3>
            </header>

            <!-- Pesan pengguna tidak ditemukan -->
            <div class="container">
                <h2 style="color: red;">Pengguna Tidak Ditemukan!</h2>
                <p>Maaf, pengguna dengan ID tidak ditemukan dalam sistem kami.</p>
                <h2>Profile Kamu #</h2>
        <table>
            <tr>
                <th>Nama</th>
                <td>AKSES TIDAK SAH</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>AKSES TIDAK SAH</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>AKSES TIDAK SAH</td>
            </tr>
        </table>
            </div>
            <div class="container">
       
            </div>
            <!-- Footer -->
            <footer>
                <p>&copy; 2024 Website Pemerintah - Sistem Informasi Warga</p>
            </footer>
        </body>
        </html>
    <?php
}
