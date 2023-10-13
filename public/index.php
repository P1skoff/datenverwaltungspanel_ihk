<?php 

require '/var/www/html/public/functions.php';

$uri = trim($_SERVER['REQUEST_URI']);

if ($uri === '/') {
    require '/var/www/html/src/controllers/login.php';
} elseif ($uri === '/admin') {
    require '/var/www/html/src/controllers/admin.php';
}