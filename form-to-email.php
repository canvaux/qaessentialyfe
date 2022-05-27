<script>
    var now = new Date();
    document.cookie = `flag=; expires=${ now.toUTCString()}`;
</script>
<?php
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_WARNING);
error_reporting(0);
//   setcookie('flag' ,'' , time()-3600);


//Include required PHPMailer files
require 'bat/phpmailer/PHPMailer.php';
require 'bat/phpmailer/SMTP.php';
require 'bat/phpmailer/Exception.php';
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$rental_type_vacatoin = $_POST['vacation'];
$rental_type_event = $_POST['Event'];
$rental_type_production = $_POST['Production'];
$rental_type_shortterm = $_POST['shortterm'];
$rental_type_Longterm = $_POST['Longterm'];
$test = "91";
$countarycode;
if (isset($rental_type_vacatoin)) {
    $av = $_POST['vacation1'];
    // echo $av;
    $visitor_name = $_POST['vr-name'];
    $visitor_email = $_POST['vr-mail'];
    $visitor_phone = $_POST['vr-phone'];
    $visitor_insta = $_POST['vr-insta'];
    $visitor_option = $_POST['rental-type'];
    $visitor_pets = $_POST['vr-pets'];
    $visitor_party = $_POST['vr-party'];
    $visitor_start_date = $_POST['vr-start-date'];
    $visitor_end_date = $_POST['vr-end-date'];
    $visitor_start_time = $_POST['vr-start-time'];
    $visitor_end_time = $_POST['vr-end-time'];
    $visitor_beds = $_POST['vr-bed'];
    $visitor_bath = $_POST['vr-bath'];
    $visitor_stay = $_POST['vr-stay'];
    $visitor_city = $_POST['vr-city'];
    $visitor_style = $_POST['vr-style'];
    $visitor_price = $_POST['vr-hear'];
    $visitor_services = $_POST['vr-serv'];
    $visitor_req = $_POST['vr-req'];
    $visitor_park = $_POST['vr-park'];
    $visitor_flexible_date = $_POST['vr-flex-date'];
    $visitor_flexible_time = $_POST['vr-flex-time'];
    $visitor_attendees = $_POST['vr-attendees'];
    $visitor_visits = $_POST['vr-visits'];
    $visitor_find_us = $_POST['vr-hear-us'];
    $visitor_aditional_info = $_POST['vr-info'];
    $visitor_yes_pets = $_POST['vr-yes_pets'];
    $visitor_yes_guest = $_POST['vr-yes_guest'];
    $visitor_yes_service_home = $_POST['vr-yes_service_home'];
    $visitor_yes_service_lxr = $_POST['vr-yes_service_lxr'];
    //   require('./a/m.php');
    $code = $_POST['txtPhone'];
    $phoneNumber = $_POST['txtPhone1'];
    $visitor_vr_no_pets = $_POST['vr-no_pets'];
    $visitor_vr_other_info = $_POST['vr-other_info'];
    $visitor_vr_trip_perpose = $_POST['vr-trip_perpose'];
    $visitor_vr_music = $_POST['vr-music'];
    $visitor_vr_heat_pool = $_POST['vr-heat_pool'];
    $visitor_vr_where_hear = $_POST['vr-where_hear'];
    $visitor_vr_other_city = $_POST['vr-other_city'];
    $visitor_vr_other_style = $_POST['vr-other_style'];
    // print_r('No');
    // die();

} elseif (isset($rental_type_event)) {
    $av = $_POST['vacation1'];
    $visitor_name = $_POST['ev-name'];
    $visitor_email = $_POST['ev-mail'];
    $visitor_phone = $_POST['textphone2'];
    $visitor_insta = $_POST['ev-insta'];
    $visitor_bath = $_POST['ev-bathroom'];
    $visitor_start_date = $_POST['ev-start-date'];
    $visitor_end_date = $_POST['ev-end-date'];
    $visitor_start_time = $_POST['ev-start-time'];
    $visitor_end_time = $_POST['ev-end-time'];
    $visitor_beds = $_POST['ev-bed'];
    $visitor_attendees = $_POST['ev-attendees'];
    $visitor_city = $_POST['ev-city-2'];
    $visitor_style = $_POST['ev-style-2'];
    $visitor_ser_alco = $_POST['ev-flex-date'];
    $visitor_sell_alco = $_POST['ev-sell-alco'];
    $visitor_event_type = $_POST['ev-event_type'];
    $visitor_filiming = $_POST['ev-visits'];
    $visitor_bguard = $_POST['ev-hear'];
    $visitor_event_plan = $_POST['ev-event-plan'];
    $visitor_furn = $_POST['ev-furn'];
    $visitor_deco = $_POST['ev-deco'];
    $visitor_part = $_POST['ev-parts'];
    $visitor_park_sp = $_POST['ev-park-sp'];
    $visitor_comp = $_POST['ev-company'];
    $visitor_flexible_date = $_POST['ev-flex-date'];
    $visitor_flexible_time = $_POST['ev-flex-time'];
    $visitor_pets = $_POST['ev-pets'];
    $visitor_find_us = $_POST['ev-hear-2'];
    $visitor_minor = $_POST['ev-hear'];
    $visitor_info = $_POST['ev-info'];
    $visitor_ticket = $_POST['ev-tickets'];
    $visitor_event_behalf = $_POST['ev-app_behalf'];
    $visitor_gear_load = $_POST['ev-avg_ld_gear'];
    //   $visitor_event_type = $_POST['ev-event-type'];
    $visitor_veh = $_POST['ev-vehicles'];
    $visitor_guest_arr = $_POST['ev-guest-arr'];
    $visitor_seat = $_POST['ev-seated'];
    $visitor_park = $_POST['ev-park-spot'];
    $visitor_event_hr_start = $_POST['ev-hour-start'];
    $visitor_event_hr_end = $_POST['ev-hour-end'];
    $visitor_load_time_start = $_POST['ev-load-time-start'];
    $visitor_load_time_end = $_POST['ev-load-time-end'];
    $visitor_load_out_start = $_POST['ev-load-out-start'];
    $visitor_load_out_end = $_POST['ev-load-out-end'];
    $visitor_vec = $_POST['ev-vehicles'];
    $visitor_acc = $_POST['ev-acc'];
    // $visitor_serv = $_POST['ev-add-serv'];
    $visitor_ven = $_POST['ev-vendors-anti'];
    $visitor_price = $_POST['ev-rent'];
    $visitor_serv = $_POST['ev-other-serv'];
    $code = $_POST['txtPhone'];
    $phoneNumber = $_POST['txtPhone2'];
    $requiredServices = $_POST['ev-other_info'];
    $visitor_pets_num = $_POST['ev-no_pets'];
    $visitor_pet_size = $_POST['ev-yes_pets'];
    $visitor_exotic_info = $_POST['ev-exotic_info'];
    $visitor_exocit_animals = $_POST['ev-exocit_animals'];
    $visitor_high_volt = $_POST['ev-high_volt'];
    $visitor_load_serv = $_POST['ev-load_serv'];
    $visitor_ev_where_hear = $_POST['ev-where_hear'];
    // $visitor_ev_info_city = $_POST['ev-info_city'];
    // $visitor_ev_info_house_style = $_POST['ev-info_house_style'];
    $visitor_ev_event_ticketed = $_POST['ev-event_ticketed'];

    // print_r('Yes');
} elseif (isset($rental_type_production)) {
    $av = $_POST['vacation1'];
    $visitor_name = $_POST['f-name'];
    $visitor_email = $_POST['f-mail'];
    $visitor_phone = $_POST['f-phone'];
    $visitor_insta = $_POST['f-insta'];
    $visitor_start_date = $_POST['f-start-date'];
    $visitor_end_date = $_POST['f-end-date'];
    $visitor_start_time = $_POST['f-start-time'];
    $visitor_end_time = $_POST['f-end-time'];
    $visitor_beds = $_POST['f-bed'];
    $visitor_stay = $_POST['f-stay'];
    $visitor_city = $_POST['f-city'];
    $visitor_style = $_POST['f-style'];
    $visitor_option = $_POST['f-hear'];
    $visitor_flexible_time = $_POST['f-flex-time'];
    $visitor_per = ['f-flex-pr'];
    $visitor_company = $_POST['f-company'];
    $visitor_parking_sp = $_POST['f-parking-space'];
    $visitor_Guards = $_POST['f-guards'];
    // $visitor_furniture = $_POST['f-furniture'];
    $visitor_flexible_date = $_POST['f-flex-date'];
    $visitor_flexible_time_co = $_POST['f-flex-time'];
    $visitor_pets = $_POST['f-pets'];
    $visitor_find_us = $_POST['f-hear'];
    $visitor_aditional_info = $_POST['f-info'];
    $visitor_vehicles = $_POST['f-vehicles'];
    $visitor_requirements = $_POST['f-requirements'];
    $visitor_parking_sp = $_POST['f-parking'];
    $visitor_production = $_POST['f-production'];
    // $visitor_attendees = $_POST['f-attendees'];
    $code = $_POST['txtPhone'];
    $phoneNumber = $_POST['txtPhone3'];
    $visitor_high_volt = $_POST['f-high_volt'];
    $visitor_load_serv = $_POST['f-load_serv'];
    $visitor_house_part = $_POST['f-house_part'];
    $visitor_exocit_animals = $_POST['f-exocit_animals'];
    $visitor_exotic_info = $_POST['f-exotic_info'];
    $visitor_no_pets = $_POST['f-no_pets'];
    $visitor_yes_pets = $_POST['f-yes_pets'];
    $visitor_f_where_hear = $_POST['f-where_hear'];
    $visitor_f_other_city = $_POST['f-other_city'];
    $visitor_f_house_style = $_POST['f-house_style'];
    // $visitor_f_production_type = $_POST['f-production_type'];
    $visitor_f_info_production = $_POST['f-info_production'];
    // $visitor_f_house_part = $_POST['f-house_part'];
} elseif (isset($rental_type_shortterm)) {
    $av = $_POST['vacation1'];
    $visitor_name = $_POST['st-name'];
    $visitor_email = $_POST['st-mail'];
    $visitor_phone = $_POST['st-phone'];
    $visitor_insta = $_POST['st-insta'];
    $ev_start_date = $_POST['st-start-date'];
    $ev_end_date = $_POST['st-end-date'];
    $ev_start_time = $_POST['st-start-time'];
    $ev_end_time = $_POST['st-end-time'];
    $visitor_beds = $_POST['st-bed'];
    $visitor_attendees = $_POST['st-attendees'];
    $visitor_city = $_POST['st-city'];
    $visitor_style = $_POST['st-style-2'];
    $visitor_serving_al = $_POST['st-alchohol'];
    $visitor_selling_al = $_POST['st-selling'];
    $visitor_filming = $_POST['st-visits'];
    $visitor_option = $_POST['st-hear'];
    $visitor_option_1 = $_POST['st-hear-7'];
    $visitor_furniture = $_POST['st-hear-2'];
    $visitor_decoration = $_POST['st-hear-3'];
    $visitor_parking_sp = $_POST['st-hear-8'];
    $visitor_comapny = $_POST['st-company'];
    $visitor_check_out_date = $_POST['st-flex-date'];
    $visitor_check_out_time = $_POST['st-flex-time'];
    $visitor_pets = $_POST['st-pets'];
    $visitor_know_us = $_POST['st-hear-6'];
    $visitor_ad_info  = $_POST['st-info'];
    $visitor_selling_ticket = $_POST['st-tickets'];
    $visitor_event = $_POST['st-event-type'];
    $visitor_vehicles = $_POST['st-vehicles'];
    $visitor_vendors = $_POST['st-vendors'];
    $visitor_party = $_POST['st-party'];
    $visitor_expecting_visitor = $_POST['st-visitor'];
    $visitor_siting = $_POST['st-siting'];
    $visitor_req = $_POST['st-requirements'];
    $visitor_parking_spots = $_POST['st-parking-sp'];
    $visitor_event_hr = $_POST['st-event-hr'];
    $visitor_load_time = $_POST['st-load-time'];
    $visitor_load_out = $_POST['st-load-out'];
    // $visitor_attendees = ['st-event-att'];
    $visitor_ad_ser = $_POST['st-additional-ser'];
    $visitor_guest_arrive = $_POST['st-arrive'];
    $visitor_other_ser = $_POST['st-hear-4'];
    $visitor_budget = $_POST['st-budget'];
    $visitor_guest = $_POST['st-guest'];
    $visitor_minor = $_POST['st-minrs'];
    $code = $_POST['txtPhone'];
    $phoneNumber = $_POST['txtPhone4'];
} elseif (isset($rental_type_Longterm)) {
    $av = $_POST['vacation1'];
    $visitor_name = $_POST['lt-name'];
    $visitor_email = $_POST['lt-mail'];
    $visitor_phone = $_POST['lt-phone'];
    $visitor_insta = $_POST['lt-insta'];
    $visitor_start_date = $_POST['lt-start-date'];
    $visitor_end_date = $_POST['lt-end-date'];
    $visitor_beds = $_POST['lt-bed'];
    $visitor_bathroom = $_POST['lt-bathroom'];
    $visitor_city = $_POST['lt-city-2'];
    $visitor_style = $_POST['lt-style-2'];
    $visitor_flexible_date = $_POST['lt-flex-date'];
    $visitor_option = $_POST['lt-hear-2'];
    $visitor_aditional_info = $_POST['lt-info'];
    $visitor_vehicles = $_POST['lt-vehicles'];
    $visitor_vendor = $_POST['lt-vendors'];
    $visitor_requirements = $_POST['lt-requirements'];
    $visitor_parking_sp = $_POST['lt-parking'];
    $visitor_pets = $_POST['lt-pets'];
    $visitor_service = $_POST['lt-hear-4'];
    $visitor_budget = $_POST['lt-hear-5'];
    $visitor_attendees = $_POST['lt-attendees'];
    $code = $_POST['txtPhone'];
    $phoneNumber = $_POST['txtPhone5'];
    $visitor_flex_time = $_POST['lt-flex-time'];
    $visitor_no_pets = $_POST['lt-no_pets'];
    $visitor_yes_pets = $_POST['lt-yes_pets'];
    // $visitor_lt_where_hear = $_POST['lt-where_hear_us'];
    $visitor_lt_city_information = $_POST['lt-city_information'];
    $visitor_lt_style_information = $_POST['lt-style_information'];
    $visitor_lt_content_creat = $_POST['lt-content_creat'];
    $visitor_lt_other_info = $_POST['lt-other_info'];
 
}
?>




