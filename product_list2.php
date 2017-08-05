<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>



<div class="w3-row-padding">
  <div class="w3-container w3-third" style="padding-bottom: 50px;">
    <img src="  https://www.pureromance.com/getmetafile/f53e6a27-f8fd-4bb6-afa7-07dea8243ede/JLM_Original_0416.aspx?maxsidesize=500  " style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third" style="padding-bottom: 50px;">
    <img src=" https://www.pureromance.com/getmetafile/4c1c9a19-29c9-418e-8d9a-b36d29e3924e/BodyBoost_0416.aspx?maxsidesize=500   " style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third" style="padding-bottom: 50px;">
    <img src=" https://www.pureromance.com/getmetafile/64a6af60-00f1-4c44-8070-899c90a974bd/BootyEaze_0416.aspx?maxsidesize=500  " style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  
  
</div>

<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>
            
</body>
</html>
