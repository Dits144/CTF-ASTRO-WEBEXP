<?php
// Flag yang ingin disembunyikan
$flag = 'ASTROCTF{hp_k3nt4ng_b4yem_br0k0li_s1nk0ng_c4b3_s4yur24n}';

// Menggunakan ROT13 untuk mengenkripsi flag
$rot13_flag = str_rot13($flag);
?>

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