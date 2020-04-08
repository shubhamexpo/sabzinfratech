<?php
$msg = "";
if(isset($_POST['submit'])){
    require '../phpmailer/PHPMailerAutoload.php';
    require '../phpmailer/class.smtp.php';
    require '../phpmailer/class.phpmailer.php';
    function sendemail($to,$from,$fromName,$body,$attachment="") {
        $mail = new PHPMailer();
        $mail->setFrom($from,$fromName);
        $mail->addAddress($to);
        $mail->addAttachment($attachment);
        $mail->Subject = 'contact form - Email';
        $mail->Body = $body;
        $mail->isHTML(false);
    
    //$mail->SMTPDebug = 2;                                       // Enable verbose debug output
    //$mail->isSMTP();                                            // Set mailer to use SMTP
    //$mail->Host       = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    //$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    //$mail->Username   = 'user@example.com';                     // SMTP username
    //$mail->Password   = 'secret';                               // SMTP password
    //$mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    //$mail->Port       = 587;
    
        
        return $mail->send();
    }
    $name=$_POST['username'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $experience=$_POST['experience'];
    $message = $_POST['message'];


    $file="../attachment/" .basename($_FILES['attachment']['name']);
    if(move_uploaded_file($_FILES['attachment']['tmp_name'],$file)){
        if(sendemail('skd8238@gmail.com',$email,$name,$phoneNumber,$experience,$message,$file)){
            $msg = 'Email sent';
        
        }else{$msg = 'Email failed!';}
        
    }else{
        $msg = "Please check attachment";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen and  (max-width:500px)" href="../css/mobile/career.css">
    <link rel="stylesheet" media="screen and (min-width: 501px) and (max-width:768px)" href="../css/tablet/career.css">
    <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1200px)" href="../css/normal/career.css">
    <link rel="stylesheet" media="screen and (min-width: 1201px)" href="../css/widescreen/career.css">
    <link rel="stylesheet" media="screen and (min-width: 1201px)" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>About Sabz Infra Solution Pvt. Ltd</title>
</head>
<body>
<!------------------------------------------------------------NAVBAR STARTS---------------------------------------------------------->
<?php include("../components/navigation.php");?>
<!------------------------------------------------------------NAVBAR STARTS---------------------------------------------------------->
    <section id="container">
        
        <div class="careerForm">
            <div><h1>Apply Online</h1></div>
            <form method="POST" enctype="multipart/form-data">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Enter Your Name" required>
                <label for="email">Email</label>
                <input type="email" name="email" id="" placeholder="Email" required>
                <label for="phoneNumber">Phone</label>
                <input type="text" name="phoneNumber" placeholder="Name" required>
                <label for="experience">Experience</label required>
                <select name="experience" id="">
                    <option value="fresher">Fresher</option>
                    <option value="1">1+ Experience</option>
                    <option value="2">2+ Experience</option>
                </select required>
                <label for="message">Message</label required>
                <textarea name="message" id="" cols="30" rows="10"></textarea>
                <label for="attachment">Upload Resume</label>
                <input type="file" name="attachment" id="choose" required>
                <button type="submit" name="submit" value="submit">Submit</button>
            </form>
        </div>
    </section>
    <?php include("../components/footer.php");?>
</body>
</html>