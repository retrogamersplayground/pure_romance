<html>

    <head>
        <meta charset="uft-8">
   
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title class="title">Party with Rhonda B</title>
        <link rel="stylesheet" href="/new.css">  
    
 


    </head>

    <body>
        <?php include_once("header.php");?>
        <?php include_once("showcase.php");?>
            
            
        <div id="container5">   
            <div id="container6">
            <img src="https://s-media-cache-ak0.pinimg.com/736x/09/e7/75/09e775e02a076d721d27a1657a76133f.jpg">
            </div><!--container6-->
            <h1>Hi! It's Rhonda. You can contact me below, and I will respond soon. Thanks!</h1>
            
            <form id="my_form" onsubmit="submitForm(); return false;">
                  <p><input id="n" placeholder="Name" required></p>
                  <p><input id="e" placeholder="Email Address" type="email" required></p>
                  <textarea id="m" placeholder="write your message here" rows="10" required></textarea>
                  <p><input id="mybtn" type="submit" value="Submit"> <span id="status"></span></p>
            </form>
        
        </div> <!--container5-->
    
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
				_("my_form").innerHTML = '<h2>Hey, this is Rhonda. Thank you so much for reaching out to me! I will get back with you soon.</h2>';
    			} else {
    				_("status").innerHTML = ajax.responseText;
    				_("mybtn").disabled = false;
            		    	}
            	    	}
            	    }
            	ajax.send( formdata );
                }
        </script>     
            
            
            
            
            
            
            
        <?php include_once("footer.php");?>
        
    </body>
</html>