<html>
    <head>
        <title>Add a User</title>
        <link href="../css/main.css" rel="stylesheet" type="text/css">
    </head>

    
    <body>
        <h2>Add a User</h2>
        <form action="adduser.php" method="POST">
            <input type="text" name="userID" placeholder="UserID">
            <br>
            <input type="text" name="userName" placeholder="UserName">
            <br>
            <input type="text" name="addgame" placeholder="GameID to track (optional)">
            <br>

            <br>
            <button type="submit" name="submit">Add/Edit</button>
        </form>

        
    </body>
    
</html>