<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="final.css">
    <title>Payment</title>
</head>
<body>
    <?php
    include("finaldb.php");
    ?>
    <section id="view001">
        <div class="view">
            <div class="contents">
                <h1>Confirm Reservation</h1>
                <ul>              
                    <li name="name"> <b>Name:</b> <?php echo $name;?></li>
                    <li name="phone"> <b>Phone:</b> <?php echo $phone;?></li>
                    <li name="mail"> <b>Email: </b> <?php echo $mail;?></li>
                    <li name="date_in"> <b>Date-in:</b> <?php echo $date_in;?></li>
                    <li name="date_out"> <b>Date-out:</b> <?php echo $date_out;?></li>
                    <li name="time_in"> <b>Time-in: </b> <?php echo $time_in;?></li>
                    <li name="time_out"> <b>Time-out:</b> <?php echo $time_out;?></li>
                    <li name="checked"> <b>Room Selected:</b> <?php echo $check;?> Which Cost <b>$<?php echo $amount;?></b> Per Night </li>
                    <li> <b>Nights of Stay: <?php echo $dateDiff;?> Days</li>
                    <br>
                    <li> <b>Total Amount For Stay:</b> $<?php echo $total;?></li>
                </ul>
                <button class="btn" onclick = showAlert()>Make Payment</button>
            </div>
        </div>

    </section> 

    <script>
  function showAlert() {
    alert ("Payment Method Will Be Available Soon!");
  }
  </script>
</body>
</html>