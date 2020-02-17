<html>
    <head>
        <title>Table</title>
        <link rel="stylesheet" href="style/main.css">
        <script src="script/jquery.min.js"></script>
        <script src="script/jquery_main.js"></script>
</head>
<body>

<?php
    include 'config/config.php';
    echo "<table>";
    echo "<tr><th>Number</th><th>Over</th><th>Times</th></tr>";

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

    $stmt = $conn->prepare("SELECT * FROM `numbers`");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
echo "</table>";
?>
<br><br><a href='index.php'>Go Back</a>
<form method='post' action='action/delete_numbers.php'><button type='submit' id='reset' style='margin-top:20px'>Reset Table</button></form>
<h3 id='alert_delete'><b>Warning! Resetting DELETE All of The Contents.</b></h3>

</html>