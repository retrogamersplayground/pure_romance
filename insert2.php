<?php

$server = "localhost";
$user = "neilfloyd";
$pass = "";
$dbname = "testing";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connection_error) {
    die("Connection failed" . $conn->connection_error);
}

$name = mysqli_real_escape_string($conn, $_POST['name']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$picture = mysqli_real_escape_string($conn, $_POST['picture']);
$alink = mysqli_real_escape_string($conn, $POST['link']);


$sql = "INSERT INTO productList (name, description, picture, link) VALUES ('$name', '$description', '$picture', '$alink' )";

if($conn->query($sql) === TRUE) {

echo "Record added successfully";

}

else {

echo "error adding record" . $sql . "</br>" . $conn->error;
}

header ("Location: admin.php");
$conn->close();

?>