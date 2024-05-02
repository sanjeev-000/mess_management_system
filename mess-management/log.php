<?php
    session_start();
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
    	$username = $_POST['username'];
    	$useremail = $_POST['useremail'];
    	
        $sql = "SELECT * FROM project WHERE username = '$username';";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_num_rows($result);
        if($row > 0){
            while($data = mysqli_fetch_assoc($result)){
                $_SESSION['email']=$data['useremail'];
                echo $data['useremail'];
                break;
            }
        }
        if($data['useremail'] === $useremail){
            echo "<script>
         window.location='interface.html';
         </script>";
        }
        else{
            echo "<script>
         window.location='project.html';
         </script>";
        }
?>
