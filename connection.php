<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'virtual_class';

$connect = mysqli_connect($hostname, $username, $password, $database);
if (!$connect) {
    echo 'Oops! Not Connected to Database';
}


