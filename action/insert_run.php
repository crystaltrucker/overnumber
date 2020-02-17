<?php
    include '../config/config.php';
    $number = $_POST['number'];
    $value = $_POST['times'];

    $sql = "INSERT INTO numbers(number, times) VALUES ($number, $value)";
    $conn->exec($sql);
    echo "New record inserted successfully";
    header(
        "Location: ../insert.php"
    );
?>