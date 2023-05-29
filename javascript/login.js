     function goToNextPage() {
            var currentPage = window.location.href;
            var nextPage = 'register.php'; // Isi dengan halaman selanjutnya yang ingin Anda tuju

            window.location.href = nextPage + '?currentPage=' + currentPage;
        }