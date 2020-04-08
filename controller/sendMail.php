<?
$msg = "";
if(isset($_POST['submit'])){
    
    $name=$_POST['username'];
    $email = $_POST['email'];
    $body = $_POST['body'];
    $msg = $body;
    $msg = wordwrap($msg,70);
    if(mail("info@sabzinfra.com","Some one send message from website",$msg,$email))
    {
        $msg="Mail-Sent";
    }
    else{
        $msg="Mail-Not-Sent";
    }  
}
?>