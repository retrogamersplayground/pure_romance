



<?php include_once("mysqli_connection.php");?>


<style>
    .container{
        text-align:center;
        color:black;
    }
    .box{
    display:inline-block; /* so the children on the same line */
    height: auto;
    width: 48%;
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
        width:80%;
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
        width:80%;
    }
    
    
    
    }
    
</style> 
<div class="container">












<?php
$res2=mysqli_query($link, "SELECT * FROM eventList");
while($row=mysqli_fetch_array($res2))
{
?>

<div class="box">

<img src="<?php echo $row["picture"]; ?>" alt="" />
<p><?php echo $row["description"]; ?></p>
<p><?php echo $row["location"]; ?></p></br>
<p><?php echo $row["date"]; ?></p>
<p><?php echo $row["time"]; ?></p>
</div>

<?php
}
?>







</div>

