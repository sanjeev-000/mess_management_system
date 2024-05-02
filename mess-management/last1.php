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

require 'path/to/PHPMailerAutoload.php'; // Make sure to provide the correct path


$Name = $_POST['name'];
$Number = $_POST['number'];
$Reason = $_POST['message'];

// ... Your database connection code ...

$sql = "INSERT INTO last VALUES('$Name','$Number','$Reason');";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "THANKS FOR YOUR RESPONSE";

    // Create a new PHPMailer instance
    $mail = new PHPMailer;

    // Set up SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com'; // Your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'r190385@rguktrkv.ac.in'; // Your email
    $mail->Password = '12345678'; // Your email password
    $mail->SMTPSecure = 'tls'; // Use 'ssl' if required by your SMTP server
    $mail->Port = 587; // Port number

    // Set up email content
    $mail->setFrom('r190385@rguktrkv.ac.in', 'Sanjeev');
    $mail->addAddress('rahulrgukt123@gmail.com', 'Rahul'); // Admin's email
    $mail->Subject = 'New Data Entry';
    $mail->isHTML(true);

    $emailContent = '<html>
    <head></head>
    <body>
      <h1>New Data Entry</h1>
      <p>Name: ' . $Name . '</p>
      <p>Number: ' . $Number . '</p>
      <p>Reason: ' . $Reason . '</p>
    </body>
    </html>';
    
    $mail->Body = $emailContent;

    // Send the email
    if ($mail->send()) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
} else {
    echo "Not inserted";
}

