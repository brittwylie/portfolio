<?php
  include("shared.php");
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Portfolio</title>

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
          <?php echo makeMenu('portfolio')?>
    </div>

    	<div class="galley-feature">
        	<img class="gallery-feature" src="images/promo.png" alt="#colorbykhayne'">
        </div>



    <main>
    	 <!--Start Img Gallery--->

      <div class="gallery">
          <h3>See what I've done so far</h3>
          <figure>
                    <img src="images/1.jpg">
                    <figcaption>
                    	Gold and silver coloring
                    </figcaption>

          </figure>
            <figure>
                    <img src="images/2.jpg">
                      <figcaption>
                        Cherry red coloring
                    </figcaption>

          </figure>
            <figure>
                    <img src="images/3.jpg">
                      <figcaption>
                        Balayage
                    </figcaption>

          </figure>
            <figure>
                    <img src="images/4.jpg">
                      <figcaption>
                        Light trim and natural dark brown color
                    </figcaption>

          </figure>
           <figure>
                    <img src="images/5.jpg">
                      <figcaption>
                        Balayage ombre
                    </figcaption>

          </figure>
           <figure>
                    <img src="images/6.jpg">
                      <figcaption>
                        Balayage ombre
                    </figcaption>

          </figure>
           <figure>
                    <img src="images/7.jpg">
                      <figcaption>
                        Trim long layers
                    </figcaption>

          </figure>
           <figure>
                    <img src="images/8.jpg">
                      <figcaption>
                        Layered shag cut
                    </figcaption>

          </figure>
           <figure>
                  <img src="images/9.jpg">
                    <figcaption>
                      Blue steel color
                    </figcaption>

          </figure>
                    <figure>
                    <img src="images/10.jpg">
                      <figcaption>
                        Purple peek-a-boo coloring
                    </figcaption>

          </figure>
            <figure>
                    <img src="images/11.jpg">
                      <figcaption>
                        Trim and layer
                    </figcaption>

          </figure>
            <figure>
                    <img src="images/12.jpg">
                      <figcaption>
                        Guy's fade undercut
                    </figcaption>

          </figure>
            <figure>
                    <img src="images/13.jpg">
                    <figcaption>
                      Bob cut with beachy waves
                    </figcaption>
          </figure>
           <figure>
                    <img src="images/14.jpg">
                      <figcaption>
                        Trimmed long layers with balayge highlights
                    </figcaption>

          </figure>
           <figure>
                    <img src="images/15.jpg">
                    <figcaption>
                      Sandy brown color
                    </figcaption>
          </figure>
           <figure>
                    <img src="images/16.jpg">
                      <figcaption>
                        Shag cut and undercut
                    </figcaption>

          </figure>
           <figure>
                    <img src="images/17.jpg">
                      <figcaption>
                        Peacock hair
                    </figcaption>

          </figure>
           <figure>
                  <img src="images/18.jpg">
                    <figcaption>
                      Berry red color
                    </figcaption>
          </figure>
      </div>
      <!--End Img Gallery--->

    </main>



    <footer>
        <?php echo $footer?>
    </footer>


  </body>

</html>
