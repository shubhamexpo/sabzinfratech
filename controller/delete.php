<?php
include("../model/dataBaseConnection.php");
session_start();
$sno = $_GET['sno'];
$query = "DELETE FROM project where sno = $sno";
mysqli_query($connection,$query);
header('location:../view/editProject.php');
?>