<?php
global $countarycode;
$countarycode = '<script> document.write(iso); </script>';

$data = "<img src='$countarycode'  class='flag_img'>";

// function flag(){
//     echo '<script> document.write(str); </script>';
// }
// echo $cookiName = $_COOKIE['flag'];
// echo $countarycode;
if ($visitor_vr_other_city == "other") {
    $show = "
    <tr style='background-color:#dddddd'>
            <td>Other city/area information?</td>
            <td>" . $visitor_vr_other_city . "</td>
        </tr>
        ";
}
if ($visitor_vr_other_style == "other") {
    $show = "
<tr style='background-color:#dddddd'>
<td>Other house style information?</td>
<td>" . $visitor_vr_other_style . "</td>
</tr>
";
}


if ($visitor_vr_where_hear == "other") {
    $show = "
<tr>
<td>Please fill where did you hear about us?</td>
<td>" . $visitor_vr_where_hear . "</td>
</tr>
";
}

$mailbody = "
<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <table>
        <tr style='background-color:#dddddd'>
            <th style='border: 2px solid grey;'>Firstname</th>
            <th style='border: 2px solid grey;'>$visitor_name</th>
        </tr>
        <tr>
            <th style='border: 2px solid grey;'>Email</td>
            <th style='border: 2px solid grey;'>$visitor_email</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <th style='border: 2px solid grey;'>Phone</td>
            <th style='border: 2px solid grey;'>
            
             <img src='https://flagcdn.com/16x12/" . $av . ".png' class='flag_img'>+" . $code . " " . $phoneNumber . "</td>
        </tr>
        <tr>
            <th style='border: 2px solid grey;'>Social Media Handle (example: Facebook, Instagram, LinkedIn)</td>
            <th style='border: 2px solid grey;'>$visitor_insta</td>
        </tr>
        <tr style='background-color:#000000'>
            <th style='color: white;'>Question</th>
            <th style='color: white;'>Answer</th>
        </tr>
        <tr>
            <td>Rental Type</td>
            <td>" . $rental_type_vacatoin . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Are you bringing any pets?</td>
            <td>" . $visitor_pets . "</td>
        </tr>
        <tr>
            <td>Are you planning to host a party?</td>
            <td>" . $visitor_pets . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Check-In date</td>
            <td>" . $visitor_start_date . "</td>
        </tr>
        <tr>
            <td>Check-out date</td>
            <td>" . $visitor_end_date . "</td>
        </tr>
        <tr>
        <tr style='background-color:#dddddd'>
            <td>Check In Time</td>
            <td>" . $visitor_start_time . "</td>
        </tr>
        <tr>
            <td>Check Out Time</td>
            <td>" . $visitor_end_time . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Number of Bedrooms Needed?</td>
            <td>" . $visitor_beds . "</td>
        </tr>

        <tr>
            <td>Number of Bathrooms Needed?</td>
            <td>" . $visitor_bath . "</td>
        </tr>

        <tr style='background-color:#dddddd'>
            <td>Numeber of Guests Staying Over?</td>
            <td>" . $visitor_stay . "</td>
        </tr>
        <tr >
            <td>What city/area are you intersted in?</td>
            <td>" . $visitor_city . "</td>
        </tr>
        " . $show . "
        <tr>
            <td>What house style are you interested in?</td>
            <td>" . $visitor_style . "</td>
        </tr>
        " . $show . "
        <tr >
            <td>What is your total rental budget?</td>
            <td>" . $visitor_price . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Are you interested in any additonal services?</td>
            <td>" . $visitor_services . "</td>
        </tr>
        <tr >
            <td>Do you have any accessibility requirements?</td>
            <td>" . $visitor_req . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Number of parking spots needed?</td>
            <td>" . $visitor_park . "</td>
        </tr>
        <tr >
            <td>Are you flexible with the check in/out date?</td>
            <td>" . $visitor_flexible_date . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Are you flexible with the check in/out time?</td>
            <td>" . $visitor_flexible_time . "</td>
        </tr>
        <tr >
            <td>Are you expecting any visitors?</td>
            <td>" . $visitor_visits . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>How did you hear about us?</td>
            <td>" . $visitor_find_us . "</td>
        </tr>
        " . $show . "
        <tr style='background-color:#dddddd'>
            <td>Any additional information you wish to share?</td>
            <td>" . $visitor_aditional_info . "</td>
        </tr>
        <tr>
            <td>Number of pets?</td>
            <td>" . $visitor_vr_no_pets . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Weight of pets?</td>
            <td>" . $visitor_yes_pets . "</td>
        </tr>
        <tr>
            <td>Number of visitors?</td>
            <td>" . $visitor_yes_guest . "</td>
        </tr>

        <tr style='background-color:#dddddd'>
            <td>What is the main purpose of your trip?</td>
            <td>" . $visitor_vr_trip_perpose . "</td>
        </tr>

        <tr>
            <td>Will you be having music in the backyard?</td>
            <td>" . $visitor_vr_music . "</td>
        </tr>

        <tr style='background-color:#dddddd'>
            <td>Would you like to heat up the pool & Hot tub?</td>
            <td>" . $visitor_vr_heat_pool . "</td>
        </tr>


        
    </table>

