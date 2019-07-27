<?php
/**
 * Created by PhpStorm.
 * User: ishrat
 * Date: 7/11/19
 * Time: 11:35 PM
 */
include_once "db.php";

if (isset($_GET)) {

    $data = [
        'is_active' => $_GET['status'],
        'id' => $_GET['id']
    ];

    $sql = "UPDATE banners set is_active=:is_active WHERE id=:id";
    $statement = $pdo->prepare($sql);
    $status = $statement->execute($data);

    if($status) {
        header('Location: index.php');
    } else {
        echo 'Update unsuccessful. Try Again.';
    }

}