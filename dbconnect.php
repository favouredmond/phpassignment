<?php

$servername = 'localhost';
$username = 'root';
$password ='chemistry1';
$database ='favour';

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error){
    die("connection failed:" .$conn->connect_error);
}
else{
    echo "You are connected to the database successfully";
}

?>