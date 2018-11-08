<?php
  include("shared.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact</title>

      <link rel="stylesheet" href="styles.css" media="screen" title="no title" charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="hair color, hair dye, stylist, hair stylist DFW, hair cut, hair dying, Khanye">

  </head>
  <body>

    <!---logo--->
    <div class="logo-box">
          <?php echo $logo ?>
    </div>


    <!---menu--->
    <div class="menu">
          <?php echo makeMenu('contact')?>
    </div>



    <main>

      <!--Calendar--->
      <div class="calendar">
        <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showTz=0&amp;height=400&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=anguyen295%40gmail.com&amp;color=%23865A5A&amp;ctz=America%2FBarbados" style="border-width:0" frameborder="0" scrolling="no"></iframe>
      </div>



      <!--appointment form-->
      <div class="contact_form">
          <h3>Let me know what day you'd like to come in! <h3><br>
          <form class="apt_contact" action="email_post.php" name="emailForm" method="post">
              <input type="text" name="name"  placeholder="Name *" size="45"><br>
              <input type="text" name="email"  placeholder="Email *" size="45"><br>
              <input type="text" name="phone" placeholder="Phone number " size="45"><br>
              <textarea name="message" cols="40" rows="5" placeholder="Message me a date..."></textarea><br>
              <button type="Submit" name="submit">Send</button>
              <button type="reset" name="reset">Reset</button>

          </form>
      </div>


      <!--social-->
      <div class="social">

          <div class="social_tag">
              <h2 class="hashtag">
                #KOLORBYKHANYE
              </h2>

              <p>
                Follow me and my journey as I re-style the world one head at a time.
                You can follow my feed through instagram and Facebook. Be sure to
                use the hashtag #KOLORBYKHANYE to share your styles with me and
                show off your new do!
              </p>
          </div>


          <h1 class="sharetag">  Share your hair </h1>



          <div class="socialButtonBox">
            <div class="fb_box">
                <a href="https://www.facebook.com/khanh.nguyen.54943?fref=ts" class="fb"> f </a>
            </div>
            <div class="insta_box">
                <a href="https://www.instagram.com/khanye_97/?hl=en"><img src="images/instaPink.png" alt="instagram" width="40px" height="40px"/></a>
            </div>
          </div>


      </div>


    </main>

    <footer>
      <?php echo $footer?>
    </footer>


  </body>
</html>
