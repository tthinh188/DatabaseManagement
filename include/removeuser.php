<?php 
    include_once('config.php');
    $userID = $_POST['userID'];

    $remove = "DELETE FROM user WHERE userID = '$userID'";

    mysqli_query($sql, $remove);
    
    header("Location: ../index.php");