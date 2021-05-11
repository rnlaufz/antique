<?php

$selectorQuery = mysqli_query($connectQuery, "SELECT * FROM eventslist");
$titles = array();
while($row = mysqli_fetch_array($selectorQuery)){
    $titles[] = $row['title'];
};

if(isset($_POST['deleteEvent'])){
    // Select event
    $event = $_POST['events'];
    // Get event's id
    $findID = mysqli_query($connectQuery, "SELECT id FROM eventslist WHERE title='$event'");
    $idRow = mysqli_fetch_array($findID);
    $eventID = $idRow['id'];
    // // Delete selected event
    $deleteQuery = mysqli_query($connectQuery, "DELETE FROM eventslist WHERE id='$eventID'");
    header('Location: admin.php');
}
?>