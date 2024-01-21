<?php
/** @var \App\Core\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Postcool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/css/design.css">
</head>
<body>

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/public/images/img/12%20(1).jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/public/images/img/12%20(2).jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/public/images/img/12%20(3).jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card text-center">
                <img src="/public/images/img/03.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title">Our Museum</h2>
                    <a href="#" class="btn btn-sm btn-secondary">Entry Fee List</a>
                </div>
                <p>Discover a wide collection of vintage postcards from around the world. Our museum is a treasure trove of historical and artistic postcards that will transport you to different eras and places.</p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card text-center">
                <img src="/public/images/img/06.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title">New collection</h2>
                    <a href="#" class="btn btn-sm btn-secondary">Coming soon</a>
                </div>
                <p> &nbsp; </p>
                <p> &nbsp; </p>
                <p> &nbsp; </p>
                <p> &nbsp; </p>
                <p> &nbsp; </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card text-center">
                <img src="/public/images/img/05.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title">Shop Postcards</h2>
                    <a href="<?= $link->url("home.order") ?>" class="btn btn-sm btn-secondary">Check it out</a>
                </div>
                <p>Experience the art of communication through postcards. Our collection features postcards that tell stories, convey emotions, and connect people across borders.</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">

        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <p class="text-border-white">Step into the past and explore postcards that capture moments in time. Our museum is dedicated to preserving and showcasing the beauty of postcard art and history.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">

        </div>
    </div>
</div>

<div class="col-right"></div>

<div class="footer container-fluid">
    <div class="footer-content">
        <div class="footer-column">Any issue? Contact our <a href="#">support</a>.</div>
        <div class="footer-column">Terms & Conditions</div>
        <div class="footer-column">Privacy Policy</div>&nbsp;
        <div class="footer">Timea Michalcova 2023</div>
    </div>
</div>

</body>
</html>