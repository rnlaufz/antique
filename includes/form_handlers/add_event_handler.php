<?php

 // Set variables
 $eventCategory = '';
 $eventTitle = '';
 $eventDescription = '';
 $eventDays = '';
 $eventTime = '';
 $eventImage;

//  Maessages
$errorArray = array();
$messagesArray = array();

if(isset($_POST['addEvent'])){
   $eventCategory = strip_tags($_POST['addcategory']);
   $eventCategory = trim($eventCategory);
   $eventCategory = str_replace("'", "\'", $eventCategory);
   $eventCategory = ucfirst($eventCategory);

   $eventTitle = strip_tags($_POST['addtitle']);
   $eventTitle = trim($eventTitle);
   $eventTitle = str_replace("'", "\'", $eventTitle);
   $eventTitle = ucfirst($eventTitle);
   
   $eventDescription = strip_tags($_POST['adddesc']);
   $eventDescription = trim($eventDescription);
   $eventDescription = str_replace("'", "\'", $eventDescription);
   $eventDescription = ucfirst($eventDescription);

   $eventDays = strip_tags($_POST['adddays']);
   $eventDays = trim($eventDays);
   $eventDays = str_replace("'", "\'", $eventDays);
   $eventDays = ucfirst($eventDays);

   $eventTime = strip_tags($_POST['addstartTime']);
   $eventTime = trim($eventTime);
   $eventTime = str_replace("'", "\'", $eventTime);
   $eventTime = ucfirst($eventTime);

   $eventImage = $_POST['addFile'];

    // Set sessions
    $_SESSION['addCategory'] = $eventCategory;
    $_SESSION['addTitle'] = $eventTitle;
    $_SESSION['addDescription'] = $eventDescription;
    $_SESSION['addDays'] = $eventDays;
    $_SESSION['addTime'] = $eventTime;

    // Check all inputs to be filled
   if($eventCategory == '' || $eventDescription == '' || $eventTime == '' || $eventTitle == '' || $eventImage == '' || $eventDays == ''){
    array_push($errorArray, "All inputs must be filled");
   }

    if(empty($errorArray)){
        $query = mysqli_query($connectQuery, "INSERT INTO eventslist VALUES('', '$eventTitle','$eventImage', '$eventCategory', '$eventDescription', '$eventTime', '$eventDays')"); 

        // Clear sessions
        $_SESSION['addCategory'] = '';
        $_SESSION['addTitle'] = '';
        $_SESSION['addDescription'] = '';
        $_SESSION['addDays'] = '';
        $_SESSION['addTime'] = '';
        // Show success message
        array_push($messagesArray, "Event successfully added");
    }



}
?>