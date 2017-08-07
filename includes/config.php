<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/London');

//database credentials
define('DBHOST','localhost');
define('DBUSER','neilfloyd');
define('DBPASS','');
define('DBNAME','testing');

//application address
define('DIR','http://domain.com/');
define('SITEEMAIL','noreply@domain.com');

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$name = $_POST['name'];
	$description = $_POST['description'];
	$picture = $_POST['picture'];
	
	$q ="INSERT INTO productList(name, description, picture) VALUES(:name, :description, :picture);";
	
	$query = $db->prepare($q);
	
	$results = $query->execute(array(":name"=>$name, ":description"=>$description, ":picture"=>$picture));


} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');
include('classes/phpmailer/mail.php');
$user = new User($db);



$name

?>
