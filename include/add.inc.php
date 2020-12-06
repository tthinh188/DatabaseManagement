
<html>

    
    <body>
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

            <input type="text" name="gameGenre" placeholder="Separate genres by comma">
            <br>

            <input type="checkbox" name="console1" value="Xbox One">
            <label for="console1"> Xbox One</label><br>

            <input type="checkbox" name="console2" value="Playstation 4">
            <label for="console2"> Playstation 4</label><br>

            <input type="checkbox" name="console3" value="PC">
            <label for="console3"> PC</label><br>

            <input type="checkbox" name="console4" value="Switch">
            <label for="console4"> Switch</label><br>

            <br>
            <button type="submit" name="submit">Add</button>
        </form>

        
    </body>
    
</html>