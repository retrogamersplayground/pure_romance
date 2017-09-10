<!--display teamMeeting data and include on  team page-->













<?php include_once("mysqli_connection.php");?>



<?php
$res2=mysqli_query($link, "SELECT * FROM teamMeeting");
while($row=mysqli_fetch_array($res2))
{
?>



<img src="<?php echo $row["picture"]; ?>" alt="" />
<p><?php echo $row["description"]; ?></p>
<p>Location: <?php echo $row["location"]; ?></p></br>
<p>Date: <?php echo $row["date"]; ?></p>
<p>Time: <?php echo $row["time"]; ?></p>


<?php
}
?>







