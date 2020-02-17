<html>
    <head>
        <title>RESET</title>
        <link rel="stylesheet" href="../style/main.css">
</head>
<body>
</body>
</html>

<?php
    include '../config/config.php';
    $sql = "DELETE FROM numbers";
    $conn->exec($sql);
    echo "Reset Complete";
    echo "<br><br><a href='../insert.php'>Go Back</a>";
?>