<?php

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
    <link rel="stylesheet" href="public/css/design.css">
</head>


<?php if (isset($data['errors']) && count($data['errors']) > 0): ?>
    <?php foreach ($data['errors'] as $error): ?>
        <div class="alert alert-danger" role="alert"><?= $error ?></div>
    <?php endforeach; ?>
<?php endif; ?>

<form method="post" action="<?= $link->url('contact.SAVE') ?>" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= @$data['contact']?->getId() ?>">

<div class="container">
    <div class="row">
        <div class="col-left"></div>
        <div class="col-center">

            <h1>Contact Us!</h1>

            <div class="contact-address">
                <h2>Our Address</h2>
                <p>
                    Avenida de los Naranjos 123<br>
                    46022 Valencia<br>
                    Spain
                </p>
            </div>

            <div class="contact-form">
                <h2>Contact Form</h2>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name">Your Name:</label>
                        <input type="text" id="name" name="name" required
                               value="<?= @$data['contact']?->getName() ?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Your Email:</label>
                        <input type="email" id="email" name="email" required
                               value="<?= @$data['contact']?->getEmail() ?>">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" id="subject" name="subject" required
                               value="<?= @$data['contact']?->getSubject() ?>">
                    </div>

                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4" required
                                  value="<?= @$data['contact']?->getMessage() ?>"></textarea>
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>

        <div class="col-right">
        </div>
        <div class="row mt-3">
            <div class="col">
                <a href="<?= $link->url("home.index") ?>">Back to the main page</a>
            </div>
        </div>

    </div>
</div>

