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
                <img src="https://ladiesnightinparties.files.wordpress.com/2016/02/cropped-600x600_1425419093923-lets-make-this-party.jpg">
            </div><!--box-->
            
            
            <div class="box">
                <img src="https://prbyrachel.files.wordpress.com/2015/08/party.jpg">
            </div><!--box-->

        </div><!--container-->
    </section><!--boxes-->     
            
            
         
        <div class="container6">
        </br>
            
            <div class="boxes">
                
                <div class="box" style="text-align: center;">
                    <h3>These are my availible party dates and upcoming events. My dates fill up quickly. Pick your date now and send me a message to save your date!</h3>
                    </br>
                    <iframe src="https://calendar.google.com/calendar/embed?src=p1nto2ee0fp9ibbf7hedrt7trc%40group.calendar.google.com&ctz=America/New_York" style="border: 0" frameborder="0" scrolling="no"></iframe>
                </div><!--box--> 
            
                 </br>
                <div id="container5"
                <div id="box3">
                    
                    <img src="http://dubaieventsblog.com/wp-content/uploads/2015/09/ladiesnightcover.jpg" class="partyFormImg">
                    <h1>Request a Party Date!</h1> 
                    
                    <form id="my_form" onsubmit="submitForm(); return false;">
        
	                    <input id="n" type="text" name="Name" placeholder="Name"/></br>
	                    <input id="e" type="email" name="Email" placeholder="Email"/></br>
	                    <input id="d" type="date" name="Request a Party Date"/></br>
	                    <p><input id="mybtn" type="submit" value="Submit"> <span id="status"></span></p></br>
                    </form>
                </div><!--box3-->
                
              
                </div> <!--container5-->
            </div> <!--boxes-->
        </div><!--container6-->    
            
            
            
        <?php include_once("footer.php");?>
        
        
                <script>
                function _(id){ return document.getElementById(id); }
                function submitForm(){
	            _("mybtn").disabled = true;
	            _("status").innerHTML = 'please wait ...';
	            var formdata = new FormData();
	            formdata.append ( "n", _("n").value );
	            formdata.append ( "e", _("e").value );
	            formdata.append ( "d", _("d").value );
	            var ajax = new XMLHttpRequest();
            	ajax.open( "POST", "example_parser3.php" );
                ajax.onreadystatechange = function() {
        		if(ajax.readyState == 4 && ajax.status == 200) {
    			if(ajax.responseText == "success"){
				_("my_form").innerHTML = '<h2>Hey, this is Rhonda. Thank you so much for reaching out to me about a party date! I will get back with you soon.</h2>';
    			} else {
    				_("status").innerHTML = ajax.responseText;
    				_("mybtn").disabled = false;
            		    	}
            	    	}
            	    }
            	ajax.send( formdata );
                }
        </script>     
            
        
    </body>
</html>