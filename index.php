<?php 
include("./model/dataBaseConnection.php");
session_start();
include("./controller/sendMail.php");
include("./controller/message.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to Sabz Infra Solution Pvt. Ltd</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen and (max-width:384px)" href="./css/smallMobile/smallMobile.css">
    <link rel="stylesheet" media="screen and (min-width: 385px)  and (max-width:500px)" href="./css/mobile/mobile.css">
    <link rel="stylesheet" media="screen and (min-width: 501px) and (max-width:768px)" href="./css/tablet/tablet.css">
    <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1200px)" href="./css/normal/normal.css">
    <link rel="stylesheet" media="screen and (min-width: 1201px)" href="./css/widescreen/widescreen.css">
    <link rel="stylesheet" media="screen and (min-width: 1201px)" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body id="home">


<!------------------------------------------------------------NAVBAR STARTS---------------------------------------------------------->
<nav id="navBar">
    <div class="logoBg">
        <img src="" alt="">
        <h2 class="logo"><span style="font-family:avenir-lt-w01_85-heavy1475544, sans-serif;font-stretch:100% ;letter-spacing: 1px; font-weight: 400;">SABZ INFRA</span><br/>SOLUTION PVT LTD</h2>
    </div>
    <div class="menu-wrap">
        <input type="checkbox" name="" class="toggler">
        <div class="hamburger"><div></div></div>
        <div class="menu">
            <div>
                <div>
                    <ul>
                        <li><a href="./index.php" style="color: #fff !important ;">HOME</a></li>
                        <li class="company"><a href="./view/aboutCompany.php">COMPANY</a></li>
                        <li><a href="./view/projects.php">PROJECTS</a></li>
                        <li><a href="./view/award.php">AWARDS</a></li>
                        <li><a href="./view/gallery.php">PROJECT GALLERY</a></li>
                        <li><a href="./view/career.php">CAREER</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation">
        <ul>
            <li><a href="./index.php" style="color: #fff !important ;">HOME</a></li>
            <li class="company"><a href="./view/aboutCompany.php">COMPANY</a></li>
            <li><a href="./view/projects.php">PROJECTS</a></li>
            <li><a href="./view/award.php">AWARDS</a></li>
            <li><a href="./view/gallery.php">PROJECT GALLERY</a></li>
            <li><a href="./view/career.php">CAREER</a></li>
        </ul>
    </div>
    <div class="login"><a href="./view/login.php"><i class="fas fa-lock"></i></a></div>
</nav>
<!------------------------------------------------------------NAVBAR ENDS---------------------------------------------------------->
<!------------------------------------------------------------BACKGROUND STARTS---------------------------------------------------------->
    <main id="viewPort">
        <video playsinline autoplay muted loop poster="./resource/images/construction-1491693.jpg" id="bgvid">
            <source src="./resource/videos/WOOD.webm" type="video/webm">
            <source src="./resource/videos/WOOD.mp4" type="video/mp4">
        </video>     
        <img class="img1" src="./resource/images/architecture-buildings-business-190417 (1).jpg" alt="">
        <img class="img2" src="./resource/images/architecture-buildings-business-190417 (1).jpg" alt="">
        <div class="viewPortHeader">
            <h1>
                LEADERS IN QUALITY</br>CONSTRUCTION AND</br>INFRASTRUCTURE
            </h1>        
        </div>
    </main>
