<?php
    include '../db_connection.php';

    $id = $_POST["id"];
    $title = $_POST["title"];
    $post = $_POST["post"];
    $sql = "UPDATE cruds SET title = '$title', post = '$post' WHERE id = '$id'";
    
    if(mysqli_query($conn, $sql)){
        header("Location:../views/index.php");
    }
    mysqli_close($conn);
?>