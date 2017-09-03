<!--used to insert images into bannerslider.php-->

<?php

$server = "localhost";
$user = "neilfloyd";
$pass = "";
$dbname = "id2560534_testing";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connection_error) {
    die("Connection failed" . $conn->connection_error);
}


$picture = mysqli_real_escape_string($conn, $_POST['picture']);
$link = mysqli_real_escape_string($conn, $_POST['link']);


$sql = "INSERT INTO banner (picture, link) VALUES ('$picture', '$link' )";

if($conn->query($sql) === TRUE) {

echo "Record added successfully";

}

else {

echo "error adding record" . $sql . "</br>" . $conn->error;
}

header ("Location: admin.php");
$conn->close();

?>