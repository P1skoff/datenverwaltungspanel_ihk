<?php

require_once '/var/www/html/public/functions.php';
require_once '/var/www/html/src/views/partials/header.php';
require_once '/var/www/html/src/views/partials/footer.php';
require_once '/var/www/html/src/views/partials/nav.php';

echo '<h1>404 - Page not found</h1>';
echo '<p>Sorry, the page you are looking for does not exist.</p>';
echo '<a href="/">Go back to the homepage</a>';