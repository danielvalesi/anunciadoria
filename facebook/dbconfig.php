<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'u636977446_an');    // DB username
define('DB_PASSWORD', 'dleite');    // DB password
define('DB_DATABASE', 'u636977446_an');      // DB name
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");
?>
