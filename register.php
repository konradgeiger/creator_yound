<?php
  if(isset($_POST['SUBMIT']))
  {
    $type = $_POST['TYPE'];

    if ($type == "venue") {
      header("Location: http://creator.yound.de/register_venue.php");
    }
    else if ($type == "dj") {
      header("Location: http://creator.yound.de/register_dj.php");
    }
    else if ($type == "caterer"){
        header("Location: http://creator.yound.de/register_caterer.php");
    }

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
          <center><h3>Become part of the Yound.de Creator</h3></center>
          <div class="container">
                      <div class="row">
                          <form id="form-register" action="register.php" method="post">

                                  <div class="select-option col-md-6 col-md-offset-3">
                                    <i class="ti-angle-down"></i>
                                    <select class="validate-required" name="TYPE" id="type">
                                        <option selected="selected" value="">What do you want to register?</option>
                                        <option value="venue">Venue</option>
                                        <option value="dj">DJ/Band</option>
                                        <option value="caterer">Caterer</option>
                                    </select>
                                  </div>
                                  <div class="col-md-6 col-md-offset-3">
                                  <button type="submit" name="SUBMIT" value="submit">Next</button>
                                  </div>

                          </form>
                  </div>
                  <div class="row">
                    <br>
                    <br>
                    <br>
                      <div class="col-sm-6 text-center">
                          <div class="feature">
                              <div class="text-center">
                                  <i class="ti-user icon-lg mb40 mb-xs-24 inline-block color-primary"></i>
                                  <h5 class="uppercase">Get more customers</h5>
                              </div>
                              <p>
                                  With the Yound.de creator you can easily gain more customers by leveraging our users.
                                  Our users can see your offer and are able to combine it with various other services or venues to create their perfect event.
                              </p>
                          </div>

                      </div>
                      <div class="col-sm-6 text-center">
                          <div class="feature">
                              <div class="text-center">
                                  <i class="ti-check icon-lg mb40 mb-xs-24 inline-block color-primary"></i>
                                  <h5 class="uppercase">Easy and free registration</h5>
                              </div>
                              <p>
                                  Just sign up your services or your venue to get more customers. Signing up is 100% free for you, we only charge you 10% of the price if a customers books your service or venue.
                                  Trage dein Venue oder deine Dienste einfach durch ein Formular ein. Die Listung ist komplett kostenfrei, lediglich für jede erfolgreiche Vermittlung behalten wir 10% des Buchungsvolumens.
                              </p>
                          </div>

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
