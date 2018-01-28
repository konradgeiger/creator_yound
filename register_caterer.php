<?php
    session_start();

    if(isset($_POST['SUBMIT']))
    {
      $name = $_POST['NAME'];
      $location = $_POST['LOCATION'];
      $type = $_POST['TYPE'];
      $price = $_POST['PRICE'];
      $capacity = $_POST['CAPACITY'];
      $food = $_POST['FOOD'];
      $website = $_POST['WEBSITE'];
      $bio = $_POST['BIO'];

      $_SESSION['NAME_CATERER'] = $name;
      $_SESSION['LOCATION_CATERER'] = $location;
      $_SESSION['TYPE_CATERER'] = $type;
      $_SESSION['PRICE_CATERER'] = $price;
      $_SESSION['CAPACITY_CATERER'] = $capacity;
      $_SESSION['FOOD_CATERER'] = $food;
      $_SESSION['WEBSITE_CATERER'] = $website;
      $_SESSION['BIO_CATERER'] = $bio;

      $_SESSION['SOURCE'] = "caterer";

      header("Location: http://creator.yound.de/register_checkout.php");
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
  		                            <a href="register.php">Become a partner&nbsp;</a>
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
          <center><h3>Register as a caterer</h3></center>
          <div class="container">
                      <div class="row">
                        <form id="form-buchung" action="register_caterer.php" method="post">

                                <div class="col-md-6 col-md-offset-3">
                                  <input type="text" name="NAME" id="name" placeholder="Name">

                                  <input type="text" name="LOCATION" id="location" placeholder="Location">

                                  <input type="text" name="PRICE" id="price" placeholder="Price(per 10 people)">

                                  <input type="text" name="CAPACITY" id="capacity" placeholder="Capacity">

                                  <input type="text" name="FOOD" id="food" placeholder="Food">

                                  <input type="text" name="BIO" id="bio" placeholder="Description">

                                  <input type="text" name="WEBSITE" id="website" placeholder="Website">

                                </div>
                                <div class="col-md-6 col-md-offset-3">
                                <button type="submit" name="SUBMIT" value="submit">Register</button>
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


        <script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','https://www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-82977805-1', 'auto'); ga('send', 'pageview'); </script>
	      <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/flexslider.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
