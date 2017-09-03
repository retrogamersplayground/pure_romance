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
            
            
            
            
            
            
    <section id="boxes">
        <div class="container">
            <div class="box">
                
                <h3>News</h3>
                <?php include_once("news.php");?>
                
            </div><!--box-->
            
            
            <div class="box">
                
                <h3>Acknowledgements</h3>
                <?php include_once("acknowledgements.php");?>
                
            </div><!--box-->
            
            <div class="box">
                
                <h3>Meetings</h3>
                <?php include_once("display_meeting.php");?>
            </div><!--box-->
            
            <div class="box">
                <div id="container5">
                 <form id="my_form" onsubmit="submitForm(); return false;">
                      <p><input id="n" placeholder="Name" required></p>
                      <p><input id="e" placeholder="Email Address" type="email" required></p>
                      <p><input id="mybtn" type="submit" value="Submit"> <span id="status"></span></p>
                </form>
                <h3>Join My Team</h3>
                </div><!--container5-->
            </div><!--box-->
        </div><!--container-->
    </section><!--boxes-->    
            
            
            
            
            
            
            
            
            
        <?php include_once("footer.php");?>
        
    </body>
    </br>   
        
        <script>
                function _(id){ return document.getElementById(id); }
                function submitForm(){
	            _("mybtn").disabled = true;
	            _("status").innerHTML = 'please wait ...';
	            var formdata = new FormData();
	            formdata.append ( "n", _("n").value );
	            formdata.append ( "e", _("e").value );
	            var ajax = new XMLHttpRequest();
            	ajax.open( "POST", "example_parser2.php" );
                ajax.onreadystatechange = function() {
        		if(ajax.readyState == 4 && ajax.status == 200) {
    			if(ajax.responseText == "success"){
				_("my_form").innerHTML = '<h2>I am so excited you want to join the team! I will contact you soon with information.</h2>';
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