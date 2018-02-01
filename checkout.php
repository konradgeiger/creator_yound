<?php
include 'dataconnect.php';

session_start();

$caterer = $_SESSION['CATERER_SESSION'];
$venue = $_SESSION['VENUE_SESSION'];
$dj = $_SESSION['DJ_SESSION'];
$tech = $_SESSION['TECH_SESSION'];

if(isset($_POST['SUBMIT']))
{
  header("Location: http://creator.yound.de/checkout2.php");
}
?>
 <!doctype html>
 <html lang="en">
     <head>
         <meta charset="utf-8">
         <title>Create your perfect event</title>
         <meta name="description" content="Create four perfect event"/>
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
       <center><h3>Summary of your event</h3></center>

       <form id="form-checkout" action="checkout.php" method="post">

         <?php
            //Venue

            if ($venue == "No Venue") {
              # code...
            }

            else {
              $all_venue = "SELECT * FROM venue WHERE name = '$venue'";
              $result_venue = mysql_query($all_venue);
              $dates_venue = mysql_fetch_array($result_venue);

              $name_venue = $dates_venue['name'];
              $location_venue = $dates_venue['location'];
              $type_venue = $dates_venue['type'];
              $size_venue = $dates_venue['size'];
              $price_venue = $dates_venue['price'];
              $bio_venue = $dates_venue['bio'];
              $website_venue = $dates_venue['website'];


               echo "
                 <div class=\"container\">
                   <div class=\"panel panel-default\">
                     <div class=\"panel-heading\">
                       <div class=\"pull-right\">
                         <h4>Venue</h4>
                       </div>
                       <h2 class=\"panel-title\">$name_venue</h2>
                     </div>
                     <div class=\"panel-body\">
                       <div class=\"row\">
                         <div class=\"col-xs-12 col-md-3\">
                           <a class=\"thumbnail\">
                             <img src=\"img/venue.jpg\" >
                           </a>
                         </div>
                         <div class=\"col-xs-12 col-md-9\">
                           <b>Location:</b> $location_venue<br>
                           <b>Type:</b> $type_venue<br>
                           <b>Price:</b> $price_venue<br>
                           <b>Size:</b> $size_venue<br>
                           <b>Website:</b><a href=\"https://$website_venue\"> $website_venue</a><br>
                           <b>Description:</b> $bio_venue<br>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               ";
            }


            //DJ
            if ($dj == "No DJ") {
              # code...
            }

            else {
              $all_dj = "SELECT * FROM dj WHERE name = '$dj'";
              $result_dj = mysql_query($all_dj);
              $dates_dj = mysql_fetch_array($result_dj);

              $name_dj = $dates_dj['name'];
              $location_dj = $dates_dj['location'];
              $type_dj = $dates_dj['type'];
              $music_dj = $dates_dj['music'];
              $price_dj = $dates_dj['price'];
              $bio_dj = $dates_dj['bio'];
              $website_dj = $dates_dj['website'];
              $reference_dj = $dates_dj['reference'];

               echo "
                 <div class=\"container\">
                   <div class=\"panel panel-default\">
                     <div class=\"panel-heading\">
                       <div class=\"pull-right\">
                         <h4>DJ/Band</h4>
                       </div>
                       <h2 class=\"panel-title\">$name_dj</h2>
                     </div>
                     <div class=\"panel-body\">
                       <div class=\"row\">
                         <div class=\"col-xs-12 col-md-3\">
                           <a class=\"thumbnail\">
                             <img src=\"img/dj.jpg\" >
                           </a>
                         </div>
                         <div class=\"col-xs-12 col-md-9\">
                           <b>Location:</b> $location_dj<br>
                           <b>Type:</b> $type_dj<br>
                           <b>Price:</b> $price_dj<br>
                           <b>Music:</b> $music_dj<br>
                           <b>Website:</b><a href=\"https://$website_dj\"> $website_dj</a><br>
                           <b>Set/Reference:</b><a href=\"https://$reference_dj\"> $reference_dj</a><br>
                           <b>Description:</b> $bio_dj<br>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               ";
            }


            //Tech
            if ($tech == 'Basic') {
              echo "
                <div class=\"container\">
                  <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                      <div class=\"pull-right\">
                        <h4>Tech</h4>
                      </div>
                      <h2 class=\"panel-title\">Yound.de Basic</h2>
                    </div>
                    <div class=\"panel-body\">
                      <div class=\"row\">
                        <div class=\"col-xs-12 col-md-3\">
                          <a class=\"thumbnail\">
                            <img src=\"img/tech.jpg\">
                          </a>
                        </div>
                        <div class=\"col-xs-12 col-md-9\">
                          <b>Technology:</b> Musikanlage mit 2 großen Lautsprechern und Zubehör <br>
                          <b>Price:</b> 69€ <br>
                          <b>Details:</b><a href=\"https://yound.de/technik.html\">www.yound.de/technik.html</a><br>
                          <b>Description:</b> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus <br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              ";
            }

            else if ($tech == "Plus") {
              echo "
                <div class=\"container\">
                  <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                      <div class=\"pull-right\">
                        <h4>Tech</h4>
                      </div>
                      <h2 class=\"panel-title\">Yound.de Plus</h2>
                    </div>
                    <div class=\"panel-body\">
                      <div class=\"row\">
                        <div class=\"col-xs-12 col-md-3\">
                          <a class=\"thumbnail\">
                            <img src=\"img/tech.jpg\">
                          </a>
                        </div>
                        <div class=\"col-xs-12 col-md-9\">
                          <b>Technology:</b> Musikanlage mit 2 großen Lautsprechern, Lichteffekten und Zubehör <br>
                          <b>Price:</b> 89€ <br>
                          <b>Details:</b><a href=\"https://yound.de/technik.html\">www.yound.de/technik.html</a><br>
                          <b>Description:</b> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus <br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              ";
            }

            else if ($tech == "Individual") {
              echo "
                <div class=\"container\">
                  <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                      <div class=\"pull-right\">
                        <h4>Tech</h4>
                        <br>
                      </div>
                      <h2 class=\"panel-title\">Individuelles Angebot von Yound.de</h2>
                    </div>
                    <div class=\"panel-body\">
                      <div class=\"row\">
                        <div class=\"col-xs-12 col-md-3\">
                          <a class=\"thumbnail\">
                            <img src=\"img/tech.jpg\">
                          </a>
                        </div>
                        <div class=\"col-xs-12 col-md-9\">
                          <b>Description:</b> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus <br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              ";
            }
            else if ($dj == "No Tech") {
              # code...
            }

            //Caterer
            if ($caterer == "No Caterer") {
              # code...
            }
            else {
              $all_caterer = "SELECT * FROM caterer WHERE name = '$caterer'";
   						$result_caterer = mysql_query($all_caterer);
   						$dates_caterer = mysql_fetch_array($result_caterer);

               $name_caterer = $dates_caterer['name'];
               $location_caterer = $dates_caterer['location'];
               $price_caterer = $dates_caterer['price'];
               $capacity_caterer = $dates_caterer['capacity'];
               $food_caterer = $dates_caterer['food'];
               $bio_caterer = $dates_caterer['bio'];
               $website_caterer = $dates_caterer['website'];

                echo "
                  <div class=\"container\">
                    <div class=\"panel panel-default\">
                      <div class=\"panel-heading\">
                        <div class=\"pull-right\">
                          <h4>Caterer</h4>
                        </div>
                        <h2 class=\"panel-title\">$name_caterer</h2>
                      </div>
                      <div class=\"panel-body\">
                        <div class=\"row\">
                          <div class=\"col-xs-12 col-md-3\">
                            <a class=\"thumbnail\">
                              <img src=\"img/caterer.jpg\" >
                            </a>
                          </div>
                          <div class=\"col-xs-12 col-md-9\">
                            <b>Location:</b> $location_caterer<br>
                            <b>Price(per Person):</b> $price_caterer<br>
                            <b>Capacity:</b> $capacity_caterer<br>
                            <b>Food:</b> $food_caterer<br>
                            <b>Website:</b><a href=\"https://$website_caterer\"> $website_caterer</a><br>
                            <b>Description:</b> $bio_caterer<br>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                ";
            }

          ?>

          <div class="col-md-4 col-md-offset-4">
          <button type="submit" name="SUBMIT" value="next">Next</button>
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
