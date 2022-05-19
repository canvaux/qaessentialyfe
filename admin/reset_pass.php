<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php
include('../config.php');
// if (isset($_SESSION['username'])) {
//     header("location:index.php");
//     exit();
// }

require('../bat/phpmailer/PHPMailer.php');
require('../bat/phpmailer/SMTP.php');
require('../bat/phpmailer/Exception.php');
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$email = $_POST['email'];
if (isset($email)) {
    $chknewsltr = mysqli_query($conn, "SELECT `email` FROM `register` WHERE `email` = '$email' ");

    if (mysqli_num_rows($chknewsltr) > 0) {
        session_start();
        $_SESSION['email'] = $email;

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
        $mail->Username = "essentialyfeleads@gmail.com";
        //Set gmail password
        $mail->Password = "Avi123!#$";
        //Email subject
        $mail->Subject = "Reset Password";
        //Set sender email 
        $mail->setFrom("essentialyfeleads@gmail.com");
        //Enable HTML
        $mail->isHTML(true);

        $mail->Body = "
        <!DOCTYPE html>
        <html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' lang='en'>

        <head>
        <title></title>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <meta name='viewport' content='width=device-width,initial-scale=1'>
        <!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
        <!--[if !mso]><!-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
        <!--<![endif]-->
        <style>
            * {
                box-sizing: border-box
            }

            body {
                margin: 0;
                padding: 0
            }

            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: inherit !important
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none
            }

            p {
                line-height: inherit
            }

            @media (max-width:620px) {
                .icons-inner {
                    text-align: center
                }

                .icons-inner td {
                    margin: 0 auto
                }

                .row-content {
                    width: 100% !important
                }

                .image_block img.big {
                    width: auto !important
                }

                .column .border {
                    display: none
                }

                table {
                    table-layout: fixed !important
                }

                .stack .column {
                    width: 100%;
                    display: block
                }
            }
        </style>
        </head>

        <body style='background-color:#d9dffa;margin:0;padding:0;-webkit-text-size-adjust:none;text-size-adjust:none'>
        <table class='nl-container' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation'
            style='mso-table-lspace:0;mso-table-rspace:0;background-color:#d9dffa'>
            <tbody>
                <tr>
                    <td>
                        <table class='row row-1' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                            role='presentation' style='mso-table-lspace:0;mso-table-rspace:0;background-color:#cfd6f4'>
                            <tbody>
                                <tr>
                                    <td>
                                        <table class='row-content stack' align='center' border='0' cellpadding='0'
                                            cellspacing='0' role='presentation'
                                            style='mso-table-lspace:0;mso-table-rspace:0;color:#000;width:600px'
                                            width='600'>
                                            <tbody>
                                                <tr>
                                                    <td class='column column-1' width='100%'
                                                        style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;padding-top:20px;padding-bottom:0;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                        <table class='image_block' width='100%' border='0' cellpadding='0'
                                                            cellspacing='0' role='presentation'
                                                            style='mso-table-lspace:0;mso-table-rspace:0'>
                                                            <tr>
                                                                <td style='width:100%;padding-right:0;padding-left:0'>
                                                                    <div align='center' style='line-height:10px'><img
                                                                            class='big'
                                                                            src='https://d1oco4z2z1fhwp.cloudfront.net/templates/default/3991/animated_header.gif'
                                                                            style='display:block;height:auto;border:0;width:600px;max-width:100%'
                                                                            width='600'
                                                                            alt='Card Header with Border and Shadow Animated'
                                                                            title='Card Header with Border and Shadow Animated'>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class='row row-2' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                            role='presentation'
                            style='mso-table-lspace:0;mso-table-rspace:0;background-color:#d9dffa;background-image:url(https://d1oco4z2z1fhwp.cloudfront.net/templates/default/3991/body_background_2.png);background-repeat:repeat;background-position:top center'>
                            <tbody>
                                <tr>
                                    <td>
                                        <table class='row-content stack' align='center' border='0' cellpadding='0'
                                            cellspacing='0' role='presentation'
                                            style='mso-table-lspace:0;mso-table-rspace:0;color:#000;width:600px'
                                            width='600'>
                                            <tbody>
                                                <tr>
                                                    <td class='column column-1' width='100%'
                                                        style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;padding-left:50px;padding-right:50px;padding-top:15px;padding-bottom:15px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                        <table class='text_block' width='100%' border='0' cellpadding='10'
                                                            cellspacing='0' role='presentation'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                            <tr>
                                                                <td>
                                                                    <div style='font-family:sans-serif'>
                                                                        <div class='txtTinyMce-wrapper'
                                                                            style='font-size:14px;mso-line-height-alt:16.8px;color:#506bec;line-height:1.2;font-family:Helvetica Neue,Helvetica,Arial,sans-serif'>
                                                                            <p style='margin:0;font-size:14px'><strong><span
                                                                                        style='font-size:38px;'>Forgot your
                                                                                        password?</span></strong></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table class='text_block' width='100%' border='0' cellpadding='10'
                                                            cellspacing='0' role='presentation'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                            <tr>
                                                                <td>
                                                                    <div style='font-family:sans-serif'>
                                                                        <div class='txtTinyMce-wrapper'
                                                                            style='font-size:14px;mso-line-height-alt:16.8px;color:#40507a;line-height:1.2;font-family:Helvetica Neue,Helvetica,Arial,sans-serif'>
                                                                            <p style='margin:0;font-size:14px'><span
                                                                                    style='font-size:16px;'>Hey, we received
                                                                                    a request to reset your password.</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table class='text_block' width='100%' border='0' cellpadding='10'
                                                            cellspacing='0' role='presentation'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                            <tr>
                                                                <td>
                                                                    <div style='font-family:sans-serif'>
                                                                        <div class='txtTinyMce-wrapper'
                                                                            style='font-size:14px;mso-line-height-alt:16.8px;color:#40507a;line-height:1.2;font-family:Helvetica Neue,Helvetica,Arial,sans-serif'>
                                                                            <p style='margin:0;font-size:14px'><span
                                                                                    style='font-size:16px;'>Let’s get you a
                                                                                    new one!</span></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table class='button_block' width='100%' border='0' cellpadding='0'
                                                            cellspacing='0' role='presentation'
                                                            style='mso-table-lspace:0;mso-table-rspace:0'>
                                                            <tr>
                                                                <td
                                                                    style='text-align:left;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px'>
                                                                    <!--[if mso]><v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='http://www.example.com/' style='height:48px;width:212px;v-text-anchor:middle;' arcsize='34%' stroke='false' fillcolor='#506bec'><w:anchorlock/><v:textbox inset='5px,0px,0px,0px'><center style='color:#ffffff; font-family:Arial, sans-serif; font-size:15px'><![endif]-->
                                                                    <a href='https://essentialyfe.com/admin/new_pass.php' target='_blank'
                                                                        style='text-decoration:none;display:inline-block;color:#ffffff;background-color:#506bec;border-radius:16px;width:auto;border-top:0px solid TRANSPARENT;font-weight:undefined;border-right:0px solid TRANSPARENT;border-bottom:0px solid TRANSPARENT;border-left:0px solid TRANSPARENT;padding-top:8px;padding-bottom:8px;font-family:Helvetica Neue, Helvetica, Arial, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;'><span
                                                                            style='padding-left:25px;padding-right:20px;font-size:15px;display:inline-block;letter-spacing:normal;'><span
                                                                                style='font-size: 16px; line-height: 2; word-break: break-word; mso-line-height-alt: 32px;'><span
                                                                                    style='font-size: 15px; line-height: 30px;'
                                                                                    data-mce-style='font-size: 15px; line-height: 30px;'><strong>RESET
                                                                                        MY
                                                                                        PASSWORD</strong></span></span></span></a>
                                                                    <!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table class='text_block' width='100%' border='0' cellpadding='10'
                                                            cellspacing='0' role='presentation'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                            <tr>
                                                                <td>
                                                                    <div style='font-family:sans-serif'>
                                                                        <div class='txtTinyMce-wrapper'
                                                                            style='font-size:14px;mso-line-height-alt:16.8px;color:#40507a;line-height:1.2;font-family:Helvetica Neue,Helvetica,Arial,sans-serif'>
                                                                            <p style='margin:0;font-size:14px'>
                                                                                <span style='font-size:14px;'>Having
                                                                                    trouble? <a
                                                                                        href='http://www.example.com/'
                                                                                        target='_blank'
                                                                                        title='@socialaccount'
                                                                                        style='text-decoration: none; color: #40507a;'
                                                                                        rel='noopener'><strong>@socialaccount</strong></a></span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table class='text_block' width='100%' border='0' cellpadding='10'
                                                            cellspacing='0' role='presentation'
                                                            style='mso-table-lspace:0;mso-table-rspace:0;word-break:break-word'>
                                                            <tr>
                                                                <td>
                                                                    <div style='font-family:sans-serif'>
                                                                        <div class='txtTinyMce-wrapper'
                                                                            style='font-size:14px;mso-line-height-alt:16.8px;color:#40507a;line-height:1.2;font-family:Helvetica Neue,Helvetica,Arial,sans-serif'>
                                                                            <p style='margin:0;font-size:14px'>Didn’t
                                                                                request a password reset? You can ignore
                                                                                this message.</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class='row row-3' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                            role='presentation' style='mso-table-lspace:0;mso-table-rspace:0'>
                            <tbody>
                                <tr>
                                    <td>
                                        <table class='row-content stack' align='center' border='0' cellpadding='0'
                                            cellspacing='0' role='presentation'
                                            style='mso-table-lspace:0;mso-table-rspace:0;color:#000;width:600px'
                                            width='600'>
                                            <tbody>
                                                <tr>
                                                    <td class='column column-1' width='100%'
                                                        style='mso-table-lspace:0;mso-table-rspace:0;font-weight:400;text-align:left;vertical-align:top;padding-top:0;padding-bottom:5px;border-top:0;border-right:0;border-bottom:0;border-left:0'>
                                                        <table class='image_block' width='100%' border='0' cellpadding='0'
                                                            cellspacing='0' role='presentation'
                                                            style='mso-table-lspace:0;mso-table-rspace:0'>
                                                            <tr>
                                                                <td style='width:100%;padding-right:0;padding-left:0'>
                                                                    <div align='center' style='line-height:10px'><img
                                                                            class='big'
                                                                            src='https://d1oco4z2z1fhwp.cloudfront.net/templates/default/3991/bottom_img.png'
                                                                            style='display:block;height:auto;border:0;width:600px;max-width:100%'
                                                                            width='600'
                                                                            alt='Card Bottom with Border and Shadow Image'
                                                                            title='Card Bottom with Border and Shadow Image'>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table><!-- End -->
        </body>

        </html>
        ";

        // $mail->addCC($email);
        $mail->addAddress($email);
        // $mail->send();
        //Finally send email
        if ($mail->send()) {
            echo '<script type="text/javascript">';
            echo ' alert("We sent you an email with reset link please check you Email")';
            echo '</script>';
            // echo 'We sent you an email with reset link please check you Email.';
        } else {
            echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
        }
        //Closing smtp connection
        $mail->smtpClose();
    } else {
        echo 'You are not a valid user';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <title>Essentialyfe.com|Login</title>
    <style>
        .login-box {
            /* background-image: url(./img/1.jpg); */
            background-color: #fff;
            background-size: cover;
            background-repeat: no-repeat;
            height: 300px !important;
        }

        body {
            background-image: url(./img/5.jpg);
            background-size: cover;
            background-color: #fff;
        }
    </style>

</head>

<body>
    <div class="container-fluid " style="margin-top: 350px;">
        <div class="row login-cont">
            <div class="col-5 mx-auto  login-box">
                <caption>
                    <h3 class="text-center mt-5">Forgot your password?</h3>
                    <p class="text-center">Please provide us your registered email</p>
                </caption>
                <div class="row">
                    <div class="col-6 mx-auto ">
                        <form method="POST">
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="enter your registered email">
                            </div>
                            <div class="form-group mt-4">
                                <button class="btn btn-primary w-100" name="submit">Reset Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<script>
    function showpass() {
        const showpass = document.querySelector('#password');
        if (showpass.type === "password") {
            showpass.type = "text"
        } else {
            showpass.type = "password";
        }
    }
</script>

</html>