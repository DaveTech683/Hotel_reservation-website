<?php

$name = $uname = $passwording = $mail = $phone = $role = "";
$nameErr = $unameErr = $passwordErr = $mailErr = $phoneErr = $roleErr = $steric = "";

function function_alert($message) {   

  // Display the alert box 

  echo "<script>alert('$message');</script>";

} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $uname = test_input($_POST["uname"]);
    $passwording = test_input($_POST["passwording"]);
    $mail = test_input($_POST["mail"]);
    $phone = test_input($_POST["phone"]);
    $role = test_input($_POST["role"]);
  }

  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])) {
        $nameErr = "Full name is required";
        $steric = "*";
      } 
    if (empty($_POST["uname"])) {
        $unameErr = "Unique name is required";
      } 
    if (empty($_POST["passwording"])) {
        $passwordErr = "Password is required";
      } 
    if (empty($_POST["mail"])) {
        $mailErr = "Email is required";
      } 
    if (empty($_POST["phone"])) {
        $phoneErr = "Telephone is required";
      } 
    if (empty($_POST["role"])) {
        $roleErr = "Staff Role is required";
      } 
    

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (empty($_POST["name"]) && empty($_POST["uname"]) && empty($_POST["passwording"])){
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
    

    $sqlT1 = "CREATE TABLE IF NOT EXISTS auth(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        names VARCHAR(30) NOT NULL,
        uniquename VARCHAR(30) NOT NULL,
        passwords VARCHAR(50) NOT NULL,
        email VARCHAR(30) NOT NULL,
        telephone VARCHAR(30) NOT NULL,
        roles VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    if ($conn->query($sqlT1) === TRUE) {
        
      } else {
        echo "Error creating table: " . $conn->error;
      }
    $sqlIn = "INSERT INTO auth (names, uniquename, passwords, email, telephone, roles)
      VALUES ('$name', '$uname', '$passwording', '$mail', '$phone', '$role')";
      
    if ($conn->query($sqlIn) === TRUE) {
        // Function call
        function_alert("Authorization Successful"); 
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      mysqli_close($conn); 
  }
}
  }


?>