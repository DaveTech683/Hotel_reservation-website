<?php

$unique = $pass = $mailing = "";
$steric = $uniqueErr = $passErr = $mailingErr = "";



function function_alert($message) {   

  // Display the alert box 

  echo "<script>alert('$message');</script>";

} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $unique = test_input($_POST["unique"]);
    $pass = test_input($_POST["pass"]);
    $mailing = test_input($_POST["mailing"]);
  }

  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["unique"])) {
      $roleErr = "Unique name is required";
      $steric = "*";
    } 
    if (empty($_POST["pass"])) {
      $roleErr = "Password is required";
    } 
    if (empty($_POST["maiing"])) {
      $roleErr = "Email is required";
    } 
    
  }

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["unique"]) && empty($_POST["pass"]) && empty($_POST["mailing"])){
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
        
  
        $sql = "SELECT * FROM auth";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $uniques =  $row["uniquename"];
            $passes = $row["passwords"];
            $mails = $row["email"];
                       
          }
        } else {
          echo "0 results";
        }
        if ($unique == $uniques && $pass == $passes && $mailing == $mails){
          header( "Location: admin.php" );
          exit ;
        }else{
            function_alert("Error Login in... Review Your Details");
        }


        mysqli_close($conn); 
    }
  }


?>