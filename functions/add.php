<?php
require('../db/connect.php');


$long_url = $_POST['long_url'];
$short_url = uniqid('r-');
// query to insert the value to DB
// Reminder: This is unsafe, just for learning purpose.
$sql = "insert into urls (long_url, short_url) values ('$long_url', '$short_url')";
mysqli_query($conn, $sql);

header('Location: /');