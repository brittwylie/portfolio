<?php
  include("shared.php");
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog</title>

      <link rel="stylesheet" href="styles.css" media="screen" title="no title" charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="hair color, hair dye, stylist, hair stylist DFW, hair cut, hair dying, Khanye">

  </head>


  <body>


    <!---logo--->
    <div class="logo-box">
          <?php echo $logo ?>
    </div>


<!---menu---->
    <div class="menu">
         <?php echo makeMenu('blog')?>
    </div>



    <main>
    	<!-----blog----->
      <div class="blog1">

        <span class="p1">
           <p>How exciting it is to finally get my digital diary up and running! I hope that you
              all will be able to follow along with me as I document my journey as a professional hairstylist.<br>
              I got started at a young age experimenting on my older sister's hair. I didn't realize how much
              I truly loved doing hair until I understood how I could change other people's lives. My passion grew
              through my high school days where I graduated from the state cosemetology program and from then on I've been practicing
              my craft professionally for a year now. It's been a lot of hours, endless laughs and lots of hair!
            </p>
          </span>
          <span class="img1">
      	           <h2>My Hair Journey / April.26.2016</h2>
                   <img src="images/khanye.jpg" alt="blogpicture"/>
            </span>
          </div>


          <div class="blog2">
            <span class="p2">
              <p>
                I'm so proud of this highlighting session with my client that I had to share it. <br>
                This was a simple cut with long layers. We re-touched the base and then
                implemented a balayage style to give a sun-kissed look.
              </p>
            </span>

          <span class="img2">
              <h2>Highlight Me / April.27.2016</h2>
              <img src="images/14.jpg" alt="blog2picture"/>
          </span>

          </div>

       

      <!-----Comment Submission----->
      <div class="commentBox">
        <h3>Comment Here!</h3>
        <form action= "post.php" method="post">
          <input type="text" name="name" size="45" placeholder="Name"><br/>
          <input type="text" name="email" size="45" placeholder="Email"><br/>
          <input type="text" name="title" size="45" placeholder="Title"><br/>
          <textarea name="comment" rows="5" cols="40" placeholder="Leave a comment"></textarea><br>
          <button type="Submit" name="SubmitThis">Preview</button>
       </form>
      </div>




    </main>


    <footer>
        <?php echo $footer?>
    </footer>

  </body>
</html>
