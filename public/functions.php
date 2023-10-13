<?php

function formatSQLdate($date){
    return date('d.m.Y', strtotime($date));
}

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}