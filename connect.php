<?php

$servrname="localhost";
$username="root";
$password="";
$dbname="Social";

$conn=mysqli_connect($servrname,$username,$password,$dbname);

if(!$conn){
    echo "cannot connect to the database";
}

?>