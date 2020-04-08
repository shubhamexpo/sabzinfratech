<?php 
include("../model/dataBaseConnection.php");
session_start();
$userEmail = $_SESSION['email_id'];
if($userEmail == true)
{
    header('location:../view/admin.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Sabz Infra Solution Pvt. Ltd</title>
    <link rel="stylesheet" media="screen and  (max-width:500px)" href="../css/mobile/login.css">
    <link rel="stylesheet" media="screen and (min-width: 501px) and (max-width:768px)" href="../css/tablet/login.css">
    <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1200px)" href="../css/normal/login.css">
    <link rel="stylesheet" media="screen and (min-width: 1201px)" href="../css/widescreen/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="../js/loginValidation.js"></script>
</head>
<body id="home">
<!------------------------------------------------------------NAVBAR STARTS---------------------------------------------------------->
<?php include("../components/navigation.php");?>
<!------------------------------------------------------------NAVBAR ENDS---------------------------------------------------------->
    <section id="login">
        <div class="container">
            <div class="logoImage"><img src="../resource/images/logo.jpg" alt="logo"></div>
            <div class="loginForm">
            <?php 
            
			if(isset($_POST['loginn']))
			{
				$emailid=$_POST['email'];
				$pwd=MD5($_POST['password']);
				//COnnect to DB
				
				
				$result=mysqli_query($connection,"select * from users where email='$emailid'");
				if(mysqli_num_rows($result)==1)
				{
					$row=mysqli_fetch_assoc($result);
					if($row['password']==$pwd)
					{
                        $_SESSION['email_id'] = $emailid;
                        header('location:../view/admin.php');
					}
					else
					{
						echo "<p>Password not matched 
						for the Email</p>";
					}
				}
				else
				{
					echo "<p>Sorry! Email Does not
					Exists</p>";
				}
				
			}
			?>
                <form method="POST">
                    <input type="email" placeholder="Email" id="email" name="email"required>
                    <input type="password" id="pass" placeholder="Password" name="password" required>
                    
                    <button type="submit" name="loginn">LOGIN</button>
                    
                </form>
            </div>
        </div>
    </section>
    <?php include("../components/footer.php");?>
</body>
</html>