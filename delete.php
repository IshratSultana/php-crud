<?php
/**
 * Created by PhpStorm.
 * User: ishrat
 * Date: 7/4/19
 * Time: 1:42 AM
 */
include_once "db.php";

$data = [
    'id' => $_GET['id']
];


$sql = "DELETE from student WHERE id=:id";

$statement = $pdo->prepare($sql);

$status = $statement->execute($data);

if($status) {
    echo 'deleted successfully';
} else {
    echo ' deleted Not successfully';
}