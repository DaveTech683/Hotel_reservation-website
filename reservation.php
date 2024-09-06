<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reserve.css">
    <title>Reservation</title>
</head>
<body>
    <?php
    include ("db.php")
    ?>
    <section id="reservation001">
        <div class="reservation">
            <div class="contents">
            <h1>HOTEL RESERVATION</h1>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="names">
                        <p>First Name: <span style="color: red; font-size: 15px;"><?php  echo $steric;?></span></p> 
                        <input type="text" name="fname" id="fname" placeholder="<?php  echo $fnameErr;?>">
                        <p>Last Name: <span style="color: red; font-size: 15px;"><?php  echo $steric;?></span></p> 
                        <input type="text" name="lname" id="lname" placeholder="<?php  echo $lnameErr;?>">
                    </div>
                    <div class="address">
                        <p class="a">Address 1: <span style="color: red; font-size: 15px;"><?php  echo $steric;?></span></p> 
                        <input type="text" name="addr1" id="addr1" placeholder="<?php  echo $addr1Err;?>">
                        <p class="b">Address 2:</p> <input type="text" name="addr2" id="addr2">
                    </div>
                    <div class="location">
                        <p>City: <span style="color: red; font-size: 15px;"><?php  echo $steric;?></span></p> 
                        <input type="text" name="city" id="city" placeholder="<?php  echo $cityErr;?>">
                        <p>State: <span style="color: red; font-size: 15px;"><?php  echo $steric;?></span></p> 
                        <input type="text" name="state" id="state" placeholder="<?php  echo $stateErr;?>">
                        <p>ZIP Code: <span style="color: red; font-size: 15px;"><?php  echo $steric;?></span></p> 
                        <input type="text" name="zip" id="zip" placeholder="<?php  echo $zipErr;?>">
                    </div>
                    <div class="contact">
                        <p class="cp1">Phone: <span style="color: red; font-size: 15px;"><?php  echo $steric;?></span></p> 
                        <input type="text" name="phone" id="phone" placeholder="<?php  echo $phoneErr;?>">
                        
                        <p class="cp2">Email Address: <span style="color: red; font-size: 15px;"><?php  echo $steric;?></span></p>
                        <input type="email" name="email" id="email" placeholder="<?php  echo $emailErr;?>">
                    </div>
                    <div class="date_time">
                        <p class="d1">Check In Date: <span style="color: red; font-size: 15px;"><?php  echo $steric;?></span></p> 
                        <input type="date" name="dateIn" id="date_in" >
                        <p class="t1">Check In Time: <span style="color: red; font-size: 15px;"><?php  echo $steric;?></span></p> 
                        <input type="time" name="timeIn" id="time_in" >
                        <p class="d2">Check Out Date: <span style="color: red; font-size: 15px;"><?php  echo $steric;?></span></p> 
                        <input type="date" name="dateOut" id="date_out" >
                        <p class="t2">Check Out Time: <span style="color: red; font-size: 15px;"><?php  echo $steric;?></span></p> 
                        <input type="time" name="timeOut" id="time_out" >
                    </div>
                    <div class="type">
                        <p>Room Prefrence: <span style="color: red; font-size: 15px;"><?php  echo $steric;?></span></p>
                        <div class="type_in">
                            <input type="radio" name="check" value="Regular Room" id="reg"><p>Regular Rooms</p>
                            <input type="radio" name="check" value="Double Room" id="double"><p>Double Rooms</p>
                            <input type="radio" name="check" value="VIP Room" id="vip"><p>VIP Rooms</p>
                            <input type="radio" name="check" value="VVIP Room" id="vvip"><p>VVIP Rooms</p>
                            <input type="radio" name="check" value="RSVP Room" id="rsvp"><p>RSVP Rooms</p>
                        </div>
                        <div class="age">
                            <div class="adult">
                                <p>Adult: <span style="color: red; font-size: 15px;"><?php  echo $steric;?></span></p>
                                <select name="adult" id="adult">
                                <option value="1">0</option>
                                <option value="2">1</option>
                                <option value="3">2</option>
                                <option value="4">3</option>
                                <option value="5">4</option>
                                <option value="6">5</option>
                                <option value="7">6</option>
                            </select>
                            </div>
                            <div class="kid">
                                <p>Children: <span style="color: red; font-size: 15px;"><?php  echo $steric;?></span></p>
                                <select name="kids" id="kids">
                                <option value="1">0</option>
                                <option value="2">1</option>
                                <option value="3">2</option>
                                <option value="4">3</option>
                                <option value="5">4</option>
                                <option value="6">5</option>
                                <option value="7">6</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <button name="btn_reserve" class="btn_reserve" type="submit">SUBMIT</button>
                </form>
            </div>
        </div>

    </section>
    
</body>
</html>