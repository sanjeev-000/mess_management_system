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
        echo "";
    }
    
    $Name = $_POST['name'];
    $Number = $_POST['number'];
    $Reason = $_POST['message'];
    
    $sql = "INSERT INTO last VALUES('$Name','$Number','$Reason');";
    $result = mysqli_query($conn,$sql);	
    
    if($result)
    		{
    		echo "THANKS FOR YOUR RESPONCE";
    		}
    		
    else {
    		echo "not inserted";
    		
    	}
    		
   
?>
   
