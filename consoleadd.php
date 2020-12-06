<?php 
    include_once('config.php'); 
    $gameID = $_POST['gameID'];
    $gameTitle = $_POST['gameTitle'];
    $gameCost = $_POST['gameCost'];
    $gameRating = $_POST['gameRating'];
    $pubID = $_POST['pubID'];
    $pubName = $_POST['pubName'];
    $devID = $_POST['devID'];
    $devName = $_POST['devName'];

    $gameGenre = $_POST['gameCost'];
    $xbox = $_POST['console1'];
    $playstation = $_POST['console2'];
    $pc = $_POST['console3'];
    $switch = $_POST['console4'];

    $checkpub = "INSERT INTO publisher (pubID, pubName) 
    SELECT * FROM (SELECT '$pubID', '$pubName') AS tmp
    WHERE NOT EXISTS ( SELECT pubID FROM publisher WHERE pubID = '$pubID') LIMIT 1;";
    mysqli_query($sql, $checkpub);

    $checkdev = "INSERT INTO developer (devID, devName) 
    SELECT * FROM (SELECT '$devID', '$devName') AS tmp
    WHERE NOT EXISTS ( SELECT devID FROM developer WHERE devID = '$devID') LIMIT 1;";
    mysqli_query($sql, $checkdev);

    $add = "INSERT INTO game(gameID, gameName, gameCost, gameRating, pubID) VALUES 
        ('$gameID', '$gameTitle', '$gameCost', '$gameRating', '$pubID')";
    mysqli_query($sql, $add);

    $updatedev = "INSERT INTO developedby (gameID, devID) VALUES ('$gameID', '$devID')";
    mysqli_query($sql, $updatedev);

    if ($playstation == "Playstation 4") {
        $updateoperatedby = "INSERT INTO operatedby (consoleID, gameID) SELECT consoleID, gameID 
        FROM console, game WHERE consoleID = 'C2222' and gameID = '$gameID'";
        mysqli_query($sql, $updateoperatedby);
    }
    if ($xbox == "Xbox One") {
        $updateoperatedby = "INSERT INTO operatedby (consoleID, gameID) SELECT consoleID, gameID 
        FROM console, game WHERE consoleID = 'C1111' and gameID = '$gameID'";
        mysqli_query($sql, $updateoperatedby);
    }
    if ($pc == "PC") {
        $updateoperatedby = "INSERT INTO operatedby (consoleID, gameID) SELECT consoleID, gameID 
        FROM console, game WHERE consoleID = 'C3333' and gameID = '$gameID'";
        mysqli_query($sql, $updateoperatedby);
    }
    if ($switch == "Switch") {
        $updateoperatedby = "INSERT INTO operatedby (consoleID, gameID) SELECT consoleID, gameID 
        FROM console, game WHERE consoleID = 'C4444' and gameID = '$gameID'";
        mysqli_query($sql, $updateoperatedby);
    }

    

    header("Location: ../index.php");