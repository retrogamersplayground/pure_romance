<!--display images to be included on admin page with delete button-->

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
$res=mysqli_query($link, "SELECT * FROM banner");
while($row=mysqli_fetch_array($res))
{
?>
 

  

  <div class="box">


<a href="<?php echo $row["link"]; ?>" target="_blank"><img src="<?php echo $row["picture"]; ?>" alt="" /></a>
<a href="admin.php?bID=<?php echo $row["bID"]; ?>">DELETE THIS IMAGE</a>
  </div> <!--box-->       


<?php
}

// Attempt delete query executio
//change the id of what ever you want to delete down here manually
//if you want it to be dynamically, then you have to pass it from somewhere
if(isset($_GET['bID'])){
$bID = $_GET['bID'];

    $sql = "DELETE FROM banner WHERE bID = $bID";
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
            
   