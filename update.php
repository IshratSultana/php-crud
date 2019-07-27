<?php
/**
 * Created by PhpStorm.
 * User: ishrat
 * Date: 7/4/19
 * Time: 1:14 AM
 */

include_once "db.php";

if (isset($_POST)) {
    $data = [
        'firstName' => $_POST['fname'],
        'lastName' => $_POST['lname'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'id' => $_POST['student_id'],
    ];

    $sql = "UPDATE student SET firstName=:firstName, lastName=:lastName, email=:email, phone=:phone WHERE id=:id";

    $statement = $pdo->prepare($sql);
    $status = $statement->execute($data);
    if($status) {
        echo 'Updated Successfully';
    } else {
        echo 'Update unsuccessful. Try Again.';
    }

}