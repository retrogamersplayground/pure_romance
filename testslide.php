<?php

$link=mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"testing");


?>

<head>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <link rel="stylesheet" href="/testslide.css"> 
  
</head>

<?php
$res=mysqli_query($link, "SELECT * FROM eventList");
while($row=mysqli_fetch_array($res))
{
?>
<div id="slideshow">
   <div>
   <img src="<?php echo $row["picture"]; ?>" alt="" />
<p><?php echo $row["description"]; ?></p>
<p><?php echo $row["location"]; ?></p>
<p><?php echo $row["date"]; ?></p>
<p><?php echo $row["time"]; ?></p>
   </div>

   <div>
     Hi girls! I hope you can attend one of my specail VIP events soon! 
   </div>
</div>
<?php
}
?>

<script>
   $("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);
</script>