<html>
    <head>
        <title>Add/Edit a User</title>
        <link href="../css/main.css" rel="stylesheet" type="text/css">
    </head>

    
    <body>
        <h2>Add/Edit a User</h2>
        
        <!--Input to add/edit user-->
        <form action="adduser.php" method="POST">
            <input type="text" name="userID" placeholder="UserID">
            <br>
            <input type="text" name="userName" placeholder="UserName">
            <br>
            <input type="text" name="addgame" placeholder="GameID to track (optional)">
            <br>
            <input type="text" name="removegame" placeholder="GameID to remove (optional)">
            <br>

            <br>
            <button type="submit" name="submit">Add/Edit</button>
        </form>

        
    </body>
    
</html>