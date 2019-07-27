<?php

include_once "db.php";

$firstName=$_POST["fname"];
$lastName=$_POST["lname"];
$email=$_POST["email"];
$phone=$_POST["phone"];

//Create our INSERT SQL query.
$sql = "INSERT INTO `student` (`firstName`, `lastName`,`email`,`phone`) VALUES (:firstName, :lastName, :email , :phone)";

//Prepare our statement.
$statement = $pdo->prepare($sql);

//Bind our values to our parameters (we called them :make and :model).
$statement->bindValue(':firstName', $firstName);
$statement->bindValue(':lastName', $lastName);
$statement->bindValue(':email', $email);
$statement->bindValue(':phone',$phone);


//Execute the statement and insert our values.
$inserted = $statement->execute();


//Because PDOStatement::execute returns a TRUE or FALSE value,
//we can easily check to see if our insert was successful.
if($inserted){
echo 'Row inserted!<br>';
}