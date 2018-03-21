<?php
    include '../db_connection.php';

    $sql = "SELECT * FROM cruds";
    $cruds = $conn->query($sql);
?>