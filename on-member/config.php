<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();

$conn = new mysqli("localhost", "root", "", "bootstrap");
if ($conn->connect_errno) {
    echo die("Failed to connect to MySQL: " . $conn->connect_error);
}
?>