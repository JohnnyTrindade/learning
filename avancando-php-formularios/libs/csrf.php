<?php

$csrf_token = $_SESSION['csrf_token'];

if ((!$csrf_token || $csrf_token) !== filter_input(INPUT_POST, '_csrf_token')) {
    die('CSRF token validation fail');
}