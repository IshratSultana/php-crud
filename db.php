<?php
/**
 * Created by PhpStorm.
 * User: ishrat
 * Date: 7/3/19
 * Time: 11:00 PM
 */

//MySQL connection details.
$host = 'localhost';
$user = 'root';
$pass = '1234';
$database = 'ecommerce';

//Custom PDO options.
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
);


//Connect to MySQL and instantiate our PDO object.
$pdo = new PDO("mysql:host=$host;dbname=$database", $user, $pass, $options);