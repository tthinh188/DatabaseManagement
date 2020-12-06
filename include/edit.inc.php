<html>

    
    <body>
        <div class="alert alert-warning" style="color:red;">
            <strong>Warning!</strong> Must know gameID in order to update database.
            
        </div>
        <form action="edit.php" method="POST">
            <br>
            <input type="text" name="gameID" placeholder="GameID">
            <br>
            <br>
            <input type="text" name="gameTitle" placeholder="GameTitle">
            <br>
            <input type="text" name="gameCost" placeholder="Price">
            <br>
            <input type="text" name="gameRating" placeholder="GameRating">
            <br>
            
            <!--<input type="text" name="pubID" placeholder="PublisherID">-->
            
            <br>
            <button type="submit" name="submit">Edit</button>
        </form>

        
    </body>
    
</html>