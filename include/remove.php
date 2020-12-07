<?php 
    include_once('config.php');
    //Input variables
    $gameID = $_POST['gameID'];

    $remove = "DELETE FROM game WHERE gameID = '$gameID'";
    mysqli_query($sql, $remove);

    $removedev = "DELETE FROM developer WHERE devID NOT IN (SELECT devID FROM developedby)";
    mysqli_query($sql, $removedev);

    $removepub = "DELETE FROM publisher WHERE pubID NOT IN (SELECT pubID FROM game)";
    mysqli_query($sql, $removepub);

    
    header("Location: ../index.php");