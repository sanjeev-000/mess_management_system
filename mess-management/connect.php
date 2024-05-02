<?php
    echo "welcome to the stage of where data is connected to mysql";
 $username="localhost";
 $servername="root";
 $password="";
 $dbname="project";
 $conn = mysqli_connect($username,$servername,$password,$dbname);

    if(!$conn){
        echo "connection was unsuccessfull";
    }
    else{
        echo "connection was succesfull";
    }

?>