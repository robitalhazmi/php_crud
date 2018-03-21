<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Operations</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>    
        
    <br>
    <br>
    <div class="container">
        <?php 
            include '../Models/Edit.php';
            
            if ($crud->num_rows > 0) {
                while ($row = $crud->fetch_assoc()) {
                    $id = $row["id"];
                    $title = $row["title"];
                    $post = $row["post"];
                }
            }
        ?>
        <form method="post" action="../Controllers/UpdateController.php">
            <div class="form-group row">
                <input name="id" type="hidden" value="<?php echo $id; ?>">
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="title" value="<?php echo $title; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Post</label>
                <div class="col-sm-10">
                    <textarea name="post" rows="8" cols="80"><?php echo $post; ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2"></div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</body>

</html>