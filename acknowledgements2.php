<?php

$link=mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"id2560534_testing");


?>




<?php
$res2=mysqli_query($link, "SELECT * FROM acknowledgements");
while($row=mysqli_fetch_array($res2))
{
?>



<img src="<?php echo $row["picture"]; ?>" alt="" />
<p><?php echo $row["description"]; ?></p>
<a href="admin.php?aID=<?php echo $row["aID"]; ?>">DELETE THIS ACKNOWLEDGEMENT</a>
  </div> <!--box-->

<?php
}

// Attempt delete query executio
//change the id of what ever you want to delete down here manually
//if you want it to be dynamically, then you have to pass it from somewhere
if(isset($_GET['aID'])){
$aID = $_GET['aID'];

    $sql = "DELETE FROM acknowledgements WHERE aID = $aID";
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









