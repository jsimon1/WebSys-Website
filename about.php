<?php
  include("connect.inc.php");
?>
<!DOCTYPE html>
<!-- This is the about page in which we give credit to our group -->
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <!-- import websys-site.css -->
    <link type="text/css" rel="stylesheet" href="./css/websys-site.css"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
<!-- classes to distinguish how css will edit the page -->
  <body class="brown lighten-5">
    <?php
      include("header.php");
    ?>

    <main>
      <div class="container">
        <div class="row">
          <div class="section">
              <h4 class="orange-text text-orange-darken-4">What is Collective Caffeination?</h4>
              <p></p>
              <div class="divider"></div>
              <h5 class="orange-text text-orange-darken-4">The Websys Team</h5>
              <!-- show everyones picture and how they contributed to project -->
              <div class="row">
                <div class="col s12">
                    <div class="row">

                      <div class="col s3">
                        <div class="card">
                          <div class="card-image">
                            <!-- image of Corey -->
                            <img class="responsive-img" src="./images/Corey.jpg">
                          </div>

                            <div class="card-content">
                              <p>Corey Burns</p>
                            </div>


                        </div>
                      </div>
                      <div class="col s3">
                        <div class="card">
                          <div class="card-image">
                            <!-- image of Jason -->
                            <img class="responsive-img" src="./images/Jason.jpg">
                          </div>

                            <div class="card-content">
                              <p>Jason Kim</p>
                            </div>


                        </div>
                      </div>
                      <div class="col s3">
                        <div class="card">
                          <div class="card-image">
                            <!-- image of Jeremy -->
                            <img class="responsive-img" width="50" src="./images/Jeremy.jpg">
                          </div>

                            <div class="card-content">
                              <p>Jeremy Simon</p>
                            </div>


                        </div>
                      </div>
                      <div class="col s3">
                        <div class="card">
                          <div class="card-image">
                            <!-- image of Samm -->
                            <img class="responsive-img" src="./images/Samm.jpg">
                          </div>

                            <div class="card-content">
                              <p>Samm Katcher</p>
                            </div>


                        </div>
                      </div>
                    </div>
                </div>
              </div>


            </div>
        </div>
      </div>
    </main>

    <footer class="page-footer  brown darken-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <ul>
                  <!-- link to this page -->
                  <li><a class="grey-text text-lighten-3" href="about.html">About</a></li>
                  <!-- link to the meetups page -->
                  <li><a class="grey-text text-lighten-3" href="meetups.html">Meetups</a></li>
                  <!-- links to the log in page -->
                  <li><a class="grey-text text-lighten-3" href="login.html">Log In</a></li>
                  <!-- link to the signup page -->
                  <li><a class="grey-text text-lighten-3" href="signup.html">Sign Up</a></li>
                  <!-- link to the gitup repo we created -->
                  <li><a class="grey-text text-lighten-3" href="https://github.com/miknosaj/WebSys-Website">GitHub</a></li>
                </ul>
              </div>
              <div class="col l6 s12">
                <p class="grey-text text-lighten-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;At our first group project meeting, nearly all of us came with some form of caffeinated beverage in hand, so creating a web application that makes it easier for students to meet over a cup of coffee seemed like something that many RPI students would enjoy and could relate to.</br>
                </br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We knew we wanted to make something to help students at RPI who would not ordinarily meet, get a chance to go outside of their comfort zone and make friends on campus.</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright brown darken-4">
            <div class="container">
              Made with &#9749 by WebSys Group 7
            </div>
          </div>
    </footer>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- loads javascript at end of page after it has all been rendered -->
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>