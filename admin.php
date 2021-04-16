<!-- PHP Block -->
<?php

$connectQuery = mysqli_connect("localhost", "root", "", "antique_events");

if(mysqli_connect_errno()){
    echo "Failed to connect: " - mysqli_connect_errno();
};

?>

<!-- HTML Block -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="shortcut icon" href="stylesheets/img/favicon.png" type="image/x-icon">
    <title>Antique | Admin</title>
</head>
<body>
 <div id="admin-container">
    <h3>Manage events</h3>
    <div id="dashboard">
        <div id="form-container">
            <form action="">
                <div class="form-control">
                    <input type="text" placeholder="Category">
                </div>
                <div class="form-control">
                    <input type="text" placeholder="Title">
                </div>
                <div class="form-control">
                    <input type="text" placeholder="Description">
                </div>
                <div class="form-control">
                    <input type="text" placeholder="Days">
                </div>
                <div class="form-control">
                    <input type="text" placeholder="Begining time">
                </div>
                <div class="form-control">
                    <input type="image" placeholder="Image">
                </div>
                <div class="form-control">
                    <input type="submit" placeholder="Submit">
                </div>
            </form>
        </div>
        <div id="preview-container">
        <div id="events-content">
   <div class="event-cards">
        <div class="event-card">
            <div class="event-card-image">
                <img src="stylesheets/img/card-one.jpg" alt="">
            </div>
            <div class="event-card-text">
                <div class="event-card-text-wrap">
                <p class="event-card-category">Lecture</p>
                <h2 class="event-card-text-title">Archaic</h2>
                <p class="event-card-text-description">Learn about the very begining of the greek sculpture art.</p>
                <p class="event-card-text-info">
                    <ul>
                        <li>Days: Monday, Thursday</li>
                        <li>Begining time: 12:00</li>
                    </ul>
                </p>
                </div>
            </div>
        </div>
        <div class="event-card">
            <div class="event-card-image">
                <img src="stylesheets/img/card-two.jpg" alt="">
            </div>
            <div class="event-card-text">
                <div class="event-card-text-wrap">
                <p class="event-card-category">Lecture</p>
                <h2 class="event-card-text-title">The early classics</h2>
                <p class="event-card-text-description">Learn how the known art has been developed.</p>
                <p class="event-card-text-info">
                    <ul>
                        <li>Days: Monday, Thursday</li>
                        <li>Begining time: 15:00</li>
                    </ul>
                </p>
                </div>
            </div>
        </div>
        <div class="event-card">
            <div class="event-card-image">
                <img src="stylesheets/img/card-three.jpg" alt="">
            </div>
            <div class="event-card-text">
                <div class="event-card-text-wrap">
                <p class="event-card-category">Lecture</p>
                <h2 class="event-card-text-title">The high classics</h2>
                <p class="event-card-text-description">Learn the history of the most popular creations.</p>
                <p class="event-card-text-info">
                    <ul>
                        <li>Days: Tuesday, Friday</li>
                        <li>Begining time: 12:00</li>
                    </ul>
                </p>
                </div>
            </div>
        </div>
        <div class="event-card">
            <div class="event-card-image">
                <img src="stylesheets/img/card-four.jpg" alt="">
            </div>
            <div class="event-card-text">
                <div class="event-card-text-wrap">
                <p class="event-card-category">Tour</p>
                <h2 class="event-card-text-title">Archaic</h2>
                <p class="event-card-text-description">See and learn the acrhaic beauty.</p>
                <p class="event-card-text-info">
                    <ul>
                        <li>Days: Monday, Wednesday, Friday</li>
                        <li>Begining time: 14:00, 16:00</li>
                    </ul>
                </p>
                </div>
            </div>
        </div>
        <div class="event-card">
            <div class="event-card-image">
                <img src="stylesheets/img/card-five.jpg" alt="">
            </div>
            <div class="event-card-text">
                <div class="event-card-text-wrap">
                <p class="event-card-category">Tour</p>
                <h2 class="event-card-text-title">The high classics</h2>
                <p class="event-card-text-description">The high classic palpable representation.</p>
                <p class="event-card-text-info">
                    <ul>
                        <li>Days: Tuesday, Thursday</li>
                        <li>Begining time: 14:00, 16:00, 17:00</li>
                    </ul>
                </p>
                </div>
            </div>
        </div>
        <div class="event-card">
            <div class="event-card-image">
                <img src="stylesheets/img/card-six.jpg" alt="">
            </div>
            <div class="event-card-text">
                <div class="event-card-text-wrap">
                <p class="event-card-category">Exhibition</p>
                <h2 class="event-card-text-title">Antique</h2>
                <p class="event-card-text-description">Mordern art gracefully touches the ancient.</p>
                <p class="event-card-text-info">
                    <ul>
                        <li>Days: Monday, Wednesday, Friday</li>
                        <li>Begining time: anytime</li>
                    </ul>
                </p>
                </div>
            </div>
        </div>
   </div>
        </div>
    </div>
 </div>   
</body>
</html>