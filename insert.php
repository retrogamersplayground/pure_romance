<?php

$server = "localhost";
$user = "neilfloyd";
$pass = "";
$dbname = "testing";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connection_error) {
    die("Connection failed" . $conn->connection_error);
}

$picture = mysqli_real_escape_string($conn, $_POST['picture']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$time = mysqli_real_escape_string($conn, $_POST['time']);

$sql = "INSERT INTO eventList (picture, description, location, date, time) VALUES ('$picture', '$description', '$location', '$date', '$time')";

if($conn->query($sql) === TRUE) {

echo "Record added successfully";

}

else {

echo "error adding record" . $sql . "</br>" . $conn->error;
}

header ("Location: admin.php");
$conn->close();

?>