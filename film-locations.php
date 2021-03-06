<?php
// $servername = "localhost";
// $username = "parkertenove";
// $password = "}Gz6%JyxS!KR";

// $real_id = $_POST["real_id"];
$servername = "Localhost";
$username = "ybuhphmy_prp";
$password = "5f;F?-4S9{c*";

try {
  $conn = new PDO("mysql:host=Localhost;dbname=ybuhphmy_properties", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}



?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Film Locations | EssentiaLyfe</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="/images/favicon.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="page">
      <?php require('header.php'); ?>
           <!-- Breadcrumbs -->
           <section class="breadcrumbs-custom-inset">
            <div class="breadcrumbs-custom context-dark bg-overlay-60">
              <div class="container">
                <h2 class="breadcrumbs-custom-title">Film Locations</h2>
                <ul class="breadcrumbs-custom-path">
                  <li>A collection of diversified venues</li>
                </ul>
              </div>
              <div class="box-position" style="background-image: url(images/hDkXBzlA.jpeg);"></div>
            </div>
          </section>

        <!-- Card Deck -->
            <div class="card-deck-container">
              <div class="card-deck">
                  
                  
                      <?php
       $stmt = $conn->prepare("SELECT * FROM properties WHERE film='on'");
    $stmt->execute();
    
     
while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    
     echo "  
    <div class='w-25 d-none d-sm-block'>
         <div class='card mb-4' style='margin-top:20px;'>
          <form method='post' action='property.php'><a href='contact.php'>
                    <div class='card-img-caption'>
                    <img src='https://www.essentialyfe.com/images/properties/$result[image]' class='card-img-top' alt='...'>
                    </div>
                    <div class='card-body'>
                      <h5 class='card-title' style='line-height:20px; padding-bottom:20px;'> $result[name] <br><small class='text-muted' style='font-size:14px; margin-top:-18px;'><br>$result[area]</small></h5><hr><br>
                      <div class='card-text' style='text-align:left; font-size:14px; line-height:25px;'>
                       <ul>
                      
                        <li style='margin-top: 15px;'>&#8226 $result[bedroom] Bedrooms</li>
                        <li>&#8226 $result[bathroom] Baths</li>
                        <li>&#8226 $result[sqft] Sq. Ft.</li>
                      </ul>
                      </div>
                         <p style='float:right; margin-bottom:5px; margin-top:-22px; font-size:12.5px;'><b>Starting at $result[price] Per Hour</b></p>
                      <input type='text' name='real_id' value='$result[id]' style='display:none;'>
                      
                  </div><input value='Starting at $result[price] Per Hour' type='submit' class='btn btn-purple' style='display:none; width:100%; font-size:14px;'></form>
                  </div></a></div>";
}
    ?>
                  
              </div>
              </div>
  <!--subscribe newsletetter start-->
    <?php require('footer.php'); ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>