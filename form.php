<html>
  <head>
    
    
  
   
   <meta charset="uft-8">
   
   <meta name="viewport" content="width=device-width, initial-scale=1">
 
   <link rel="stylesheet" href="/step_by_step_form.css">  
  
   <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
 

       
  </head>


<div class="modal-wrap">
  <form class="contactForm" id="my_form" onsubmit="submitForm(); return false;">
  <div class="modal-header"><span class="is-active"></span><span></span></span><span></span></div>
  <div class="modal-bodies">
    <div class="modal-body modal-body-step-1 is-showing" id="n">
      <div class="title">Step 1</div>
      <div class="description">Hi! It's Rhonda from Pure Romanace. Follow the steps to message me!</div>
      
      <input type="text" placeholder="Name"/>
     
      <div class="text-center">
        <div class="button">Next</div>
      </div>
    </div>
    "
 <div class="modal-body modal-body-step-2" id="e">
      <div class="title">Step 2</div>
      <div class="description">Enter your email address.</div>
       <input type="text" placeholder="Email"/>
      <div class="text-center">
        <div class="button">Next</div>
      </div>
    </div>
    
    
    <div class="modal-body modal-body-step-3" id="m">
      <div class="title">Step 3</div>
      <div class="description">Write your message.</div>
      <form>
        <label>
          <input type="text"/>
        </label>
        
        <div class="text-center fade-in">
           <p><input class="input" id="mybtn" type="submit" value="SEND" style="padding: 10px 20px;
  border: 4px solid hotpink;
  border-radius: 3px;
  background: black;
  color: hotpink;
  text-transform: uppercase;
  letter-spacing: 1px;
  display: inline-block;
  cursor: pointer; " hover="background: hotpink;
  color: black;" onmouseover="this.getElementsByClassName('name')[0].style.backgroundColor = 'yellow'"; > <span id="status"></span></p>
        </div>
      </form>
    </div>

<div class="text-center">
  <div class="rerun-button" id="rerun-button">Send another message</div>
</div>
  </div>
</div>

     <script type="text/javascript" src="/step_by_step_form.js"></script>
 
   <script>
function _(id){ return document.getElementById(id); }
function submitForm(){
	_("mybtn").disabled = true;
	_("status").innerHTML = '</br>please wait ...';
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

 

</html>
