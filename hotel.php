<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hotel.css">
    <title>Drums Suite</title>
</head>
<body>
    <?php
    include ("contactdb.php");
    ?>
    <section class="header001">
        <nav class="nav1">
            <h2>DRUMS Suite</h2>
            <ul>
                <li><a href="#availability001">Availabilty</a></li>
                <li><a href="#contact001">Contact</a></li>
                <li><a href="#about001">About Us</a></li>
                <button onclick="window.location.href='reservation.php'"><li>Make Reservations</li></button>
            </ul>
        </nav>
        <div class="header">
            <div class="landing-content">
                <li>WELCOME TO</li>
                <li>THE DRUMS SUITE & HOTEL</li>
            </div>
            <div class="btn">
                <button onclick="window.location.href='reservation.php'">Make Reservations</button>
            </div>
        </div>
    </section>

    <section id="services001">
        <div class="services"> 
            <h1><u>OUR SERVICES</u></h1>
            <div class="rooms">
                <div class="room-img">
                    <img src="hotel.jpg" alt="Image room">
                </div>
                <div class="room-content">
                    <h3>Room Services</h3>
                    <p>Indulge in the comfort of your room with our special and exclusive room services <br>
                which is totally a rate 5 stars... The feeing of flavors with ou international cuisine options - travel the globe from the comfort of your room.
            Drums Suite is the best place to relax with our seection of fine wines and artisanal cheeses, a perfect pairing for a cozing evening. 
        All these accompanied with 24/7 Electricity...</p>
                </div>
            </div>
            <div class="food">
                <div class="food-content">
                    <h3>Food Services</h3>
                    <p>Experience the best foods from some of the best chefs and cooks in the world accompanied with
                        tailoed customizable meals because your dini desires are uniquely yours... <br>
                        Our prompt and courteous service ensures your dining Experience is enjoyable and hassle-free bringing
                        a sweet end to your every day. 
                    </p>
                </div>
                <div class="food-img">
                    <img src="food2.jpg" alt="Image food">
                </div>
            </div>
            <div class="eventplace">
                <div class="event-img">
                    <img src="hall3.jpeg" alt="Image event">
                </div>
                <div class="event-content">
                    <h3>Event Places And Centers</h3>
                    <p>Drums suite brings to your reach eventful places for your wedding events, birthday celebrations, and all other things
                        you might want to gather for and that's not all. <br>
                        These event places are perfect places for your invitees regardless of how many they are. These event halls 
                        ranges from as low as 800 seater to 5000 seater and more. 
                    </p>
                </div>
                
            </div>
        </div>
    </section>

    <section id="availability001">
        <h1><u>AVAILABILITY</u></h1>
        <div class="availability">
            <div class="avail-room">
                <h3><u>ROOMS</u></h3>
                <div class="room-price">
                    <ul>
                        <li>Regular Rooms - $200</li>
                        <li>Double Rooms - $350</li>
                        <li>VIP Rooms --$500</li>
                        <li>VVIP Rooms --- $700</li>
                        <li>RSVP Rooms ---- $400</li>
                    </ul>
                
                </div>
            </div>
            <div class="avail-others">
                <div class="avail-food">
                    <h3><u>FOODS</u></h3>
                    <div class="food-price">
                        <ul>
                            <li>White Dishes - $20</li>
                            <li>Local Dishes - $10</li>
                            <li>International Dishes--$50</li>
                            <li>Intercontinental Dishes $45</li>
                            <li>Chinese Dishes ---- $10</li>
                        </ul>
                    </div>
                </div>
                <div class="avail-event">
                    <h3><u>EVENTS</u></h3>
                    <div class="event-price">
                        <ul>
                            <li>Bar Ticket- $200</li>
                            <li>Club Ticket- $350</li>
                            <li>Event (800) -----$500</li>
                            <li>Event (1500) --- $700</li>
                            <li>Event (5000) ---- $1000</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <button onclick="window.location.href='reservation.php'"> Make Reservations </button>
    </section>
    <section id="about001">
        <div class="about">
            <div class="content-1">
                <h2>About Us</h2>
                <p>Drums suite bring to you the best option for what we call 'A Home Away From Home' with our distiguished
                    services in room service that feels more like home than home. 
                    We Offer The best room service while keeping your health environment and your stomach at heart.
                    <br> We give you the best of the best in accordance to your wallet. There are rooms that suites your needs
                    , event halls that contains as many people as you can invite and also kitchen services that caters for your stomach...
                </p>
            </div>
            <div class="content-2">
                <h2>What We Do</h2>
                <p>We at Drums suite takes it as a high priority to see that you have a comfortable stay. Rooms to your taste, 
                    food to your pleasure, restaurants, bar and clubs for your entertainment and lots more just to make sure
                you do not feel agacious. <br>All these we do just for Your SATISFACTION... </p>
            </div>
            <div class="content-3">
                <h2>How We Serve</h2>
                <p>Our secret here at Drums suite is we put our customer needs before any other things. We simply want the best for our extemed customer,
                    making sure that all our customers are treated with respect and taken as VIPs despite their status.  </p>
            </div>
        </div>
    </section>
    <section id="contact001">
        <div class="contact">
            <form method="post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <h2>Contact Us Via</h2>

                <span style="color: red; font-size: 20px;"><?php echo $mailErr;?></span>
                <input type="email" name="mail" id="mail" value="<?php echo $mail;?>" placeholder="Your Email">
                <span style="color: red; font-size: 20px;" class="error">* </span>

                <span style="color: red; font-size: 20px;"><?php echo $nameErr;?></span>
                <input type="text" name="name" id="name" value="<?php echo $name;?>" placeholder="Your Name">
                <span style="color: red; font-size: 20px;" class="error">*</span>
                
                <span style="color: red; font-size: 20px;"><?php echo $messageErr;?></span>
                <textarea name="message" id="message" cols="56" rows="8" placeholder=" Your Message"><?php echo $message;?></textarea>
                <span style="color: red; font-size: 20px;" class="error">*</span>
                <button type="submit"> Send Message </button> 
                
            </form>
        </div>
    </section>
    <section id="footer001">
        <div class="footer">
            <h2>COM 415 ASSIGNMENT</h2>
            <p>@Hotel Reservation Website</p>
            <div class="btn-admin">
                <button onclick="window.location.href='login.php'">Log In As Admin</button>
            </div>
        </div>

    </section>

</body>
</html>