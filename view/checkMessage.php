<?php
include("../model/dataBaseConnection.php");
session_start();
/* Get total number of records */
$userEmail = $_SESSION['email_id'];
if($userEmail == true)
{
    
}
else{
    header('location:../view/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen and (min-width:1200px)" href="../css/widescreen/editProject.css">
    <title>Check Message</title>
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
                <div class="projectDetails">
                    <div class="item">
                        <div ><h1 class="serialNo">Serial No</h1></div>
                        <div class="projectName"><h1>Messanger Name</h1></div>
                        <div class="projectName"><h1>Messanger Email</h1></div>
                        <div class="projectName"><h1>Messanger Message</h1></div>
                        <div class="delete"style="background:transparent !important;"><h1>Delete</h1></div>
                    </div>
                </div>
                <?php
                $q = "select * from helpMessage";
                $query = mysqli_query($connection,$q);
                while($res = mysqli_fetch_array($query))
                {
                    ?>
                        <div class="projectDetails">
                            <div class="item">
                                <div class="serialNo"><h1 class="serialNo"><?php echo $res['sno']?></h1></div>
                                <div class="projectName"><h1><?php echo $res['messangerName']?></h1></div>
                                <div class="projectName"><h1><?php echo $res['messangerEmail']?></h1></div>
                                <div class="projectName"><h1><?php echo $res['Messengermessage']?></h1></div>
                                <div class="delete"style="cursor:pointer;" onclick="document.location='../controller/deleteMessage.php?sno=<?php echo $res['sno'];?>'"><h1><a href="../controller/deleteMessage.php?sno=<?php echo $res['sno'];?>">Delete</a></h1></div>
                             </div>
                        </div>

                    <?php
                }
                ?>
                <div>
                </div>

        </div>

    </section>
</body>
</html>