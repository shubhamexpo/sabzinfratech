<?php
$displayquery = "SELECT photo FROM award";
$querydisplay = mysqli_query($connection,$displayquery);
while($result = mysqli_fetch_array($querydisplay)){
    ?>
    <div class="item">
        <img src="<?php echo $result['photo'];?>" alt="" style="height: 350px;width: 350px;">
    </div>
    <?php
}
?>




