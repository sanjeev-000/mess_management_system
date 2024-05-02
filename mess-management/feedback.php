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
    
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Number = $_POST['Number'];
    $Neatness = $_POST['Neatness'];
    $FoodQuality = $_POST['Food'];
    $SnacksQuality = $_POST['Snacks'];
    $FoodQuantity = $_POST['Quantity'];
    	
    $sql = "INSERT INTO feedback VALUES('$Name','$Email','$Number','$Neatness','$FoodQuality','$SnacksQuality','$FoodQuantity');";
    $result = mysqli_query($conn,$sql);	
    
    if($result)
    		{
    		echo "<script>
        	window.location='inner.html';
        	</script>";
    		}
    		
    else {
    		echo "not inserted";
    		
    	}
    	
    	
   
?>
   
