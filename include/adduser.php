<?php 
    include_once('config.php'); 
    $userID = $_POST['userID'];
    $userName = $_POST['userName'];
    $gameID = $_POST['addgame'];

    
    $adduser = "INSERT INTO user (userID, userName, userGameCount) VALUES ('$userID', '$userName', '0')";
    mysqli_query($sql, $adduser);

    $updateuser = "UPDATE user SET userName = '$userName' WHERE userID = '$userID'";
    mysqli_query($sql, $updateuser);

    $addtrackedby = "INSERT INTO trackedby (gameID, userID) VALUES ('$gameID', '$userID')";
    mysqli_query($sql, $addtrackedby);

    if ($gameID !== "") {
        $updatecount = "UPDATE user SET userGameCount = (SELECT count(*) FROM trackedby WHERE userID = '$userID')
        WHERE userID = '$userID'";
        mysqli_query($sql, $updatecount);
    }


    header("Location: ../index.php");