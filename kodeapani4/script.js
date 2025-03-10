function inputCode() {
    // Dapatkan nilai input dari pengguna
    const userInput = document.getElementById("userInput").value;
    
    // Cek kode rahasia (contoh: "1234")
    if (userInput === "1234") {
        // Tampilkan popup jika kode benar
        showPopup("Kode benar! Selamat datang.");
    } else {
        // Tampilkan popup jika kode salah
        showPopup("Kode salah! Silakan coba lagi.");
    }
}

function showPopup(message) {
    // Setel pesan dalam popup
    document.getElementById("popup").querySelector("p").innerText = message;

    // Tampilkan popup dan overlay
    document.getElementById("popup").classList.add("active");
    document.getElementById("overlay").classList.add("active");
}

function closePopup() {
    // Sembunyikan popup dan overlay
    document.getElementById("popup").classList.remove("active");
    document.getElementById("overlay").classList.remove("active");
}

function inputCode() {
    const correctCode = "rahasia123"; // Ganti dengan kode yang benar
    const userInput = document.getElementById("userInput").value;
    const overlay = document.getElementById("overlay");
    const popup = document.getElementById("popup");

    if (userInput === correctCode) {
        overlay.style.display = "block";
        popup.style.display = "block";
    } else {
        document.getElementById("message").innerText = "Kode salah, coba lagi!";
    }
}