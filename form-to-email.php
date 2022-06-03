<script>
    var now = new Date();
    document.cookie = `flag=; expires=${now.toUTCString()}`;
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

$vr_rental_type_vacatoin = $_POST['vacation'];
$ev_rental_type_event = $_POST['Event'];
$rental_type_production = $_POST['Production'];
$rental_type_shortterm = $_POST['shortterm'];
$lt_rental_type_Longterm = $_POST['Longterm'];
$test = "91";
$countarycode;
if (isset($vr_rental_type_vacatoin)) {
    $av = $_POST['vacation1'];

    $vr_visitor_name = $_POST['vr-name'];
    $visitor_email = $_POST['vr-mail'];
    $vr_visitor_phone = $_POST['vr-phone'];
    $vr_visitor_insta = $_POST['vr-insta'];
    $vr_visitor_option = $_POST['rental-type'];
    $vr_visitor_pets = $_POST['vr-pets'];
    $vr_visitor_party = $_POST['vr-party'];
    $vr_visitor_start_date = $_POST['vr-start-date'];
    $vr_visitor_end_date = $_POST['vr-end-date'];
    $vr_visitor_start_time = $_POST['vr-start-time'];
    $vr_visitor_end_time = $_POST['vr-end-time'];
    $vr_visitor_beds = $_POST['vr-bed'];
    $vr_visitor_bath = $_POST['vr-bath'];
    $vr_visitor_stay = $_POST['vr-stay'];
    $vr_visitor_city = $_POST['vr-city'];
    $vr_visitor_style = $_POST['vr-style'];
    $vr_visitor_price = $_POST['vr-hear'];
    $vr_visitor_services = $_POST['vr-serv'];
    $vr_visitor_req = $_POST['vr-req'];
    $vr_visitor_park = $_POST['vr-park'];
    $vr_visitor_flexible_date = $_POST['vr-flex-date'];
    $vr_visitor_flexible_time = $_POST['vr-flex-time'];
    $vr_visitor_attendees = $_POST['vr-attendees'];
    $vr_visitor_visits = $_POST['vr-visits'];
    $vr_visitor_find_us = $_POST['vr-hear-us'];
    $vr_visitor_aditional_info = $_POST['vr-info'];
    $vr_visitor_yes_pets = $_POST['vr-yes_pets'];
    $vr_visitor_yes_guest = $_POST['vr-yes_guest'];
    $vr_visitor_yes_service_home = $_POST['vr-yes_service_home'];
    $vr_visitor_yes_service_lxr = $_POST['vr-yes_service_lxr'];
    $vr_code = $_POST['txtPhone'];
    $phoneNumber = $_POST['txtPhone1'];
    $vr_visitor_vr_no_pets = $_POST['vr-no_pets'];
    $vr_visitor_vr_other_info = $_POST['vr-other_info'];
    $vr_visitor_vr_trip_perpose = $_POST['vr-trip_perpose'];
    $vr_visitor_vr_music = $_POST['vr-music'];
    $vr_visitor_vr_heat_pool = $_POST['vr-heat_pool'];
    $vr_visitor_vr_where_hear = $_POST['vr-where_hear'];
    $vr_visitor_vr_other_city = $_POST['vr-other_city'];
    $vr_visitor_vr_other_style = $_POST['vr-other_style'];
    $vr_visitor_filming = $_POST['vr-pro_film'];
    $empty;


} elseif (isset($ev_rental_type_event)) {
    $av = $_POST['vacation1'];
    $ev_visitor_name = $_POST['ev-name'];
    $visitor_email = $_POST['ev-mail'];
    $ev_visitor_phone = $_POST['textphone2'];
    $ev_visitor_insta = $_POST['ev-insta'];
    $ev_visitor_bath = $_POST['ev-bathroom'];
    $ev_visitor_start_date = $_POST['ev-start-date'];
    $ev_visitor_end_date = $_POST['ev-end-date'];
    $ev_visitor_start_time = $_POST['ev-start-time'];
    $ev_visitor_end_time = $_POST['ev-end-time'];
    $ev_visitor_beds = $_POST['ev-bed'];
    $ev_visitor_attendees = $_POST['ev-attendees'];
    $ev_visitor_city = $_POST['ev-city-2'];
    $ev_visitor_style = $_POST['ev-style-2'];
    $ev_visitor_ser_alco = $_POST['ev-flex-date'];
    $ev_visitor_sell_alco = $_POST['ev-sell-alco'];
    $ev_visitor_filiming = $_POST['ev-visits'];
    $ev_visitor_bguard = $_POST['ev-hear'];
    $ev_visitor_event_plan = $_POST['ev-event-plan'];
    $ev_visitor_furn = $_POST['ev-furn'];
    $ev_visitor_deco = $_POST['ev-deco'];
    $ev_visitor_part = $_POST['ev-parts'];
    $ev_visitor_park_sp = $_POST['ev-park-sp'];
    $ev_visitor_comp = $_POST['ev-company'];
    $ev_visitor_flexible_date = $_POST['ev-flex-date'];
    $ev_visitor_flexible_time = $_POST['ev-flex-time'];
    $ev_visitor_pets = $_POST['ev-pets'];
    $ev_visitor_find_us = $_POST['ev-hear-2'];
    $ev_visitor_minor = $_POST['ev-hear'];
    $ev_visitor_info = $_POST['ev-info'];
    $ev_visitor_ticket = $_POST['ev-tickets'];
    $ev_visitor_event_behalf = $_POST['ev-app_behalf'];
    $ev_visitor_gear_load = $_POST['ev-avg_ld_gear'];
    $ev_visitor_event_type = $_POST['ev-event_type'];
    $ev_visitor_veh = $_POST['ev-vehicles'];
    $ev_visitor_guest_arr = $_POST['ev-guest-arr'];
    $ev_visitor_seat = $_POST['ev-seated'];
    $ev_visitor_park = $_POST['ev-park-spot'];
    $ev_visitor_event_hr_start = $_POST['ev-hour-start'];
    $ev_visitor_event_hr_end = $_POST['ev-hour-end'];
    $ev_visitor_load_time_start = $_POST['ev-load-time-start'];
    $ev_visitor_load_time_end = $_POST['ev-load-time-end'];
    $ev_visitor_load_out_start = $_POST['ev-load-out-start'];
    $ev_visitor_load_out_end = $_POST['ev-load-out-end'];
    $ev_visitor_acc = $_POST['ev-acc'];
    $ev_visitor_serv = $_POST['ev-info'];
    $ev_visitor_vendor = $_POST['ev-vendors-anti'];
    $ev_visitor_price = $_POST['ev-rent'];
    $ev_visitor_serv = $_POST['ev-other-serv'];
    $code = $_POST['txtPhone'];
    $phoneNumber = $_POST['txtPhone2'];
    $ev_requiredServices = $_POST['ev-other_info'];
    $ev_visitor_pets_num = $_POST['ev-no_pets'];
    $ev_visitor_pet_size = $_POST['ev-yes_pets'];
    $ev_visitor_exotic_info = $_POST['ev-exotic_info'];
    $ev_visitor_exocit_animals = $_POST['ev-exocit_animals'];
    $ev_visitor_high_volt = $_POST['ev-high_volt'];
    $ev_visitor_load_serv = $_POST['ev-load_serv'];
    $ev_visitor_ev_where_hear = $_POST['ev-where_hear'];
    $ev_visitor_ev_info_city = $_POST['ev-info_city'];
    $ev_visitor_ev_info_house_style = $_POST['ev-info_house_style'];
    $ev_visitor_ev_event_ticketed = $_POST['ev-event_ticketed'];
    $ev_visitor_exocit_info = $_POST['ev-exotic_info'];
    $ev_visitor_ev_other_city = $_POST['ev-info_city'];
    $ev_visitor_vendor_next_day = $_POST['ev-vendors-pickup'];
    $datacontidion;

    if ($visitor_exocit_animals === "no") {
        $datacontidion = "no";
    } else {
        $datacontidion = $visitor_exotic_info;
    }


    // print_r('Yes');
} elseif (isset($rental_type_production)) {
    $av = $_POST['vacation1'];
    $fl_visitor_name = $_POST['f-name'];
    $visitor_email = $_POST['f-mail'];
    $fl_visitor_phone = $_POST['f-phone'];
    $fl_visitor_insta = $_POST['f-insta'];
    $fl_visitor_start_date = $_POST['f-start-date'];
    $fl_visitor_end_date = $_POST['f-end-date'];
    $fl_visitor_start_time = $_POST['f-start-time'];
    $fl_visitor_end_time = $_POST['f-end-time'];
    $fl_visitor_beds = $_POST['f-bed'];
    $fl_visitor_stay = $_POST['f-stay'];
    $fl_visitor_city = $_POST['f-city'];
    $fl_visitor_style = $_POST['f-style'];
    $fl_visitor_option = $_POST['f-hear'];
    $fl_visitor_flexible_time = $_POST['f-flex-time'];
    $fl_visitor_per = $_POST['f-flex-prermit'];
    $fl_visitor_company = $_POST['f-company'];
    $fl_visitor_parking_sp = $_POST['f-parking-space'];
    $fl_visitor_Guards = $_POST['f-guards'];
    $fl_visitor_furniture = $_POST['f-furniture'];
    $fl_visitor_flexible_date = $_POST['f-flex-date'];
    $fl_visitor_flexible_time_co = $_POST['f-flex-time'];
    $fl_visitor_pets = $_POST['f-pets'];
    $fl_visitor_find_us = $_POST['f-hear_us'];
    $fl_visitor_aditional_info = $_POST['f-info'];
    $fl_visitor_vehicles = $_POST['f-vehicles'];
    $fl_visitor_requirements = $_POST['f-requirements'];
    $fl_visitor_parking_sp = $_POST['f-parking'];
    $fl_visitor_production = $_POST['f-production'];
    $fl_visitor_attendees = $_POST['f-attendees'];
    $fl_code = $_POST['txtPhone'];
    $phoneNumber = $_POST['txtPhone3'];
    $fl_visitor_high_volt = $_POST['f-high_volt'];
    $fl_visitor_load_serv = $_POST['f-load_serv'];
    $fl_visitor_house_part = $_POST['f-house_part'];
    $fl_visitor_exocit_animals = $_POST['f-exocit_animals'];
    $fl_visitor_exotic_info = $_POST['f-exotic_info'];
    $fl_visitor_no_pets = $_POST['f-no_pets'];
    $fl_visitor_yes_pets = $_POST['f-yes_pets'];
    $fl_visitor_f_where_hear = $_POST['f-where_hear'];
    $fl_visitor_f_other_city = $_POST['f-other_city'];
    $fl_visitor_f_behalf = $_POST['f-app_behalf'];
    $fl_visitor_f_house_style = $_POST['f-house_style'];
    $fl_visitor_f_production_type = $_POST['f-production_type'];
    $fl_visitor_f_info_production = $_POST['f-info_production'];
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


} elseif (isset($lt_rental_type_Longterm)) {
    $av = $_POST['vacation1'];
    $lt_visitor_name = $_POST['lt-name'];
    $visitor_email = $_POST['lt-mail'];
    $lt_visitor_phone = $_POST['lt-phone'];
    $lt_visitor_insta = $_POST['lt-insta'];
    $lt_visitor_start_date = $_POST['lt-start-date'];
    $lt_visitor_end_date = $_POST['lt-end-date'];
    $lt_visitor_checkin_time = $_POST['lt-start-time'];
    $lt_visitor_checkout_time = $_POST['lt-end-time'];
    $lt_visitor_beds = $_POST['lt-bed'];
    $lt_visitor_bathroom = $_POST['lt-bathroom'];
    $lt_visitor_city = $_POST['lt-city-2'];
    $lt_visitor_other_city = $_POST['lt-city_information'];
    $lt_visitor_style = $_POST['lt-style-2'];
    $lt_visitor_other_style = $_POST['lt-style_information'];
    $lt_visitor_flexible_date = $_POST['lt-flex-date'];
    $lt_visitor_felx_time =$_POST['lt-flex-time'];
    $lt_visitor_option = $_POST['lt-hear-2'];
    $lt_visitor_aditional_info = $_POST['lt-info'];
    $lt_visitor_vehicles = $_POST['lt-vehicles'];
    $lt_visitor_vendor = $_POST['lt-vendors'];
    $lt_visitor_requirements = $_POST['lt-requirements'];
    $lt_visitor_parking_sp = $_POST['lt-parking'];
    $lt_visitor_pets = $_POST['lt-pets'];
    $lt_visitor_service = $_POST['lt-hear-4'];
    $lt_visitor_budget = $_POST['lt-hear-5'];
    $lt_visitor_attendees = $_POST['lt-attendees'];
    $lt_visitor_number_of_pets = $_POST['lt-no_pets'];
    $lt_Visitor_pet_size = $_POST['lt-yes_pets'];
    $lt_code = $_POST['txtPhone'];
    $phoneNumber = $_POST['txtPhone5'];
    $lt_visitor_content_create = $_POST['lt-content_creat'];
    $lt_visitor_additional_other_info = $_POST['lt-other_info'];
    $lt_visitor_where_hear =$_POST['lt-where_hear_us'];
  
    // $visitor_lt_other_info = $_POST['lt-other_info'];

}
?>
<?php
global $countarycode;
$countarycode = '<script> document.write(iso); </script>';

