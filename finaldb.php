<?php
$name = $phone = $mail = $date_in = $date_out = $time_in = $time_out = $check = $btn = $dateDiff = $total = $amount = "";

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

function dateDiffInDays($date1, $date2) { 
    
  // Calculating the difference in timestamps 
  $diff = strtotime($date2) - strtotime($date1); 

  // 1 day = 24 hours 
  // 24 * 60 * 60 = 86400 seconds 
  return abs(round($diff / 86400)); 
} 

$sql = "SELECT * FROM reserve_info ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $name =  $row["lastname"]." ".$row["firstname"];
    $phone = $row["phone"];
    $mail = $row["email"];
    $date_in = $row["date_in"];
    $date_out = $row["date_out"];
    $time_in = $row["time_in"];
    $time_out = $row["time_out"];
    $check = $row["checked_room"];
    // echo $check;
    
  }
} else {
  echo "0 results";
}
$dateDiff = dateDiffInDays($date_in, $date_out);

if ($check == "VVIP Room"){
    $total = 700*$dateDiff;
    $amount = 700;
}
else if ($check == "VIP Room"){
  $total = 500*$dateDiff;
  $amount = 500;
}
else if ($check == "Double Room"){
  $total = 350*$dateDiff;
  $amount = 350;
}
else if ($check == "Regular Room"){
  $total = 200*$dateDiff;
  $amount = 200;
}
else if ($check == "RSVP Room"){
  $total = 400*$dateDiff;
  $amount = 400;
}

$conn->close();

?>