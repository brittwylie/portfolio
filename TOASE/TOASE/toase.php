<?php

include("dbconn.inc.php");
include("shared.php"); 
//---Altered from 4231 Assignment--//
//-----Shared file altered from personal archive---//
//---MyPhp Admin stopped accepting new input data, the only table I have that accepts data user input is my ARNT table. Not sure why it isn't allowing new submissions in my newer tables--//

$conn = dbConnect();

?><html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>TOASE</title>
<link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Sofia" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<header id="index">
	 <?php echo $logo ?>
 	</header>


	<main>

<?php



	$sql = "SELECT firstName,lastName, phone, email, inquiry FROM TOASE order by firstName ASC"; //select * from ARNT did not work
	
	

	/* create a prepared statement */
	$stmt = $conn->stmt_init();
		
	if ($stmt->prepare($sql)) {

		/* execute statement */
		$stmt->execute();

		/*bind result variables */
		$stmt->bind_result($firstName, $lastName, $phone, $email, $inquiry);

		
		/* fetch values */
		while ($stmt->fetch()) {
			print ("<div id='toaseInquiry'>$firstName $lastName <br> $phone <br> $email <br> $inquiry<br><br>\n</div>");
		}

		/* close statement */
		$stmt->close();

	} else {
		print ("query failed");
	}

/* close connection */
$conn->close();
	
	
?>
	

</main>

 <footer>
      <?php echo $footer?>
    </footer
></body>
</html>


