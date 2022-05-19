<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php 
require('../config.php');
// $_SESSION['email'] = $email;
session_start();
$password = $_POST['password'];
$confirm_pass = $_POST['confirm_pass'];
if(isset($password)){
    if($password === $confirm_pass && isset($confirm_pass)){
       $confirm_pass= mysqli_real_escape_string($conn, $confirm_pass);

    $sql = "
    UPDATE register SET password = '".$confirm_pass."' WHERE email = '".$_SESSION['email']."'
    ";
    if ($conn->query($sql) === TRUE) {
        session_unset();
        echo 'Please logIn Again';
        header('location: index.php');
    }
    
    }else{
    
        echo '!Confirm Password did not match.';
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
            height: 330px !important;
        }

        body {
            background-image: url(./img/3.jpg);
            background-size: cover;
            background-color: #fff;
        }
    </style>

</head>

<body>
    <div class="container-fluid " style="margin-top: 350px;">
        <div class="row login-cont">
            <div class="col-5 mx-auto  login-box">
                <caption >
                <h3 class="text-center mt-5">Enter your new Password</h3>
                <p class="text-center">Please provide us a new password</p>
            </caption>
                <div class="row">
                    <div class="col-6 mx-auto ">
                        <form method="POST">
                            <div class="form-group">
                                <input type="password" id="password" name="password" class="form-control" placeholder="enter your new password" >
                            </div>
                            <div class="form-group mt-3">
                                <input type="password" name="confirm_pass" id="confirm_pass" placeholder="confirm password" class="form-control">
                            </div>
                            <div class="form-group mt-4">
                                <button class="btn btn-primary w-100" name="save"  >Save</button>
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