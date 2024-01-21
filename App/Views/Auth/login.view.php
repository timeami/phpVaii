<?php

$layout = 'auth';
/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */
?>
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


<!--form z cviceni-->
<div class="container">
    <div class="row">
        <div class="col-left"></div>
        <div class="col-center">
            <div class="login-form">
                <h5 class="card-title text-center">Login</h5>
                <div class="text-center text-danger mb-3">
                    <?= @$data['message'] ?>
                </div>
                <form class="form-signin" method="post" action="<?= $link->url("login") ?>">
                    <div class="form-label-group mb-3">
                        <input name="login" type="text" id="login" class="form-control" placeholder="Login"
                               required autofocus>
                    </div>

                    <div class="form-label-group mb-3">
                        <input name="password" type="password" id="password" class="form-control"
                               placeholder="Password" required>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit" name="submit">Prihlásiť
                        </button>
                    </div>
                </form>
            </div>
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
        <div class="footer"><a href="<?= $link->url("home.index") ?>">Back to the main page</a></div>
    </div>
</div>
