<html>
    <head>
        <title>Remove a Console</title>
        <link href="../css/main.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <h2>Remove a Console</h2>
        <div class="alert alert-warning" style="color:red;">
            <strong>Warning!</strong> Deleting a console will remove it from the database.
            
        </div>
        <br>
        <form action="removeconsole.php" method="POST">
        <!--Input to remove console-->
            <input type="text" name="consoleID" placeholder="ConsoleID to remove">
            
            <br>
            <br>
            <button type="submit" name="submit">Remove Console</button>
        </form>

        
    </body>
    
</html>