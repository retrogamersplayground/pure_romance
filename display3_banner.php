<!--display images to be included in banner-->
    
<?php include_once("mysqli_connection.php");?>

<div class="container">
<?php
$res=mysqli_query($link, "SELECT * FROM banner3");
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