<?php
include("dbconn.inc.php");
include("shared.php"); 
$conn = dbConnect();

?>
<!---Shared file taken from my personal coding archive---->
<!DOCTYPE HTML>
<html>
 <head>
  <title>TOASE</title>
 <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
 
 <script language=JavaScript>

	function init(){
		
		//partners
		document.getElementById('cAdkins').onclick = function(){openWin('cAdkins.php')};
		document.getElementById('Allibon').onclick = function(){openWin('allibon.php')};
		document.getElementById('eElam').onclick = function(){openWin('eElam.php')};
		document.getElementById('aTaylor').onclick = function(){openWin('aTaylor.php')};
		
		//associates
		document.getElementById('bAnderle').onclick = function(){openWin('bAnderle.php')};
		document.getElementById('aDierker').onclick = function(){openWin('aDierker.php')};
		document.getElementById('jDonovan').onclick = function(){openWin('jDonovan.php')};
		document.getElementById('dLarkin').onclick = function(){openWin('dLarkin.php')};
		
		//counsel
		document.getElementById('cAdkins').onclick = function(){openWin('cAdkins.php')};
		document.getElementById('cAdkins').onclick = function(){openWin('cAdkins.php')};
		document.getElementById('cAdkins').onclick = function(){openWin('cAdkins.php')};
		document.getElementById('cAdkins').onclick = function(){openWin('cAdkins.php')};
	}

	function openWin (url){
	// open a new browser window

		var popup = window.open(url,"newWin", "height=500,width=800,location=no,status=yes");

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
        
        
        <!-----Partners----->
        
        <div class="attorneys">
        
        <h2>Partners</h2>
        <span id="cAdkins"><img src="cAdkins.jpg" align="Carvan Adkins"></span>
        
    
        
        <span id="Allibon"><img src="rAllibon.jpg" alt="Robert M. Allibon"><br></span>
        
        
        
        <span id="eElam"><img src="eElam.jpg" alt="Elizabeth Besty Elam"></span>
        

        
        <span id="aTaylor"><img src="ataylor.jpg" alt="Allen Taylor"></span>
        
        </div>
        
         <!-----End Partners----->
        
      
        
        <!-----Associates------>
        
        <div class="attorneys">
        
        <span id="bAnderle"><img src="bAnderle.jpg" alt="Bradley Anderle"></span>
        
        
        <span id="aDierker"><img src="aDierker.jpg" alt="Ashley D. Dierker"></span>
        
         
        <span id="jDonovan"><img src="jDonovan.jpg" alt="James Donovan"></span>   
       
        
        <span id="dLarkin"><img src="dLarkin.jpg" alt="Drew Larkin"></span>
        
        </div>
        
        <!-----End Associates------>
        
        
        <!-----Counsel---->
        
        <div class="attorneys">
        
        
        <div id="dBarrett">
        
        <div class="img"><img src="dBarret.jpg" alt="Daniel R Barret"></div>
        
        <div class="lawyerInfo">
        
        <h3>Daniel R. Barrett</h3>
  		<h4>Of Counsel</h4>
        <p>Phone: 817-332-2580</p>
		<p>Fax: 817-332-4740</p>
		<p>DBarrett@toase.com</p>

		<p>Dan was born in 1955, and graduated in 1975 from the University of Texas at Austin where he received a B.A. in Government. He received his J.D. degree from Texas Tech University School of Law in 1979. He is a past National Director of the American Board of Trial Advocates (2003) and also served as the Fort Worth Chapter President in 2002. He is a Life Fellow of the Texas Bar Foundation, Founding Fellow of the Tarrant County Bar Foundation, a Fellow of the American Board of Trial Advocates Foundation, a former director of Texas Trial Lawyers Association (2003-2005), past director and President of Tarrant County Trial Lawyers Association, past director of Tarrant County Bar Association, former district director of the Texas Association of Defense Counsel and past president of the Tarrant County Civil Trial Lawyers Association.</p>
 

		<h5>Specialization Certifications</h5>
        <ul>
			<li>Personal Injury Trial Law; Texas Board of Legal Specialization</li>
			<li>Civil Trial Advocate ; National Board of Trial Advocacy</li>
		</ul>

		<h5>Practice Areas</h5>
        <ul>
			<li>Commercial Litigation</li>
			<li>Business Torts</li>
			<li>Construction Defense</li>
			<li>Governmental Entity Litigation</li>
			<li>Legal Malpractice</li>
			<li>Breach of Fiduciary Duties</li>
			<li>Personal Injury</li>
			<li>Wrongful Death</li>
		</ul>

		<h5>Education</h5>
        <ul>
			<li>BA University of Texas at Austin 1975</li>
			<li>JD Texas Tech School of Law	1979</li>
		</ul>

		<h5>Professional Affiliations and Memberships</h5>
		<h5>Licensed:</h5>
        <ul>
			<li>US District Court for the Northern District of Texas</li>
			<li>US District Court for the Eastern District of Texas</li>
			<li>US Court of Appeals Fifth Circuit</li>
			<li>US Supreme Court</li>
		</ul>
		<h5>Member:</h5>
       	<ul>
			<li>Texas Bar, Litigation Section</li>
			<li>Tarrant County Bar Association</li>
			<li>Texas Bar Foundation</li>
			<li>Texas Trial Lawyers Association - Associate</li>
			<li>National Board of Trial Advocacy</li>
	</ul>

		<h5>Awards, Publications & Presentations</h5>
        
        <ul>
 	 
	<li>Author of the book Cheaper to Kill than to Maim: A Patient's Guide to Medical Malpractice in Texas, 2002</li>
	<li>Authored journal and other articles and made invited presentations for such publications and organizations as the Texas Bad Faith Bulletin, Trial Advocacy in Texas, Texas Health Law Reporter, the American Board of Trial Advocates Masters in Trial, The Fort Worth Star-Telegram, The Dallas Morning News, The Tarrant County Physician, The Fort Worth Business Press and others</li>
	<li>Rated AV - Pre-eminent by Martindale-Hubbell</li>
	<li>Named Super Lawyer – Texas Monthly Super Lawyers multiple years</li>
	<li>Member of the Texas House of Representatives December 2007 – January 2009</li>
	<li>Committees:	Pensions & Investments</li>
	<li>Land and Resource Management</li>
		</ul>
        
        </div>
        
        </div>
        
        
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
