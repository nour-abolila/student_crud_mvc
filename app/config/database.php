<?php

$host = 'localhost';
$dbname = 'school';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("error connecting to database: " . $conn->connect_error);
}
