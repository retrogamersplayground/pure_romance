
  


    

     
   


<div>
<form class="contactForm" id="my_form" onsubmit="submitForm(); return false;">
 <p> <input class="input" id="n" placeholder="Name" required> </p>
  <p><input class="input" id="e" placeholder="Email Address" type="email" required></p>
  
  <p><textarea class="input" id="m" placeholder="Write your message here." rows="10" required></textarea></p>
  <p><input class="input" id="mybtn" type="submit" value="Send"> <span id="status"></span></p>
</form>

    
    </br>   
   <script>
function _(id){ return document.getElementById(id); }
function submitForm(){
	_("mybtn").disabled = true;
	_("status").innerHTML = 'please wait ...';
	var formdata = new FormData();
	formdata.append ( "n", _("n").value );
	formdata.append ( "e", _("e").value );
	formdata.append ( "m", _("m").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "example_parser.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("my_form").innerHTML = '<h2>Thank you. Your message has been sent.</h2>';
			} else {
				_("status").innerHTML = ajax.responseText;
				_("mybtn").disabled = false;
			}
		}
	}
	ajax.send( formdata );
}
</script>  
    
</div>

