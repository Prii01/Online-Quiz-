<?php

$con = mysqli_connect("localhost","root","", "quizproject");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>