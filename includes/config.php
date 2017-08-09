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

//add product to product list variables 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$description = $_POST['description'];
	$picture = $_POST['picture'];
	
	//preapared statment to add products to product list
	$q ="INSERT INTO productList(name, description, picture) VALUES(:name, :description, :picture);";
	//perpare statement
	$query = $db->prepare($q);
	//execute prepared statement to add products to product list
	$results = $query->execute(array(":name"=>$name, ":description"=>$description, ":picture"=>$picture));
	}
// catch errors
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
