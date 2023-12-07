<?php
/** @var Array $data */
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

<?php foreach ($data['contacts'] as $contact): ?>
    <div class="col-3 d-flex gap-4 flex-column">
        <div class="m-2">
            <h2>Name: <?= $contact->getName() ?>
                <h2>Email: <?= $contact->getEmail() ?></h2>
                <h2>Subject: <?= $contact->getSubject() ?></h2>
                <h2>Message: <?= $contact->getMessage() ?></h2>
        </div>
    </div>
<?php endforeach; ?>

