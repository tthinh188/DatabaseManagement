<?php 
    //input variables
    include_once('config.php'); 
    $userID = $_POST['userID'];
    $userName = $_POST['userName'];
    $gameID = $_POST['addgame'];
    $gameIDremove = $_POST['removegame'];

    // add new user
    $adduser = "INSERT INTO user (userID, userName, userGameCount) VALUES ('$userID', '$userName', '0')";
    mysqli_query($sql, $adduser);
   
    //update user name only if input not empty
    //would also run if adding new user but no change
    if ($userName != "") {
        $updateuser = "UPDATE user SET userName = '$userName' WHERE userID = '$userID'";
        mysqli_query($sql, $updateuser);
    }

    //update trackedby if adding a game
    $addtrackedby = "INSERT INTO trackedby (gameID, userID) VALUES ('$gameID', '$userID')";
    mysqli_query($sql, $addtrackedby);

    //delete a game user is tracking 
    if ($gameIDremove !== "") {
        $remove = "DELETE FROM trackedby WHERE gameID = '$gameIDremove' AND userID = '$userID'";
        mysqli_query($sql, $remove);
    }

    //update user game count 
    if ($gameID !== "" || $gameIDremove !== "") {
        $updatecount = "UPDATE user SET userGameCount = (SELECT count(*) FROM trackedby WHERE userID = '$userID')
        WHERE userID = '$userID'";
        mysqli_query($sql, $updatecount);
    }

    //refresh page
    header("Location: ../index.php");