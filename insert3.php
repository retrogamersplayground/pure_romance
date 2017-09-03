<?php

$server = "localhost";
$user = "neilfloyd";
$pass = "";
$dbname = "id2560534_testing";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connection_error) {
    die("Connection failed" . $conn->connection_error);
}


$description = mysqli_real_escape_string($conn, $_POST['description']);
$picture = mysqli_real_escape_string($conn, $_POST['picture']);



$sql = "INSERT INTO acknowledgements (picture, description) VALUES ('$picture', '$description' )";

if($conn->query($sql) === TRUE) {

echo "Record added successfully";

}

else {

echo "error adding record" . $sql . "</br>" . $conn->error;
}

header ("Location: admin.php");
$conn->close();

?>