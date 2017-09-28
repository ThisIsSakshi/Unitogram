<?php

function connect(){
$host="localhost";
$user="root";
$password="ggits";
$dbname="Hack";
$conn=mysqli_connect($host,$user,$password,$dbname);

return $conn;
}

?>