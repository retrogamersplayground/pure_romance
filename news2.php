<!--display news to be echoed to admin page with delete link-->

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
<a href="admin.php?nID=<?php echo $row["nID"]; ?>">DELETE THIS NEWS ITEM</a>
  </div> <!--box-->

<?php
}

// Attempt delete query executio
//change the id of what ever you want to delete down here manually
//if you want it to be dynamically, then you have to pass it from somewhere
if(isset($_GET['nID'])){
$nID = $_GET['nID'];

    $sql = "DELETE FROM news WHERE nID = $nID";
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









