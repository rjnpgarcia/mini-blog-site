<?php
require_once('config.php');

// Database Connection

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (!$connection) {
    die("Database Connection Failed");
}
