





<?php include_once("mysqli_connection.php");?>










<?php
$res2=mysqli_query($link, "SELECT * FROM acknowledgements");
while($row=mysqli_fetch_array($res2))
{
?>



<img src="<?php echo $row["picture"]; ?>" alt="" />
<p><?php echo $row["description"]; ?></p>



<?php
}
?>







