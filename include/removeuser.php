<?php 
    include_once('config.php');
    //input variable
    $userID = $_POST['userID'];

    //remove all instances of this user 
    $remove = "DELETE FROM user WHERE userID = '$userID'";

    mysqli_query($sql, $remove);
    
    header("Location: ../index.php");