<?php include '/var/www/html/src/views/partials/header.php'; ?>
<?php include '/var/www/html/src/views/partials/nav.php'; ?>
<?php include_once '/var/www/html/public/functions.php'; ?>

<div class="row justify-content-center">
    <div class="col-10">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Nachname</th>
                    <th>Birthday</th>
                    <th>Email</th>
                    <th>Vertrag Beginn</th>
                    <th>Vertrag Ende</th>
                </tr>

                    <?php foreach($getMitarbeiter as $employee): ?>

                <tr>
                    <td>
                        <?= $employee['first_name'] ?>
                    </td>
                    <td>
                        <?= $employee['last_name'] ?>
                    </td>
                    <td>
                        <?= formatSQLdate($employee['birthday']) ?>
                    </td>
                    <td>
                        <?= $employee['email'] ?>
                    </td>
                    <td>
                        <?= formatSQLdate($employee['contract_start']) ?>
                    </td>
                    <td>
                        <?= formatSQLdate($employee['contract_end']) ?>
                    </td>

                    <?php endforeach; ?>

                </tr>
            </thead>
        </table>
                
    </div>
</div>

<?php include '/var/www/html/src/views/partials/footer.php'; ?>