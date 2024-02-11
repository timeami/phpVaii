<?php

/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Core\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/public/css/styl.css">
    <script src="/public/js/script.js"></script>
</head>
<header class="topnav">
    <div class="row">
        <div id="top-links">
            <div class="initCont">
                <div class="glitch-wrapper">
                    <a class="navbar-brand" href="<?= $link->url("home.index") ?>">
                        <img id="header-logo" src="/public/images/img/logo.png" alt="..." title="<?= \App\Config\Configuration::APP_NAME ?>"
                             title="<?= \App\Config\Configuration::APP_NAME ?>">
                    </a>
                    <div class="glitch" data-text="Postcool">Postcool</div>
                </div>
                <div class="responsive-mobile-visible responsive-all-hidden box-account-links-trigger-wrap">
                    <div class="box-account-links-trigger"></div>
                </div>
                <ul class="menu responsive-mobile-hidden box-account-links list-inline list-reset ">
                    <li>
                        <a class="icon-account-login" href="<?= \App\Config\Configuration::LOGIN_URL ?>" title="Login" data-testid="signin" rel="nofollow">
                            <span>Login</span>&nbsp;
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= $link->url("home.price") ?>">Entry Fees</a>
                            <a class="dropdown-item" href="#">New Collection</a>
                            <a class="dropdown-item" href="<?= $link->url("home.order") ?>">Shop Postcards</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $link->url("home.about") ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $link->url("home.contact") ?>">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<body>
<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
</body>
</html>
