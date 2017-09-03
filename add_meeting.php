<!--form to add meeting to team page-->


<head>
<style>
#submit{
    background: royalblue;
    color: white;
    font-size:16px;
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
    font-size: 16px;
    text-align:center;
}
</style>
</head>





<div class= "container">
<center>
	<h2>Add an meeting to the teamMeeting Table</h2>
	</br>
<form method="post" action="insert4.php">
	<input type="text" id="picture" name="picture" placeholder="Picture" required /> <br />
	<input type="text" id="description" name="description" placeholder="Description" required/> <br />
	<input type="text" id="location" name="location" placeholder="Location" required /> <br />
	<input type="text" id="date" name="date" placeholder="Date" required /> <br />
	<input type="text" id="time" name="time" placeholder="Time" required /> <br />
	<input type= "submit" id="submit" value ="Add" />
</form>

</center>

</div><!--container-->

</br>
</br><center>
</br>
</br>