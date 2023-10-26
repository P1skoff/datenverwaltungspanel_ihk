<?php

require '/var/www/html/public/DB.php';

$config = require '/var/www/html/public/config.php';

$db = new DB($config['database']);

$mitarbeiterTabelle = $db->executeQuery("SELECT * FROM employees")->fetchAll();


include '/var/www/html/src/views/dashboard.view.php';
