<?php 
// Hostname
$host = "localhost";
// Username
$uname = "root";
// Password
$pw = "root";
// Database Name
$dbname = "attendancemsystem";

try{
    $conn = new MySQLi($host, $uname, $pw, $dbname);
}catch(Exception $e){
    echo "Database Connection Failed: <br>";
    print_r($e->getMessage());
    exit;
}
?>