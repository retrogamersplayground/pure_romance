<head>
	<style>
	

	#submit{
    background: royalblue;
    color: white;
    font-size: 16px;
    
}


.container{
    width:65%;
	background: pink;
    margin:auto;
    overflow:hidden;
}

input{
    width:60%;
    margin:5px;
    height: 50px;
    border-radius: 8px;
    text-align:center;
    font-size:16px;
}
	</style>
</head>




<!--form to add product to product list database-->

<div class= "container">

<center>
	<h2>Add products to Database and then echo to products_display.php</h2>
	</br>
<form method="post" action="insert2.php">
	<input type="text" id="name" name="name" placeholder="Name" required /> <br />
	<input type="text" id="description" name="description" placeholder="Description" required/> <br />
	<input type="text" id="picture" name="picture" placeholder="Picture" required /> <br />
	
	<input type= "submit" id= "submit" value ="Add" />
</form>

</center>
</div>

</br>
</br>

<center>

</br>
</br>
