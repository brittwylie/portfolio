<?php
include("dbconn.inc.php");
include("shared.php"); 
$conn = dbConnect();
?>
<!---Shared file taken from my personal coding archive---->

<!DOCTYPE HTML>
<html>
 <head>
 
 <script>
 
 	//Fuction to change inner HTML to corresond to each TOASE Vaule
	function init(){
		document.getElementById('Experience').onclick = changeText1;
		document.getElementById('Quality').onclick = changeText2;
		document.getElementById('Dedication').onclick = changeText3;
	}
	
	//Experience
	function changeText1 (){
		obj = document.getElementById('content');
		obj.innerHTML = "Over 200 years of combined experience serving municipalities and other governmental entities. We serve cities as general counsel in North Central Texas and as special counsel throughout the state.";
	}
	//Quality
	function changeText2 (){
		obj = document.getElementById('content');
		obj.innerHTML = "The attorneys in our firm possess high academic credentials, maintain strong community ties, are committed to the pursuit of excellence, communicate effectively and demonstrate the strictest personal and professional ethics as well as the utmost concern for our clients.";
	}
	//Dedication
	function changeText3(){
		obj = document.getElementById('content');
		obj.innerHTML = "Our dedication to quality, understanding of the law, trust and respect are the foundation of our long-standing relationships with clients and the community. We take pride in our work and our ability to provide personalized service in a friendly manner that is useful to our clients.";
	}

	window.onload = init;
</script>
  <title>TOASE</title>
 <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="attorney, attroney at law, TOASE, goverment law, city law, municipal law, real estate law">


 </head>

 <body>
  <div class="nav">

		<?php echo $menu?>
		
	
  </div>
  
  <header id="index">
	 <?php echo $logo ?>
 	</header>
	
	
  <main>
  
  
	
	<div class ="main">
    
    <h2>Welcome to Taylor Olson Adkins Sralla & Elam, LLP</h2>
    	<div class="homeImgs">
        
      		<div class="homeImgFig">
    			<figure>
    				<img src="IMG4037.jpg" alt="toase">
                  	<!---To goto Practice Areas---->
    				<figcaption><a href="practiceAreas.php">Click to learn more!</a></figcaption>
       				 
    			</figure>
                <!----Inner HTML Function for information about experience---->
                <a href="#" id="Experience"><strong><em>Experience.</em></strong></a>
    		</div>
            
    <div class="homeImgFig">
    	<figure>
        	
    		<img src="IMG4215.jpg" alt="toase">
            
            <!----Goto Attorneys------>
    		<figcaption><a href="attorneys.php">Click to learn more!</a></figcaption>
             
    	</figure>
        <!----Inner HTML Function for information about Quality---->
        <a href="#" id="Quality"><strong><em>Quality</em></strong></a>
    </div>
    
    <div class="homeImgFig">
    	<figure>
    		<img src="IMG4263.jpg" alt="toase">
            <!----Goto Contact---->
    		<figcaption><a href="contact.php">Click to learn more!</a></figcaption>
        	
    	</figure>
        <!----Inner HTML Function for information about Dedication---->
        <a href="#" id="Dedication"><strong><em>Dedication</em></strong></a> 
    </div>
    
    </div>
    

<div id="content">
	Click above to learn more about TOASE!
</div>




        
        

	</div>
  </main>
  
  
  <footer>
  	<?php echo $footer?>
  </footer>
  
 </body>
</html>