</body>


</html>
";

// echo $mailbody;
// echo $data;

//<script>
//     let a = document.querySelector('.flag_img');


//     console.log(iso);
//     a.src = str;
//     console.log(a);
// </script>
?>

<?php

// die();

// $headerFields = array(
// "From: $visitor_email",
// "Name: $visitor_name",
// "Number: $visitor_phone",
// "ig:$visitor_insta",
// "rental-type:$visitor_option",
// "vr-pets:$visitor_pets",
// "vr-party:$visitor_party",
// "vr-start-date:$visitor_start_date",
// "vr-end-date:$visitor_end_date",
// "vr-start-time:$visitor_start_time",
// "vr-end-time:$visitor_end_time",
// "vr-bed:$visitor_beds",
// "vr-stay:$visitor_stay",
// "vr-city:$visitor_city",
// "vr-style:$visitor_style",
// "vr-hear:$visitor_price",
// "vr-flex-date:$visitor_flexible_date",
// "vr-visits:$visitor_visits",
// "vr-hear:$visitor_find_us",
// "vr-info:$visitor_aditional_info",
// );

// print_r($headerFields);
// die();

//Create instance of PHPMailer
$mail = new PHPMailer();
//Set mailer to use smtp
$mail->isSMTP();
//Define smtp host
$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
$mail->SMTPSecure = "tls";
//Port to connect smtp
$mail->Port = "587";
//Set gmail username
$mail->Username = "developer559872@gmail.com";
//Set gmail password
// $mail->Password = "Avi123!#$";
$mail->Password = "Developer@3585";
//Email subject
$mail->Subject = "Rental Form Data";
//Set sender email 
$mail->setFrom("developer559872@gmail.com");
//Enable HTML
$mail->isHTML(true);
//Attachment
// $mail->addAttachment('img/attachment.png');
//Email body
if (isset($rental_type_vacatoin)) {
    $mail->Body = $mailbody;
    $mail->addCC($visitor_email);
} elseif (isset($rental_type_event)) {
    if ($visitor_pets == "yes") {
        $show = "
    <tr>
        <td>No of pets:</td>
        <td>" . $visitor_pets_num . "</td>
    </tr>
    <tr style='background-color:#dddddd'>
        <td>Pet Size:</td>
        <td>" . $visitor_pet_size . "</td>
    </tr>
    ";
    }

    if ($visitor_serv == "Other") {
        $show1 = " 
        <tr>
              <td>Please Fill your required services?</td>
              <td>" . $requiredServices . "</td>
          </tr>
        ";
    }
    $mail->Body = "
    <!DOCTYPE html>
    <html>
    
    <head>
    </head>
    
    <body>
        <table>
            <tr style='background-color:#dddddd'>
                <th style='border: 2px solid grey;'>Firstname</th>
                <th style='border: 2px solid grey;'>$visitor_name</th>
            </tr>
            <tr>
                <th style='border: 2px solid grey;'>Email</td>
                <th style='border: 2px solid grey;'>$visitor_email</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <th style='border: 2px solid grey;'>Phone</td>
                <th style='border: 2px solid grey;'>
    
                    <img src='https://flagcdn.com/16x12/" . $av . ".png' class='flag_img'>+" . $code . " " . $phoneNumber .
        "</td>
            </tr>
            <tr>
                <th style='border: 2px solid grey;'>Social Media Handle (example: Facebook, Instagram, LinkedIn)</td>
                <th style='border: 2px solid grey;'>$visitor_insta</td>
            </tr>
            <tr style='background-color:#000000'>
                <th style='color: white;'>Question</th>
                <th style='color: white;'>Answer</th>
            </tr>
            <tr>
                <td>Rental Type</td>
                <td>" . $rental_type_event . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Check-In date</td>
                <td>" . $visitor_start_date . "</td>
            </tr>
            <tr>
                <td>Check-out date</td>
                <td>" . $visitor_end_date . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Check In Time</td>
                <td>" . $visitor_start_time . "</td>
            </tr>
            <tr>
                <td>Check Out Time</td>
                <td>" . $visitor_end_time . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Number of Bedrooms Needed?</td>
                <td>" . $visitor_beds . "</td>
            </tr>
            <tr>
                <td># of Expected Attendees? (including staff)</td>
                <td>" . $visitor_attendees . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>What city/area are you intersted in?</td>
                <td>" . $visitor_city . "</td>
            </tr>
        
            <tr style='background-color:#dddddd'>
                <td>What house style are you interested in?</td>
                <td>" . $visitor_style . "</td>
            </tr>

            <tr style='background-color:#dddddd'>
                <td>Will you be serving alcohol?</td>
                <td>" . $visitor_ser_alco . "</td>
            </tr>
            <tr>
                <td>Will you be selling alcohol?</td>
                <td>" . $visitor_sell_alco . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Will you be having any proffesional filming?</td>
                <td>" . $visitor_filiming . "</td>
            </tr>
            <tr>
                <td>Will you have any bodyguards during your rental?</td>
                <td>" . $visitor_bguard . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Will you need to move any of the furniture?</td>
                <td>" . $visitor_furn . "</td>
            </tr>
            <tr >
                <td>Will you be adding any decorations?</td>
                <td>" . $visitor_deco . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Parts of the house to be used?</td>
                <td>" . $visitor_part . "</td>
            </tr>
            <tr>
                <td>Do you need additional parking space?</td>
                <td>" . $visitor_park_sp . "</td>
            </tr>
    
            <tr style='background-color:#dddddd'>
                <td>Are you flexible with the check in/out date?</td>
                <td>" . $visitor_flexible_date . "</td>
            </tr>
            <tr>
                <td>Are you flexible with the check in/out time?</td>
                <td>" . $visitor_flexible_time . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Are you bringing any pets?</td>
                <td>" . $visitor_pets . "</td>
            </tr>
            " . $show . "
            <tr>
                <td>How did you hear about us?</td>
                <td>" . $visitor_find_us . "</td>
            </tr>

            <tr>
                <td>Will you have any minors?</td>
                <td>" . $visitor_minor . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Any additional information you wish to share?</td>
                <td>" . $visitor_info . "</td>
            </tr>
            <tr>
                <td>Will you be selling tickets to your event?</td>
                <td>" . $visitor_ticket . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Event Type?</td>
                <td>" . $visitor_event_type . "</td>
            </tr>
            <tr>
                <td>How many vehicles do you anticipate will park on the street?</td>
                <td>" . $visitor_veh . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>How many vendors do you anticipate will service the event?</td>
                <td>" . $visitor_ven . "</td>
            </tr>
            <tr>
                <td>What is your total rental budget?</td>
                <td>" . $visitor_price . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Are you interested in any additonal services?</td>
                <td>" . $visitor_serv . "</td>
            </tr>
            " . $show1 . "
            <tr>
                <td>How will guests be arriving?</td>
                <td>" . $visitor_guest_arr . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Do you have any accessibility requirements?</td>
                <td>" . $visitor_acc . "</td>
    
            <tr>
                <td>Number of parking spots needed?</td>
                <td>" . $visitor_park . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Load in time start</td>
                <td>" . $visitor_load_time_start . "</td>
            </tr>
            <tr>
                <td>load in time end</td>
                <td>" . $visitor_load_time_end . "</td>
            </tr>
            <tr>
                <td>wrap up time start</td>
                <td>" . $visitor_load_out_start . "</td>
            </tr>
            <tr>
            <td>wrap up time end</td>
            <td>" . $visitor_load_out_end . "</td>
        </tr>
            <tr style='background-color:#dddddd'>
                <td>Hours of event start</td>
                <td>" . $visitor_event_hr_start  . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
            <td>Hours of event end</td>
            <td>" . $visitor_event_hr_end . "</td>
        </tr>
            <tr>
                <td>Will this be a seated or standing event?</td>
                <td>" . $visitor_seat . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td># of Bathrooms Needed</td>
                <td>" . $visitor_bath . "</td>
            </tr>
            <tr>
                <td>Are you applying on behalf of your self?</td>
                <td>" . $visitor_event_behalf . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Please describe the average gear load-in?</td>
                <td>" . $visitor_gear_load . "</td>
            </tr>
            <tr>
                <td>Please describe the event</td>
                <td>" . $visitor_event_plan . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Are you bringing any exotic animals:</td>
                <td>" . $visitor_exocit_animals . "</td>
            </tr>

    
            <tr style='background-color:#dddddd'>
                <td>Will you be having any high voltage lighting equipment:</td>
                <td>" . $visitor_high_volt . "</td>
            </tr>
    
            <tr>
                <td>Do you need lodging services/ stay over night:</td>
                <td>" . $visitor_load_serv . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Will this be a ticketed event:</td>
                <td>" . $visitor_ev_event_ticketed . "</td>
            </tr>
    
        </table>
    
    </body>
    
    </html>
";
    $mail->addCC($visitor_email);
} elseif (isset($rental_type_production)) {
    if ($visitor_pets == "yes") {
        $show = "
    <tr>
        <td>No of pets:</td>
        <td>" . $visitor_no_pets . "</td>
    </tr>
    <tr style='background-color:#dddddd'>
        <td>Pet Size:</td>
        <td>" . $visitor_yes_pets . "</td>
    </tr>
    ";
    }
    if ($visitor_f_house_style == "other") {
        $show = "
    <tr style='background-color:#dddddd'>
    <td>Information about other house style?</td>
    <td>" . $visitor_f_house_style . "</td>
</tr>
";
    }


    if ($visitor_f_other_city == "other") {
        $show = "
    <tr style='background-color:#dddddd'>
    <td>Information about the other city/area?</td>
    <td>" . $visitor_f_other_city . "</td>
</tr>
";
    }

    if ($visitor_f_where_hear == "other") {
        $show = "
    <tr style='background-color:#dddddd'>
    <td>Where did you hear about us</td>
    <td>" . $visitor_f_where_hear . "</td>
</tr>
";}


if ($visitor_exotic_info == "yes") {
    $show = "
<tr style='background-color:#dddddd'>
<td>Please describe about exotic animals:</td>
<td>" . $visitor_exotic_info . "</td>
</tr>

";}


if ($visitor_f_info_production == "other") {
    $show = "
<tr>
<td>Production type other information:</td>
<td>" . $visitor_f_info_production . "</td>
</tr>
";}
    $mail->Body = "
  <!DOCTYPE html>
  <html>
  
  <head>
  </head>
  
  <body>
      <table>
          <tr style='background-color:#dddddd'>
              <th style='border: 2px solid grey;'>Firstname</th>
              <th style='border: 2px solid grey;'>$visitor_name</th>
          </tr>
          <tr>
              <th style='border: 2px solid grey;'>Email</td>
              <th style='border: 2px solid grey;'>$visitor_email</td>
          </tr>
          <tr style='background-color:#dddddd'>
          <th style='border: 2px solid grey;'>Phone</td>
          <th style='border: 2px solid grey;'>
          
           <img src='https://flagcdn.com/16x12/" . $av . ".png' class='flag_img'>+" . $code . " " . $phoneNumber . "</td>
            </tr>
          <tr>
              <th style='border: 2px solid grey;'>Social Media Handle (example: Facebook, Instagram, LinkedIn)</td>
              <th style='border: 2px solid grey;'>$visitor_insta</td>
          </tr>
          <tr style='background-color:#000000'>
              <th style='color: white;'>Question</th>
              <th style='color: white;'>Answer</th>
          </tr>
          <tr style='background-color:#dddddd'>
              <td>Rental Type</td>
              <td>" . $rental_type_production . "</td>
          </tr>
          <tr>
              <td>Check In Date</td>
              <td>" . $visitor_start_date . "</td>
          </tr>
          <tr style='background-color:#dddddd'>
              <td>Check Out Date</td>
              <td>" . $visitor_end_date . "</td>
          </tr>
          <tr>
              <td>Check In Time</td>
              <td>" . $visitor_start_time . "</td>
          </tr>
          <tr style='background-color:#dddddd'>
              <td>Check Out Time</td>
              <td>" . $visitor_end_time . "</td>
          </tr>
          <tr>
              <td># of Bedrooms Needed</td>
              <td>" . $visitor_beds . "</td>
          </tr>
          <tr style='background-color:#dddddd'>
              <td># of expected staff + Talent</td>
              <td>" . $visitor_stay . "</td>
          </tr>
          <tr>
              <td>What city/area are you intersted in?</td>
              <td>" . $visitor_city . "</td>
          </tr>
            ".$show."
          <tr>
              <td>What house style are you interested in?</td>
              <td>" . $visitor_style . "</td>
          </tr>
            " . $show . "
          <tr>
              <td>What is your total rental budget?</td>
              <td>" . $visitor_option . "</td>
          </tr>
          <tr style='background-color:#dddddd'>
              <td>Will you be applying for a permit</td>
              <td>" . $visitor_per . "</td>
          </tr>
          <tr>
              <td>Company Name</td>
              <td>" . $visitor_company . "</td>
          </tr>
          <tr style='background-color:#dddddd'>
              <td>Do you need additional parking space?</td>
              <td>" . $visitor_parking_sp . "</td>
          </tr>
          <tr>
              <td>Will you have any bodyguards during your rental?</td>
              <td>" . $visitor_Guards . "</td>
          </tr>

          <tr style='background-color:#dddddd'>
              <td>Are you flexible with the check in/out date</td>
              <td>" . $visitor_flexible_date . "</td>
          </tr>
          <tr>
              <td>Are you flexible with the check in/out time</td>
              <td>" . $visitor_flexible_time_co . "</td>
          </tr>
          <tr style='background-color:#dddddd'>
              <td>Are you bringing any pets</td>
              <td>" . $visitor_pets . "</td>
          </tr>
          " . $show . "
          <tr>
              <td>How did you hear about us</td>
              <td>" . $visitor_find_us . "</td>
          </tr>
                ".$show."
          <tr>
              <td>Any additional information you wish to share?</td>
              <td>" . $visitor_aditional_info . "</td>
          </tr>
          <tr style='background-color:#dddddd'>
              <td>How many veihcles do you anticipate will park on the street?</td>
              <td>" . $visitor_vehicles . "</td>
          </tr>
          <tr>
              <td>Number of parking spots needed</td>
              <td>" . $visitor_parking_sp . "</td>
          </tr>
          <tr style='background-color:#dddddd'>
              <td>Do you have any special accessibility requirements</td>
              <td>" . $visitor_requirements . "</td>
          </tr>
          <tr>
              <td>Production Type</td>
              <td>" . $visitor_production . "</td>
          </tr>

          <tr style='background-color:#dddddd'>
              <td>Will you be having any high voltage lighting equipment:</td>
              <td>" . $visitor_high_volt . "</td>
          </tr>

          <tr>
              <td> Do you need lodging services/ stay over night:</td>
              <td>" . $visitor_load_serv . "</td>
          </tr>
          <tr style='background-color:#dddddd'>
              <td>Parts of the house needed to be used:</td>
              <td>" . $visitor_house_part . "</td>
          </tr>
          <tr>
              <td>Are you bringing any exotic animals:</td>
              <td>" . $visitor_exocit_animals . "</td>
          </tr>
        ".$show."
        ".$show."
      </table>
  
  </body>
  
  </html>
";
    $mail->addCC($visitor_email);
} elseif (isset($rental_type_shortterm)) {
    $mail->Body = "
    <!DOCTYPE html>
<html lang='en'>
<head>
    <title>Document</title>
</head>
<body>
    <table>
        <tr style='background-color:#dddddd'>
            <th style='border: 2px solid grey;'>Firstname</th>
            <th style='border: 2px solid grey;'>$visitor_name</th>
        </tr>
        <tr>
            <th style='border: 2px solid grey;'>Email</td>
            <th style='border: 2px solid grey;'>$visitor_email</td>
        </tr>
        <tr style='background-color:#dddddd'>
        <th style='border: 2px solid grey;'>Phone</td>
        <th style='border: 2px solid grey;'>
         <img src='https://flagcdn.com/16x12/" . $av . ".png' class='flag_img'>+" . $code . " " . $phoneNumber . "</td>
        </tr>
        <tr>
            <th style='border: 2px solid grey;'>Social Media Handle (example: Facebook, Instagram, LinkedIn)</td>
            <th style='border: 2px solid grey;'>$visitor_insta</td>
        </tr>
        <tr>
            <td>Rental Type</td>
            <td>" . $rental_type_shortterm . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Event start Date</td>
            <td>$ev_start_date</td>
        </tr>
        <tr>
            <td>Event end Date</td>
            <td>$ev_end_date</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Event Start Time</td>
            <td>$ev_start_time</td>
        </tr>
        <tr>
            <td>Event End Time</td>
            <td>$ev_end_time</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td># of Bedrooms Needed</td>
            <td>$visitor_beds</td>
        </tr>
        <tr>
            <td>Will you have any minors</td>
            <td>$visitor_minor</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td># of Guests Staying Over</td>
            <td>$visitor_guest</td>
        </tr>
        <tr>
            <td> # of Expected Attendees:</td>
            <td>$visitor_attendees</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>What city/area are you intersted in:</td>
            <td>$visitor_city</td>
        </tr>
        <tr>
            <td>What house style are you interested in:</td>
            <td>$visitor_style</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Will you be serving alcohol:</td>
            <td>$visitor_serving_al</td>
        </tr>
        <tr>
            <td>Will you be selling alcohol:</td>
            <td>$visitor_selling_al</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Will you be having any professional filming?:</td>
            <td>$visitor_filming</td>
        </tr>
        <tr>
            <td>Will you have any bodyguards during your rental:</td>
            <td>$visitor_option</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Are you working with an Event Planner during your rental::</td>
            <td> $visitor_option_1</td>
        </tr>
        <tr>
            <td>Will you need to move any of the furniture:</td>
            <td>$visitor_furniture</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Will you be adding any decorations:</td>
            <td>$visitor_decoration</td>
        </tr>
        <tr>
            <td>Do you need additional parking space:</td>
            <td>$visitor_parking_sp</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Company Name:</td>
            <td>$visitor_comapny</td>
        </tr>
        <tr>
            <td>Are you flexible with the check in/out date:</td>
            <td> $visitor_check_out_date</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Are you flexible with the check in/out time:</td>
            <td> $visitor_check_out_time</td>
        </tr>
        <tr>
            <td>Are you bringing any pets:</td>
            <td> $visitor_pets</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>How did you hear about us :</td>
            <td> $visitor_know_us</td>
        </tr>
        <tr>
            <td>Any additional information you wish to share:</td>
            <td> $visitor_ad_info</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Will you be selling tickets to your event:</td>
            <td> $visitor_selling_ticket</td>
        </tr>
        <tr>
            <td>Event Type:</td>
            <td> $visitor_event</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>How many vehicles do you anticipate will park on the street:</td>
            <td> $visitor_vehicles</td>
        </tr>
        <tr>
            <td>How many vendors do you anticipate will service the event?</td>
            <td> $visitor_vendors</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Are you plannning to host a party?</td>
            <td> $visitor_party</td>
        </tr>
        <tr>
            <td>Are you expecting any visitors</td>
            <td>$visitor_expecting_visitor</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Will this be a seated or standing event</td>
            <td> $visitor_siting</td>
        </tr>
        <tr>
            <td>Do you have any accessibility requirements:?/td>
            <td> $visitor_req</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Number of parking spots needed</td>
            <td> $visitor_parking_spots</td>
        </tr>
        <tr>
            <td>Hours of event</td>
            <td>$visitor_event_hr</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Load in time</td>
            <td>$visitor_load_time</td>
        </tr>
        <tr>
            <td>Load out time</td>
            <td>$visitor_load_out</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Are you interested in any additonal services</td>
            <td>$visitor_ad_ser</td>
        </tr>
        <tr>
            <td>How will guests be arriving</td>
            <td>$visitor_guest_arrive</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Are you interested in any other services:</td>
            <td>$visitor_other_ser</td>
        </tr>
        <tr>
            <td>What is your total rental budget:</td>
            <td>$visitor_budget</td>
        </tr>
    </table>
</body>

</html>
    ";
    //   echo $rental_type_shortterm;
    //   print_r($mail);
    $mail->addCC($visitor_email);
} elseif (isset($rental_type_Longterm)) {

    if ($visitor_pets == "yes") {
        $show = "
    <tr >
        <td>No of pets:</td>
        <td>" . $visitor_no_pets . "</td>
    </tr>
    <tr style='background-color:#dddddd'>
        <td>Pet Size:</td>
        <td>" . $visitor_yes_pets . "</td>
    </tr>
    ";
    }

    if ($visitor_lt_other_info == "other") {
        $show = "
    <tr>
    <td>Are you interested in any additonal services</td>
    <td>" . $visitor_lt_other_info . "</td>
</tr>
";
}


if ($visitor_lt_city_information == "other") {
    $show = "
<tr>
<td>Information about other city/area</td>
<td>" . $visitor_lt_city_information . "</td>
</tr>
";
}





    $mail->Body = "
  <!DOCTYPE html>
<html>

<head>
</head>

<body>

    <table>
        <tr style='background-color:#dddddd'>
            <th style='border: 2px solid grey;'>Firstname</th>
            <th style='border: 2px solid grey;'>$visitor_name</th>
        </tr>
        <tr>
            <th style='border: 2px solid grey;'>Email</td>
            <th style='border: 2px solid grey;'>$visitor_email</td>
        </tr>
        <tr style='background-color:#dddddd'>
                <th style='border: 2px solid grey;'>Phone</td>
                <th style='border: 2px solid grey;'>
                
                 <img src='https://flagcdn.com/16x12/" . $av . ".png' class='flag_img'>+" . $code . " " . $phoneNumber . "</td>
            </tr>
        <tr>
            <th style='border: 2px solid grey;'>Social Media Handle (example: Facebook, Instagram, LinkedIn)</td>
            <th style='border: 2px solid grey;'>$visitor_insta</td>
        </tr>
        <tr style='background-color:#000000'>
            <th style='color: white;'>Question</th>
            <th style='color: white;'>Answer</th>
        </tr>
        <tr>
            <td>Rental Type</td>
            <td>" . $rental_type_Longterm . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Check In Date</td>
            <td>" . $visitor_start_date . "</td>
        </tr>
        <tr>
            <td>Check Out Date</td>
            <td>" . $visitor_end_date . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td># of Bedrooms Needed</td>
            <td>" . $visitor_beds . "</td>
        </tr>
        <tr>
            <td># of Bathrooms Needed</td>
            <td>" . $visitor_bathroom . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>What city/area are you intersted in</td>
            <td>" . $visitor_city . "</td>
        </tr>
        <tr>
            <td>What house style are you interested in</td>
            <td>" . $visitor_style . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>What city/area are you intersted in?</td>
            <td>" . $visitor_city . "</td>
        </tr>
       ".$show."
        <tr style='background-color:#dddddd'>
            <td>What house style are you interested in?</td>
            <td>" . $visitor_style . "</td>
        </tr>
        ".$show."
        <tr style='background-color:#dddddd'>
            <td>What is your total monthly rental budget?</td>
            <td>" . $visitor_budget . "</td>
        </tr>
        <tr>
            <td>Any additional information you wish to share</td>
            <td>" . $visitor_aditional_info . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>How did you hear about us</td>
            <td>" . $visitor_option . "</td>
        </tr>

        <tr style='background-color:#dddddd'>
            <td>Are you flexible with the check in/out date</td>
            <td>" . $visitor_flexible_date . "</td>
        </tr>
        <tr>
            <td>Are you flexible with the check in/out time</td>
            <td>" . $visitor_flex_time . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Do you have any accessibility requirements:?</td>
            <td>" . $visitor_requirements . "</td>
        </tr>
        <tr>
            <td>Number of parking spots needed</td>
            <td>" . $visitor_parking_sp . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Are you interested in any additonal services</td>
            <td>" . $visitor_service . "</td>
        </tr>
       ".$show."
        <tr style='background-color:#dddddd'>
            <td>Do you have any pets</td>
            <td>" . $visitor_pets . "</td> 
        </tr>
        " . $show . "
        <tr>
            <td>Will this be a house to live in or a company house/content creation property:</td>
            <td>" . $visitor_lt_content_creat . "</td>
        </tr>

    </table>
</body>

</html>
  ";
    $mail->addCC($visitor_email);
}



// 
// print_r(implode("\n", $headerFields));
//Add recipient
$mail->addAddress('developer559872@gmail.com');
// $mail->addCC("nikita.jeena@bonamisoftware.com");
//Finally send email
// if ($mail->send()) {
//   echo "Email Sent..!";
// } else {
//   echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
// }

if ($mail->send()) {
    echo "Email Sent..!";
    // die();
    setcookie("flag", "", time() - 3600);

    header('location:guest-form.php');
} else {
    echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
}


//Closing smtp connection
$mail->smtpClose();


// die();
  // $visitor_name = $_POST['vr-name'];
  // $visitor_email = $_POST['vr-email'];
  // $visitor_phone = $_POST['vr-phone'];
  // $visitor_message = $_POST['vr-message'];
  
 
  //   $headerFields = array(
  //   "From: $visitor_email",
  //   "Name: $visitor_name",
  //   "Number: $visitor_phone",
  //   "Message: $visitor_message"
  //   );
  //   print_r($headerFields);

	// $email_body = "You have received";
	
	
	// $to = "parker@essentialyfe.com";

  // $headers = "From: $visitor_email\r\n";

  // $headers .= "-- New Website Contact -- \r\n";

  // $a = mail($to,$header, implode("\r\n", $headerFields),$headers);
