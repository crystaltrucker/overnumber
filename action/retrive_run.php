<html>
    <head>
        <title>Retrive</title>
        <link rel="stylesheet" href="../style/main.css">
</head>
<body>
</body>
</html>
<?php
    include '../config/config.php';
    $limit = $_POST['limit'];
    
    $update = "UPDATE numbers SET `over` = `times` - $limit";
    $conn->exec($update);

    echo "<table>";
    echo "<tr><th>Number</th><th>Over</th></tr>";

    class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
            parent::__construct($it, self::LEAVES_ONLY);
        }
    
        function current() {
            return "<td>" . parent::current(). "</td>";
        }
    
        function beginChildren() {
            echo "<tr>";
        }
    
        function endChildren() {
            echo "</tr>" . "\n";
        }
    }

    $stmt = $conn->prepare("SELECT `number`, `over` FROM `numbers` WHERE `over` > 0");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
echo "</table>";
echo "Limit:<b> $limit </b>";
echo "<br><br><a href='../retrive.php'>Go Back</a>";
?>