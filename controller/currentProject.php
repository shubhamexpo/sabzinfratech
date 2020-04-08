<?php
$displayquery = "SELECT ownerName,projectName,projectCost,projectScope,projectPhoto	 FROM project WHERE projectType='currentProject'";
$querydisplay = mysqli_query($connection,$displayquery);
while($result = mysqli_fetch_array($querydisplay)){
    ?>
    <div class="item">
            <div class="projectPhoto">
                <img src="<?php echo $result['projectPhoto'];?>" alt="">
            </div>
                <div class="description">
                    <div class="info">
                        <div><h1>OWNER</h1></div>
                        <div><p><?php echo $result['ownerName'];?></p></div>
                    </div>
                    <div class="info">
                        <div><h1>Project name</h1></div>
                        <div><p><?php echo $result['projectName'];?></p></div>
                    </div>
                    <div class="info">
                        <div><h1>Project cost</h1></div>
                        <div><p><?php echo $result['projectCost'];?></p></div>
                    </div>
                    <div class="info">
                        <div><h1>SCOPE OF WORK</h1></div>
                        <div><p><?php echo $result['projectScope'];?></p></div>
                    </div>
                </div>
        </div>
    <?php
}
?>