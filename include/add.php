<?php 
    include_once('config.php'); 

    // All input variables
    $gameID = $_POST['gameID'];
    $gameTitle = $_POST['gameTitle'];
    $gameCost = $_POST['gameCost'];
    $gameRating = $_POST['gameRating'];
    $pubID = $_POST['pubID'];
    $pubName = $_POST['pubName'];
    $devID = $_POST['devID'];
    $devName = $_POST['devName'];
    $gameGenre = $_POST['gameGenre'];
    $allconsoles = $_POST['consoles'];
    
    

    // add publisher of game
    $checkpub = "INSERT INTO publisher (pubID, pubName) 
    SELECT * FROM (SELECT '$pubID', '$pubName') AS tmp
    WHERE NOT EXISTS ( SELECT pubID FROM publisher WHERE pubID = '$pubID') LIMIT 1;";
    mysqli_query($sql, $checkpub);

    // add developer of game
    $checkdev = "INSERT INTO developer (devID, devName) 
    SELECT * FROM (SELECT '$devID', '$devName') AS tmp
    WHERE NOT EXISTS ( SELECT devID FROM developer WHERE devID = '$devID') LIMIT 1;";
    mysqli_query($sql, $checkdev);

    
    // add game to database
    $add = "INSERT INTO game(gameID, gameName, gameCost, gameRating, pubID) VALUES 
        ('$gameID', '$gameTitle', '$gameCost', '$gameRating', '$pubID')";
    mysqli_query($sql, $add);

    //update developed by
    $updatedev = "INSERT INTO developedby (gameID, devID) VALUES ('$gameID', '$devID')";
    mysqli_query($sql, $updatedev);

    //Edit game
    if ($gameTitle !== "") {
        $updatename = "UPDATE game SET gameName = '$gameTitle' WHERE gameID = '$gameID'";
        mysqli_query($sql, $updatename);
    }
    if ($gameCost !== "") {
        $updatecost = "UPDATE game SET gameCost = '$gameCost' WHERE gameID = '$gameID'";
        mysqli_query($sql, $updatecost);
    }

    if ($gameRating !== "") {
        $updateRating = "UPDATE game SET gameRating = '$gameRating' WHERE gameID = '$gameID'";
        mysqli_query($sql, $updateRating);
    }

    if ($pubID !== "") {
        $updatePub = "UPDATE game SET pubID = '$pubID' WHERE gameID = '$gameID'";
        mysqli_query($sql, $updatePub);
    }

    //Split genre into array and add each gameID and each genre
    $genrearray = explode(",", $gameGenre);
    foreach ($genrearray as $genre) {
        $addgenre = "INSERT INTO gamegenre(gameID, gameGenre) VALUES ('$gameID', '$genre')";
        mysqli_query($sql, $addgenre);
    }

    //Add game operated by console
    $addconsole = "INSERT INTO operatedby(consoleID, gameID) VALUES ('$allconsoles', '$gameID')";
    mysqli_query($sql, $addconsole);

    header("Location: ../index.php");