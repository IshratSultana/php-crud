<?php
include_once "db.php";
/**
 * Created by PhpStorm.
 * User: ishrat
 * Date: 7/12/19
 * Time: 11:48 PM
 */
if(isset($_POST)){
$data=[
    'title'=>$_POST['title'],
    'location'=>$_POST['location'],
    'promotional_message'=>$_POST['message'],
    'id'=>$_POST['user_id'],
];
$sql="UPDATE banners SET title=:title,location=:location,promotional_message=:promotional_message WHERE id=:id ";

$statement=$pdo->prepare($sql);
$status=$statement->execute($data);
if($status){
    header('Location: index.php');
}else{
    echo 'not updated successfully Try again';
}

}