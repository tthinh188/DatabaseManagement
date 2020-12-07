<html>
    <head>
        <title>Add/Edit a Console</title>
        <link href="../css/main.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <h2>Add/Edit a Console</h2>
        <!--Input to add/edit a console-->
        <form action="console.php" method="POST">
            <input type="text" name="consoleID" placeholder="ConsoleID">
            <br>
            <input type="text" name="consoleName" placeholder="Console Name">
            <br>
            <input type="text" name="yearReleased" placeholder="Console Release Year">
            <br>
            
            
            <br>
            <button type="submit" name="submit">Add/Edit Console</button>
        </form>

        
    </body>
    
</html>