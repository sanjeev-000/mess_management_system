<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        echo "database was not connected";
    }
    else{
        echo "database was connected";
    }
    	$password = $_POST['password'];
    	
        $sql = "SELECT * FROM `table` WHERE password = $password;";
        
        $result = mysqli_query($conn,$sql);
        $row = mysqli_num_rows($result);
        
       if($row > 0){
        echo "<script>
        window.location='interface.html';
        </script>";
        }
        else{
            echo "<script>
         window.location='admin.html';
         </script>";
        } 

?>
