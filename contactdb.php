<?php
 // define variables and set to empty values
 $mailErr =  $nameErr = $messageErr = "";
 $mail = $name = $message = "";

 $name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $mail = test_input($_POST["mail"]);
  $message = test_input($_POST["message"]);
}
function function_alert($message) {   

    // Display the alert box 
  
    echo "<script>alert('$message');</script>";
  
  } 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["mail"])) {
     $mailErr = "Email is required";
   } 
   else {
     $mail = test_input($_POST["mail"]);
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
   }
 
   if (empty($_POST["name"])) {
        $nameErr = "Name is required";
   } 
   else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
     
   }
 
   if (empty($_POST["message"])) {
     $messageErr = "Message Is Required";
   } else {
     $message = test_input($_POST["message"]);
     // Function call
     function_alert("You Have Successfully Contected Us"); 
   }
 
 }



 
?>