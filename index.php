<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayam GO</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- google font -->
</head>

<body>
    <!-- navbar -->
    <?php
    include 'navbar.html';
    ?>

    <div class="main">
        <div class="container">
            <h1 class="text-center">Selamat datang di website Ayam GO</h1>
            <p class="text-center">website ini menjual berbagai menu makanan ayam</p>
        </div>
    </div>

    <!-- footer -->
    <?php
    include 'footer.html';
    ?>

    <!-- aos animation js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- script ekternal lokal -->
     <script src="assets/js/script.js"></script>

     <!-- bootstrap js -->
      <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>