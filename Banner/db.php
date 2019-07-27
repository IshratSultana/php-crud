
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

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$base_url = "http://".$_SERVER['SERVER_NAME']."/crud";

//Custom PDO options.
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
);


//Connect to MySQL and instantiate our PDO object.
$pdo = new PDO("mysql:host=$host;dbname=$database", $user, $pass, $options);