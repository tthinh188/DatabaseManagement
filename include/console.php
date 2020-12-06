<?php 
    include_once('config.php'); 
    $consoleID = $_POST['consoleID'];
    $consoleName = $_POST['consoleName'];
    $yearReleased = $_POST['yearReleased'];

    $addconsole = "INSERT INTO console(consoleID, consoleName, yearReleased) VALUES ('$consoleID',
    '$consoleName', '$yearReleased')";

    mysqli_query($sql, $addconsole);

    if ($consoleName !== "") {
        $updatename = "UPDATE console SET consoleName = '$consoleName' WHERE consoleID = '$consoleID'";
        mysqli_query($sql, $updatename);
    }
    if ($yearReleased !== "") {
        $updateyear = "UPDATE console SET yearReleased = '$yearReleased' WHERE consoleID = '$consoleID'";
        mysqli_query($sql, $updateyear);
    }

    header("Location: ../index.php");