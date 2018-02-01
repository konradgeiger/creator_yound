<?php
  session_start();

  if(isset($_POST['SUBMIT']))
  {
    $tech = $_POST['SUBMIT'];
    $_SESSION['TECH_SESSION'] = $tech;

    header("Location: http://creator.yound.de/caterer.php");
  }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Create your perfect event</title>
        <meta name="description" content="Create your perfect event!"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
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

    <section>
      <center><h3>3. Which event technology do you need?</h3></center>
      <form id="form-venue" action="tech.php" method="post">
        <div class="container">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="pull-right">
                <button type="submit" name="SUBMIT" value="Basic">&nbsp;&nbsp;&nbsp;Choose&nbsp;&nbsp;&nbsp;</button>
                <br>
              </div>
              <h2 class="panel-title">Yound.de Basic</h2>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-12 col-md-3">
                  <a class="thumbnail">
                    <img src="img/tech.jpg" alt="">
                  </a>
                </div>
                <div class="col-xs-12 col-md-9">
                  <b>Technology:</b> Sound Set Up with 2 big speakers and equipment <br>
                  <b>Price:</b> 69€ <br>
                  <b>Details:</b><a href="https://yound.de/technik.html">www.yound.de/technik.html</a><br>
                  <b>Description:</b> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus <br>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="pull-right">
                <button type="submit" name="SUBMIT" value="Plus">&nbsp;&nbsp;&nbsp;Choose&nbsp;&nbsp;&nbsp;</button>
                <br>
              </div>
              <h2 class="panel-title">Yound.de Plus</h2>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-12 col-md-3">
                  <a class="thumbnail">
                    <img src="img/tech.jpg" alt="">
                  </a>
                </div>
                <div class="col-xs-12 col-md-9">
                  <b>Technology:</b> Sound Set Up with 2 big speakers, light set and equipment <br>
                  <b>Price:</b> 89€ <br>
                  <b>Details:</b><a href="https://yound.de/technik.html">www.yound.de/technik.html</a><br>
                  <b>Description:</b> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus <br>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="pull-right">
                <button type="submit" name="SUBMIT" value="Individual">&nbsp;&nbsp;&nbsp;Choose&nbsp;&nbsp;&nbsp;</button>
                <br>
              </div>
              <h2 class="panel-title">Individual offer from Yound.de</h2>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-12 col-md-3">
                  <a class="thumbnail">
                    <img src="img/tech.jpg" alt="">
                  </a>
                </div>
                <div class="col-xs-12 col-md-9">
                  <b>Description:</b> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus <br>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-md-offset-4">
        <button type="submit" name="SUBMIT" value="No Tech">Skip</button>
        </div>
      </form>


    </section>

		<div class="main-container">
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


	<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
        <script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','https://www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-113387284-1', 'auto'); ga('send', 'pageview'); </script>
    </body>
</html>
