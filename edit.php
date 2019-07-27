<?php
/**
 * Created by PhpStorm.
 * User: ishrat
 * Date: 7/3/19
 * Time: 11:05 PM
 */
include_once "db.php";
$student_id = $_GET['id'];

$sql = "SELECT * FROM student WHERE id=$student_id";

$user = $pdo->query($sql)->fetch();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD Application - UPDATE Operation</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link rel="stylesheet" href="styles.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="update.php">
		<h2>UPDATE Operation in CRUD Application</h2>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">First Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="fname"  class="form-control" id="input1" placeholder="firstName" value="<?php echo $user['firstName']; ?>" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Last Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname"  class="form-control" id="input1" placeholder="lastName" value="<?php echo $user['lastName']; ?>" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">E-Mail</label>
			    <div class="col-sm-10">
			      <input type="email" name="email"  class="form-control" id="input1" placeholder="email" value="<?php echo $user['email']; ?>" />
			    </div>
			</div>


            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="text" name="phone"  class="form-control" id="input1" placeholder="phone" value="<?php echo $user['phone']; ?>" />
                </div>
            </div>
            <input type="hidden" name="student_id" value="<?php echo $user['id']; ?>">

			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
		</form>
	</div>
</div>
</body>
</html>