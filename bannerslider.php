<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <link rel="stylesheet" href="/bannerslider.css"> 
  
</head>

<div id="slideshow">
   <?php include_once("display_banner.php");?>
</div>


<script>
  
  $("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  9000);  
    
</script>
