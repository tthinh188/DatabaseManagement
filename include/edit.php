<?php 
    include_once('config.php');

    $gameID = $_POST['gameID'];
    $gameTitle = $_POST['gameTitle'];
    $gameCost = $_POST['gameCost'];
    $gameRating = $_POST['gameRating'];

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

    //if ($pubID !== "") {
     //   $updatepubID = "UPDATE game SET pubID = '$pubID' WHERE gameID = '$gameID'";
     //   mysqli_query($sql, $updatepubID);
    //}
    
    header("Location: ../index.php");