<?php
  include 'dataconnect.php';

  $request = "SELECT id FROM venue";
  $result = mysql_query($request);
  $amount = mysql_num_rows($result);

  session_start();

  if(isset($_POST['SUBMIT']))
  {
    $venue = $_POST['SUBMIT'];
    $_SESSION['VENUE_SESSION'] = $venue;

    header("Location: http://creator.yound.de/dj.php");
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
		                        <li class="vpf">
		                            <a href="register.php">Become a partner&nbsp;</a>
		                        </li><li class="vpf">
		                            <a href="index.html#target">How it works<br>;</a>
		                        </li>

		                    </ul>
		                </div>


		            </div>

		        </div>
		    </nav>
		</div>

    <section>
      <center><h3>1. Where do you want to start your event?</h3></center>

      <form id="form-venue" action="venue.php" method="post">

        <?php

          for($b=1;$b < $amount+1;$b++)
					{
            $result2 = "SELECT * FROM venue WHERE id = '$b'";
						$resultat2 = mysql_query($result2);
						$dates = mysql_fetch_array($resultat2);

            $name[$b] = $dates['name'];
            $location[$b] = $dates['location'];
            $type[$b] = $dates['type'];
            $size[$b] = $dates['size'];
            $price[$b] = $dates['price'];
            $bio[$b] = $dates['bio'];
            $website[$b] = $dates['website'];

             echo "
               <div class=\"container\">
                 <div class=\"panel panel-default\">
                   <div class=\"panel-heading\">
                     <div class=\"pull-right\">
                       <button type=\"submit\" name=\"SUBMIT\" value=\"$name[$b]\">&nbsp;&nbsp;&nbsp;Choose&nbsp;&nbsp;&nbsp;</button>
                       <br>
                     </div>
                     <h2 class=\"panel-title\">$name[$b]</h2>
                   </div>
                   <div class=\"panel-body\">
                     <div class=\"row\">
                       <div class=\"col-xs-12 col-md-3\">
                         <a class=\"thumbnail\">
                           <img src=\"img/venue.jpg\" >
                         </a>
                       </div>
                       <div class=\"col-xs-12 col-md-9\">
                         <b>Location:</b> $location[$b]<br>
                         <b>Type:</b> $type[$b]<br>
                         <b>Price:</b> $price[$b]<br>
                         <b>Size:</b> $size[$b]<br>
                         <b>Website:</b><a href=\"https://$website[$b]\"> $website[$b]</a><br>
                         <b>Description:</b> $bio[$b]<br>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             ";


          }
         ?>

         <div class="col-md-4 col-md-offset-4">
         <button type="submit" name="SUBMIT" value="No Venue">Skip</button>
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
