<?php
$to = 'rahulrgukt123@gmail.com';
$subject = 'Marriage Proposal';
$message = 'Hi Jane, will you marry me?'; 
$from = 'sanjeevrajmurikipudi5@gmail.com';
 
// Sending email
if(mail($to, $subject, $message, $from)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>
