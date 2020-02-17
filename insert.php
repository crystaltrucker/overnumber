<html>
    <head>
        <title>Insert</title>
        <link rel="stylesheet" href="style/main.css">
        <script src="script/jquery.min.js"></script>
        <script src="script/jquery_main.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="main-link">
        <h1>Insert Numbers</h1>
        <form method="post" action="action/insert_run.php" id="insert_form">
            <input type="number" name="number" id="number" placeholder="Number"><br>
            <input type="number" name="times" id="times" placeholder="Times"><br>
            <h3 id="submit_success"><b>Success! Numbers INSERTED.</b></h3>
            <button type="submit" id="submit">Insert</button>
        </form>
        <form method="post" action="action/delete_numbers.php">
        <h3 id="alert_delete"><b>Warning! Resetting DELETE All of The Contents.</b></h3>
        <button type="submit" id="reset">Reset All</button>
    </form>
    <a href="index.php">Go Back</a>
</div>
</div>
    </body>
</html>