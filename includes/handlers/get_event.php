<?php
$query = mysqli_query($connectQuery, 'SELECT * FROM eventslist');
$row = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>