<?php
/**
 * Project: afisha
 * Filename: admin.php
 * Date: 12/15/2019
 * Time: 8:52 PM
 */
session_start();
require_once '../Session.php';

if (Session::has('email')) {
    echo 'Hello, ' . Session::get('email');
} else {
    echo 'Защищенная часть!';
    // header('Location: index.php');
}