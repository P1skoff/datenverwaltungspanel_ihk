<?php include_once '/var/www/html/src/views/partials/header.php'; ?>
<?php include_once '/var/www/html/src/views/partials/nav.php'; ?>
<?php include_once '/var/www/html/public/functions.php'; ?>

<div class="row justify-content-center">
    <div class="col-10">
        <table class="table table-dark table-hover" id = "mitarbeiterTabelle">
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Nachname</th>
                    <th>Personalnummer</th>
                    <th>Birthday</th>
                    <th>Email</th>
                    <th>Vertrag Beginn</th>
                    <th>Vertrag Ende</th>
                    <th></th>
                </tr>
            </thead>
                <tbody>
                        <?php foreach($mitarbeiterTabelle as $employee): ?>
                    <tr>
                        <td>
                            <?= $employee['anrede'] ?>
                        </td>
                        <td>
                            <?= $employee['first_name'] ?>
                        </td>
                        <td>
                            <?= $employee['last_name'] ?>
                        </td>
                        <td>
                            <?= $employee['personal_number'] ?>
                        </td>
                        <td>
                            <?= formatSQLdate($employee['birthday']) ?>
                        </td>
                        <td>
                            <?= boldUsernameInEmail($employee['email']) ?>
                        </td>
                        <td>
                            <?= formatSQLdate($employee['contract_start']) ?>
                        </td>
                        <td>
                            <?= formatSQLdate($employee['contract_end']) ?>
                        </td>
                        <td>
                            <button class="btn-danger">
                                Archivieren
                            </button>
                        </td>
                        <?php endforeach; ?>

                    </tr>
                </tbody>
        </table>
        <?php include_once '/var/www/html/public/jquery_config.php' ?>

    </div>
</div>

<?php include_once '/var/www/html/src/views/partials/footer.php'; ?>