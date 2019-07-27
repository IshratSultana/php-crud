<?php
include_once "db.php";
include_once "header.php";
$sql = "SELECT *FROM banners";
$banners = $pdo->query($sql)->fetchAll();
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
                <th>Id</th>
                <th>Title</th>
                <th>Image</th>
                <th>Promotional Message</th>
                <th>Status</th>
                <th>Option</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($banners as $banner) {
                ?>
                <tr <?php if ($banner['is_active'] == 0) echo 'bgcolor="#c1a4a8"'; ?>>
                    <td><?php echo $banner['id']; ?></td>
                    <td><?php echo $banner['title']; ?></td>
                    <td><img src="<?php echo $base_url. $banner['location'];?>" style="width: 120px; height: 100px"></td>
                    <td><?php echo $banner['promotional_message']; ?></td>
                    <td>
                        <?php
                        if ($banner['is_active'] == 1) {
                            echo '<a href="change_status.php?id='.$banner['id'].'&status=0"><button type="button" class="btn btn-danger">Deactivate</button></a>';
                        } else {
                            echo '<a href="change_status.php?id='.$banner['id'].'&status=1"><button type="button" class="btn btn-success">Activate</button></a>';
                        }
                        ?>
                    </td>
                    <td><a href="edit.php?id=<?php echo $banner['id'];?>">Edit</a> &nbsp <a href="./delete.php?id=<?php echo $banner['id'];?>">Delete</a></td>
                </tr>
                <?php
            }
            ?>
            </tbody>

        </table>

    </div>

    </body>
    </html>
<?php
include_once "footer.php";