$data = "<img src='$countarycode'  class='flag_img'>";

//mailbody start

$mailbody = "
<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <table>
        <tr style='background-color:#dddddd'>
            <th style='border: 2px solid grey;'>Firstname</th>
            <th style='border: 2px solid grey;'>$vr_visitor_name</th>
        </tr>
        <tr>
            <th style='border: 2px solid grey;'>Email</td>
            <th style='border: 2px solid grey;'>$visitor_email</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <th style='border: 2px solid grey;'>Phone</td>
            <th style='border: 2px solid grey;'>

                <img src='https://flagcdn.com/16x12/" . $av . ".png' class='flag_img'>+" . $vr_code . " " . $phoneNumber
                . "
                </td>
        </tr>
        <tr>
            <th style='border: 2px solid grey;'>Social Media Handle (example: Facebook, Instagram, LinkedIn)</td>
            <th style='border: 2px solid grey;'>$vr_visitor_insta</td>
        </tr>
        <tr style='background-color:#000000'>
            <th style='color: white;'>Question</th>
            <th style='color: white;'>Answer</th>
        </tr>
        <tr>
            <td>Rental Type</td>
            <td>" . $vr_rental_type_vacatoin . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Check-In date</td>
            <td>" . $vr_visitor_start_date . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Check-out date</td>
            <td>" . $vr_visitor_end_date . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Check In Time</td>
            <td>" . $vr_visitor_start_time . "</td>
        </tr>
        <tr>
            <td>Check Out Time</td>
            <td>" . $vr_visitor_end_time . "</td>
        </tr>
        <tr>
            <td>Are you flexible with the check in/out date?</td>
            <td>" . $vr_visitor_flexible_date . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Are you flexible with the check in/out time?</td>
            <td>" . $vr_visitor_flexible_time . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Number of Bedrooms Needed?</td>
            <td>" . $vr_visitor_beds . "</td>
        </tr>
        <tr>
            <td>Number of Bathrooms Needed?</td>
            <td>" . $vr_visitor_bath . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Are you bringing any pets?</td>
            <td>" . $vr_visitor_pets . "</td>
        </tr>
        <tr>
            <td>Number of pets?</td>
            <td>" . $vr_visitor_vr_no_pets . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Weight of pets?</td>
            <td>" . $vr_visitor_yes_pets . "</td>
        </tr>
        <tr>
            <td>Are you planning on hosting a party or a large gathering</td>
            <td>" . $vr_visitor_party . "</td>
        </tr>
        <tr>
            <td>What city/area are you intersted in?</td>
            <td>" . $vr_visitor_city . "</td>
        </tr>
        <tr>
            <td>What other city/area are you intersted in?</td>
            <td>" . $vr_visitor_vr_other_city . "</td>
        </tr>

        <tr>
            <td>What house style are you interested in?</td>
            <td>" . $vr_visitor_style . "</td>
        </tr>
        <tr>
            <td>What other house style are you interested in?</td>
            <td>" . $vr_visitor_vr_other_style . "</td>
        </tr>
        <tr>
            <td>What is your total monthly rental budget?</td>
            <td>" . $vr_visitor_price . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Are you interested in any additonal services?</td>
            <td>" . $vr_visitor_services . "</td>
        </tr>
        <tr>
            <td>Please fill your required services</td>
            <td>" . $vr_visitor_vr_other_info. "</td>
        </tr>
        <tr>
            <td>Do you have any accessibility requirements?</td>
            <td>" . $vr_visitor_req . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Number of parking spots needed?</td>
            <td>" . $vr_visitor_park . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Number of Guests Staying Over?</td>
            <td>" . $vr_visitor_stay . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>What is the main purpose of your trip?</td>
            <td>" . $vr_visitor_vr_trip_perpose . "</td>
        </tr>
        <tr>
            <td>Will you be having music in the backyard?</td>
            <td>" . $vr_visitor_vr_music . "</td>
        </tr>
        <tr>
            <td>Would you like to heat up the pool & hot tub</td>
            <td>".$vr_visitor_vr_heat_pool ."</td>
        </tr>
        <tr>
            <td>Are you expecting any visitors?</td>
            <td>" . $vr_visitor_visits . "</td>
        </tr>
        <tr>
            <td>Number of visitors?</td>
            <td>" . $vr_visitor_yes_guest . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>How did you hear about us?</td>
            <td>" . $vr_visitor_find_us . "</td>
        </tr>
        <tr>
            <td>where did you here about us </td>
            <td>".$vr_visitor_vr_where_hear ."</td>
        </tr>
        <tr>
            <td>Will you be having any professional filming</td>
            <td>" . $vr_visitor_filming . "</td>
        </tr>
        <tr style='background-color:#dddddd'>
            <td>Any additional information you wish to share?</td>
            <td>" . $vr_visitor_aditional_info . "</td>
        </tr>
    </table>

