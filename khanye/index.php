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
    <meta name="keywords" content="hair color, hair dye, stylist, hair stylist DFW, hair cut, hair dying, Khanye">

  </head>

  <body>

    <!---logo--->
    <div class="logo-box">
          <?php echo $logo ?>
    </div>


    <!---menu--->
    <div class="menu">
          <?php echo makeMenu('index')?>
    </div>


    <!--Feature graphic--->
    <div class="feature-box">
      <video controls autoplay>
          <source src="images/khanye.mp4" type="video/mp4" width="850" height="480"></source>
      </video>
    </div>



    <main>
        <div class="scissorBox">
              <img src="images/scissor.png" alt="scissorIcon" width="50" height="150"/>
        </div>


            	<!--img links-->
        <div class="imgLinks">
         <figure>
                    <img src="images/hair.gif" alt="colorcircle">

          </figure>
           <figure>
                    <img src="images/12.jpg" alt="cutcircle">

          </figure>
           <figure>
                    <img src="images/3.jpg" alt="stylecircle">

          </figure>
        </div>


        <!--3 focuses-->

        <div class="about">
            
              <h3 class="homeH3">Hello, I'm Khanh.</h3> <br>
             <p> I'm a Fort Worth based cosmetologist and have been practicing my trade for 2 years now.
              I love everything in beauty and health, especially hair!
            </p>
        </div><br><br>

    

    <div class="focuses">
    		<h3 class="homeH3">What I specialize in</h3>
          <div class="colorBox">
                  <h4>Color</h4>
                  <img src="images/drop.png" alt="colorIcon" width="88px" height="88px"/>
                  <p>
                    If you're looking to change up your look by adding color to your hair, I've successfully done ombres, balayage and even opal hair. I'm somewhat of a color specialist.
                  </p>
        </div>

        <div class="cutBox">
                  <h4> Cut </h4>
                  <img src="images/scissor1.png" alt="cutIcon" width="80px" height="88px"/>
                  <p>
                      From a simple trim to a drastic change, no matter what you're looking for, a fresh cut will liven up your look.
                  </p>
        </div>

        <div class="styleBox">
                  <h4>Style</h4>
                  <img src="images/dryer.png" alt="dryer"width="88px" height="88px"/>
                  <p>
                      There's never a reason to not look your best. For any occassion, I can customize your hairstyle to fit your personality.
                  </p>
        </div>

      </div>

    </main>



    <footer>
        <?php echo $footer?>
    </footer>

  </body>
</html>
