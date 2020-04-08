<?php
include("../model/dataBaseConnection.php");
session_start();
$userEmail = $_SESSION['email_id'];
if($userEmail == true)
{
    
}
else{
    header('location:../view/login.php');
}
?>

<?php
$displayquery = "SELECT currentProject,completedProject,awardWon FROM projectDetails WHERE sno='1'";
$querydisplay = mysqli_query($connection,$displayquery);
$result = mysqli_fetch_array($querydisplay)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen and (min-width:1200px)" href="../css/widescreen/admin.css">
    <title>Admin</title>
</head>
<body>
    <section id="container">
        <div class="sideBar">
            <div class="items">
                <div class="title"><h1>SabzInfra Solution Pvt Ltd</h1></div>
                <div class="dashBoard"style="cursor:pointer;"onclick="document.location='../view/admin.php'"><h1><a href="../view/admin.php">Dashboard</a></h1></div>
                <div class="addProject"style="cursor:pointer;"onclick="document.location='../view/addProject.php'"><h1><a href="../view/addProject.php">Add Project</a></h1></div>
                <div class="editProject"style="cursor:pointer;"onclick="document.location='../view/editProject.php'"><h1><a href="../view/editProject.php">Edit Project</a></h1></div>
                <div class="editProject"style="cursor:pointer;"onclick="document.location='../view/checkMessage.php'"><h1><a href="../view/checkMessage.php">Check Message</a></h1></div>
                <div class="editProject"style="cursor:pointer;"onclick="document.location='../view/addProjectPhoto.php'"><h1><a href="../view/addProjectPhoto.php">Add Project Photos</a></h1></div>
                <div class="editProject"style="cursor:pointer;"onclick="document.location='../view/addAward.php'"><h1><a href="../view/addAward.php">Add Award Photos</a></h1></div>
                <div class="editProject"style="cursor:pointer;"onclick="document.location='../view/editProjectDetails.php'"><h1><a href="../view/editProjectDetails.php">Edit Project Details</a></h1></div>
            </div>
            <div class="logout"style="cursor:pointer;"onclick="document.location='../view/logout.php'"><button><a href="../view/logout.php">Logout</a></button></div>
        </div>
        <div class="operation">
                <div class="welcome">
                    <?php
                    echo"<h1>Welcome ".$_SESSION['email_id'];echo"</h1>"
                    ?>
                </div>
                <div class="projects">
                    <div class="completedProjects">
                        <h1 class="key"style="font-size:50px;text-align: center;"><?php echo $result['completedProject'];?></h1>
                        <h1 class="value"style="font-size:25px;text-align: center;">Completed Project</h1>
                    </div>
                    <div class="currentProjects">
                            <h1 class="key"style="font-size:50px;text-align: center;"><?php echo $result['currentProject'];?></h1>
                            <h1 class="value"style="font-size:25px;text-align: center;">On Going Project</h1>
                    </div>
                </div>
        </div>
    </section>
</body>
</html>