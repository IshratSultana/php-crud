<?php
/**
 * Created by PhpStorm.
 * User: ishrat
 * Date: 7/11/19
 * Time: 4:26 PM
 */
include_once "db.php";




$title=$_POST["title"];
$promotional_message=$_POST["message"];
$active = 0;
if (isset($_POST['active']) && $_POST['active'] == 1) {
    $active = 1;
}

$location = "/uploads/images/".$_FILES['banner']['name'];
move_uploaded_file($_FILES['banner']['tmp_name'],"../uploads/images/".$_FILES['banner']['name']);

$sql="INSERT INTO `banners`(`title`,`location`,`promotional_message`,`is_active`) VALUES (:title,:location,:promotional_message,:active)";

$Statement=$pdo->prepare($sql);


$Statement->bindvalue(':title',$title);
$Statement->bindvalue(':location',$location);
$Statement->bindvalue(':promotional_message',$promotional_message);
$Statement->bindvalue(':active',$active);


$inserted=$Statement->execute();
if($inserted){
    header('Location: index.php');
}

