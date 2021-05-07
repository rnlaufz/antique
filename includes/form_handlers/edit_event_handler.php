<?php

// Selected event 
$event = 'Antique';
$editImage;
$errorArray = array();


// Fill selector
// Get all titles
$selectorQuery = mysqli_query($connectQuery, "SELECT * FROM eventslist");
$titles = array();
while($row = mysqli_fetch_array($selectorQuery)){
    $titles[] = $row['title'];
}
// Titles are inserted in DOM in admin page

// Select event
if(isset($_POST['getEvent'])){
    // Get event title and store in session
    $event = $_POST['events'];
    $_SESSION['selectedEvent'] = $event;

    // Fill in inputs
    $callEventQuery = mysqli_query($connectQuery, "SELECT * FROM eventslist WHERE title='$event'");
    $row = mysqli_fetch_array($callEventQuery);

    // Fetch id
    $eventID = $row['id'];

    // Give inputs values
    $editCategory = $row['category'];
    $editTitle = $row['title'];
    $editDescription = $row['description'];
    $editDays = $row['days'];
    $editTime = $row['time'];
    $editImage = $row['image'];

    if(isset($_POST['editEvent'])){
        $editCategory = strip_tags($_POST['editCategory']);
        $editCategory = str_replace(' ', '', $editCategory);
        $editCategory = str_replace("'", "\'", $editCategory);

        $editTitle = strip_tags($_POST['editTitle']);
        $editTitle = str_replace(' ', '', $editTitle);
        $editTitle = str_replace("'", "\'", $editTitle);
        $editTitle = ucfirst($editTitle);
        
        $editDescription = strip_tags($_POST['editDescription']);
        $editDescription = str_replace(' ', '', $editDescription);
        $editDescription = str_replace("'", "\'", $editDescription);
        $editDescription = ucfirst($editDescription);
     
        $editDays = strip_tags($_POST['editDays']);
        $editDays = str_replace(' ', '', $editDays);
        $editDays = str_replace("'", "\'", $editDays);
        $editDays = ucfirst($editDays);
     
        $editTime = strip_tags($_POST['editTime']);
        $editTime = str_replace(' ', '', $editTime);
        $editTime = str_replace("'", "\'", $editTime);
        $editTime = ucfirst($editTime);
     
        $editImage = $_POST['editFile'];


        if($editCategory == '' || $editDescription == '' || $editTime == '' || $editTitle == '' || $editImage == '' || $editDays == ''){
            array_push($errorArray, "All inputs must be filled");
        }
        
     
        $editQuery = mysqli_query($connectQuery, "UPDATE eventslist SET title=$editTitle, image=$editImage, category=$editCategory, description=$editDescription, time=$editTime, days=$editDays WHERE id=$eventID");
     

    }
    
}

?>