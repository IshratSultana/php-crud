<?php
include_once "header.php"
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Simple CRUD Application in OOP PHP - Create</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <form method="post" class="form-horizontal col-md-6 col-md-offset-3" enctype="multipart/form-data" action="insert.php">
                <h2>Create Operation in CRUD Application</h2>
                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="input1" placeholder="Title" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Promotion Message</label>
                    <div class="col-sm-10">
                        <input type="text" name="message" class="form-control" id="input1" placeholder="Message" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="active" value="1"> Active
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Upload</label>
                    <div class="col-sm-10">
                        <input type="file" name="banner" accept="image/*" required>
                    </div>
                </div>


                <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit"/>
            </form>
        </div>
    </div>
    </body>
    </html>
<?php
include_once "footer.php";
?>