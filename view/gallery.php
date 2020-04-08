<?php 
include("../model/dataBaseConnection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Sabz Infra Solution Pvt. Ltd</title>
    <link rel="stylesheet" media="screen and  (max-width:500px)" href="../css/mobile/gallery.css">
    <link rel="stylesheet" media="screen and (min-width: 501px) and (max-width:768px)" href="../css/tablet/gallery.css">
    <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1200px)" href="../css/normal/gallery.css">
    <link rel="stylesheet" media="screen and (min-width: 1201px)" href="../css/widescreen/gallery.css">
    <link rel="stylesheet" media="screen and (min-width: 1201px)" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>

<!------------------------------------------------------------NAVBAR STARTS---------------------------------------------------------->
<?php include("../components/navigation.php");?>
<!------------------------------------------------------------NAVBAR STARTS---------------------------------------------------------->
    <section id="backGround">
        <img src="../resource/images/pagesPhotos/about/1.jpg" alt="">
        <h1>PROJECT GALLERY</h1>
    </section>
    <section id="container">
        <div class="items">
            <?php include("../controller/photos.php");?>
        </div>
    </section>
    <?php include("../components/footer.php");?>
</body>
</html>