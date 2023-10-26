<?php
## Convert a date from SQL format to German/EU format
function formatSQLdate($date){
    return date('d.m.Y', strtotime($date));
}
## 
function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function dd() {
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    die();
}

function boldUsernameInEmail($email) {
    // Einen Regular Expression, um den Teil vor dem "@"-Symbol durch bold HTML-Tags zu ersetzen
    return preg_replace('/(.*?)(@.*)/', '<strong>$1</strong>$2', $email);

}
