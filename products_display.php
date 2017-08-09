<?php

$link=mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"testing");


?>




<?php
$res=mysqli_query($link, "SELECT * FROM productList");
while($row=mysqli_fetch_array($res))
{
?>


<p><?php echo $row["name"]; ?></p>
<img src="<?php echo $row["picture"]; ?>" alt="" />
<p><?php echo $row["description"]; ?></p>


<?php
}
?>