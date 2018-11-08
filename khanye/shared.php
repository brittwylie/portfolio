<?php


//-------------->Define variables


      $logo = "
        <a href='index.php'><img src='images/khanye-logo3.png' alt='logo' class='logo'></a>
      ";


          $footer = "
            <a href='https://www.facebook.com/khanh.nguyen.54943?fref=ts'>Facebook</a><br>
            <a href='https://www.instagram.com/khanye_97/?hl=en'>Instagram</a><br>

            <div class='address'>
                <p>123 Elm St </p>
                <p>Ft Worth, TX 76118 </p>
				<p>Phone: 682-583-6209</p>
				<p>Email: kolorbykhanye@gmail.com<br>

                <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3354.3076301863266!2d-96.78873468538856!3d32.78410149093254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e98dc05ab3f79%3A0xde9cac763eb2a749!2sElm+St%2C+Dallas%2C+TX!5e0!3m2!1sen!2sus!4v1461813057857'
                width='300' height='300' frameborder='0' style='border:0' allowfullscreen></iframe>

             </div>
			 <div class='privacy'><a href='khaynePrivacyPolicy.pdf'>Privacy Policy</a></div>
			 <div class='classUse'>This website a simulated website for CTEC 4309 and is for class use only</div>

            <div class='copyright'> &copy Nguyen & Wylie </div>
             ";
//-------------> end variables


function makeMenu($page) {

  $class = 'current';

  if ($page == 'index') {
	$class1 ='current';
  }

  elseif($page=='portfolio') {
	$class2 = 'current';
  }

  elseif ($page=='blog'){
	$class3 = 'current';
  }

  elseif ($page == 'contact'){
	$class4 = 'current';
  }

  else {
	$class = 'normal';
  }



  $menu_nav = "
    	<a href='index.php' class= '$class1'>Home</a>\n
    	<a href='portfolio.php' class='$class2'>Portfolio</a>\n\n
    	<a href='blog.php' class='$class3'>Blog</a>\n\n\n
    	<a href='contact.php' class='$class4'>Contact</a>\n\n\n\n
  	";

  	return $menu_nav;


}





 ?>








