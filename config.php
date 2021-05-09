<?php
session_start();

$host = "remotemysql.com";    /* Host name */
$user = "ZH3ESfMgtz";         /* User */
$password = "OXLzZ9vKnG";         /* Password */
$dbname = "ZH3ESfMgtz";   /* Database name */

// Create connection
$con = mysqli_connect($host, $user, $password,$dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
