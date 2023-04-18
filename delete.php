<?php
// Include the database connection file
require_once("config.php");

// Get id parameter value from URL
$id = $_GET['id'];

// Delete row from the database table
$mysqli = mysqli_query($conn, "DELETE FROM address WHERE id = $id");

// Redirect to the main display page 
header("Location:index.php");