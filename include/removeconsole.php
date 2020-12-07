<?php 
    include_once('config.php');
    //input variables
    $consoleID = $_POST['consoleID'];

    // remove all instances of that console
    $remove = "DELETE FROM console WHERE consoleID = '$consoleID'";
    mysqli_query($sql, $remove);
    
    header("Location: ../index.php");