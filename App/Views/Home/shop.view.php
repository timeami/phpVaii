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
    <link rel="stylesheet" href="public/css/design.css">
</head>


    <?php if (isset($data['errors']) && count($data['errors']) > 0): ?>
        <?php foreach ($data['errors'] as $error): ?>
            <div class="alert alert-danger" role="alert"><?= $error ?></div>
        <?php endforeach; ?>
    <?php endif; ?>


<form method="post" action="<?= $link->url('shop') ?>" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= @$data['postcards']?->getId() ?>">


<label for="name">Name: </label>
<div>
    <input type="string" class="form-control box" name="name" id="name" placeholder="Enter name"
           value="<?= @$data['postcards']?->getName() ?>">
</div>

<label for="address_line1">Address Line 1: </label>
<div>
    <input type="string" class="form-control box" name="address_line1" id="address_line1" placeholder="Enter address line 1"
           value="<?= @$data['postcards']?->getAddressLine1() ?>">
</div>

<label for="address_line2">Address Line 2: </label>
<div>
    <input type="string" class="form-control box" name="address_line2" id="address_line2" placeholder="Enter address line 2"
           value="<?= @$data['postcards']?->getAddressLine2() ?>">
</div>

<label for="city">City: </label>
<div>
    <input type="string" class="form-control box" name="city" id="city" placeholder="Enter city"
           value="<?= @$data['postcards']?->getCity() ?>">
</div>

<label for="zip_code">Zip code: </label>
<div>
    <input type="string" class="form-control box" name="zip_code" id="zip_code" placeholder=""
           value="<?= @$data['postcards']?->getZipCode() ?>">
</div>

<label for="postcard_message">Your message: </label>
<div>
    <input type="string" class="form-control box" name="message" id="message" placeholder=""
           value="<?= @$data['postcards']?->getPostcardMessage() ?>"
</div>
    <p></p>
    <button type="submit">Submit</button>

</form>


