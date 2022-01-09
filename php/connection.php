<?php
$server = "localhost";
$user = "root";
$passwd = "test12345";
$db = "job";


$conn = mysqli_connect($server, $user, $passwd, $db);
if(!$conn){

    echo "Connection failed";

};

?>