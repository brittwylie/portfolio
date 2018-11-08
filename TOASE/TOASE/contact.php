<?php
  include("shared.php");
 include("dbconn.inc.php");
 $conn = dbConnect();


?>
<!---Shared file taken from my personal coding archive---->
<!---Data Validation from 4321 Data Validation assigntment---->

<?php

	//code to submit info into database, database is not accepting new entires

	if(array_key_exists('register', $_POST)){
		
		
		$output = "Dear user, thank you for your interest in TOASE.";
		
			$expected = array("firstName","lastName", "phone", "email", "inquiry");
			$required = array("firstName","lastName", "phone", "email", "inquiry");
			$missing = array();
		
		foreach ($expected as $fieldName) {
		
			$value = $_POST[$fieldName];
			
			$temp = trim($value);
			
			if (empty($temp) && in_array($fieldName,$required)){
			
				array_push ($missing, $fieldName);
			}
		}
		
		// additional vaildation goes here if needed
		
		
		if (empty($missing)){

			
			$output = $output."You have submitted the following information:<br><br>";
			

			foreach($expected as $fieldName){
				
				$value = $_POST[$fieldName];
				if (empty($value)){
				
					$value = "(No input)"; 
				} else {
				
					if (is_array($value)) {
						
		
						$value = implode(", ",$value);

					} else {
						$value = str_replace("\n","<br>",$value);
					}
				}
				
					if(!empty($missing)){
			
			echo $_POST['fieldNameHere'];
		}
		
				$output .= "<b>$fieldName</b>: $value <br>";
			}

		} else {
			
			//error msg
			$output = $output."However, The following required fields are missing in your registration.  Please check your form again and fill them out.  <br>Thank you.<br>\n<ul>";
			foreach($missing as $m){
				$output .= "<li>$m</li>";
			}
			$output .= "</ul>";
		}
		
		
		} else {
			
			$output = "";
			
			}
			
	

?>

<?php
	//Submit into database
	
	if (isset($_POST['register'])) {
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$Q1 = $_POST['inquiry'];



$sql = "INSERT INTO TOASE (firstName,lastName, phone, email, inquiry) VALUES (?,?, ?, ?, ?)";

	/* create a prepared statement */
	$stmt = $conn->stmt_init();
		
	if ($stmt->prepare($sql)) {
		/*Bind Stmt pramater here*/
		$stmt->bind_param('sssss', $firstName, $lastName, $phone, $email, $inquiry);
		/* execute statement */
		$stmt->execute();
		

		/* close statement */
		$stmt->close();

	} else {
		print ("query failed");
	}
	}

/* close connection */
$conn->close();
	

?>


<!DOCTYPE HTML>
<html>
 <head>
  <title>TOASE - Contact</title>
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
  
   <div id="message">
    
    <?php 

	echo $output; 
	echo "\n<hr>\n";	
	?>
    </div>
	
	<div class ="page">
    
    <div class="map">
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3356.1333515643937!2d-97.418497684819!3d32.73564958098454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e731801bdcb3f%3A0x4b0ff3b6ef17be9c!2s6000+Western+Pl%2C+Fort+Worth%2C+TX+76107!5e0!3m2!1sen!2sus!4v1492544039454" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    
    </div>
    
    
    <div class="contact_form">
          <h2>Contact Us<h2>
          <form class="TOASE" action="" name="inquiryForm" method="post">
              <input type="text" name="firstName"  placeholder="First Name *" size="45"><br>
              <input type="text" name="lastName"  placeholder="Last Name *" size="45"><br>
              <input type="text" name="email"  placeholder="Email *" size="45"><br>
              <input type="text" name="phone" placeholder="Phone number " size="45"><br>
              <textarea name="inquiry" cols="40" rows="5" placeholder="Please leave a detailed inquiry here..."></textarea><br>
              <input type="Submit" name="register" value="register">
              

          </form>
      </div>
      
       



        
        

	</div>
    
   
  </main>
   <footer>
  	<?php echo $footer?>
  
  </footer>
  
 </body>
</html>
