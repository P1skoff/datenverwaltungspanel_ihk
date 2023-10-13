<?php

require '/var/www/html/src/controllers/DB.php';

$config = require '/var/www/html/src/controllers/config.php';

$db = new DB($config['database']);

$getMitarbeiter = $db->executeQuery("SELECT * FROM employees")->fetchAll();


include '/var/www/html/src/views/admin.view.php';