<!------------------------------------------------------------BACKGROUND ENDS---------------------------------------------------------->
<!------------------------------------------------------------SERVICES STARTS---------------------------------------------------------->
    <section id="services">
        <h1>SERVICES</h1>
        <div class="Linebreak"></div>
        <div class="container">
            <div class="item">
                <img src="./resource/images/services/planning.jpg" alt="">
                <div class="preconstructionPlanning">
                    <div class="details">
                        <h3>Preconstruction<br>Planning</h3>
                        <p>Our personnel are capable of overseeing all aspects of a client’s project, including estimating, scheduling, design, engineering, contracting, community relations, safety programs, labor, cost control and coordination with the owner and architect. <span style="color: #1E2D3B; "><a href="./view/services.php">Read More...</a></span></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./resource/images/services/Modelling.jpg" alt="">
                <div class="architecturalModelling">
                    <div class="details">
                        <h3>Architectural<br>Modelling</h3>
                        <p>From cost and risk planning, feasibility studies and logistics to impact assessments and stakeholder engagement activity, we plan every aspect of our clients’ projects.<br><span style="color: #1E2D3B; "><a href="./view/services.php">Read More...</a></span></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./resource/images/services/construction-helmet-industry-1216589.jpg" alt="">
                <div class="constructionManagement">
                    <div class="details">
                        <h3>Construction<br>Management</h3>
                        <p>SabzInfra delivers program and construction management services to clients around the world - from project concept to completion and commissioning.SabzInfra's construction services team offers clients a single and comprehensive source of solutions <span style="color: #1E2D3B; "><a href="./view/services.php">Read More...</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!------------------------------------------------------------SERVICES END---------------------------------------------------------->

<!------------------------------------------------------------ABOUT START---------------------------------------------------------->
    <section id="mainBody">
            <div class="image"><img src="./resource/images/architectural-design-architecture-backlit-1402923.jpg" alt=""></div>
            <div class="about">
                
                <h1>ABOUT</h1>
                <div class="Linebreak"></div>
                <p>
                    M/S SABZ INFRA SOLUTION PVT LTD is a global provider of professional technical and management support services to a broad range of markets, including transportation, facilities, environmental, energy, water and government. SABZINFRA provides a blend of global reach, local knowledge, innovation and technical excellence in delivering solutions that create, enhance and sustain the world's built, natural and social environments.
                    <br>Our group has a strong work force comprise of talented individuals, including Technocrats, Design and R&D Engineers, and project management people. The Company is managed by group of expert professionals who has vast experiences in the field of Civil/structural Engineering, design, development, construction and project consultancy.
                    <br>In all areas of our business – technical, operational and administrative – we strive to achieve excellence. We pride ourselves on bringing outstanding results to everything we do.
                    <br>In all areas of our business – technical, operational and administrative – we strive to achieve excellence. We pride ourselves on bringing outstanding results to everything we do.
                    <br>Creativity, exploration and imagination are key to our business approach. We continually look for creative, new or better ways to apply our expertise to all dimensions of our work.
                    <br>We embrace change, flexibility and adaptation in a rapidly evolving world. We work to anticipate changes before they happen, and help clients and employees adapt to those changes.
                    <br>In addition to preventing injuries, safety also means maintaining a healthy workplace and ensuring that we protect and preserve facilities, property, equipment and the environment.
                    <br><span style="color: #1E2D3B; font-size: 1.2rem;"><a href="./view/aboutCompany.php">Read More...</a></span>
                </p>
            </div>
    </section>


<!------------------------------------------------------------ABOUT ENDS---------------------------------------------------------->

<!------------------------------------------------------------COUNTER START---------------------------------------------------------->
<?php
$displayquery = "SELECT currentProject,completedProject,awardWon FROM projectDetails WHERE sno='1'";
$querydisplay = mysqli_query($connection,$displayquery);
$result = mysqli_fetch_array($querydisplay)
?>




    <section id="counter">
        <div class="counterItems">
            <div class="div1">
                <div class="yearOfEstablish">
                    <h1><span style="font-family: 'Roboto', sans-serif; font-size: 55px;color:#fff;">2012</span><br><span style="font-family: 'Roboto', sans-serif; font-size: 1.5rem;color:#3D5975;">Year Established</span></h1>
                </div>
                <div class="projectCompleted">
                    <h1><span style="font-family: 'Roboto', sans-serif; font-size: 55px;color:#fff;"><?php echo $result['currentProject'];?></span><br><span style="font-family: 'Roboto', sans-serif; font-size: 1.5rem;color:#3D5975;">On Going Project</span></h1>
                </div>
            </div>
            <div class="div2">
                <div class="contractorsAppointed">
                    <h1><span style="font-family: 'Roboto', sans-serif; font-size: 55px;color:#fff;"><?php echo $result['completedProject'];?></span><br><span style="font-family: 'Roboto', sans-serif; font-size: 1.5rem;color:#3D5975;">Contractors Appointed</span></h1>
                </div>
                <div class="awardsWon">
                    <h1><span style="font-family: 'Roboto', sans-serif; font-size: 55px;color:#fff;"><?php echo $result['awardWon'];?></span><br><span style="font-family: 'Roboto', sans-serif; font-size: 1.5rem;color:#3D5975;">Awards<br>Won</span></h1>
                </div>
            </div>
        </div>
    </section>

