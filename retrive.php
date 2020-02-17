<html>
    <head>
        <title>Retrive</title>
        <link rel="stylesheet" href="style/main.css">
    </head>
    <body>
        <div class="container">
            <div class="main-link">
        <h1>Retrive Table</h1>
        <form method="post" action="action/retrive_run.php">
            <input type="number" name="limit" id="limit" placeholder="Limit"><br>
            <button type="submit" id="submit">Retrive</button>
        </form>
        <form method="post" action="action/reset_over.php">
            <button type="submit">Reset Over Row</button>
        </form>
        <a href="index.php">Go Back</a>
</div>
</div>
    </body>
</html>