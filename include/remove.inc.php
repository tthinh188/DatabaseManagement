<html>
    <head>
        <title>Remove a Game</title>
        <link href="../css/main.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <h2>Remove a Game</h2>
        <div class="alert alert-warning" style="color:red;">
            <strong>Warning!</strong> Deleting a game will remove it from the database.
            
        </div>
        <br>
        <form action="remove.php" method="POST">
        <!--Input to remove a game-->
            <input type=text name="gameID" placeholder="ID of game to be deleted.">


            <br>
            <br>
            <button type="submit" name="submit">Remove
            
            </button>
    </body>
</html>