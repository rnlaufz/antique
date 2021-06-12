<?php

//  Messages
$errorArray = array();
$messagesArray = array();

 // Set variables
 $eventCategory = '';
 $eventTitle = '';
 $eventDescription = '';
 $eventDays = '';
 $eventTime = '';

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

   $eventImage;

   if(!empty($_FILES["addFile"]["name"])){
       $eventImageName = basename($_FILES["addFile"]["name"]);
       $eventImageType = pathinfo($eventImageName, PATHINFO_EXTENSION);
        $allowTypes = array('jpg', 'jpeg', 'png');
        if(in_array($eventImageType, $allowTypes)){
            $img = $_FILES["addFile"]['tmp_name'];
            $eventImage = addslashes(file_get_contents($img));
        }
   }

    // Check all inputs to be filled
    if($eventCategory == '' || $eventDescription == '' || $eventTime == '' || $eventTitle == '' || empty($_FILES["addFile"]["name"]) || $eventDays == ''){
        array_push($errorArray, "All inputs must be filled");
       };

    // Set sessions
    $_SESSION['addCategory'] = $eventCategory;
    $_SESSION['addTitle'] = $eventTitle;
    $_SESSION['addDescription'] = $eventDescription;
    $_SESSION['addDays'] = $eventDays;
    $_SESSION['addTime'] = $eventTime;

    if(empty($errorArray)){
        $query = mysqli_query($connectQuery, "INSERT INTO eventslist VALUES('', '$eventTitle','$eventImage', '$eventCategory', '$eventDescription', '$eventTime', '$eventDays')"); 
        
    // Show success message
    array_push($messagesArray, "Event successfully added");

        // Clear sessions
        $_SESSION['addCategory'] = '';
        $_SESSION['addTitle'] = '';
        $_SESSION['addDescription'] = '';
        $_SESSION['addDays'] = '';
        $_SESSION['addTime'] = '';
      
        
    };
}
?>