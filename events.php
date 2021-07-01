<!-- PHP Block -->
<?php
require 'config/config.php';
require 'includes/handlers/get_event.php';
?>

<!-- HTML Block -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/adaptive.css">
    <link rel="stylesheet" href="stylesheets/mobile.css">
    <link rel="shortcut icon" href="stylesheets/img/favicon.png" type="image/x-icon">
    <title>Antique | Events</title>
</head>
<body>
   <div id="events-container"> 
   <div id="mobile-navigation">
       <ul>
           <li><a href="index.php">Home</a></li>
           <li><a href="events.php" class="mobile-active">Events</a></li>
           <li><a href="location.php">Location</a></li>
           <li><a href="contact.php">Contact</a></li>
        
       </ul>
   </div> 
       <h1>Come and get familliar with The Antique</h1>
       <h3>The museum is open from Monday to Friday, time 11:00-19:00. You can have some time on your own or partisipate in lecture or a tour.</h3>
<div id="events-content">
   <div class="event-cards">
   <?php foreach($row as $obj){
     echo '<div class="event-card">

     <div class="event-card-image">
         <img src="data:image/jpeg;base64,'.base64_encode($obj['image']).'" alt="">
     </div>
     <div class="event-card-text">
         <div class="event-card-text-wrap">
         <p class="event-card-category">'.$obj["category"].'</p>
         <h2 class="event-card-text-title">'.$obj["title"].'</h2>
         <p class="event-card-text-description">'.$obj["description"].'</p>
         <p class="event-card-text-info">
             <ul>
                 <li class="event-card-text-info-li">'.$obj["days"].'</li>
                 <li class="event-card-text-info-li">Begining time: '.$obj["time"].'</li>
             </ul>
         </p>
         </div>
     </div>
 </div>';
   } ?>
</div>

   <!-- Navigation -->
   <div id="nav-dots-container">
            <div class="nav-dots">
                <a href="index.php">
                <div class="dot"></div>
               <div class="hide">Home</div> 
                </a>
                <a href="events.php">
                <div class="dot active"></div>
               <div class="hide">Events</div> 
                </a>
                <a href="location.php">
                <div class="dot"></div>
               <div class="hide">Location</div> 
                </a>
                <a href="contact.php">
                <div class="dot"></div>
               <div class="hide">Contact</div> 
                </a>
            </div>
        </div>
        </div>
        <div id="footer">
   <p>Antique Copyright &copy; 2021 All rights reserved | Build by /RZ</p>
   </div>
   </div>
  
   </div>
</body>
</html>