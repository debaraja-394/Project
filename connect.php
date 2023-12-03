<?php

$servername="localhost";
$username="root";
$password="";
$dbname="Social";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    echo "cannot connect to the database";
}

?>