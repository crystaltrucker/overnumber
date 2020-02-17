<html>
    <head>
        <title>RESET</title>
        <link rel="stylesheet" href="../style/main.css">
</head>
<body>

<?php
    include '../config/config.php';
    $sql = "UPDATE numbers SET `over` = 0";
    $conn->exec($sql);
    echo "Reset All Overs to 0<br>";
?>
<div id="back" style="margin-top:20px">
<a href="../retrive.php">Go Back</a>
</div>
</body>
</html>