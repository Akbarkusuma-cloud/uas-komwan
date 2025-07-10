<?php
$servername = "akbardb"; 
$username = "root";
$password = "akbarpass";
$dbname = "uas_cloud_2212501122"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
