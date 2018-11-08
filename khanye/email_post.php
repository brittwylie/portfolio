<?php
$name = $_POST['name'];
$userEmail = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$emailFrom = "anh.nguyen78@mavs.uta.edu";

$emailSubject = "New appointment";

$emailMessage = "Here is the message: \n $message";


//<----Send email to owner------>//
$to = "anh.nguyen78@mavs.uta.edu";
$headers = "From: $emailFrom\n";
$headers = "Reply-To: $userEmail\n";

//mail($to, $emailSubject, $emailMessage, $headers);



 ?>
<?php
  include("shared.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Confirmed</title>

    <link rel="stylesheet" href="styles.css" media="screen" title="no title" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>

  <body>

    <!---logo--->
    <div class="logo-box">
          <?php echo $logo ?>
    </div>


    <!---menu--->
    <div class="menu">
          <?php echo $makeMenu?>
    </div>

    <div class="sentGreeting">
        Thanks! <br>
        Your message was sent!
    </div>


    <p>
      <a href='index.php'>Return to Home</a>
    </p>

  </body>
</html>
