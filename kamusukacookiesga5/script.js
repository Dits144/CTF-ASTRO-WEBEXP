document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.container');
    
    // Transformasi saat halaman dimuat
    container.style.transform = 'scale(0.9)';
    setTimeout(() => {
        container.style.transform = 'scale(1)';
    }, 100);

    // Menambahkan efek saat mengklik tombol login
    const submitButton = document.querySelector('input[type="submit"]');
    if (submitButton) {
        submitButton.addEventListener('click', function() {
            container.style.transform = 'scale(0.95)';
            setTimeout(() => {
                container.style.transform = 'scale(1)';
            }, 100);
        });
    }
});
