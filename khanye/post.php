<?php

$name = $_POST['name'];
$email = $_POST['email'];
$tag = $_POST['tag'];
$title = $_POST['title'];
$comment = $_POST['comment'];
//$scissors = <img src='images/scissor.png' alt='scissor icon'>;

$output = "<b>Author</b>: $author <br/>
			<b>Email</b>: $email <br/>
		   <b>Title</b>: $title <br/>
		   <b>Comment</b>: $comment<br/>
			 ";

?>

<?php
  include("shared.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Khanye</title>

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
          <?php echo $makeMenu ?>
    </div>


    	<main>

<h2>Review Your Comment</h2>

<p>
	<?php echo $output;?>
</p>
    <p>
      <a href='index.php'>Return to Home</a>
    </p>

        </main>
	  </body>
</html>
