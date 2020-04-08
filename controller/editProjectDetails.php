<?
if(isset($_POST['submit'])){
    $sno = $_GET["sno"];
    $currentProject = $_POST['currentProject'];
    $completedProject = $_POST['completedProject'];
    $awardWon = $_POST['awardWon'];

    $update="UPDATE projectDetails SET currentProject='$currentProject' ,completedProject='$completedProject',awardWon='$awardWon' WHERE sno=$sno";
    $query = mysqli_query($connection,$update);
}
?>
