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
<a href="admin.php?eid=<?php echo $row["eventID"]; ?>">DELETE THIS EVENT</a>
  </div> <!--box-->

<?php
}

// Attempt delete query execution
//change the id of what ever you want to delete down here manually
//if you want it to be dynamically, then you have to pass it from somewhere
if(isset($_GET['eid'])){
$eid = $_GET['eid'];

    $sql = "DELETE FROM eventList WHERE eventID = $eid";
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

</br>

</div>





