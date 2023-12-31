<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JeWePe | Artikel</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo_circle.png'); ?>">
    <style>
        body {
            padding-top: 56px; /* Adjust based on your navbar height */
        }
        .jumbotron {
            background-image: url('<?php echo base_url('assets/img/Hero.png'); ?>');
            background-size: cover;
            color: #fff;
            text-align: center;
            padding: 100px 0;
            margin-bottom: 0;
        }
        .feature-box {
            text-align: center;
            margin: 20px 0;
        }
        .object-fit-cover {
        object-fit: cover;
        object-position: center; /* Pusatkan objek gambar */
        height: 200px; /* Atur tinggi yang diinginkan */
        width: 100%; /* Agar lebar gambar 100% dari lebar card */
    }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">
            <img src="assets/img/logo_circle.png" alt="JeWePe Logo" height="30" class="d-inline-block align-top">   JeWePe</a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Auth'); ?>">Login as Admin</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left"> <!-- Tambahkan class text-left di sini -->
                    <h1 class="display-5">Explore the most recent articles to enhance your skill set.</h1>
                    <p class="lead">Dive into our website's enlightening content, inviting you to explore and absorb valuable insights. Each article is a carefully crafted narrative, ensuring an enriching experience in knowledge acquisition.</p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="<?php echo base_url('assets/img/jumbo.png'); ?>" alt="Image" class="img-fluid rounded-circle" style="max-width: 300px;">
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo base_url('assets/img/thumbnail.jpg'); ?>" class="card-img-top img-thumbnail img-fluid" alt="Article Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Feature 1</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer euismod justo ac.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
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
