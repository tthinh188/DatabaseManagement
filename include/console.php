<?php 
    // Input variables
    include_once('config.php'); 
    $consoleID = $_POST['consoleID'];
    $consoleName = $_POST['consoleName'];
    $yearReleased = $_POST['yearReleased'];

    //add new console
    $addconsole = "INSERT INTO console(consoleID, consoleName, yearReleased) VALUES ('$consoleID',
    '$consoleName', '$yearReleased')";
    mysqli_query($sql, $addconsole);

    //update console name
    if ($consoleName !== "") {
        $updatename = "UPDATE console SET consoleName = '$consoleName' WHERE consoleID = '$consoleID'";
        mysqli_query($sql, $updatename);
    }

    //update year released
    if ($yearReleased !== "") {
        $updateyear = "UPDATE console SET yearReleased = '$yearReleased' WHERE consoleID = '$consoleID'";
        mysqli_query($sql, $updateyear);
    }

    header("Location: ../index.php");