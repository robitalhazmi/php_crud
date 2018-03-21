<?php
    include '../db_connection.php';

    $id = $_POST['id'];
    echo $id;
    $sql = "DELETE FROM cruds WHERE id = '$id'";
    
    if(mysqli_query($conn, $sql)){
        header("Location:../views/index.php");
    }
    mysqli_close($conn);
?>