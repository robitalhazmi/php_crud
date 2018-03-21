<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Operations</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
</head>

<body>
    <br>
    <br>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Post</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include '../Models/Crud.php';
                    if ($cruds->num_rows > 0) {
                        while ($post = $cruds->fetch_assoc()) {
                            echo '
                            <tr>
                                <td>'.$post["id"].'</td>
                                <td>'.$post["title"].'</td>
                                <td>'.$post["post"].'</td>
                                <td><a href="./update.php?id='.$post["id"].'"class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form action="../Controllers/DestroyController.php" method="post">
                                        <input name="id" type="hidden" value="'.$post["id"].'">
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            
                        ';
                        }
                    }    
                ?>
            </tbody>
        </table>
        <a href="./create.php"><button class="btn btn-primary" type="submit">Create</button></a>
    </div>
</body>

</html>