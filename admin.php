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
        <div id="actions">
            <button id='add-button'>Add new event</button>
            <button id='edit-button'>Edit existing event</button>
            <button id='delete-button'>Delete event</button>
        </div>
        <div id="add-form-container" class="hide">
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
        <div id="edit-form-container" class="hide">
            <select name="events" id="events">
                <option value="default" default>Select Event</option>
                <option value="eventOne">Event One</option>
                <option value="eventTwo">Event Two</option>
            </select>
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
        <div id="delete-form-container" class="hide">
            <select name="events" id="events">
                <option value="default" default>Select Event</option>
                <option value="eventOne">Event One</option>
                <option value="eventTwo">Event Two</option>
            </select>
        </div>
        
    </div>
 </div>   

 <script src="scripts/app.js"></script>
</body>
</html>