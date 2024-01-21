<?php
/** @var \App\Core\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Postcool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/css/design.css">
</head>

<?php if (isset($data['errors']) && count($data['errors']) > 0): ?>
    # error msg z cviceni
    <?php foreach ($data['errors'] as $error): ?>
        <div class="alert alert-danger" role="alert"><?= $error ?></div>
    <?php endforeach; ?>
<?php endif; ?>

<body>

<div id="aboutUsPage">
    <div id="aboutText">
        <div class="col-lg-4 col-md-4 col-sm-12">

        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <h1>About Us</h1>
            <div class="card text-center">
                <img src="/public/images/img/08.jpg" class="card-img-top" alt="...">
                <p>Welcome to the Postcard Museum, where we celebrate the rich history and artistry of postcards from around the world. Our museum is dedicated to preserving the cultural significance of these small pieces of art that have been cherished for generations.</p>

                <p>Explore the diverse collection of postcards that tell stories of different eras, cultures, and events. From vintage postcards capturing moments in history to contemporary designs showcasing modern creativity, our museum offers a journey through time and art.</p>

                <p>Visit us and immerse yourself in the beauty and nostalgia of postcards. Whether you're a collector, history enthusiast, or art lover, there's something for everyone at the Postcard Museum.</p>

                <p>Experience the art of communication through postcards. Our collection features postcards that tell stories, convey emotions, and connect people across borders.</p>
            </div>
        </div>


        <div class="col-lg-4 col-md-4 col-sm-12">

        </div>

</body>
</html>

