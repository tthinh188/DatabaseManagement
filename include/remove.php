<?php 
    include_once('config.php');
    $gameID = $_POST['gameID'];

    $removegamegenre = "DELETE FROM gamegenre WHERE gameID = '$gameID'";
    mysqli_query($sql, $removegamegenre);

    $removeoperatedby = "DELETE FROM operatedby WHERE gameID = '$gameID'";
    mysqli_query($sql, $removeoperatedby);

    $removetrackedby = "DELETE FROM trackedby WHERE gameID = '$gameID'";
    mysqli_query($sql, $removetrackedby);

    $removedevelopedby = "DELETE FROM developedby WHERE gameID = '$gameID'";
    mysqli_query($sql, $removedevelopedby);

    $removepub = "DELETE FROM publisher WHERE pubID NOT IN (SELECT pubID FROM game)";
    mysqli_query($sql, $removepub);

    $removedev = "DELETE FROM developer WHERE devID NOT IN (SELECT devID FROM developedby)";
    mysqli_query($sql, $removedev);

    $remove = "DELETE FROM game WHERE gameID = '$gameID'";

    mysqli_query($sql, $remove);
    header("Location: ../index.php");