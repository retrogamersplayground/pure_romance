



<?php include_once("mysqli_connection.php");?>















<?php
$res2=mysqli_query($link, "SELECT * FROM eventList");
while($row=mysqli_fetch_array($res2))
{
?>



<img src="<?php echo $row["picture"]; ?>" alt="" />
<!--<p><?php echo $row["description"]; ?></p>
<p><?php echo $row["location"]; ?></p></br>
<p><?php echo $row["date"]; ?></p>
<p><?php echo $row["time"]; ?></p>-->


<?php
}
?>









