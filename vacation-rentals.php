<?php
error_reporting(E_ALL ^ E_NOTICE); 

$servername = "localhost";
$username = "root";
$password = "";

session_start();

$previous_result = $_POST['previous_result'];
$search = $_POST['search'];
$House_style = $_POST['House_style'];
// $Country = $_POST['Country']; 
$Location = $_POST['Location'];
$Capacity = $_POST['Capacity'];
if (isset($Capacity)) {
  $value = explode('-', $Capacity);
  // print_r($value);
  // die();
}
$View  = $_POST['View'];
$Pool  = $_POST['Pool'];
$Parking  = $_POST['Parking'];
$Price  = $_POST['Price'];
$wedding_y = $_POST['wedding_y'];
$wedding_n = $_POST['wedding_n'];
if (!isset($wedding_y) & !isset($wedding_n) & !isset($search) & !isset($previous_result)) {
  session_destroy();
  $_SESSION = array();
}
// $Style = $_POST['Style'];
// $Bedrooms = $_POST['Bedrooms'];

try {
  $conn = new PDO("mysql:host=localhost;dbname=ybuhphmy_properties", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Vacation Rentals | EssentiaLyfe</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }

    .input_wrapper_div {
      position: relative;
    }

    .input_wrapper_div input {
      position: relative;
      z-index: 100;
      background-color: transparent !important;
    }

    /* .input_wrapper_div .inner_fram_div {
      position: absolute;
    width: 100%;
    height: 100%;
    border: 1px solid rebeccapurple;
    z-index: 999;
} */
    .input_wrapper_div p {
      position: absolute;
      color: #fff;
      top: 50%;
      left: 17%;
      transform: translate(0, -50%);
      z-index: 10;
    }
  </style>
  <script>
    window.addEventListener('DOMContentLoaded', (event) => {
      const target = document.querySelector('.input_wrapper_div');
      const reqestParaElm = document.querySelector('.reqest_para');


      target.addEventListener('click', function(ev) {
        console.log(reqestParaElm);
        reqestParaElm.style.display = 'none'
      });
    });
  </script>
  </head>
  <body>
    <div class="page">
    <?php require('header.php'); ?>
           <!-- Breadcrumbs -->
           <section class="breadcrumbs-custom-inset">
            <div class="breadcrumbs-custom context-dark bg-overlay-60">
              <div class="container">
                <h2 class="breadcrumbs-custom-title">Vacation Rentals</h2>
                <ul class="breadcrumbs-custom-path">
                  <li>Beautiful rentals for any occasion</li>
                </ul>
              </div>
              <div class="box-position" style="background-image: url(https://www.essentialyfe.com/images/properties/0054.jpg);"></div>
            </div>
          </section>
          <?php
    require('search_venues.php'); ?>
          <!-- Card Deck -->
            <div class="card-deck-container">
              <div class="card-deck">
                  
                  
              <?php


// echo $Rental . ' ' .$Country . ' ' .$Location . ' ' .$Style . ' ' .$Bedrooms . ' ' . $Pool  . ' ' .$View  . ' ' .$Capacity . ' ' .$Price;  
if (isset($wedding_y)) {
  $sql = $conn->prepare("
  SELECT * FROM properties WHERE 
  vacation='on' AND 
  area LIKE '%" . $_SESSION['Location'] . "%' AND 
  pool IN " . $_SESSION['Pool'] . " AND 
  Wedding ='Y' AND
  guest BETWEEN " . $_SESSION['value'][0] . " AND " . $_SESSION['value'][1] . "
  ");
  $sql->execute();
  if ($result = $sql->fetch()) {
    do{

      echo "  
    <div class='w-25 d-none d-sm-block'>
      <div class='card mb-4' style='margin-top:20px;'>
          <form method='post' action='property.php'><a href='contact.php'>
                  <div class='card-img-caption'>
                      <img src='https://www.essentialyfe.com/images/properties/$result[image]' class='card-img-top' alt='...'>
                  </div>
                  <div class='card-body'>
                      <h5 class='card-title' style='line-height:20px; padding-bottom:20px;'> $result[name] <br><small class='text-muted' style='font-size:14px; margin-top:-18px;'><br>$result[area]</small></h5>
                      <hr><br>
                      <div class='card-text' style='text-align:left; font-size:14px; line-height:25px;'>
                          <ul>
                              <li>&#8226 Up to $result[guest] Guests</li>
                              <li>&#8226 Up to $result[guest] Attendees</li>
                              <li>&#8226 $result[bedroom] Bedrooms</li>
                              <li>&#8226 $result[bathroom] Baths</li>
                              <li>&#8226 $result[sqft] Sq. Ft.</li>
                          </ul>
                      </div>
                      <p style='float:right; margin-bottom:5px; margin-top:-22px; font-size:12.5px;'><b>Starting at $result[price] Per Event</b></p>
                      <input type='text' name='real_id' value='$result[id]' style='display:none;'>
  
                  </div><input value='Starting at $result[price] Per Event' type='submit' class='btn btn-purple' style='display:none; width:100%; font-size:14px;'></form>
      </div></a>
    </div>";
    }while ($result = $sql->fetch());
  }else {
    echo "<h4 style='margin: revert;'>No Result Found</h4>";
  }
} elseif (isset($wedding_n)) {
    $sql = $conn->prepare("
    SELECT * FROM properties WHERE 
    vacation='on' AND 
    area LIKE '%" . $_SESSION['Location'] . "%' AND 
    pool IN " . $_SESSION['Pool'] . " AND 
    Wedding ='N' AND
    guest BETWEEN " . $_SESSION['value'][0] . "  AND " . $_SESSION['value'][1] . "
    ");
    $sql->execute();
    
    if ($result = $sql->fetch()) {
      do{

        echo "  
      <div class='w-25 d-none d-sm-block'>
        <div class='card mb-4' style='margin-top:20px;'>
            <form method='post' action='property.php'><a href='contact.php'>
                    <div class='card-img-caption'>
                        <img src='https://www.essentialyfe.com/images/properties/$result[image]' class='card-img-top' alt='...'>
                    </div>
                    <div class='card-body'>
                        <h5 class='card-title' style='line-height:20px; padding-bottom:20px;'> $result[name] <br><small class='text-muted' style='font-size:14px; margin-top:-18px;'><br>$result[area]</small></h5>
                        <hr><br>
                        <div class='card-text' style='text-align:left; font-size:14px; line-height:25px;'>
                            <ul>
                                <li>&#8226 Up to $result[guest] Guests</li>
                                <li>&#8226 Up to $result[guest] Attendees</li>
                                <li>&#8226 $result[bedroom] Bedrooms</li>
                                <li>&#8226 $result[bathroom] Baths</li>
                                <li>&#8226 $result[sqft] Sq. Ft.</li>
                            </ul>
                        </div>
                        <p style='float:right; margin-bottom:5px; margin-top:-22px; font-size:12.5px;'><b>Starting at $result[price] Per Event</b></p>
                        <input type='text' name='real_id' value='$result[id]' style='display:none;'>
    
                    </div><input value='Starting at $result[price] Per Event' type='submit' class='btn btn-purple' style='display:none; width:100%; font-size:14px;'></form>
        </div></a>
      </div>";
      }while ($result = $sql->fetch());
    }else {
      echo "<h4 style='margin: revert;'>No Result Found</h4>";
    }
} elseif (isset($search) || isset($previous_result)) {
  //   $House_style = $_POST['House_style'];
  // // $Country = $_POST['Country']; 
  // $Location = $_POST['Location'];
  // $Capacity = $_POST['Capacity'];
  // $View  = $_POST['View']; 
  // $Pool  = $_POST['Pool'];
  // $Parking  = $_POST['Parking'];
  // $Price  = $_POST['Price']; 

  if (isset($previous_result)) {
    $sql = $conn->prepare("
    SELECT * FROM properties WHERE 
    vacation='on' AND 
    area LIKE '%" . $_SESSION['Location'] . "%' AND 
    pool IN " . $_SESSION['Pool'] . " AND 
    guest BETWEEN " . $_SESSION['value'][0] . "  AND " . $_SESSION['value'][1] . "
    ");
  } else {
    $_SESSION['search'] = $search;
    $_SESSION['House_style'] = $House_style;
    $_SESSION['Location'] = $Location;
    $_SESSION['value'] = $value;
    $_SESSION['View'] = $View;
    $_SESSION['Pool'] = $Pool;
    $_SESSION['Parking'] = $Parking;
    $_SESSION['Price'] = $Price;

    $sql = $conn->prepare("
    SELECT * FROM properties WHERE 
    vacation='on' AND 
    area LIKE '%" . $Location . "%' AND 
    pool IN " . $Pool . " AND 
    guest BETWEEN " . $value[0] .  " AND  " . $value[1] . "
    ");
  }
  // print_r($sql);
  $sql->execute();
  if ($result = $sql->fetch()) {
  
    do{

      echo "  
    <div class='w-25 d-none d-sm-block'>
      <div class='card mb-4' style='margin-top:20px;'>
          <form method='post' action='property.php'><a href='contact.php'>
                  <div class='card-img-caption'>
                      <img src='https://www.essentialyfe.com/images/properties/$result[image]' class='card-img-top' alt='...'>
                  </div>
                  <div class='card-body'>
                      <h5 class='card-title' style='line-height:20px; padding-bottom:20px;'> $result[name] <br><small class='text-muted' style='font-size:14px; margin-top:-18px;'><br>$result[area]</small></h5>
                      <hr><br>
                      <div class='card-text' style='text-align:left; font-size:14px; line-height:25px;'>
                          <ul>
                              <li>&#8226 Up to $result[guest] Guests</li>
                              <li>&#8226 Up to $result[guest] Attendees</li>
                              <li>&#8226 $result[bedroom] Bedrooms</li>
                              <li>&#8226 $result[bathroom] Baths</li>
                              <li>&#8226 $result[sqft] Sq. Ft.</li>
                          </ul>
                      </div>
                      <p style='float:right; margin-bottom:5px; margin-top:-22px; font-size:12.5px;'><b>Starting at $result[price] Per Event</b></p>
                      <input type='text' name='real_id' value='$result[id]' style='display:none;'>
  
                  </div><input value='Starting at $result[price] Per Event' type='submit' class='btn btn-purple' style='display:none; width:100%; font-size:14px;'></form>
      </div></a>
    </div>";
    }while ($result = $sql->fetch());
  } else {
    echo "<h4 style='margin: revert;'>No Result Found</h4>";
  }
  //".number_format($result['price'])."
} else {

  $stmt = $conn->prepare("SELECT * FROM properties WHERE vacation='on'");
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
                      <h5 class='card-title' style='line-height:20px; padding-bottom:20px;'> $result[name] <br><small class='text-muted' style='font-size:14px; margin-top:-18px;'><br>$result[area]</small></h5>
                      <hr><br>
                      <div class='card-text' style='text-align:left; font-size:14px; line-height:25px;'>
                          <ul>
                              <li>&#8226 Up to $result[guest] Guests</li>
                              <li>&#8226 Up to $result[guest] Attendees</li>
                              <li>&#8226 $result[bedroom] Bedrooms</li>
                              <li>&#8226 $result[bathroom] Baths</li>
                              <li>&#8226 $result[sqft] Sq. Ft.</li>
                          </ul>
                      </div>
                      <p style='float:right; margin-bottom:5px; margin-top:-22px; font-size:12.5px;'><b>Starting at $result[price] Per Event</b></p>
                      <input type='text' name='real_id' value='$result[id]' style='display:none;'>
  
                  </div><input value='Starting at $result[price] Per Event' type='submit' class='btn btn-purple' style='display:none; width:100%; font-size:14px;'></form>
      </div></a>
    </div>";
  }
}
?>

</div>
</div>


         <!-- Page Footer-->
    <?php require('footer.php'); ?>
     
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script>
    $(document).ready(function() {
      $(function() {
        $('input[name="daterange"]').daterangepicker({
          // "startDate": "21/04/2022",
          // "endDate": "11/05/2022",
          opens: 'center',
          locale: {
            format: 'DD/MM/YYYY',
          }
        });
      });
    });

    // $('input[name="daterange"]').val('');
document.querySelector(`.checkInOut`).addEventListener(`click`, function(){
  document.querySelector(`.inputCheckInOut`).click()
  document.querySelector(`.checkInOut`).innerHTML = document.querySelector(`.inputCheckInOut`).value
})

document.querySelector(`.cstm`).addEventListener(`click`, function(){
  document.querySelector(`.inputCheckInOut`).click()
  document.querySelector(`.checkInOut`).innerHTML = document.querySelector(`.inputCheckInOut`).value
})
  </script>
  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</body>
</html>