<?php
include_once "db.php";
/**
 * Created by PhpStorm.
 * User: ishrat
 * Date: 7/13/19
 * Time: 9:56 PM
 */
$data=[
    'id'=>$_GET['id'],
];
$sql="DELETE from banners WHERE id=:id";
$statement=$pdo->prepare($sql);
$status=$statement->execute($data);
if($status) {
    header('Location: index.php');
}else{
    echo 'deleted not sucessfully';
}
