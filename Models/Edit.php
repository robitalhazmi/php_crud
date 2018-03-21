<?php
    include '../db_connection.php';
    $id = $_GET["id"];
    $sql = "SELECT * FROM cruds WHERE id = '$id'";
    $crud = $conn->query($sql);
?>