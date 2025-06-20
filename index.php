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
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <?php include 'layouts/navbar.html'; ?>

    <!-- wrapper utama dengan background -->
    <div class="main-wrapper">
        <!-- Section Hero -->
        <div class="container vh-100 d-flex justify-content-center align-items-center position-relative" style="z-index: 3;">
            <div class="text-start text-white">
                <h1 class="text-warning fw-bold text-center">Selamat datang di website resmi Ayam GO</h1>
                <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In provident rerum eum rem cupiditate sit,
                    quae quis facere nostrum distinctio quisquam id sequi natus. Tenetur minima nobis neque quibusdam repellendus!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In provident rerum eum rem cupiditate sit,
                    quae quis facere nostrum distinctio quisquam id sequi natus. Tenetur minima nobis neque quibusdam repellendus!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In provident rerum eum rem cupiditate sit,
                    quae quis facere nostrum distinctio quisquam id sequi natus. Tenetur minima nobis neque quibusdam repellendus!
                </p>
                <div id="menuCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">

                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div class="row text-center">
                                <div class="col-md-3">
                                    <a href="menu.php"><img src="../ayamgo/assets/img/menu/menu.png" class="d-block w-100 rounded" alt="Menu 1"></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="menu.php"><img src="../ayamgo/assets/img/menu/menu.png" class="d-block w-100 rounded" alt="Menu 2"></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="menu.php"><img src="../ayamgo/assets/img/menu/menu.png" class="d-block w-100 rounded" alt="Menu 3"></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="menu.php"><img src="../ayamgo/assets/img/menu/menu.png" class="d-block w-100 rounded" alt="Menu 4"></a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <div class="row text-center">
                                <div class="col-md-3">
                                    <a href="menu.php"><img src="../ayamgo/assets/img/menu/menu2.png" class="d-block w-100 rounded" alt="Menu 5"></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="menu.php"><img src="../ayamgo/assets/img/menu/menu2.png" class="d-block w-100 rounded" alt="Menu 6"></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="menu.php"><img src="../ayamgo/assets/img/menu/menu2.png" class="d-block w-100 rounded" alt="Menu 7"></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="menu.php"><img src="../ayamgo/assets/img/menu/menu2.png" class="d-block w-100 rounded" alt="Menu 8"></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Kontrol Panah -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#menuCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#menuCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Section Menu -->
        <div class="container py-5 d-flex justify-content-center align-items-center position-relative" style="z-index: 3;">
            <div class="ex-menu text-center text-white">
                <h1>lanjutan bisa profil perusahaan</h1>
                <img src="assets/img/logo.png" alt="logo" style="height: 100px;" />
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include 'footer.html'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>