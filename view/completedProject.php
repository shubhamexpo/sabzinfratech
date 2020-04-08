<?php 
include("../model/dataBaseConnection.php");
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
    <title>About Sabz Infra Solution Pvt. Ltd</title>
    <link rel="stylesheet" media="screen and  (max-width:500px)" href="../css/mobile/projects.css">
    <link rel="stylesheet" media="screen and (min-width: 501px) and (max-width:768px)" href="../css/tablet/projects.css">
    <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1200px)" href="../css/normal/projects.css">
    <link rel="stylesheet" media="screen and (min-width: 1201px)" href="../css/widescreen/projects.css">
    <link rel="stylesheet" media="screen and (min-width: 1201px)" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>

<!------------------------------------------------------------NAVBAR STARTS---------------------------------------------------------->
<?php include("../components/navigation.php");?>
<!------------------------------------------------------------NAVBAR STARTS---------------------------------------------------------->
<!------------------------------------------------------------BACKGROUND STARTS---------------------------------------------------------->
<!------------------------------------------------------------BACKGROUND STARTS---------------------------------------------------------->
    <main id="viewPort">
        <video playsinline autoplay muted loop poster="../resource/images/construction-1491693.jpg" id="bgvid">
            <source src="../resource/videos/completed.webm" type="video/webm">
            <source src="../resource/videos/completed.mp4" type="video/mp4">
        </video>     
        <img class="img1" src="../resource/images/architecture-buildings-business-190417 (1).jpg" alt="">
        <img class="img2" src="../resource/images/construction-1491693.jpg" alt="">
        <div class="viewPortHeader">
            <h1>
                COMPLETED PROJECTS
            </h1>        
        </div>
    </main>
<!------------------------------------------------------------BACKGROUND ENDS---------------------------------------------------------->
    <section id="nav">
        <div class="container">
            <div class="item-1 item"style="cursor:pointer;" onclick="document.location='../view/completedProject.php'"><h1><a href="../view/completedProject.php">COMPLETED PROJECTS</a></h1></div>
            <div class="item-2 item"style="cursor:pointer;" onclick="document.location='../view/currentProject.php'"><h1><a href="../view/currentProject.php">ON GOING PROJECTS</a></h1></div>
        </div>
    </section>
    <section id="container">
        <div class="items">
            <?php
            include("../controller/completedProject.php");
            ?>
        </div>
    </section>
    <section id="nav">
        <div class="container">
            <div class="item-1 item"style="cursor:pointer;" onclick="document.location='../view/completedProject.php'"><h1><a href="../view/completedProject.php">COMPLETED PROJECTS</a></h1></div>
            <div class="item-2 item"style="cursor:pointer;" onclick="document.location='../view/currentProject.php'"><h1><a href="../view/currentProject.php">ON GOING PROJECTS</a></h1></div>
        </div>
    </section>
    <?php include("../components/footer.php");?>
</body>
</html>