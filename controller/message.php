<?php

if(isset($_POST['submit'])){
    $messangerName = $_POST['username'];
    $messangerEmail = $_POST['email'];
    $messengerMessage = $_POST['body'];

    $addDetails = "INSERT INTO helpMessage(messangerName, messangerEmail, Messengermessage) 
    VALUES ('$messangerName','$messangerEmail','$messengerMessage')";
    $query = mysqli_query($connection,$addDetails);
    echo"<script>alert('Message Sent');</script>";
}
?>
