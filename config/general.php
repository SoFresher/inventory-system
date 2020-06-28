<?php
    // error_reporting(0);
    session_start();
    include_once 'db_connect.php';
    include_once 'functions.php';

    define('BASE_URL', 'http://localhost/inventory');
    define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT'].'/inventory');

?>