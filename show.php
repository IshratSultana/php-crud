<?php
include_once "db.php";
$sql = "SELECT * FROM student";

$users = $pdo->query($sql)->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2 align="center">USERS</h2>

    <table class="table">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>phone</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach ($users as $user) {
        ?>
                <tr>
                    <td><?php echo $user['firstName']; ?></td>
                    <td><?php echo $user['lastName']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['phone']; ?></td>
                    <td><a href="edit.php?id=<?php echo $user['id']; ?>">Edit</a>&nbsp &nbsp<a href="./delete.php?id=<?php echo $user['id']; ?>">Delete</a></td>

                </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>
