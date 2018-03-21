<?php
    include '../db_connection.php';
    
    $title = $_POST['title'];
    $post = $_POST['post'];
    
    $sql = "INSERT INTO cruds (title, post) VALUES ('$title', '$post')";
    
    if(mysqli_query($conn, $sql)){
        header("Location:../views/index.php");
    }
    mysqli_close($conn);
?>