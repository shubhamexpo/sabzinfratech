<?php

if(isset($_POST['submit'])){
    $projectType = $_POST['project'];
    $ownerName = $_POST['owner'];
    $projectName = $_POST['projectName'];
    $projectCost = $_POST['projectCost'];
    $projectScope = $_POST['projectScope'];
    $projectImage = $_FILES['projectPhoto'];
	
	$fileName = $projectImage['name'];
	$fileError = $projectImage['error'];
	$filetmp = $projectImage['tmp_name'];

	$fileExtension = explode('.',$fileName);
	$fileCheck = strtolower(end($fileExtension));
	$fileExtensionStored = array('png','jpg','jpeg');

	if(in_array($fileCheck,$fileExtensionStored)){
		if($projectType == "completedProject")
		{
			$destinationFile = '../projectsImages/completedProjects/'.$fileName;
            move_uploaded_file($filetmp,$destinationFile);
		}
		else{
			$destinationFile = '../projectsImages/currentProjects/'.$fileName;
            move_uploaded_file($filetmp,$destinationFile);
		}
        $addProject = "INSERT INTO project(projectType, ownerName, projectName,projectCost,projectScope,projectPhoto) 
        VALUES ('$projectType','$ownerName','$projectName','$projectCost','$projectScope','$destinationFile')";
        $query = mysqli_query($connection,$addProject);
        header('location:../view/addProject.php');
	}

}

?>
