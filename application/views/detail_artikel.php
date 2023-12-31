<!-- views/detail_artikel.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JeWePe | Detail Artikel</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo_circle.png'); ?>">
    <style>
        body {
            padding-top: 50px; /* Atur padding atas agar tidak bertabrakan dengan navbar */
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">
            <img src="<?php echo base_url('assets/img/logo_circle.png'); ?>" alt="JeWePe Logo" height="30" class="d-inline-block align-top">   JeWePe</a>
        <!-- Tambahkan navigasi atau menu lainnya sesuai kebutuhan -->
    </nav>

    <!-- Detail Artikel Section -->
<!-- Detail Artikel Section -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="article-content">
                <?php
                    $thumbnailBlob = $artikel->thumbnail; // Ambil data blob dari objek $pegawai
                    $thumbnailDataUri = 'data:image/jpeg;base64,' . base64_encode($thumbnailBlob); // Konversi blob ke data URI
                ?>
                <img src="<?php echo $thumbnailDataUri; ?>" alt="Thumbnail" class="card-img-top img-thumbnail img-fluid mx-auto d-block" alt="Article Image" style="max-width: 600px; height: 400px; object-fit: cover">
                <?php
                if (isset($artikel)) {
                    echo '<h5 class="text-left mt-3">' . $artikel->judul . '</h5>';
                    echo '<p class="text-left mb-2">Penulis: ' . $artikel->nama_penulis . '</p>';
                    echo '<p class="text-left mb-4">' . $artikel->isi_artikel . '</p>';
                    // Tambahan elemen HTML lainnya sesuai kebutuhan
                } else {
                    echo '<p>Data artikel tidak ditemukan.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>



    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
