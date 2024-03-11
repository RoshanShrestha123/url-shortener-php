<?php

require('../db/connect.php');
$id_from_url = $_GET['r'];

$sql = "select long_url from urls where short_url = '$id_from_url' limit 1";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

header("Location: {$row['long_url']}");