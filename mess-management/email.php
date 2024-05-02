<?php
$to = "h869094@gmail.com";
$subject = "I love you Ra";
$txt = "I am not in with love you";
$headers = "From:r190524rguktrkv.ac.in";

if(mail($to,$subject,$txt,$headers)){
    echo "Mali sent succesfully";
}
else{
    echo "mail wasn't  sent";
}
?>