<?php
include("../model/dataBaseConnection.php");
session_start();
$sno = $_GET['sno'];
$query = "DELETE FROM helpMessage where sno = $sno";
mysqli_query($connection,$query);
header('location:../view/checkMessage.php');
?>