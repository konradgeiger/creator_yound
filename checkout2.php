<?php
    session_start();

    $caterer = $_SESSION['CATERER_SESSION'];
    $venue = $_SESSION['VENUE_SESSION'];
    $dj = $_SESSION['DJ_SESSION'];
    $tech = $_SESSION['TECH_SESSION'];

    mysql_connect('rdbms.strato.de', 'U3230274', 'fritzkola1') or die("Fehler beim Aufbau der Datenbankverbindung");
    mysql_select_db('DB3230274');

    if(isset($_POST['SUBMIT']))
    {
      $date = $_POST['DATE'];
      $name = $_POST['NAME'];
      $phone = $_POST['PHONE'];
      $email = $_POST['EMAIL'];
      $street = $_POST['STREET'];
      $zip = $_POST['ZIP'];
      $city = $_POST['CITY'];

      $sql = "INSERT INTO bookings (date,name,phone,email,street,zip,city,venue,dj,tech,caterer) VALUES ('$date','$name','$phone','$email','$street','$zip','$city','$venue','$dj','$tech','$caterer')";
      mysql_query($sql) or die(mysql_error());

      $mailTo = 'mail@konradgeiger.com';
      $mailFrom = '"yound-booking" <bookings@yound.de>';
      $mailSubject    = 'new creator booking';
      $mailText = 'New Creator booking.'. "\n" .  'Date: '. $date . "\n" . 'Name: '. $name;

      $mailSent = @mail($mailTo, $mailSubject, $mailText, "From: ".$mailFrom);

      header("Location: http://creator.yound.de/success.html");
    }
 ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Create your perfect event</title>
        <meta name="description" content="Create your perfect event"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme-chipotle.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>

        <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="01cb15f6-6131-4773-8808-90089cdec355";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

        <link rel="icon" type="image/png" href="/img/yound-logo-32.png">
    </head>
    <body>

      <div class="nav-container"><nav>
  		        <div class="nav-bar">
  		            <div class="module left">
  		                <a href="index.html">
  		                    <img class="logo logo-light" alt="Foundry" src="img/logo-light.png">
  		                    <div class="vnu"><img class="logo logo-dark" alt="Foundry" src="img/youndlogo2.png"></div>
  		                </a>
  		            </div>
  		            <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
  		                <i class="ti-menu"></i>
  		            </div>
  		            <div class="module-group right">
  		                <div class="module left">
  		                    <ul class="menu">
  		                        <li>
  		                            <a href="register.php">Register&nbsp;</a>
  		                        </li><li class="vpf">
  		                            <a href="index.html#target">How it works<br>&nbsp;</a>
  		                        </li>


  		                    </ul>
  		                </div>


  		            </div>

  		        </div>
  		    </nav>
  		</div>
		<div class="main-container">
      <section>
          <center><h3>Create your event now!</h3></center>
          <center><h4>After submitting your choices we will organize everything accordingly and get back to you within the next 2 business days</h4></center>
          <div class="container">
                      <div class="row">
                        <form id="form-buchung" action="checkout2.php" method="post">

                                <div class="col-md-6 col-md-offset-3">
                                  <center>
                                  On which day is your event?  <input type="date" name="DATE" id="date" placeholder="Date">
                                  </center>

                                  <input type="text" name="NAME" id="name" placeholder="Name">

                                  <input type="text" name="PHONE" id="phone" placeholder="Phone">

                                  <input type="text" name="EMAIL" id="email" placeholder="Email adress">

                                  <input type="text" name="STREET" id="street" placeholder="Street">

                                  <input type="text" name="ZIP" id="zip" placeholder="ZIP Code">

                                  <input type="text" name="CITY" id="city" placeholder="City">


                                </div>
                                <div class="col-md-6 col-md-offset-3">
                                <button type="submit" name="SUBMIT" value="submit">Create your event</button>
                                </div>

                        </form>
                  </div>


          </div>

      </section>
      <footer class="footer-2 bg-dark text-center-xs">
  				<div class="container">
  					<div class="row">
  						<div class="col-sm-4">
  							<a href="#"><div class="vnu"><img class="image-xxs fade-half" alt="Pic" src="img/youndlogo2.png"></div></a>
  						</div>

  						<div class="text-center col-sm-4">
  							<span class="fade-half">
  								©Yound.de 2018 |
                  <a href="kontakt.html">Contacts |</a>

                  <a href="impressum.html">Privacy & Terms</a>
                </span>
  						</div>

  						<div class="col-sm-4 text-right text-center-xs">
  							<ul class="list-inline social-list">
  								<li><a href="https://www.facebook.com/yound.de/"><i class="ti-facebook"></i></a></li>
  							</ul>
  						</div>
  					</div>
  				</div>
  			</footer></div>


        <script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','https://www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-113387284-1', 'auto'); ga('send', 'pageview'); </script>
	      <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/flexslider.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
