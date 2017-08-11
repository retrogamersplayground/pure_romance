
//this script needs work before using. it is duplicating both forms entries and inserting in both databases.





try {

	//create PDO connection
	$db2 = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
	


//add events to event list varialbes
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	
	$picture2 = $_POST['picture'];
	$description2 = $_POST['description'];
	$location= $_POST['location'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	
	
	//preapared statment to add events to event list
	$q2 ="INSERT INTO eventList(picture, description, location, date, time) VALUES(:picture, :description, :location, :date, :time);";
	//perpare statement
	$query2 = $db2->prepare($q2);
	//execute prepared statement to add products to product list
	$results2 = $query2->execute(array(":picture"=>$picture2, ":description"=>$description2, ":location"=>$location, ":date"=>$date, ":time"=>$time));
	}
	
	
	
// catch errors
} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}















<!--query to echo results from product list to browser-->


<!--this script needs work.-->
<?php 

	$query ="SELECT * FROM productList";
	$result = $db->query($query);
		if($result->rowCount() > 0) {
			foreach($result as $item) {
				
			
				echo $item['name'] . $item['description'] . $item['picture'] ;	
			}
		}
    		
?>