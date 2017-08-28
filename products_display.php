<?php

$link=mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"testing");


?>


<?php
$res=mysqli_query($link, "SELECT * FROM productList");
while($row=mysqli_fetch_array($res))
{
?>
 
<style>
    .box{
    display:inline-block; /* so the children on the same line */
    height: auto;
    width: 24%;
        }

    img{
        width:80%;
    }
</style>        
  

  <div class="box">


<a href="<?php echo $row["link"]; ?>" target="_blank"><img src="<?php echo $row["picture"]; ?>" alt="" /></a>

  </div> <!--box-->       


<?php
}
?>


            
   