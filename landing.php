<?php
  include("connect.inc.php");
  if(isset($_GET['logout'])){
    if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
      );
    }
    session_destroy();
    header('Location: landing.php');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <!-- imports websys-site.css -->
    <link type="text/css" rel="stylesheet" href="css/websys-site.css"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <?php
    include('header.php');
  ?>

    <main>
      <!-- loads ladning page image -->
      <div><img src="./images/coffeebanner.jpg" width="100%"></div>
          <div class="container">
            <div class="row">
              <div class="section">
                <div class="row">
                  <div class="col s12 center-align"><a class="waves-effect waves-light btn-large orange darken-4" href="signup.php">Let's get Coffee!</a></div>
                  <div class="col s12 m4">
                    <div class="icon-block">
                      <h2 class="center orange-text"><i class="material-icons">favorite</i></h2>
                      <h5 class="center">Make new friends</h5>

                      <p class="light center-align">Connect with like-minded members of the RPI community over a cup of coffee</p>
                    </div>
                  </div>

                  <div class="col s12 m4">
                    <div class="icon-block">
                      <h2 class="center orange-text"><i class="material-icons">face</i></h2>
                      <h5 class="center">Engage your community</h5>

                      <p class="light center-align">Be a part of the RPI community in a unique and out-of-classroom experience</p>
                    </div>
                  </div>

                  <div class="col s12 m4">
                    <div class="icon-block">
                      <h2 class="center orange-text"><i class="material-icons">lightbulb_outline</i></h2>
                      <h5 class="center">Learn new things</h5>

                      <p class="light center-align">Share interesting thoughts and ideas to and inspire others with your insight</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </main>

    <?php
      include("footer.php");
    ?>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
