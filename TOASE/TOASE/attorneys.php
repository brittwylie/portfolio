<?php
include("dbconn.inc.php");
include("shared.php"); 
$conn = dbConnect();

?>
<!---Shared file taken from my personal coding archive---->
<!DOCTYPE HTML>
<html>
 <head>
  <title>TOASE - Attorneys</title>
 <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="keywords" content="attorney, attroney at law, TOASE, goverment law, city law, municipal law, real estate law">
 
 <script language=JavaScript>

	function init(){
		
		//partners
		document.getElementById('cAdkins').onclick = function(){openWin('attorneys/cAdkins.php')};
		document.getElementById('Allibon').onclick = function(){openWin('attorneys/allibon.php')};
		document.getElementById('eElam').onclick = function(){openWin('attorneys/eElam.php')};
		document.getElementById('aTaylor').onclick = function(){openWin('attorneys/aTaylor.php')};
		
		//associates
		document.getElementById('bAnderle').onclick = function(){openWin('attorneys/bAnderle.php')};
		document.getElementById('aDierker').onclick = function(){openWin('attorneys/aDierker.php')};
		document.getElementById('jDonovan').onclick = function(){openWin('attorneys/jDonovan.php')};
		document.getElementById('dLarkin').onclick = function(){openWin('attorneys/dLarkin.php')};
		
		//counsel
		document.getElementById('dBarrett').onclick = function(){openWin('attorneys/dBarrett.php')};
		document.getElementById('pPrevite').onclick = function(){openWin('attorneys/pPrevite.php')};
		document.getElementById('gStaples').onclick = function(){openWin('attorneys/gStaples.php')};
		document.getElementById('cStaples').onclick = function(){openWin('attorneys/cStaples.php')};
		
	}

	function openWin (url){
	// open a new browser window

		var popup = window.open(url,"newWin", "height=800,width=800,location=no,status=yes");

	}

	window.onload = init;
</script>


 </head>

 <body>
  <div class="nav">

		<?php echo $menu?>
	
  </div>
  
  <header id="index">
	<?php echo $logo ?>
 	</header>
	
	
  <main>
 	
   
 
  	
    <h2>TOASE Attorneys</h2>
    
    <div class="page">
        
        <div class="container">
        
          <h2>Partners</h2>
        <h3>Click on each Attorney to learn more!</h3>
        
        
        <!-----Partners----->
        
        <div class="attorneys">
        
        <figure>
        <span id="cAdkins">
        
        	
            	<img src="cAdkins.jpg" align="Carvan Adkins">
                
            	
        
        </span>
        <figcaption>Carvan Adkins</figcaption>
        </figure>
        					
        
    
        <figure>
        <span id="Allibon"><img src="rAllibon.jpg" alt="Robert M. Allibon"></span>
        <figcaption>Robert M. Allibon</figcaption>
        </figure>
        
        
        <figure>
        <span id="eElam"><img src="eElam.jpg" alt="Elizabeth Besty Elam"></span>
        <figcaption>Elizabeth Besty Elam</figcaption>
        </figure>
        

        <figure>
        <span id="aTaylor"><img src="ataylor.jpg" alt="Allen Taylor"></span>
        <figcaption>Allen Taylor</figcaption>
        
        </figure>
        
        </div><br>
        
         <!-----End Partners----->
        
      
        
        <!-----Associates------>
        
        <div class="attorneys">
        
        <h2>Associates</h2>
        
        <figure>
        
        <span id="bAnderle"><img src="bAnderle.jpg" alt="Bradley Anderle"></span>
        <figcaption>Bradley Anderle</figcaption>
        
        </figure>
        
        
        <figure>
        <span id="aDierker"><img src="aDierker.jpg" alt="Ashley D. Dierker"></span>
        <figcaption>Ashley D. Dierker</figcaption>
        </figure>
        
        
        <figure> 
        <span id="jDonovan"><img src="jDonovan.jpg" alt="James Donovan"></span>  
        <figcaption>James Donovan</figcaption>
        </figure> 
       
		
        <figure>        
        <span id="dLarkin"><img src="dLarkin.jpg" alt="Drew Larkin"></span>
        
        <figcaption>Drew Larkin</figcaption>
        </figure>
        
        </div>
        
        <!-----End Associates------>
        
        
        <!-----Counsel---->
        
        <h2>Counsel</h2>
        
        <div class="attorneys">
        
        
      
        <figure>
        <span id="dBarrett"><img src="dBarret.jpg" alt="Daniel R Barret"></span>
        <figcaption>Daniel R Barret</figcaption>
        </figure>
        
        <figure>
        <span id="pPrevite"><img src="pPrevite.jpg" alt="Paul V. Previte"></span>
        <figcaption>Paul V. Previte</figcaption>
        </figure>
        
        <figure>
        <span id="gStaples"><img src="gStaples.jpg" alt="George A. Staples, Jr."></span>
        <figcaption>George A. Staples, Jr.</figcaption>
        </figure>
        
        <figure>
        <span id="cStaples"><img src="cStaples.jpg" alt="Charlotte L. Staples"></span>
        <figcaption>Charlotte L. Staples</figcaption>
        </figure>
        

        
        
     	</div>
        
        <!-------End of Counsel--------->
        
        
        
     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        </div>
        

	</div>
  </main>
  
   <footer>
  	<?php echo $footer?>
  
  </footer>
 </body>
</html>
