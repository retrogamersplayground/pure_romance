<!form to add images to banner-->


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
	<h2>Add images to banner.php</h2>
	</br>
<form method="post" action="insert6.php">
	
	<input type="text" id="picture" name="picture" placeholder="Picture" required /> <br />
	<input type="text" id="link" name="link" placeholder="Product URL" required /> <br />
	
	<input type= "submit" id= "submit" value ="Add Image" />
	
</form>

</center>
</div>

</br>
</br>

<center>

</br>
</br>
