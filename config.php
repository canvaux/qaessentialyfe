<?php
error_reporting(E_ALL ^ E_NOTICE); 
// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=properties", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }
// if($conn){
//   echo "connected";
// }

// core PHP method
if( empty(session_id()) && !headers_sent()){
    session_start();
}
$conn = mysqli_connect("Localhost", "root", "", "ybuhphmy_properties");
// // if($conn){
// //   echo "yes";
// // }else{
// //   echo "no";
// }
// ?>