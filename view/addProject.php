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
include("../controller/addProjects.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen and (min-width:1200px)" href="../css/widescreen/addProject.css">
    <title>Admin</title>
</head>
<body>
    <section id="container">
        <div class="sideBar">
            <div class="items">
            <div class="title"><h1>SabzInfra Solution Pvt Ltd</h1></div>
                <div class="dashBoard"style="cursor:pointer;" onclick="document.location='../view/admin.php'"><h1><a href="../view/admin.php">Dashboard</a></h1></div>
                <div class="addProject"style="cursor:pointer;" onclick="document.location='../view/addProject.php'"><h1><a href="../view/addProject.php">Add Project</a></h1></div>
                <div class="editProject"style="cursor:pointer;" onclick="document.location='../view/editProject.php'"><h1><a href="../view/editProject.php">Edit Project</a></h1></div>
                <div class="editProject"style="cursor:pointer;" onclick="document.location='../view/checkMessage.php'"><h1><a href="../view/checkMessage.php">Check Message</a></h1></div>
                <div class="editProject"style="cursor:pointer;" onclick="document.location='../view/addProjectPhoto.php'"><h1><a href="../view/addProjectPhoto.php">Add Project Photos</a></h1></div>
                <div class="editProject"style="cursor:pointer;" onclick="document.location='../view/addAward.php'"><h1><a href="../view/addAward.php">Add Award Photos</a></h1></div>
                <div class="editProject"style="cursor:pointer;" onclick="document.location='../view/editProjectDetails.php'"><h1><a href="../view/editProjectDetails.php">Edit Project Details</a></h1></div>
            </div>
            <div class="logout"style="cursor:pointer;" onclick="document.location='../view/logout.php'"><button><a href="../view/logout.php">Logout</a></button></div>
        </div>
        <div class="operation">
                <div class="welcome"><h1>Welcome to Sabz Infra Solutions</h1></div>
                <div class="projects">
                    
                        <form method="POST" enctype="multipart/form-data">
                            <label for="project">Project Type</label required>
                            <select name="project" id="">
                                <option>Select</option>
                                <option value="completedProject">Completed Project</option>
                                <option value="currentProject">Current Project</option>
                            </select required>
                            <label for="owner">OWNER</label>
                            <input type="text" name="owner">
                            <label for="projectName">Project Name</label>
                            <input type="text" name="projectName">
                            <label for="projectScope">Project Cost</label>
                            <input type="text" name="projectCost">
                            <label for="projectScope">Project Scope</label>
                            <input type="text" name="projectScope">
                            <label for="projectPhoto">Project Photo</label>
                            <input type="file" name="projectPhoto" id="choose" required>
                            <button type="submit" value="submit" name="submit">Add Product</button>
                        </form>
                </div>
        </div>
    </section>
</body>
</html>