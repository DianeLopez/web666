<?php
include "db_conn.php";
if (isset($_POST['uname']) && isset($_POST['password'])) {
    // Validate input data

    // Check credentials against database

    // If credentials are correct, redirect to index.php
    header("Location:index.php");
    exit();
}
?>
