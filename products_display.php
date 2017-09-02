


<?php

$link=mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"id2560534_testing");


?>

<style>

    .container{
        text-align:center;
    }

    .box{
    display:inline-block; /* so the children on the same line */
    height: auto;
    width: 24%;
    margin-bottom:25px;
        }

    .box img{
        width:80%;
    }
    
    @media(max-width: 768px){
        .container{
        text-align:center;
    }

    .box{
    display:inline-block; /* so the children on the same line */
    height: auto;
    width: 48%;
    margin-bottom:25px;
        }

    .box img{
        width:60%;
    }
    
    
    
    }
    
    @media(max-width: 500px){
        .container{
        text-align:center;
    }

    .box{
    display:inline-block; /* so the children on the same line */
    height: auto;
    width: 97%;
    margin-bottom:25px;
        }

    .box img{
        width:60%;
    }
    
    
    
    }
    
</style> 
<div class="container">
<?php
$res=mysqli_query($link, "SELECT * FROM productList");
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
            
   