<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <link rel="stylesheet" href="/bannerslider.css"> 
  
</head>

<div id="slideshow">
   <div>
     <a href="https://www.pureromance.com/become-a-consultant#starterkits" target="_blank"><img src="https://www.pureromance.com/getattachment/5b1ee801-35e2-4c35-bdec-13a8c4bd135e/.aspx"></a>
   </div>
   <div>
     <a href="https://www.pureromance.com/Shop/New-Arrivals" target="_blank"><img src="https://www.pureromance.com/getattachment/d6fbab54-d5fc-46a9-a14e-7c6cf38ea417/.aspx"></a>
   </div>
   <div>
     <a href="https://www.pureromance.com/Special-Pages/Smart-Shipd" target="_blank"><img src="https://www.pureromance.com/getattachment/3601ae55-e77f-4962-8f2a-d75de07c9cbf/.aspx"></a>
   </div>
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
