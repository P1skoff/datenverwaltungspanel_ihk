<?php
//create a 2D array
$users = [
    ['id' => 1, 'name' => 'Toni', 'nachname' => 'Mustermann', 'telefonnummer' => '0123456789', 'abteilung' => 'IT', 'zugangsdaten' => 'ja', 'firmengeraet' => 'ja'],
    ['name' => 'Max', 'nachname' => 'Mustermann', 'telefonnummer' => '0123456789', 'abteilung' => 'IT', 'zugangsdaten' => 'ja', 'firmengeraet' => 'ja'],
    ['name' => 'Max', 'nachname' => 'Mustermann', 'telefonnummer' => '0123456789', 'abteilung' => 'IT', 'zugangsdaten' => 'ja', 'firmengeraet' => 'ja'],
    ['name' => 'Max', 'nachname' => 'Mustermann', 'telefonnummer' => '0123456789', 'abteilung' => 'IT', 'zugangsdaten' => 'ja', 'firmengeraet' => 'ja'],
    ['name' => 'Max', 'nachname' => 'Mustermann', 'telefonnummer' => '0123456789', 'abteilung' => 'IT', 'zugangsdaten' => 'ja', 'firmengeraet' => 'ja'],
    ['name' => 'Max', 'nachname' => 'Mustermann', 'telefonnummer' => '0123456789', 'abteilung' => 'IT', 'zugangsdaten' => 'ja', 'firmengeraet' => 'ja'],
    ['name' => 'Max', 'nachname' => 'Mustermann', 'telefonnummer' => '0123456789', 'abteilung' => 'IT', 'zugangsdaten' => 'ja', 'firmengeraet' => 'ja'],
    ['name' => 'Max', 'nachname' => 'Mustermann', 'telefonnummer' => '0123456789', 'abteilung' => 'IT', 'zugangsdaten' => 'ja', 'firmengeraet' => 'ja'],
];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/aumeas_logo_hoch_oC_oA.svg" width="90" height="72" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
    <!--I want the table to be displayed center on the page-->
    <div class="row justify-content-center">
        <div class="col-10">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Nachname</th>
                        <th>Telefonnummer</th>
                        <th>Abteilung</th>
                        <th>Zugangsdaten</th>
                        <th>Firmengeraet</th>
                        <th>Loeschen</th>
                    </tr>
                    <?php foreach($users as $user): ?>
                    <tr>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['nachname'] ?></td>
                        <td><?= $user['telefonnummer'] ?></td>
                        <td><?= $user['abteilung'] ?></td>
                        <td><?= $user['zugangsdaten'] ?></td>
                        <td><?= $user['firmengeraet'] ?></td>
                        <td><a href="delete.php?id=<?= $user['id'] ?>" class="btn btn-danger">Loeschen</a></td>
                    <?php endforeach; ?>

                </thead>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>