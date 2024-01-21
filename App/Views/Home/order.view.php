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
    <link rel="stylesheet" href="/public/css/design.css">
</head>


    <?php if (isset($data['errors']) && count($data['errors']) > 0): ?>
        # error msg z cviceni
        <?php foreach ($data['errors'] as $error): ?>
            <div class="alert alert-danger" role="alert"><?= $error ?></div>
        <?php endforeach; ?>
    <?php endif; ?>


<form id="orderForm" method="post" action="<?= $link->url('order.save') ?>">
    <input type="hidden" name="id" value="<?= @$data['orders']?->getId() ?>">


    <label for="name">Name: </label>
    <div class="form-group">
        <input type="string" class="form-control box" name="name" id="name" placeholder="Enter name"
               value="<?= @$data['orders']?->getName() ?>">
    </div>

    <label for="address_line1">Address Line 1: </label>
    <div class="form-group">
        <input type="string" class="form-control box" name="address_line1" id="address_line1" placeholder="Enter address line 1"
               value="<?= @$data['orders']?->getAddressLine1() ?>">
    </div>

    <label for="address_line2">Address Line 2: </label>
    <div class="form-group">
        <input type="string" class="form-control box" name="address_line2" id="address_line2" placeholder="Enter address line 2"
               value="<?= @$data['orders']?->getAddressLine2() ?>">
    </div>

    <label for="city">City: </label>
    <div class="form-group">
        <input type="string" class="form-control box" name="city" id="city" placeholder="Enter city"
               value="<?= @$data['orders']?->getCity() ?>">
    </div>

    <label for="zip_code">Zip code: </label>
    <div class="form-group">
        <input type="string" class="form-control box" name="zip_code" id="zip_code" placeholder=""
               value="<?= @$data['orders']?->getZipCode() ?>">
    </div>

    <label for="postcard_message">Your order: </label>
    <div class="form-group">
        <input type="string" class="form-control box" name="order" id="order" placeholder=""
               value="<?= @$data['orders']?->getOrder() ?>"
    </div>
        <p></p>
        <button type="submit" form="orderForm" value="Submit" onclick="submitOrder()">Submit</button>

</form>

<!-- Bootstrap modal -->
<div class="modal" id="myModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Submission Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalBody">
                <!-- Modal body content will be dynamically updated -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function submitOrder() {
        var form = document.getElementById('orderForm');
        var formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                // Handle the response data here
                console.log(data);

                // Update modal content
                var modalBody = document.getElementById('modalBody');
                modalBody.innerHTML = '<p>' + data.message + '</p>';

                // Show the modal
                var myModal = new bootstrap.Modal(document.getElementById('myModal'));
                myModal.show();

                // Clear the form
                form.reset();
            })
            .catch(error => {
                // Handle errors
                console.error('Error:', error);
            });
    }
</script>


