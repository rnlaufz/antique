<!-- PHP Block -->
<?php
require 'config/config.php';
require 'config/header.php';
require 'includes/form_handlers/add_event_handler.php';
require 'includes/form_handlers/edit_event_handler.php';
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
    <div class="admin-nav">
    <ul>
    <li><a href="events.php">Events</a></li>
    <li><a href="includes/handlers/logout.php">Logout</a></li>
    </ul>
    </div>
    <div id="dashboard">
        <div id="actions">
            <button id='add-button'>Add new event</button>
            <button id='edit-button'>Edit existing event</button>
            <button id='delete-button'>Delete event</button>
        </div>
      

        <div id="add-form-container" class="hide">
          <!-- Show messages or errors -->
          <?php
        if(in_array("All inputs must be filled", $errorArray)) echo '<div id="messages-container"><p>All inputs must be filled</p></div>';
        ?>
            <form action="admin.php" method="POST">
                <div class="form-control">
                    <input name="addcategory" type="text" placeholder="Category">
                </div>
                <div class="form-control">
                    <input name="addtitle" type="text" placeholder="Title">
                </div>
                <div class="form-control">
                    <input name="adddesc" type="text" placeholder="Description">
                </div>
                <div class="form-control">
                    <input name="adddays" type="text" placeholder="Days">
                </div>
                <div class="form-control">
                    <input name="addstartTime" type="text" placeholder="Begining time">
                </div>
                <div class="form-control">
                    <div class="input__wrapper">
                        <input name="addfile" type="file" id="input__file" class="input input__file" multiple>
                        <label for="input__file" class="input__file-button">
                            <span class="input__file-button-text">Image</span>
                        </label>
                    </div>
                </div>
                <div class="form-control">
                    <input id="subAdd" name="addEvent" type="submit" value="Add">
                </div>
            </form>
        </div>
        <div id="edit-form-container" class="hide">
        <div class="form-control">
        <form action="admin.php" method="POST">
            <select name="events" id="add-events">
                <?php
                foreach($titles as $title) {
                    echo "<option>$title</option>";
                }
                
                ?>
            </select>
            <input type="submit" value="Submit" name="getEvent">
            </form>
            </div>
            <form action="admin.php" method="POST">
                <div class="form-control">
                    <input name="editCategory" type="text" placeholder="Category" value="<?php
                    echo $editCategory;
                    ?>">
                </div>
                <div class="form-control">
                    <input name="editTitle" type="text" placeholder="Title" value="<?php
                    echo $editTitle;
                    ?>">
                </div>
                <div class="form-control">
                    <input name="editDescription" type="text" placeholder="Description"
                    value="<?php
                    echo $editDescription;
                    ?>">
                    
                </div>
                <div class="form-control">
                    <input name="editDays" type="text" placeholder="Days"
                    value="<?php
                    echo $editDays;
                    ?>">
                    
                </div>
                <div class="form-control">
                    <input name="editTime" type="text" placeholder="Begining time"
                    value="<?php
                    echo $editTime;
                    ?>">
                    
                </div>
                <div class="form-control">
                    <div class="input__wrapper">
                        <input name="editFile" type="file" id="input__file" class="input input__file" multiple 
                    ?>
                        <label for="input__file" class="input__file-button">
                            <span class="input__file-button-text">Image</span>
                        </label>
                    </div>
                </div>
                <div class="form-control">
                    <input name="editEvent" type="submit" placeholder="Submit" value="Edit">
                </div>
            </form>
        </div>
        <div id="delete-form-container" class="hide">
            <form action="">
                <div class="form-control">
                <select name="events" id="events">
                <option value="default" default>Select Event</option>
                <option value="eventOne">Event One</option>
                <option value="eventTwo">Event Two</option>
            </select>
                </div>
          
            <div class="form-control">
                    <input type="submit" placeholder="Submit" value="Delete">
                </div>
            </form>
           
        </div>
        
    </div>
    <div id="footer">
   <p>Antique Copyright &copy; 2021 All rights reserved | Build by /RZ</p>
   </div>
 </div>   

 <script src="scripts/app.js"></script>
 <script>
 const selectorEdit = document.getElementById('add-event');
 selectorEdit.addEventListener("change", (e) => {<?php $test = e.value ?>})
 </script>
</body>
</html>