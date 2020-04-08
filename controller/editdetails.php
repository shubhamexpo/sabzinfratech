
<?
if(isset($_POST['submit'])){
    $sno = $_GET["sno"];
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

        $update="UPDATE project SET projectType='$projectType' ,ownerName='$ownerName',projectName='$projectName' ,projectCost='$projectCost', projectScope='$projectScope', projectPhoto='$destinationFile' WHERE sno=$sno";
        $query = mysqli_query($connection,$update);
        header('location:../view/editProject.php');
        
    }

    

}
?>
