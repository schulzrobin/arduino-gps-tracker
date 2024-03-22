<?php 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'gpstracker'); 
define('DB_PASSWORD', 'gps'); 
define('DB_NAME', 'locations');

date_default_timezone_set('Europe/Zurich');

// Connect with the database 
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME); 
 
// Display error if failed to connect 
if ($db->connect_errno) { 
    echo "Connection to database is failed: ".$db->connect_error;
    exit();
}
