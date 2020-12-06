<html>
    <body>
        <div class="alert alert-warning" style="color:red;">
            <strong>Warning!</strong> Deleting a game will remove it from the database.
            
        </div>
        <form action="remove.php" method="POST">
            <input type=text name="gameID" placeholder="ID of game to be deleted.">


            <br>
            <button type="submit" name="submit">Remove
            
            </button>
    </body>
</html>