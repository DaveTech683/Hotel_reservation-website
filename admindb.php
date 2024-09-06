<?php
$id = $name = $addr1 = $addr2 = $city = $state = $zip = $phone = $mail = $date_in = $time_in = $date_out = $time_out
= $checked_room = $adult = $children = $reg_date = "";



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
$sql = "SELECT * FROM reserve_info WHERE checked_room = 'Double Room'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
    }
  } else {
    echo "0 results";
  }


?>