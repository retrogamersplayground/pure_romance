<?php include_once("mysqli_connection.php");?>

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
<a href="admin.php?pid=<?php echo $row["productID"]; ?>">DELETE THIS PRODUCT</a>
  </div> <!--box-->       


<?php
}

// Attempt delete query executio
//change the id of what ever you want to delete down here manually
//if you want it to be dynamically, then you have to pass it from somewhere
if(isset($_GET['pid'])){
$pid = $_GET['pid'];

    $sql = "DELETE FROM productList WHERE productID = $pid";
    if(mysqli_query($link, $sql)){
        $message = "Records were deleted successfully.";
    } else{
        $message = "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    
    header('location: https://prcombine-neilfloyd.c9users.io/admin.php?message=' . $message);
}

if(isset($_GET['message'])){
    echo $_GET['message'];
}
?>

</div>
            
   