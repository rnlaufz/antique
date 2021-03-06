<?php

// Selected event 
$event = 'Antique';
// $errorArray = array();
// $messagesArray = array();
$showf = 'NOTallowed';
$eventID;

$editTime;
$editTitle;
$editDescription;
$editCategory;
$editDays;
$getImage;

// Fill selector
// Get all titles
$selectorQuery = mysqli_query($connectQuery, "SELECT * FROM eventslist");
$titles = array();
while($row = mysqli_fetch_array($selectorQuery)){
    $titles[] = $row['title'];
};
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
    $_SESSION['getID'] = $eventID;

    // Give inputs values
    $editCategory = $row['category'];
    $editTitle = $row['title'];
    $editDescription = $row['description'];
    $editDays = $row['days'];
    $editTime = $row['time'];
    $getImage = $row['image'];

    // Set image session var
    $_SESSION['DBimage'] = $getImage;

    // Allow front fo show edit form
    $showf = 'allowed';
};
if(isset($_POST['editEvent'])){
    $editCategory = strip_tags($_POST['editCategory']);
    $editCategory = trim($editCategory);
    $editCategory = str_replace("'", "\'", $editCategory);

    $editTitle = strip_tags($_POST['editTitle']);
    $editTitle = trim($editTitle);
    $editTitle = str_replace("'", "\'", $editTitle);
    $editTitle = ucfirst($editTitle);

    $editDescription = strip_tags($_POST['editDescription']);
    $editDescription = trim($editDescription);
    $editDescription = str_replace("'", "\'", $editDescription);
    $editDescription = ucfirst($editDescription);

    $editDays = strip_tags($_POST['editDays']);
    $editDays = trim($editDays);
    $editDays = str_replace("'", "\'", $editDays);
    $editDays = ucfirst($editDays);

    $editTime = strip_tags($_POST['editTime']);
    $editTime = trim($editTime);
    $editTime = str_replace("'", "\'", $editTime);
    $editTime = ucfirst($editTime);

    if(!empty($_FILES["editFile"]["name"])){
        $editImageName = basename($_FILES["editFile"]["name"]);
        $editImageType = pathinfo($editImageName, PATHINFO_EXTENSION);
         $allowTypes = array('jpg', 'jpeg', 'png');
         if(in_array($editImageType, $allowTypes)){
             echo 'fires two';
             $img = $_FILES["editFile"]['tmp_name'];
             $editImage = addslashes(file_get_contents($img));
             $editImageQuery = mysqli_query($connectQuery, "UPDATE eventslist SET image='$editImage' WHERE id={$_SESSION["getID"]} LIMIT 1");
         }
    } else {
        $editImageQuery = mysqli_query($connectQuery, "UPDATE eventslist SET image='{$_SESSION["DBimage"]}' WHERE id={$_SESSION["getID"]} LIMIT 1");
    } 
    if($editCategory == '' || $editDescription == '' || $editTime == '' || $editTitle == ''|| $editDays == ''){
        array_push($errorArray, "All inputs must be filled");
    };

   if(empty($errorArray)){ 
       $editQuery = mysqli_query($connectQuery, "UPDATE eventslist SET title='$editTitle', category='$editCategory',description='$editDescription', time='$editTime', days='$editDays' WHERE id={$_SESSION["getID"]} LIMIT 1");
    array_push($messagesArray, 'Event data changed successfully');}
};
?>