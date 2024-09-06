<?php
error_reporting(E_ERROR | E_PARSE);
$fname = $lname = $addr1 = $addr2 = $city = $state = $zip = $phone = $email = $date_in = $time_in = 
$date_out = $time_out= $checked_room = $adult = $child = "";
$fnameErr = $lnameErr = $addr1Err = $cityErr = $stateErr = $zipErr = 
$phoneErr = $emailErr = $date_inErr = $time_inErr = $date_outErr = $time_outErr = $steric = "";

function function_alert($message) {   

  // Display the alert box 

  echo "<script>alert('$message');</script>";

} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $addr1 = test_input($_POST["addr1"]);
    $addr2 = test_input($_POST["addr2"]);
    $city = test_input($_POST["city"]);
    $state = test_input($_POST["state"]);
    $zip = test_input($_POST["zip"]);
    $phone = test_input($_POST["phone"]);
    $email = test_input($_POST["email"]);
    $date_in = test_input($_POST["dateIn"]);
    $time_in = test_input($_POST["timeIn"]);
    $date_out = test_input($_POST["dateOut"]);
    $time_out = test_input($_POST["timeOut"]);
    $checked_room = test_input($_POST["check"]);
    $adult = test_input($_POST["adult"]);
    $child = test_input($_POST["kids"]);
  }

  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["fname"])) {
        $fnameErr = "First name is required";
      } 
    if (empty($_POST["lname"])) {
        $lnameErr = "Last name is required";
      } 
    if (empty($_POST["addr1"])) {
        $addr1Err = "First Address is required";
      } 
    if (empty($_POST["city"])) {
        $cityErr = "City is required";
      } 
    if (empty($_POST["state"])) {
        $stateErr = "State is required";
      } 
    if (empty($_POST["zip"])) {
        $zipErr = "ZIP Code is required";
      } 
    if (empty($_POST["phone"])) {
        $phoneErr = "Telephone is required";
        $steric = "*";
      } 
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $steric = "*";
      } 
    if (empty($_POST["date-in"])) {
        $steric = "*";
      } 
    if (empty($_POST["time-in"])) {
        $steric = "*";
      } 
    if (empty($_POST["date-out"])) {
        $steric = "*";
      } 
    if (empty($_POST["time-out"])) {
        $steric = "*";
      } 


if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (empty($_POST["fname"]) && empty($_POST["lname"]) && empty($_POST["addr1"])){
      // Function call
      function_alert("Please Fill The Forms To Proceed"); 
  }
  else{
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "reservations";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS reservations";
    if ($conn->query($sql) === TRUE) {
      
    } else {
      echo "Error creating database: " . $conn->error;
    }
    mysqli_close($conn); 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    

    $sqlT1 = "CREATE TABLE IF NOT EXISTS reserve_info(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        Address_1 VARCHAR(500) NOT NULL,
        Address_2 VARCHAR(500) NOT NULL,
        city VARCHAR(30) NOT NULL,
        states VARCHAR(30) NOT NULL,
        zip VARCHAR(10) NOT NULL,
        phone VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        date_in VARCHAR(12) NOT NULL,
        time_in VARCHAR(12) NOT NULL,
        date_out VARCHAR(12) NOT NULL,
        time_out VARCHAR(12) NOT NULL,
        checked_room VARCHAR(20) NOT NULL,
        adult INT(5) NOT NULL,
        children INT(5) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    if ($conn->query($sqlT1) === TRUE) {
        
      } else {
        echo "Error creating table: " . $conn->error;
      }
    $sqlIn = "INSERT INTO reserve_info (firstname, lastname, Address_1, Address_2, city, states, zip, phone,
      email, date_in, time_in, date_out, time_out, checked_room, adult, children)
      VALUES ('$fname', '$lname', '$addr1', '$addr2', '$city', '$state', '$zip', 
      '$phone', '$email', '$date_in','$time_in', '$date_out', '$time_out', '$checked_room', '$adult', '$child' )";
      
    if ($conn->query($sqlIn) === TRUE) {
        // Function call
        header( "Location: final.php" );
      exit ;
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      mysqli_close($conn); 
  }
}

  }


?>