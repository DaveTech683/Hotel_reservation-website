<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin.css">
    <title>Administration</title>
</head>
<body>
    <?php
    include("admindb.php")
    ?>
    <div class="all">
        <nav> 
            <div class="side-bar">
                <div class="logo">
                    <h1>Drums Suite</h1>
                </div>
                <div class="nav-btn">
                    <button class="report-btn" onclick="window.location.href='admin.php'"><i class="fa fa-home"></i>Dashboard</a> </button>
                    <button class="analys-btn" onclick="window.location.href='auth.php'"> <i class="fa fa-bolt"></i> Authorization</button>
                    <button class="analys-btn" onclick="window.location.href='login.php'"> <i class="fa fa-bolt"></i> Log Out</button>
                </div>
            </div>
            <p>@Xterra</p>
        </nav>
        <section id="report">
           <div class="head-content">
                <h3>ADMIN >>></h3><p>Dashboard</p>
           </div>
           <div class="head-review">
            <div class="regular">
                <h1>Regular Rooms</h1>
                <p>There Are 4 Regular Rooms Reservations... <br> Do You Wants To review Them?</p>
                <Button class="regular-btn">Review</Button>
            </div>
            <div class="double">
                <h1>Double Rooms</h1>
                <p>There Are 4 Double Rooms Reservations... <br> Do You Wants To review Them?</p>
                <Button class="double-btn">Review</Button>
            </div>
            <div class="vip">
                <h1>VIP Rooms</h1>
                <p>There Are 4 VIP Rooms Reservations... <br> Do You Wants To review Them?</p>
                <Button class="vip-btn">Review</Button>
            </div>
            <div class="vvip">
                <h1>VVIP Rooms</h1>
                <p>There Are 4 VVIP Rooms Reservations... <br> Do You Wants To review Them?</p>
                <Button class="vvip-btn">Review</Button>
            </div>
            <div class="rsvp">
                <h1>RSVP Rooms</h1>
                <p>There Are 4 RSVP Rooms Reservations... <br> Do You Wants To review Them?</p>
                <Button class="rsvp-btn">Review</Button>
            </div>
           </div>
           
           <div class="data-view">
           <?php
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
                $sql = "SELECT * FROM reserve_info";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo " <table><tr>
                    <th>ID</th><th>Name</th>
                    <th>Address 1</th><th>Address 2</th>
                    <th>City</th><th>State</th>
                    <th>Zip Code</th><th>Telephone</th>
                    <th>Email</th><th>Date_In</th>
                    <th>Date_Out</th><th>Time_In</th>
                    <th>time_out</th><th>Checked Room</th>
                    <th>Num of Adult</th><th>Num of Children</th>
                    <th>Date Of Registration</th>
                    </tr>";
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." "
                        .$row["lastname"]."</td><td>".$row["Address_1"]."</td><td>".$row["Address_2"]."</td><td>"
                        .$row["city"]."</td><td>".$row["states"]."</td><td>".$row["zip"]."</td><td>"
                        .$row["phone"]."</td><td>".$row["email"]."</td><td>".$row["date_in"]."</td><td>"
                        .$row["date_out"]."</td><td>".$row["time_in"]."</td><td>".$row["time_out"]."</td><td>".$row["checked_room"]."</td><td>"
                        .$row["adult"]."</td><td>".$row["children"]."</td><td>".$row["reg_date"]."</td></tr>"
                        ;
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }


                ?>
                
                    
                    
                
           </div>
        </section>
    </div>
</body>
</html>