<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>
<?php        
$sql_host =     "localhost";      
$sql_username = "root";    
$sql_password = "";       
$sql_database = "mystore"; 


$mysqli = new mysqli($sql_host , $sql_username , $sql_password , $sql_database );
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
if (!$mysqli->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
    exit();
} else {
    // printf("Current character set: %s\n", $mysqli->character_set_name());
}     
?>