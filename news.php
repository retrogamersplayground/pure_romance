<!--display news to be included in the team.php page-->

<?php

$link=mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"id2560534_testing");


?>




<?php
$res2=mysqli_query($link, "SELECT * FROM news");
while($row=mysqli_fetch_array($res2))
{
?>



<img src="<?php echo $row["picture"]; ?>" alt="" />
<p><?php echo $row["description"]; ?></p>



<?php
}
?>







