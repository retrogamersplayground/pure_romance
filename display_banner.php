<!--display images to be included in banner-->
    
<?php

$link=mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"id2560534_testing");


?>

<div class="container">
<?php
$res=mysqli_query($link, "SELECT * FROM banner");
while($row=mysqli_fetch_array($res))

{
?>
 



  <div class="box">


<a href="<?php echo $row["link"]; ?>" target="_blank"><img src="<?php echo $row["picture"]; ?>" alt="" /></a>



  </div> <!--box-->       

<?php
}

?>

</div>
    