<?php

if(isset($_POST['submit'])){
    $projectImage = $_FILES['projectPhoto'];
	
	$fileName = $projectImage['name'];
	$fileError = $projectImage['error'];
	$filetmp = $projectImage['tmp_name'];

	$fileExtension = explode('.',$fileName);
	$fileCheck = strtolower(end($fileExtension));
	$fileExtensionStored = array('png','jpg','jpeg');

	if(in_array($fileCheck,$fileExtensionStored)){
        $destinationFile = '../projectsImages/awards/'.$fileName;
        move_uploaded_file($filetmp,$destinationFile);
        $addPhoto = "INSERT INTO award(photo) 
        VALUES ('$destinationFile')";
		$query = mysqli_query($connection,$addPhoto);
		
	}
	header('location:../view/addAward.php');
	
}
?>
