<?php
    $serverName="localhost";
    $dbUserName="emashanawodani";
    $dbPassword="HvA_SOV9P3BbfwI-";
    $dbName="miniproject";

    $conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

    if(!$conn){
        die("Connection failed : " .mysqli_connect_error());
    }
    

?>