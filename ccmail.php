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
include 'bat/phpmailer/PHPMailer.php';
include 'bat/phpmailer/SMTP.php';
include 'bat/phpmailer/Exception.php';
// //Define name spaces
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
    $visitor_email = $_POST['vr-mail'];
}

if (isset($_GET['email'])) {
    $email = $_GET['email'];
    mailer($email);
}


function mailer($email)
{


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

    // if (isset($rental_type_vacatoin)) {
    //     $mail->Body = $mailbody;
    //     // $mail->addCC($visitor_email);
    // }
    $mailbody = "<!DOCTYPE html>
    <!doctype html>
    <html lang='en-US'>
    
    <head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type' />
    <title>Thank You Template</title>
    <meta name='description' content='Reset Password Email Template.'>
    <style type='text/css'>
    a:hover {text-decoration: underline !important;}
    </style>
    </head>
    
    <body marginheight='0' topmargin='0' marginwidth='0' style='margin: 0px; background-color: #f2f3f8;' leftmargin='0'>
    <!--100% body table-->
    <table cellspacing='0' border='0' cellpadding='0' width='100%' bgcolor='#f2f3f8'
    style='@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;'>
    <tr>
    <td>
    <table style='background-color: #f2f3f8; max-width:670px;  margin:0 auto;' width='100%' border='0'
    align='center' cellpadding='0' cellspacing='0'>
    <tr>
       <td style='height:80px;'>&nbsp;</td>
   </tr>
   <tr>
   <td style='text-align:center;'>
   <div style='position: relative;'>
   <img width='60' src='https://www.essentialyfe.com/images/12345.png' title='logo' altstyle='height: 214px;width: 639px;overflow: hidden; '>
   </div>
   </td>
   </tr>
                                
 <tr>
<td>
<table width='95%' border='0' align='center' cellpadding='0' cellspacing='0'
style='max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);'>
<tr>
<td style='height:40px;'>&nbsp;</td>
</tr>
        <tr>
        <td style='padding:0 35px;'>
        <h1 style='color:#1e1e2d;font-weight:500;margin:0;font-size:32px;margin-top: 15px;font-family:Rubik,safont-weight: 600;'>Thank You For submitting your details</h1>
        <span
        style='display:inline-block;vertical-align:middle;margin: 15px 0 26px;border-bottom: 2px solid #00000134px;'></span>
        <p style='color:#455056; font-size:15px;line-height:24px; margin:0;'>
        We'll get back to you soon!
        </p>
        <p style='font-size:14px;color: rgb(0 187 255);line-height:18px;margin:0 0 0;margin-top:<strong>https://essentialyfe.com/</strong></p><br>
        <a href='https://essentialyfe.com/' title='logo' target='_blank'>
        <img width='60' src='https://essentialyfe.com/images/logo-default-450x37.png' title='logo' alt='logo'height: 74px; width: 269px;'>
        </a>
    </td>
    </tr>
    <tr>
    <td style='height:40px;'>&nbsp;</td>
    </tr>
    </table>
    </td>
    <tr>
    <td style='height:20px;'>&nbsp;</td>
    </tr>
    <tr>
    <td style='text-align:center;'>
    
    </td>
    </tr>
    <tr>
    <td style='height:80px;'>&nbsp;</td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    <!--/100% body table-->
    </body>
    
    </html>";
    $mail->Body = $mailbody;

    $res = $email;
    $mail->addAddress($res);
    //Add recipient

    if ($mail->send()) {
        echo "Email Sent..!";
        // die();
        setcookie("flag", "", time() - 3600);
        header("location:../guest-form.php");
    } else {
        echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
    }


    //Closing smtp connection
    $mail->smtpClose();
}



?>