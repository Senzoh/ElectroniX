<?php 
    $host = "localhost";
    $userName = "root";
    $password = "";
    $db = "db_electronix";
 
    $con = mysqli_connect($host,$userName,$password,$db);

    // //check connection status
    // if(mysqli_connect_errno()){ 
    //     echo "Failed to connect: ";
    //     mysqli_connect_errno();
    // }
    // else{
    //     echo "Connection: Success";
    // }

?>