<!------------------------------------------------------------COUNTER ENDS---------------------------------------------------------->
<!------------------------------------------------------------PROJECTS STARTS---------------------------------------------------------->
<!-- style="width: 457px; height: 457px;" -->
    <section id="projects">
        <div class="container">
            <h1>PROJECTS</h1>
            <div class="Linebreak"></div>
            <div class="images">
                <div class="box1">
                    <div class="item item-1">
                        <img src="./resource/images/homePageProjectPhoto/1.jpg" alt="">
                    </div>
                    <div class="item item-2"><img src="./resource/images/homePageProjectPhoto/3.jpeg" alt=""></div>
                </div>
                <div class="box2">
                    <div class="item item-3"><img src="./resource/images/homePageProjectPhoto/2.jpeg" alt=""></div>
                    <div class="item item-4"><img src="./resource/images/homePageProjectPhoto/4.jpeg" alt=""></div>
                </div>
            </div>
        </div>
    </section>
<!------------------------------------------------------------PROJECTS ENDS---------------------------------------------------------->
<!------------------------------------------------------------CLIENTS START---------------------------------------------------------->
    <section id="clients"> 
        <h1>CLIENTS</h1>
        <div class="Linebreak"></div>
        <div class="items">
                <img src="./resource/images/clients/6.jpg" alt="">
                <img src="./resource/images/clients/7.jpg" alt="">
                <img src="./resource/images/clients/8.jpg" alt="">
                <img src="./resource/images/clients/9.jpeg" alt="">
                <img src="./resource/images/clients/10.png" alt="">
        </div>
    </section>
<!------------------------------------------------------------CLIENTS ENDS---------------------------------------------------------->
<!------------------------------------------------------------CONTACT US STARTS---------------------------------------------------------->
    <section id="contact">
        <h1>CONTACT</h1>
        <div class="LineBreak"></div>
        <div class="find">
            <div class="formAndInfo">
                <div class="info1">
                    <h3 class="h31">Inquiries</h3>
                    <p class="p1">For any inquiries, questions or commendations,<br>please call: +91 8860 4471 80 or fill out the following form</p>
                </div>
                <div class="forms">
                    <form class="formm" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="username" id="" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea name="body"  cols="30" rows="10"style="color: #3B3A3A;background-color: #F7F7F7; width:100%;height: 126px !important; font-size: 20px;  font-family: helvetica-w01-light, helvetica-w02-light, sans-serif; padding: 1rem;" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn">Submit</button>
                        
                    </form>
                </div>
            </div>
            <div class="address">
                <div class="info2">
                    <h3 class="h32">Head Office</h3>
                    <p class="p2">Regd Office, A-216A,<br>GROUND FLOOR, BUDHA MARG,<br>MANDAWALI,<br>FAZLPUR DELHI- 110092<br> info@sabzinfra.com<br> Tel: +91 8860 4471 80<br></p>
                    <h3 class="h32">Employment</h3>
                    <p class="p2">
                        To apply for a job with <br> Sabz Infra Solution,<br>please send a cover letter <br> together with your<br>C.V. to: info@sabzinfra.com
                    </p>
                    <div class="LineBreaking"></div>
                    <p class="h33" ">Get a quote: +91 8860 4471 80</p>
                </div>
            </div>
        </div>
    </section>
<!------------------------------------------------------------CONTACT US ENDS---------------------------------------------------------->
<footer>
    <p>&copy; 2019 by SABZ INFRA SOLUTION PVT LTD. Made with  <span style="color: rgb(238,209,0);">&hearts;</span></p>
</footer>
</body>
</html>
