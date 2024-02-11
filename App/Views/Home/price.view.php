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

<body>
</div>
<p> &nbsp; </p>
<p> &nbsp; </p>
<p> &nbsp; </p>
<p> &nbsp; </p>
<p> &nbsp; </p>
</div>

<h2>Museum Entry Fees</h2>

<table>
    <thead>
    <tr>
        <th>Category</th>
        <th>Fee</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Adults</td>
        <td>$10.00</td>
    </tr>
    <tr>
        <td>Students</td>
        <td>$6.00</td>
    </tr>
    <tr>
        <td>Children</td>
        <td>$3.00</td>
    </tr>
    </tbody>
</table>

</body>




