<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Ayam Go</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <?php include 'layouts/navbar.html'; ?>

    <!-- Hero Section -->
    <section class="hero d-flex align-items-center text-white text-center">
        <div class="container">
            <h5 class="text-uppercase">Selamat Datang • Selamat Menikmati</h5>
            <h1 class="display-4 fw-bold mt-3">Hidangan Terbaik Untuk Anda</h1>
            <p class="lead mt-3">
                Kami dengan bangga menyajikan <span class="text-warning">hidangan terbaik</span> dari bahan
                <span class="text-warning">berkualitas tinggi</span> dan <span class="text-warning">cita rasa</span>
                istimewa.
            </p>
        </div>
    </section>

    <!-- Slideshow Menu -->
    <section class="menu-slide py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Menu Unggulan</h2>
            <div id="menuCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <img src="assets/img/menu/ayam-geprek.jpg" class="d-block w-100 rounded" alt="Ayam Geprek">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Ayam Geprek</h5>
                            <p>Pedas, gurih, nikmat!</p>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <img src="assets/img/menu/ayam-bakar.jpg" class="d-block w-100 rounded" alt="Ayam Bakar">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Ayam Bakar</h5>
                            <p>Lembut dengan bumbu manis khas!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/menu/ayam-penyet.jpg" class="d-block w-100 rounded" alt="Ayam Penyet">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Ayam Penyet</h5>
                            <p>gacor</p>
                        </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#menuCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#menuCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'layouts/footer.html'; ?>

    <!-- Script -->
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
</body>

</html>
