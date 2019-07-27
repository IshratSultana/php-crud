<?php
include_once "db.php";
/**
 * Created by PhpStorm.
 * User: ishra
 * Date: 7/11/19
 * Time: 11:55 PM
 */
$banner_id=$_GET['id'];

$sql="SELECT * FROM banners WHERE id=$banner_id";

$banner=$pdo->query($sql)->fetch();

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
    <div class="row">
        <form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="update.php">
            <h2>UPDATE Operation in CRUD Application</h2>
            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title"  class="form-control" id="input1" placeholder="title" value="<?php echo $banner['title']; ?>" />
                </div>
            </div>

            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">Location</label>
                <div class="col-sm-10">
                    <input type="text" name="location"  class="form-control" id="input1" placeholder="Location" value="<?php echo $banner['location']; ?>" />
                </div>
            </div>

            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">Promotional_message</label>
                <div class="col-sm-10">
                    <input type="message" name="message"  class="form-control" id="input1" placeholder="Message" value="<?php echo $banner['promotional_message']; ?>" />
                </div>
            </div>

            <input type="hidden" name="user_id" value="<?php echo $banner['id']; ?>">

            <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
        </form>
    </div>
</div>
</body>
</html>