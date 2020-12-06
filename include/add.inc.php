
<html>
    <head>
        <title>Add a Game</title>
        <link href="../css/main.css" rel="stylesheet" type="text/css">
    </head>

    
    <body>
        <h2>Add a Game </h2>
        <form action="consoleadd.php" method="POST">
            <input type="text" name="gameID" placeholder="GameID">
            <br>
            <input type="text" name="gameTitle" placeholder="GameTitle">
            <br>
            <input type="text" name="gameCost" placeholder="Price">
            <br>
            <input type="text" name="gameRating" placeholder="GameRating">
            <br>
            <input type="text" name="pubID" placeholder="PublisherID">
            <input type="text" name="pubName" placeholder="PublisherName (optional)">
            
            <br>
            <input type="text" name="devID" placeholder="DeveloperID">
            <input type="text" name="devName" placeholder="DeveloperName (optional)">
            <br>

            <input type="text" name="gameGenre" placeholder="Separate genres by comma" size=30>
            <br>

            <input type="text" name="consoles" placeholder="Separate ConsoleID by comma" size=30>
            <br>

            <br>
            <button type="submit" name="submit">Add/Edit</button>
        </form>

        
    </body>
    
</html>