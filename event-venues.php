<?php
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_WARNING);

$servername = "Localhost";
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
  $conn = new PDO("mysql:host=Localhost;dbname=ybuhphmy_properties", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
// require('header.php');

?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Event Venues | EssentiaLyfe</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
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
  <script>

  </script>
</head>

<body>
  <div class="page">
    <?php require('header.php'); ?>
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom-inset">
      <div class="breadcrumbs-custom context-dark bg-overlay-60">
        <div class="container">
          <h2 class="breadcrumbs-custom-title">Event Venues</h2>
          <ul class="breadcrumbs-custom-path">
            <li>Ideal spaces for any gatherings</li>
          </ul>
        </div>
        <div class="box-position" style="background-image: url(https://www.essentialyfe.com/images/properties/BSS_6678.jpg);"></div>
      </div>
    </section>
    <?php
    require('search_event.php');

    if (isset($search) || isset($_SESSION['search'])) {
      if (isset($wedding_y)) {
        echo "
    ";
      } elseif (isset($wedding_n)) {
        echo "
        ";
      } else {
        // require('div.php');
        echo "
      <div style='margin-left: -155px;'>
      
    ";
      }
    }
    ?>
    <!-- Card Deck -->
    <div class="card-deck-container">
      <div class="card-deck">



      <?php
error_reporting(E_ALL ^ E_WARNING);

$conn = mysqli_connect("localhost", "root", "", "ybuhphmy_properties");
if(isset($_POST['searchBtn'])){
  $Price = $_POST['Price'];
  $bedroom = $_POST['bedroom'];
  $Capacity =$_POST['Capacity'];
  $Location =$_POST['Location'];
  $House_style =$_POST['House_style'];
    $mysql =  "SELECT * FROM properties WHERE `guest` LIKE '%$cCapacity%' and  vacation='on'";
    $result = mysqli_query($conn, $mysql);
    // $row = mysqli_fetch_all($result);
    while($row = mysqli_fetch_assoc($result)){
   
        echo "<div class='w-25 d-none d-sm-block'>
        <div class='card mb-4' style='margin-top:20px;'>
            <form method='post' action='property.php'><a href='contact.php'>
                    <div class='card-img-caption'>
                        <img src='https://www.essentialyfe.com/images/properties/$row[file]' class='card-img-top' alt='...'>
                    </div>
                    <div class='card-body'>
                        <h5 class='card-title' style='line-height:20px; padding-bottom:20px;'> $row[name] <br><small class='text-muted' style='font-size:14px; margin-top:-18px;'><br>$row[area]</small></h5>
                        <hr><br>
                        <div class='card-text' style='text-align:left; font-size:14px; line-height:25px;'>
                            <ul>
                                <li>&#8226 Up to $row[guest] Guests</li>
                                <li>&#8226 $row[bedroom] Bedrooms</li>
                                <li>&#8226 $row[bathroom] Baths</li>
                                <li>&#8226 $row[sqft] Sq. Ft.</li>
                            </ul>
                        </div>
                        <p style='float:right; margin-bottom:5px; margin-top:-22px; font-size:12.5px;'><b>Starting at $row[price] Per Night</b></p>
                        <input type='text' name='real_id' value='$row[id]' style='display:none;'>
    
                    </div><input value='Starting at $row[price] Per Night' type='submit' class='btn btn-purple' style='display:none; width:100%; font-size:14px;'></form>
        </div></a>
      </div>";

    }
    
}else{
  $mysql =  "SELECT * FROM properties WHERE venue='on' limit 8";
    $result = mysqli_query($conn, $mysql);
    // $row = mysqli_fetch_all($result);
    $newarr = array();
    foreach ($result as $key => $value) {
      array_push($newarr , $value);
    }

    usort($newarr, function ($a, $b) {
      return $a['name'] <=> $b['name'];
    });
  
    foreach ($newarr as $key => $value) {
  ?>
  <div class='w-25 d-none d-sm-block'>
        <div class='card mb-4' style='margin-top:20px;'>
            <form method='post' action='property.php'><a href='contact.php'>
                    <div class='card-img-caption'>
                        <img src='https://www.essentialyfe.com/images/properties/<?php echo $value['file']; ?>' class='card-img-top' alt='...'>
                    </div>
                    <div class='card-body'>
                        <h5 class='card-title' style='line-height:20px; padding-bottom:20px;'> <?php echo $value['name']; ?> <br><small class='text-muted' style='font-size:14px; margin-top:-18px;'><br><?php echo $value['area']; ?></small></h5>
                        <hr><br>
                        <div class='card-text' style='text-align:left; font-size:14px; line-height:25px;'>
                            <ul>
                                <li>&#8226 Up to <?php echo $value['guest']; ?> Guests</li>
                                <li>&#8226 <?php echo $value['bedroom']; ?> Bedrooms</li>
                                <li>&#8226 <?php echo $value['bathroom']; ?> Baths</li>
                                <li>&#8226 <?php echo $value['sqft']; ?> Sq. Ft.</li>
                            </ul>
                        </div>
                        <p style='float:right; margin-bottom:5px; margin-top:-22px; font-size:12.5px;'><b>Starting at <?php echo $value['price']; ?> Per Night</b></p>
                        <input type='text' name='real_id' value='$row[id]' style='display:none;'>
    
                    </div><input value='Starting at $row[price] Per Night' type='submit' class='btn btn-purple' style='display:none; width:100%; font-size:14px;'></form>
        </div></a>
      </div>
      
  <?php 
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
    document.querySelector(`.checkInOut`).addEventListener(`click`, function() {
      document.querySelector(`.inputCheckInOut`).click()
      document.querySelector(`.checkInOut`).innerHTML = document.querySelector(`.inputCheckInOut`).value
    })

    document.querySelector(`.cstm`).addEventListener(`click`, function() {
      document.querySelector(`.inputCheckInOut`).click()
      document.querySelector(`.checkInOut`).innerHTML = document.querySelector(`.inputCheckInOut`).value
    })
  </script>
  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</body>

</html>