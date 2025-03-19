<?php 
$host = getenv("localhost");
$uname = getenv("phpmyadmin");
$pw = getenv("root");
$dbname = getenv("attendancemsystem");

try{
    $conn = new MySQLi($host, $uname, $pw, $dbname);
}catch(Exception $e){
    echo "Database Connection Failed: <br>";
    print_r($e->getMessage());
    exit;
}
?>