<?php 
    include_once('config.php');
    $consoleID = $_POST['consoleID'];


    $removeoperatedby = "DELETE FROM operatedby WHERE consoleID = '$gconsoleID'";
    mysqli_query($sql, $removeoperatedby);

    $remove = "DELETE FROM console WHERE consoleID = '$consoleID'";

    mysqli_query($sql, $remove);
    
    header("Location: ../index.php");