</body>


</html>
";

?>


<?php

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
if (isset($vr_rental_type_vacatoin)) {
    $mail->Body = $mailbody;

    // $mail->addCC($vr_visitor_email);
   
} elseif (isset($ev_rental_type_event)) {
    if ($ev_visitor_pets == "yes") {
        $show = "
        <tr>
        <td>No of pets:</td>
        <td>" . $ev_visitor_pets_num . "</td>
    </tr>
    <tr style='background-color:#dddddd'>
    <td>Pet Size:</td>
    <td>" . $ev_visitor_pet_size . "</td>
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
                <th style='border: 2px solid grey;'>$ev_visitor_name</th>
            </tr>
            <tr>
                <th style='border: 2px solid grey;'>Email</td>
                    <th style='border: 2px solid grey;'>$visitor_email</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td style='border: 2px solid grey;'>Phone</td>
                <td>
                <img src='https://flagcdn.com/16x12/" . $av . ".png' class='flag_img'>+" . $fl_code . " " . $phoneNumber . "</td>
            </tr>
            <tr>
                <th style='border: 2px solid grey;'>Social Media Handle (example: Facebook, Instagram, LinkedIn)</td>
                    <th style='border: 2px solid grey;'>$ev_visitor_insta</td>
            </tr>
            <tr style='background-color:#000000'>
                <th style='color: white;'>Question</th>
                <th style='color: white;'>Answer</th>
            </tr>
            <tr>
            <td>Rental Type</td>
            <td>" . $ev_rental_type_event . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Check-In date</td>
                <td>" . $ev_visitor_start_date . "</td>
            </tr>
            <tr>
                <td>Check-out date</td>
                <td>" . $ev_visitor_end_date . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Check In Time</td>
                <td>" . $ev_visitor_start_time . "</td>
            </tr>
            <tr>
                <td>Check Out Time</td>
                <td>" . $ev_visitor_end_time . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Are you flexible with the check in/out date?</td>
                <td>" . $ev_visitor_flexible_date . "</td>
            </tr>
            <tr>
                <td>Are you flexible with the check in/out time?</td>
                <td>" . $ev_visitor_flexible_time . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Number of Bedrooms Needed?</td>
                <td>" . $ev_visitor_beds . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td># of Bathrooms Needed</td>
                <td>" . $ev_visitor_bath . "</td>
            </tr>
            <tr>
                <td># of Expected Attendees? (including staff)</td>
                <td>" . $ev_visitor_attendees . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>What city/area are you intersted in?</td>
                <td>" . $ev_visitor_city . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>What other city/area are you intersted in?</td>
                <td>" . $ev_visitor_ev_info_city . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>What house style are you interested in?</td>
                <td>" . $ev_visitor_style . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>What other house style are you interested in?</td>
                <td>" . $ev_visitor_ev_info_house_style . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Will you be serving alcohol?</td>
                <td>" . $ev_visitor_ser_alco . "</td>
            </tr>
            <tr>
                <td>Will you be selling alcohol?</td>
                <td>" . $ev_visitor_sell_alco . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Will you be having any proffesional filming?</td>
                <td>" . $ev_visitor_filiming . "</td>
            </tr>
            <tr>
                <td>Are you applying on behalf of your self?</td>
                <td>" . $ev_visitor_event_behalf . "</td>
            </tr>
            <tr>
                <td>Will you have any bodyguards during your rental?</td>
                <td>" . $ev_visitor_bguard . "</td>
            </tr>
            <tr>
                <td>Please describe the event</td>
                <td>" . $ev_visitor_event_plan . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Will this be a ticketed event:</td>
                <td>" . $ev_visitor_ev_event_ticketed . "</td>
            </tr>
    
            <tr style='background-color:#dddddd'>
                <td>Will you need to move any of the furniture?</td>
                <td>" . $ev_visitor_furn . "</td>
            </tr>
            <tr>
                <td>Will you be adding any decorations?</td>
                <td>" . $ev_visitor_deco . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Parts of the house to be used?</td>
                <td>" . $ev_visitor_part . "</td>
            </tr>
            <tr>
                <td>Do you need additional parking space?</td>
                <td>" . $ev_visitor_park_sp . "</td>
            </tr>
    
            <tr style='background-color:#dddddd'>
                <td>Will you be having any high voltage lighting equipment:</td>
                <td>" . $ev_visitor_high_volt . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Are you bringing any pets?</td>
                <td>" . $ev_visitor_pets . "</td>
            </tr>
    
            ".$show."
            <tr style='background-color:#dddddd'>
                <td>Are you bringing any exotic animals:</td>
                <td>" . $ev_visitor_exocit_animals . "</td>
            </tr>
    
            <tr style='background-color:#dddddd'>
                <td>Please describe exotic animals</td>
                <td>" . $ev_visitor_exocit_info . "</td>
            </tr>
            <tr>
                <td>Will you have any minors?</td>
                <td>" . $ev_visitor_minor . "</td>
            </tr>
    
            <tr style='background-color:#dddddd'>
                <td>Any additional information you wish to share?</td>
                <td>" . $ev_visitor_info . "</td>
            </tr>
            <tr>
                <td>Will you be selling tickets to your event?</td>
                <td>" . $ev_visitor_ticket . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Event Type?</td>
                <td>" . $ev_visitor_event_type . "</td>
            </tr>
            <tr>
                <td>How will guests be arriving?</td>
                <td>" . $ev_visitor_guest_arr . "</td>
            </tr>
            <tr>
                <td>Will this be a seated or standing event?</td>
                <td>" . $ev_visitor_seat . "</td>
            </tr>
    
            <tr style='background-color:#dddddd'>
                <td>Load in time start</td>
                <td>" . $ev_visitor_load_time_start . "</td>
            </tr>
            <tr>
                <td>load in time end</td>
                <td>" . $ev_visitor_load_time_end . "</td>
            </tr>
            <tr>
                <td>wrap up time start</td>
                <td>" . $ev_visitor_load_out_start . "</td>
            </tr>
            <tr>
                <td>wrap up time end</td>
                <td>" . $ev_visitor_load_out_end . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Hours of event start</td>
                <td>" . $ev_visitor_event_hr_start . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Hours of event end</td>
                <td>" . $ev_visitor_event_hr_end . "</td>
            </tr>
            <tr>
                <td>Number of parking spots needed?</td>
                <td>" . $ev_visitor_park . "</td>
            </tr>
            <tr>
                <td>How many vehicles do you anticipate will park on the street</td>
                <td>" .  $ev_visitor_veh . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Do you have any accessibility requirements?</td>
                <td>" . $ev_visitor_acc . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>How many vendors do you anticipate will service the event?</td>
                <td>" . $ev_visitor_vendor . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Please describe the average gear load-in?</td>
                <td>" . $ev_visitor_gear_load . "</td>
            </tr>
    
            <tr>
                <td>Do you need lodging services/ stay over night:</td>
                <td>" . $ev_visitor_load_serv . "</td>
            </tr>
    
            <tr style='background-color:#dddddd'>
                <td>Are you interested in any additonal services?</td>
                <td>" . $ev_visitor_serv . "</td>
            </tr>
            <tr>
                <td>Please Fill your required services?</td>
                <td>" . $ev_requiredServices . "</td>
            </tr>
            <td>will you need next day vendor pickups?</td>
            <td>" . $ev_visitor_vendor_next_day. "</td>
            </tr>
            <tr>
                <td>What is your total monthly rental budget?</td>
                <td>" . $ev_visitor_price . "</td>
            </tr>
    
            <tr>
                <td>How did you hear about us?</td>
                <td>" . $ev_visitor_find_us . "</td>
            </tr>
    
            <tr>
                <td>Where did you hear about us</td>
                <td>" . $ev_visitor_ev_where_hear . "</td>
            </tr>
    
        </table>
    
    </body>
    
    </html>
";

    // $mail->addCC($ev_visitor_email);
} elseif (isset($rental_type_production)) {
    if ($fl_visitor_pets == "yes") {
        $show = "
    <tr>
        <td>No of pets:</td>
        <td>" . $fl_visitor_no_pets . "</td>
    </tr>
    <tr style='background-color:#dddddd'>
        <td>Pet Size:</td>
        <td>" . $fl_visitor_yes_pets . "</td>
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
                <th style='border: 2px solid grey;'>$fl_visitor_name</th>
            </tr>
            <tr>
                <th style='border: 2px solid grey;'>Email</td>
                    <th style='border: 2px solid grey;'>$visitor_email</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <th style='border: 2px solid grey;'>Phone</td>
                    <th style='border: 2px solid grey;'>
    
                        <img src='https://flagcdn.com/16x12/" . $av . ".png' class='flag_img'>+" . $fl_code . " " . $phoneNumber . "</td>
            </tr>
            <tr>
                <th style='border: 2px solid grey;'>Social Media Handle (example: Facebook, Instagram, LinkedIn)</td>
                    <th style='border: 2px solid grey;'>$fl_visitor_insta</td>
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
                <td>" . $fl_visitor_start_date . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Check Out Date</td>
                <td>" . $fl_visitor_end_date . "</td>
            </tr>
            <tr>
                <td>Check In Time</td>
                <td>" . $fl_visitor_start_time . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Check Out Time</td>
                <td>" . $fl_visitor_end_time . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Are you flexible with the check in/out date</td>
                <td>" . $fl_visitor_flexible_date . "</td>
            </tr>
            <tr>
                <td>Are you flexible with the check in/out time</td>
                <td>" . $fl_visitor_flexible_time_co . "</td>
            </tr>
            <tr>
                <td># of Bedrooms Needed</td>
                <td>" . $fl_visitor_beds . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td># of expected staff + Talent</td>
                <td>" . $fl_visitor_stay . "</td>
            </tr>
            <tr>
                <td>What city/area are you intersted in?</td>
                <td>" . $fl_visitor_city . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Information about the other city/area?</td>
                <td>" . $fl_visitor_f_other_city . "</td>
            </tr>
    
            <tr>
                <td>What house style are you interested in?</td>
                <td>" . $fl_visitor_style . "</td>
            </tr>
            <tr>
                <td>What other house style are you interested in?</td>
                <td>" . $fl_visitor_f_house_style . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Will you be having any high voltage lighting equipment:</td>
                <td>" . $fl_visitor_high_volt . "</td>
            </tr>
    
            <tr>
                <td> Do you need lodging services/ stay over night:</td>
                <td>" . $fl_visitor_load_serv . "</td>
            </tr>
            <tr>
                <td>What is your total monthly rental budget?</td>
                <td>" . $fl_visitor_option . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Will you be applying for a permit</td>
                <td>" . $fl_visitor_per . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Production Type</td>
                <td>" . $fl_visitor_production . "</td>
            </tr>
            <tr>
                <td>Production type other information:</td>
                <td>" . $fl_visitor_f_info_production . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Parts of the house needed to be used:</td>
                <td>" . $fl_visitor_house_part . "</td>
            </tr>
    
            <tr>
                <td>Company Name</td>
                <td>" . $fl_visitor_company . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Do you need additional parking space?</td>
                <td>" . $fl_visitor_parking_sp . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Are you bringing any pets</td>
                <td>" . $fl_visitor_pets . "</td>
            </tr>
            ".$show."
            <tr>
                <td>How did you hear about us</td>
                <td>" . $fl_visitor_find_us . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Where did you hear about us</td>
                <td>" . $fl_visitor_f_where_hear . "</td>
            </tr>
            <tr>
                <td>Are you bringing any exotic animals:</td>
                <td>" . $fl_visitor_exocit_animals . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Please describe about exotic animals:</td>
                <td>" . $fl_visitor_exotic_info . "</td>
            </tr>
    
            <tr>
                <td>Any additional information you wish to share?</td>
                <td>" . $fl_visitor_aditional_info . "</td>
            </tr>
    
            <tr>
                <td>Number of parking spots needed</td>
                <td>" . $fl_visitor_parking_sp . "</td>
            </tr>
    
            <tr style='background-color:#dddddd'>
                <td>Do you have any special accessibility requirements</td>
                <td>" . $fl_visitor_requirements . "</td>
            </tr>
    
            <tr>
                <td>Are you applying on behalf of yourself?</td>
                <td>" . $fl_visitor_f_behalf . "</td>
            </tr>
            <tr>
                <td>Will you have any bodyguards during your rental?</td>
                <td>" . $fl_visitor_Guards . "</td>
            </tr>
    
        </table>
    
    </body>
    
    </html>
";

    // $mail->addCC($fl_visitor_email);
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
         <img src='https://flagcdn.com/16x12/" . $av . ".png' class='flag_img'>+" . $lt_code . " " . $phoneNumber . "</td>
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
    // $mail->addCC($visitor_email);
} elseif (isset($lt_rental_type_Longterm)) {

    if ($visitor_pets == "yes") {
        $show = "
    <tr >
        <td>No of pets:</td>
        <td>" . $lt_visitor_no_pets . "</td>
    </tr>
    <tr style='background-color:#dddddd'>
        <td>Pet Size:</td>
        <td>" . $lt_visitor_yes_pets . "</td>
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
                <th style='border: 2px solid grey;'>$lt_visitor_name</th>
            </tr>
            <tr>
                <th style='border: 2px solid grey;'>Email</td>
                <th style='border: 2px solid grey;'>$visitor_email</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <th style='border: 2px solid grey;'>Phone</td>
                <th style='border: 2px solid grey;'>
    
                    <img src='https://flagcdn.com/16x12/" . $av . ".png' class='flag_img'>+" . $lt_code . " " . $phoneNumber .
                    "
                    </td>
            </tr>
            <tr>
                <th style='border: 2px solid grey;'>Instagram</td>
                <th style='border: 2px solid grey;'>lt_$visitor_insta</td>
            </tr>
            <tr style='background-color:#000000'>
                <th style='color: white;'>Question</th>
                <th style='color: white;'>Answer</th>
            </tr>
            <tr>
                <td>Rental Type</td>
                <td>" . $lt_rental_type_Longterm . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Check In Date</td>
                <td>" . $lt_visitor_start_date . "</td>
            </tr>
            <tr>
                <td>Check Out Date</td>
                <td>" . $lt_visitor_end_date . "</td>
            </tr>
            <tr>
                <td>Check in Time</td>
                <td>".$lt_visitor_checkin_time."</td>
            </tr>
            <tr>
                <td>check out time</td>
                <td>".$lt_visitor_checkout_time."</td>
            </tr>
    
            <tr>
                <td>Are you flexible with the check in/out date</td>
                <td>" . $lt_visitor_flexible_date . "</td>
            </tr>
            <tr>
                <td>Are you flexible with the check in/out time</td>
                <td>".$lt_visitor_felx_time."</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td># of Bedrooms Needed</td>
                <td>" . $lt_visitor_beds . "</td>
            </tr>
            <tr>
                <td># of Bathrooms Needed</td>
                <td>" . $lt_visitor_bathroom . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>What city/area are you intersted in</td>
                <td>" . $lt_visitor_city . "</td>
            </tr>
            <tr>
                <td>other choosen city</td>
                <td>".$lt_visitor_other_city."</td>
            </tr>
            <tr>
                <td>What house style are you interested in</td>
                <td>" . $lt_visitor_style . "</td>
            </tr>
            <tr>
                <td>What other house style are you interested in?</td>
                <td>".$lt_visitor_other_style."</td>
            </tr>
            <tr>
                <td>Will this be a house to live in or a company house/content creation property</td>
                <td>".$lt_visitor_content_create."</td>
            </tr>
    
    
            <tr style='background-color:#dddddd'>
                <td>How did you hear about us</td>
                <td>" . $lt_visitor_option . "</td>
            </tr>
            <tr>
                <td>where did you here about us </td>
                <td>".$lt_visitor_where_hear."</td>
            </tr>
            <tr>
                <td># of guest staying over</td>
                <td>".$lt_visitor_vendor."</td>
            </tr>
            <tr>
                <td>Any additional information you wish to share</td>
                <td>" . $lt_visitor_aditional_info . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Do you have any accessibility requirements:?</td>
                <td>" . $lt_visitor_requirements . "</td>
            </tr>
    
            <tr>
                <td>Do you have any pets</td>
                <td>" . $lt_visitor_pets . "</td>
            </tr>
            <tr>
                <td>Number of pets</td>
                <td>".$lt_visitor_number_of_pets."</td>
            </tr>
            <tr>
                <td>pet size</td>
                <td>".$lt_Visitor_pet_size."</td>
            </tr>
            <tr>
                <td>Number of parking spots needed</td>
                <td>" . $lt_visitor_parking_sp . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>What is your total monthly rental budget?</td>
                <td>" . $lt_visitor_budget . "</td>
            </tr>
            <tr style='background-color:#dddddd'>
                <td>Are you interested in any additonal services</td>
                <td>" . $lt_visitor_service . "</td>
            </tr>
    
            <tr>
                <td>Please fill your required services</td>
                <td>".$lt_visitor_additional_other_info."</td>
            </tr>
        </table>
    </body>
    </html>";

    // $mail->addCC($lt_visitor_email);
}


$mail->addAddress('developer559872@gmail.com');

//Finally send email

 
    if ($mail->send()) {
        echo "Email Sent..!";
        // die();
        setcookie("flag", "", time() - 3600);
        // header('location: guest-form.php');
        // mailer($visitor_email);
        header("location: ccmail.php/?email=$visitor_email");
    } else {
        echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
    } 


//Closing smtp connection
$mail->smtpClose();
