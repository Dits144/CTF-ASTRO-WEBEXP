<?php
if (isset($_FILES['uploaded'])) {
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['uploaded']['name']);
    $fileSize = $_FILES['uploaded']['size'];

    // Tentukan warna pesan berdasarkan hasil upload
    $messageColor = "green"; // Default untuk berhasil

    // Pindahkan file yang diupload ke direktori tujuan
    if (move_uploaded_file($_FILES['uploaded']['tmp_name'], $uploadFile)) {
        echo "<p style='color: $messageColor;'>../uploads/" . basename($_FILES['uploaded']['name']) . " berhasil diupload!</p>";
    } else {
        $messageColor = "red"; // Gagal upload, ganti warna jadi merah
        echo "<p style='color: $messageColor;'>File terlalu BESAR atau Format File salah.</p>";
    }
} else {
    // Jika tidak ada file yang diupload
    $messageColor = "red"; // Gagal, warna merah
    echo "<p style='color: $messageColor;'>Tidak ada file yang diunggah.</p>";
}
?>
