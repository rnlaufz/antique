<?php
// Selected event 
$errorArray = array();

// Get events data
$selectorQuery = mysqli_query($connectQuery, "SELECT id, title, category, description, time, days FROM eventslist");
$row = mysqli_fetch_all($selectorQuery, MYSQLI_ASSOC);
$json = json_encode($row);
// Titles are inserted in DOM in admin page




// if(isset($_POST['editEvent'])){
//     $editCategory = strip_tags($_POST['editCategory']);
//     $editCategory = trim($editCategory);
//     $editCategory = str_replace("'", "\'", $editCategory);

//     $editTitle = strip_tags($_POST['editTitle']);
//     $editTitle = trim($editTitle);
//     $editTitle = str_replace("'", "\'", $editTitle);
//     $editTitle = ucfirst($editTitle);
    
//     $editDescription = strip_tags($_POST['editDescription']);
//     $editDescription = trim($editDescription);
//     $editDescription = str_replace("'", "\'", $editDescription);
//     $editDescription = ucfirst($editDescription);
 
//     $editDays = strip_tags($_POST['editDays']);
//     $editDays = trim($editDays);
//     $editDays = str_replace("'", "\'", $editDays);
//     $editDays = ucfirst($editDays);
 
//     $editTime = strip_tags($_POST['editTime']);
//     $editTime = trim($editTime);
//     $editTime = str_replace("'", "\'", $editTime);
//     $editTime = ucfirst($editTime);
 
//     $editImage = $_POST['editFile'];


//     if($editCategory == '' || $editDescription == '' || $editTime == '' || $editTitle == '' || $editImage == '' || $editDays == ''){
//         array_push($errorArray, "All inputs must be filled");
//     };
//     $event = $_SESSION['selectedEvent'];
    
//     if($event !== ''){
//          $editQuery = mysqli_query($connectQuery, "UPDATE eventslist SET title='$editTitle', image='$editImage', category='$editCategory', description='$editDescription', time='$editTime', days='$editDays' WHERE title='$event'");
//     };

// }

?>