<?php

/** @var \App\Core\IAuthenticator $auth */
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
    <link rel="stylesheet" href="/public/css/design.css">
</head>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div>
                Vitaj, <strong><?= $auth->getLoggedUserName() ?></strong>!<br><br>
                Táto časť aplikácie je prístupná len po prihlásení.
            </div>
        </div>
    </div>
</div>


    <form   method="post" action="<?= $link->url("auth.logout") ?>">
                <button  type="submit" value="submit">Logout</button>
    </form>


<div id="ContactsData">
    <div class="col-3 d-flex gap-4 flex-column">
        <h2>CONTACTS</h2>
        <div class="m-2">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                </tr>
                <?php foreach ($data['contacts'] as $contact): ?>
                <tr>
                    <td><?= $contact->getName() ?></td>
                    <td><?= $contact->getEmail() ?></td>
                    <td> <?= $contact->getSubject() ?></td>
                    <td><?= $contact->getMessage() ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<div id="ContactsData">
    <div class="col-3 d-flex gap-4 flex-column">
        <h2>ORDERS</h2>
        <div class="m-2">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Address Line 1</th>
                    <th>Address Line 2</th>
                    <th>City</th>
                    <th>City</th>
                    <th>ZIP</th>
                    <th>Order</th>
                </tr>
                <?php foreach ($data['orders'] as $order): ?>
                    <tr>
                        <td><?= $order->getName() ?></td>
                        <td><?= $order->getAddressLine1() ?></td>
                        <td><?= $order->getAddressLine2() ?></td>
                        <td><?= $order->getCity() ?></td>
                        <td><?= $order->getZipCode() ?></td>
                        <td><?= $order->getOrder() ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
