<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Guest Form | EssentiaLyfe</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    .iti__selected-dial-code {
      color: #fff;
    }


    /* #vr-start-time[type="time"]:before {
    content: 'Request Check In time:';
    color: #ffffff;
    position: absolute;
    background: #130d0d;
    height: 18px;
    } */

    /* input[type="time"]:before {
    content: '';
    color: #ffffff;
    position: absolute;
    background: #130d0d;
    height: 18px;
    } */

    /* input[type="time"]::before { 
    	content: attr(data-placeholder);
    	width: 100%;
    }*/

    /* input[type="time"]:focus::before,
    input[type="time"]:valid::before { 
      display: none;
      content: '';
    
    }  */

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
      top: 25%;
      left: 17%;
      transform: translate(0, -50%);
      z-index: 10;
    }



    .input_wrapper_div1 {
      position: relative;
    }

    .input_wrapper_div1 input {
      position: relative;
      z-index: 100;
      background-color: transparent !important;
    }

    /* .input_wrapper_div1 .inner_fram_div {
      position: absolute;
    width: 100%;
    height: 100%;
    border: 1px solid rebeccapurple;
    z-index: 999;
} */
    .input_wrapper_div1 p {
      position: absolute;
      color: #fff;
      top: 25%;
      left: 17%;
      transform: translate(0, -50%);
      z-index: 10;
    }

    input[type="time"]:hover::before {
      content: '';
    }
  </style>

  <style>
    .checkInOut {
      height: 100%;
      top: 0px;
      font-size: 12px;
      background: #fff;
      border: 1px solid #bab5b5;
    }
  </style>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>


  <script>
    // $(document).ready(function () {
    //     $("#rental-type").keyup(function () {
    //         if(this.value == "vacation-rental" || this.value=="event-venue" || this.value=="film-location" || this.value=="short-term-stay-event" || this.value=="long-term-furnished-rental"){


    //             $('#rest-of-form').css("display", "block");
    //         }else{
    //             $('#rest-of-form').css("display", "none");
    //         }
    //     });
    // });
    window.addEventListener('DOMContentLoaded', (event) => {
      const target = document.querySelector('.input_wrapper_div');
      const reqestParaElm = document.querySelector('.reqest_para');


      target.addEventListener('click', function(ev) {
        console.log(reqestParaElm);
        reqestParaElm.style.display = 'none'
      });
    });

    window.addEventListener('DOMContentLoaded', (event) => {
      const target = document.querySelector('.input_wrapper_div1');
      const reqestParaElm = document.querySelector('.reqest_para1');


      target.addEventListener('click', function(ev) {
        console.log(reqestParaElm);
        reqestParaElm.style.display = 'none'
      });
    });
  </script>

</head>

<body style="background-color:#0E0C0D;">
  <div class="page" style="min-height: auto;">
    <?php require('header.php'); ?>

    <div class="container" style=" margin-top:0px; ">

      <!-- Modal -->

      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle" style="margin-left: auto;font-weight: 600;font-size: 22px;">Thank You!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Your interest in booking has been successfully submitted. One of our agents will reach out to further assist you.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin: auto;">Close</button>
            </div>
          </div>
        </div>
      </div>


      <section class="section section-sm section-last bg-default text-left" style="display:block;background-color: #0E0C0D;">
        <!-- <caption>
          <h3 class="text-center mb-5" style="color:white;">Guest Form</h3>
          <button value="Back" type="Button" onclick="history.go(-1);">Go back</button>
        </caption> -->
        <div class="container" style="width:100%;">
          <article class="title-classic">
            <div class="title-classic" style="margin-left:25px;">
            <h5 style="color:white;font-size: xxx-large;font-weight: 500;margin-left: 40%;">Guest Form</h5>
              <p style="color:white;"><b style="font-size: 22px;">Thank you for your interest in booking one of our Locations.</b><br><small style="color:white; font-size:15px;">To better assist you, please fill out the form:</small> </p>
            </div>
            <div id="rental-type1" style="display:block; --darkreader-inline-bgcolor:#1d2020;"> <img src="images/Guest Form Picture.jpg" alt="" style="height: 230px; max-width: 100%;margin-bottom: 25px;">
            </div>
        </div>
        </article>
        <section name="contact" id="contact" style="display:block; width:100%;">
          <form name="myemailform" class="rd-form rd-form-variant-2 rd-mailform" method="post" action="form-to-email.php">

            <div class="row row-14 gutters-14">
              <div class="col-md-12">
                <div class="form-wrap">
                  <div id="form-shower">
                    <select name="rental-type" id="rental-type" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <option value="c" selected>Rental Type</option>
                      <option value="vacation-rental">Vacation Rental/ Short Term Stay</option>
                      <option value="event-venue">Event Venue Rental</option>
                      <option value="film-location">Film Locations Rentals</option>
                      <!-- <option value="short-term-stay-event">Stay Over + Event</option> -->
                      <option value="long-term-furnished-rental">Long Term Furnished Rental</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="title-classic" style="margin-left:-0px;">
                <label for="" style="margin-left:5px; color:white;">*Please select a rental type to continue</label>
              </div>
          </form>
        </section>

         <!-- Vacation Rental/ Short Term Stay -->
 <div class="container-xxl">
     <div class="row" style="flex-wrap: inherit;">
         <!-- <div class="col-sm-10"> -->
         <section name="vacation-rental" id="vacation-rental" style="display:none; width:100%;">
             <form name="myemailform" class="rd-form rd-form-variant-2 rd-mailform" method="post"
                 action="form-to-email.php">
                 <!-- <input type="text" class="form-control" id="date"/> -->

                 <input type="text" name="vacation" value="Vacation Rental/ Short Term Stay" style="display:none;">
                 <input type="text" id="asv" name="vacation1" style="display:none;">
                 <!-- <input type="text" id="txtPhone_country" name="txtPhone_country" value="" style="display:none;"> -->
                 <div class="" style="display: flex;">
                     <div class="col-md-6" style="margin-left: auto; padding:10px;">
                         <div class="form-wrap">
                             <input class="form-input" id="vr-name" type="text" name="vr-name"
                                 style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required"
                                 required>
                             <label class="form-label" for="vr-name" style="color:white;">Full Name:</label>
                         </div>
                     </div>
                     <div class="col-md-6" style="margin-right: auto; padding:10px;">
                         <div class="form-wrap">
                             <input class="form-input" id="vr-mail" type="mail" name="vr-mail"
                                 data-constraints="@Required" style="background:#0E0C0D; color:white; height:30px;"
                                 required>
                             <label class="form-label" for="vr-mail" style="color:white;">Email Address:</label>
                         </div>
                     </div>
                 </div>
                 <div class="" style="display: flex;">
                     <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                         <div class="form-wrap" style="display: grid;">
                             <div style="max-width:75px;" onclick="enable_disable1()">
                                 <input class="form-input" id='txtPhone' type="tel"
                                     style="background:#0E0C0D;  color:white;" name="txtPhone" />
                             </div>
                             <div style="margin-top: -60px;margin-left: 75px;">
                                 <input class="form-input" id='txtPhone1' type='tel' name="txtPhone1"
                                     data-constraints="@Required" style="background:#0E0C0D; color:white; height:30px;"
                                     disabled required />
                                 <label class="form-label" for="txtPhone1" style="margin-left: 75px; color:white;">Phone Number:</label>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                         <div class="form-wrap">
                             <input class="form-input" id="vr-insta" type="text" name="vr-insta"
                                 style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required"
                                 required>
                             <label class="form-label" for="vr-insta" style="color:white;">Social Media Handle (example: Facebook, Instagram, LinkedIn)</label>
                         </div>
                     </div>
                 </div>
                 <div class="" style="display: flex;">
                     <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                         <div class="form-wrap">
                             <input class="form-input chkdt datepicker" id="vr-start-date" type="text"
                                 name="vr-start-date" style="background:#0E0C0D; color:white; "
                                 placeholder="Requested Check In Date:" required>
                             <!-- <label class="form-label" for="vr-start-date" style="color:white;">Requested Check In Date:</label> -->
                         </div>
                     </div>
                     <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                         <div class="form-wrap ">
                             <!-- <input class="form-input" type="text" id="vr-end-date" name="vr-end-date" style="background:#0E0C0D; color:white;" > -->
                             <input class="form-input datepicker" id="vr-end-date" type="text" name="vr-end-date"
                                 style="background:#0E0C0D; color:white;" placeholder="Requested Check Out Date:"
                                 required>
                             <!-- <label class="form-label" for="vr-end-date" style="color:white;">Requested Check Out Date:</label> -->
                         </div>
                     </div>
                 </div>
                 <div class="" style="display: flex;">
                     <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                         <div class="form-wrap input_wrapper_div1">
                             <!-- <input class="form-input" type="time" id="vr-start-time" name="vr-start-time"
                                 style="background:#0E0C0D; color:white;" required>
                             <p class="reqest_para1">Requested check In time</p> -->
                             <!-- <label class="form-label" for="vr-start-time" style="color:white;">Requested Check In Time:</label> -->
                             <select name="vr-start-time" id="vr-start-time" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 data-constraints="@Required" required>
                                <option value="">Requested Check In Time:</option>
                                 <?php  require("time_dropdown.php"); ?>
                         </div>
                     </div>
                     <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                         <div class="form-wrap input_wrapper_div">
                             <!-- <input class="form-input" type="time" id="vr-end-time" name="vr-end-time"
                                 style="background:#0E0C0D; color:white;" required>
                             <p class="reqest_para">Requested check Out time</p> -->
                             <!-- <label class="form-label" for="vr-end-time" style="color:white;">Requested Check Out Time:</label> -->
                             <select name="vr-end-time" id="vr-end-time" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 data-constraints="@Required" required>
                                <option value="">Requested Check Out Time:</option>
                                <?php  require("time_dropdown.php"); ?>
                         </div>
                     </div>
                 </div>
                 <div class="" style="display: flex;">
                     <div class="col-md-6" style="margin-left: auto; padding:10px;">
                         <div class="form-wrap">
                             <select name="vr-flex-date" id="vr-flex-date" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 data-constraints="@Required" required>
                                 <option value="">Are you flexible with the check in/out date:</option>
                                 <option value="yes">Yes</option>
                                 <option value="no">No</option>
                             </select>
                         </div>
                     </div>
                     <div class="col-md-6" style="margin-right: auto;  padding:10px; margin-bottom:10px;">
                         <div class="form-wrap">
                             <select name="vr-flex-time" id="vr-flex-time" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 data-constraints="@Required" required>
                                 <option value="">Are you flexible with the check in/out time:</option>
                                 <option value="yes">Yes</option>
                                 <option value="no">No</option>
                             </select>
                         </div>
                     </div>
                 </div>
                 <div class="" style="display: flex;">
                     <div class="col-md-6" style="margin-left: auto; padding:10px;">
                         <div class="form-wrap">
                             <select name="vr-bed" id="vr-bed" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 required>
                                 <option value="" data-constraints="@Required"># of Bedrooms Needed:</option>
                                 <option value="1-2">1-2</option>
                                 <option value="3-4">3-4</option>
                                 <option value="5-6">5-6</option>
                                 <option value="7-8">7-8</option>
                                 <option value="9-10">9-10</option>
                                 <option value="10+">10+</option>
                             </select>
                         </div>
                     </div>
                     <div class="col-md-6" style="margin-left: auto; padding:10px;">
                         <div class="form-wrap">
                             <select name="vr-bath" id="vr-bath" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 required>
                                 <option value="" data-constraints="@Required"># of Bathrooms Needed:</option>
                                 <option value="1-2">1-2</option>
                                 <option value="3-4">3-4</option>
                                 <option value="5-6">5-6</option>
                                 <option value="7-8">7-8</option>
                                 <option value="9-10">9-10</option>
                                 <option value="10+">10+</option>
                             </select>
                         </div>
                     </div>
                 </div>
                 <div class="" style="display: flex;">
                     <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                         <div class="form-wrap">
                             <select name="vr-pets" id="vr-pets" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 data-constraints="@Required" onchange="ShowHideDiv1()" required>
                                 <option value="">Are you bringing any pets:</option>
                                 <option value="yes">Yes</option>
                                 <option value="no">No</option>
                             </select>
                             <select name="vr-no_pets" id="vr-no_pets" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px; display:none">
                                 <option value="1" selected>No of pets:</option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                             </select>
                             <select name="vr-yes_pets" id="vr-yes_pets" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px; display:none">
                                 <option value="0" selected>Pet Size:</option>
                                 <option value="Up to 20 Pounds">Up to 20 pounds</option>
                                 <option value="20-50 pounds">20-50 pounds</option>
                             </select>
                         </div>
                     </div>
                     <div class="col-md-6" style="margin-left: auto; padding:10px;">
                         <div class="form-wrap">
                             <select name="vr-party" id="vr-party" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 data-constraints="@Required" required>
                                 <option value="">Are you planning on hosting a party or a large gathering:</option>
                                 <option value="yes">Yes</option>
                                 <option value="no">No</option>
                             </select>
                         </div>
                     </div>
                 </div>
                 <div class="" style="display: flex;">
                     <div class="col-md-6" style="margin-left: auto; padding:10px;">
                         <div class="form-wrap">
                             <select name="vr-city" id="vr-city" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 onchange="ShowHideDiv19()" required>
                                 <option value="" data-constraints="@Required">What city/area are you intersted in:
                                 </option>
                                 <option value='Beverly Hills'>Beverly Hills</option>
                                 <option value='Bel Air'>Bellair</option>
                                 <option value='Brentwood'>Brentwood</option>
                                 <option value='DTLA'>DTLA</option>
                                 <option value='Encino'>Encino</option>
                                 <option value='Hollywood'>Hollywood</option>
                                 <option value='Hollywood Hills'>Hollywood Hills</option>
                                 <option value='Holmby Hills'>Holmby Hills</option>
                                 <option value='Malibu'>Malibu</option>
                                 <option value='Newport Beach'>Newport Beach</option>
                                 <option value='Sherman Oaks'>Sherman Oaks</option>
                                 <option value='Studio City'>Studio City</option>
                                 <option value='Venice'>Venice</option>
                                 <option value='West Hollywood'>West Hollywood</option>
                                 <option value='Westwood'>Westwood</option>
                                 <option value='Woodland Hills'>Woodland Hills</option>
                                 <option value='Tarzana'>Tarzana</option>
                                 <option value='Other'>Other</option>
                             </select>
                         </div>
                         <div class="col-md-12" id="vr-other_city" style="padding:10px;display:none;">
                              <div class="form-wrap">
                                  <!-- <intextareaput class="form-input" id="vr-other_info" type="textarea" name="vr-other_info" style="background:#0E0C0D; color:white;"> -->
                                  <textarea class="form-control" rows="2" id="vr-other_city" name="vr-other_city"
                                      style="background:#0E0C0D; color:white;" placeholder="Please enter the information about the city: " ></textarea>
                                  <!-- <label class="form-label" for="vr-other_city" style="color:white;">Please fill where did you hear about us:</label> -->
                              </div>
                          </div>
                     </div>
                     <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                         <div class="form-wrap">
                             <select name="vr-style" id="vr-style" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" onchange="ShowHideDiv20()"
                                 required>
                                 <option value="" data-constraints="@Required">What house style are you interested in:
                                 </option>
                                 <option value='Asian'>Asian</option>
                                 <option value='Desert'>Desert</option>
                                 <option value='French'>French</option>
                                 <option value='Gothic/ Mid-Century '>Gothic/ Mid-Century </option>
                                 <option value='Hi-Tech'>Hi-Tech</option>
                                 <option value='Mediteranean'>Mediteranean</option>
                                 <option value='Modern'>Modern</option>
                                 <option value='Spanish'>Spanish</option>
                                 <option value='Traditional'>Traditional</option>
                                 <option value='Vintage'>Vintage</option>
                                 <option value='Victorian'>Victorian</option>
                                 <option value='Other'>Other</option>
                             </select>
                         </div>
                         <div class="col-md-12" id="vr-other_style" style="padding:10px;display:none;">
                              <div class="form-wrap">
                                  <!-- <intextareaput class="form-input" id="vr-other_info" type="textarea" name="vr-other_info" style="background:#0E0C0D; color:white;"> -->
                                  <textarea class="form-control" rows="2" id="vr-other_style" name="vr-other_style"
                                      style="background:#0E0C0D; color:white;" placeholder="Please enter the information about the house style: " ></textarea>
                                  <!-- <label class="form-label" for="vr-other_style" style="color:white;">Please fill where did you hear about us:</label> -->
                              </div>
                          </div>
                     </div>
                 </div>
                 
                 <div class="" style="display: flex;">
                     <div class="col-md-6" style="margin-left: auto; padding:10px;">
                         <div class="form-wrap">
                             <select name="vr-hear" id="vr-hear" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 required>
                                 <option value="" data-constraints="@Required">What is your total rental budget:
                                 </option>
                                 <option value="5000">Up to $5,000</option>
                                 <option value="5,000-10,000">$5,000-$10,000</option>
                                 <option value="10,000-25,000">$10,000-$25,000</option>
                                 <option value="25,000-50,000">$25,000-$50,000</option>
                                 <option value="50,000-100,000">$50,000-$100,000</option>
                                 <option value="100,000-250,000">$100,000-$250,000</option>
                             </select>
                         </div>
                     </div>
                     <div class="col-md-6" style="margin-right: auto; padding:10px;">
                         <div class="form-wrap">
                             <!-- <select name="vr-serv" id="vr-serv" class="form-input" style="background:#0E0C0D; color:white;" onchange="ShowHideDiv2()"> -->
                             <select name="vr-serv" id="vr-serv" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 onchange="ShowHideDiv4()" required>
                                 <option value="">Are you interested in any additonal services:</option>
                                 <option value="House Cleaner">House Cleaner</option>
                                 <option value="Mobile Spray Tax">Mobile Spray Tax</option>
                                 <option value="Make up Artist">Make up Artist</option>
                                 <option value="Jet Charter">Jet Charter</option>
                                 <option value="Airport Transferr">Airport Transferr</option>
                                 <option value="Exotic Car Rental">Exotic Car Rental</option>
                                 <option value="Nightlife Arrangements">Nightlife Arrangements</option>
                                 <option value="Yacht Charter">Yacht Charter</option>
                                 <option value="Personal Security">Personal Security</option>
                                 <option value="Covid Testing">Covid Testing</option>
                                 <option value="IV Drip">IV Drip</option>
                                 <option value="Personal Chef">Personal Chef</option>
                                 <option value="Baby Sitter/ Pet Sitter">Baby Sitter/ Pet Sitter</option>
                                 <option value="Hair Stylist">Hair Stylist</option>
                                 <option value="Fashion Stylist">Fashion Stylist</option>
                                 <option value="Chauffer">Chauffer</option>
                                 <option value="Other">Other</option>
                                 <option value="No">No</option>
                             </select>
                             <!-- <select name="vr-yes_service_home" id="vr-yes_service_home" class="form-input" style="background:#0E0C0D; display:none; color:white;">
                            <option value="NA" style="display:none;" selected>NA</option>
                            <option value="House Cleaner" selected>House Cleaner</option>
                            <option value="Mobile Tan ">Mobile Tan </option>
                            <option value="Covid Testing">Covid Testing</option>
                            <option value="IV Drip">IV Drip</option>
                            <option value="Therapy">Therapy</option>
                            </select>
                            <select name="vr-yes_service_lxr" id="vr-yes_service_lxr" class="form-input" style="background:#0E0C0D; display:none; color:white;">          
                            <option value="NA" style="display:none;" selected>NA</option>                  
                            <option value="Jet"selected>Jet</option>
                            <option value="Airport Transfer" >Airport Transfer</option>
                            <option value="Car Rental">Car Rental</option>
                            <option value="Yacht Charter">Yacht Charter</option>
                            <option value="Nightlife Arrangements">Nightlife Arrangements</option>
                            <option value="Personal Security">Personal Security</option>
                          </select> -->
                         </div>
                     </div>
                 </div>
                 <div class="col-md-12" id="vr-other" style="padding:10px;display:none;">
                     <div class="form-wrap">
                         <!-- <intextareaput class="form-input" id="vr-other_info" type="textarea" name="vr-other_info" style="background:#0E0C0D; color:white;"> -->
                         <textarea class="form-control" rows="3" id="vr-other_info" name="vr-other_info"
                             style="background:#0E0C0D; color:white;"></textarea>
                         <label class="form-label" for="vr-other_info" style="color:white;">Please fill your required services:</label>
                     </div>
                 </div>
                 <div class="" style="display: flex;">
                     <div class="col-md-6" style="margin-left: auto; padding:10px;">
                         <div class="form-wrap">
                             <input class="form-input" id="vr-req" type="text" style="background:#0E0C0D; color:white;"
                                 name="vr-req" required>
                             <label class="form-label" for="vr-req" style="color:white;">Do you have any special accessibility requirements:</label>
                         </div>
                     </div>
                     <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                         <div class="form-wrap">
                             <input class="form-input" id="vr-park" type="text" style="background:#0E0C0D; color:white;"
                                 name="vr-park" required>
                             <label class="form-label" for="vr-park" style="color:white;">Number of parking spots needed:</label>
                         </div>
                     </div>
                 </div>
                 <div class="" style="display: flex;">
                     <div class="col-md-6" style="margin-left: auto; padding:10px;">
                         <div class="form-wrap">
                             <select name="vr-stay" id="vr-stay" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 required>
                                 <option value="" data-constraints=" @Required"># of Guests Staying Over:</option>
                                 <option value="1-2">1-2</option>
                                 <option value="3-4">3-4</option>
                                 <option value="5-6">5-6</option>
                                 <option value="7-8">7-8</option>
                                 <option value="9-10">9-10</option>
                                 <option value="11-15">11-15</option>
                                 <option value="16-20">16-20</option>
                                 <option value="20+">20+</option>
                             </select>
                         </div>
                     </div>
                     <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                         <div class="form-wrap">
                             <input class="form-input" id="vr-trip_perpose" type="text"
                                 style="background:#0E0C0D; color:white;" name="vr-trip_perpose" required>
                             <label class="form-label" for="vr-trip_perpose" style="color:white;">What is the main purpose of your trip:</label>
                         </div>
                     </div>
                 </div>

                 <div class="" style="display: flex;">
                     <div class="col-md-6" style="margin-left: auto; padding:10px;">
                         <div class="form-wrap">
                             <select name="vr-music" id="vr-music" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 data-constraints="@Required" required>
                                 <option value=""> Will you be having music in the backyard:</option>
                                 <option value="yes">Yes</option>
                                 <option value="no">No</option>
                                 <option value="Maybe">Maybe</option>
                             </select>
                         </div>
                     </div>
                     <div class="col-md-6" style="margin-right: auto;  padding:10px; margin-bottom:10px;">
                         <div class="form-wrap">
                             <select name="vr-heat_pool" id="vr-heat_pool" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 data-constraints="@Required" required>
                                 <option value="">Would you like to heat up the pool & Hot tub:</option>
                                 <option value="yes">Yes</option>
                                 <option value="no">No</option>
                                 <option value="Maybe">Maybe</option>
                             </select>
                         </div>
                     </div>
                 </div>

                 <!-- <div class="col-md-12" style="padding:10px;">
                <div class="form-wrap">
                  <select name="vr-attendees" id="vr-attendees" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                    <option selected># of attendees:</option>
                    <option value='0-30'>0-30</option>
                    <option value='30-60'>30-60</option>
                    <option value='60-90'>60-90</option>
                    <option value='90-120'>90-120</option>
                    <option value='120-150'>120-150</option>
                    <option value='150-180'>150-180</option>
                    <option value='180-200'>180-200</option>
                    <option value='200-250'>200-250</option>
                    <option value='250-300'>250-300</option>
                    <option value='300-400'>300-400</option>
                    <option value='400-500'>400-500</option>
                    <option value='500+'>500+</option>
                  </select>
                </div>
               </div> -->
                 <div class="col-md-12" style="padding:10px; display: flex;">
                     <div class="" style="width: 33%;">
                         <select name="vr-visits" id="vr-visits" class=" btn btn-secondary dropdown-toggle"
                             style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                             data-constraints="@Required" onchange="ShowHideDiv()" required>
                             <option value="no">Are you expecting any visitors:</option>
                             <option value="yes">Yes</option>
                             <option value="no">No</option>
                         </select>
                         <select name="vr-yes_guest" id="vr-yes_guest" class=" btn btn-secondary dropdown-toggle"
                             style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px; display:none;">
                             <option value="0" style="display:none;" selected>0</option>
                             <option value="1-2" selected>1-2</option>
                             <option value="3-4">3-4</option>
                             <option value="5-6">5-6</option>
                             <option value="7-8">7-8</option>
                             <option value="9-10">9-10</option>
                             <option value="10+">10+</option>
                         </select>
                     </div>

                     <div class="" style="margin: auto;width: 33%; margin-block: inherit;">
                         <select name="vr-hear-us" id="vr-hear-us" class=" btn btn-secondary dropdown-toggle"
                             style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                             onchange="ShowHideDiv18()" required>
                             <option value="" data-constraints="@Required" required>How did you hear about us:</option>
                             <option value="Social Media">Social Media</option>
                             <option value="Google">Google</option>
                             <option value="Yelp">Yelp</option>
                             <option value="Referral">Referral</option>
                             <option value="3rd Party Booking Website">3rd Party Booking Website</option>
                             <option value="Other">Other</option>
                         </select>
                     </div>
                     <div class="" style="width: 33%;">
                         <select name="vr-pro_film" id="vr-pro_film" class=" btn btn-secondary dropdown-toggle"
                             style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                             required>
                             <option value="" data-constraints="@Required"> Will you be having any professional filming:
                             </option>
                             <option value="Yes">Yes</option>
                             <option value="No">No</option>
                         </select>
                     </div>
                 </div>
                 <div class="col-md-12" id="vr-where_hear" style="padding:10px;display:none;">
                     <div class="form-wrap">
                         <!-- <intextareaput class="form-input" id="vr-other_info" type="textarea" name="vr-other_info" style="background:#0E0C0D; color:white;"> -->
                         <textarea class="form-control" rows="3" id="vr-where_hear" name="vr-where_hear"
                             style="background:#0E0C0D; color:white;" placeholder="Please fill where did you hear about us: " ></textarea>
                         <!-- <label class="form-label" for="vr-where_hear" style="color:white;">Please fill where did you hear about us:</label> -->
                     </div>
                 </div>
                 <div class="col-md-12" style="padding:10px;">
                     <div class="form-wrap">
                         <input class="form-input" id="vr-info" type="text" name="vr-info"
                             style="background:#0E0C0D; color:white;" required>
                         <label class="form-label" for="vr-info" style="color:white;">Any additional information you wish to share:</label>
                     </div>
                 </div>
                 <br>
                 <article class="title-classic">
                     <div class="title-classic" style="margin-left:15px;">
                         <input class="form-input" id="initials" type="text" value="" placeholder="Initials"
                             style="background:#0E0C0D; color:white; height:-20px; width:100px;" required>
                         <label for="confirm" style="margin-left:5px; color:white;">I certify that all of the
                             information here is correct</label>
                     </div>
                 </article><br><br>
                 <center>
                     <button class="button button-black-outline" type="submit" data-toggle="modal" id="btnSubmit"
                         data-target="#exampleModalCenter">Submit</button>
                     <!-- <input id="btnSubmit" class="btn" type="submit" value="SUBMIT" > -->
                 </center>
             </form>
         </section>

         <!-- Vacation Rental/ Short Term Stay End -->

            <!-- Event Venue -->

            <section name="event-venue" id="event-venue" style="display:none; width:100%;">
                <form name="myemailform" class="rd-form rd-form-variant-2 rd-mailform" method="post"
                    action="form-to-email.php">
                    <input type="text" name="Event" value="Event Venue Rental" style="display:none;">
                    <input type="text" id="asv_1" name="vacation1" style="display:none;">
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <input class="form-input" id="ev-name" type="text" name="ev-name"
                                    style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required"
                                    required>
                                <label class="form-label" for="ev-name" style="color:white;">Full Name:</label>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto; padding:10px;">
                            <div class="form-wrap">
                                <input class="form-input" id="ev-mail" type="mail" name="ev-mail"
                                    data-constraints="@Required" style="background:#0E0C0D; color:white; height:30px;"
                                    required>
                                <label class="form-label" for="ev-mail" style="color:white;">Email Address:</label>
                            </div>
                        </div>
                    </div>

                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                            <div class="form-wrap" style="display: grid;">
                                <div style="max-width:75px;" onclick="enable_disable2()">
                                    <input class="form-input txtPhone" id='1txtPhone' type="tel"
                                        style="background:#0E0C0D;  color:white;" name="txtPhone" />
                                </div>
                                <div style="margin-top: -60px;margin-left: 75px;">
                                    <input class="form-input" id='txtPhone2' type='tel' name="txtPhone2"
                                        style="background:#0E0C0D; color:white; height:30px;" disabled required />
                                    <label class="form-label" for="txtPhone2"
                                        style="margin-left: 75px; color:white;">Phone Number:</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                            <div class="form-wrap">
                                <input class="form-input" id="ev-insta" type="text" name="ev-insta"
                                    style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required"
                                    required>
                                <label class="form-label" for="ev-insta" style="color:white;">Social Media Handle
                                    (example: Facebook, Instagram, LinkedIn)</label>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="date" id="ev-start-date" name="ev-start-date" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="date" id="ev-end-date" name="ev-end-date" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                    </div> -->
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                            <div class="form-wrap">
                                <input class="form-input chkdt datepicker" id="ev-start-date" type="text"
                                    name="ev-start-date" style="background:#0E0C0D; color:white; "
                                    placeholder="Requested Check In Date:" required>
                                <!-- <label class="form-label" for="ev-start-date" style="color:white;">Requested Check In Date:</label> -->
                                
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                            <div class="form-wrap ">
                                <!-- <input class="form-input" type="text" id="vr-end-date" name="vr-end-date" style="background:#0E0C0D; color:white;" > -->
                                <input class="form-input datepicker" id="ev-end-date" type="text" name="ev-end-date"
                                    style="background:#0E0C0D; color:white;" placeholder="Requested Check Out Date:"
                                    required>
                                <!-- <label class="form-label" for="ev-end-date" style="color:white;">Requested Check Out Date:</label> -->
                            </div>
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                            <div class="form-wrap input_wrapper_div1">
                                <!-- <input class="form-input" type="time" id="ev-start-time" name="ev-start-time" style="background:#0E0C0D; color:white;">
                          <p class="reqest_para1">Request check In time</p> -->
                          <select name="ev-start-time" id="ev-start-time" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 data-constraints="@Required" required>
                                 <option value="">Requested Check In Time:</option>
                                <?php  require("time_dropdown.php"); ?>
                                <!-- <input class="form-input" type="time" id="ev-start-time" name="ev-start-time"
                                    style="background:#0E0C0D; color:white;" required>
                                <label class="form-label" for="ev-start-time"
                                    style="margin-left: 47px;color:white;">Requested Check In Time:</label> -->
                                <!-- <label class="form-label" for="ev-start-time" style="color:white;">Requested Check In Time:</label> -->
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                            <div class="form-wrap input_wrapper_div">
                                <!-- <input class="form-input" type="time" id="ev-end-time" name="ev-end-time" style="background:#0E0C0D; color:white;">
                          <p class="reqest_para">Request check Out time</p> -->
                                <!-- <input class="form-input" type="time" id="ev-end-time" name="ev-end-time"
                                    style="background:#0E0C0D; color:white;" required>
                                <label class="form-label" for="ev-end-time"
                                    style="margin-left: 47px;color:white;">Requested Check Out Time:</label> -->
                                <!-- <label class="form-label" for="ev-end-time" style="color:white;">Requested Check Out Time:</label> -->
                                <select name="ev-end-time" id="ev-end-time" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 data-constraints="@Required" required>
                                 <option value="">Requested Check Out Time:</option>
                                 <?php  require("time_dropdown.php"); ?>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="time" id="ev-start-time" name="ev-start-time" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="time" id="ev-end-time" name="ev-end-time" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                    </div> -->
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <select name="ev-flex-date" id="ev-flex-date" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    required>
                                    <option value="" data-constraints="@Required">Are you flexible with the check in/out
                                        date:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto; padding:10px;">
                            <div class="form-wrap">
                                <select name="ev-flex-time" id="ev-flex-time" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    required>
                                    <option value="" data-constraints="@Required">Are you flexible with the check in/out
                                        time:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                    </div>




                    <div class="col-md-12" style="padding:10px; display: flex;">
                        <div class="" style="width: 33%;">
                            <!-- <input class="form-input" id="ev-vendors-pickup" type="text" name="ev-vendors-pickup" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="ev-vendors-pickup" style="color:white;margin-top: 9px;">Will you need next day vendors pickup:</label> -->
                            <select name="ev-bed" id="ev-bed" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                required>
                                <option value="" data-constraints="@Required"># of Bedrooms Needed:</option>
                                <option value="1-2">1-2</option>
                                <option value="3-4">3-4</option>
                                <option value="5-6">5-6</option>
                                <option value="7-8">7-8</option>
                                <option value="9-10">9-10</option>
                                <option value="10+">10+</option>
                            </select>
                        </div>

                        <div class="" style="margin: auto;width: 33%; margin-block: inherit;">
                            <!-- <input class="form-input" id="ev-bathroom" type="text" name="ev-bathroom" style="background:#0E0C0D; color:white;">
                    <label class="form-label" for="ev-bathroom" style="color:white;margin-top: 9px;margin-left: 35%;"># of Bathrooms Needed:</label> -->
                            <select name="ev-bathroom" id="ev-bathroom" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                required>
                                <option value="" data-constraints="@Required"># of Bathrooms Needed:</option>
                                <option value="1-2">1-2</option>
                                <option value="3-4">3-4</option>
                                <option value="5-6">5-6</option>
                                <option value="7-8">7-8</option>
                                <option value="9-10">9-10</option>
                                <option value="10+">10+</option>
                            </select>
                        </div>

                        <div class="" style="width: 33%;">
                            <select name="ev-attendees" id="ev-attendees" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                data-constraints="@Required" required>
                                <option selected># of Expected attendees (including staff):</option>
                                <option value='0-30'>0-30</option>
                                <option value='30-60'>30-60</option>
                                <option value='60-90'>60-90</option>
                                <option value='90-120'>90-120</option>
                                <option value='120-150'>120-150</option>
                                <option value='150-180'>150-180</option>
                                <option value='180-200'>180-200</option>
                                <option value='200-250'>200-250</option>
                                <option value='250-300'>250-300</option>
                                <option value='300-400'>300-400</option>
                                <option value='400-500'>400-500</option>
                                <option value='500+'>500+</option>
                            </select>
                        </div>
                    </div>


                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <!-- <input class="form-input" id="ev-city-2" type="text" style="background:#0E0C0D; color:white;" name="ev-city-2" data-constraints="@Required" required>
                          <label class="form-label" for="ev-city-2" style="color:white;">What city/area are you intersted in:</label> -->
                                <select name="ev-city-2" id="ev-city-2" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" onchange="ShowHideDiv22()"
                                    required>
                                    <option value="" data-constraints="@Required">What city/area are you intersted in:</option>
                                    <option value='Beverly Hills'>Beverly Hills</option>
                                    <option value='Bel Air'>Bellair</option>
                                    <option value='Brentwood'>Brentwood</option>
                                    <option value='DTLA'>DTLA</option>
                                    <option value='Encino'>Encino</option>
                                    <option value='Hollywood'>Hollywood</option>
                                    <option value='Hollywood Hills'>Hollywood Hills</option>
                                    <option value='Holmby Hills'>Holmby Hills</option>
                                    <option value='Malibu'>Malibu</option>
                                    <option value='Newport Beach'>Newport Beach</option>
                                    <option value='Sherman Oaks'>Sherman Oaks</option>
                                    <option value='Studio City'>Studio City</option>
                                    <option value='Venice'>Venice</option>
                                    <option value='Traditional'>West Hollywood</option>
                                    <option value='Westwood'>Westwood</option>
                                    <option value='Woodland Hills'>Woodland Hills</option>
                                    <option value='Tarzana'>Tarzana</option>
                                    <option value='Other'>Other</option>
                                </select>
                            </div>
                            <div class="col-md-12" id="ev-info_city" style="padding:10px;display:none;">
                              <div class="form-wrap">
                                  <!-- <intextareaput class="form-input" id="vr-other_info" type="textarea" name="vr-other_info" style="background:#0E0C0D; color:white;"> -->
                                  <textarea class="form-control" rows="2" id="ev-info_city" name="ev-info_city"
                                      style="background:#0E0C0D; color:white;" placeholder="Please enter the information about the city:"></textarea>
                                  <!-- <label class="form-label" for="ev-info_city" style="color:white;">Please describe:</label> -->
                              </div>
                          </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                            <div class="form-wrap">
                                <!-- <input class="form-input" id="ev-style-2" type="text" style="background:#0E0C0D; color:white;" name="ev-style-2" data-constraints="@Required" required>
                          <label class="form-label" for="ev-style-2" style="color:white;">What house style are you interested in:</label> -->
                                <select name="ev-style-2" id="ev-style-2" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" onchange="ShowHideDiv23()"
                                    required>
                                    <option value="" data-constraints="@Required" required>What house style are you interested in:</option>
                                    <option value='Asian'>Asian</option>
                                    <option value='Desert'>Desert</option>
                                    <option value='French'>French</option>
                                    <option value='Gothic/ Mid-Century'>Gothic/ Mid-Century</option> 
                                    <option value='Hi-Tech'>Hi-Tech</option>
                                    <option value='Mediteranean'>Mediteranean</option>
                                    <option value='Modern'>Modern</option>
                                    <option value='Spanish'>Spanish</option>
                                    <option value='Traditional'>Traditional</option>
                                    <option value='Vintage'>Vintage</option>
                                    <option value='Victorian'>Victorian</option>
                                    <option value='Other'>Other</option>
                                </select>
                            </div>
                            <div class="col-md-12" id="ev-info_house_style" style="padding:10px;display:none;">
                              <div class="form-wrap">
                                  <!-- <intextareaput class="form-input" id="vr-other_info" type="textarea" name="vr-other_info" style="background:#0E0C0D; color:white;"> -->
                                  <textarea class="form-control" rows="2" id="ev-info_house_style" name="ev-info_house_style"
                                      style="background:#0E0C0D; color:white;" placeholder="Please enter the information about the house style:"></textarea>
                                  <!-- <label class="form-label" for="ev-info_house_style" style="color:white;">Please describe:</label> -->
                              </div>
                          </div>
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <select name="ev-serve-alco" id="ev-serve-alco"
                                    class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" required>
                                    <option value="">Will you be serving alcohol:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px; margin-bottom:10px;">
                            <div class="form-wrap">
                                <select name="ev-sell-alco" id="ev-sell-alco" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" required>
                                    <option value="">Will you be selling alcohol:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <select name="ev-visits" id="ev-visits" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" required>
                                    <option value="">Will you be having any professional filming:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <select name="ev-app_behalf" id="ev-app_behalf"
                                    class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" required>
                                    <option value="">Are you applying on behalf of your self:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <select name="ev-hear" id="ev-hear" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                required>
                                <option value="" data-constraints="@Required">Will you have any bodyguards during your rental:</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <!-- <select name="ev-event-plan" id="ev-event-plan" class="form-input" style="background:#0E0C0D; color:white;" required>
                          <option value="" data-constraints="@Required" >Please describe the event:</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select> -->
                            <input class="form-input" id="ev-event-plan" type="text" name="ev-event-plan"
                                style="background:#0E0C0D; color:white;" required>
                            <label class="form-label" for="ev-event-plan" style="color:white;">Please describe the event:</label>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <input class="form-input" id="ev-event_ticketed" type="text" name="ev-event_ticketed"
                                style="background:#0E0C0D; color:white;" required>
                            <label class="form-label" for="ev-event_ticketed" style="color:white;"> Will this be a ticketed event:</label>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <select name="ev-furn" id="ev-furn" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                required>
                                <option value="" data-constraints="@Required">Will you need to move any of the furniture:</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                <option value="maybe">Maybe</option>
                            </select>
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <select name="ev-deco" id="ev-deco" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    required>
                                    <option value="" data-constraints="@Required">Will you be adding any decorations:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                    <option value="maybe">Maybe</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                            <div class="form-wrap">
                                <!-- <input class="form-input" id="ev-parts" type="text" style="background:#0E0C0D; color:white;" name="ev-parts" data-constraints="@Required" required>
                      <label class="form-label" for="ev-parts" style="color:white;">Parts of the house to be used:</label> -->
                                <select name="ev-parts" id="ev-parts" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    required>
                                    <option value="" data-constraints="@Required">Parts of the house to be used:</option>
                                    <option value="Indoor">Indoor</option>
                                    <option value="Outdoor">Outdoor</option>
                                    <option value="Both">Both</option>
                                    <option value="Not Sure">Not Sure</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <select name="ev-park-sp" id="ev-park-sp" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    required>
                                    <option value="" data-constraints="@Required">Do you need additional parking space:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                            <div class="form-wrap">
                                <select name="ev-high_volt" id="ev-high_volt" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    required>
                                    <option value="" data-constraints="@Required">Will you be having any high voltage lighting equipment:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                    <option value="maybe">Maybe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="ev-flex-date" id="ev-flex-date" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="" data-constraints="@Required" required>Are you flexible with the check in/out date:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="ev-flex-time" id="ev-flex-time" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="" data-constraints="@Required" required>Are you flexible with the check in/out time:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                    </div> -->
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <!-- <div class="form-wrap">
                          <select name="ev-pets" id="ev-pets" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="" data-constraints="@Required" required>Are you bringing any pets:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div> -->

                            <div class="form-wrap">
                                <select name="ev-pets" id="ev-pets" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" onchange="ShowHideDiv5()" required>
                                    <option value="">Are you bringing any pets:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                <select name="ev-no_pets" id="ev-no_pets" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px; display:none;">
                                    <option value="1" selected>No of pets:</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                <select name="ev-yes_pets" id="ev-yes_pets" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px; display:none;">
                                    <option value="0" selected>Pet Size:</option>
                                    <option value="Up to 20 Pounds">Up to 20 pounds</option>
                                    <option value="20-50 pounds">20-50 pounds</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                            <div class="form-wrap">
                                <!-- <input class="form-input" id="ev-exocit_animals" type="text" style="background:#0E0C0D; color:white;" name="ev-exocit_animals" data-constraints="@Required" required>
                      <label class="form-label" for="ev-exocit_animals" style="color:white;">Are you bring any exotic animals:</label> -->
                                <select name="ev-exocit_animals" id="ev-exocit_animals"
                                    class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" onchange="ShowHideDiv16()" required>
                                    <option value="">Are you bring any exotic animals:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" id="ev-exotic_info" style="padding:10px;display:none;">
                        <div class="form-wrap">
                            <!-- <intextareaput class="form-input" id="vr-other_info" type="textarea" name="vr-other_info" style="background:#0E0C0D; color:white;"> -->
                            <textarea class="form-control" rows="3" id="ev-exotic_info" name="ev-exotic_info"
                                style="background:#0E0C0D; color:white;" placeholder="Please describe:"></textarea>
                            <!-- <label class="form-label" for="ev-exotic_info" style="color:white;">Please describe:</label> -->
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <select name="ev-hear" id="ev-hear" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    required>
                                    <option value="" data-constraints="@Required">Will you have any minors:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto; padding:10px;">
                            <div class="form-wrap">
                                <input class="form-input" id="ev-info" type="text" name="ev-info"
                                    style="background:#0E0C0D; color:white;" required>
                                <label class="form-label" for="ev-info" style="color:white;">Any additional information
                                    you wish to share:</label>
                            </div>
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <select name="ev-tickets" id="ev-tickets" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    required>
                                    <option value="" data-constraints="@Required">Will you be selling tickets to your
                                        event:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto; padding:10px;">
                            <div class="form-wrap">
                                <select name="ev-event_type" id="ev-event_type"
                                    class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" required>
                                    <option value="">Event type:</option>
                                    <option value="Private">Private</option>
                                    <option value="Corporate">Corporate</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <input class="form-input" id="ev-guest-arr" type="text" name="ev-guest-arr"
                                    style="background:#0E0C0D; color:white;" required>
                                <label class="form-label" for="ev-guest-arr" style="color:white;">How will guests be
                                    arriving:</label>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto; padding:10px;">
                            <div class="form-wrap">
                                <!-- <input class="form-input" type="text" id="ev-seated" name="ev-seated" style="background:#0E0C0D; color:white;">
                      <label class="form-label" for="ev-seated" style="color:white;">Will this be a seated or standing event:</label> -->
                                <select name="ev-seated" id="ev-seated" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" required>
                                    <option value="">Will this be a seated or standing event:</option>
                                    <option value="Seated">Seated</option>
                                    <option value="Standing">Standing</option>
                                    <option value="Both">Both</option>
                                    <option value="Not Sure">Not Sure</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="" style="display: flex;">
                  <div class="col-md-6" style="margin-left: auto; padding:10px;">
                    <div class="form-wrap">
                      <input class="form-input" id="ev-park-spot" type="text" name="ev-park-spot" style="background:#0E0C0D; color:white;">
                      <label class="form-label" for="ev-park-spot" style="color:white;">Number of parking spots needed:</label>
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-right: auto; padding:10px;">
                    <div class="form-wrap">
                      <input class="form-input" type="text" id="ev-hour" name="ev-hour" style="background:#0E0C0D; color:white;">
                      <label class="form-label" for="ev-hour" style="color:white;">Event Hours:</label>
                    </div>
                  </div>
                </div> -->
                    <!-- <div class="" style="display: flex;">
                  <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                    <div class="form-wrap">
                      <input class="form-input" type="time" id="ev-load-time" name="ev-load-time" style="background:#0E0C0D; color:white;">
                      <label class="form-label" for="ev-load-time" style="margin-left: 47px;color:white;">Load in time:</label>
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                    <div class="form-wrap">
                      <input class="form-input" type="time" id="ev-load-out" name="ev-load-out" style="background:#0E0C0D; color:white;">
                      <label class="form-label" for="ev-load-out" style="margin-left: 47px;color:white;">Wrap Up time:</label>
                    </div>
                  </div>
                </div> -->

                    <div class="col-md-12" style="padding:10px; display: flex;">
                        <div class="col-4" style="margin-left: -15px;">
                            <input class="form-input" type="time" id="ev-load-time" name="ev-load-time"
                                style="background:#0E0C0D; color:white;" required>
                            <label class="form-label" for="ev-load-time"
                                style="margin-left: 60px;color:white;margin-top: 0.7%;">Load in time:</label>
                        </div>

                        <div class="col-4" style="flex: 0 0 35% !important;max-width: 35%;margin-left: -8px;">
                            <input class="form-input" type="text" id="ev-hour" name="ev-hour"
                                style="background:#0E0C0D; color:white;" placeholder="Event Hours:" required>
                            <!-- <label class="form-label" for="ev-hour" style="color:white;margin-top: 0.7%;">Event Hours:</label> -->
                        </div>

                        <div class="col-4" style="flex: 0 0 37% !important;max-width: 36%;margin-left: -16px;">
                            <input class="form-input" type="time" id="ev-load-out" name="ev-load-out"
                                style="background:#0E0C0D; color:white;" required>
                            <label class="form-label" for="ev-load-out"
                                style="color:white;margin-top: 0.7%;margin-left: 55px;">Wrap Up time:</label>
                        </div>
                    </div>

                    <!-- <div class="col-md-12" style="padding:10px;">
                  <div class="form-wrap">
                    <input class="form-input" id="ev-vehicles" type="text" name="ev-vehicles" style="background:#0E0C0D; color:white;">
                    <label class="form-label" for="ev-vehicles" style="color:white;">How many vehicles do you anticipate will park on the street:</label>
                  </div>
                </div> -->
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <input class="form-input" id="ev-park-spot" type="text" name="ev-park-spot"
                                    style="background:#0E0C0D; color:white;" required>
                                <label class="form-label" for="ev-park-spot" style="color:white;">Number of parking
                                    spots needed:</label>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto; padding:10px;">
                            <div class="form-wrap">
                                <input class="form-input" id="ev-vehicles" type="text" name="ev-vehicles"
                                    style="background:#0E0C0D; color:white;" required>
                                <label class="form-label" for="ev-vehicles" style="color:white;">How many vehicles do
                                    you anticipate will park on the street:</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <input class="form-input" id="ev-acc" type="text" name="ev-acc"
                                style="background:#0E0C0D; color:white;" required>
                            <label class="form-label" for="ev-acc" style="color:white;">Do you have any special
                                accessibility requirements:</label>
                        </div>
                    </div>
                    <!-- <div class="col-md-12" style="padding:10px;">
               <div class="form-wrap">
                 <input class="form-input" id="ev-add-serv" type="text" name="ev-add-serv" style="background:#0E0C0D; color:white;">
                 <label class="form-label" for="ev-add-serv" style="color:white;">Are you interested in any additonal services:</label>
               </div>
               </div> -->
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <input class="form-input" id="ev-vendors-anti" type="text" name="ev-vendors-anti"
                                style="background:#0E0C0D; color:white;" required>
                            <label class="form-label" for="ev-vendors-anti" style="color:white;">How many vendors do you
                                anticipate will service the event:</label>
                        </div>
                    </div>
                    <!-- <div class="col-md-12" style="padding:10px;">
                  <div class="form-wrap">
                    <input class="form-input" id="ev-behalf_yourself" type="text" name="ev-behalf_yourself" style="background:#0E0C0D; color:white;">
                    <label class="form-label" for="ev-behalf_yourself" style="color:white;">Are you applying on behalf of your self?</label>
                  </div>
                </div> -->
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <input class="form-input" id="ev-avg_ld_gear" type="text" name="ev-avg_ld_gear"
                                style="background:#0E0C0D; color:white;" required>
                            <label class="form-label" for="ev-avg_ld_gear" style="color:white;">Please describe the
                                average gear load-in?</label>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <select name="ev-load_serv" id="ev-load_serv" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                data-constraints="@Required" required>
                                <option value="">Do you need lodging services/ stay over night:</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding:10px; display: flex;">
                        <div class="" style="width: 33%;">
                            <!-- <input class="form-input" id="ev-vendors-pickup" type="text" name="ev-vendors-pickup" style="background:#0E0C0D; color:white;">
                    <label class="form-label" for="ev-vendors-pickup" style="color:white;margin-top: 9px;">Will you need next day vendors pickup:</label> -->
                            <select name="ev-vendors-pickup" id="ev-vendors-pickup"
                                class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                data-constraints="@Required" required>
                                <option value="">Will you need next day vendors pickup:</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                <option value="maybe">Maybe</option>
                            </select>
                        </div>

                        <div class="" style="margin: auto;width: 33%; margin-block: inherit;">
                            <select name="ev-rent" id="ev-rent" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                required>
                                <option value="" data-constraints="@Required" required>What is your total rental budget:
                                </option>
                                <option value="5000">Up to $5,000</option>
                                <option value="5,000-10,000">$5,000-$10,000</option>
                                <option value="10,000-25,000">$10,000-$25,000</option>
                                <option value="25,000-50,000">$25,000-$50,000</option>
                                <option value="50,000-100,000">$50,000-$100,000</option>
                                <option value="100,000-250,000">$100,000-$250,000</option>
                                <option value="250k+">$250k+</option>
                            </select>
                        </div>

                        <div class="" style="width: 33%;">
                            <select name="ev-hear-2" id="ev-hear-2" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" onchange="ShowHideDiv21()"
                                required>
                                <option value="" data-constraints="@Required">How did you hear about us:</option>
                                <option value="Social Media">Social Media</option>
                                <option value="Google">Google</option>
                                <option value="Yelp">Yelp</option>
                                <option value="Referral">Referral</option>
                                <option value="3rd Party Booking Website">3rd Party Booking Website</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12" id="ev-where_hear" style="padding:10px;display:none;">
                        <div class="form-wrap">
                            <!-- <intextareaput class="form-input" id="vr-other_info" type="textarea" name="vr-other_info" style="background:#0E0C0D; color:white;"> -->
                            <textarea class="form-control" rows="3" id="ev-where_hear" name="ev-where_hear"
                                style="background:#0E0C0D; color:white;" placeholder ="Please fill where did you hear about us"></textarea>
                            <!-- <label class="form-label" for="ev-where_hear" style="color:white;">Please fill your required services:</label> -->
                        </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <select name="ev-other-serv" id="ev-other-serv" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                onchange="ShowHideDiv13()" required>
                                <option value="">Are you interested in any additonal services:</option>
                                <option value="Event Planner">Event Planner</option>
                                <option value="Private Chef">Private Chef</option>
                                <option value="Shuttle Service">Shuttle Service</option>
                                <option value="Valet Service">Valet Service</option>                                
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12" id="ev-other" style="padding:10px;display:none;">
                        <div class="form-wrap">
                            <!-- <intextareaput class="form-input" id="vr-other_info" type="textarea" name="vr-other_info" style="background:#0E0C0D; color:white;"> -->
                            <textarea class="form-control" rows="3" id="ev-other_info" name="ev-other_info"
                                style="background:#0E0C0D; color:white;"></textarea>
                            <label class="form-label" for="ev-other_info" style="color:white;">Please fill your required services:</label>
                        </div>
                    </div>
                    <br>
                    <article class="title-classic">

                        <div class="title-classic" style="margin-left:15px;">
                            <input class="form-input" id="initials" type="text" value="" placeholder="Initials"
                                style="background:#0E0C0D; color:white; height:-20px; width:100px;" required>
                            <label for="confirm" style="margin-left:5px; color:white;">I certify that all of the
                                information here is correct</label>
                        </div>
                    </article><br><br>
                    <center>
                        <button class="button button-black-outline" type="submit" id="btnSubmit1" data-toggle="modal"
                            data-target="#exampleModalCenter">Submit</button>
                    </center>
                </form>
            </section>

            <!-- Event Venue End -->


            <!-- Film Locations Rentals -->

            <section name="film-location" id="film-location" style="display:none; width:100%;">
                <form name="myemailform" class="rd-form rd-form-variant-2 rd-mailform" method="post"
                    action="form-to-email.php">
                    <input type="text" name="Production" value="Film Locations Rentals" style="display:none;">
                    <input type="text" id="asv_2" name="vacation1" style="display:none;">
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <input class="form-input" id="f-name" type="text" name="f-name"
                                    style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required"
                                    required>
                                <label class="form-label" for="f-name" style="color:white;">Full Name:</label>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto; padding:10px;">
                            <div class="form-wrap">
                                <input class="form-input" id="f-mail" type="mail" name="f-mail"
                                    data-constraints="@Required" style="background:#0E0C0D; color:white; height:30px;"
                                    required>
                                <label class="form-label" for="f-mail" style="color:white;">Email Address:</label>
                            </div>
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <!-- <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="f-phone" type="text" style="background:#0E0C0D; color:white;" name="f-phone" data-constraints="@Required" required>
                          <label class="form-label" for="f-phone" style="color:white;">Phone Number:</label>
                        </div>
                      </div> -->
                        <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                            <div class="form-wrap" style="display: grid;">
                                <div style="max-width:75px;" onclick="enable_disable3()">
                                    <input class="form-input txtPhone" id='2txtPhone' type="tel"
                                        style="background:#0E0C0D;  color:white;" name="txtPhone" />
                                </div>
                                <div style="margin-top: -60px;margin-left: 75px;">
                                    <input class="form-input" id='txtPhone3' type='tel' name="txtPhone3"
                                        style="background:#0E0C0D; color:white; height:30px;" disabled required />
                                    <label class="form-label" for="txtPhone3"
                                        style="margin-left: 75px; color:white;">Phone
                                        Number:</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                            <div class="form-wrap">
                                <input class="form-input" id="f-insta" type="text" name="f-insta"
                                    style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required"
                                    required>
                                <label class="form-label" for="f-insta" style="color:white;">Social Media Handle (example: Facebook, Instagram, LinkedIn)</label>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="date" id="vr-start-date" name="vr-start-date" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="date" id="vr-end-date" name="vr-end-date" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="time" id="vr-start-time" name="vr-start-time" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="time" id="vr-end-time" name="vr-end-time" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                    </div> -->
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                            <div class="form-wrap">
                                <input class="form-input chkdt datepicker" id="f-start-date" type="text"
                                    name="f-start-date" style="background:#0E0C0D; color:white;"
                                    placeholder="Requested Check In Date:" required>
                                <!-- <label class="form-label" for="f-start-date" style="color:white;">Requested Check In Date:</label> -->
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                            <div class="form-wrap ">
                                <!-- <input class="form-input" type="text" id="f-end-date" name="f-end-date" style="background:#0E0C0D; color:white;" > -->
                                <input class="form-input datepicker" id="f-end-date" type="text" name="f-end-date"
                                    style="background:#0E0C0D; color:white;" placeholder="Requested Check Out Date:"
                                    required>
                                <!-- <label class="form-label" for="vr-end-date" style="color:white;">Requested Check Out Date:</label> -->
                            </div>
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                            <div class="form-wrap input_wrapper_div1">
                                <!-- <input class="form-input" type="time" id="vr-start-time" name="vr-start-time"
                                style="background:#0E0C0D; color:white;">
                            <p class="reqest_para1">Request check In time</p> -->
                                <!-- <input class="form-input" type="time" id="f-start-time" name="f-start-time"
                                    style="background:#0E0C0D; color:white;" required>
                                <label class="form-label" for="f-start-time"
                                    style="margin-left: 47px;color:white;">Requested Check In Time:</label> -->
                                <!-- <label class="form-label" for="f-start-time" style="color:white;">Requested Check In Time:</label> -->
                                <select name="f-start-time" id="f-start-time" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 data-constraints="@Required" required>
                                <option value="">Requested Check In Time:</option>
                                <?php  require("time_dropdown.php"); ?>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                            <div class="form-wrap input_wrapper_div">
                                <!-- <input class="form-input" type="time" id="f-end-time" name="f-end-time"
                                style="background:#0E0C0D; color:white;">
                            <p class="reqest_para">Request check Out time</p> -->
                                <!-- <input class="form-input" type="time" id="f-end-time" name="f-end-time"
                                    style="background:#0E0C0D; color:white;" required>
                                <label class="form-label" for="f-end-time"
                                    style="margin-left: 47px;color:white;">Requested Check Out Time:</label> -->
                                <!-- <label class="form-label" for="vr-start-time" style="color:white;">Requested Check In Time:</label> -->
                                <!-- <label class="form-label" for="vr-end-time" style="color:white;">Requested Check Out Time:</label> -->
                                <select name="f-end-time" id="f-end-time" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 data-constraints="@Required" required>
                                <option value="">Requested Check Out Time:</option>
                                <?php  require("time_dropdown.php"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <select name="f-flex-date" id="f-flex-date" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" required>
                                    <option value="">Are you flexible with the check in/out date:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;padding:10px;">
                            <div class="form-wrap">
                                <select name="f-flex-time" id="f-flex-time" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" required>
                                    <option value="">Are you flexible with the check in/out time:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                            <div class="form-wrap">
                                <!-- <input class="form-input" id="f-bed" type="text" name="f-bed" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                          <label class="form-label" for="f-bed" style="color:white;"># of Bedrooms Needed:</label> -->
                                <select name="f-bed" id="f-bed" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    required>
                                    <option value="" data-constraints="@Required" required># of Bedrooms Needed:
                                    </option>
                                    <option value="1-2">1-2</option>
                                    <option value="3-4">3-4</option>
                                    <option value="5-6">5-6</option>
                                    <option value="7-8">7-8</option>
                                    <option value="9-10">9-10</option>
                                    <option value="10+">10+</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                            <div class="form-wrap">
                                <input class="form-input" id="f-stay" type="text" name="f-stay"
                                    style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                                <label class="form-label" for="f-stay" style="color:white;"># of expected staff +
                                    Talent:</label>
                            </div>
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <!-- <input class="form-input" id="f-city" type="text" style="background:#0E0C0D; color:white;" name="f-city" data-constraints="@Required" required>
                          <label class="form-label" for="f-city" style="color:white;">What city/area are you intersted in:</label> -->
                                <select name="f-city" id="f-city" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" onchange="ShowHideDiv25()"
                                    required>
                                    <option value="" data-constraints="@Required">What city/area are you intersted in:</option>
                                    <option value='Beverly Hills'>Beverly Hills</option>
                                    <option value='Bel Air'>Bellair</option>
                                    <option value='Brentwood'>Brentwood</option>
                                    <option value='DTLA'>DTLA</option>
                                    <option value='Encino'>Encino</option>
                                    <option value='Hollywood'>Hollywood</option>
                                    <option value='Hollywood Hills'>Hollywood Hills</option>
                                    <option value='Holmby Hills'>Holmby Hills</option>
                                    <option value='Malibu'>Malibu</option>
                                    <option value='Newport Beach'>Newport Beach</option>
                                    <option value='Sherman Oaks'>Sherman Oaks</option>
                                    <option value='Studio City'>Studio City</option>
                                    <option value='Venice'>Venice</option>
                                    <option value='Traditional'>West Hollywood</option>
                                    <option value='Westwood'>Westwood</option>
                                    <option value='Woodland Hills'>Woodland Hills</option>
                                    <option value='Tarzana'>Tarzana</option>
                                    <option value='Other'>Other</option>
                                </select>
                            </div>
                            <div class="col-md-12" id="f-other_city" style="padding:10px;display:none;">
                                <div class="form-wrap">
                                    <!-- <intextareaput class="form-input" id="vr-other_info" type="textarea" name="vr-other_info" style="background:#0E0C0D; color:white;"> -->
                                    <textarea class="form-control" rows="3" id="f-other_city" name="f-other_city" 
                                        style="background:#0E0C0D; color:white;" placeholder="Please fill the information about the city/area:"></textarea>
                                    <!-- <label class="form-label" for="f-other_city" style="color:white;">Please describe:</label> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                            <div class="form-wrap">
                                <!-- <input class="form-input" id="f-style" type="text" style="background:#0E0C0D; color:white;" name="f-style" data-constraints="@Required" required>
                          <label class="form-label" for="f-style" style="color:white;">What house style are you interested in:</label> -->
                                <select name="f-style" id="f-style" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" onchange="ShowHideDiv26()"
                                    required>
                                    <option value="" data-constraints="@Required">What house style are you interested in:</option>
                                    <option value='Asian'>Asian</option>
                                    <option value='Desert'>Desert</option>
                                    <option value='French'>French</option>
                                    <option value='Gothic/ Mid-Century '>Gothic/ Mid-Century </option>
                                    <option value='Hi-Tech'>Hi-Tech</option>
                                    <option value='Mediteranean'>Mediteranean</option>
                                    <option value='Modern'>Modern</option>
                                    <option value='Spanish'>Spanish</option>
                                    <option value='Traditional'>Traditional</option>
                                    <option value='Vintage'>Vintage</option>
                                    <option value='Victorian'>Victorian</option>
                                    <option value='Other'>Other</option>
                                </select>
                            </div>
                            <div class="col-md-12" id="f-house_style" style="padding:10px;display:none;">
                                <div class="form-wrap">
                                    <!-- <intextareaput class="form-input" id="vr-other_info" type="textarea" name="vr-other_info" style="background:#0E0C0D; color:white;"> -->
                                    <textarea class="form-control" rows="3" id="f-house_style" name="f-house_style" 
                                        style="background:#0E0C0D; color:white;" placeholder="Please fill information about house style:"></textarea>
                                    <!-- <label class="form-label" for="f-house_style" style="color:white;">Please describe:</label> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <select name="f-high_volt" id="f-high_volt" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" required>
                                    <option value="">Will you be having any high voltage lighting equipment? </option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                    <option value="maybe">Maybe</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <select name="f-load_serv" id="f-load_serv" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" required>
                                    <option value=""> Do you need lodging services/ stay over night:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <select name="f-hear" id="f-hear" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    required>
                                    <option value="" data-constraints="@Required" required>What is your total rental
                                        budget:</option>
                                    <option value="5000">Up to $5,000</option>
                                    <option value="5,000-10,000">$5,000-$10,000</option>
                                    <option value="10,000-25,000">$10,000-$25,000</option>
                                    <option value="25,000-50,000">$25,000-$50,000</option>
                                    <option value="50,000-100,000">$50,000-$100,000</option>
                                    <option value="100,000-250,000">$100,000-$250,000</option>
                                    <option value="250k+">$250k+</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px; margin-bottom:10px;">
                            <div class="form-wrap">
                                <select name="f-flex-pr" id="f-flex-pr" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" required>
                                    <option value="">Will you be applying for a permit:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <select name="f-production" id="f-production" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" onchange="ShowHideDiv27()"
                                    required>
                                    <option value="" data-constraints="@Required" required>Production Type:</option>
                                    <option value="Adult Content">Adult Content</option>
                                    <option value="Commercial">Commercial</option>
                                    <option value="Film">Film</option>
                                    <option value="Infomercial">Infomercial</option>
                                    <option value="Movie">Movie</option>
                                    <option value="Music Video">Music Video</option>
                                    <option value="Photoshoot">Photoshoot</option>
                                    <option value="Podcast">Podcast</option>
                                    <option value="Reality Show">Reality Show</option>                                   
                                    <option value="Student Film">Student Film</option>
                                    <option value="YouTube">YouTube</option>
                                    <option value="Vlogs">Vlogs</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-12" id="f-info_production" style="padding:10px;display:none;">
                                <div class="form-wrap">
                                    <!-- <intextareaput class="form-input" id="vr-other_info" type="textarea" name="vr-other_info" style="background:#0E0C0D; color:white;"> -->
                                    <textarea class="form-control" rows="3" id="f-info_production" name="f-info_production" 
                                        style="background:#0E0C0D; color:white;" placeholder="Please fill information about production type:"></textarea>
                                    <!-- <label class="form-label" for="f-info_production" style="color:white;">Please describe:</label> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px; margin-bottom:10px;">
                            <div class="form-wrap">
                                <select name="f-house_part" id="f-house_part" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" required>
                                    <option value="">Parts of the house needed to be used:</option>
                                    <option value="Indoores">Indoor</option>
                                    <option value="Outdoor">Outdoor</option>
                                    <option value="Both">Both</option>
                                    <option value="Not Sure">Not Sure</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <input class="form-input" id="f-company" type="text"
                                    style="background:#0E0C0D; color:white;" name="f-company"
                                    data-constraints="@Required" required>
                                <label class="form-label" for="f-company" style="color:white;">Company Name:</label>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <select name="f-parking-space" id="f-parking-space"
                                    class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" required>
                                    <option value="">Do you need additional parking space:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <select name="f-attendees" id="f-attendees" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                data-constraints="@Required" required>
                                <option># of attendees:</option>
                                <option value='0-30'>0-30</option>
                                <option value='30-60'>30-60</option>
                                <option value='60-90'>60-90</option>
                                <option value='90-120'>90-120</option>
                                <option value='120-150'>120-150</option>
                                <option value='150-180'>150-180</option>
                                <option value='180-200'>180-200</option>
                                <option value='200-250'>200-250</option>
                                <option value='250-300'>250-300</option>
                                <option value='300-400'>300-400</option>
                                <option value='400-500'>400-500</option>
                                <option value='500+'>500+</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <select name="f-guards" id="f-guards" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                data-constraints="@Required" required>
                                <option value="">Will you have any bodyguards during your rental:</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <select name="f-furniture" id="f-furniture" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                data-constraints="@Required" required>
                                <option value="">Will you need to move any of the furniture:</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div> -->

                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <select name="f-pets" id="f-pets" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" onchange="ShowHideDiv6()" required>
                                    <option value="">Are you bringing any pets:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                <select name="f-no_pets" id="f-no_pets" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px; display:none;">
                                    <option value="1" selected>No of pets:</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                <select name="f-yes_pets" id="f-yes_pets" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px; display:none;">
                                    <option value="0" selected>Pet Size:</option>
                                    <option value="Up to 20 Pounds">Up to 20 pounds</option>
                                    <option value="20-50 pounds">20-50 pounds</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" style="padding:10px;">
                            <div class="form-wrap">
                                <select name="f-hear_us" id="f-hear_us" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" onchange="ShowHideDiv24()"
                                    required>
                                    <option value="" data-constraints="@Required">How did you hear about us:</option>a
                                    <option value="Social Media">Social Media</option>
                                    <option value="Google">Google</option>
                                    <option value="Yelp">Yelp</option>
                                    <option value="Referral">Referral</option>
                                    <option value="3rd Party Booking Website">3rd Party Booking Website</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" id="f-where_hear" style="padding:10px;display:none;">
                        <div class="form-wrap">
                            <!-- <intextareaput class="form-input" id="vr-other_info" type="textarea" name="vr-other_info" style="background:#0E0C0D; color:white;"> -->
                            <textarea class="form-control" rows="3" id="f-where_hear" name="f-where_hear" 
                                style="background:#0E0C0D; color:white;" placeholder="Please fill where did you hear about us:"></textarea>
                            <!-- <label class="form-label" for="f-where_hear" style="color:white;">Please describe:</label> -->
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <!-- <div class="form-wrap">
                          <select name="ev-pets" id="ev-pets" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="" data-constraints="@Required" required>Are you bringing any pets:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div> -->

                            <div class="form-wrap">
                                <select name="f-house_part" id="f-house_part" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" required>
                                    <option value="">Parts of the house needed to be used</option>
                                    <option value="Indoor">Indoor</option>
                                    <option value="Outdoor">Outdoor</option>
                                    <option value="Both">Both</option>
                                    <option value="Not Sure">Not Sure</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                            <div class="form-wrap">
                                <!-- <input class="form-input" id="ev-exocit_animals" type="text" style="background:#0E0C0D; color:white;" name="ev-exocit_animals" data-constraints="@Required" required>
                      <label class="form-label" for="ev-exocit_animals" style="color:white;">Are you bring any exotic animals:</label> -->
                                <select name="f-exocit_animals" id="f-exocit_animals"
                                    class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" onchange="ShowHideDiv17()" required>
                                    <option value="">Are you bring any exotic animals:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" id="f-exotic_info" style="padding:10px;display:none;">
                        <div class="form-wrap">
                            <!-- <intextareaput class="form-input" id="vr-other_info" type="textarea" name="vr-other_info" style="background:#0E0C0D; color:white;"> -->
                            <textarea class="form-control" rows="3" id="f-exotic_info" name="f-exotic_info"
                                style="background:#0E0C0D; color:white;" placeholder="Please describe:"></textarea>
                            <!-- <label class="form-label" for="f-exotic_info" style="color:white;">Please describe:</label> -->
                        </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <input class="form-input" id="f-info" type="text" name="f-info"
                                style="background:#0E0C0D; color:white;" required>
                            <label class="form-label" for="f-info" style="color:white;">Any additional information you
                                wish to share:</label>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <input class="form-input" id="f-vehicles" type="text" name="f-vehicles"
                                style="background:#0E0C0D; color:white;" required>
                            <label class="form-label" for="f-vehicles" style="color:white;">How many vehicles do you
                                anticipate will park on the street:</label>
                        </div>
                    </div>
                    <!-- <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="f-production-type" type="text" name="f-production-type" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="f-production-type" style="color:white;">How many vehicles do you anticipate will park on the street</label>
                      </div>
                    </div> -->
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <input class="form-input" id="f-requirements" type="text" name="f-requirements"
                                style="background:#0E0C0D; color:white;" required>
                            <label class="form-label" for="f-requirements" style="color:white;">Do you have any special
                                accessibility requirements: </label>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <input class="form-input" id="f-parking" type="text" name="f-parking"
                                style="background:#0E0C0D; color:white;" required>
                            <label class="form-label" for="f-parking" style="color:white;">Number of parking spots
                                needed:</label>
                        </div>
                    </div>
                    <!-- <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <input class="form-input" id="f-production_type" type="text" name="f-production_type"
                                style="background:#0E0C0D; color:white;" required>
                            <label class="form-label" for="f-production_type" style="color:white;">Production Type:</label>
                        </div>
                    </div> -->
                    <br>
                    <article class="title-classic">

                        <div class="title-classic" style="margin-left:15px;">
                            <input class="form-input" id="initials" type="text" value="" placeholder="Initials"
                                style="background:#0E0C0D; color:white; height:-20px; width:100px;" required>
                            <label for="confirm" style="margin-left:5px; color:white;">I certify that all of the
                                information here is correct</label>
                        </div>
                    </article><br><br>
                    <center>
                        <button class="button button-black-outline" type="submit" id="btnSubmit2" data-toggle="modal"
                            data-target="#exampleModalCenter">Submit</button>
                    </center>
                </form>
            </section>

            <!-- Film Locations Rentals End -->


            <!-- Stay Over + Event -->
            <section name="short-term-stay-event" id="short-term-stay-event" style="display:none; width:100%;">
              <form name="myemailform" class="rd-form rd-form-variant-2 rd-mailform" method="POST" action="form-to-email.php">
                <input type="text" name="shortterm" value="Stay Over + Event" style="display:none;">
                <input type="text" id="asv_3" name="vacation1" style="display:none;">
                <input type="text" name="short-term-stay-event" value="short-term-stay-event" style="display:none;">
                <div class="" style="display: flex;">
                  <div class="col-md-6" style="margin-left: auto; padding:10px;">
                    <div class="form-wrap">
                      <input class="form-input" id="st-name" type="text" name="st-name" style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required" required>
                      <label class="form-label" for="st-name" style="color:white;">Full Name:</label>
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-right: auto; padding:10px;">
                    <div class="form-wrap">
                      <input class="form-input" id="st-mail" type="mail" name="st-mail" data-constraints="@Required" style="background:#0E0C0D; color:white; height:30px;" required>
                      <label class="form-label" for="st-mail" style="color:white;">Email Address:</label>
                    </div>
                  </div>
                </div>
                <!-- <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="st-phone" type="text" style="background:#0E0C0D; color:white;" name="st-phone" data-constraints="@Required" required>
                          <label class="form-label" for="st-phone" style="color:white;">Phone Number:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="st-insta" type="text" name="st-insta" style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required" required>
                          <label class="form-label" for="st-insta" style="color:white;">Social Media Handle (example: Facebook, Instagram, LinkedIn)</label>
                        </div>
                      </div>
                    </div> -->


                <div class="" style="display: flex;">
                  <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                    <div class="form-wrap" style="display: grid;">
                      <div style="max-width:75px;" onclick="enable_disable4()">
                        <input class="form-input txtPhone" id='3txtPhone' type="tel" style="background:#0E0C0D;  color:white;" name="txtPhone" />
                      </div>
                      <div style="margin-top: -60px;margin-left: 75px;">
                        <input class="form-input" id='txtPhone4' type='tel' name="txtPhone4" style="background:#0E0C0D; color:white; height:30px;" disabled />
                        <label class="form-label" for="txtPhone4" style="margin-left: 75px; color:white;">Phone Number:</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                    <div class="form-wrap">
                      <input class="form-input" id="st-insta" type="text" name="st-insta" style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required" required>
                      <label class="form-label" for="st-insta" style="color:white;">Social Media Handle (example: Facebook, Instagram, LinkedIn)</label>
                    </div>
                  </div>
                </div>

                <!-- <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="date" id="ev-start-date" name="ev-start-date" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="date" id="ev-end-date" name="ev-end-date" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="time" id="ev-start-time" name="ev-start-time" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="time" id="ev-end-time" name="ev-end-time" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                    </div> -->
                <div class="" style="display: flex;">
                  <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                    <div class="form-wrap">
                      <input class="form-input chkdt datepicker" id="st-start-date" type="text" name="st-start-date" style="background:#0E0C0D; color:white; " placeholder="Requested Check In Date:">
                      <!-- <label class="form-label" for="st-start-date" style="color:white;">Requested Check In Date:</label> -->
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                    <div class="form-wrap ">
                      <!-- <input class="form-input" type="text" id="st-end-date" name="st-end-date" style="background:#0E0C0D; color:white;" > -->
                      <input class="form-input datepicker" id="st-end-date" type="text" name="st-end-date" style="background:#0E0C0D; color:white;" placeholder="Requested Check Out Date:">
                      <!-- <label class="form-label" for="vr-end-date" style="color:white;">Requested Check Out Date:</label> -->
                    </div>
                  </div>
                </div>
                <div class="" style="display: flex;">
                  <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                    <div class="form-wrap input_wrapper_div1">
                      <!-- <input class="form-input" type="time" id="vr-start-time" name="vr-start-time" style="background:#0E0C0D; color:white;">
                          <p class="reqest_para1">Request check In time</p> -->
                      <input class="form-input" type="time" id="st-start-time" name="st-start-time" style="background:#0E0C0D; color:white;">
                      <label class="form-label" for="st-start-time" style="margin-left: 47px;color:white;">Requested Check In Time:</label>
                      <!-- <label class="form-label" for="vr-start-time" style="color:white;">Requested Check In Time:</label> -->
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                    <div class="form-wrap input_wrapper_div">
                      <!-- <input class="form-input" type="time" id="vr-end-time" name="vr-end-time" style="background:#0E0C0D; color:white;">
                          <p class="reqest_para">Request check Out time</p> -->
                      <input class="form-input" type="time" id="st-end-time" name="st-end-time" style="background:#0E0C0D; color:white;">
                      <label class="form-label" for="st-end-time" style="margin-left: 47px;color:white;">Requested Check Out Time:</label>
                      <!-- <label class="form-label" for="vr-end-time" style="color:white;">Requested Check Out Time:</label> -->
                    </div>
                  </div>
                </div>
                <div class="" style="display: flex;">
                  <div class="col-md-6" style="margin-left: auto; padding:10px;">
                    <div class="form-wrap">
                      <select name="st-flex-date" id="st-flex-date" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;">
                        <option value="" data-constraints="@Required" required>Are you flexible with the check in/out date:</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-right: auto; padding:10px;">
                    <div class="form-wrap">
                      <select name="st-flex-time" id="st-flex-time" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;">
                        <option value="" data-constraints="@Required" required>Are you flexible with the check in/out time:</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="" style="display: flex;">
                  <div class="col-md-6" style="margin-left: auto;  padding:10px;">

                    <div class="form-wrap">
                      <!-- <input class="form-input" id="st-bed" type="text" name="st-bed" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                          <label class="form-label" for="st-bed" style="color:white;"># of Bedrooms Needed:</label> -->
                      <select name="st-bed" id="st-bed" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;">
                        <option value="" data-constraints="@Required" required># of Bedrooms Needed:</option>
                        <option value="1-2">1-2</option>
                        <option value="3-4">3-4</option>
                        <option value="5-6">5-6</option>
                        <option value="7-8">7-8</option>
                        <option value="9-10">9-10</option>
                        <option value="10+">10+</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                    <div class="form-wrap">
                      <select name="st-attendees" id="st-attendees" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" data-constraints="@Required" required>
                        <option selected># of attendees:</option>
                        <option value='0-30'>0-30</option>
                        <option value='30-60'>30-60</option>
                        <option value='60-90'>60-90</option>
                        <option value='90-120'>90-120</option>
                        <option value='120-150'>120-150</option>
                        <option value='150-180'>150-180</option>
                        <option value='180-200'>180-200</option>
                        <option value='200-250'>200-250</option>
                        <option value='250-300'>250-300</option>
                        <option value='300-400'>300-400</option>
                        <option value='400-500'>400-500</option>
                        <option value='500+'>500+</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="" style="display: flex;">
                  <div class="col-md-6" style="margin-left: auto;  padding:10px;">

                    <div class="form-wrap">
                      <!-- <input class="form-input" id="st-guest" type="text" name="st-guest" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                          <label class="form-label" for="st-guest" style="color:white;"># of Guests Staying Over:</label> -->
                      <select name="st-guest" id="st-guest" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;">
                        <option value="" data-constraints="@Required" required># of Guests Staying Over:</option>
                        <option value="1-2">1-2</option>
                        <option value="3-4">3-4</option>
                        <option value="5-6">5-6</option>
                        <option value="7-8">7-8</option>
                        <option value="9-10">9-10</option>
                        <option value="11-15">11-15</option>
                        <option value="16-20">16-20</option>
                        <option value="20+">20+</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                    <div class="form-wrap">
                      <!-- <input class="form-input" id="st-minrs" type="text" name="st-minrs" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                          <label class="form-label" for="st-minrs" style="color:white;">Will you have any minors:</label> -->
                      <select name="st-minrs" id="st-minrs" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" data-constraints="@Required" required>
                        <option value="">Will you have any minors:</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="" style="display: flex;">
                  <div class="col-md-6" style="margin-left: auto; padding:10px;">
                    <div class="form-wrap">
                      <!-- <input class="form-input" id="st-city-2" type="text" style="background:#0E0C0D; color:white;" name="st-city-2" data-constraints="@Required" required>
                          <label class="form-label" for="st-city-2" style="color:white;">What city/area are you intersted in:</label> -->
                      <select name="st-city" id="st-city" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;">
                        <option value="" data-constraints="@Required" required>What city/area are you intersted in:</option>
                        <option value='Beverly Hills'>Beverly Hills</option>
                        <option value='Bel Air'>Bellair</option>
                        <option value='Brentwood'>Brentwood</option>
                        <option value='DTLA'>DTLA</option>
                        <option value='Encino'>Encino</option>
                        <option value='Hollywood'>Hollywood</option>
                        <option value='Hollywood Hills'>Hollywood Hills</option>
                        <option value='Holmby Hills'>Holmby Hills</option>
                        <option value='Malibu'>Malibu</option>
                        <option value='Newport Beach'>Newport Beach</option>
                        <option value='Sherman Oaks'>Sherman Oaks</option>
                        <option value='Studio City'>Studio City</option>
                        <option value='Traditional'>West Hollywood</option>
                        <option value='Westwood'>Westwood</option>
                        <option value='Woodland Hills'>Woodland Hills</option>
                        <option value='Tarzana'>Tarzana</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                    <div class="form-wrap">
                      <!-- <input class="form-input" id="st-style-2" type="text" style="background:#0E0C0D; color:white;" name="st-style-2" data-constraints="@Required" required>
                          <label class="form-label" for="st-style-2" style="color:white;">What house style are you interested in:</label> -->
                      <select name="st-style-2" id="st-style-2" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;">
                        <option value="" data-constraints="@Required" required>What house style are you interested in:</option>
                        <option value='Modern'>Modern</option>
                        <option value='Vintage'>Vintage</option>
                        <option value='Traditional'>Traditional</option>
                        <option value='Asian'>Asian</option>
                        <option value='Victorian'>Victorian</option>
                        <option value='Spanish'>Spanish</option>
                        <option value='French'>French</option>
                        <option value='Mediteranean'>Mediteranean</option>
                        <option value='Desert'>Desert</option>
                        <option value='Hi-Tech'>Hi-Tech</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="" style="display: flex;">
                  <div class="col-md-6" style="margin-left: auto; padding:10px;">
                    <div class="form-wrap">
                      <select name="st-alchohol" id="st-alchohol" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" data-constraints="@Required" required>
                        <option value="">Will you be serving alcohol:</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-right: auto;  padding:10px; margin-bottom:10px;">
                    <div class="form-wrap">
                      <select name="st-selling" id="st-selling" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" data-constraints="@Required" required>
                        <option value="">Will you be selling alcohol:</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12" style="padding:10px;">
                  <div class="form-wrap">
                    <select name="st-visits" id="st-visits" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" data-constraints="@Required" required>
                      <option value="">Will you be having any professional filming:</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12" style="padding:10px;">
                  <div class="form-wrap">
                    <select name="st-hear" id="st-hear" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;">
                      <option value="" data-constraints="@Required" required>Will you have any bodyguards during your rental:</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12" style="padding:10px;">
                  <div class="form-wrap">
                    <select name="st-hear-7" id="st-hear-7" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;">
                      <option value="" data-constraints="@Required" required>Are you working with an Event Planner:</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                  </div>
                </div>
                <div class="" style="display: flex;">
                  <div class="col-md-6" style="margin-left: auto; padding:10px;">
                    <div class="form-wrap">
                      <select name="st-hear-2" id="st-hear-2" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;">
                        <option value="" data-constraints="@Required" required>Will you need to move any of the furniture:</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-right: auto; padding:10px;">
                    <div class="form-wrap">
                      <select name="st-hear-3" id="st-hear-3" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;">
                        <option value="" data-constraints="@Required" required>Will you be adding any decorations:</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="" style="display: flex;">
                  <div class="col-md-6" style="margin-left: auto; padding:10px;">
                    <div class="form-wrap">
                      <select name="st-hear-8" id="st-hear-8" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;">
                        <option value="" data-constraints="@Required" required>Do you need additional parking space:</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                    <div class="form-wrap">
                      <input class="form-input" id="st-company" type="text" style="background:#0E0C0D; color:white;" name="st-company" data-constraints="@Required" required>
                      <label class="form-label" for="st-company" style="color:white;">Company Name:</label>
                    </div>
                  </div>
                </div>

                <div class="" style="display: flex;">
                  <div class="col-md-6" style="margin-left: auto; padding:10px;">
                    <div class="form-wrap">
                      <select name="st-pets" id="st-pets" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" data-constraints="@Required" onchange="ShowHideDiv9()" required>
                        <option value="no">Are you bringing any pets:</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                      <select name="st-no_pets" id="st-no_pets" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px; display:none; ">
                        <option value="1" selected>No of pets:</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                      </select>
                      <select name="st-yes_pets" id="st-yes_pets" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px; display:none;">
                        <option value="0" selected>Pet Size:</option>
                        <option value="Up to 20 Pounds">Up to 20 pounds</option>
                        <option value="20-50 pounds">20-50 pounds</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                    <div class="form-wrap">
                      <!-- <input class="form-input" id="st-hear-6" type="text" style="background:#0E0C0D; color:white;" name="st-hear-6" data-constraints="@Required" required>
                          <label class="form-label" for="st-hear-6" style="color:white;">How did you hear about us :</label> -->
                      <!-- <select name="st-hear-6" id="st-hear-6" class="form-input" style="background:#0E0C0D; color:white;">
                          <option value="" data-constraints="@Required" required>How did you hear about us:</option>
                          <option value="Social Media">Social Media</option>
                          <option value="Google">Google</option>
                          <option value="Yelp">Yelp</option>
                          <option value="Referral">Referral</option>
                          <option value="3rd Party Booking Website">3rd Party Booking Website</option>
                          <option>
                        </select> -->
                      <select name="st-hear-6" id="st-hear-6" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;">
                        <option value="" data-constraints="@Required" required>How did you hear about us:</option>
                        <option value="Social Media">Social Media</option>
                        <option value="Google">Google</option>
                        <option value="Yelp">Yelp</option>
                        <option value="Referral">Referral</option>
                        <option value="3rd Party Booking Website">3rd Party Booking Website</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="" style="display: flex;">
                  <div class="col-md-12" style="margin-right: auto; padding:10px;">
                    <div class="form-wrap">
                      <input class="form-input" id="st-info" type="text" name="st-info" style="background:#0E0C0D; color:white;">
                      <label class="form-label" for="st-info" style="color:white;">Any additional information you wish to share:</label>
                    </div>
                  </div>
                </div>
                <div class="" style="display: flex;">
                  <div class="col-md-6" style="margin-left: auto; padding:10px;">
                    <div class="form-wrap">
                      <select name="st-tickets" id="st-tickets" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;">
                        <option value="" data-constraints="@Required" required>Will you be selling tickets to your event:</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-right: auto; padding:10px;">
                    <div class="form-wrap">
                      <!-- <input class="form-input" id="st-event-type" type="text" name="st-event-type" style="background:#0E0C0D; color:white;">
                          <label class="form-label" for="st-event-type" style="color:white;">Event Type:</label> -->
                      <select name="st-event-type" id="st-event-type" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" data-constraints="@Required" required>
                        <option value="">Event type:</option>
                        <option value="Private">Private</option>
                        <option value="Corporate">Corporate</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12" style="padding:10px;">
                  <div class="form-wrap">
                    <input class="form-input" id="st-vehicles" type="text" name="st-vehicles" style="background:#0E0C0D; color:white;">
                    <label class="form-label" for="st-vehicles" style="color:white;">How many vehicles do you anticipate will park on the street:</label>
                  </div>
                </div>
                <div class="col-md-12" style="padding:10px;">
                  <div class="form-wrap">
                    <input class="form-input" id="st-vendors" type="text" name="st-vendors" style="background:#0E0C0D; color:white;">
                    <label class="form-label" for="st-vendors" style="color:white;">How many vendors do you anticipate:</label>
                  </div>
                </div>
                <div class="col-md-12" style="padding:10px;">
                  <div class="form-wrap">
                    <!-- <input class="form-input" id="st-party" type="text" name="st-party" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="st-party" style="color:white;">Are you plannning to host a party:</label> -->
                    <select name="st-party" id="st-party" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" data-constraints="@Required" required>
                      <option value="">Are you planning on hosting a party or a large gathering:</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12" style="padding:10px;">
                  <div class="form-wrap">
                    <!-- <input class="form-input" id="st-visitor" type="text" name="st-visitor" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="st-visitor" style="color:white;">Are you expecting any visitors:</label> -->
                    <select name="st-visitss" id="st-visitss" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" data-constraints="@Required" onchange="ShowHideDiv8()" required>
                      <option value="no">Are you expecting any visitors:</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                    <select name="st-yes_guest" id="st-yes_guest" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px; display:none;">
                      <option value="0" style="display:none;" selected>0</option>
                      <option value="1-2" selected>1-2</option>
                      <option value="3-4">3-4</option>
                      <option value="5-6">5-6</option>
                      <option value="7-8">7-8</option>
                      <option value="9-10">9-10</option>
                      <option value="10+">10+</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12" style="padding:10px;">
                  <div class="form-wrap">
                    <input class="form-input" id="st-siting" type="text" name="st-siting" style="background:#0E0C0D; color:white;">
                    <label class="form-label" for="st-siting" style="color:white;">Will this be a seated or standing event:</label>
                  </div>
                </div>
                <div class="col-md-12" style="padding:10px;">
                  <div class="form-wrap">
                    <input class="form-input" id="st-requirements" type="text" name="st-requirements" style="background:#0E0C0D; color:white;">
                    <label class="form-label" for="st-requirements" style="color:white;">Do you have any accessibility requirements:</label>
                  </div>
                </div>
                <div class="col-md-12" style="padding:10px;">
                  <div class="form-wrap">
                    <input class="form-input" id="st-parking-sp" type="text" name="st-parking-sp" style="background:#0E0C0D; color:white;">
                    <label class="form-label" for="st-parking-sp" style="color:white;">Number of parking spots needed:</label>
                  </div>
                </div>
                <div class="col-md-12" style="padding:10px;">
                  <div class="form-wrap">
                    <input class="form-input" id="st-event-hr" type="text" name="st-event-hr" style="background:#0E0C0D; color:white;">
                    <label class="form-label" for="st-event-hr" style="color:white;">Hours of event:</label>
                  </div>
                </div>
                <div class="" style="display: flex;">
                  <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                    <div class="form-wrap">
                      <input class="form-input" type="time" id="st-load-time" name="st-load-time" style="background:#0E0C0D; color:white;">
                      <label class="form-label" for="st-load-time" style="margin-left: 47px;color:white;">Load in time:</label>
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                    <div class="form-wrap">
                      <input class="form-input" type="time" id="st-load-out" name="st-load-out" style="background:#0E0C0D; color:white;">
                      <label class="form-label" for="st-load-out" style="margin-left: 47px;color:white;">Load out time:</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-12" style="padding:10px;">
                  <div class="form-wrap">
                    <!-- <input class="form-input" id="st-additional-ser" type="text" name="st-additional-ser" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="st-additional-ser" style="color:white;">Are you interested in any additonal services:</label> -->
                    <select name="st-additional-ser" id="st-additional-ser" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" onchange="ShowHideDiv14()" required>
                      <option value="">Are you interested in any additonal services:</option>
                      <option value="House Cleaner">House Cleaner</option>
                      <option value="Mobile Spray Tax">Mobile Spray Tax</option>
                      <option value="Make up Artist">Make up Artist</option>
                      <option value="Jet Charter">Jet Charter</option>
                      <option value="Airport Transferr">Airport Transferr</option>
                      <option value="Exotic Car Rental">Exotic Car Rental</option>
                      <option value="Nightlife Arrangements">Nightlife Arrangements</option>
                      <option value="Yacht Charter">Yacht Charter</option>
                      <option value="Personal Security">Personal Security</option>
                      <option value="Covid Testing">Covid Testing</option>
                      <option value="IV Drip">IV Drip</option>
                      <option value="Personal Chef">Personal Chef</option>
                      <option value="Baby Sitter/ Pet Sitter">Baby Sitter/ Pet Sitter</option>
                      <option value="Hair Stylist">Hair Stylist</option>
                      <option value="Fashion Stylist">Fashion Stylist</option>
                      <option value="Chauffer">Chauffer</option>
                      <option value="Other">Other</option>
                      <option value="No">No</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12" id="st-other" style="padding:10px;display:none;">
                  <div class="form-wrap">
                    <!-- <intextareaput class="form-input" id="vr-other_info" type="textarea" name="vr-other_info" style="background:#0E0C0D; color:white;"> -->
                    <textarea class="form-control" rows="3" id="st-other_info" name="st-other_info" style="background:#0E0C0D; color:white;"></textarea>
                    <label class="form-label" for="st-other_info" style="color:white;">Please fill your required services:</label>
                  </div>
                </div>
                <div class="col-md-12" style="padding:10px;">
                  <div class="form-wrap">
                    <input class="form-input" id="st-arrive" type="text" name="st-arrive" style="background:#0E0C0D; color:white;">
                    <label class="form-label" for="st-arrive" style="color:white;">How will guests be arriving:</label>
                  </div>
                </div>
                <div class="col-md-12" style="padding:10px;">
                  <div class="form-wrap">
                    <select name="st-hear-4" id="st-hear-4" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;">
                      <option value="" data-constraints="@Required" required>Are you interested in any other services:</option>

                      <option value="Customer-Identification">Customer Identification</option>
                      <option value="Signed-Contract">Signed Contract</option>
                      <option value="Requested-Check-In-Time">Requested Check-In Time</option>
                      <option value="Payment">Payment</option>
                      <option value="Deposit">Deposit</option>
                      <option value="Insurance">Insurance</option>
                      <option value="Questionnaire">Questionnaire</option>
                      <option value="Shuttle-Valet-Service">Shuttle/Valet Service</option>
                      <option value="Event-Cleaner">Event Cleaner</option>
                      <option value="Post-Rental-Cleaning-Schedule">Post Rental Cleaning Schedule</option>
                      <option value="Security-Patrol">Security/Patrol</option>
                      <option value="Check-In-Rep-Site-Rep">Check In Rep/ Site Rep</option>
                      <option value="Security-Patrol-Briefing">Security/ Patrol Briefing</option>
                      <option value="Furniture Removal">Furniture Removale</option>
                      <option value="Shuttle-Valet-Briefing">Shuttle/Valet Briefing</option>
                      <option value="Event-Cleaner-Briefing">Event Cleaner Briefing</option>
                      <option value="Check-In-Form">Check In Form</option>
                      <option value="5000">House Cleaner</option>
                      <option value="5,000-10,000">Window Cleaning</option>
                      <option value="10,000-25,000">Security Services</option>
                      <option value="25,000-50,000">Jet</option>
                      <option value="50,000-100,000">Airport Transfer</option>
                      <option value="100,000-250,000">Car Rental</option>
                      <option value="50,000-100,000">Bottle Service</option>
                      <option value="100,000-250,000">Yacht</option>
                      <option value="50,000-100,000">Personal Security</option>
                      <option value="100,000-250,000">Covid Testing</option>
                      <option value="50,000-100,000">IV Drip Therapy</option>
                    </select>
                  </div>
                </div>
                <div class="" style="display: flex;">
                  <div class="col-md-12" style="margin-left: auto; padding:10px;">
                    <div class="form-wrap">
                      <select name="st-budget" id="st-budget" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;">
                        <option value="" data-constraints="@Required" required>What is your total rental budget:</option>
                        <option value="5000">Up to $5,000</option>
                        <option value="5,000-10,000">$5,000-$10,000</option>
                        <option value="10,000-25,000">$10,000-$25,000</option>
                        <option value="25,000-50,000">$25,000-$50,000</option>
                        <option value="50,000-100,000">$50,000-$100,000</option>
                        <option value="100,000-250,000">$100,000-$250,000</option>
                      </select>
                    </div>
                  </div>
                </div>
                <br>
                <article class="title-classic">

                  <div class="title-classic" style="margin-left:15px;">
                    <input class="form-input" id="initials" type="text" value="" placeholder="Initials" style="background:#0E0C0D; color:white; height:-20px; width:100px;" required>
                    <label for="confirm" style="margin-left:5px; color:white;">I certify that all of the information here is correct</label>
                  </div>
                </article><br><br>
                <center>
                  <button class="button button-black-outline" type="submit" id="btnSubmit3" data-toggle="modal" data-target="#exampleModalCenter">Submit</button>
                </center>
              </form>
            </section>

            <!-- Stay Over + Event End -->


            <!-- Long Term -->

            <section name="long-term-furnished-rental" id="long-term-furnished-rental"
                style="display:none; width:100%;">
                <form name="myemailform" class="rd-form rd-form-variant-2 rd-mailform" method="post"
                    action="form-to-email.php">
                    <input type="text" name="Longterm" value="Long Term Furnished Rental" style="display:none;">
                    <input type="text" id="asv_4" name="vacation1" style="display:none;">
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <input class="form-input" id="lt-name" type="text" name="lt-name"
                                    style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required"
                                    required>
                                <label class="form-label" for="lt-name" style="color:white;">Full Name:</label>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto; padding:10px;">
                            <div class="form-wrap">
                                <input class="form-input" id="lt-mail" type="mail" name="lt-mail"
                                    data-constraints="@Required" style="background:#0E0C0D; color:white; height:30px;"
                                    required>
                                <label class="form-label" for="lt-mail" style="color:white;">Email Address:</label>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="lt-phone" type="text" style="background:#0E0C0D; color:white;" name="lt-phone" data-constraints="@Required" required>
                          <label class="form-label" for="lt-phone" style="color:white;">Phone Number:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="lt-insta" type="text" name="lt-insta" style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required" required>
                          <label class="form-label" for="lt-insta" style="color:white;">Social Media Handle (example: Facebook, Instagram, LinkedIn)</label>
                        </div>
                      </div>
                    </div> -->

                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                            <div class="form-wrap" style="display: grid;">
                                <div style="max-width:75px;" onclick="enable_disable5()">
                                    <input class="form-input txtPhone" id='4txtPhone' type="tel"
                                        style="background:#0E0C0D;  color:white;" name="txtPhone" />
                                </div>
                                <div style="margin-top: -60px;margin-left: 75px;">
                                    <input class="form-input" id='txtPhone5' type='tel' name="txtPhone5"
                                        style="background:#0E0C0D; color:white; height:30px;" disabled required />
                                    <label class="form-label" for="txtPhone5"
                                        style="margin-left: 75px; color:white;">Phone Number:</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                            <div class="form-wrap">
                                <input class="form-input" id="lt-insta" type="text" name="lt-insta"
                                    style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required"
                                    required>
                                <label class="form-label" for="lt-insta" style="color:white;">Social Media Handle
                                    (example: Facebook, Instagram, LinkedIn)</label>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="date" id="lt-start-date" name="lt-start-date" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="date" id="lt-end-date" name="lt-end-date" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                    </div> -->
                    <!-- <div class="" style="display: flex;">
                <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                  <div class="form-wrap">
                    <input class="form-input" type="time" id="lt-start-time" name="lt-start-time" style="background:#0E0C0D; color:white;">
                  </div>
                </div>
                <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                  <div class="form-wrap">
                    <input class="form-input" type="time" id="lt-end-time" name="lt-end-time" style="background:#0E0C0D; color:white;">
                  </div>
                </div>
               </div> -->

                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                            <div class="form-wrap">
                                <input class="form-input chkdt datepicker" id="lt-start-date" type="text"
                                    name="lt-start-date" style="background:#0E0C0D; color:white;"
                                    placeholder="Requested Check In Date:" required>
                                <!-- <label class="form-label" for="lt-start-date" style="color:white;">Requested Check In Date:</label> -->
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                            <div class="form-wrap ">
                                <!-- <input class="form-input" type="text" id="lt-end-date" name="lt-end-date" style="background:#0E0C0D; color:white;" > -->
                                <input class="form-input datepicker" id="lt-end-date" type="text" name="lt-end-date"
                                    style="background:#0E0C0D; color:white;" placeholder="Requested Check Out Date:"
                                    required>
                                <!-- <label class="form-label" for="vr-end-date" style="color:white;">Requested Check Out Date:</label> -->
                            </div>
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                            <div class="form-wrap input_wrapper_div1">
                                <!-- <input class="form-input" type="time" id="vr-start-time" name="vr-start-time" style="background:#0E0C0D; color:white;">
                          <p class="reqest_para1">Request check In time</p> -->
                                <!-- <input class="form-input" type="time" id="lt-start-time" name="lt-start-time"
                                    style="background:#0E0C0D; color:white;" required>
                                <label class="form-label" for="lt-start-time"
                                    style="margin-left: 47px;color:white;">Requested Check In Time:</label> -->
                                <!-- <label class="form-label" for="vr-start-time" style="color:white;">Requested Check In Time:</label> -->
                                <select name="lt-start-time" id="lt-start-time" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 data-constraints="@Required" required>
                                <option value="">Requested Check In Time:</option>
                                <?php  require("time_dropdown.php"); ?>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                            <div class="form-wrap input_wrapper_div">
                                <!-- <input class="form-input" type="time" id="vr-end-time" name="vr-end-time" style="background:#0E0C0D; color:white;">
                          <p class="reqest_para">Request check Out time</p> -->
                                <!-- <input class="form-input" type="time" id="lt-end-time" name="lt-end-time"
                                    style="background:#0E0C0D; color:white;" required>
                                <label class="form-label" for="lt-end-time"
                                    style="margin-left: 47px;color:white;">Requested Check Out Time:</label> -->
                                <!-- <label class="form-label" for="vr-end-time" style="color:white;">Requested Check Out Time:</label> -->
                                <select name="lt-end-time" id="lt-end-time" class=" btn btn-secondary dropdown-toggle"
                                 style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                 data-constraints="@Required" required>
                                <option value="">Requested Check Out Time:</option>
                                <?php  require("time_dropdown.php"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <select name="lt-flex-date" id="lt-flex-date" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" required>
                                    <option value="">Are you flexible with the check in/out date:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px; margin-bottom:10px;">
                            <div class="form-wrap">
                                <select name="lt-flex-time" id="lt-flex-time" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    data-constraints="@Required" required>
                                    <option value="">Are you flexible with the check in/out time:</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto;  padding:10px;">

                            <div class="form-wrap">
                                <!-- <input class="form-input" id="lt-bed" type="text" name="lt-bed" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                          <label class="form-label" for="lt-bed" style="color:white;"># of Bedrooms Needed:</label> -->
                                <select name="lt-bed" id="lt-bed" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                    required>
                                    <option value="" data-constraints="@Required"># of Bedrooms Needed:</option>
                                    <option value="1-2">1-2</option>
                                    <option value="3-4">3-4</option>
                                    <option value="5-6">5-6</option>
                                    <option value="7-8">7-8</option>
                                    <option value="9-10">9-10</option>
                                    <option value="10+">10+</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                            <div class="form-wrap">
                                <input class="form-input" id="lt-bathroom" type="text" name="lt-bathroom"
                                    style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                                <label class="form-label" for="lt-bathroom" style="color:white;"># of Bathrooms
                                    Needed:</label>
                            </div>
                        </div>
                    </div>

                    <div class="" style="display: flex;">
                        <div class="col-md-6" style="margin-left: auto; padding:10px;">
                            <div class="form-wrap">
                                <select name="lt-city-2" id="lt-city-2" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" onchange="ShowHideDiv29()"
                                    required>
                                    <option value="" data-constraints="@Required" required>What city/area are you intersted in:</option>
                                    <option value='Beverly Hills'>Beverly Hills</option>
                                    <option value='Bel Air'>Bellair</option>
                                    <option value='Brentwood'>Brentwood</option>
                                    <option value='DTLA'>DTLA</option>
                                    <option value='Encino'>Encino</option>
                                    <option value='Hollywood'>Hollywood</option>
                                    <option value='Hollywood Hills'>Hollywood Hills</option>
                                    <option value='Holmby Hills'>Holmby Hills</option>
                                    <option value='Malibu'>Malibu</option>
                                    <option value='Newport Beach'>Newport Beach</option>
                                    <option value='Sherman Oaks'>Sherman Oaks</option>
                                    <option value='Studio City'>Studio City</option>
                                    <option value='Venice'>Venice</option>
                                    <option value='Traditional'>West Hollywood</option>
                                    <option value='Westwood'>Westwood</option>
                                    <option value='Woodland Hills'>Woodland Hills</option>
                                    <option value='Tarzana'>Tarzana</option>
                                    <option value='Other'>Other</option>
                                </select>
                            </div>
                            <div class="col-md-12" id="lt-city_information" style="padding:10px;display:none;">
                                <div class="form-wrap">
                                    <!-- <intextareaput class="form-input" id="lt-other_info" type="textarea" name="lt-other_info" style="background:#0E0C0D; color:white;"> -->
                                    <textarea class="form-control" rows="3" id="lt-city_information" name="lt-city_information"
                                        style="background:#0E0C0D; color:white;"  placeholder="Please fill city/area are you intrested in:"></textarea>
                                    <!-- <label class="form-label" for="lt-city_information" style="color:white;">Please fill city/area are you intrested in:</label> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                            <div class="form-wrap">
                                <select name="lt-style-2" id="lt-style-2" class=" btn btn-secondary dropdown-toggle"
                                    style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"  onchange="ShowHideDiv30()"
                                    required>
                                    <option value="" data-constraints="@Required" required>What house style are you interested in:</option>
                                    <option value='Asian'>Asian</option>
                                    <option value='Desert'>Desert</option>
                                    <option value='French'>French</option>
                                    <option value='Gothic/ Mid-Century'>Gothic/ Mid-Century</option>
                                    <option value='Hi-Tech'>Hi-Tech</option>
                                    <option value='Mediteranean'>Mediteranean</option>
                                    <option value='Modern'>Modern</option>
                                    <option value='Spanish'>Spanish</option>
                                    <option value='Traditional'>Traditional</option>
                                    <option value='Vintage'>Vintage</option>
                                    <option value='Victorian'>Victorian</option>
                                    <option value='Other'>Other</option>
                                </select>
                            </div>
                            <div class="col-md-12" id="lt-style_information" style="padding:10px;display:none;">
                                <div class="form-wrap">
                                    <!-- <intextareaput class="form-input" id="lt-other_info" type="textarea" name="lt-other_info" style="background:#0E0C0D; color:white;"> -->
                                    <textarea class="form-control" rows="3" id="lt-style_information" name="lt-style_information"
                                        style="background:#0E0C0D; color:white;" placeholder="Please fill house style are you intrested in:"></textarea>
                                    <!-- <label class="form-label" for="lt-style_information" style="color:white;">Please fill city/area are you intrested in:</label> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-right: auto; padding:10px;">
                        <div class="form-wrap">
                            <input class="form-input" id="lt-content_creat" type="text" name="lt-content_creat" style="background:#0E0C0D; color:white;" required>
                            <label class="form-label" for="lt-content_creat" style="color:white;">Will this be a house to live in or a company house/content creation property:</label>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-right: auto; padding:10px;">
                        <!-- <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="lt-flex-date" id="lt-flex-date" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="" data-constraints="@Required" required>Are you flexible with the check in/out date:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div> -->
                        <!-- <div class="col-md-6" style="margin-right: auto;  padding:10px;"> -->
                        <div class="form-wrap">
                            <!-- <input class="form-input" id="lt-hear-2" type="text" style="background:#0E0C0D; color:white;" name="lt-hear-2" data-constraints="@Required" required>
                          <label class="form-label" for="lt-hear-2" style="color:white;">How did you hear about us:</label> -->
                            <select name="lt-hear-2" id="lt-hear-2" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" onchange="ShowHideDiv28()"
                                required>
                                <option value="" data-constraints="@Required">How did you hear about us:</option>
                                <option value="Social Media">Social Media</option>
                                <option value="Google">Google</option>
                                <option value="Yelp">Yelp</option>
                                <option value="Referral">Referral</option>
                                <option value="3rd Party Booking Website">3rd Party Booking Website</option>
                                <option value="Other">Other</option>
                            </select>
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class="col-md-12" id="lt-where_hear_us" style="padding:10px;display:none;">
                        <div class="form-wrap">
                            <!-- <intextareaput class="form-input" id="lt-other_info" type="textarea" name="lt-other_info" style="background:#0E0C0D; color:white;"> -->
                            <textarea class="form-control" rows="3" id="lt-where_hear_us" name="lt-where_hear_us"
                                style="background:#0E0C0D; color:white;" placeholder="Please fill where did you hear about us:"></textarea>
                            <!-- <label class="form-label" for="lt-where_hear_us" style="color:white;">Please fill where did you hear about us:</label> -->
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-right: auto; padding:10px;">
                        <div class="form-wrap">
                            <input class="form-input" id="lt-info" type="text" name="lt-info"
                                style="background:#0E0C0D; color:white;" required>
                            <label class="form-label" for="lt-info" style="color:white;">Any additional information you
                                wish to share:</label>
                        </div>
                    </div>
                    <!-- <div class="col-md-12" style="padding:10px;">
                <div class="form-wrap">
                  <input class="form-input" id="lt-vehicles" type="text" name="lt-vehicles" style="background:#0E0C0D; color:white;">
                  <label class="form-label" for="lt-vehicles" style="color:white;">How many vehicles do you anticipate will park on the street:</label>
                </div>
               </div> -->
                    <!-- <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <select name="lt-attendees" id="lt-attendees" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                data-constraints="@Required" required>
                                <option selected># of attendees:</option>
                                <option value='0-30'>0-30</option>
                                <option value='30-60'>30-60</option>
                                <option value='60-90'>60-90</option>
                                <option value='90-120'>90-120</option>
                                <option value='120-150'>120-150</option>
                                <option value='150-180'>150-180</option>
                                <option value='180-200'>180-200</option>
                                <option value='200-250'>200-250</option>
                                <option value='250-300'>250-300</option>
                                <option value='300-400'>300-400</option>
                                <option value='400-500'>400-500</option>
                                <option value='500+'>500+</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <!-- <input class="form-input" id="lt-vendors" type="text" name="lt-vendors" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="lt-vendors" style="color:white;"># of Guests Staying Over:</label> -->
                            <select name="lt-vendors" id="lt-vendors" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                required>
                                <option value="" data-constraints="@Required"># of Guests Staying Over:</option>
                                <option value="1-2">1-2</option>
                                <option value="3-4">3-4</option>
                                <option value="5-6">5-6</option>
                                <option value="7-8">7-8</option>
                                <option value="9-10">9-10</option>
                                <option value="11-15">11-15</option>
                                <option value="16-20">16-20</option>
                                <option value="20+">20+</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <input class="form-input" id="lt-requirements" type="text" name="lt-requirements"
                                style="background:#0E0C0D; color:white;" required>
                            <label class="form-label" for="lt-requirements" style="color:white;">Do you have any special accessibility requirements:</label>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <input class="form-input" id="lt-parking" type="text" name="lt-parking"
                                style="background:#0E0C0D; color:white;" required>
                            <label class="form-label" for="lt-parking" style="color:white;">Number of parking spots needed:</label>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <!-- <input class="form-input" id="lt-pets" type="text" name="lt-pets" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="lt-pets" style="color:white;">Do you have any pets</label> -->
                            <select name="lt-pets" id="lt-pets" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                data-constraints="@Required" onchange="ShowHideDiv12()" required>
                                <option value="no">Do you have any pets:</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <select name="lt-no_pets" id="lt-no_pets" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px; display:none;">
                                <option value="1" selected>No of pets:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                            <select name="lt-yes_pets" id="lt-yes_pets" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px; display:none; ">
                                <option value="0" selected>Pet Size:</option>
                                <option value="Up to 20 Pounds">Up to 20 pounds</option>
                                <option value="20-50 pounds">20-50 pounds</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <!-- <select name="lt-hear-4" id="lt-hear-4" class="form-input" style="background:#0E0C0D; color:white;">
                          <option value="" data-constraints="@Required" required>Are you interested in any additonal services</option>

                          <option value="House Cleaner">House Cleaner</option>
                          <option value="Window Cleaning">Window Cleaning</option>
                          <option value="Security Services">Security Services</option>
                        </select> -->
                            <select name="lt-hear-4" id="lt-hear-4" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                onchange="ShowHideDiv11()" required>
                                <option value="">Are you interested in any additonal services:</option>
                                <option value="Airport Transferr">Airport Transferr</option>
                                <option value="Baby Sitter/ Pet Sitter">Baby Sitter/ Pet Sitter</option>
                                <option value="Chauffer">Chauffer</option>
                                <option value="Covid Testing">Covid Testing</option>
                                <option value="Exotic Car Rental">Exotic Car Rental</option>
                                <option value="Fashion Stylist">Fashion Stylist</option>
                                <option value="Hair Stylist">Hair Stylist</option>
                                <option value="House Cleaner">House Cleaner</option>
                                <option value="IV Drip">IV Drip</option>
                                <option value="Jet Charter">Jet Charter</option>
                                <option value="Make up Artist">Make up Artist</option>
                                <option value="Mobile Spray Tax">Mobile Spray Tax</option>
                                <option value="Nightlife Arrangements">Nightlife Arrangements</option>
                                <option value="Personal Chef">Personal Chef</option>
                                <option value="Personal Security">Personal Security</option>
                                <option value="Security Services">Security Services</option>
                                <option value="Window Cleaning">Window Cleaning</option>
                                <option value="Yacht Charter">Yacht Charter</option>
                                <option value="Other">Other</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12" id="lt-other" style="padding:10px;display:none;">
                        <div class="form-wrap">
                            <!-- <intextareaput class="form-input" id="lt-other_info" type="textarea" name="lt-other_info" style="background:#0E0C0D; color:white;"> -->
                            <textarea class="form-control" rows="3" id="lt-other_info" name="lt-other_info"
                                style="background:#0E0C0D; color:white;"></textarea>
                            <label class="form-label" for="lt-other_info" style="color:white;">Please fill your required
                                services:</label>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                        <div class="form-wrap">
                            <select name="lt-hear-5" id="lt-hear-5" class=" btn btn-secondary dropdown-toggle"
                                style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;"
                                required>
                                <option value="" data-constraints="@Required">What is your total monthly rental budget:</option>

                                <option value="$5,000-$10,000">$5,000-$10,000</option>
                                <option value="$10,000-$25,000">$10,000-$25,000</option>
                                <option value="$25,000-$50,000">$25,000-$50,000</option>
                                <option value="$50,000-$100,000">$50,000-$100,000</option>
                                <option value="$100,000-$250,000">$100,000-$250,000</option>
                                <option value="250+">$250+</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <article class="title-classic">
                        <div class="title-classic" style="margin-left:15px;">
                            <input class="form-input" id="initials" type="text" value="" placeholder="Initials"
                                style="background:#0E0C0D; color:white; height:-20px; width:100px;" required>
                            <label for="confirm" style="margin-left:5px; color:white;">I certify that all of the
                                information here is correct</label>
                        </div>
                    </article><br><br>
                    <center>
                        <button class="button button-black-outline" type="submit" id="btnSubmit4" data-toggle="modal"
                            data-target="#exampleModalCenter">Submit</button>
                    </center>
                </form>
            </section>

            <!-- Long Term End -->

            </form>
            <!-- </div> -->
      </section>


    </div>

    <!-- Contact Form-->


  </div>
  <!-- Page Footer-->

  <?php require('footer.php'); ?>
  </div>

  <style type="text/css">
    input[type="date"]::-webkit-calendar-picker-indicator {
      background: transparent;
      bottom: 0;
      color: transparent;
      cursor: pointer;
      height: auto;
      left: 0;
      position: absolute;
      right: 0;
      top: 0;
      width: auto;
    }

    input[type="time"]::-webkit-calendar-picker-indicator {
      background: transparent;
      bottom: 0;
      color: transparent;
      cursor: pointer;
      height: auto;
      left: 0;
      position: absolute;
      right: 0;
      top: 0;
      width: auto;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    $(".datepicker").datepicker()
  </script>
  <script>
    function recaptchaCallback() {
      $('#submitBtn').removeAttr('disabled');
    };

    const data = document.querySelector('.form-shower');

    $('#myModal').on('shown.bs.modal', function() {
      $('#myInput').trigger('focus')
    })

    const contact = document.querySelector(`#contact`)
    const vocation = document.querySelector(`#vacation-rental`)
    const eventvenueForm = document.querySelector(`#event-venue`)
    const longTermForm = document.querySelector(`#long-term-furnished-rental`)
    const shortTermForm = document.querySelector(`#short-term-stay-event`)
    const filmlocationForm = document.querySelector(`#film-location`)
    const selectType = document.querySelector(`#rental-type`)
    // const selectType1 = document.querySelector(`#rental-type1`)



    selectType.addEventListener(`click`, function() {
      console.log(selectType.value)

      if (selectType.value === `c`) {
        vocation.style.display = `none`
        longTermForm.style.display = `none`
        shortTermForm.style.display = `none`
        filmlocationForm.style.display = `none`
        eventvenueForm.style.display = `none`
        // selectType1.style.display = `none`
      } else if (selectType.value === 'vacation-rental') {
        // contact.style.display = `none`
        longTermForm.style.display = `none`
        shortTermForm.style.display = `none`
        filmlocationForm.style.display = `none`
        eventvenueForm.style.display = `none`
        vocation.style.display = `block`
        // selectType1.style.display = `block`
      } else if (selectType.value === `event-venue`) {
        // contact.style.display = `none`
        vocation.style.display = `none`
        longTermForm.style.display = `none`
        shortTermForm.style.display = `none`
        filmlocationForm.style.display = `none`
        eventvenueForm.style.display = `block`
        // selectType1.style.display = `none`
      } else if (selectType.value === `long-term-furnished-rental`) {
        // contact.style.display = `none`
        vocation.style.display = `none`
        shortTermForm.style.display = `none`
        filmlocationForm.style.display = `none`
        eventvenueForm.style.display = `none`
        longTermForm.style.display = `block`
        // selectType1.style.display = `none`
      } else if (selectType.value === `short-term-stay-event`) {
        // contact.style.display = `none`
        vocation.style.display = `none`
        shortTermForm.style.display = `block`
        filmlocationForm.style.display = `none`
        eventvenueForm.style.display = `none`
        longTermForm.style.display = `none`
        // selectType1.style.display = `none`
      } else if (selectType.value === `film-location`) {
        // contact.style.display = `none`
        vocation.style.display = `none`
        shortTermForm.style.display = `none`
        filmlocationForm.style.display = `block`
        eventvenueForm.style.display = `none`
        longTermForm.style.display = `none`
        // selectType1.style.display = `none`
      }
    })

    // const visit = document.querySelector(`#vr-visits`)
    // const guest = document.querySelector(`#vr-yes_guest`)
    // // selectType.addEventListener(`click`, function() {
    // //   console.log(selectType.value)

    // selectType.addEventListener(`onchange`, function() {
    //   console.log(selectType.value)

    //   if (selectType.value === `no`) {
    //     guest.style.display = `none`
    //   } else if (selectType.value === 'yes') {
    //     // contact.style.display = `none
    //     guest.style.display = `block`

    //   } 
    // })

    function ShowHideDiv() {
      var ddlPassport = document.getElementById("vr-visits");
      var dvPassport = document.getElementById("vr-yes_guest");
      dvPassport.style.display = ddlPassport.value == "yes" ? "block" : "none";
    }


    function ShowHideDiv15() {
      var ddlPassport = document.getElementById("vr-insta");
      var dvPassport = document.getElementById("vr-insta_id");
      var dvPassport1 = document.getElementById("vr-other_id");
      dvPassport.style.display = ddlPassport.value == "insta" ? "block" : "none";
      dvPassport1.style.display = ddlPassport.value == "other" ? "block" : "none";
    }


    function ShowHideDiv8() {
      var ddlPassports = document.getElementById("st-visitss");
      var dvPassports = document.getElementById("st-yes_guest");
      dvPassports.style.display = ddlPassports.value == "yes" ? "block" : "none";
      // console.log(ddlPassports.value);
      // ddlPassports.value == "yes" ? console.log("work") : console.log("no");   
    }

    function ShowHideDiv1() {
      var ddlPassport = document.getElementById("vr-pets");
      var dvPassport_no = document.getElementById("vr-no_pets");
      var dvPassport = document.getElementById("vr-yes_pets");
      dvPassport.style.display = ddlPassport.value == "yes" ? "block" : "none";
      dvPassport_no.style.display = ddlPassport.value == "yes" ? "block" : "none";
    }

    function ShowHideDiv12() {
      var ddlPassport = document.getElementById("lt-pets");
      var dvPassport_no = document.getElementById("lt-no_pets");
      var dvPassport = document.getElementById("lt-yes_pets");
      dvPassport.style.display = ddlPassport.value == "yes" ? "block" : "none";
      dvPassport_no.style.display = ddlPassport.value == "yes" ? "block" : "none";
    }

    function ShowHideDiv5() {
      var ddlPassport = document.getElementById("ev-pets");
      var dvPassport_no = document.getElementById("ev-no_pets");
      var dvPassport = document.getElementById("ev-yes_pets");
      dvPassport.style.display = ddlPassport.value == "yes" ? "block" : "none";
      dvPassport_no.style.display = ddlPassport.value == "yes" ? "block" : "none";
    }

    function ShowHideDiv6() {
      var ddlPassport = document.getElementById("f-pets");
      var dvPassport_no = document.getElementById("f-no_pets");
      var dvPassport = document.getElementById("f-yes_pets");
      dvPassport.style.display = ddlPassport.value == "yes" ? "block" : "none";
      dvPassport_no.style.display = ddlPassport.value == "yes" ? "block" : "none";
    }

    function ShowHideDiv9() {
      var ddlPassport = document.getElementById("st-pets");
      var dvPassport_no = document.getElementById("st-no_pets");
      var dvPassport = document.getElementById("st-yes_pets");
      dvPassport.style.display = ddlPassport.value == "yes" ? "block" : "none";
      dvPassport_no.style.display = ddlPassport.value == "yes" ? "block" : "none";
    }

    // function ShowHideDiv3() {
    //   var ddlPassport = document.getElementById("vr-no_pets");
    //   // var dvPassport_no = document.getElementById("vr-no_pets");
    //   var dvPassport = document.getElementById("vr-yes_pets");
    //   dvPassport.style.display = ddlPassport.value == "1" ? "block" : "none";

    //   // dvPassport_no.style.display = ddlPassport.value == "yes" ? "block" : "none";
    // }
    // function ShowHideDiv3() {
    //   var ddlPassport = document.getElementById("vr-no_pets");
    //   // var dvPassport_no = document.getElementById("vr-no_pets");
    //   var dvPassport = document.getElementById("vr-yes_pets");
    //   dvPassport.style.display = ddlPassport.value == "2" ? "block" : "none";
    //   // dvPassport_no.style.display = ddlPassport.value == "yes" ? "block" : "none";
    // }

    // function ShowHideDiv2() {
    //   var ddlPassport = document.getElementById("vr-serv");
    //   var dvPassport = document.getElementById("vr-yes_service_home");
    //   var dvPassport1 = document.getElementById("vr-yes_service_lxr");
    //   dvPassport.style.display = ddlPassport.value == "In HomeServices" ? "block" : "none";
    //   dvPassport1.style.display = ddlPassport.value == "Luxury Services" ? "block" : "none";
    // }

    function ShowHideDiv4() {
      var ddlPassport = document.getElementById("vr-serv");
      var dvPassport = document.getElementById("vr-other");
      dvPassport.style.display = ddlPassport.value == "Other" ? "block" : "none";
    }

    function ShowHideDiv13() {
      var ddlPassport = document.getElementById("ev-other-serv");
      var dvPassport = document.getElementById("ev-other");
      dvPassport.style.display = ddlPassport.value == "Other" ? "block" : "none";
    }

    function ShowHideDiv14() {
      var ddlPassport = document.getElementById("st-additional-ser");
      var dvPassport = document.getElementById("st-other");
      dvPassport.style.display = ddlPassport.value == "Other" ? "block" : "none";
    }

    function ShowHideDiv16() {
      var ddlPassport = document.getElementById("ev-exocit_animals");
      var dvPassport = document.getElementById("ev-exotic_info");
      dvPassport.style.display = ddlPassport.value == "yes" ? "block" : "none";
    }

    function ShowHideDiv17() {
      var ddlPassport = document.getElementById("f-exocit_animals");
      var dvPassport = document.getElementById("f-exotic_info");
      dvPassport.style.display = ddlPassport.value == "yes" ? "block" : "none";
    }

    function ShowHideDiv18() {
      var ddlPassport = document.getElementById("vr-hear-us");
      var dvPassport = document.getElementById("vr-where_hear");
      dvPassport.style.display = ddlPassport.value == "Other" ? "block" : "none";
    }

    function ShowHideDiv19() {
      var ddlPassport = document.getElementById("vr-city");
      var dvPassport = document.getElementById("vr-other_city");
      dvPassport.style.display = ddlPassport.value == "Other" ? "block" : "none";
    }

    function ShowHideDiv20() {
      var ddlPassport = document.getElementById("vr-style");
      var dvPassport = document.getElementById("vr-other_style");
      dvPassport.style.display = ddlPassport.value == "Other" ? "block" : "none";
    }

    function ShowHideDiv21() {
      var ddlPassport = document.getElementById("ev-hear-2");
      var dvPassport = document.getElementById("ev-where_hear");
      dvPassport.style.display = ddlPassport.value == "Other" ? "block" : "none";
    }

    function ShowHideDiv22() {
      var ddlPassport = document.getElementById("ev-city-2");
      var dvPassport = document.getElementById("ev-info_city");
      dvPassport.style.display = ddlPassport.value == "Other" ? "block" : "none";
    }

    function ShowHideDiv23() {
      var ddlPassport = document.getElementById("ev-style-2");
      var dvPassport = document.getElementById("ev-info_house_style");
      dvPassport.style.display = ddlPassport.value == "Other" ? "block" : "none";
    }

    function ShowHideDiv24() {
      var ddlPassport = document.getElementById("f-hear_us");
      var dvPassport = document.getElementById("f-where_hear");
      dvPassport.style.display = ddlPassport.value == "Other" ? "block" : "none";
    }

    function ShowHideDiv25() {
      var ddlPassport = document.getElementById("f-city");
      var dvPassport = document.getElementById("f-other_city");
      dvPassport.style.display = ddlPassport.value == "Other" ? "block" : "none";
    }

    function ShowHideDiv26() {
      var ddlPassport = document.getElementById("f-style");
      var dvPassport = document.getElementById("f-house_style");
      dvPassport.style.display = ddlPassport.value == "Other" ? "block" : "none";
    }

    function ShowHideDiv27() {
      var ddlPassport = document.getElementById("f-production");
      var dvPassport = document.getElementById("f-info_production");
      dvPassport.style.display = ddlPassport.value == "Other" ? "block" : "none";
    }

    function ShowHideDiv28() {
      var ddlPassport = document.getElementById("lt-hear-2");
      var dvPassport = document.getElementById("lt-where_hear_us");
      dvPassport.style.display = ddlPassport.value == "Other" ? "block" : "none";
    }

    function ShowHideDiv29() {
      var ddlPassport = document.getElementById("lt-city-2");
      var dvPassport = document.getElementById("lt-city_information");
      dvPassport.style.display = ddlPassport.value == "Other" ? "block" : "none";
    }

    function ShowHideDiv30() {
      var ddlPassport = document.getElementById("lt-style-2");
      var dvPassport = document.getElementById("lt-style_information");
      dvPassport.style.display = ddlPassport.value == "Other" ? "block" : "none";
    }

    function ShowHideDiv11() {
      var ddlPassport = document.getElementById("lt-hear-4");
      var dvPassport = document.getElementById("lt-other");
      dvPassport.style.display = ddlPassport.value == "Other" ? "block" : "none";
    }
  </script>
  <!-- Javascript-->

  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>

  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput-jquery.min.js"></script> -->
  <!-- <script type="text/javascript">
    $(function() {
      var code = "+91"; // Assigning value from model.
      $('#txtPhone').val(code);
      $('#txtPhone').intlTelInput({
        autoHideDialCode: true,
        autoPlaceholder: "ON",
        dropdownContainer: document.body,
        formatOnDisplay: true,
        hiddenInput: "full_number",
        initialCountry: "auto",
        nationalMode: true,
        placeholderNumberType: "MOBILE",
        preferredCountries: ['US'],
        separateDialCode: true
      });
      $('#btnSubmit').on('click', function() {
        var code = $("#txtPhone").intlTelInput("getSelectedCountryData").dialCode;
        var phoneNumber = $('#txtPhone').val();
        var name = $("#txtPhone").intlTelInput("getSelectedCountryData").name;
        console.log('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);
      });
    });
  </script> -->
  <!-- <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script> -->

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" /> -->
  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput-jquery.min.js"></script>
  <script type="text/javascript">
    $(function() {
      var code = ""; // Assigning value from model.
      $('#txtPhone').val(code);
      $('#txtPhone').intlTelInput({
        autoHideDialCode: true,
        autoPlaceholder: "ON",
        dropdownContainer: document.body,
        formatOnDisplay: true,
        hiddenInput: "full_number",
        initialCountry: "auto",
        nationalMode: true,
        placeholderNumberType: "MOBILE",
        preferredCountries: ['US'],
        separateDialCode: true
      });
      $('#btnSubmit').on('click', function() {
        var code = $("#txtPhone").intlTelInput("getSelectedCountryData").dialCode;
        var phoneNumber = $('#txtPhone').val();
        var name = $("#txtPhone").intlTelInput("getSelectedCountryData").name;
        document.getElementById("txtPhone").value = code;

        console.log('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);


        let iso;
        let str;

        let arr = [{
            "name": "Afghanistan",
            "dialCode": "+93",
            "isoCode": "AF",
            "flag": "https://www.countryflags.io/AF/flat/64.png"
          },
          {
            "name": "Aland Islands",
            "dialCode": "+358",
            "isoCode": "AX",
            "flag": "https://www.countryflags.io/AX/flat/64.png"
          },
          {
            "name": "Albania",
            "dialCode": "+355",
            "isoCode": "AL",
            "flag": "https://www.countryflags.io/AL/flat/64.png"
          },
          {
            "name": "Algeria",
            "dialCode": "+213",
            "isoCode": "DZ",
            "flag": "https://www.countryflags.io/DZ/flat/64.png"
          },
          {
            "name": "AmericanSamoa",
            "dialCode": "+1684",
            "isoCode": "AS",
            "flag": "https://www.countryflags.io/AS/flat/64.png"
          },
          {
            "name": "Andorra",
            "dialCode": "+376",
            "isoCode": "AD",
            "flag": "https://www.countryflags.io/AD/flat/64.png"
          },
          {
            "name": "Angola",
            "dialCode": "+244",
            "isoCode": "AO",
            "flag": "https://www.countryflags.io/AO/flat/64.png"
          },
          {
            "name": "Anguilla",
            "dialCode": "+1264",
            "isoCode": "AI",
            "flag": "https://www.countryflags.io/AI/flat/64.png"
          },
          {
            "name": "Antarctica",
            "dialCode": "+672",
            "isoCode": "AQ",
            "flag": "https://www.countryflags.io/AQ/flat/64.png"
          },
          {
            "name": "Antigua and Barbuda",
            "dialCode": "+1268",
            "isoCode": "AG",
            "flag": "https://www.countryflags.io/AG/flat/64.png"
          },
          {
            "name": "Argentina",
            "dialCode": "+54",
            "isoCode": "AR",
            "flag": "https://www.countryflags.io/AR/flat/64.png"
          },
          {
            "name": "Armenia",
            "dialCode": "+374",
            "isoCode": "AM",
            "flag": "https://www.countryflags.io/AM/flat/64.png"
          },
          {
            "name": "Aruba",
            "dialCode": "+297",
            "isoCode": "AW",
            "flag": "https://www.countryflags.io/AW/flat/64.png"
          },
          {
            "name": "Ascension Island",
            "dialCode": "+247",
            "isoCode": "AC",
            "flag": "https://www.countryflags.io/AC/flat/64.png"
          },
          {
            "name": "Australia",
            "dialCode": "+61",
            "isoCode": "AU",
            "flag": "https://www.countryflags.io/AU/flat/64.png"
          },
          {
            "name": "Austria",
            "dialCode": "+43",
            "isoCode": "AT",
            "flag": "https://www.countryflags.io/AT/flat/64.png"
          },
          {
            "name": "Azerbaijan",
            "dialCode": "+994",
            "isoCode": "AZ",
            "flag": "https://www.countryflags.io/AZ/flat/64.png"
          },
          {
            "name": "Bahamas",
            "dialCode": "+1242",
            "isoCode": "BS",
            "flag": "https://www.countryflags.io/BS/flat/64.png"
          },
          {
            "name": "Bahrain",
            "dialCode": "+973",
            "isoCode": "BH",
            "flag": "https://www.countryflags.io/BH/flat/64.png"
          },
          {
            "name": "Bangladesh",
            "dialCode": "+880",
            "isoCode": "BD",
            "flag": "https://www.countryflags.io/BD/flat/64.png"
          },
          {
            "name": "Barbados",
            "dialCode": "+1246",
            "isoCode": "BB",
            "flag": "https://www.countryflags.io/BB/flat/64.png"
          },
          {
            "name": "Belarus",
            "dialCode": "+375",
            "isoCode": "BY",
            "flag": "https://www.countryflags.io/BY/flat/64.png"
          },
          {
            "name": "Belgium",
            "dialCode": "+32",
            "isoCode": "BE",
            "flag": "https://www.countryflags.io/BE/flat/64.png"
          },
          {
            "name": "Belize",
            "dialCode": "+501",
            "isoCode": "BZ",
            "flag": "https://www.countryflags.io/BZ/flat/64.png"
          },
          {
            "name": "Benin",
            "dialCode": "+229",
            "isoCode": "BJ",
            "flag": "https://www.countryflags.io/BJ/flat/64.png"
          },
          {
            "name": "Bermuda",
            "dialCode": "+1441",
            "isoCode": "BM",
            "flag": "https://www.countryflags.io/BM/flat/64.png"
          },
          {
            "name": "Bhutan",
            "dialCode": "+975",
            "isoCode": "BT",
            "flag": "https://www.countryflags.io/BT/flat/64.png"
          },
          {
            "name": "Bolivia",
            "dialCode": "+591",
            "isoCode": "BO",
            "flag": "https://www.countryflags.io/BO/flat/64.png"
          },
          {
            "name": "Bosnia and Herzegovina",
            "dialCode": "+387",
            "isoCode": "BA",
            "flag": "https://www.countryflags.io/BA/flat/64.png"
          },
          {
            "name": "Botswana",
            "dialCode": "+267",
            "isoCode": "BW",
            "flag": "https://www.countryflags.io/BW/flat/64.png"
          },
          {
            "name": "Brazil",
            "dialCode": "+55",
            "isoCode": "BR",
            "flag": "https://www.countryflags.io/BR/flat/64.png"
          },
          {
            "name": "British Indian Ocean Territory",
            "dialCode": "+246",
            "isoCode": "IO",
            "flag": "https://www.countryflags.io/IO/flat/64.png"
          },
          {
            "name": "Brunei Darussalam",
            "dialCode": "+673",
            "isoCode": "BN",
            "flag": "https://www.countryflags.io/BN/flat/64.png"
          },
          {
            "name": "Bulgaria",
            "dialCode": "+359",
            "isoCode": "BG",
            "flag": "https://www.countryflags.io/BG/flat/64.png"
          },
          {
            "name": "Burkina Faso",
            "dialCode": "+226",
            "isoCode": "BF",
            "flag": "https://www.countryflags.io/BF/flat/64.png"
          },
          {
            "name": "Burundi",
            "dialCode": "+257",
            "isoCode": "BI",
            "flag": "https://www.countryflags.io/BI/flat/64.png"
          },
          {
            "name": "Cambodia",
            "dialCode": "+855",
            "isoCode": "KH",
            "flag": "https://www.countryflags.io/KH/flat/64.png"
          },
          {
            "name": "Cameroon",
            "dialCode": "+237",
            "isoCode": "CM",
            "flag": "https://www.countryflags.io/CM/flat/64.png"
          },
          {
            "name": "Canada",
            "dialCode": "+1",
            "isoCode": "CA",
            "flag": "https://www.countryflags.io/CA/flat/64.png"
          },
          {
            "name": "Cape Verde",
            "dialCode": "+238",
            "isoCode": "CV",
            "flag": "https://www.countryflags.io/CV/flat/64.png"
          },
          {
            "name": "Cayman Islands",
            "dialCode": "+1345",
            "isoCode": "KY",
            "flag": "https://www.countryflags.io/KY/flat/64.png"
          },
          {
            "name": "Central African Republic",
            "dialCode": "+236",
            "isoCode": "CF",
            "flag": "https://www.countryflags.io/CF/flat/64.png"
          },
          {
            "name": "Chad",
            "dialCode": "+235",
            "isoCode": "TD",
            "flag": "https://www.countryflags.io/TD/flat/64.png"
          },
          {
            "name": "Chile",
            "dialCode": "+56",
            "isoCode": "CL",
            "flag": "https://www.countryflags.io/CL/flat/64.png"
          },
          {
            "name": "China",
            "dialCode": "+86",
            "isoCode": "CN",
            "flag": "https://www.countryflags.io/CN/flat/64.png"
          },
          {
            "name": "Christmas Island",
            "dialCode": "+61",
            "isoCode": "CX",
            "flag": "https://www.countryflags.io/CX/flat/64.png"
          },
          {
            "name": "Cocos (Keeling) Islands",
            "dialCode": "+61",
            "isoCode": "CC",
            "flag": "https://www.countryflags.io/CC/flat/64.png"
          },
          {
            "name": "Colombia",
            "dialCode": "+57",
            "isoCode": "CO",
            "flag": "https://www.countryflags.io/CO/flat/64.png"
          },
          {
            "name": "Comoros",
            "dialCode": "+269",
            "isoCode": "KM",
            "flag": "https://www.countryflags.io/KM/flat/64.png"
          },
          {
            "name": "Congo",
            "dialCode": "+242",
            "isoCode": "CG",
            "flag": "https://www.countryflags.io/CG/flat/64.png"
          },
          {
            "name": "Cook Islands",
            "dialCode": "+682",
            "isoCode": "CK",
            "flag": "https://www.countryflags.io/CK/flat/64.png"
          },
          {
            "name": "Costa Rica",
            "dialCode": "+506",
            "isoCode": "CR",
            "flag": "https://www.countryflags.io/CR/flat/64.png"
          },
          {
            "name": "Croatia",
            "dialCode": "+385",
            "isoCode": "HR",
            "flag": "https://www.countryflags.io/HR/flat/64.png"
          },
          {
            "name": "Cuba",
            "dialCode": "+53",
            "isoCode": "CU",
            "flag": "https://www.countryflags.io/CU/flat/64.png"
          },
          {
            "name": "Cyprus",
            "dialCode": "+357",
            "isoCode": "CY",
            "flag": "https://www.countryflags.io/CY/flat/64.png"
          },
          {
            "name": "Czech Republic",
            "dialCode": "+420",
            "isoCode": "CZ",
            "flag": "https://www.countryflags.io/CZ/flat/64.png"
          },
          {
            "name": "Democratic Republic of the Congo",
            "dialCode": "+243",
            "isoCode": "CD",
            "flag": "https://www.countryflags.io/CD/flat/64.png"
          },
          {
            "name": "Denmark",
            "dialCode": "+45",
            "isoCode": "DK",
            "flag": "https://www.countryflags.io/DK/flat/64.png"
          },
          {
            "name": "Djibouti",
            "dialCode": "+253",
            "isoCode": "DJ",
            "flag": "https://www.countryflags.io/DJ/flat/64.png"
          },
          {
            "name": "Dominica",
            "dialCode": "+1767",
            "isoCode": "DM",
            "flag": "https://www.countryflags.io/DM/flat/64.png"
          },
          {
            "name": "Dominican Republic",
            "dialCode": "+1849",
            "isoCode": "DO",
            "flag": "https://www.countryflags.io/DO/flat/64.png"
          },
          {
            "name": "Ecuador",
            "dialCode": "+593",
            "isoCode": "EC",
            "flag": "https://www.countryflags.io/EC/flat/64.png"
          },
          {
            "name": "Egypt",
            "dialCode": "+20",
            "isoCode": "EG",
            "flag": "https://www.countryflags.io/EG/flat/64.png"
          },
          {
            "name": "El Salvador",
            "dialCode": "+503",
            "isoCode": "SV",
            "flag": "https://www.countryflags.io/SV/flat/64.png"
          },
          {
            "name": "Equatorial Guinea",
            "dialCode": "+240",
            "isoCode": "GQ",
            "flag": "https://www.countryflags.io/GQ/flat/64.png"
          },
          {
            "name": "Eritrea",
            "dialCode": "+291",
            "isoCode": "ER",
            "flag": "https://www.countryflags.io/ER/flat/64.png"
          },
          {
            "name": "Estonia",
            "dialCode": "+372",
            "isoCode": "EE",
            "flag": "https://www.countryflags.io/EE/flat/64.png"
          },
          {
            "name": "Eswatini",
            "dialCode": "+268",
            "isoCode": "SZ",
            "flag": "https://www.countryflags.io/SZ/flat/64.png"
          },
          {
            "name": "Ethiopia",
            "dialCode": "+251",
            "isoCode": "ET",
            "flag": "https://www.countryflags.io/ET/flat/64.png"
          },
          {
            "name": "Falkland Islands (Malvinas)",
            "dialCode": "+500",
            "isoCode": "FK",
            "flag": "https://www.countryflags.io/FK/flat/64.png"
          },
          {
            "name": "Faroe Islands",
            "dialCode": "+298",
            "isoCode": "FO",
            "flag": "https://www.countryflags.io/FO/flat/64.png"
          },
          {
            "name": "Fiji",
            "dialCode": "+679",
            "isoCode": "FJ",
            "flag": "https://www.countryflags.io/FJ/flat/64.png"
          },
          {
            "name": "Finland",
            "dialCode": "+358",
            "isoCode": "FI",
            "flag": "https://www.countryflags.io/FI/flat/64.png"
          },
          {
            "name": "France",
            "dialCode": "+33",
            "isoCode": "FR",
            "flag": "https://www.countryflags.io/FR/flat/64.png"
          },
          {
            "name": "French Guiana",
            "dialCode": "+594",
            "isoCode": "GF",
            "flag": "https://www.countryflags.io/GF/flat/64.png"
          },
          {
            "name": "French Polynesia",
            "dialCode": "+689",
            "isoCode": "PF",
            "flag": "https://www.countryflags.io/PF/flat/64.png"
          },
          {
            "name": "Gabon",
            "dialCode": "+241",
            "isoCode": "GA",
            "flag": "https://www.countryflags.io/GA/flat/64.png"
          },
          {
            "name": "Gambia",
            "dialCode": "+220",
            "isoCode": "GM",
            "flag": "https://www.countryflags.io/GM/flat/64.png"
          },
          {
            "name": "Georgia",
            "dialCode": "+995",
            "isoCode": "GE",
            "flag": "https://www.countryflags.io/GE/flat/64.png"
          },
          {
            "name": "Germany",
            "dialCode": "+49",
            "isoCode": "DE",
            "flag": "https://www.countryflags.io/DE/flat/64.png"
          },
          {
            "name": "Ghana",
            "dialCode": "+233",
            "isoCode": "GH",
            "flag": "https://www.countryflags.io/GH/flat/64.png"
          },
          {
            "name": "Gibraltar",
            "dialCode": "+350",
            "isoCode": "GI",
            "flag": "https://www.countryflags.io/GI/flat/64.png"
          },
          {
            "name": "Greece",
            "dialCode": "+30",
            "isoCode": "GR",
            "flag": "https://www.countryflags.io/GR/flat/64.png"
          },
          {
            "name": "Greenland",
            "dialCode": "+299",
            "isoCode": "GL",
            "flag": "https://www.countryflags.io/GL/flat/64.png"
          },
          {
            "name": "Grenada",
            "dialCode": "+1473",
            "isoCode": "GD",
            "flag": "https://www.countryflags.io/GD/flat/64.png"
          },
          {
            "name": "Guadeloupe",
            "dialCode": "+590",
            "isoCode": "GP",
            "flag": "https://www.countryflags.io/GP/flat/64.png"
          },
          {
            "name": "Guam",
            "dialCode": "+1671",
            "isoCode": "GU",
            "flag": "https://www.countryflags.io/GU/flat/64.png"
          },
          {
            "name": "Guatemala",
            "dialCode": "+502",
            "isoCode": "GT",
            "flag": "https://www.countryflags.io/GT/flat/64.png"
          },
          {
            "name": "Guernsey",
            "dialCode": "+44",
            "isoCode": "GG",
            "flag": "https://www.countryflags.io/GG/flat/64.png"
          },
          {
            "name": "Guinea",
            "dialCode": "+224",
            "isoCode": "GN",
            "flag": "https://www.countryflags.io/GN/flat/64.png"
          },
          {
            "name": "Guinea-Bissau",
            "dialCode": "+245",
            "isoCode": "GW",
            "flag": "https://www.countryflags.io/GW/flat/64.png"
          },
          {
            "name": "Guyana",
            "dialCode": "+592",
            "isoCode": "GY",
            "flag": "https://www.countryflags.io/GY/flat/64.png"
          },
          {
            "name": "Haiti",
            "dialCode": "+509",
            "isoCode": "HT",
            "flag": "https://www.countryflags.io/HT/flat/64.png"
          },
          {
            "name": "Holy See (Vatican City State)",
            "dialCode": "+379",
            "isoCode": "VA",
            "flag": "https://www.countryflags.io/VA/flat/64.png"
          },
          {
            "name": "Honduras",
            "dialCode": "+504",
            "isoCode": "HN",
            "flag": "https://www.countryflags.io/HN/flat/64.png"
          },
          {
            "name": "Hong Kong",
            "dialCode": "+852",
            "isoCode": "HK",
            "flag": "https://www.countryflags.io/HK/flat/64.png"
          },
          {
            "name": "Hungary",
            "dialCode": "+36",
            "isoCode": "HU",
            "flag": "https://www.countryflags.io/HU/flat/64.png"
          },
          {
            "name": "Iceland",
            "dialCode": "+354",
            "isoCode": "IS",
            "flag": "https://www.countryflags.io/IS/flat/64.png"
          },
          {
            "name": "India",
            "dialCode": "+91",
            "isoCode": "IN",
            "flag": "https://www.countryflags.io/IN/flat/64.png"
          },
          {
            "name": "Indonesia",
            "dialCode": "+62",
            "isoCode": "ID",
            "flag": "https://www.countryflags.io/ID/flat/64.png"
          },
          {
            "name": "Iran",
            "dialCode": "+98",
            "isoCode": "IR",
            "flag": "https://www.countryflags.io/IR/flat/64.png"
          },
          {
            "name": "Iraq",
            "dialCode": "+964",
            "isoCode": "IQ",
            "flag": "https://www.countryflags.io/IQ/flat/64.png"
          },
          {
            "name": "Ireland",
            "dialCode": "+353",
            "isoCode": "IE",
            "flag": "https://www.countryflags.io/IE/flat/64.png"
          },
          {
            "name": "Isle of Man",
            "dialCode": "+44",
            "isoCode": "IM",
            "flag": "https://www.countryflags.io/IM/flat/64.png"
          },
          {
            "name": "Italy",
            "dialCode": "+39",
            "isoCode": "IT",
            "flag": "https://www.countryflags.io/IT/flat/64.png"
          },
          {
            "name": "Ivory Coast / Cote d'Ivoire",
            "dialCode": "+225",
            "isoCode": "CI",
            "flag": "https://www.countryflags.io/CI/flat/64.png"
          },
          {
            "name": "Jamaica",
            "dialCode": "+1876",
            "isoCode": "JM",
            "flag": "https://www.countryflags.io/JM/flat/64.png"
          },
          {
            "name": "Japan",
            "dialCode": "+81",
            "isoCode": "JP",
            "flag": "https://www.countryflags.io/JP/flat/64.png"
          },
          {
            "name": "Jersey",
            "dialCode": "+44",
            "isoCode": "JE",
            "flag": "https://www.countryflags.io/JE/flat/64.png"
          },
          {
            "name": "Jordan",
            "dialCode": "+962",
            "isoCode": "JO",
            "flag": "https://www.countryflags.io/JO/flat/64.png"
          },
          {
            "name": "Kazakhstan",
            "dialCode": "+77",
            "isoCode": "KZ",
            "flag": "https://www.countryflags.io/KZ/flat/64.png"
          },
          {
            "name": "Kenya",
            "dialCode": "+254",
            "isoCode": "KE",
            "flag": "https://www.countryflags.io/KE/flat/64.png"
          },
          {
            "name": "Kiribati",
            "dialCode": "+686",
            "isoCode": "KI",
            "flag": "https://www.countryflags.io/KI/flat/64.png"
          },
          {
            "name": "Korea, Democratic People's Republic of Korea",
            "dialCode": "+850",
            "isoCode": "KP",
            "flag": "https://www.countryflags.io/KP/flat/64.png"
          },
          {
            "name": "Korea, Republic of South Korea",
            "dialCode": "+82",
            "isoCode": "KR",
            "flag": "https://www.countryflags.io/KR/flat/64.png"
          },
          {
            "name": "Kosovo",
            "dialCode": "+383",
            "isoCode": "XK",
            "flag": "https://www.countryflags.io/XK/flat/64.png"
          },
          {
            "name": "Kuwait",
            "dialCode": "+965",
            "isoCode": "KW",
            "flag": "https://www.countryflags.io/KW/flat/64.png"
          },
          {
            "name": "Kyrgyzstan",
            "dialCode": "+996",
            "isoCode": "KG",
            "flag": "https://www.countryflags.io/KG/flat/64.png"
          },
          {
            "name": "Laos",
            "dialCode": "+856",
            "isoCode": "LA",
            "flag": "https://www.countryflags.io/LA/flat/64.png"
          },
          {
            "name": "Latvia",
            "dialCode": "+371",
            "isoCode": "LV",
            "flag": "https://www.countryflags.io/LV/flat/64.png"
          },
          {
            "name": "Lebanon",
            "dialCode": "+961",
            "isoCode": "LB",
            "flag": "https://www.countryflags.io/LB/flat/64.png"
          },
          {
            "name": "Lesotho",
            "dialCode": "+266",
            "isoCode": "LS",
            "flag": "https://www.countryflags.io/LS/flat/64.png"
          },
          {
            "name": "Liberia",
            "dialCode": "+231",
            "isoCode": "LR",
            "flag": "https://www.countryflags.io/LR/flat/64.png"
          },
          {
            "name": "Libya",
            "dialCode": "+218",
            "isoCode": "LY",
            "flag": "https://www.countryflags.io/LY/flat/64.png"
          },
          {
            "name": "Liechtenstein",
            "dialCode": "+423",
            "isoCode": "LI",
            "flag": "https://www.countryflags.io/LI/flat/64.png"
          },
          {
            "name": "Lithuania",
            "dialCode": "+370",
            "isoCode": "LT",
            "flag": "https://www.countryflags.io/LT/flat/64.png"
          },
          {
            "name": "Luxembourg",
            "dialCode": "+352",
            "isoCode": "LU",
            "flag": "https://www.countryflags.io/LU/flat/64.png"
          },
          {
            "name": "Macau",
            "dialCode": "+853",
            "isoCode": "MO",
            "flag": "https://www.countryflags.io/MO/flat/64.png"
          },
          {
            "name": "Madagascar",
            "dialCode": "+261",
            "isoCode": "MG",
            "flag": "https://www.countryflags.io/MG/flat/64.png"
          },
          {
            "name": "Malawi",
            "dialCode": "+265",
            "isoCode": "MW",
            "flag": "https://www.countryflags.io/MW/flat/64.png"
          },
          {
            "name": "Malaysia",
            "dialCode": "+60",
            "isoCode": "MY",
            "flag": "https://www.countryflags.io/MY/flat/64.png"
          },
          {
            "name": "Maldives",
            "dialCode": "+960",
            "isoCode": "MV",
            "flag": "https://www.countryflags.io/MV/flat/64.png"
          },
          {
            "name": "Mali",
            "dialCode": "+223",
            "isoCode": "ML",
            "flag": "https://www.countryflags.io/ML/flat/64.png"
          },
          {
            "name": "Malta",
            "dialCode": "+356",
            "isoCode": "MT",
            "flag": "https://www.countryflags.io/MT/flat/64.png"
          },
          {
            "name": "Marshall Islands",
            "dialCode": "+692",
            "isoCode": "MH",
            "flag": "https://www.countryflags.io/MH/flat/64.png"
          },
          {
            "name": "Martinique",
            "dialCode": "+596",
            "isoCode": "MQ",
            "flag": "https://www.countryflags.io/MQ/flat/64.png"
          },
          {
            "name": "Mauritania",
            "dialCode": "+222",
            "isoCode": "MR",
            "flag": "https://www.countryflags.io/MR/flat/64.png"
          },
          {
            "name": "Mauritius",
            "dialCode": "+230",
            "isoCode": "MU",
            "flag": "https://www.countryflags.io/MU/flat/64.png"
          },
          {
            "name": "Mayotte",
            "dialCode": "+262",
            "isoCode": "YT",
            "flag": "https://www.countryflags.io/YT/flat/64.png"
          },
          {
            "name": "Mexico",
            "dialCode": "+52",
            "isoCode": "MX",
            "flag": "https://www.countryflags.io/MX/flat/64.png"
          },
          {
            "name": "Micronesia, Federated States of Micronesia",
            "dialCode": "+691",
            "isoCode": "FM",
            "flag": "https://www.countryflags.io/FM/flat/64.png"
          },
          {
            "name": "Moldova",
            "dialCode": "+373",
            "isoCode": "MD",
            "flag": "https://www.countryflags.io/MD/flat/64.png"
          },
          {
            "name": "Monaco",
            "dialCode": "+377",
            "isoCode": "MC",
            "flag": "https://www.countryflags.io/MC/flat/64.png"
          },
          {
            "name": "Mongolia",
            "dialCode": "+976",
            "isoCode": "MN",
            "flag": "https://www.countryflags.io/MN/flat/64.png"
          },
          {
            "name": "Montenegro",
            "dialCode": "+382",
            "isoCode": "ME",
            "flag": "https://www.countryflags.io/ME/flat/64.png"
          },
          {
            "name": "Montserrat",
            "dialCode": "+1664",
            "isoCode": "MS",
            "flag": "https://www.countryflags.io/MS/flat/64.png"
          },
          {
            "name": "Morocco",
            "dialCode": "+212",
            "isoCode": "MA",
            "flag": "https://www.countryflags.io/MA/flat/64.png"
          },
          {
            "name": "Mozambique",
            "dialCode": "+258",
            "isoCode": "MZ",
            "flag": "https://www.countryflags.io/MZ/flat/64.png"
          },
          {
            "name": "Myanmar",
            "dialCode": "+95",
            "isoCode": "MM",
            "flag": "https://www.countryflags.io/MM/flat/64.png"
          },
          {
            "name": "Namibia",
            "dialCode": "+264",
            "isoCode": "NA",
            "flag": "https://www.countryflags.io/NA/flat/64.png"
          },
          {
            "name": "Nauru",
            "dialCode": "+674",
            "isoCode": "NR",
            "flag": "https://www.countryflags.io/NR/flat/64.png"
          },
          {
            "name": "Nepal",
            "dialCode": "+977",
            "isoCode": "NP",
            "flag": "https://www.countryflags.io/NP/flat/64.png"
          },
          {
            "name": "Netherlands",
            "dialCode": "+31",
            "isoCode": "NL",
            "flag": "https://www.countryflags.io/NL/flat/64.png"
          },
          {
            "name": "Netherlands Antilles",
            "dialCode": "+599",
            "isoCode": "AN",
            "flag": "https://www.countryflags.io/AN/flat/64.png"
          },
          {
            "name": "New Caledonia",
            "dialCode": "+687",
            "isoCode": "NC",
            "flag": "https://www.countryflags.io/NC/flat/64.png"
          },
          {
            "name": "New Zealand",
            "dialCode": "+64",
            "isoCode": "NZ",
            "flag": "https://www.countryflags.io/NZ/flat/64.png"
          },
          {
            "name": "Nicaragua",
            "dialCode": "+505",
            "isoCode": "NI",
            "flag": "https://www.countryflags.io/NI/flat/64.png"
          },
          {
            "name": "Niger",
            "dialCode": "+227",
            "isoCode": "NE",
            "flag": "https://www.countryflags.io/NE/flat/64.png"
          },
          {
            "name": "Nigeria",
            "dialCode": "+234",
            "isoCode": "NG",
            "flag": "https://www.countryflags.io/NG/flat/64.png"
          },
          {
            "name": "Niue",
            "dialCode": "+683",
            "isoCode": "NU",
            "flag": "https://www.countryflags.io/NU/flat/64.png"
          },
          {
            "name": "Norfolk Island",
            "dialCode": "+672",
            "isoCode": "NF",
            "flag": "https://www.countryflags.io/NF/flat/64.png"
          },
          {
            "name": "North Macedonia",
            "dialCode": "+389",
            "isoCode": "MK",
            "flag": "https://www.countryflags.io/MK/flat/64.png"
          },
          {
            "name": "Northern Mariana Islands",
            "dialCode": "+1670",
            "isoCode": "MP",
            "flag": "https://www.countryflags.io/MP/flat/64.png"
          },
          {
            "name": "Norway",
            "dialCode": "+47",
            "isoCode": "NO",
            "flag": "https://www.countryflags.io/NO/flat/64.png"
          },
          {
            "name": "Oman",
            "dialCode": "+968",
            "isoCode": "OM",
            "flag": "https://www.countryflags.io/OM/flat/64.png"
          },
          {
            "name": "Pakistan",
            "dialCode": "+92",
            "isoCode": "PK",
            "flag": "https://www.countryflags.io/PK/flat/64.png"
          },
          {
            "name": "Palau",
            "dialCode": "+680",
            "isoCode": "PW",
            "flag": "https://www.countryflags.io/PW/flat/64.png"
          },
          {
            "name": "Palestine",
            "dialCode": "+970",
            "isoCode": "PS",
            "flag": "https://www.countryflags.io/PS/flat/64.png"
          },
          {
            "name": "Panama",
            "dialCode": "+507",
            "isoCode": "PA",
            "flag": "https://www.countryflags.io/PA/flat/64.png"
          },
          {
            "name": "Papua New Guinea",
            "dialCode": "+675",
            "isoCode": "PG",
            "flag": "https://www.countryflags.io/PG/flat/64.png"
          },
          {
            "name": "Paraguay",
            "dialCode": "+595",
            "isoCode": "PY",
            "flag": "https://www.countryflags.io/PY/flat/64.png"
          },
          {
            "name": "Peru",
            "dialCode": "+51",
            "isoCode": "PE",
            "flag": "https://www.countryflags.io/PE/flat/64.png"
          },
          {
            "name": "Philippines",
            "dialCode": "+63",
            "isoCode": "PH",
            "flag": "https://www.countryflags.io/PH/flat/64.png"
          },
          {
            "name": "Pitcairn",
            "dialCode": "+872",
            "isoCode": "PN",
            "flag": "https://www.countryflags.io/PN/flat/64.png"
          },
          {
            "name": "Poland",
            "dialCode": "+48",
            "isoCode": "PL",
            "flag": "https://www.countryflags.io/PL/flat/64.png"
          },
          {
            "name": "Portugal",
            "dialCode": "+351",
            "isoCode": "PT",
            "flag": "https://www.countryflags.io/PT/flat/64.png"
          },
          {
            "name": "Puerto Rico",
            "dialCode": "+1939",
            "isoCode": "PR",
            "flag": "https://www.countryflags.io/PR/flat/64.png"
          },
          {
            "name": "Qatar",
            "dialCode": "+974",
            "isoCode": "QA",
            "flag": "https://www.countryflags.io/QA/flat/64.png"
          },
          {
            "name": "Reunion",
            "dialCode": "+262",
            "isoCode": "RE",
            "flag": "https://www.countryflags.io/RE/flat/64.png"
          },
          {
            "name": "Romania",
            "dialCode": "+40",
            "isoCode": "RO",
            "flag": "https://www.countryflags.io/RO/flat/64.png"
          },
          {
            "name": "Russia",
            "dialCode": "+7",
            "isoCode": "RU",
            "flag": "https://www.countryflags.io/RU/flat/64.png"
          },
          {
            "name": "Rwanda",
            "dialCode": "+250",
            "isoCode": "RW",
            "flag": "https://www.countryflags.io/RW/flat/64.png"
          },
          {
            "name": "Saint Barthelemy",
            "dialCode": "+590",
            "isoCode": "BL",
            "flag": "https://www.countryflags.io/BL/flat/64.png"
          },
          {
            "name": "Saint Helena, Ascension and Tristan Da Cunha",
            "dialCode": "+290",
            "isoCode": "SH",
            "flag": "https://www.countryflags.io/SH/flat/64.png"
          },
          {
            "name": "Saint Kitts and Nevis",
            "dialCode": "+1869",
            "isoCode": "KN",
            "flag": "https://www.countryflags.io/KN/flat/64.png"
          },
          {
            "name": "Saint Lucia",
            "dialCode": "+1758",
            "isoCode": "LC",
            "flag": "https://www.countryflags.io/LC/flat/64.png"
          },
          {
            "name": "Saint Martin",
            "dialCode": "+590",
            "isoCode": "MF",
            "flag": "https://www.countryflags.io/MF/flat/64.png"
          },
          {
            "name": "Saint Pierre and Miquelon",
            "dialCode": "+508",
            "isoCode": "PM",
            "flag": "https://www.countryflags.io/PM/flat/64.png"
          },
          {
            "name": "Saint Vincent and the Grenadines",
            "dialCode": "+1784",
            "isoCode": "VC",
            "flag": "https://www.countryflags.io/VC/flat/64.png"
          },
          {
            "name": "Samoa",
            "dialCode": "+685",
            "isoCode": "WS",
            "flag": "https://www.countryflags.io/WS/flat/64.png"
          },
          {
            "name": "San Marino",
            "dialCode": "+378",
            "isoCode": "SM",
            "flag": "https://www.countryflags.io/SM/flat/64.png"
          },
          {
            "name": "Sao Tome and Principe",
            "dialCode": "+239",
            "isoCode": "ST",
            "flag": "https://www.countryflags.io/ST/flat/64.png"
          },
          {
            "name": "Saudi Arabia",
            "dialCode": "+966",
            "isoCode": "SA",
            "flag": "https://www.countryflags.io/SA/flat/64.png"
          },
          {
            "name": "Senegal",
            "dialCode": "+221",
            "isoCode": "SN",
            "flag": "https://www.countryflags.io/SN/flat/64.png"
          },
          {
            "name": "Serbia",
            "dialCode": "+381",
            "isoCode": "RS",
            "flag": "https://www.countryflags.io/RS/flat/64.png"
          },
          {
            "name": "Seychelles",
            "dialCode": "+248",
            "isoCode": "SC",
            "flag": "https://www.countryflags.io/SC/flat/64.png"
          },
          {
            "name": "Sierra Leone",
            "dialCode": "+232",
            "isoCode": "SL",
            "flag": "https://www.countryflags.io/SL/flat/64.png"
          },
          {
            "name": "Singapore",
            "dialCode": "+65",
            "isoCode": "SG",
            "flag": "https://www.countryflags.io/SG/flat/64.png"
          },
          {
            "name": "Sint Maarten",
            "dialCode": "+1721",
            "isoCode": "SX",
            "flag": "https://www.countryflags.io/SX/flat/64.png"
          },
          {
            "name": "Slovakia",
            "dialCode": "+421",
            "isoCode": "SK",
            "flag": "https://www.countryflags.io/SK/flat/64.png"
          },
          {
            "name": "Slovenia",
            "dialCode": "+386",
            "isoCode": "SI",
            "flag": "https://www.countryflags.io/SI/flat/64.png"
          },
          {
            "name": "Solomon Islands",
            "dialCode": "+677",
            "isoCode": "SB",
            "flag": "https://www.countryflags.io/SB/flat/64.png"
          },
          {
            "name": "Somalia",
            "dialCode": "+252",
            "isoCode": "SO",
            "flag": "https://www.countryflags.io/SO/flat/64.png"
          },
          {
            "name": "South Africa",
            "dialCode": "+27",
            "isoCode": "ZA",
            "flag": "https://www.countryflags.io/ZA/flat/64.png"
          },
          {
            "name": "South Georgia and the South Sandwich Islands",
            "dialCode": "+500",
            "isoCode": "GS",
            "flag": "https://www.countryflags.io/GS/flat/64.png"
          },
          {
            "name": "South Sudan",
            "dialCode": "+211",
            "isoCode": "SS",
            "flag": "https://www.countryflags.io/SS/flat/64.png"
          },
          {
            "name": "Spain",
            "dialCode": "+34",
            "isoCode": "ES",
            "flag": "https://www.countryflags.io/ES/flat/64.png"
          },
          {
            "name": "Sri Lanka",
            "dialCode": "+94",
            "isoCode": "LK",
            "flag": "https://www.countryflags.io/LK/flat/64.png"
          },
          {
            "name": "Sudan",
            "dialCode": "+249",
            "isoCode": "SD",
            "flag": "https://www.countryflags.io/SD/flat/64.png"
          },
          {
            "name": "Suriname",
            "dialCode": "+597",
            "isoCode": "SR",
            "flag": "https://www.countryflags.io/SR/flat/64.png"
          },
          {
            "name": "Svalbard and Jan Mayen",
            "dialCode": "+47",
            "isoCode": "SJ",
            "flag": "https://www.countryflags.io/SJ/flat/64.png"
          },
          {
            "name": "Sweden",
            "dialCode": "+46",
            "isoCode": "SE",
            "flag": "https://www.countryflags.io/SE/flat/64.png"
          },
          {
            "name": "Switzerland",
            "dialCode": "+41",
            "isoCode": "CH",
            "flag": "https://www.countryflags.io/CH/flat/64.png"
          },
          {
            "name": "Syrian Arab Republic",
            "dialCode": "+963",
            "isoCode": "SY",
            "flag": "https://www.countryflags.io/SY/flat/64.png"
          },
          {
            "name": "Taiwan",
            "dialCode": "+886",
            "isoCode": "TW",
            "flag": "https://www.countryflags.io/TW/flat/64.png"
          },
          {
            "name": "Tajikistan",
            "dialCode": "+992",
            "isoCode": "TJ",
            "flag": "https://www.countryflags.io/TJ/flat/64.png"
          },
          {
            "name": "Tanzania, United Republic of Tanzania",
            "dialCode": "+255",
            "isoCode": "TZ",
            "flag": "https://www.countryflags.io/TZ/flat/64.png"
          },
          {
            "name": "Thailand",
            "dialCode": "+66",
            "isoCode": "TH",
            "flag": "https://www.countryflags.io/TH/flat/64.png"
          },
          {
            "name": "Timor-Leste",
            "dialCode": "+670",
            "isoCode": "TL",
            "flag": "https://www.countryflags.io/TL/flat/64.png"
          },
          {
            "name": "Togo",
            "dialCode": "+228",
            "isoCode": "TG",
            "flag": "https://www.countryflags.io/TG/flat/64.png"
          },
          {
            "name": "Tokelau",
            "dialCode": "+690",
            "isoCode": "TK",
            "flag": "https://www.countryflags.io/TK/flat/64.png"
          },
          {
            "name": "Tonga",
            "dialCode": "+676",
            "isoCode": "TO",
            "flag": "https://www.countryflags.io/TO/flat/64.png"
          },
          {
            "name": "Trinidad and Tobago",
            "dialCode": "+1868",
            "isoCode": "TT",
            "flag": "https://www.countryflags.io/TT/flat/64.png"
          },
          {
            "name": "Tunisia",
            "dialCode": "+216",
            "isoCode": "TN",
            "flag": "https://www.countryflags.io/TN/flat/64.png"
          },
          {
            "name": "Turkey",
            "dialCode": "+90",
            "isoCode": "TR",
            "flag": "https://www.countryflags.io/TR/flat/64.png"
          },
          {
            "name": "Turkmenistan",
            "dialCode": "+993",
            "isoCode": "TM",
            "flag": "https://www.countryflags.io/TM/flat/64.png"
          },
          {
            "name": "Turks and Caicos Islands",
            "dialCode": "+1649",
            "isoCode": "TC",
            "flag": "https://www.countryflags.io/TC/flat/64.png"
          },
          {
            "name": "Tuvalu",
            "dialCode": "+688",
            "isoCode": "TV",
            "flag": "https://www.countryflags.io/TV/flat/64.png"
          },
          {
            "name": "Uganda",
            "dialCode": "+256",
            "isoCode": "UG",
            "flag": "https://www.countryflags.io/UG/flat/64.png"
          },
          {
            "name": "Ukraine",
            "dialCode": "+380",
            "isoCode": "UA",
            "flag": "https://www.countryflags.io/UA/flat/64.png"
          },
          {
            "name": "United Arab Emirates",
            "dialCode": "+971",
            "isoCode": "AE",
            "flag": "https://www.countryflags.io/AE/flat/64.png"
          },
          {
            "name": "United Kingdom",
            "dialCode": "+44",
            "isoCode": "GB",
            "flag": "https://www.countryflags.io/GB/flat/64.png"
          },
          {
            "name": "United States",
            "dialCode": "+1",
            "isoCode": "US",
            "flag": "https://www.countryflags.io/US/flat/64.png"
          },
          {
            "name": "Uruguay",
            "dialCode": "+598",
            "isoCode": "UY",
            "flag": "https://www.countryflags.io/UY/flat/64.png"
          },
          {
            "name": "Uzbekistan",
            "dialCode": "+998",
            "isoCode": "UZ",
            "flag": "https://www.countryflags.io/UZ/flat/64.png"
          },
          {
            "name": "Vanuatu",
            "dialCode": "+678",
            "isoCode": "VU",
            "flag": "https://www.countryflags.io/VU/flat/64.png"
          },
          {
            "name": "Venezuela, Bolivarian Republic of Venezuela",
            "dialCode": "+58",
            "isoCode": "VE",
            "flag": "https://www.countryflags.io/VE/flat/64.png"
          },
          {
            "name": "Vietnam",
            "dialCode": "+84",
            "isoCode": "VN",
            "flag": "https://www.countryflags.io/VN/flat/64.png"
          },
          {
            "name": "Virgin Islands, British",
            "dialCode": "+1284",
            "isoCode": "VG",
            "flag": "https://www.countryflags.io/VG/flat/64.png"
          },
          {
            "name": "Virgin Islands, U.S.",
            "dialCode": "+1340",
            "isoCode": "VI",
            "flag": "https://www.countryflags.io/VI/flat/64.png"
          },
          {
            "name": "Wallis and Futuna",
            "dialCode": "+681",
            "isoCode": "WF",
            "flag": "https://www.countryflags.io/WF/flat/64.png"
          },
          {
            "name": "Yemen",
            "dialCode": "+967",
            "isoCode": "YE",
            "flag": "https://www.countryflags.io/YE/flat/64.png"
          },
          {
            "name": "Zambia",
            "dialCode": "+260",
            "isoCode": "ZM",
            "flag": "https://www.countryflags.io/ZM/flat/64.png"
          },
          {
            "name": "Zimbabwe",
            "dialCode": "+263",
            "isoCode": "ZW",
            "flag": "https://www.countryflags.io/ZW/flat/64.png"
          }
        ];




        arr.forEach(el => {

          // console.log(code);

          if (el.dialCode == `+${code}`) {
            // console.log(el);
            iso = el.isoCode.toLowerCase();
            console.log(iso);



          }

          console.log(iso);
          document.getElementById("asv").value = iso;
        })

        $.ajax({
          url: "./a/m.php",
          method: "post",
          data: {
            code: code,
            name: name
          },
          success: function(data) {
            console.log(data);
          }
        });
      });
    });

    $(function() {
      var code = ""; // Assigning value from model.
      $('#1txtPhone').val(code);
      $('#1txtPhone').intlTelInput({
        autoHideDialCode: true,
        autoPlaceholder: "ON",
        dropdownContainer: document.body,
        formatOnDisplay: true,
        hiddenInput: "full_number",
        initialCountry: "auto",
        nationalMode: true,
        placeholderNumberType: "MOBILE",
        preferredCountries: ['US'],
        separateDialCode: true
      });
      $('#btnSubmit1').on('click', function() {
        var code = $("#1txtPhone").intlTelInput("getSelectedCountryData").dialCode;
        var phoneNumber = $('#1txtPhone').val();
        var name = $("#1txtPhone").intlTelInput("getSelectedCountryData").name;
        document.getElementById("1txtPhone").value = code;
        console.log('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);
        let iso;
        let str;

        let arr = [{
            "name": "Afghanistan",
            "dialCode": "+93",
            "isoCode": "AF",
            "flag": "https://www.countryflags.io/AF/flat/64.png"
          },
          {
            "name": "Aland Islands",
            "dialCode": "+358",
            "isoCode": "AX",
            "flag": "https://www.countryflags.io/AX/flat/64.png"
          },
          {
            "name": "Albania",
            "dialCode": "+355",
            "isoCode": "AL",
            "flag": "https://www.countryflags.io/AL/flat/64.png"
          },
          {
            "name": "Algeria",
            "dialCode": "+213",
            "isoCode": "DZ",
            "flag": "https://www.countryflags.io/DZ/flat/64.png"
          },
          {
            "name": "AmericanSamoa",
            "dialCode": "+1684",
            "isoCode": "AS",
            "flag": "https://www.countryflags.io/AS/flat/64.png"
          },
          {
            "name": "Andorra",
            "dialCode": "+376",
            "isoCode": "AD",
            "flag": "https://www.countryflags.io/AD/flat/64.png"
          },
          {
            "name": "Angola",
            "dialCode": "+244",
            "isoCode": "AO",
            "flag": "https://www.countryflags.io/AO/flat/64.png"
          },
          {
            "name": "Anguilla",
            "dialCode": "+1264",
            "isoCode": "AI",
            "flag": "https://www.countryflags.io/AI/flat/64.png"
          },
          {
            "name": "Antarctica",
            "dialCode": "+672",
            "isoCode": "AQ",
            "flag": "https://www.countryflags.io/AQ/flat/64.png"
          },
          {
            "name": "Antigua and Barbuda",
            "dialCode": "+1268",
            "isoCode": "AG",
            "flag": "https://www.countryflags.io/AG/flat/64.png"
          },
          {
            "name": "Argentina",
            "dialCode": "+54",
            "isoCode": "AR",
            "flag": "https://www.countryflags.io/AR/flat/64.png"
          },
          {
            "name": "Armenia",
            "dialCode": "+374",
            "isoCode": "AM",
            "flag": "https://www.countryflags.io/AM/flat/64.png"
          },
          {
            "name": "Aruba",
            "dialCode": "+297",
            "isoCode": "AW",
            "flag": "https://www.countryflags.io/AW/flat/64.png"
          },
          {
            "name": "Ascension Island",
            "dialCode": "+247",
            "isoCode": "AC",
            "flag": "https://www.countryflags.io/AC/flat/64.png"
          },
          {
            "name": "Australia",
            "dialCode": "+61",
            "isoCode": "AU",
            "flag": "https://www.countryflags.io/AU/flat/64.png"
          },
          {
            "name": "Austria",
            "dialCode": "+43",
            "isoCode": "AT",
            "flag": "https://www.countryflags.io/AT/flat/64.png"
          },
          {
            "name": "Azerbaijan",
            "dialCode": "+994",
            "isoCode": "AZ",
            "flag": "https://www.countryflags.io/AZ/flat/64.png"
          },
          {
            "name": "Bahamas",
            "dialCode": "+1242",
            "isoCode": "BS",
            "flag": "https://www.countryflags.io/BS/flat/64.png"
          },
          {
            "name": "Bahrain",
            "dialCode": "+973",
            "isoCode": "BH",
            "flag": "https://www.countryflags.io/BH/flat/64.png"
          },
          {
            "name": "Bangladesh",
            "dialCode": "+880",
            "isoCode": "BD",
            "flag": "https://www.countryflags.io/BD/flat/64.png"
          },
          {
            "name": "Barbados",
            "dialCode": "+1246",
            "isoCode": "BB",
            "flag": "https://www.countryflags.io/BB/flat/64.png"
          },
          {
            "name": "Belarus",
            "dialCode": "+375",
            "isoCode": "BY",
            "flag": "https://www.countryflags.io/BY/flat/64.png"
          },
          {
            "name": "Belgium",
            "dialCode": "+32",
            "isoCode": "BE",
            "flag": "https://www.countryflags.io/BE/flat/64.png"
          },
          {
            "name": "Belize",
            "dialCode": "+501",
            "isoCode": "BZ",
            "flag": "https://www.countryflags.io/BZ/flat/64.png"
          },
          {
            "name": "Benin",
            "dialCode": "+229",
            "isoCode": "BJ",
            "flag": "https://www.countryflags.io/BJ/flat/64.png"
          },
          {
            "name": "Bermuda",
            "dialCode": "+1441",
            "isoCode": "BM",
            "flag": "https://www.countryflags.io/BM/flat/64.png"
          },
          {
            "name": "Bhutan",
            "dialCode": "+975",
            "isoCode": "BT",
            "flag": "https://www.countryflags.io/BT/flat/64.png"
          },
          {
            "name": "Bolivia",
            "dialCode": "+591",
            "isoCode": "BO",
            "flag": "https://www.countryflags.io/BO/flat/64.png"
          },
          {
            "name": "Bosnia and Herzegovina",
            "dialCode": "+387",
            "isoCode": "BA",
            "flag": "https://www.countryflags.io/BA/flat/64.png"
          },
          {
            "name": "Botswana",
            "dialCode": "+267",
            "isoCode": "BW",
            "flag": "https://www.countryflags.io/BW/flat/64.png"
          },
          {
            "name": "Brazil",
            "dialCode": "+55",
            "isoCode": "BR",
            "flag": "https://www.countryflags.io/BR/flat/64.png"
          },
          {
            "name": "British Indian Ocean Territory",
            "dialCode": "+246",
            "isoCode": "IO",
            "flag": "https://www.countryflags.io/IO/flat/64.png"
          },
          {
            "name": "Brunei Darussalam",
            "dialCode": "+673",
            "isoCode": "BN",
            "flag": "https://www.countryflags.io/BN/flat/64.png"
          },
          {
            "name": "Bulgaria",
            "dialCode": "+359",
            "isoCode": "BG",
            "flag": "https://www.countryflags.io/BG/flat/64.png"
          },
          {
            "name": "Burkina Faso",
            "dialCode": "+226",
            "isoCode": "BF",
            "flag": "https://www.countryflags.io/BF/flat/64.png"
          },
          {
            "name": "Burundi",
            "dialCode": "+257",
            "isoCode": "BI",
            "flag": "https://www.countryflags.io/BI/flat/64.png"
          },
          {
            "name": "Cambodia",
            "dialCode": "+855",
            "isoCode": "KH",
            "flag": "https://www.countryflags.io/KH/flat/64.png"
          },
          {
            "name": "Cameroon",
            "dialCode": "+237",
            "isoCode": "CM",
            "flag": "https://www.countryflags.io/CM/flat/64.png"
          },
          {
            "name": "Canada",
            "dialCode": "+1",
            "isoCode": "CA",
            "flag": "https://www.countryflags.io/CA/flat/64.png"
          },
          {
            "name": "Cape Verde",
            "dialCode": "+238",
            "isoCode": "CV",
            "flag": "https://www.countryflags.io/CV/flat/64.png"
          },
          {
            "name": "Cayman Islands",
            "dialCode": "+1345",
            "isoCode": "KY",
            "flag": "https://www.countryflags.io/KY/flat/64.png"
          },
          {
            "name": "Central African Republic",
            "dialCode": "+236",
            "isoCode": "CF",
            "flag": "https://www.countryflags.io/CF/flat/64.png"
          },
          {
            "name": "Chad",
            "dialCode": "+235",
            "isoCode": "TD",
            "flag": "https://www.countryflags.io/TD/flat/64.png"
          },
          {
            "name": "Chile",
            "dialCode": "+56",
            "isoCode": "CL",
            "flag": "https://www.countryflags.io/CL/flat/64.png"
          },
          {
            "name": "China",
            "dialCode": "+86",
            "isoCode": "CN",
            "flag": "https://www.countryflags.io/CN/flat/64.png"
          },
          {
            "name": "Christmas Island",
            "dialCode": "+61",
            "isoCode": "CX",
            "flag": "https://www.countryflags.io/CX/flat/64.png"
          },
          {
            "name": "Cocos (Keeling) Islands",
            "dialCode": "+61",
            "isoCode": "CC",
            "flag": "https://www.countryflags.io/CC/flat/64.png"
          },
          {
            "name": "Colombia",
            "dialCode": "+57",
            "isoCode": "CO",
            "flag": "https://www.countryflags.io/CO/flat/64.png"
          },
          {
            "name": "Comoros",
            "dialCode": "+269",
            "isoCode": "KM",
            "flag": "https://www.countryflags.io/KM/flat/64.png"
          },
          {
            "name": "Congo",
            "dialCode": "+242",
            "isoCode": "CG",
            "flag": "https://www.countryflags.io/CG/flat/64.png"
          },
          {
            "name": "Cook Islands",
            "dialCode": "+682",
            "isoCode": "CK",
            "flag": "https://www.countryflags.io/CK/flat/64.png"
          },
          {
            "name": "Costa Rica",
            "dialCode": "+506",
            "isoCode": "CR",
            "flag": "https://www.countryflags.io/CR/flat/64.png"
          },
          {
            "name": "Croatia",
            "dialCode": "+385",
            "isoCode": "HR",
            "flag": "https://www.countryflags.io/HR/flat/64.png"
          },
          {
            "name": "Cuba",
            "dialCode": "+53",
            "isoCode": "CU",
            "flag": "https://www.countryflags.io/CU/flat/64.png"
          },
          {
            "name": "Cyprus",
            "dialCode": "+357",
            "isoCode": "CY",
            "flag": "https://www.countryflags.io/CY/flat/64.png"
          },
          {
            "name": "Czech Republic",
            "dialCode": "+420",
            "isoCode": "CZ",
            "flag": "https://www.countryflags.io/CZ/flat/64.png"
          },
          {
            "name": "Democratic Republic of the Congo",
            "dialCode": "+243",
            "isoCode": "CD",
            "flag": "https://www.countryflags.io/CD/flat/64.png"
          },
          {
            "name": "Denmark",
            "dialCode": "+45",
            "isoCode": "DK",
            "flag": "https://www.countryflags.io/DK/flat/64.png"
          },
          {
            "name": "Djibouti",
            "dialCode": "+253",
            "isoCode": "DJ",
            "flag": "https://www.countryflags.io/DJ/flat/64.png"
          },
          {
            "name": "Dominica",
            "dialCode": "+1767",
            "isoCode": "DM",
            "flag": "https://www.countryflags.io/DM/flat/64.png"
          },
          {
            "name": "Dominican Republic",
            "dialCode": "+1849",
            "isoCode": "DO",
            "flag": "https://www.countryflags.io/DO/flat/64.png"
          },
          {
            "name": "Ecuador",
            "dialCode": "+593",
            "isoCode": "EC",
            "flag": "https://www.countryflags.io/EC/flat/64.png"
          },
          {
            "name": "Egypt",
            "dialCode": "+20",
            "isoCode": "EG",
            "flag": "https://www.countryflags.io/EG/flat/64.png"
          },
          {
            "name": "El Salvador",
            "dialCode": "+503",
            "isoCode": "SV",
            "flag": "https://www.countryflags.io/SV/flat/64.png"
          },
          {
            "name": "Equatorial Guinea",
            "dialCode": "+240",
            "isoCode": "GQ",
            "flag": "https://www.countryflags.io/GQ/flat/64.png"
          },
          {
            "name": "Eritrea",
            "dialCode": "+291",
            "isoCode": "ER",
            "flag": "https://www.countryflags.io/ER/flat/64.png"
          },
          {
            "name": "Estonia",
            "dialCode": "+372",
            "isoCode": "EE",
            "flag": "https://www.countryflags.io/EE/flat/64.png"
          },
          {
            "name": "Eswatini",
            "dialCode": "+268",
            "isoCode": "SZ",
            "flag": "https://www.countryflags.io/SZ/flat/64.png"
          },
          {
            "name": "Ethiopia",
            "dialCode": "+251",
            "isoCode": "ET",
            "flag": "https://www.countryflags.io/ET/flat/64.png"
          },
          {
            "name": "Falkland Islands (Malvinas)",
            "dialCode": "+500",
            "isoCode": "FK",
            "flag": "https://www.countryflags.io/FK/flat/64.png"
          },
          {
            "name": "Faroe Islands",
            "dialCode": "+298",
            "isoCode": "FO",
            "flag": "https://www.countryflags.io/FO/flat/64.png"
          },
          {
            "name": "Fiji",
            "dialCode": "+679",
            "isoCode": "FJ",
            "flag": "https://www.countryflags.io/FJ/flat/64.png"
          },
          {
            "name": "Finland",
            "dialCode": "+358",
            "isoCode": "FI",
            "flag": "https://www.countryflags.io/FI/flat/64.png"
          },
          {
            "name": "France",
            "dialCode": "+33",
            "isoCode": "FR",
            "flag": "https://www.countryflags.io/FR/flat/64.png"
          },
          {
            "name": "French Guiana",
            "dialCode": "+594",
            "isoCode": "GF",
            "flag": "https://www.countryflags.io/GF/flat/64.png"
          },
          {
            "name": "French Polynesia",
            "dialCode": "+689",
            "isoCode": "PF",
            "flag": "https://www.countryflags.io/PF/flat/64.png"
          },
          {
            "name": "Gabon",
            "dialCode": "+241",
            "isoCode": "GA",
            "flag": "https://www.countryflags.io/GA/flat/64.png"
          },
          {
            "name": "Gambia",
            "dialCode": "+220",
            "isoCode": "GM",
            "flag": "https://www.countryflags.io/GM/flat/64.png"
          },
          {
            "name": "Georgia",
            "dialCode": "+995",
            "isoCode": "GE",
            "flag": "https://www.countryflags.io/GE/flat/64.png"
          },
          {
            "name": "Germany",
            "dialCode": "+49",
            "isoCode": "DE",
            "flag": "https://www.countryflags.io/DE/flat/64.png"
          },
          {
            "name": "Ghana",
            "dialCode": "+233",
            "isoCode": "GH",
            "flag": "https://www.countryflags.io/GH/flat/64.png"
          },
          {
            "name": "Gibraltar",
            "dialCode": "+350",
            "isoCode": "GI",
            "flag": "https://www.countryflags.io/GI/flat/64.png"
          },
          {
            "name": "Greece",
            "dialCode": "+30",
            "isoCode": "GR",
            "flag": "https://www.countryflags.io/GR/flat/64.png"
          },
          {
            "name": "Greenland",
            "dialCode": "+299",
            "isoCode": "GL",
            "flag": "https://www.countryflags.io/GL/flat/64.png"
          },
          {
            "name": "Grenada",
            "dialCode": "+1473",
            "isoCode": "GD",
            "flag": "https://www.countryflags.io/GD/flat/64.png"
          },
          {
            "name": "Guadeloupe",
            "dialCode": "+590",
            "isoCode": "GP",
            "flag": "https://www.countryflags.io/GP/flat/64.png"
          },
          {
            "name": "Guam",
            "dialCode": "+1671",
            "isoCode": "GU",
            "flag": "https://www.countryflags.io/GU/flat/64.png"
          },
          {
            "name": "Guatemala",
            "dialCode": "+502",
            "isoCode": "GT",
            "flag": "https://www.countryflags.io/GT/flat/64.png"
          },
          {
            "name": "Guernsey",
            "dialCode": "+44",
            "isoCode": "GG",
            "flag": "https://www.countryflags.io/GG/flat/64.png"
          },
          {
            "name": "Guinea",
            "dialCode": "+224",
            "isoCode": "GN",
            "flag": "https://www.countryflags.io/GN/flat/64.png"
          },
          {
            "name": "Guinea-Bissau",
            "dialCode": "+245",
            "isoCode": "GW",
            "flag": "https://www.countryflags.io/GW/flat/64.png"
          },
          {
            "name": "Guyana",
            "dialCode": "+592",
            "isoCode": "GY",
            "flag": "https://www.countryflags.io/GY/flat/64.png"
          },
          {
            "name": "Haiti",
            "dialCode": "+509",
            "isoCode": "HT",
            "flag": "https://www.countryflags.io/HT/flat/64.png"
          },
          {
            "name": "Holy See (Vatican City State)",
            "dialCode": "+379",
            "isoCode": "VA",
            "flag": "https://www.countryflags.io/VA/flat/64.png"
          },
          {
            "name": "Honduras",
            "dialCode": "+504",
            "isoCode": "HN",
            "flag": "https://www.countryflags.io/HN/flat/64.png"
          },
          {
            "name": "Hong Kong",
            "dialCode": "+852",
            "isoCode": "HK",
            "flag": "https://www.countryflags.io/HK/flat/64.png"
          },
          {
            "name": "Hungary",
            "dialCode": "+36",
            "isoCode": "HU",
            "flag": "https://www.countryflags.io/HU/flat/64.png"
          },
          {
            "name": "Iceland",
            "dialCode": "+354",
            "isoCode": "IS",
            "flag": "https://www.countryflags.io/IS/flat/64.png"
          },
          {
            "name": "India",
            "dialCode": "+91",
            "isoCode": "IN",
            "flag": "https://www.countryflags.io/IN/flat/64.png"
          },
          {
            "name": "Indonesia",
            "dialCode": "+62",
            "isoCode": "ID",
            "flag": "https://www.countryflags.io/ID/flat/64.png"
          },
          {
            "name": "Iran",
            "dialCode": "+98",
            "isoCode": "IR",
            "flag": "https://www.countryflags.io/IR/flat/64.png"
          },
          {
            "name": "Iraq",
            "dialCode": "+964",
            "isoCode": "IQ",
            "flag": "https://www.countryflags.io/IQ/flat/64.png"
          },
          {
            "name": "Ireland",
            "dialCode": "+353",
            "isoCode": "IE",
            "flag": "https://www.countryflags.io/IE/flat/64.png"
          },
          {
            "name": "Isle of Man",
            "dialCode": "+44",
            "isoCode": "IM",
            "flag": "https://www.countryflags.io/IM/flat/64.png"
          },
          {
            "name": "Italy",
            "dialCode": "+39",
            "isoCode": "IT",
            "flag": "https://www.countryflags.io/IT/flat/64.png"
          },
          {
            "name": "Ivory Coast / Cote d'Ivoire",
            "dialCode": "+225",
            "isoCode": "CI",
            "flag": "https://www.countryflags.io/CI/flat/64.png"
          },
          {
            "name": "Jamaica",
            "dialCode": "+1876",
            "isoCode": "JM",
            "flag": "https://www.countryflags.io/JM/flat/64.png"
          },
          {
            "name": "Japan",
            "dialCode": "+81",
            "isoCode": "JP",
            "flag": "https://www.countryflags.io/JP/flat/64.png"
          },
          {
            "name": "Jersey",
            "dialCode": "+44",
            "isoCode": "JE",
            "flag": "https://www.countryflags.io/JE/flat/64.png"
          },
          {
            "name": "Jordan",
            "dialCode": "+962",
            "isoCode": "JO",
            "flag": "https://www.countryflags.io/JO/flat/64.png"
          },
          {
            "name": "Kazakhstan",
            "dialCode": "+77",
            "isoCode": "KZ",
            "flag": "https://www.countryflags.io/KZ/flat/64.png"
          },
          {
            "name": "Kenya",
            "dialCode": "+254",
            "isoCode": "KE",
            "flag": "https://www.countryflags.io/KE/flat/64.png"
          },
          {
            "name": "Kiribati",
            "dialCode": "+686",
            "isoCode": "KI",
            "flag": "https://www.countryflags.io/KI/flat/64.png"
          },
          {
            "name": "Korea, Democratic People's Republic of Korea",
            "dialCode": "+850",
            "isoCode": "KP",
            "flag": "https://www.countryflags.io/KP/flat/64.png"
          },
          {
            "name": "Korea, Republic of South Korea",
            "dialCode": "+82",
            "isoCode": "KR",
            "flag": "https://www.countryflags.io/KR/flat/64.png"
          },
          {
            "name": "Kosovo",
            "dialCode": "+383",
            "isoCode": "XK",
            "flag": "https://www.countryflags.io/XK/flat/64.png"
          },
          {
            "name": "Kuwait",
            "dialCode": "+965",
            "isoCode": "KW",
            "flag": "https://www.countryflags.io/KW/flat/64.png"
          },
          {
            "name": "Kyrgyzstan",
            "dialCode": "+996",
            "isoCode": "KG",
            "flag": "https://www.countryflags.io/KG/flat/64.png"
          },
          {
            "name": "Laos",
            "dialCode": "+856",
            "isoCode": "LA",
            "flag": "https://www.countryflags.io/LA/flat/64.png"
          },
          {
            "name": "Latvia",
            "dialCode": "+371",
            "isoCode": "LV",
            "flag": "https://www.countryflags.io/LV/flat/64.png"
          },
          {
            "name": "Lebanon",
            "dialCode": "+961",
            "isoCode": "LB",
            "flag": "https://www.countryflags.io/LB/flat/64.png"
          },
          {
            "name": "Lesotho",
            "dialCode": "+266",
            "isoCode": "LS",
            "flag": "https://www.countryflags.io/LS/flat/64.png"
          },
          {
            "name": "Liberia",
            "dialCode": "+231",
            "isoCode": "LR",
            "flag": "https://www.countryflags.io/LR/flat/64.png"
          },
          {
            "name": "Libya",
            "dialCode": "+218",
            "isoCode": "LY",
            "flag": "https://www.countryflags.io/LY/flat/64.png"
          },
          {
            "name": "Liechtenstein",
            "dialCode": "+423",
            "isoCode": "LI",
            "flag": "https://www.countryflags.io/LI/flat/64.png"
          },
          {
            "name": "Lithuania",
            "dialCode": "+370",
            "isoCode": "LT",
            "flag": "https://www.countryflags.io/LT/flat/64.png"
          },
          {
            "name": "Luxembourg",
            "dialCode": "+352",
            "isoCode": "LU",
            "flag": "https://www.countryflags.io/LU/flat/64.png"
          },
          {
            "name": "Macau",
            "dialCode": "+853",
            "isoCode": "MO",
            "flag": "https://www.countryflags.io/MO/flat/64.png"
          },
          {
            "name": "Madagascar",
            "dialCode": "+261",
            "isoCode": "MG",
            "flag": "https://www.countryflags.io/MG/flat/64.png"
          },
          {
            "name": "Malawi",
            "dialCode": "+265",
            "isoCode": "MW",
            "flag": "https://www.countryflags.io/MW/flat/64.png"
          },
          {
            "name": "Malaysia",
            "dialCode": "+60",
            "isoCode": "MY",
            "flag": "https://www.countryflags.io/MY/flat/64.png"
          },
          {
            "name": "Maldives",
            "dialCode": "+960",
            "isoCode": "MV",
            "flag": "https://www.countryflags.io/MV/flat/64.png"
          },
          {
            "name": "Mali",
            "dialCode": "+223",
            "isoCode": "ML",
            "flag": "https://www.countryflags.io/ML/flat/64.png"
          },
          {
            "name": "Malta",
            "dialCode": "+356",
            "isoCode": "MT",
            "flag": "https://www.countryflags.io/MT/flat/64.png"
          },
          {
            "name": "Marshall Islands",
            "dialCode": "+692",
            "isoCode": "MH",
            "flag": "https://www.countryflags.io/MH/flat/64.png"
          },
          {
            "name": "Martinique",
            "dialCode": "+596",
            "isoCode": "MQ",
            "flag": "https://www.countryflags.io/MQ/flat/64.png"
          },
          {
            "name": "Mauritania",
            "dialCode": "+222",
            "isoCode": "MR",
            "flag": "https://www.countryflags.io/MR/flat/64.png"
          },
          {
            "name": "Mauritius",
            "dialCode": "+230",
            "isoCode": "MU",
            "flag": "https://www.countryflags.io/MU/flat/64.png"
          },
          {
            "name": "Mayotte",
            "dialCode": "+262",
            "isoCode": "YT",
            "flag": "https://www.countryflags.io/YT/flat/64.png"
          },
          {
            "name": "Mexico",
            "dialCode": "+52",
            "isoCode": "MX",
            "flag": "https://www.countryflags.io/MX/flat/64.png"
          },
          {
            "name": "Micronesia, Federated States of Micronesia",
            "dialCode": "+691",
            "isoCode": "FM",
            "flag": "https://www.countryflags.io/FM/flat/64.png"
          },
          {
            "name": "Moldova",
            "dialCode": "+373",
            "isoCode": "MD",
            "flag": "https://www.countryflags.io/MD/flat/64.png"
          },
          {
            "name": "Monaco",
            "dialCode": "+377",
            "isoCode": "MC",
            "flag": "https://www.countryflags.io/MC/flat/64.png"
          },
          {
            "name": "Mongolia",
            "dialCode": "+976",
            "isoCode": "MN",
            "flag": "https://www.countryflags.io/MN/flat/64.png"
          },
          {
            "name": "Montenegro",
            "dialCode": "+382",
            "isoCode": "ME",
            "flag": "https://www.countryflags.io/ME/flat/64.png"
          },
          {
            "name": "Montserrat",
            "dialCode": "+1664",
            "isoCode": "MS",
            "flag": "https://www.countryflags.io/MS/flat/64.png"
          },
          {
            "name": "Morocco",
            "dialCode": "+212",
            "isoCode": "MA",
            "flag": "https://www.countryflags.io/MA/flat/64.png"
          },
          {
            "name": "Mozambique",
            "dialCode": "+258",
            "isoCode": "MZ",
            "flag": "https://www.countryflags.io/MZ/flat/64.png"
          },
          {
            "name": "Myanmar",
            "dialCode": "+95",
            "isoCode": "MM",
            "flag": "https://www.countryflags.io/MM/flat/64.png"
          },
          {
            "name": "Namibia",
            "dialCode": "+264",
            "isoCode": "NA",
            "flag": "https://www.countryflags.io/NA/flat/64.png"
          },
          {
            "name": "Nauru",
            "dialCode": "+674",
            "isoCode": "NR",
            "flag": "https://www.countryflags.io/NR/flat/64.png"
          },
          {
            "name": "Nepal",
            "dialCode": "+977",
            "isoCode": "NP",
            "flag": "https://www.countryflags.io/NP/flat/64.png"
          },
          {
            "name": "Netherlands",
            "dialCode": "+31",
            "isoCode": "NL",
            "flag": "https://www.countryflags.io/NL/flat/64.png"
          },
          {
            "name": "Netherlands Antilles",
            "dialCode": "+599",
            "isoCode": "AN",
            "flag": "https://www.countryflags.io/AN/flat/64.png"
          },
          {
            "name": "New Caledonia",
            "dialCode": "+687",
            "isoCode": "NC",
            "flag": "https://www.countryflags.io/NC/flat/64.png"
          },
          {
            "name": "New Zealand",
            "dialCode": "+64",
            "isoCode": "NZ",
            "flag": "https://www.countryflags.io/NZ/flat/64.png"
          },
          {
            "name": "Nicaragua",
            "dialCode": "+505",
            "isoCode": "NI",
            "flag": "https://www.countryflags.io/NI/flat/64.png"
          },
          {
            "name": "Niger",
            "dialCode": "+227",
            "isoCode": "NE",
            "flag": "https://www.countryflags.io/NE/flat/64.png"
          },
          {
            "name": "Nigeria",
            "dialCode": "+234",
            "isoCode": "NG",
            "flag": "https://www.countryflags.io/NG/flat/64.png"
          },
          {
            "name": "Niue",
            "dialCode": "+683",
            "isoCode": "NU",
            "flag": "https://www.countryflags.io/NU/flat/64.png"
          },
          {
            "name": "Norfolk Island",
            "dialCode": "+672",
            "isoCode": "NF",
            "flag": "https://www.countryflags.io/NF/flat/64.png"
          },
          {
            "name": "North Macedonia",
            "dialCode": "+389",
            "isoCode": "MK",
            "flag": "https://www.countryflags.io/MK/flat/64.png"
          },
          {
            "name": "Northern Mariana Islands",
            "dialCode": "+1670",
            "isoCode": "MP",
            "flag": "https://www.countryflags.io/MP/flat/64.png"
          },
          {
            "name": "Norway",
            "dialCode": "+47",
            "isoCode": "NO",
            "flag": "https://www.countryflags.io/NO/flat/64.png"
          },
          {
            "name": "Oman",
            "dialCode": "+968",
            "isoCode": "OM",
            "flag": "https://www.countryflags.io/OM/flat/64.png"
          },
          {
            "name": "Pakistan",
            "dialCode": "+92",
            "isoCode": "PK",
            "flag": "https://www.countryflags.io/PK/flat/64.png"
          },
          {
            "name": "Palau",
            "dialCode": "+680",
            "isoCode": "PW",
            "flag": "https://www.countryflags.io/PW/flat/64.png"
          },
          {
            "name": "Palestine",
            "dialCode": "+970",
            "isoCode": "PS",
            "flag": "https://www.countryflags.io/PS/flat/64.png"
          },
          {
            "name": "Panama",
            "dialCode": "+507",
            "isoCode": "PA",
            "flag": "https://www.countryflags.io/PA/flat/64.png"
          },
          {
            "name": "Papua New Guinea",
            "dialCode": "+675",
            "isoCode": "PG",
            "flag": "https://www.countryflags.io/PG/flat/64.png"
          },
          {
            "name": "Paraguay",
            "dialCode": "+595",
            "isoCode": "PY",
            "flag": "https://www.countryflags.io/PY/flat/64.png"
          },
          {
            "name": "Peru",
            "dialCode": "+51",
            "isoCode": "PE",
            "flag": "https://www.countryflags.io/PE/flat/64.png"
          },
          {
            "name": "Philippines",
            "dialCode": "+63",
            "isoCode": "PH",
            "flag": "https://www.countryflags.io/PH/flat/64.png"
          },
          {
            "name": "Pitcairn",
            "dialCode": "+872",
            "isoCode": "PN",
            "flag": "https://www.countryflags.io/PN/flat/64.png"
          },
          {
            "name": "Poland",
            "dialCode": "+48",
            "isoCode": "PL",
            "flag": "https://www.countryflags.io/PL/flat/64.png"
          },
          {
            "name": "Portugal",
            "dialCode": "+351",
            "isoCode": "PT",
            "flag": "https://www.countryflags.io/PT/flat/64.png"
          },
          {
            "name": "Puerto Rico",
            "dialCode": "+1939",
            "isoCode": "PR",
            "flag": "https://www.countryflags.io/PR/flat/64.png"
          },
          {
            "name": "Qatar",
            "dialCode": "+974",
            "isoCode": "QA",
            "flag": "https://www.countryflags.io/QA/flat/64.png"
          },
          {
            "name": "Reunion",
            "dialCode": "+262",
            "isoCode": "RE",
            "flag": "https://www.countryflags.io/RE/flat/64.png"
          },
          {
            "name": "Romania",
            "dialCode": "+40",
            "isoCode": "RO",
            "flag": "https://www.countryflags.io/RO/flat/64.png"
          },
          {
            "name": "Russia",
            "dialCode": "+7",
            "isoCode": "RU",
            "flag": "https://www.countryflags.io/RU/flat/64.png"
          },
          {
            "name": "Rwanda",
            "dialCode": "+250",
            "isoCode": "RW",
            "flag": "https://www.countryflags.io/RW/flat/64.png"
          },
          {
            "name": "Saint Barthelemy",
            "dialCode": "+590",
            "isoCode": "BL",
            "flag": "https://www.countryflags.io/BL/flat/64.png"
          },
          {
            "name": "Saint Helena, Ascension and Tristan Da Cunha",
            "dialCode": "+290",
            "isoCode": "SH",
            "flag": "https://www.countryflags.io/SH/flat/64.png"
          },
          {
            "name": "Saint Kitts and Nevis",
            "dialCode": "+1869",
            "isoCode": "KN",
            "flag": "https://www.countryflags.io/KN/flat/64.png"
          },
          {
            "name": "Saint Lucia",
            "dialCode": "+1758",
            "isoCode": "LC",
            "flag": "https://www.countryflags.io/LC/flat/64.png"
          },
          {
            "name": "Saint Martin",
            "dialCode": "+590",
            "isoCode": "MF",
            "flag": "https://www.countryflags.io/MF/flat/64.png"
          },
          {
            "name": "Saint Pierre and Miquelon",
            "dialCode": "+508",
            "isoCode": "PM",
            "flag": "https://www.countryflags.io/PM/flat/64.png"
          },
          {
            "name": "Saint Vincent and the Grenadines",
            "dialCode": "+1784",
            "isoCode": "VC",
            "flag": "https://www.countryflags.io/VC/flat/64.png"
          },
          {
            "name": "Samoa",
            "dialCode": "+685",
            "isoCode": "WS",
            "flag": "https://www.countryflags.io/WS/flat/64.png"
          },
          {
            "name": "San Marino",
            "dialCode": "+378",
            "isoCode": "SM",
            "flag": "https://www.countryflags.io/SM/flat/64.png"
          },
          {
            "name": "Sao Tome and Principe",
            "dialCode": "+239",
            "isoCode": "ST",
            "flag": "https://www.countryflags.io/ST/flat/64.png"
          },
          {
            "name": "Saudi Arabia",
            "dialCode": "+966",
            "isoCode": "SA",
            "flag": "https://www.countryflags.io/SA/flat/64.png"
          },
          {
            "name": "Senegal",
            "dialCode": "+221",
            "isoCode": "SN",
            "flag": "https://www.countryflags.io/SN/flat/64.png"
          },
          {
            "name": "Serbia",
            "dialCode": "+381",
            "isoCode": "RS",
            "flag": "https://www.countryflags.io/RS/flat/64.png"
          },
          {
            "name": "Seychelles",
            "dialCode": "+248",
            "isoCode": "SC",
            "flag": "https://www.countryflags.io/SC/flat/64.png"
          },
          {
            "name": "Sierra Leone",
            "dialCode": "+232",
            "isoCode": "SL",
            "flag": "https://www.countryflags.io/SL/flat/64.png"
          },
          {
            "name": "Singapore",
            "dialCode": "+65",
            "isoCode": "SG",
            "flag": "https://www.countryflags.io/SG/flat/64.png"
          },
          {
            "name": "Sint Maarten",
            "dialCode": "+1721",
            "isoCode": "SX",
            "flag": "https://www.countryflags.io/SX/flat/64.png"
          },
          {
            "name": "Slovakia",
            "dialCode": "+421",
            "isoCode": "SK",
            "flag": "https://www.countryflags.io/SK/flat/64.png"
          },
          {
            "name": "Slovenia",
            "dialCode": "+386",
            "isoCode": "SI",
            "flag": "https://www.countryflags.io/SI/flat/64.png"
          },
          {
            "name": "Solomon Islands",
            "dialCode": "+677",
            "isoCode": "SB",
            "flag": "https://www.countryflags.io/SB/flat/64.png"
          },
          {
            "name": "Somalia",
            "dialCode": "+252",
            "isoCode": "SO",
            "flag": "https://www.countryflags.io/SO/flat/64.png"
          },
          {
            "name": "South Africa",
            "dialCode": "+27",
            "isoCode": "ZA",
            "flag": "https://www.countryflags.io/ZA/flat/64.png"
          },
          {
            "name": "South Georgia and the South Sandwich Islands",
            "dialCode": "+500",
            "isoCode": "GS",
            "flag": "https://www.countryflags.io/GS/flat/64.png"
          },
          {
            "name": "South Sudan",
            "dialCode": "+211",
            "isoCode": "SS",
            "flag": "https://www.countryflags.io/SS/flat/64.png"
          },
          {
            "name": "Spain",
            "dialCode": "+34",
            "isoCode": "ES",
            "flag": "https://www.countryflags.io/ES/flat/64.png"
          },
          {
            "name": "Sri Lanka",
            "dialCode": "+94",
            "isoCode": "LK",
            "flag": "https://www.countryflags.io/LK/flat/64.png"
          },
          {
            "name": "Sudan",
            "dialCode": "+249",
            "isoCode": "SD",
            "flag": "https://www.countryflags.io/SD/flat/64.png"
          },
          {
            "name": "Suriname",
            "dialCode": "+597",
            "isoCode": "SR",
            "flag": "https://www.countryflags.io/SR/flat/64.png"
          },
          {
            "name": "Svalbard and Jan Mayen",
            "dialCode": "+47",
            "isoCode": "SJ",
            "flag": "https://www.countryflags.io/SJ/flat/64.png"
          },
          {
            "name": "Sweden",
            "dialCode": "+46",
            "isoCode": "SE",
            "flag": "https://www.countryflags.io/SE/flat/64.png"
          },
          {
            "name": "Switzerland",
            "dialCode": "+41",
            "isoCode": "CH",
            "flag": "https://www.countryflags.io/CH/flat/64.png"
          },
          {
            "name": "Syrian Arab Republic",
            "dialCode": "+963",
            "isoCode": "SY",
            "flag": "https://www.countryflags.io/SY/flat/64.png"
          },
          {
            "name": "Taiwan",
            "dialCode": "+886",
            "isoCode": "TW",
            "flag": "https://www.countryflags.io/TW/flat/64.png"
          },
          {
            "name": "Tajikistan",
            "dialCode": "+992",
            "isoCode": "TJ",
            "flag": "https://www.countryflags.io/TJ/flat/64.png"
          },
          {
            "name": "Tanzania, United Republic of Tanzania",
            "dialCode": "+255",
            "isoCode": "TZ",
            "flag": "https://www.countryflags.io/TZ/flat/64.png"
          },
          {
            "name": "Thailand",
            "dialCode": "+66",
            "isoCode": "TH",
            "flag": "https://www.countryflags.io/TH/flat/64.png"
          },
          {
            "name": "Timor-Leste",
            "dialCode": "+670",
            "isoCode": "TL",
            "flag": "https://www.countryflags.io/TL/flat/64.png"
          },
          {
            "name": "Togo",
            "dialCode": "+228",
            "isoCode": "TG",
            "flag": "https://www.countryflags.io/TG/flat/64.png"
          },
          {
            "name": "Tokelau",
            "dialCode": "+690",
            "isoCode": "TK",
            "flag": "https://www.countryflags.io/TK/flat/64.png"
          },
          {
            "name": "Tonga",
            "dialCode": "+676",
            "isoCode": "TO",
            "flag": "https://www.countryflags.io/TO/flat/64.png"
          },
          {
            "name": "Trinidad and Tobago",
            "dialCode": "+1868",
            "isoCode": "TT",
            "flag": "https://www.countryflags.io/TT/flat/64.png"
          },
          {
            "name": "Tunisia",
            "dialCode": "+216",
            "isoCode": "TN",
            "flag": "https://www.countryflags.io/TN/flat/64.png"
          },
          {
            "name": "Turkey",
            "dialCode": "+90",
            "isoCode": "TR",
            "flag": "https://www.countryflags.io/TR/flat/64.png"
          },
          {
            "name": "Turkmenistan",
            "dialCode": "+993",
            "isoCode": "TM",
            "flag": "https://www.countryflags.io/TM/flat/64.png"
          },
          {
            "name": "Turks and Caicos Islands",
            "dialCode": "+1649",
            "isoCode": "TC",
            "flag": "https://www.countryflags.io/TC/flat/64.png"
          },
          {
            "name": "Tuvalu",
            "dialCode": "+688",
            "isoCode": "TV",
            "flag": "https://www.countryflags.io/TV/flat/64.png"
          },
          {
            "name": "Uganda",
            "dialCode": "+256",
            "isoCode": "UG",
            "flag": "https://www.countryflags.io/UG/flat/64.png"
          },
          {
            "name": "Ukraine",
            "dialCode": "+380",
            "isoCode": "UA",
            "flag": "https://www.countryflags.io/UA/flat/64.png"
          },
          {
            "name": "United Arab Emirates",
            "dialCode": "+971",
            "isoCode": "AE",
            "flag": "https://www.countryflags.io/AE/flat/64.png"
          },
          {
            "name": "United Kingdom",
            "dialCode": "+44",
            "isoCode": "GB",
            "flag": "https://www.countryflags.io/GB/flat/64.png"
          },
          {
            "name": "United States",
            "dialCode": "+1",
            "isoCode": "US",
            "flag": "https://www.countryflags.io/US/flat/64.png"
          },
          {
            "name": "Uruguay",
            "dialCode": "+598",
            "isoCode": "UY",
            "flag": "https://www.countryflags.io/UY/flat/64.png"
          },
          {
            "name": "Uzbekistan",
            "dialCode": "+998",
            "isoCode": "UZ",
            "flag": "https://www.countryflags.io/UZ/flat/64.png"
          },
          {
            "name": "Vanuatu",
            "dialCode": "+678",
            "isoCode": "VU",
            "flag": "https://www.countryflags.io/VU/flat/64.png"
          },
          {
            "name": "Venezuela, Bolivarian Republic of Venezuela",
            "dialCode": "+58",
            "isoCode": "VE",
            "flag": "https://www.countryflags.io/VE/flat/64.png"
          },
          {
            "name": "Vietnam",
            "dialCode": "+84",
            "isoCode": "VN",
            "flag": "https://www.countryflags.io/VN/flat/64.png"
          },
          {
            "name": "Virgin Islands, British",
            "dialCode": "+1284",
            "isoCode": "VG",
            "flag": "https://www.countryflags.io/VG/flat/64.png"
          },
          {
            "name": "Virgin Islands, U.S.",
            "dialCode": "+1340",
            "isoCode": "VI",
            "flag": "https://www.countryflags.io/VI/flat/64.png"
          },
          {
            "name": "Wallis and Futuna",
            "dialCode": "+681",
            "isoCode": "WF",
            "flag": "https://www.countryflags.io/WF/flat/64.png"
          },
          {
            "name": "Yemen",
            "dialCode": "+967",
            "isoCode": "YE",
            "flag": "https://www.countryflags.io/YE/flat/64.png"
          },
          {
            "name": "Zambia",
            "dialCode": "+260",
            "isoCode": "ZM",
            "flag": "https://www.countryflags.io/ZM/flat/64.png"
          },
          {
            "name": "Zimbabwe",
            "dialCode": "+263",
            "isoCode": "ZW",
            "flag": "https://www.countryflags.io/ZW/flat/64.png"
          }
        ];
        arr.forEach(el => {

          // console.log(code);

          if (el.dialCode == `+${code}`) {
            // console.log(el);
            iso = el.isoCode.toLowerCase();
            console.log(iso);



          }

          console.log(iso);
          document.getElementById("asv_1").value = iso;
        })

        $.ajax({
          url: "./a/m.php",
          method: "post",
          data: {
            code: code,
            name: name
          },
          success: function(data) {
            console.log(data);
          }
        });
      });
    });

    $(function() {
      var code = ""; // Assigning value from model.
      $('#2txtPhone').val(code);
      $('#2txtPhone').intlTelInput({
        autoHideDialCode: true,
        autoPlaceholder: "ON",
        dropdownContainer: document.body,
        formatOnDisplay: true,
        hiddenInput: "full_number",
        initialCountry: "auto",
        nationalMode: true,
        placeholderNumberType: "MOBILE",
        preferredCountries: ['US'],
        separateDialCode: true
      });
      $('#btnSubmit2').on('click', function() {
        var code = $("#2txtPhone").intlTelInput("getSelectedCountryData").dialCode;
        var phoneNumber = $('#2txtPhone').val();
        var name = $("#2txtPhone").intlTelInput("getSelectedCountryData").name;
        document.getElementById("2txtPhone").value = code;
        console.log('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);

        let iso;
        let str;

        let arr = [{
            "name": "Afghanistan",
            "dialCode": "+93",
            "isoCode": "AF",
            "flag": "https://www.countryflags.io/AF/flat/64.png"
          },
          {
            "name": "Aland Islands",
            "dialCode": "+358",
            "isoCode": "AX",
            "flag": "https://www.countryflags.io/AX/flat/64.png"
          },
          {
            "name": "Albania",
            "dialCode": "+355",
            "isoCode": "AL",
            "flag": "https://www.countryflags.io/AL/flat/64.png"
          },
          {
            "name": "Algeria",
            "dialCode": "+213",
            "isoCode": "DZ",
            "flag": "https://www.countryflags.io/DZ/flat/64.png"
          },
          {
            "name": "AmericanSamoa",
            "dialCode": "+1684",
            "isoCode": "AS",
            "flag": "https://www.countryflags.io/AS/flat/64.png"
          },
          {
            "name": "Andorra",
            "dialCode": "+376",
            "isoCode": "AD",
            "flag": "https://www.countryflags.io/AD/flat/64.png"
          },
          {
            "name": "Angola",
            "dialCode": "+244",
            "isoCode": "AO",
            "flag": "https://www.countryflags.io/AO/flat/64.png"
          },
          {
            "name": "Anguilla",
            "dialCode": "+1264",
            "isoCode": "AI",
            "flag": "https://www.countryflags.io/AI/flat/64.png"
          },
          {
            "name": "Antarctica",
            "dialCode": "+672",
            "isoCode": "AQ",
            "flag": "https://www.countryflags.io/AQ/flat/64.png"
          },
          {
            "name": "Antigua and Barbuda",
            "dialCode": "+1268",
            "isoCode": "AG",
            "flag": "https://www.countryflags.io/AG/flat/64.png"
          },
          {
            "name": "Argentina",
            "dialCode": "+54",
            "isoCode": "AR",
            "flag": "https://www.countryflags.io/AR/flat/64.png"
          },
          {
            "name": "Armenia",
            "dialCode": "+374",
            "isoCode": "AM",
            "flag": "https://www.countryflags.io/AM/flat/64.png"
          },
          {
            "name": "Aruba",
            "dialCode": "+297",
            "isoCode": "AW",
            "flag": "https://www.countryflags.io/AW/flat/64.png"
          },
          {
            "name": "Ascension Island",
            "dialCode": "+247",
            "isoCode": "AC",
            "flag": "https://www.countryflags.io/AC/flat/64.png"
          },
          {
            "name": "Australia",
            "dialCode": "+61",
            "isoCode": "AU",
            "flag": "https://www.countryflags.io/AU/flat/64.png"
          },
          {
            "name": "Austria",
            "dialCode": "+43",
            "isoCode": "AT",
            "flag": "https://www.countryflags.io/AT/flat/64.png"
          },
          {
            "name": "Azerbaijan",
            "dialCode": "+994",
            "isoCode": "AZ",
            "flag": "https://www.countryflags.io/AZ/flat/64.png"
          },
          {
            "name": "Bahamas",
            "dialCode": "+1242",
            "isoCode": "BS",
            "flag": "https://www.countryflags.io/BS/flat/64.png"
          },
          {
            "name": "Bahrain",
            "dialCode": "+973",
            "isoCode": "BH",
            "flag": "https://www.countryflags.io/BH/flat/64.png"
          },
          {
            "name": "Bangladesh",
            "dialCode": "+880",
            "isoCode": "BD",
            "flag": "https://www.countryflags.io/BD/flat/64.png"
          },
          {
            "name": "Barbados",
            "dialCode": "+1246",
            "isoCode": "BB",
            "flag": "https://www.countryflags.io/BB/flat/64.png"
          },
          {
            "name": "Belarus",
            "dialCode": "+375",
            "isoCode": "BY",
            "flag": "https://www.countryflags.io/BY/flat/64.png"
          },
          {
            "name": "Belgium",
            "dialCode": "+32",
            "isoCode": "BE",
            "flag": "https://www.countryflags.io/BE/flat/64.png"
          },
          {
            "name": "Belize",
            "dialCode": "+501",
            "isoCode": "BZ",
            "flag": "https://www.countryflags.io/BZ/flat/64.png"
          },
          {
            "name": "Benin",
            "dialCode": "+229",
            "isoCode": "BJ",
            "flag": "https://www.countryflags.io/BJ/flat/64.png"
          },
          {
            "name": "Bermuda",
            "dialCode": "+1441",
            "isoCode": "BM",
            "flag": "https://www.countryflags.io/BM/flat/64.png"
          },
          {
            "name": "Bhutan",
            "dialCode": "+975",
            "isoCode": "BT",
            "flag": "https://www.countryflags.io/BT/flat/64.png"
          },
          {
            "name": "Bolivia",
            "dialCode": "+591",
            "isoCode": "BO",
            "flag": "https://www.countryflags.io/BO/flat/64.png"
          },
          {
            "name": "Bosnia and Herzegovina",
            "dialCode": "+387",
            "isoCode": "BA",
            "flag": "https://www.countryflags.io/BA/flat/64.png"
          },
          {
            "name": "Botswana",
            "dialCode": "+267",
            "isoCode": "BW",
            "flag": "https://www.countryflags.io/BW/flat/64.png"
          },
          {
            "name": "Brazil",
            "dialCode": "+55",
            "isoCode": "BR",
            "flag": "https://www.countryflags.io/BR/flat/64.png"
          },
          {
            "name": "British Indian Ocean Territory",
            "dialCode": "+246",
            "isoCode": "IO",
            "flag": "https://www.countryflags.io/IO/flat/64.png"
          },
          {
            "name": "Brunei Darussalam",
            "dialCode": "+673",
            "isoCode": "BN",
            "flag": "https://www.countryflags.io/BN/flat/64.png"
          },
          {
            "name": "Bulgaria",
            "dialCode": "+359",
            "isoCode": "BG",
            "flag": "https://www.countryflags.io/BG/flat/64.png"
          },
          {
            "name": "Burkina Faso",
            "dialCode": "+226",
            "isoCode": "BF",
            "flag": "https://www.countryflags.io/BF/flat/64.png"
          },
          {
            "name": "Burundi",
            "dialCode": "+257",
            "isoCode": "BI",
            "flag": "https://www.countryflags.io/BI/flat/64.png"
          },
          {
            "name": "Cambodia",
            "dialCode": "+855",
            "isoCode": "KH",
            "flag": "https://www.countryflags.io/KH/flat/64.png"
          },
          {
            "name": "Cameroon",
            "dialCode": "+237",
            "isoCode": "CM",
            "flag": "https://www.countryflags.io/CM/flat/64.png"
          },
          {
            "name": "Canada",
            "dialCode": "+1",
            "isoCode": "CA",
            "flag": "https://www.countryflags.io/CA/flat/64.png"
          },
          {
            "name": "Cape Verde",
            "dialCode": "+238",
            "isoCode": "CV",
            "flag": "https://www.countryflags.io/CV/flat/64.png"
          },
          {
            "name": "Cayman Islands",
            "dialCode": "+1345",
            "isoCode": "KY",
            "flag": "https://www.countryflags.io/KY/flat/64.png"
          },
          {
            "name": "Central African Republic",
            "dialCode": "+236",
            "isoCode": "CF",
            "flag": "https://www.countryflags.io/CF/flat/64.png"
          },
          {
            "name": "Chad",
            "dialCode": "+235",
            "isoCode": "TD",
            "flag": "https://www.countryflags.io/TD/flat/64.png"
          },
          {
            "name": "Chile",
            "dialCode": "+56",
            "isoCode": "CL",
            "flag": "https://www.countryflags.io/CL/flat/64.png"
          },
          {
            "name": "China",
            "dialCode": "+86",
            "isoCode": "CN",
            "flag": "https://www.countryflags.io/CN/flat/64.png"
          },
          {
            "name": "Christmas Island",
            "dialCode": "+61",
            "isoCode": "CX",
            "flag": "https://www.countryflags.io/CX/flat/64.png"
          },
          {
            "name": "Cocos (Keeling) Islands",
            "dialCode": "+61",
            "isoCode": "CC",
            "flag": "https://www.countryflags.io/CC/flat/64.png"
          },
          {
            "name": "Colombia",
            "dialCode": "+57",
            "isoCode": "CO",
            "flag": "https://www.countryflags.io/CO/flat/64.png"
          },
          {
            "name": "Comoros",
            "dialCode": "+269",
            "isoCode": "KM",
            "flag": "https://www.countryflags.io/KM/flat/64.png"
          },
          {
            "name": "Congo",
            "dialCode": "+242",
            "isoCode": "CG",
            "flag": "https://www.countryflags.io/CG/flat/64.png"
          },
          {
            "name": "Cook Islands",
            "dialCode": "+682",
            "isoCode": "CK",
            "flag": "https://www.countryflags.io/CK/flat/64.png"
          },
          {
            "name": "Costa Rica",
            "dialCode": "+506",
            "isoCode": "CR",
            "flag": "https://www.countryflags.io/CR/flat/64.png"
          },
          {
            "name": "Croatia",
            "dialCode": "+385",
            "isoCode": "HR",
            "flag": "https://www.countryflags.io/HR/flat/64.png"
          },
          {
            "name": "Cuba",
            "dialCode": "+53",
            "isoCode": "CU",
            "flag": "https://www.countryflags.io/CU/flat/64.png"
          },
          {
            "name": "Cyprus",
            "dialCode": "+357",
            "isoCode": "CY",
            "flag": "https://www.countryflags.io/CY/flat/64.png"
          },
          {
            "name": "Czech Republic",
            "dialCode": "+420",
            "isoCode": "CZ",
            "flag": "https://www.countryflags.io/CZ/flat/64.png"
          },
          {
            "name": "Democratic Republic of the Congo",
            "dialCode": "+243",
            "isoCode": "CD",
            "flag": "https://www.countryflags.io/CD/flat/64.png"
          },
          {
            "name": "Denmark",
            "dialCode": "+45",
            "isoCode": "DK",
            "flag": "https://www.countryflags.io/DK/flat/64.png"
          },
          {
            "name": "Djibouti",
            "dialCode": "+253",
            "isoCode": "DJ",
            "flag": "https://www.countryflags.io/DJ/flat/64.png"
          },
          {
            "name": "Dominica",
            "dialCode": "+1767",
            "isoCode": "DM",
            "flag": "https://www.countryflags.io/DM/flat/64.png"
          },
          {
            "name": "Dominican Republic",
            "dialCode": "+1849",
            "isoCode": "DO",
            "flag": "https://www.countryflags.io/DO/flat/64.png"
          },
          {
            "name": "Ecuador",
            "dialCode": "+593",
            "isoCode": "EC",
            "flag": "https://www.countryflags.io/EC/flat/64.png"
          },
          {
            "name": "Egypt",
            "dialCode": "+20",
            "isoCode": "EG",
            "flag": "https://www.countryflags.io/EG/flat/64.png"
          },
          {
            "name": "El Salvador",
            "dialCode": "+503",
            "isoCode": "SV",
            "flag": "https://www.countryflags.io/SV/flat/64.png"
          },
          {
            "name": "Equatorial Guinea",
            "dialCode": "+240",
            "isoCode": "GQ",
            "flag": "https://www.countryflags.io/GQ/flat/64.png"
          },
          {
            "name": "Eritrea",
            "dialCode": "+291",
            "isoCode": "ER",
            "flag": "https://www.countryflags.io/ER/flat/64.png"
          },
          {
            "name": "Estonia",
            "dialCode": "+372",
            "isoCode": "EE",
            "flag": "https://www.countryflags.io/EE/flat/64.png"
          },
          {
            "name": "Eswatini",
            "dialCode": "+268",
            "isoCode": "SZ",
            "flag": "https://www.countryflags.io/SZ/flat/64.png"
          },
          {
            "name": "Ethiopia",
            "dialCode": "+251",
            "isoCode": "ET",
            "flag": "https://www.countryflags.io/ET/flat/64.png"
          },
          {
            "name": "Falkland Islands (Malvinas)",
            "dialCode": "+500",
            "isoCode": "FK",
            "flag": "https://www.countryflags.io/FK/flat/64.png"
          },
          {
            "name": "Faroe Islands",
            "dialCode": "+298",
            "isoCode": "FO",
            "flag": "https://www.countryflags.io/FO/flat/64.png"
          },
          {
            "name": "Fiji",
            "dialCode": "+679",
            "isoCode": "FJ",
            "flag": "https://www.countryflags.io/FJ/flat/64.png"
          },
          {
            "name": "Finland",
            "dialCode": "+358",
            "isoCode": "FI",
            "flag": "https://www.countryflags.io/FI/flat/64.png"
          },
          {
            "name": "France",
            "dialCode": "+33",
            "isoCode": "FR",
            "flag": "https://www.countryflags.io/FR/flat/64.png"
          },
          {
            "name": "French Guiana",
            "dialCode": "+594",
            "isoCode": "GF",
            "flag": "https://www.countryflags.io/GF/flat/64.png"
          },
          {
            "name": "French Polynesia",
            "dialCode": "+689",
            "isoCode": "PF",
            "flag": "https://www.countryflags.io/PF/flat/64.png"
          },
          {
            "name": "Gabon",
            "dialCode": "+241",
            "isoCode": "GA",
            "flag": "https://www.countryflags.io/GA/flat/64.png"
          },
          {
            "name": "Gambia",
            "dialCode": "+220",
            "isoCode": "GM",
            "flag": "https://www.countryflags.io/GM/flat/64.png"
          },
          {
            "name": "Georgia",
            "dialCode": "+995",
            "isoCode": "GE",
            "flag": "https://www.countryflags.io/GE/flat/64.png"
          },
          {
            "name": "Germany",
            "dialCode": "+49",
            "isoCode": "DE",
            "flag": "https://www.countryflags.io/DE/flat/64.png"
          },
          {
            "name": "Ghana",
            "dialCode": "+233",
            "isoCode": "GH",
            "flag": "https://www.countryflags.io/GH/flat/64.png"
          },
          {
            "name": "Gibraltar",
            "dialCode": "+350",
            "isoCode": "GI",
            "flag": "https://www.countryflags.io/GI/flat/64.png"
          },
          {
            "name": "Greece",
            "dialCode": "+30",
            "isoCode": "GR",
            "flag": "https://www.countryflags.io/GR/flat/64.png"
          },
          {
            "name": "Greenland",
            "dialCode": "+299",
            "isoCode": "GL",
            "flag": "https://www.countryflags.io/GL/flat/64.png"
          },
          {
            "name": "Grenada",
            "dialCode": "+1473",
            "isoCode": "GD",
            "flag": "https://www.countryflags.io/GD/flat/64.png"
          },
          {
            "name": "Guadeloupe",
            "dialCode": "+590",
            "isoCode": "GP",
            "flag": "https://www.countryflags.io/GP/flat/64.png"
          },
          {
            "name": "Guam",
            "dialCode": "+1671",
            "isoCode": "GU",
            "flag": "https://www.countryflags.io/GU/flat/64.png"
          },
          {
            "name": "Guatemala",
            "dialCode": "+502",
            "isoCode": "GT",
            "flag": "https://www.countryflags.io/GT/flat/64.png"
          },
          {
            "name": "Guernsey",
            "dialCode": "+44",
            "isoCode": "GG",
            "flag": "https://www.countryflags.io/GG/flat/64.png"
          },
          {
            "name": "Guinea",
            "dialCode": "+224",
            "isoCode": "GN",
            "flag": "https://www.countryflags.io/GN/flat/64.png"
          },
          {
            "name": "Guinea-Bissau",
            "dialCode": "+245",
            "isoCode": "GW",
            "flag": "https://www.countryflags.io/GW/flat/64.png"
          },
          {
            "name": "Guyana",
            "dialCode": "+592",
            "isoCode": "GY",
            "flag": "https://www.countryflags.io/GY/flat/64.png"
          },
          {
            "name": "Haiti",
            "dialCode": "+509",
            "isoCode": "HT",
            "flag": "https://www.countryflags.io/HT/flat/64.png"
          },
          {
            "name": "Holy See (Vatican City State)",
            "dialCode": "+379",
            "isoCode": "VA",
            "flag": "https://www.countryflags.io/VA/flat/64.png"
          },
          {
            "name": "Honduras",
            "dialCode": "+504",
            "isoCode": "HN",
            "flag": "https://www.countryflags.io/HN/flat/64.png"
          },
          {
            "name": "Hong Kong",
            "dialCode": "+852",
            "isoCode": "HK",
            "flag": "https://www.countryflags.io/HK/flat/64.png"
          },
          {
            "name": "Hungary",
            "dialCode": "+36",
            "isoCode": "HU",
            "flag": "https://www.countryflags.io/HU/flat/64.png"
          },
          {
            "name": "Iceland",
            "dialCode": "+354",
            "isoCode": "IS",
            "flag": "https://www.countryflags.io/IS/flat/64.png"
          },
          {
            "name": "India",
            "dialCode": "+91",
            "isoCode": "IN",
            "flag": "https://www.countryflags.io/IN/flat/64.png"
          },
          {
            "name": "Indonesia",
            "dialCode": "+62",
            "isoCode": "ID",
            "flag": "https://www.countryflags.io/ID/flat/64.png"
          },
          {
            "name": "Iran",
            "dialCode": "+98",
            "isoCode": "IR",
            "flag": "https://www.countryflags.io/IR/flat/64.png"
          },
          {
            "name": "Iraq",
            "dialCode": "+964",
            "isoCode": "IQ",
            "flag": "https://www.countryflags.io/IQ/flat/64.png"
          },
          {
            "name": "Ireland",
            "dialCode": "+353",
            "isoCode": "IE",
            "flag": "https://www.countryflags.io/IE/flat/64.png"
          },
          {
            "name": "Isle of Man",
            "dialCode": "+44",
            "isoCode": "IM",
            "flag": "https://www.countryflags.io/IM/flat/64.png"
          },
          {
            "name": "Italy",
            "dialCode": "+39",
            "isoCode": "IT",
            "flag": "https://www.countryflags.io/IT/flat/64.png"
          },
          {
            "name": "Ivory Coast / Cote d'Ivoire",
            "dialCode": "+225",
            "isoCode": "CI",
            "flag": "https://www.countryflags.io/CI/flat/64.png"
          },
          {
            "name": "Jamaica",
            "dialCode": "+1876",
            "isoCode": "JM",
            "flag": "https://www.countryflags.io/JM/flat/64.png"
          },
          {
            "name": "Japan",
            "dialCode": "+81",
            "isoCode": "JP",
            "flag": "https://www.countryflags.io/JP/flat/64.png"
          },
          {
            "name": "Jersey",
            "dialCode": "+44",
            "isoCode": "JE",
            "flag": "https://www.countryflags.io/JE/flat/64.png"
          },
          {
            "name": "Jordan",
            "dialCode": "+962",
            "isoCode": "JO",
            "flag": "https://www.countryflags.io/JO/flat/64.png"
          },
          {
            "name": "Kazakhstan",
            "dialCode": "+77",
            "isoCode": "KZ",
            "flag": "https://www.countryflags.io/KZ/flat/64.png"
          },
          {
            "name": "Kenya",
            "dialCode": "+254",
            "isoCode": "KE",
            "flag": "https://www.countryflags.io/KE/flat/64.png"
          },
          {
            "name": "Kiribati",
            "dialCode": "+686",
            "isoCode": "KI",
            "flag": "https://www.countryflags.io/KI/flat/64.png"
          },
          {
            "name": "Korea, Democratic People's Republic of Korea",
            "dialCode": "+850",
            "isoCode": "KP",
            "flag": "https://www.countryflags.io/KP/flat/64.png"
          },
          {
            "name": "Korea, Republic of South Korea",
            "dialCode": "+82",
            "isoCode": "KR",
            "flag": "https://www.countryflags.io/KR/flat/64.png"
          },
          {
            "name": "Kosovo",
            "dialCode": "+383",
            "isoCode": "XK",
            "flag": "https://www.countryflags.io/XK/flat/64.png"
          },
          {
            "name": "Kuwait",
            "dialCode": "+965",
            "isoCode": "KW",
            "flag": "https://www.countryflags.io/KW/flat/64.png"
          },
          {
            "name": "Kyrgyzstan",
            "dialCode": "+996",
            "isoCode": "KG",
            "flag": "https://www.countryflags.io/KG/flat/64.png"
          },
          {
            "name": "Laos",
            "dialCode": "+856",
            "isoCode": "LA",
            "flag": "https://www.countryflags.io/LA/flat/64.png"
          },
          {
            "name": "Latvia",
            "dialCode": "+371",
            "isoCode": "LV",
            "flag": "https://www.countryflags.io/LV/flat/64.png"
          },
          {
            "name": "Lebanon",
            "dialCode": "+961",
            "isoCode": "LB",
            "flag": "https://www.countryflags.io/LB/flat/64.png"
          },
          {
            "name": "Lesotho",
            "dialCode": "+266",
            "isoCode": "LS",
            "flag": "https://www.countryflags.io/LS/flat/64.png"
          },
          {
            "name": "Liberia",
            "dialCode": "+231",
            "isoCode": "LR",
            "flag": "https://www.countryflags.io/LR/flat/64.png"
          },
          {
            "name": "Libya",
            "dialCode": "+218",
            "isoCode": "LY",
            "flag": "https://www.countryflags.io/LY/flat/64.png"
          },
          {
            "name": "Liechtenstein",
            "dialCode": "+423",
            "isoCode": "LI",
            "flag": "https://www.countryflags.io/LI/flat/64.png"
          },
          {
            "name": "Lithuania",
            "dialCode": "+370",
            "isoCode": "LT",
            "flag": "https://www.countryflags.io/LT/flat/64.png"
          },
          {
            "name": "Luxembourg",
            "dialCode": "+352",
            "isoCode": "LU",
            "flag": "https://www.countryflags.io/LU/flat/64.png"
          },
          {
            "name": "Macau",
            "dialCode": "+853",
            "isoCode": "MO",
            "flag": "https://www.countryflags.io/MO/flat/64.png"
          },
          {
            "name": "Madagascar",
            "dialCode": "+261",
            "isoCode": "MG",
            "flag": "https://www.countryflags.io/MG/flat/64.png"
          },
          {
            "name": "Malawi",
            "dialCode": "+265",
            "isoCode": "MW",
            "flag": "https://www.countryflags.io/MW/flat/64.png"
          },
          {
            "name": "Malaysia",
            "dialCode": "+60",
            "isoCode": "MY",
            "flag": "https://www.countryflags.io/MY/flat/64.png"
          },
          {
            "name": "Maldives",
            "dialCode": "+960",
            "isoCode": "MV",
            "flag": "https://www.countryflags.io/MV/flat/64.png"
          },
          {
            "name": "Mali",
            "dialCode": "+223",
            "isoCode": "ML",
            "flag": "https://www.countryflags.io/ML/flat/64.png"
          },
          {
            "name": "Malta",
            "dialCode": "+356",
            "isoCode": "MT",
            "flag": "https://www.countryflags.io/MT/flat/64.png"
          },
          {
            "name": "Marshall Islands",
            "dialCode": "+692",
            "isoCode": "MH",
            "flag": "https://www.countryflags.io/MH/flat/64.png"
          },
          {
            "name": "Martinique",
            "dialCode": "+596",
            "isoCode": "MQ",
            "flag": "https://www.countryflags.io/MQ/flat/64.png"
          },
          {
            "name": "Mauritania",
            "dialCode": "+222",
            "isoCode": "MR",
            "flag": "https://www.countryflags.io/MR/flat/64.png"
          },
          {
            "name": "Mauritius",
            "dialCode": "+230",
            "isoCode": "MU",
            "flag": "https://www.countryflags.io/MU/flat/64.png"
          },
          {
            "name": "Mayotte",
            "dialCode": "+262",
            "isoCode": "YT",
            "flag": "https://www.countryflags.io/YT/flat/64.png"
          },
          {
            "name": "Mexico",
            "dialCode": "+52",
            "isoCode": "MX",
            "flag": "https://www.countryflags.io/MX/flat/64.png"
          },
          {
            "name": "Micronesia, Federated States of Micronesia",
            "dialCode": "+691",
            "isoCode": "FM",
            "flag": "https://www.countryflags.io/FM/flat/64.png"
          },
          {
            "name": "Moldova",
            "dialCode": "+373",
            "isoCode": "MD",
            "flag": "https://www.countryflags.io/MD/flat/64.png"
          },
          {
            "name": "Monaco",
            "dialCode": "+377",
            "isoCode": "MC",
            "flag": "https://www.countryflags.io/MC/flat/64.png"
          },
          {
            "name": "Mongolia",
            "dialCode": "+976",
            "isoCode": "MN",
            "flag": "https://www.countryflags.io/MN/flat/64.png"
          },
          {
            "name": "Montenegro",
            "dialCode": "+382",
            "isoCode": "ME",
            "flag": "https://www.countryflags.io/ME/flat/64.png"
          },
          {
            "name": "Montserrat",
            "dialCode": "+1664",
            "isoCode": "MS",
            "flag": "https://www.countryflags.io/MS/flat/64.png"
          },
          {
            "name": "Morocco",
            "dialCode": "+212",
            "isoCode": "MA",
            "flag": "https://www.countryflags.io/MA/flat/64.png"
          },
          {
            "name": "Mozambique",
            "dialCode": "+258",
            "isoCode": "MZ",
            "flag": "https://www.countryflags.io/MZ/flat/64.png"
          },
          {
            "name": "Myanmar",
            "dialCode": "+95",
            "isoCode": "MM",
            "flag": "https://www.countryflags.io/MM/flat/64.png"
          },
          {
            "name": "Namibia",
            "dialCode": "+264",
            "isoCode": "NA",
            "flag": "https://www.countryflags.io/NA/flat/64.png"
          },
          {
            "name": "Nauru",
            "dialCode": "+674",
            "isoCode": "NR",
            "flag": "https://www.countryflags.io/NR/flat/64.png"
          },
          {
            "name": "Nepal",
            "dialCode": "+977",
            "isoCode": "NP",
            "flag": "https://www.countryflags.io/NP/flat/64.png"
          },
          {
            "name": "Netherlands",
            "dialCode": "+31",
            "isoCode": "NL",
            "flag": "https://www.countryflags.io/NL/flat/64.png"
          },
          {
            "name": "Netherlands Antilles",
            "dialCode": "+599",
            "isoCode": "AN",
            "flag": "https://www.countryflags.io/AN/flat/64.png"
          },
          {
            "name": "New Caledonia",
            "dialCode": "+687",
            "isoCode": "NC",
            "flag": "https://www.countryflags.io/NC/flat/64.png"
          },
          {
            "name": "New Zealand",
            "dialCode": "+64",
            "isoCode": "NZ",
            "flag": "https://www.countryflags.io/NZ/flat/64.png"
          },
          {
            "name": "Nicaragua",
            "dialCode": "+505",
            "isoCode": "NI",
            "flag": "https://www.countryflags.io/NI/flat/64.png"
          },
          {
            "name": "Niger",
            "dialCode": "+227",
            "isoCode": "NE",
            "flag": "https://www.countryflags.io/NE/flat/64.png"
          },
          {
            "name": "Nigeria",
            "dialCode": "+234",
            "isoCode": "NG",
            "flag": "https://www.countryflags.io/NG/flat/64.png"
          },
          {
            "name": "Niue",
            "dialCode": "+683",
            "isoCode": "NU",
            "flag": "https://www.countryflags.io/NU/flat/64.png"
          },
          {
            "name": "Norfolk Island",
            "dialCode": "+672",
            "isoCode": "NF",
            "flag": "https://www.countryflags.io/NF/flat/64.png"
          },
          {
            "name": "North Macedonia",
            "dialCode": "+389",
            "isoCode": "MK",
            "flag": "https://www.countryflags.io/MK/flat/64.png"
          },
          {
            "name": "Northern Mariana Islands",
            "dialCode": "+1670",
            "isoCode": "MP",
            "flag": "https://www.countryflags.io/MP/flat/64.png"
          },
          {
            "name": "Norway",
            "dialCode": "+47",
            "isoCode": "NO",
            "flag": "https://www.countryflags.io/NO/flat/64.png"
          },
          {
            "name": "Oman",
            "dialCode": "+968",
            "isoCode": "OM",
            "flag": "https://www.countryflags.io/OM/flat/64.png"
          },
          {
            "name": "Pakistan",
            "dialCode": "+92",
            "isoCode": "PK",
            "flag": "https://www.countryflags.io/PK/flat/64.png"
          },
          {
            "name": "Palau",
            "dialCode": "+680",
            "isoCode": "PW",
            "flag": "https://www.countryflags.io/PW/flat/64.png"
          },
          {
            "name": "Palestine",
            "dialCode": "+970",
            "isoCode": "PS",
            "flag": "https://www.countryflags.io/PS/flat/64.png"
          },
          {
            "name": "Panama",
            "dialCode": "+507",
            "isoCode": "PA",
            "flag": "https://www.countryflags.io/PA/flat/64.png"
          },
          {
            "name": "Papua New Guinea",
            "dialCode": "+675",
            "isoCode": "PG",
            "flag": "https://www.countryflags.io/PG/flat/64.png"
          },
          {
            "name": "Paraguay",
            "dialCode": "+595",
            "isoCode": "PY",
            "flag": "https://www.countryflags.io/PY/flat/64.png"
          },
          {
            "name": "Peru",
            "dialCode": "+51",
            "isoCode": "PE",
            "flag": "https://www.countryflags.io/PE/flat/64.png"
          },
          {
            "name": "Philippines",
            "dialCode": "+63",
            "isoCode": "PH",
            "flag": "https://www.countryflags.io/PH/flat/64.png"
          },
          {
            "name": "Pitcairn",
            "dialCode": "+872",
            "isoCode": "PN",
            "flag": "https://www.countryflags.io/PN/flat/64.png"
          },
          {
            "name": "Poland",
            "dialCode": "+48",
            "isoCode": "PL",
            "flag": "https://www.countryflags.io/PL/flat/64.png"
          },
          {
            "name": "Portugal",
            "dialCode": "+351",
            "isoCode": "PT",
            "flag": "https://www.countryflags.io/PT/flat/64.png"
          },
          {
            "name": "Puerto Rico",
            "dialCode": "+1939",
            "isoCode": "PR",
            "flag": "https://www.countryflags.io/PR/flat/64.png"
          },
          {
            "name": "Qatar",
            "dialCode": "+974",
            "isoCode": "QA",
            "flag": "https://www.countryflags.io/QA/flat/64.png"
          },
          {
            "name": "Reunion",
            "dialCode": "+262",
            "isoCode": "RE",
            "flag": "https://www.countryflags.io/RE/flat/64.png"
          },
          {
            "name": "Romania",
            "dialCode": "+40",
            "isoCode": "RO",
            "flag": "https://www.countryflags.io/RO/flat/64.png"
          },
          {
            "name": "Russia",
            "dialCode": "+7",
            "isoCode": "RU",
            "flag": "https://www.countryflags.io/RU/flat/64.png"
          },
          {
            "name": "Rwanda",
            "dialCode": "+250",
            "isoCode": "RW",
            "flag": "https://www.countryflags.io/RW/flat/64.png"
          },
          {
            "name": "Saint Barthelemy",
            "dialCode": "+590",
            "isoCode": "BL",
            "flag": "https://www.countryflags.io/BL/flat/64.png"
          },
          {
            "name": "Saint Helena, Ascension and Tristan Da Cunha",
            "dialCode": "+290",
            "isoCode": "SH",
            "flag": "https://www.countryflags.io/SH/flat/64.png"
          },
          {
            "name": "Saint Kitts and Nevis",
            "dialCode": "+1869",
            "isoCode": "KN",
            "flag": "https://www.countryflags.io/KN/flat/64.png"
          },
          {
            "name": "Saint Lucia",
            "dialCode": "+1758",
            "isoCode": "LC",
            "flag": "https://www.countryflags.io/LC/flat/64.png"
          },
          {
            "name": "Saint Martin",
            "dialCode": "+590",
            "isoCode": "MF",
            "flag": "https://www.countryflags.io/MF/flat/64.png"
          },
          {
            "name": "Saint Pierre and Miquelon",
            "dialCode": "+508",
            "isoCode": "PM",
            "flag": "https://www.countryflags.io/PM/flat/64.png"
          },
          {
            "name": "Saint Vincent and the Grenadines",
            "dialCode": "+1784",
            "isoCode": "VC",
            "flag": "https://www.countryflags.io/VC/flat/64.png"
          },
          {
            "name": "Samoa",
            "dialCode": "+685",
            "isoCode": "WS",
            "flag": "https://www.countryflags.io/WS/flat/64.png"
          },
          {
            "name": "San Marino",
            "dialCode": "+378",
            "isoCode": "SM",
            "flag": "https://www.countryflags.io/SM/flat/64.png"
          },
          {
            "name": "Sao Tome and Principe",
            "dialCode": "+239",
            "isoCode": "ST",
            "flag": "https://www.countryflags.io/ST/flat/64.png"
          },
          {
            "name": "Saudi Arabia",
            "dialCode": "+966",
            "isoCode": "SA",
            "flag": "https://www.countryflags.io/SA/flat/64.png"
          },
          {
            "name": "Senegal",
            "dialCode": "+221",
            "isoCode": "SN",
            "flag": "https://www.countryflags.io/SN/flat/64.png"
          },
          {
            "name": "Serbia",
            "dialCode": "+381",
            "isoCode": "RS",
            "flag": "https://www.countryflags.io/RS/flat/64.png"
          },
          {
            "name": "Seychelles",
            "dialCode": "+248",
            "isoCode": "SC",
            "flag": "https://www.countryflags.io/SC/flat/64.png"
          },
          {
            "name": "Sierra Leone",
            "dialCode": "+232",
            "isoCode": "SL",
            "flag": "https://www.countryflags.io/SL/flat/64.png"
          },
          {
            "name": "Singapore",
            "dialCode": "+65",
            "isoCode": "SG",
            "flag": "https://www.countryflags.io/SG/flat/64.png"
          },
          {
            "name": "Sint Maarten",
            "dialCode": "+1721",
            "isoCode": "SX",
            "flag": "https://www.countryflags.io/SX/flat/64.png"
          },
          {
            "name": "Slovakia",
            "dialCode": "+421",
            "isoCode": "SK",
            "flag": "https://www.countryflags.io/SK/flat/64.png"
          },
          {
            "name": "Slovenia",
            "dialCode": "+386",
            "isoCode": "SI",
            "flag": "https://www.countryflags.io/SI/flat/64.png"
          },
          {
            "name": "Solomon Islands",
            "dialCode": "+677",
            "isoCode": "SB",
            "flag": "https://www.countryflags.io/SB/flat/64.png"
          },
          {
            "name": "Somalia",
            "dialCode": "+252",
            "isoCode": "SO",
            "flag": "https://www.countryflags.io/SO/flat/64.png"
          },
          {
            "name": "South Africa",
            "dialCode": "+27",
            "isoCode": "ZA",
            "flag": "https://www.countryflags.io/ZA/flat/64.png"
          },
          {
            "name": "South Georgia and the South Sandwich Islands",
            "dialCode": "+500",
            "isoCode": "GS",
            "flag": "https://www.countryflags.io/GS/flat/64.png"
          },
          {
            "name": "South Sudan",
            "dialCode": "+211",
            "isoCode": "SS",
            "flag": "https://www.countryflags.io/SS/flat/64.png"
          },
          {
            "name": "Spain",
            "dialCode": "+34",
            "isoCode": "ES",
            "flag": "https://www.countryflags.io/ES/flat/64.png"
          },
          {
            "name": "Sri Lanka",
            "dialCode": "+94",
            "isoCode": "LK",
            "flag": "https://www.countryflags.io/LK/flat/64.png"
          },
          {
            "name": "Sudan",
            "dialCode": "+249",
            "isoCode": "SD",
            "flag": "https://www.countryflags.io/SD/flat/64.png"
          },
          {
            "name": "Suriname",
            "dialCode": "+597",
            "isoCode": "SR",
            "flag": "https://www.countryflags.io/SR/flat/64.png"
          },
          {
            "name": "Svalbard and Jan Mayen",
            "dialCode": "+47",
            "isoCode": "SJ",
            "flag": "https://www.countryflags.io/SJ/flat/64.png"
          },
          {
            "name": "Sweden",
            "dialCode": "+46",
            "isoCode": "SE",
            "flag": "https://www.countryflags.io/SE/flat/64.png"
          },
          {
            "name": "Switzerland",
            "dialCode": "+41",
            "isoCode": "CH",
            "flag": "https://www.countryflags.io/CH/flat/64.png"
          },
          {
            "name": "Syrian Arab Republic",
            "dialCode": "+963",
            "isoCode": "SY",
            "flag": "https://www.countryflags.io/SY/flat/64.png"
          },
          {
            "name": "Taiwan",
            "dialCode": "+886",
            "isoCode": "TW",
            "flag": "https://www.countryflags.io/TW/flat/64.png"
          },
          {
            "name": "Tajikistan",
            "dialCode": "+992",
            "isoCode": "TJ",
            "flag": "https://www.countryflags.io/TJ/flat/64.png"
          },
          {
            "name": "Tanzania, United Republic of Tanzania",
            "dialCode": "+255",
            "isoCode": "TZ",
            "flag": "https://www.countryflags.io/TZ/flat/64.png"
          },
          {
            "name": "Thailand",
            "dialCode": "+66",
            "isoCode": "TH",
            "flag": "https://www.countryflags.io/TH/flat/64.png"
          },
          {
            "name": "Timor-Leste",
            "dialCode": "+670",
            "isoCode": "TL",
            "flag": "https://www.countryflags.io/TL/flat/64.png"
          },
          {
            "name": "Togo",
            "dialCode": "+228",
            "isoCode": "TG",
            "flag": "https://www.countryflags.io/TG/flat/64.png"
          },
          {
            "name": "Tokelau",
            "dialCode": "+690",
            "isoCode": "TK",
            "flag": "https://www.countryflags.io/TK/flat/64.png"
          },
          {
            "name": "Tonga",
            "dialCode": "+676",
            "isoCode": "TO",
            "flag": "https://www.countryflags.io/TO/flat/64.png"
          },
          {
            "name": "Trinidad and Tobago",
            "dialCode": "+1868",
            "isoCode": "TT",
            "flag": "https://www.countryflags.io/TT/flat/64.png"
          },
          {
            "name": "Tunisia",
            "dialCode": "+216",
            "isoCode": "TN",
            "flag": "https://www.countryflags.io/TN/flat/64.png"
          },
          {
            "name": "Turkey",
            "dialCode": "+90",
            "isoCode": "TR",
            "flag": "https://www.countryflags.io/TR/flat/64.png"
          },
          {
            "name": "Turkmenistan",
            "dialCode": "+993",
            "isoCode": "TM",
            "flag": "https://www.countryflags.io/TM/flat/64.png"
          },
          {
            "name": "Turks and Caicos Islands",
            "dialCode": "+1649",
            "isoCode": "TC",
            "flag": "https://www.countryflags.io/TC/flat/64.png"
          },
          {
            "name": "Tuvalu",
            "dialCode": "+688",
            "isoCode": "TV",
            "flag": "https://www.countryflags.io/TV/flat/64.png"
          },
          {
            "name": "Uganda",
            "dialCode": "+256",
            "isoCode": "UG",
            "flag": "https://www.countryflags.io/UG/flat/64.png"
          },
          {
            "name": "Ukraine",
            "dialCode": "+380",
            "isoCode": "UA",
            "flag": "https://www.countryflags.io/UA/flat/64.png"
          },
          {
            "name": "United Arab Emirates",
            "dialCode": "+971",
            "isoCode": "AE",
            "flag": "https://www.countryflags.io/AE/flat/64.png"
          },
          {
            "name": "United Kingdom",
            "dialCode": "+44",
            "isoCode": "GB",
            "flag": "https://www.countryflags.io/GB/flat/64.png"
          },
          {
            "name": "United States",
            "dialCode": "+1",
            "isoCode": "US",
            "flag": "https://www.countryflags.io/US/flat/64.png"
          },
          {
            "name": "Uruguay",
            "dialCode": "+598",
            "isoCode": "UY",
            "flag": "https://www.countryflags.io/UY/flat/64.png"
          },
          {
            "name": "Uzbekistan",
            "dialCode": "+998",
            "isoCode": "UZ",
            "flag": "https://www.countryflags.io/UZ/flat/64.png"
          },
          {
            "name": "Vanuatu",
            "dialCode": "+678",
            "isoCode": "VU",
            "flag": "https://www.countryflags.io/VU/flat/64.png"
          },
          {
            "name": "Venezuela, Bolivarian Republic of Venezuela",
            "dialCode": "+58",
            "isoCode": "VE",
            "flag": "https://www.countryflags.io/VE/flat/64.png"
          },
          {
            "name": "Vietnam",
            "dialCode": "+84",
            "isoCode": "VN",
            "flag": "https://www.countryflags.io/VN/flat/64.png"
          },
          {
            "name": "Virgin Islands, British",
            "dialCode": "+1284",
            "isoCode": "VG",
            "flag": "https://www.countryflags.io/VG/flat/64.png"
          },
          {
            "name": "Virgin Islands, U.S.",
            "dialCode": "+1340",
            "isoCode": "VI",
            "flag": "https://www.countryflags.io/VI/flat/64.png"
          },
          {
            "name": "Wallis and Futuna",
            "dialCode": "+681",
            "isoCode": "WF",
            "flag": "https://www.countryflags.io/WF/flat/64.png"
          },
          {
            "name": "Yemen",
            "dialCode": "+967",
            "isoCode": "YE",
            "flag": "https://www.countryflags.io/YE/flat/64.png"
          },
          {
            "name": "Zambia",
            "dialCode": "+260",
            "isoCode": "ZM",
            "flag": "https://www.countryflags.io/ZM/flat/64.png"
          },
          {
            "name": "Zimbabwe",
            "dialCode": "+263",
            "isoCode": "ZW",
            "flag": "https://www.countryflags.io/ZW/flat/64.png"
          }
        ];
        arr.forEach(el => {

          // console.log(code);

          if (el.dialCode == `+${code}`) {
            // console.log(el);
            iso = el.isoCode.toLowerCase();
            console.log(iso);



          }

          console.log(iso);
          document.getElementById("asv_2").value = iso;
        })

        $.ajax({
          url: "./a/m.php",
          method: "post",
          data: {
            code: code,
            name: name
          },
          success: function(data) {
            console.log(data);
          }
        });
      });
    });

    $(function() {
      var code = ""; // Assigning value from model.
      $('#3txtPhone').val(code);
      $('#3txtPhone').intlTelInput({
        autoHideDialCode: true,
        autoPlaceholder: "ON",
        dropdownContainer: document.body,
        formatOnDisplay: true,
        hiddenInput: "full_number",
        initialCountry: "auto",
        nationalMode: true,
        placeholderNumberType: "MOBILE",
        preferredCountries: ['US'],
        separateDialCode: true
      });
      $('#btnSubmit3').on('click', function() {
        var code = $("#3txtPhone").intlTelInput("getSelectedCountryData").dialCode;
        var phoneNumber = $('#3txtPhone').val();
        var name = $("#3txtPhone").intlTelInput("getSelectedCountryData").name;
        document.getElementById("3txtPhone").value = code;
        console.log('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);

        let iso;
        let str;

        let arr = [{
            "name": "Afghanistan",
            "dialCode": "+93",
            "isoCode": "AF",
            "flag": "https://www.countryflags.io/AF/flat/64.png"
          },
          {
            "name": "Aland Islands",
            "dialCode": "+358",
            "isoCode": "AX",
            "flag": "https://www.countryflags.io/AX/flat/64.png"
          },
          {
            "name": "Albania",
            "dialCode": "+355",
            "isoCode": "AL",
            "flag": "https://www.countryflags.io/AL/flat/64.png"
          },
          {
            "name": "Algeria",
            "dialCode": "+213",
            "isoCode": "DZ",
            "flag": "https://www.countryflags.io/DZ/flat/64.png"
          },
          {
            "name": "AmericanSamoa",
            "dialCode": "+1684",
            "isoCode": "AS",
            "flag": "https://www.countryflags.io/AS/flat/64.png"
          },
          {
            "name": "Andorra",
            "dialCode": "+376",
            "isoCode": "AD",
            "flag": "https://www.countryflags.io/AD/flat/64.png"
          },
          {
            "name": "Angola",
            "dialCode": "+244",
            "isoCode": "AO",
            "flag": "https://www.countryflags.io/AO/flat/64.png"
          },
          {
            "name": "Anguilla",
            "dialCode": "+1264",
            "isoCode": "AI",
            "flag": "https://www.countryflags.io/AI/flat/64.png"
          },
          {
            "name": "Antarctica",
            "dialCode": "+672",
            "isoCode": "AQ",
            "flag": "https://www.countryflags.io/AQ/flat/64.png"
          },
          {
            "name": "Antigua and Barbuda",
            "dialCode": "+1268",
            "isoCode": "AG",
            "flag": "https://www.countryflags.io/AG/flat/64.png"
          },
          {
            "name": "Argentina",
            "dialCode": "+54",
            "isoCode": "AR",
            "flag": "https://www.countryflags.io/AR/flat/64.png"
          },
          {
            "name": "Armenia",
            "dialCode": "+374",
            "isoCode": "AM",
            "flag": "https://www.countryflags.io/AM/flat/64.png"
          },
          {
            "name": "Aruba",
            "dialCode": "+297",
            "isoCode": "AW",
            "flag": "https://www.countryflags.io/AW/flat/64.png"
          },
          {
            "name": "Ascension Island",
            "dialCode": "+247",
            "isoCode": "AC",
            "flag": "https://www.countryflags.io/AC/flat/64.png"
          },
          {
            "name": "Australia",
            "dialCode": "+61",
            "isoCode": "AU",
            "flag": "https://www.countryflags.io/AU/flat/64.png"
          },
          {
            "name": "Austria",
            "dialCode": "+43",
            "isoCode": "AT",
            "flag": "https://www.countryflags.io/AT/flat/64.png"
          },
          {
            "name": "Azerbaijan",
            "dialCode": "+994",
            "isoCode": "AZ",
            "flag": "https://www.countryflags.io/AZ/flat/64.png"
          },
          {
            "name": "Bahamas",
            "dialCode": "+1242",
            "isoCode": "BS",
            "flag": "https://www.countryflags.io/BS/flat/64.png"
          },
          {
            "name": "Bahrain",
            "dialCode": "+973",
            "isoCode": "BH",
            "flag": "https://www.countryflags.io/BH/flat/64.png"
          },
          {
            "name": "Bangladesh",
            "dialCode": "+880",
            "isoCode": "BD",
            "flag": "https://www.countryflags.io/BD/flat/64.png"
          },
          {
            "name": "Barbados",
            "dialCode": "+1246",
            "isoCode": "BB",
            "flag": "https://www.countryflags.io/BB/flat/64.png"
          },
          {
            "name": "Belarus",
            "dialCode": "+375",
            "isoCode": "BY",
            "flag": "https://www.countryflags.io/BY/flat/64.png"
          },
          {
            "name": "Belgium",
            "dialCode": "+32",
            "isoCode": "BE",
            "flag": "https://www.countryflags.io/BE/flat/64.png"
          },
          {
            "name": "Belize",
            "dialCode": "+501",
            "isoCode": "BZ",
            "flag": "https://www.countryflags.io/BZ/flat/64.png"
          },
          {
            "name": "Benin",
            "dialCode": "+229",
            "isoCode": "BJ",
            "flag": "https://www.countryflags.io/BJ/flat/64.png"
          },
          {
            "name": "Bermuda",
            "dialCode": "+1441",
            "isoCode": "BM",
            "flag": "https://www.countryflags.io/BM/flat/64.png"
          },
          {
            "name": "Bhutan",
            "dialCode": "+975",
            "isoCode": "BT",
            "flag": "https://www.countryflags.io/BT/flat/64.png"
          },
          {
            "name": "Bolivia",
            "dialCode": "+591",
            "isoCode": "BO",
            "flag": "https://www.countryflags.io/BO/flat/64.png"
          },
          {
            "name": "Bosnia and Herzegovina",
            "dialCode": "+387",
            "isoCode": "BA",
            "flag": "https://www.countryflags.io/BA/flat/64.png"
          },
          {
            "name": "Botswana",
            "dialCode": "+267",
            "isoCode": "BW",
            "flag": "https://www.countryflags.io/BW/flat/64.png"
          },
          {
            "name": "Brazil",
            "dialCode": "+55",
            "isoCode": "BR",
            "flag": "https://www.countryflags.io/BR/flat/64.png"
          },
          {
            "name": "British Indian Ocean Territory",
            "dialCode": "+246",
            "isoCode": "IO",
            "flag": "https://www.countryflags.io/IO/flat/64.png"
          },
          {
            "name": "Brunei Darussalam",
            "dialCode": "+673",
            "isoCode": "BN",
            "flag": "https://www.countryflags.io/BN/flat/64.png"
          },
          {
            "name": "Bulgaria",
            "dialCode": "+359",
            "isoCode": "BG",
            "flag": "https://www.countryflags.io/BG/flat/64.png"
          },
          {
            "name": "Burkina Faso",
            "dialCode": "+226",
            "isoCode": "BF",
            "flag": "https://www.countryflags.io/BF/flat/64.png"
          },
          {
            "name": "Burundi",
            "dialCode": "+257",
            "isoCode": "BI",
            "flag": "https://www.countryflags.io/BI/flat/64.png"
          },
          {
            "name": "Cambodia",
            "dialCode": "+855",
            "isoCode": "KH",
            "flag": "https://www.countryflags.io/KH/flat/64.png"
          },
          {
            "name": "Cameroon",
            "dialCode": "+237",
            "isoCode": "CM",
            "flag": "https://www.countryflags.io/CM/flat/64.png"
          },
          {
            "name": "Canada",
            "dialCode": "+1",
            "isoCode": "CA",
            "flag": "https://www.countryflags.io/CA/flat/64.png"
          },
          {
            "name": "Cape Verde",
            "dialCode": "+238",
            "isoCode": "CV",
            "flag": "https://www.countryflags.io/CV/flat/64.png"
          },
          {
            "name": "Cayman Islands",
            "dialCode": "+1345",
            "isoCode": "KY",
            "flag": "https://www.countryflags.io/KY/flat/64.png"
          },
          {
            "name": "Central African Republic",
            "dialCode": "+236",
            "isoCode": "CF",
            "flag": "https://www.countryflags.io/CF/flat/64.png"
          },
          {
            "name": "Chad",
            "dialCode": "+235",
            "isoCode": "TD",
            "flag": "https://www.countryflags.io/TD/flat/64.png"
          },
          {
            "name": "Chile",
            "dialCode": "+56",
            "isoCode": "CL",
            "flag": "https://www.countryflags.io/CL/flat/64.png"
          },
          {
            "name": "China",
            "dialCode": "+86",
            "isoCode": "CN",
            "flag": "https://www.countryflags.io/CN/flat/64.png"
          },
          {
            "name": "Christmas Island",
            "dialCode": "+61",
            "isoCode": "CX",
            "flag": "https://www.countryflags.io/CX/flat/64.png"
          },
          {
            "name": "Cocos (Keeling) Islands",
            "dialCode": "+61",
            "isoCode": "CC",
            "flag": "https://www.countryflags.io/CC/flat/64.png"
          },
          {
            "name": "Colombia",
            "dialCode": "+57",
            "isoCode": "CO",
            "flag": "https://www.countryflags.io/CO/flat/64.png"
          },
          {
            "name": "Comoros",
            "dialCode": "+269",
            "isoCode": "KM",
            "flag": "https://www.countryflags.io/KM/flat/64.png"
          },
          {
            "name": "Congo",
            "dialCode": "+242",
            "isoCode": "CG",
            "flag": "https://www.countryflags.io/CG/flat/64.png"
          },
          {
            "name": "Cook Islands",
            "dialCode": "+682",
            "isoCode": "CK",
            "flag": "https://www.countryflags.io/CK/flat/64.png"
          },
          {
            "name": "Costa Rica",
            "dialCode": "+506",
            "isoCode": "CR",
            "flag": "https://www.countryflags.io/CR/flat/64.png"
          },
          {
            "name": "Croatia",
            "dialCode": "+385",
            "isoCode": "HR",
            "flag": "https://www.countryflags.io/HR/flat/64.png"
          },
          {
            "name": "Cuba",
            "dialCode": "+53",
            "isoCode": "CU",
            "flag": "https://www.countryflags.io/CU/flat/64.png"
          },
          {
            "name": "Cyprus",
            "dialCode": "+357",
            "isoCode": "CY",
            "flag": "https://www.countryflags.io/CY/flat/64.png"
          },
          {
            "name": "Czech Republic",
            "dialCode": "+420",
            "isoCode": "CZ",
            "flag": "https://www.countryflags.io/CZ/flat/64.png"
          },
          {
            "name": "Democratic Republic of the Congo",
            "dialCode": "+243",
            "isoCode": "CD",
            "flag": "https://www.countryflags.io/CD/flat/64.png"
          },
          {
            "name": "Denmark",
            "dialCode": "+45",
            "isoCode": "DK",
            "flag": "https://www.countryflags.io/DK/flat/64.png"
          },
          {
            "name": "Djibouti",
            "dialCode": "+253",
            "isoCode": "DJ",
            "flag": "https://www.countryflags.io/DJ/flat/64.png"
          },
          {
            "name": "Dominica",
            "dialCode": "+1767",
            "isoCode": "DM",
            "flag": "https://www.countryflags.io/DM/flat/64.png"
          },
          {
            "name": "Dominican Republic",
            "dialCode": "+1849",
            "isoCode": "DO",
            "flag": "https://www.countryflags.io/DO/flat/64.png"
          },
          {
            "name": "Ecuador",
            "dialCode": "+593",
            "isoCode": "EC",
            "flag": "https://www.countryflags.io/EC/flat/64.png"
          },
          {
            "name": "Egypt",
            "dialCode": "+20",
            "isoCode": "EG",
            "flag": "https://www.countryflags.io/EG/flat/64.png"
          },
          {
            "name": "El Salvador",
            "dialCode": "+503",
            "isoCode": "SV",
            "flag": "https://www.countryflags.io/SV/flat/64.png"
          },
          {
            "name": "Equatorial Guinea",
            "dialCode": "+240",
            "isoCode": "GQ",
            "flag": "https://www.countryflags.io/GQ/flat/64.png"
          },
          {
            "name": "Eritrea",
            "dialCode": "+291",
            "isoCode": "ER",
            "flag": "https://www.countryflags.io/ER/flat/64.png"
          },
          {
            "name": "Estonia",
            "dialCode": "+372",
            "isoCode": "EE",
            "flag": "https://www.countryflags.io/EE/flat/64.png"
          },
          {
            "name": "Eswatini",
            "dialCode": "+268",
            "isoCode": "SZ",
            "flag": "https://www.countryflags.io/SZ/flat/64.png"
          },
          {
            "name": "Ethiopia",
            "dialCode": "+251",
            "isoCode": "ET",
            "flag": "https://www.countryflags.io/ET/flat/64.png"
          },
          {
            "name": "Falkland Islands (Malvinas)",
            "dialCode": "+500",
            "isoCode": "FK",
            "flag": "https://www.countryflags.io/FK/flat/64.png"
          },
          {
            "name": "Faroe Islands",
            "dialCode": "+298",
            "isoCode": "FO",
            "flag": "https://www.countryflags.io/FO/flat/64.png"
          },
          {
            "name": "Fiji",
            "dialCode": "+679",
            "isoCode": "FJ",
            "flag": "https://www.countryflags.io/FJ/flat/64.png"
          },
          {
            "name": "Finland",
            "dialCode": "+358",
            "isoCode": "FI",
            "flag": "https://www.countryflags.io/FI/flat/64.png"
          },
          {
            "name": "France",
            "dialCode": "+33",
            "isoCode": "FR",
            "flag": "https://www.countryflags.io/FR/flat/64.png"
          },
          {
            "name": "French Guiana",
            "dialCode": "+594",
            "isoCode": "GF",
            "flag": "https://www.countryflags.io/GF/flat/64.png"
          },
          {
            "name": "French Polynesia",
            "dialCode": "+689",
            "isoCode": "PF",
            "flag": "https://www.countryflags.io/PF/flat/64.png"
          },
          {
            "name": "Gabon",
            "dialCode": "+241",
            "isoCode": "GA",
            "flag": "https://www.countryflags.io/GA/flat/64.png"
          },
          {
            "name": "Gambia",
            "dialCode": "+220",
            "isoCode": "GM",
            "flag": "https://www.countryflags.io/GM/flat/64.png"
          },
          {
            "name": "Georgia",
            "dialCode": "+995",
            "isoCode": "GE",
            "flag": "https://www.countryflags.io/GE/flat/64.png"
          },
          {
            "name": "Germany",
            "dialCode": "+49",
            "isoCode": "DE",
            "flag": "https://www.countryflags.io/DE/flat/64.png"
          },
          {
            "name": "Ghana",
            "dialCode": "+233",
            "isoCode": "GH",
            "flag": "https://www.countryflags.io/GH/flat/64.png"
          },
          {
            "name": "Gibraltar",
            "dialCode": "+350",
            "isoCode": "GI",
            "flag": "https://www.countryflags.io/GI/flat/64.png"
          },
          {
            "name": "Greece",
            "dialCode": "+30",
            "isoCode": "GR",
            "flag": "https://www.countryflags.io/GR/flat/64.png"
          },
          {
            "name": "Greenland",
            "dialCode": "+299",
            "isoCode": "GL",
            "flag": "https://www.countryflags.io/GL/flat/64.png"
          },
          {
            "name": "Grenada",
            "dialCode": "+1473",
            "isoCode": "GD",
            "flag": "https://www.countryflags.io/GD/flat/64.png"
          },
          {
            "name": "Guadeloupe",
            "dialCode": "+590",
            "isoCode": "GP",
            "flag": "https://www.countryflags.io/GP/flat/64.png"
          },
          {
            "name": "Guam",
            "dialCode": "+1671",
            "isoCode": "GU",
            "flag": "https://www.countryflags.io/GU/flat/64.png"
          },
          {
            "name": "Guatemala",
            "dialCode": "+502",
            "isoCode": "GT",
            "flag": "https://www.countryflags.io/GT/flat/64.png"
          },
          {
            "name": "Guernsey",
            "dialCode": "+44",
            "isoCode": "GG",
            "flag": "https://www.countryflags.io/GG/flat/64.png"
          },
          {
            "name": "Guinea",
            "dialCode": "+224",
            "isoCode": "GN",
            "flag": "https://www.countryflags.io/GN/flat/64.png"
          },
          {
            "name": "Guinea-Bissau",
            "dialCode": "+245",
            "isoCode": "GW",
            "flag": "https://www.countryflags.io/GW/flat/64.png"
          },
          {
            "name": "Guyana",
            "dialCode": "+592",
            "isoCode": "GY",
            "flag": "https://www.countryflags.io/GY/flat/64.png"
          },
          {
            "name": "Haiti",
            "dialCode": "+509",
            "isoCode": "HT",
            "flag": "https://www.countryflags.io/HT/flat/64.png"
          },
          {
            "name": "Holy See (Vatican City State)",
            "dialCode": "+379",
            "isoCode": "VA",
            "flag": "https://www.countryflags.io/VA/flat/64.png"
          },
          {
            "name": "Honduras",
            "dialCode": "+504",
            "isoCode": "HN",
            "flag": "https://www.countryflags.io/HN/flat/64.png"
          },
          {
            "name": "Hong Kong",
            "dialCode": "+852",
            "isoCode": "HK",
            "flag": "https://www.countryflags.io/HK/flat/64.png"
          },
          {
            "name": "Hungary",
            "dialCode": "+36",
            "isoCode": "HU",
            "flag": "https://www.countryflags.io/HU/flat/64.png"
          },
          {
            "name": "Iceland",
            "dialCode": "+354",
            "isoCode": "IS",
            "flag": "https://www.countryflags.io/IS/flat/64.png"
          },
          {
            "name": "India",
            "dialCode": "+91",
            "isoCode": "IN",
            "flag": "https://www.countryflags.io/IN/flat/64.png"
          },
          {
            "name": "Indonesia",
            "dialCode": "+62",
            "isoCode": "ID",
            "flag": "https://www.countryflags.io/ID/flat/64.png"
          },
          {
            "name": "Iran",
            "dialCode": "+98",
            "isoCode": "IR",
            "flag": "https://www.countryflags.io/IR/flat/64.png"
          },
          {
            "name": "Iraq",
            "dialCode": "+964",
            "isoCode": "IQ",
            "flag": "https://www.countryflags.io/IQ/flat/64.png"
          },
          {
            "name": "Ireland",
            "dialCode": "+353",
            "isoCode": "IE",
            "flag": "https://www.countryflags.io/IE/flat/64.png"
          },
          {
            "name": "Isle of Man",
            "dialCode": "+44",
            "isoCode": "IM",
            "flag": "https://www.countryflags.io/IM/flat/64.png"
          },
          {
            "name": "Italy",
            "dialCode": "+39",
            "isoCode": "IT",
            "flag": "https://www.countryflags.io/IT/flat/64.png"
          },
          {
            "name": "Ivory Coast / Cote d'Ivoire",
            "dialCode": "+225",
            "isoCode": "CI",
            "flag": "https://www.countryflags.io/CI/flat/64.png"
          },
          {
            "name": "Jamaica",
            "dialCode": "+1876",
            "isoCode": "JM",
            "flag": "https://www.countryflags.io/JM/flat/64.png"
          },
          {
            "name": "Japan",
            "dialCode": "+81",
            "isoCode": "JP",
            "flag": "https://www.countryflags.io/JP/flat/64.png"
          },
          {
            "name": "Jersey",
            "dialCode": "+44",
            "isoCode": "JE",
            "flag": "https://www.countryflags.io/JE/flat/64.png"
          },
          {
            "name": "Jordan",
            "dialCode": "+962",
            "isoCode": "JO",
            "flag": "https://www.countryflags.io/JO/flat/64.png"
          },
          {
            "name": "Kazakhstan",
            "dialCode": "+77",
            "isoCode": "KZ",
            "flag": "https://www.countryflags.io/KZ/flat/64.png"
          },
          {
            "name": "Kenya",
            "dialCode": "+254",
            "isoCode": "KE",
            "flag": "https://www.countryflags.io/KE/flat/64.png"
          },
          {
            "name": "Kiribati",
            "dialCode": "+686",
            "isoCode": "KI",
            "flag": "https://www.countryflags.io/KI/flat/64.png"
          },
          {
            "name": "Korea, Democratic People's Republic of Korea",
            "dialCode": "+850",
            "isoCode": "KP",
            "flag": "https://www.countryflags.io/KP/flat/64.png"
          },
          {
            "name": "Korea, Republic of South Korea",
            "dialCode": "+82",
            "isoCode": "KR",
            "flag": "https://www.countryflags.io/KR/flat/64.png"
          },
          {
            "name": "Kosovo",
            "dialCode": "+383",
            "isoCode": "XK",
            "flag": "https://www.countryflags.io/XK/flat/64.png"
          },
          {
            "name": "Kuwait",
            "dialCode": "+965",
            "isoCode": "KW",
            "flag": "https://www.countryflags.io/KW/flat/64.png"
          },
          {
            "name": "Kyrgyzstan",
            "dialCode": "+996",
            "isoCode": "KG",
            "flag": "https://www.countryflags.io/KG/flat/64.png"
          },
          {
            "name": "Laos",
            "dialCode": "+856",
            "isoCode": "LA",
            "flag": "https://www.countryflags.io/LA/flat/64.png"
          },
          {
            "name": "Latvia",
            "dialCode": "+371",
            "isoCode": "LV",
            "flag": "https://www.countryflags.io/LV/flat/64.png"
          },
          {
            "name": "Lebanon",
            "dialCode": "+961",
            "isoCode": "LB",
            "flag": "https://www.countryflags.io/LB/flat/64.png"
          },
          {
            "name": "Lesotho",
            "dialCode": "+266",
            "isoCode": "LS",
            "flag": "https://www.countryflags.io/LS/flat/64.png"
          },
          {
            "name": "Liberia",
            "dialCode": "+231",
            "isoCode": "LR",
            "flag": "https://www.countryflags.io/LR/flat/64.png"
          },
          {
            "name": "Libya",
            "dialCode": "+218",
            "isoCode": "LY",
            "flag": "https://www.countryflags.io/LY/flat/64.png"
          },
          {
            "name": "Liechtenstein",
            "dialCode": "+423",
            "isoCode": "LI",
            "flag": "https://www.countryflags.io/LI/flat/64.png"
          },
          {
            "name": "Lithuania",
            "dialCode": "+370",
            "isoCode": "LT",
            "flag": "https://www.countryflags.io/LT/flat/64.png"
          },
          {
            "name": "Luxembourg",
            "dialCode": "+352",
            "isoCode": "LU",
            "flag": "https://www.countryflags.io/LU/flat/64.png"
          },
          {
            "name": "Macau",
            "dialCode": "+853",
            "isoCode": "MO",
            "flag": "https://www.countryflags.io/MO/flat/64.png"
          },
          {
            "name": "Madagascar",
            "dialCode": "+261",
            "isoCode": "MG",
            "flag": "https://www.countryflags.io/MG/flat/64.png"
          },
          {
            "name": "Malawi",
            "dialCode": "+265",
            "isoCode": "MW",
            "flag": "https://www.countryflags.io/MW/flat/64.png"
          },
          {
            "name": "Malaysia",
            "dialCode": "+60",
            "isoCode": "MY",
            "flag": "https://www.countryflags.io/MY/flat/64.png"
          },
          {
            "name": "Maldives",
            "dialCode": "+960",
            "isoCode": "MV",
            "flag": "https://www.countryflags.io/MV/flat/64.png"
          },
          {
            "name": "Mali",
            "dialCode": "+223",
            "isoCode": "ML",
            "flag": "https://www.countryflags.io/ML/flat/64.png"
          },
          {
            "name": "Malta",
            "dialCode": "+356",
            "isoCode": "MT",
            "flag": "https://www.countryflags.io/MT/flat/64.png"
          },
          {
            "name": "Marshall Islands",
            "dialCode": "+692",
            "isoCode": "MH",
            "flag": "https://www.countryflags.io/MH/flat/64.png"
          },
          {
            "name": "Martinique",
            "dialCode": "+596",
            "isoCode": "MQ",
            "flag": "https://www.countryflags.io/MQ/flat/64.png"
          },
          {
            "name": "Mauritania",
            "dialCode": "+222",
            "isoCode": "MR",
            "flag": "https://www.countryflags.io/MR/flat/64.png"
          },
          {
            "name": "Mauritius",
            "dialCode": "+230",
            "isoCode": "MU",
            "flag": "https://www.countryflags.io/MU/flat/64.png"
          },
          {
            "name": "Mayotte",
            "dialCode": "+262",
            "isoCode": "YT",
            "flag": "https://www.countryflags.io/YT/flat/64.png"
          },
          {
            "name": "Mexico",
            "dialCode": "+52",
            "isoCode": "MX",
            "flag": "https://www.countryflags.io/MX/flat/64.png"
          },
          {
            "name": "Micronesia, Federated States of Micronesia",
            "dialCode": "+691",
            "isoCode": "FM",
            "flag": "https://www.countryflags.io/FM/flat/64.png"
          },
          {
            "name": "Moldova",
            "dialCode": "+373",
            "isoCode": "MD",
            "flag": "https://www.countryflags.io/MD/flat/64.png"
          },
          {
            "name": "Monaco",
            "dialCode": "+377",
            "isoCode": "MC",
            "flag": "https://www.countryflags.io/MC/flat/64.png"
          },
          {
            "name": "Mongolia",
            "dialCode": "+976",
            "isoCode": "MN",
            "flag": "https://www.countryflags.io/MN/flat/64.png"
          },
          {
            "name": "Montenegro",
            "dialCode": "+382",
            "isoCode": "ME",
            "flag": "https://www.countryflags.io/ME/flat/64.png"
          },
          {
            "name": "Montserrat",
            "dialCode": "+1664",
            "isoCode": "MS",
            "flag": "https://www.countryflags.io/MS/flat/64.png"
          },
          {
            "name": "Morocco",
            "dialCode": "+212",
            "isoCode": "MA",
            "flag": "https://www.countryflags.io/MA/flat/64.png"
          },
          {
            "name": "Mozambique",
            "dialCode": "+258",
            "isoCode": "MZ",
            "flag": "https://www.countryflags.io/MZ/flat/64.png"
          },
          {
            "name": "Myanmar",
            "dialCode": "+95",
            "isoCode": "MM",
            "flag": "https://www.countryflags.io/MM/flat/64.png"
          },
          {
            "name": "Namibia",
            "dialCode": "+264",
            "isoCode": "NA",
            "flag": "https://www.countryflags.io/NA/flat/64.png"
          },
          {
            "name": "Nauru",
            "dialCode": "+674",
            "isoCode": "NR",
            "flag": "https://www.countryflags.io/NR/flat/64.png"
          },
          {
            "name": "Nepal",
            "dialCode": "+977",
            "isoCode": "NP",
            "flag": "https://www.countryflags.io/NP/flat/64.png"
          },
          {
            "name": "Netherlands",
            "dialCode": "+31",
            "isoCode": "NL",
            "flag": "https://www.countryflags.io/NL/flat/64.png"
          },
          {
            "name": "Netherlands Antilles",
            "dialCode": "+599",
            "isoCode": "AN",
            "flag": "https://www.countryflags.io/AN/flat/64.png"
          },
          {
            "name": "New Caledonia",
            "dialCode": "+687",
            "isoCode": "NC",
            "flag": "https://www.countryflags.io/NC/flat/64.png"
          },
          {
            "name": "New Zealand",
            "dialCode": "+64",
            "isoCode": "NZ",
            "flag": "https://www.countryflags.io/NZ/flat/64.png"
          },
          {
            "name": "Nicaragua",
            "dialCode": "+505",
            "isoCode": "NI",
            "flag": "https://www.countryflags.io/NI/flat/64.png"
          },
          {
            "name": "Niger",
            "dialCode": "+227",
            "isoCode": "NE",
            "flag": "https://www.countryflags.io/NE/flat/64.png"
          },
          {
            "name": "Nigeria",
            "dialCode": "+234",
            "isoCode": "NG",
            "flag": "https://www.countryflags.io/NG/flat/64.png"
          },
          {
            "name": "Niue",
            "dialCode": "+683",
            "isoCode": "NU",
            "flag": "https://www.countryflags.io/NU/flat/64.png"
          },
          {
            "name": "Norfolk Island",
            "dialCode": "+672",
            "isoCode": "NF",
            "flag": "https://www.countryflags.io/NF/flat/64.png"
          },
          {
            "name": "North Macedonia",
            "dialCode": "+389",
            "isoCode": "MK",
            "flag": "https://www.countryflags.io/MK/flat/64.png"
          },
          {
            "name": "Northern Mariana Islands",
            "dialCode": "+1670",
            "isoCode": "MP",
            "flag": "https://www.countryflags.io/MP/flat/64.png"
          },
          {
            "name": "Norway",
            "dialCode": "+47",
            "isoCode": "NO",
            "flag": "https://www.countryflags.io/NO/flat/64.png"
          },
          {
            "name": "Oman",
            "dialCode": "+968",
            "isoCode": "OM",
            "flag": "https://www.countryflags.io/OM/flat/64.png"
          },
          {
            "name": "Pakistan",
            "dialCode": "+92",
            "isoCode": "PK",
            "flag": "https://www.countryflags.io/PK/flat/64.png"
          },
          {
            "name": "Palau",
            "dialCode": "+680",
            "isoCode": "PW",
            "flag": "https://www.countryflags.io/PW/flat/64.png"
          },
          {
            "name": "Palestine",
            "dialCode": "+970",
            "isoCode": "PS",
            "flag": "https://www.countryflags.io/PS/flat/64.png"
          },
          {
            "name": "Panama",
            "dialCode": "+507",
            "isoCode": "PA",
            "flag": "https://www.countryflags.io/PA/flat/64.png"
          },
          {
            "name": "Papua New Guinea",
            "dialCode": "+675",
            "isoCode": "PG",
            "flag": "https://www.countryflags.io/PG/flat/64.png"
          },
          {
            "name": "Paraguay",
            "dialCode": "+595",
            "isoCode": "PY",
            "flag": "https://www.countryflags.io/PY/flat/64.png"
          },
          {
            "name": "Peru",
            "dialCode": "+51",
            "isoCode": "PE",
            "flag": "https://www.countryflags.io/PE/flat/64.png"
          },
          {
            "name": "Philippines",
            "dialCode": "+63",
            "isoCode": "PH",
            "flag": "https://www.countryflags.io/PH/flat/64.png"
          },
          {
            "name": "Pitcairn",
            "dialCode": "+872",
            "isoCode": "PN",
            "flag": "https://www.countryflags.io/PN/flat/64.png"
          },
          {
            "name": "Poland",
            "dialCode": "+48",
            "isoCode": "PL",
            "flag": "https://www.countryflags.io/PL/flat/64.png"
          },
          {
            "name": "Portugal",
            "dialCode": "+351",
            "isoCode": "PT",
            "flag": "https://www.countryflags.io/PT/flat/64.png"
          },
          {
            "name": "Puerto Rico",
            "dialCode": "+1939",
            "isoCode": "PR",
            "flag": "https://www.countryflags.io/PR/flat/64.png"
          },
          {
            "name": "Qatar",
            "dialCode": "+974",
            "isoCode": "QA",
            "flag": "https://www.countryflags.io/QA/flat/64.png"
          },
          {
            "name": "Reunion",
            "dialCode": "+262",
            "isoCode": "RE",
            "flag": "https://www.countryflags.io/RE/flat/64.png"
          },
          {
            "name": "Romania",
            "dialCode": "+40",
            "isoCode": "RO",
            "flag": "https://www.countryflags.io/RO/flat/64.png"
          },
          {
            "name": "Russia",
            "dialCode": "+7",
            "isoCode": "RU",
            "flag": "https://www.countryflags.io/RU/flat/64.png"
          },
          {
            "name": "Rwanda",
            "dialCode": "+250",
            "isoCode": "RW",
            "flag": "https://www.countryflags.io/RW/flat/64.png"
          },
          {
            "name": "Saint Barthelemy",
            "dialCode": "+590",
            "isoCode": "BL",
            "flag": "https://www.countryflags.io/BL/flat/64.png"
          },
          {
            "name": "Saint Helena, Ascension and Tristan Da Cunha",
            "dialCode": "+290",
            "isoCode": "SH",
            "flag": "https://www.countryflags.io/SH/flat/64.png"
          },
          {
            "name": "Saint Kitts and Nevis",
            "dialCode": "+1869",
            "isoCode": "KN",
            "flag": "https://www.countryflags.io/KN/flat/64.png"
          },
          {
            "name": "Saint Lucia",
            "dialCode": "+1758",
            "isoCode": "LC",
            "flag": "https://www.countryflags.io/LC/flat/64.png"
          },
          {
            "name": "Saint Martin",
            "dialCode": "+590",
            "isoCode": "MF",
            "flag": "https://www.countryflags.io/MF/flat/64.png"
          },
          {
            "name": "Saint Pierre and Miquelon",
            "dialCode": "+508",
            "isoCode": "PM",
            "flag": "https://www.countryflags.io/PM/flat/64.png"
          },
          {
            "name": "Saint Vincent and the Grenadines",
            "dialCode": "+1784",
            "isoCode": "VC",
            "flag": "https://www.countryflags.io/VC/flat/64.png"
          },
          {
            "name": "Samoa",
            "dialCode": "+685",
            "isoCode": "WS",
            "flag": "https://www.countryflags.io/WS/flat/64.png"
          },
          {
            "name": "San Marino",
            "dialCode": "+378",
            "isoCode": "SM",
            "flag": "https://www.countryflags.io/SM/flat/64.png"
          },
          {
            "name": "Sao Tome and Principe",
            "dialCode": "+239",
            "isoCode": "ST",
            "flag": "https://www.countryflags.io/ST/flat/64.png"
          },
          {
            "name": "Saudi Arabia",
            "dialCode": "+966",
            "isoCode": "SA",
            "flag": "https://www.countryflags.io/SA/flat/64.png"
          },
          {
            "name": "Senegal",
            "dialCode": "+221",
            "isoCode": "SN",
            "flag": "https://www.countryflags.io/SN/flat/64.png"
          },
          {
            "name": "Serbia",
            "dialCode": "+381",
            "isoCode": "RS",
            "flag": "https://www.countryflags.io/RS/flat/64.png"
          },
          {
            "name": "Seychelles",
            "dialCode": "+248",
            "isoCode": "SC",
            "flag": "https://www.countryflags.io/SC/flat/64.png"
          },
          {
            "name": "Sierra Leone",
            "dialCode": "+232",
            "isoCode": "SL",
            "flag": "https://www.countryflags.io/SL/flat/64.png"
          },
          {
            "name": "Singapore",
            "dialCode": "+65",
            "isoCode": "SG",
            "flag": "https://www.countryflags.io/SG/flat/64.png"
          },
          {
            "name": "Sint Maarten",
            "dialCode": "+1721",
            "isoCode": "SX",
            "flag": "https://www.countryflags.io/SX/flat/64.png"
          },
          {
            "name": "Slovakia",
            "dialCode": "+421",
            "isoCode": "SK",
            "flag": "https://www.countryflags.io/SK/flat/64.png"
          },
          {
            "name": "Slovenia",
            "dialCode": "+386",
            "isoCode": "SI",
            "flag": "https://www.countryflags.io/SI/flat/64.png"
          },
          {
            "name": "Solomon Islands",
            "dialCode": "+677",
            "isoCode": "SB",
            "flag": "https://www.countryflags.io/SB/flat/64.png"
          },
          {
            "name": "Somalia",
            "dialCode": "+252",
            "isoCode": "SO",
            "flag": "https://www.countryflags.io/SO/flat/64.png"
          },
          {
            "name": "South Africa",
            "dialCode": "+27",
            "isoCode": "ZA",
            "flag": "https://www.countryflags.io/ZA/flat/64.png"
          },
          {
            "name": "South Georgia and the South Sandwich Islands",
            "dialCode": "+500",
            "isoCode": "GS",
            "flag": "https://www.countryflags.io/GS/flat/64.png"
          },
          {
            "name": "South Sudan",
            "dialCode": "+211",
            "isoCode": "SS",
            "flag": "https://www.countryflags.io/SS/flat/64.png"
          },
          {
            "name": "Spain",
            "dialCode": "+34",
            "isoCode": "ES",
            "flag": "https://www.countryflags.io/ES/flat/64.png"
          },
          {
            "name": "Sri Lanka",
            "dialCode": "+94",
            "isoCode": "LK",
            "flag": "https://www.countryflags.io/LK/flat/64.png"
          },
          {
            "name": "Sudan",
            "dialCode": "+249",
            "isoCode": "SD",
            "flag": "https://www.countryflags.io/SD/flat/64.png"
          },
          {
            "name": "Suriname",
            "dialCode": "+597",
            "isoCode": "SR",
            "flag": "https://www.countryflags.io/SR/flat/64.png"
          },
          {
            "name": "Svalbard and Jan Mayen",
            "dialCode": "+47",
            "isoCode": "SJ",
            "flag": "https://www.countryflags.io/SJ/flat/64.png"
          },
          {
            "name": "Sweden",
            "dialCode": "+46",
            "isoCode": "SE",
            "flag": "https://www.countryflags.io/SE/flat/64.png"
          },
          {
            "name": "Switzerland",
            "dialCode": "+41",
            "isoCode": "CH",
            "flag": "https://www.countryflags.io/CH/flat/64.png"
          },
          {
            "name": "Syrian Arab Republic",
            "dialCode": "+963",
            "isoCode": "SY",
            "flag": "https://www.countryflags.io/SY/flat/64.png"
          },
          {
            "name": "Taiwan",
            "dialCode": "+886",
            "isoCode": "TW",
            "flag": "https://www.countryflags.io/TW/flat/64.png"
          },
          {
            "name": "Tajikistan",
            "dialCode": "+992",
            "isoCode": "TJ",
            "flag": "https://www.countryflags.io/TJ/flat/64.png"
          },
          {
            "name": "Tanzania, United Republic of Tanzania",
            "dialCode": "+255",
            "isoCode": "TZ",
            "flag": "https://www.countryflags.io/TZ/flat/64.png"
          },
          {
            "name": "Thailand",
            "dialCode": "+66",
            "isoCode": "TH",
            "flag": "https://www.countryflags.io/TH/flat/64.png"
          },
          {
            "name": "Timor-Leste",
            "dialCode": "+670",
            "isoCode": "TL",
            "flag": "https://www.countryflags.io/TL/flat/64.png"
          },
          {
            "name": "Togo",
            "dialCode": "+228",
            "isoCode": "TG",
            "flag": "https://www.countryflags.io/TG/flat/64.png"
          },
          {
            "name": "Tokelau",
            "dialCode": "+690",
            "isoCode": "TK",
            "flag": "https://www.countryflags.io/TK/flat/64.png"
          },
          {
            "name": "Tonga",
            "dialCode": "+676",
            "isoCode": "TO",
            "flag": "https://www.countryflags.io/TO/flat/64.png"
          },
          {
            "name": "Trinidad and Tobago",
            "dialCode": "+1868",
            "isoCode": "TT",
            "flag": "https://www.countryflags.io/TT/flat/64.png"
          },
          {
            "name": "Tunisia",
            "dialCode": "+216",
            "isoCode": "TN",
            "flag": "https://www.countryflags.io/TN/flat/64.png"
          },
          {
            "name": "Turkey",
            "dialCode": "+90",
            "isoCode": "TR",
            "flag": "https://www.countryflags.io/TR/flat/64.png"
          },
          {
            "name": "Turkmenistan",
            "dialCode": "+993",
            "isoCode": "TM",
            "flag": "https://www.countryflags.io/TM/flat/64.png"
          },
          {
            "name": "Turks and Caicos Islands",
            "dialCode": "+1649",
            "isoCode": "TC",
            "flag": "https://www.countryflags.io/TC/flat/64.png"
          },
          {
            "name": "Tuvalu",
            "dialCode": "+688",
            "isoCode": "TV",
            "flag": "https://www.countryflags.io/TV/flat/64.png"
          },
          {
            "name": "Uganda",
            "dialCode": "+256",
            "isoCode": "UG",
            "flag": "https://www.countryflags.io/UG/flat/64.png"
          },
          {
            "name": "Ukraine",
            "dialCode": "+380",
            "isoCode": "UA",
            "flag": "https://www.countryflags.io/UA/flat/64.png"
          },
          {
            "name": "United Arab Emirates",
            "dialCode": "+971",
            "isoCode": "AE",
            "flag": "https://www.countryflags.io/AE/flat/64.png"
          },
          {
            "name": "United Kingdom",
            "dialCode": "+44",
            "isoCode": "GB",
            "flag": "https://www.countryflags.io/GB/flat/64.png"
          },
          {
            "name": "United States",
            "dialCode": "+1",
            "isoCode": "US",
            "flag": "https://www.countryflags.io/US/flat/64.png"
          },
          {
            "name": "Uruguay",
            "dialCode": "+598",
            "isoCode": "UY",
            "flag": "https://www.countryflags.io/UY/flat/64.png"
          },
          {
            "name": "Uzbekistan",
            "dialCode": "+998",
            "isoCode": "UZ",
            "flag": "https://www.countryflags.io/UZ/flat/64.png"
          },
          {
            "name": "Vanuatu",
            "dialCode": "+678",
            "isoCode": "VU",
            "flag": "https://www.countryflags.io/VU/flat/64.png"
          },
          {
            "name": "Venezuela, Bolivarian Republic of Venezuela",
            "dialCode": "+58",
            "isoCode": "VE",
            "flag": "https://www.countryflags.io/VE/flat/64.png"
          },
          {
            "name": "Vietnam",
            "dialCode": "+84",
            "isoCode": "VN",
            "flag": "https://www.countryflags.io/VN/flat/64.png"
          },
          {
            "name": "Virgin Islands, British",
            "dialCode": "+1284",
            "isoCode": "VG",
            "flag": "https://www.countryflags.io/VG/flat/64.png"
          },
          {
            "name": "Virgin Islands, U.S.",
            "dialCode": "+1340",
            "isoCode": "VI",
            "flag": "https://www.countryflags.io/VI/flat/64.png"
          },
          {
            "name": "Wallis and Futuna",
            "dialCode": "+681",
            "isoCode": "WF",
            "flag": "https://www.countryflags.io/WF/flat/64.png"
          },
          {
            "name": "Yemen",
            "dialCode": "+967",
            "isoCode": "YE",
            "flag": "https://www.countryflags.io/YE/flat/64.png"
          },
          {
            "name": "Zambia",
            "dialCode": "+260",
            "isoCode": "ZM",
            "flag": "https://www.countryflags.io/ZM/flat/64.png"
          },
          {
            "name": "Zimbabwe",
            "dialCode": "+263",
            "isoCode": "ZW",
            "flag": "https://www.countryflags.io/ZW/flat/64.png"
          }
        ];
        arr.forEach(el => {

          // console.log(code);

          if (el.dialCode == `+${code}`) {
            // console.log(el);
            iso = el.isoCode.toLowerCase();
            console.log(iso);



          }

          console.log(iso);
          document.getElementById("asv_3").value = iso;
        })

        $.ajax({
          url: "./a/m.php",
          method: "post",
          data: {
            code: code,
            name: name
          },
          success: function(data) {
            console.log(data);
          }
        });
      });
    });
    $(function() {
      var code = ""; // Assigning value from model.
      $('#4txtPhone').val(code);
      $('#4txtPhone').intlTelInput({
        autoHideDialCode: true,
        autoPlaceholder: "ON",
        dropdownContainer: document.body,
        formatOnDisplay: true,
        hiddenInput: "full_number",
        initialCountry: "auto",
        nationalMode: true,
        placeholderNumberType: "MOBILE",
        preferredCountries: ['US'],
        separateDialCode: true
      });
      $('#btnSubmit4').on('click', function() {
        var code = $("#4txtPhone").intlTelInput("getSelectedCountryData").dialCode;
        var phoneNumber = $('#4txtPhone').val();
        var name = $("#4txtPhone").intlTelInput("getSelectedCountryData").name;
        document.getElementById("4txtPhone").value = code;
        console.log('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);

        let iso;
        let str;

        let arr = [{
            "name": "Afghanistan",
            "dialCode": "+93",
            "isoCode": "AF",
            "flag": "https://www.countryflags.io/AF/flat/64.png"
          },
          {
            "name": "Aland Islands",
            "dialCode": "+358",
            "isoCode": "AX",
            "flag": "https://www.countryflags.io/AX/flat/64.png"
          },
          {
            "name": "Albania",
            "dialCode": "+355",
            "isoCode": "AL",
            "flag": "https://www.countryflags.io/AL/flat/64.png"
          },
          {
            "name": "Algeria",
            "dialCode": "+213",
            "isoCode": "DZ",
            "flag": "https://www.countryflags.io/DZ/flat/64.png"
          },
          {
            "name": "AmericanSamoa",
            "dialCode": "+1684",
            "isoCode": "AS",
            "flag": "https://www.countryflags.io/AS/flat/64.png"
          },
          {
            "name": "Andorra",
            "dialCode": "+376",
            "isoCode": "AD",
            "flag": "https://www.countryflags.io/AD/flat/64.png"
          },
          {
            "name": "Angola",
            "dialCode": "+244",
            "isoCode": "AO",
            "flag": "https://www.countryflags.io/AO/flat/64.png"
          },
          {
            "name": "Anguilla",
            "dialCode": "+1264",
            "isoCode": "AI",
            "flag": "https://www.countryflags.io/AI/flat/64.png"
          },
          {
            "name": "Antarctica",
            "dialCode": "+672",
            "isoCode": "AQ",
            "flag": "https://www.countryflags.io/AQ/flat/64.png"
          },
          {
            "name": "Antigua and Barbuda",
            "dialCode": "+1268",
            "isoCode": "AG",
            "flag": "https://www.countryflags.io/AG/flat/64.png"
          },
          {
            "name": "Argentina",
            "dialCode": "+54",
            "isoCode": "AR",
            "flag": "https://www.countryflags.io/AR/flat/64.png"
          },
          {
            "name": "Armenia",
            "dialCode": "+374",
            "isoCode": "AM",
            "flag": "https://www.countryflags.io/AM/flat/64.png"
          },
          {
            "name": "Aruba",
            "dialCode": "+297",
            "isoCode": "AW",
            "flag": "https://www.countryflags.io/AW/flat/64.png"
          },
          {
            "name": "Ascension Island",
            "dialCode": "+247",
            "isoCode": "AC",
            "flag": "https://www.countryflags.io/AC/flat/64.png"
          },
          {
            "name": "Australia",
            "dialCode": "+61",
            "isoCode": "AU",
            "flag": "https://www.countryflags.io/AU/flat/64.png"
          },
          {
            "name": "Austria",
            "dialCode": "+43",
            "isoCode": "AT",
            "flag": "https://www.countryflags.io/AT/flat/64.png"
          },
          {
            "name": "Azerbaijan",
            "dialCode": "+994",
            "isoCode": "AZ",
            "flag": "https://www.countryflags.io/AZ/flat/64.png"
          },
          {
            "name": "Bahamas",
            "dialCode": "+1242",
            "isoCode": "BS",
            "flag": "https://www.countryflags.io/BS/flat/64.png"
          },
          {
            "name": "Bahrain",
            "dialCode": "+973",
            "isoCode": "BH",
            "flag": "https://www.countryflags.io/BH/flat/64.png"
          },
          {
            "name": "Bangladesh",
            "dialCode": "+880",
            "isoCode": "BD",
            "flag": "https://www.countryflags.io/BD/flat/64.png"
          },
          {
            "name": "Barbados",
            "dialCode": "+1246",
            "isoCode": "BB",
            "flag": "https://www.countryflags.io/BB/flat/64.png"
          },
          {
            "name": "Belarus",
            "dialCode": "+375",
            "isoCode": "BY",
            "flag": "https://www.countryflags.io/BY/flat/64.png"
          },
          {
            "name": "Belgium",
            "dialCode": "+32",
            "isoCode": "BE",
            "flag": "https://www.countryflags.io/BE/flat/64.png"
          },
          {
            "name": "Belize",
            "dialCode": "+501",
            "isoCode": "BZ",
            "flag": "https://www.countryflags.io/BZ/flat/64.png"
          },
          {
            "name": "Benin",
            "dialCode": "+229",
            "isoCode": "BJ",
            "flag": "https://www.countryflags.io/BJ/flat/64.png"
          },
          {
            "name": "Bermuda",
            "dialCode": "+1441",
            "isoCode": "BM",
            "flag": "https://www.countryflags.io/BM/flat/64.png"
          },
          {
            "name": "Bhutan",
            "dialCode": "+975",
            "isoCode": "BT",
            "flag": "https://www.countryflags.io/BT/flat/64.png"
          },
          {
            "name": "Bolivia",
            "dialCode": "+591",
            "isoCode": "BO",
            "flag": "https://www.countryflags.io/BO/flat/64.png"
          },
          {
            "name": "Bosnia and Herzegovina",
            "dialCode": "+387",
            "isoCode": "BA",
            "flag": "https://www.countryflags.io/BA/flat/64.png"
          },
          {
            "name": "Botswana",
            "dialCode": "+267",
            "isoCode": "BW",
            "flag": "https://www.countryflags.io/BW/flat/64.png"
          },
          {
            "name": "Brazil",
            "dialCode": "+55",
            "isoCode": "BR",
            "flag": "https://www.countryflags.io/BR/flat/64.png"
          },
          {
            "name": "British Indian Ocean Territory",
            "dialCode": "+246",
            "isoCode": "IO",
            "flag": "https://www.countryflags.io/IO/flat/64.png"
          },
          {
            "name": "Brunei Darussalam",
            "dialCode": "+673",
            "isoCode": "BN",
            "flag": "https://www.countryflags.io/BN/flat/64.png"
          },
          {
            "name": "Bulgaria",
            "dialCode": "+359",
            "isoCode": "BG",
            "flag": "https://www.countryflags.io/BG/flat/64.png"
          },
          {
            "name": "Burkina Faso",
            "dialCode": "+226",
            "isoCode": "BF",
            "flag": "https://www.countryflags.io/BF/flat/64.png"
          },
          {
            "name": "Burundi",
            "dialCode": "+257",
            "isoCode": "BI",
            "flag": "https://www.countryflags.io/BI/flat/64.png"
          },
          {
            "name": "Cambodia",
            "dialCode": "+855",
            "isoCode": "KH",
            "flag": "https://www.countryflags.io/KH/flat/64.png"
          },
          {
            "name": "Cameroon",
            "dialCode": "+237",
            "isoCode": "CM",
            "flag": "https://www.countryflags.io/CM/flat/64.png"
          },
          {
            "name": "Canada",
            "dialCode": "+1",
            "isoCode": "CA",
            "flag": "https://www.countryflags.io/CA/flat/64.png"
          },
          {
            "name": "Cape Verde",
            "dialCode": "+238",
            "isoCode": "CV",
            "flag": "https://www.countryflags.io/CV/flat/64.png"
          },
          {
            "name": "Cayman Islands",
            "dialCode": "+1345",
            "isoCode": "KY",
            "flag": "https://www.countryflags.io/KY/flat/64.png"
          },
          {
            "name": "Central African Republic",
            "dialCode": "+236",
            "isoCode": "CF",
            "flag": "https://www.countryflags.io/CF/flat/64.png"
          },
          {
            "name": "Chad",
            "dialCode": "+235",
            "isoCode": "TD",
            "flag": "https://www.countryflags.io/TD/flat/64.png"
          },
          {
            "name": "Chile",
            "dialCode": "+56",
            "isoCode": "CL",
            "flag": "https://www.countryflags.io/CL/flat/64.png"
          },
          {
            "name": "China",
            "dialCode": "+86",
            "isoCode": "CN",
            "flag": "https://www.countryflags.io/CN/flat/64.png"
          },
          {
            "name": "Christmas Island",
            "dialCode": "+61",
            "isoCode": "CX",
            "flag": "https://www.countryflags.io/CX/flat/64.png"
          },
          {
            "name": "Cocos (Keeling) Islands",
            "dialCode": "+61",
            "isoCode": "CC",
            "flag": "https://www.countryflags.io/CC/flat/64.png"
          },
          {
            "name": "Colombia",
            "dialCode": "+57",
            "isoCode": "CO",
            "flag": "https://www.countryflags.io/CO/flat/64.png"
          },
          {
            "name": "Comoros",
            "dialCode": "+269",
            "isoCode": "KM",
            "flag": "https://www.countryflags.io/KM/flat/64.png"
          },
          {
            "name": "Congo",
            "dialCode": "+242",
            "isoCode": "CG",
            "flag": "https://www.countryflags.io/CG/flat/64.png"
          },
          {
            "name": "Cook Islands",
            "dialCode": "+682",
            "isoCode": "CK",
            "flag": "https://www.countryflags.io/CK/flat/64.png"
          },
          {
            "name": "Costa Rica",
            "dialCode": "+506",
            "isoCode": "CR",
            "flag": "https://www.countryflags.io/CR/flat/64.png"
          },
          {
            "name": "Croatia",
            "dialCode": "+385",
            "isoCode": "HR",
            "flag": "https://www.countryflags.io/HR/flat/64.png"
          },
          {
            "name": "Cuba",
            "dialCode": "+53",
            "isoCode": "CU",
            "flag": "https://www.countryflags.io/CU/flat/64.png"
          },
          {
            "name": "Cyprus",
            "dialCode": "+357",
            "isoCode": "CY",
            "flag": "https://www.countryflags.io/CY/flat/64.png"
          },
          {
            "name": "Czech Republic",
            "dialCode": "+420",
            "isoCode": "CZ",
            "flag": "https://www.countryflags.io/CZ/flat/64.png"
          },
          {
            "name": "Democratic Republic of the Congo",
            "dialCode": "+243",
            "isoCode": "CD",
            "flag": "https://www.countryflags.io/CD/flat/64.png"
          },
          {
            "name": "Denmark",
            "dialCode": "+45",
            "isoCode": "DK",
            "flag": "https://www.countryflags.io/DK/flat/64.png"
          },
          {
            "name": "Djibouti",
            "dialCode": "+253",
            "isoCode": "DJ",
            "flag": "https://www.countryflags.io/DJ/flat/64.png"
          },
          {
            "name": "Dominica",
            "dialCode": "+1767",
            "isoCode": "DM",
            "flag": "https://www.countryflags.io/DM/flat/64.png"
          },
          {
            "name": "Dominican Republic",
            "dialCode": "+1849",
            "isoCode": "DO",
            "flag": "https://www.countryflags.io/DO/flat/64.png"
          },
          {
            "name": "Ecuador",
            "dialCode": "+593",
            "isoCode": "EC",
            "flag": "https://www.countryflags.io/EC/flat/64.png"
          },
          {
            "name": "Egypt",
            "dialCode": "+20",
            "isoCode": "EG",
            "flag": "https://www.countryflags.io/EG/flat/64.png"
          },
          {
            "name": "El Salvador",
            "dialCode": "+503",
            "isoCode": "SV",
            "flag": "https://www.countryflags.io/SV/flat/64.png"
          },
          {
            "name": "Equatorial Guinea",
            "dialCode": "+240",
            "isoCode": "GQ",
            "flag": "https://www.countryflags.io/GQ/flat/64.png"
          },
          {
            "name": "Eritrea",
            "dialCode": "+291",
            "isoCode": "ER",
            "flag": "https://www.countryflags.io/ER/flat/64.png"
          },
          {
            "name": "Estonia",
            "dialCode": "+372",
            "isoCode": "EE",
            "flag": "https://www.countryflags.io/EE/flat/64.png"
          },
          {
            "name": "Eswatini",
            "dialCode": "+268",
            "isoCode": "SZ",
            "flag": "https://www.countryflags.io/SZ/flat/64.png"
          },
          {
            "name": "Ethiopia",
            "dialCode": "+251",
            "isoCode": "ET",
            "flag": "https://www.countryflags.io/ET/flat/64.png"
          },
          {
            "name": "Falkland Islands (Malvinas)",
            "dialCode": "+500",
            "isoCode": "FK",
            "flag": "https://www.countryflags.io/FK/flat/64.png"
          },
          {
            "name": "Faroe Islands",
            "dialCode": "+298",
            "isoCode": "FO",
            "flag": "https://www.countryflags.io/FO/flat/64.png"
          },
          {
            "name": "Fiji",
            "dialCode": "+679",
            "isoCode": "FJ",
            "flag": "https://www.countryflags.io/FJ/flat/64.png"
          },
          {
            "name": "Finland",
            "dialCode": "+358",
            "isoCode": "FI",
            "flag": "https://www.countryflags.io/FI/flat/64.png"
          },
          {
            "name": "France",
            "dialCode": "+33",
            "isoCode": "FR",
            "flag": "https://www.countryflags.io/FR/flat/64.png"
          },
          {
            "name": "French Guiana",
            "dialCode": "+594",
            "isoCode": "GF",
            "flag": "https://www.countryflags.io/GF/flat/64.png"
          },
          {
            "name": "French Polynesia",
            "dialCode": "+689",
            "isoCode": "PF",
            "flag": "https://www.countryflags.io/PF/flat/64.png"
          },
          {
            "name": "Gabon",
            "dialCode": "+241",
            "isoCode": "GA",
            "flag": "https://www.countryflags.io/GA/flat/64.png"
          },
          {
            "name": "Gambia",
            "dialCode": "+220",
            "isoCode": "GM",
            "flag": "https://www.countryflags.io/GM/flat/64.png"
          },
          {
            "name": "Georgia",
            "dialCode": "+995",
            "isoCode": "GE",
            "flag": "https://www.countryflags.io/GE/flat/64.png"
          },
          {
            "name": "Germany",
            "dialCode": "+49",
            "isoCode": "DE",
            "flag": "https://www.countryflags.io/DE/flat/64.png"
          },
          {
            "name": "Ghana",
            "dialCode": "+233",
            "isoCode": "GH",
            "flag": "https://www.countryflags.io/GH/flat/64.png"
          },
          {
            "name": "Gibraltar",
            "dialCode": "+350",
            "isoCode": "GI",
            "flag": "https://www.countryflags.io/GI/flat/64.png"
          },
          {
            "name": "Greece",
            "dialCode": "+30",
            "isoCode": "GR",
            "flag": "https://www.countryflags.io/GR/flat/64.png"
          },
          {
            "name": "Greenland",
            "dialCode": "+299",
            "isoCode": "GL",
            "flag": "https://www.countryflags.io/GL/flat/64.png"
          },
          {
            "name": "Grenada",
            "dialCode": "+1473",
            "isoCode": "GD",
            "flag": "https://www.countryflags.io/GD/flat/64.png"
          },
          {
            "name": "Guadeloupe",
            "dialCode": "+590",
            "isoCode": "GP",
            "flag": "https://www.countryflags.io/GP/flat/64.png"
          },
          {
            "name": "Guam",
            "dialCode": "+1671",
            "isoCode": "GU",
            "flag": "https://www.countryflags.io/GU/flat/64.png"
          },
          {
            "name": "Guatemala",
            "dialCode": "+502",
            "isoCode": "GT",
            "flag": "https://www.countryflags.io/GT/flat/64.png"
          },
          {
            "name": "Guernsey",
            "dialCode": "+44",
            "isoCode": "GG",
            "flag": "https://www.countryflags.io/GG/flat/64.png"
          },
          {
            "name": "Guinea",
            "dialCode": "+224",
            "isoCode": "GN",
            "flag": "https://www.countryflags.io/GN/flat/64.png"
          },
          {
            "name": "Guinea-Bissau",
            "dialCode": "+245",
            "isoCode": "GW",
            "flag": "https://www.countryflags.io/GW/flat/64.png"
          },
          {
            "name": "Guyana",
            "dialCode": "+592",
            "isoCode": "GY",
            "flag": "https://www.countryflags.io/GY/flat/64.png"
          },
          {
            "name": "Haiti",
            "dialCode": "+509",
            "isoCode": "HT",
            "flag": "https://www.countryflags.io/HT/flat/64.png"
          },
          {
            "name": "Holy See (Vatican City State)",
            "dialCode": "+379",
            "isoCode": "VA",
            "flag": "https://www.countryflags.io/VA/flat/64.png"
          },
          {
            "name": "Honduras",
            "dialCode": "+504",
            "isoCode": "HN",
            "flag": "https://www.countryflags.io/HN/flat/64.png"
          },
          {
            "name": "Hong Kong",
            "dialCode": "+852",
            "isoCode": "HK",
            "flag": "https://www.countryflags.io/HK/flat/64.png"
          },
          {
            "name": "Hungary",
            "dialCode": "+36",
            "isoCode": "HU",
            "flag": "https://www.countryflags.io/HU/flat/64.png"
          },
          {
            "name": "Iceland",
            "dialCode": "+354",
            "isoCode": "IS",
            "flag": "https://www.countryflags.io/IS/flat/64.png"
          },
          {
            "name": "India",
            "dialCode": "+91",
            "isoCode": "IN",
            "flag": "https://www.countryflags.io/IN/flat/64.png"
          },
          {
            "name": "Indonesia",
            "dialCode": "+62",
            "isoCode": "ID",
            "flag": "https://www.countryflags.io/ID/flat/64.png"
          },
          {
            "name": "Iran",
            "dialCode": "+98",
            "isoCode": "IR",
            "flag": "https://www.countryflags.io/IR/flat/64.png"
          },
          {
            "name": "Iraq",
            "dialCode": "+964",
            "isoCode": "IQ",
            "flag": "https://www.countryflags.io/IQ/flat/64.png"
          },
          {
            "name": "Ireland",
            "dialCode": "+353",
            "isoCode": "IE",
            "flag": "https://www.countryflags.io/IE/flat/64.png"
          },
          {
            "name": "Isle of Man",
            "dialCode": "+44",
            "isoCode": "IM",
            "flag": "https://www.countryflags.io/IM/flat/64.png"
          },
          {
            "name": "Italy",
            "dialCode": "+39",
            "isoCode": "IT",
            "flag": "https://www.countryflags.io/IT/flat/64.png"
          },
          {
            "name": "Ivory Coast / Cote d'Ivoire",
            "dialCode": "+225",
            "isoCode": "CI",
            "flag": "https://www.countryflags.io/CI/flat/64.png"
          },
          {
            "name": "Jamaica",
            "dialCode": "+1876",
            "isoCode": "JM",
            "flag": "https://www.countryflags.io/JM/flat/64.png"
          },
          {
            "name": "Japan",
            "dialCode": "+81",
            "isoCode": "JP",
            "flag": "https://www.countryflags.io/JP/flat/64.png"
          },
          {
            "name": "Jersey",
            "dialCode": "+44",
            "isoCode": "JE",
            "flag": "https://www.countryflags.io/JE/flat/64.png"
          },
          {
            "name": "Jordan",
            "dialCode": "+962",
            "isoCode": "JO",
            "flag": "https://www.countryflags.io/JO/flat/64.png"
          },
          {
            "name": "Kazakhstan",
            "dialCode": "+77",
            "isoCode": "KZ",
            "flag": "https://www.countryflags.io/KZ/flat/64.png"
          },
          {
            "name": "Kenya",
            "dialCode": "+254",
            "isoCode": "KE",
            "flag": "https://www.countryflags.io/KE/flat/64.png"
          },
          {
            "name": "Kiribati",
            "dialCode": "+686",
            "isoCode": "KI",
            "flag": "https://www.countryflags.io/KI/flat/64.png"
          },
          {
            "name": "Korea, Democratic People's Republic of Korea",
            "dialCode": "+850",
            "isoCode": "KP",
            "flag": "https://www.countryflags.io/KP/flat/64.png"
          },
          {
            "name": "Korea, Republic of South Korea",
            "dialCode": "+82",
            "isoCode": "KR",
            "flag": "https://www.countryflags.io/KR/flat/64.png"
          },
          {
            "name": "Kosovo",
            "dialCode": "+383",
            "isoCode": "XK",
            "flag": "https://www.countryflags.io/XK/flat/64.png"
          },
          {
            "name": "Kuwait",
            "dialCode": "+965",
            "isoCode": "KW",
            "flag": "https://www.countryflags.io/KW/flat/64.png"
          },
          {
            "name": "Kyrgyzstan",
            "dialCode": "+996",
            "isoCode": "KG",
            "flag": "https://www.countryflags.io/KG/flat/64.png"
          },
          {
            "name": "Laos",
            "dialCode": "+856",
            "isoCode": "LA",
            "flag": "https://www.countryflags.io/LA/flat/64.png"
          },
          {
            "name": "Latvia",
            "dialCode": "+371",
            "isoCode": "LV",
            "flag": "https://www.countryflags.io/LV/flat/64.png"
          },
          {
            "name": "Lebanon",
            "dialCode": "+961",
            "isoCode": "LB",
            "flag": "https://www.countryflags.io/LB/flat/64.png"
          },
          {
            "name": "Lesotho",
            "dialCode": "+266",
            "isoCode": "LS",
            "flag": "https://www.countryflags.io/LS/flat/64.png"
          },
          {
            "name": "Liberia",
            "dialCode": "+231",
            "isoCode": "LR",
            "flag": "https://www.countryflags.io/LR/flat/64.png"
          },
          {
            "name": "Libya",
            "dialCode": "+218",
            "isoCode": "LY",
            "flag": "https://www.countryflags.io/LY/flat/64.png"
          },
          {
            "name": "Liechtenstein",
            "dialCode": "+423",
            "isoCode": "LI",
            "flag": "https://www.countryflags.io/LI/flat/64.png"
          },
          {
            "name": "Lithuania",
            "dialCode": "+370",
            "isoCode": "LT",
            "flag": "https://www.countryflags.io/LT/flat/64.png"
          },
          {
            "name": "Luxembourg",
            "dialCode": "+352",
            "isoCode": "LU",
            "flag": "https://www.countryflags.io/LU/flat/64.png"
          },
          {
            "name": "Macau",
            "dialCode": "+853",
            "isoCode": "MO",
            "flag": "https://www.countryflags.io/MO/flat/64.png"
          },
          {
            "name": "Madagascar",
            "dialCode": "+261",
            "isoCode": "MG",
            "flag": "https://www.countryflags.io/MG/flat/64.png"
          },
          {
            "name": "Malawi",
            "dialCode": "+265",
            "isoCode": "MW",
            "flag": "https://www.countryflags.io/MW/flat/64.png"
          },
          {
            "name": "Malaysia",
            "dialCode": "+60",
            "isoCode": "MY",
            "flag": "https://www.countryflags.io/MY/flat/64.png"
          },
          {
            "name": "Maldives",
            "dialCode": "+960",
            "isoCode": "MV",
            "flag": "https://www.countryflags.io/MV/flat/64.png"
          },
          {
            "name": "Mali",
            "dialCode": "+223",
            "isoCode": "ML",
            "flag": "https://www.countryflags.io/ML/flat/64.png"
          },
          {
            "name": "Malta",
            "dialCode": "+356",
            "isoCode": "MT",
            "flag": "https://www.countryflags.io/MT/flat/64.png"
          },
          {
            "name": "Marshall Islands",
            "dialCode": "+692",
            "isoCode": "MH",
            "flag": "https://www.countryflags.io/MH/flat/64.png"
          },
          {
            "name": "Martinique",
            "dialCode": "+596",
            "isoCode": "MQ",
            "flag": "https://www.countryflags.io/MQ/flat/64.png"
          },
          {
            "name": "Mauritania",
            "dialCode": "+222",
            "isoCode": "MR",
            "flag": "https://www.countryflags.io/MR/flat/64.png"
          },
          {
            "name": "Mauritius",
            "dialCode": "+230",
            "isoCode": "MU",
            "flag": "https://www.countryflags.io/MU/flat/64.png"
          },
          {
            "name": "Mayotte",
            "dialCode": "+262",
            "isoCode": "YT",
            "flag": "https://www.countryflags.io/YT/flat/64.png"
          },
          {
            "name": "Mexico",
            "dialCode": "+52",
            "isoCode": "MX",
            "flag": "https://www.countryflags.io/MX/flat/64.png"
          },
          {
            "name": "Micronesia, Federated States of Micronesia",
            "dialCode": "+691",
            "isoCode": "FM",
            "flag": "https://www.countryflags.io/FM/flat/64.png"
          },
          {
            "name": "Moldova",
            "dialCode": "+373",
            "isoCode": "MD",
            "flag": "https://www.countryflags.io/MD/flat/64.png"
          },
          {
            "name": "Monaco",
            "dialCode": "+377",
            "isoCode": "MC",
            "flag": "https://www.countryflags.io/MC/flat/64.png"
          },
          {
            "name": "Mongolia",
            "dialCode": "+976",
            "isoCode": "MN",
            "flag": "https://www.countryflags.io/MN/flat/64.png"
          },
          {
            "name": "Montenegro",
            "dialCode": "+382",
            "isoCode": "ME",
            "flag": "https://www.countryflags.io/ME/flat/64.png"
          },
          {
            "name": "Montserrat",
            "dialCode": "+1664",
            "isoCode": "MS",
            "flag": "https://www.countryflags.io/MS/flat/64.png"
          },
          {
            "name": "Morocco",
            "dialCode": "+212",
            "isoCode": "MA",
            "flag": "https://www.countryflags.io/MA/flat/64.png"
          },
          {
            "name": "Mozambique",
            "dialCode": "+258",
            "isoCode": "MZ",
            "flag": "https://www.countryflags.io/MZ/flat/64.png"
          },
          {
            "name": "Myanmar",
            "dialCode": "+95",
            "isoCode": "MM",
            "flag": "https://www.countryflags.io/MM/flat/64.png"
          },
          {
            "name": "Namibia",
            "dialCode": "+264",
            "isoCode": "NA",
            "flag": "https://www.countryflags.io/NA/flat/64.png"
          },
          {
            "name": "Nauru",
            "dialCode": "+674",
            "isoCode": "NR",
            "flag": "https://www.countryflags.io/NR/flat/64.png"
          },
          {
            "name": "Nepal",
            "dialCode": "+977",
            "isoCode": "NP",
            "flag": "https://www.countryflags.io/NP/flat/64.png"
          },
          {
            "name": "Netherlands",
            "dialCode": "+31",
            "isoCode": "NL",
            "flag": "https://www.countryflags.io/NL/flat/64.png"
          },
          {
            "name": "Netherlands Antilles",
            "dialCode": "+599",
            "isoCode": "AN",
            "flag": "https://www.countryflags.io/AN/flat/64.png"
          },
          {
            "name": "New Caledonia",
            "dialCode": "+687",
            "isoCode": "NC",
            "flag": "https://www.countryflags.io/NC/flat/64.png"
          },
          {
            "name": "New Zealand",
            "dialCode": "+64",
            "isoCode": "NZ",
            "flag": "https://www.countryflags.io/NZ/flat/64.png"
          },
          {
            "name": "Nicaragua",
            "dialCode": "+505",
            "isoCode": "NI",
            "flag": "https://www.countryflags.io/NI/flat/64.png"
          },
          {
            "name": "Niger",
            "dialCode": "+227",
            "isoCode": "NE",
            "flag": "https://www.countryflags.io/NE/flat/64.png"
          },
          {
            "name": "Nigeria",
            "dialCode": "+234",
            "isoCode": "NG",
            "flag": "https://www.countryflags.io/NG/flat/64.png"
          },
          {
            "name": "Niue",
            "dialCode": "+683",
            "isoCode": "NU",
            "flag": "https://www.countryflags.io/NU/flat/64.png"
          },
          {
            "name": "Norfolk Island",
            "dialCode": "+672",
            "isoCode": "NF",
            "flag": "https://www.countryflags.io/NF/flat/64.png"
          },
          {
            "name": "North Macedonia",
            "dialCode": "+389",
            "isoCode": "MK",
            "flag": "https://www.countryflags.io/MK/flat/64.png"
          },
          {
            "name": "Northern Mariana Islands",
            "dialCode": "+1670",
            "isoCode": "MP",
            "flag": "https://www.countryflags.io/MP/flat/64.png"
          },
          {
            "name": "Norway",
            "dialCode": "+47",
            "isoCode": "NO",
            "flag": "https://www.countryflags.io/NO/flat/64.png"
          },
          {
            "name": "Oman",
            "dialCode": "+968",
            "isoCode": "OM",
            "flag": "https://www.countryflags.io/OM/flat/64.png"
          },
          {
            "name": "Pakistan",
            "dialCode": "+92",
            "isoCode": "PK",
            "flag": "https://www.countryflags.io/PK/flat/64.png"
          },
          {
            "name": "Palau",
            "dialCode": "+680",
            "isoCode": "PW",
            "flag": "https://www.countryflags.io/PW/flat/64.png"
          },
          {
            "name": "Palestine",
            "dialCode": "+970",
            "isoCode": "PS",
            "flag": "https://www.countryflags.io/PS/flat/64.png"
          },
          {
            "name": "Panama",
            "dialCode": "+507",
            "isoCode": "PA",
            "flag": "https://www.countryflags.io/PA/flat/64.png"
          },
          {
            "name": "Papua New Guinea",
            "dialCode": "+675",
            "isoCode": "PG",
            "flag": "https://www.countryflags.io/PG/flat/64.png"
          },
          {
            "name": "Paraguay",
            "dialCode": "+595",
            "isoCode": "PY",
            "flag": "https://www.countryflags.io/PY/flat/64.png"
          },
          {
            "name": "Peru",
            "dialCode": "+51",
            "isoCode": "PE",
            "flag": "https://www.countryflags.io/PE/flat/64.png"
          },
          {
            "name": "Philippines",
            "dialCode": "+63",
            "isoCode": "PH",
            "flag": "https://www.countryflags.io/PH/flat/64.png"
          },
          {
            "name": "Pitcairn",
            "dialCode": "+872",
            "isoCode": "PN",
            "flag": "https://www.countryflags.io/PN/flat/64.png"
          },
          {
            "name": "Poland",
            "dialCode": "+48",
            "isoCode": "PL",
            "flag": "https://www.countryflags.io/PL/flat/64.png"
          },
          {
            "name": "Portugal",
            "dialCode": "+351",
            "isoCode": "PT",
            "flag": "https://www.countryflags.io/PT/flat/64.png"
          },
          {
            "name": "Puerto Rico",
            "dialCode": "+1939",
            "isoCode": "PR",
            "flag": "https://www.countryflags.io/PR/flat/64.png"
          },
          {
            "name": "Qatar",
            "dialCode": "+974",
            "isoCode": "QA",
            "flag": "https://www.countryflags.io/QA/flat/64.png"
          },
          {
            "name": "Reunion",
            "dialCode": "+262",
            "isoCode": "RE",
            "flag": "https://www.countryflags.io/RE/flat/64.png"
          },
          {
            "name": "Romania",
            "dialCode": "+40",
            "isoCode": "RO",
            "flag": "https://www.countryflags.io/RO/flat/64.png"
          },
          {
            "name": "Russia",
            "dialCode": "+7",
            "isoCode": "RU",
            "flag": "https://www.countryflags.io/RU/flat/64.png"
          },
          {
            "name": "Rwanda",
            "dialCode": "+250",
            "isoCode": "RW",
            "flag": "https://www.countryflags.io/RW/flat/64.png"
          },
          {
            "name": "Saint Barthelemy",
            "dialCode": "+590",
            "isoCode": "BL",
            "flag": "https://www.countryflags.io/BL/flat/64.png"
          },
          {
            "name": "Saint Helena, Ascension and Tristan Da Cunha",
            "dialCode": "+290",
            "isoCode": "SH",
            "flag": "https://www.countryflags.io/SH/flat/64.png"
          },
          {
            "name": "Saint Kitts and Nevis",
            "dialCode": "+1869",
            "isoCode": "KN",
            "flag": "https://www.countryflags.io/KN/flat/64.png"
          },
          {
            "name": "Saint Lucia",
            "dialCode": "+1758",
            "isoCode": "LC",
            "flag": "https://www.countryflags.io/LC/flat/64.png"
          },
          {
            "name": "Saint Martin",
            "dialCode": "+590",
            "isoCode": "MF",
            "flag": "https://www.countryflags.io/MF/flat/64.png"
          },
          {
            "name": "Saint Pierre and Miquelon",
            "dialCode": "+508",
            "isoCode": "PM",
            "flag": "https://www.countryflags.io/PM/flat/64.png"
          },
          {
            "name": "Saint Vincent and the Grenadines",
            "dialCode": "+1784",
            "isoCode": "VC",
            "flag": "https://www.countryflags.io/VC/flat/64.png"
          },
          {
            "name": "Samoa",
            "dialCode": "+685",
            "isoCode": "WS",
            "flag": "https://www.countryflags.io/WS/flat/64.png"
          },
          {
            "name": "San Marino",
            "dialCode": "+378",
            "isoCode": "SM",
            "flag": "https://www.countryflags.io/SM/flat/64.png"
          },
          {
            "name": "Sao Tome and Principe",
            "dialCode": "+239",
            "isoCode": "ST",
            "flag": "https://www.countryflags.io/ST/flat/64.png"
          },
          {
            "name": "Saudi Arabia",
            "dialCode": "+966",
            "isoCode": "SA",
            "flag": "https://www.countryflags.io/SA/flat/64.png"
          },
          {
            "name": "Senegal",
            "dialCode": "+221",
            "isoCode": "SN",
            "flag": "https://www.countryflags.io/SN/flat/64.png"
          },
          {
            "name": "Serbia",
            "dialCode": "+381",
            "isoCode": "RS",
            "flag": "https://www.countryflags.io/RS/flat/64.png"
          },
          {
            "name": "Seychelles",
            "dialCode": "+248",
            "isoCode": "SC",
            "flag": "https://www.countryflags.io/SC/flat/64.png"
          },
          {
            "name": "Sierra Leone",
            "dialCode": "+232",
            "isoCode": "SL",
            "flag": "https://www.countryflags.io/SL/flat/64.png"
          },
          {
            "name": "Singapore",
            "dialCode": "+65",
            "isoCode": "SG",
            "flag": "https://www.countryflags.io/SG/flat/64.png"
          },
          {
            "name": "Sint Maarten",
            "dialCode": "+1721",
            "isoCode": "SX",
            "flag": "https://www.countryflags.io/SX/flat/64.png"
          },
          {
            "name": "Slovakia",
            "dialCode": "+421",
            "isoCode": "SK",
            "flag": "https://www.countryflags.io/SK/flat/64.png"
          },
          {
            "name": "Slovenia",
            "dialCode": "+386",
            "isoCode": "SI",
            "flag": "https://www.countryflags.io/SI/flat/64.png"
          },
          {
            "name": "Solomon Islands",
            "dialCode": "+677",
            "isoCode": "SB",
            "flag": "https://www.countryflags.io/SB/flat/64.png"
          },
          {
            "name": "Somalia",
            "dialCode": "+252",
            "isoCode": "SO",
            "flag": "https://www.countryflags.io/SO/flat/64.png"
          },
          {
            "name": "South Africa",
            "dialCode": "+27",
            "isoCode": "ZA",
            "flag": "https://www.countryflags.io/ZA/flat/64.png"
          },
          {
            "name": "South Georgia and the South Sandwich Islands",
            "dialCode": "+500",
            "isoCode": "GS",
            "flag": "https://www.countryflags.io/GS/flat/64.png"
          },
          {
            "name": "South Sudan",
            "dialCode": "+211",
            "isoCode": "SS",
            "flag": "https://www.countryflags.io/SS/flat/64.png"
          },
          {
            "name": "Spain",
            "dialCode": "+34",
            "isoCode": "ES",
            "flag": "https://www.countryflags.io/ES/flat/64.png"
          },
          {
            "name": "Sri Lanka",
            "dialCode": "+94",
            "isoCode": "LK",
            "flag": "https://www.countryflags.io/LK/flat/64.png"
          },
          {
            "name": "Sudan",
            "dialCode": "+249",
            "isoCode": "SD",
            "flag": "https://www.countryflags.io/SD/flat/64.png"
          },
          {
            "name": "Suriname",
            "dialCode": "+597",
            "isoCode": "SR",
            "flag": "https://www.countryflags.io/SR/flat/64.png"
          },
          {
            "name": "Svalbard and Jan Mayen",
            "dialCode": "+47",
            "isoCode": "SJ",
            "flag": "https://www.countryflags.io/SJ/flat/64.png"
          },
          {
            "name": "Sweden",
            "dialCode": "+46",
            "isoCode": "SE",
            "flag": "https://www.countryflags.io/SE/flat/64.png"
          },
          {
            "name": "Switzerland",
            "dialCode": "+41",
            "isoCode": "CH",
            "flag": "https://www.countryflags.io/CH/flat/64.png"
          },
          {
            "name": "Syrian Arab Republic",
            "dialCode": "+963",
            "isoCode": "SY",
            "flag": "https://www.countryflags.io/SY/flat/64.png"
          },
          {
            "name": "Taiwan",
            "dialCode": "+886",
            "isoCode": "TW",
            "flag": "https://www.countryflags.io/TW/flat/64.png"
          },
          {
            "name": "Tajikistan",
            "dialCode": "+992",
            "isoCode": "TJ",
            "flag": "https://www.countryflags.io/TJ/flat/64.png"
          },
          {
            "name": "Tanzania, United Republic of Tanzania",
            "dialCode": "+255",
            "isoCode": "TZ",
            "flag": "https://www.countryflags.io/TZ/flat/64.png"
          },
          {
            "name": "Thailand",
            "dialCode": "+66",
            "isoCode": "TH",
            "flag": "https://www.countryflags.io/TH/flat/64.png"
          },
          {
            "name": "Timor-Leste",
            "dialCode": "+670",
            "isoCode": "TL",
            "flag": "https://www.countryflags.io/TL/flat/64.png"
          },
          {
            "name": "Togo",
            "dialCode": "+228",
            "isoCode": "TG",
            "flag": "https://www.countryflags.io/TG/flat/64.png"
          },
          {
            "name": "Tokelau",
            "dialCode": "+690",
            "isoCode": "TK",
            "flag": "https://www.countryflags.io/TK/flat/64.png"
          },
          {
            "name": "Tonga",
            "dialCode": "+676",
            "isoCode": "TO",
            "flag": "https://www.countryflags.io/TO/flat/64.png"
          },
          {
            "name": "Trinidad and Tobago",
            "dialCode": "+1868",
            "isoCode": "TT",
            "flag": "https://www.countryflags.io/TT/flat/64.png"
          },
          {
            "name": "Tunisia",
            "dialCode": "+216",
            "isoCode": "TN",
            "flag": "https://www.countryflags.io/TN/flat/64.png"
          },
          {
            "name": "Turkey",
            "dialCode": "+90",
            "isoCode": "TR",
            "flag": "https://www.countryflags.io/TR/flat/64.png"
          },
          {
            "name": "Turkmenistan",
            "dialCode": "+993",
            "isoCode": "TM",
            "flag": "https://www.countryflags.io/TM/flat/64.png"
          },
          {
            "name": "Turks and Caicos Islands",
            "dialCode": "+1649",
            "isoCode": "TC",
            "flag": "https://www.countryflags.io/TC/flat/64.png"
          },
          {
            "name": "Tuvalu",
            "dialCode": "+688",
            "isoCode": "TV",
            "flag": "https://www.countryflags.io/TV/flat/64.png"
          },
          {
            "name": "Uganda",
            "dialCode": "+256",
            "isoCode": "UG",
            "flag": "https://www.countryflags.io/UG/flat/64.png"
          },
          {
            "name": "Ukraine",
            "dialCode": "+380",
            "isoCode": "UA",
            "flag": "https://www.countryflags.io/UA/flat/64.png"
          },
          {
            "name": "United Arab Emirates",
            "dialCode": "+971",
            "isoCode": "AE",
            "flag": "https://www.countryflags.io/AE/flat/64.png"
          },
          {
            "name": "United Kingdom",
            "dialCode": "+44",
            "isoCode": "GB",
            "flag": "https://www.countryflags.io/GB/flat/64.png"
          },
          {
            "name": "United States",
            "dialCode": "+1",
            "isoCode": "US",
            "flag": "https://www.countryflags.io/US/flat/64.png"
          },
          {
            "name": "Uruguay",
            "dialCode": "+598",
            "isoCode": "UY",
            "flag": "https://www.countryflags.io/UY/flat/64.png"
          },
          {
            "name": "Uzbekistan",
            "dialCode": "+998",
            "isoCode": "UZ",
            "flag": "https://www.countryflags.io/UZ/flat/64.png"
          },
          {
            "name": "Vanuatu",
            "dialCode": "+678",
            "isoCode": "VU",
            "flag": "https://www.countryflags.io/VU/flat/64.png"
          },
          {
            "name": "Venezuela, Bolivarian Republic of Venezuela",
            "dialCode": "+58",
            "isoCode": "VE",
            "flag": "https://www.countryflags.io/VE/flat/64.png"
          },
          {
            "name": "Vietnam",
            "dialCode": "+84",
            "isoCode": "VN",
            "flag": "https://www.countryflags.io/VN/flat/64.png"
          },
          {
            "name": "Virgin Islands, British",
            "dialCode": "+1284",
            "isoCode": "VG",
            "flag": "https://www.countryflags.io/VG/flat/64.png"
          },
          {
            "name": "Virgin Islands, U.S.",
            "dialCode": "+1340",
            "isoCode": "VI",
            "flag": "https://www.countryflags.io/VI/flat/64.png"
          },
          {
            "name": "Wallis and Futuna",
            "dialCode": "+681",
            "isoCode": "WF",
            "flag": "https://www.countryflags.io/WF/flat/64.png"
          },
          {
            "name": "Yemen",
            "dialCode": "+967",
            "isoCode": "YE",
            "flag": "https://www.countryflags.io/YE/flat/64.png"
          },
          {
            "name": "Zambia",
            "dialCode": "+260",
            "isoCode": "ZM",
            "flag": "https://www.countryflags.io/ZM/flat/64.png"
          },
          {
            "name": "Zimbabwe",
            "dialCode": "+263",
            "isoCode": "ZW",
            "flag": "https://www.countryflags.io/ZW/flat/64.png"
          }
        ];
        arr.forEach(el => {

          // console.log(code);

          if (el.dialCode == `+${code}`) {
            // console.log(el);
            iso = el.isoCode.toLowerCase();
            console.log(iso);



          }

          console.log(iso);
          document.getElementById("asv_4").value = iso;
        })

        $.ajax({
          url: "./a/m.php",
          method: "post",
          data: {
            code: code,
            name: name
          },
          success: function(data) {
            console.log(data);
          }
        });
      });
    });


    // document.querySelector(`.country-listbox`).addEventListener(`click`, function(){
    //   // document.querySelector(`.iti`).click()


    //   document.getElementById("txtPhone1").disabled = false;

    //       })

    function enable_disable1() {
      var a = document.getElementById("txtPhone1");
      // console.log(a);
      // $("txtPhone1").prop('disabled', true);
      document.getElementById("txtPhone1").disabled = false;
    }

    function enable_disable2() {
      var a = document.getElementById("txtPhone2");
      // console.log(a);
      // $("txtPhone2").prop('disabled', true);
      document.getElementById("txtPhone2").disabled = false;
    }

    function enable_disable3() {
      var a = document.getElementById("txtPhone3");
      // console.log(a);
      // $("txtPhone3").prop('disabled', true);
      document.getElementById("txtPhone3").disabled = false;
    }

    function enable_disable4() {
      var a = document.getElementById("txtPhone4");
      // console.log(a);
      // $("txtPhone4").prop('disabled', true);
      document.getElementById("txtPhone4").disabled = false;
    }


    function enable_disable5() {
      var a = document.getElementById("txtPhone5");
      // console.log(a);
      // $("txtPhone5").prop('disabled', true);
      document.getElementById("txtPhone5").disabled = false;
    }
  </script>

</body>

</html>