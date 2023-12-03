<?php

<<<<<<< HEAD
$servrname="localhost";
=======
$hostname="localhost";
>>>>>>> origin/main
$username="root";
$password="";
$dbname="Social";

<<<<<<< HEAD
$conn=mysqli_connect($servrname,$username,$password,$dbname);

if(!$conn){
    echo "cannot connect to the database";
}

=======
$conn=mysqli_connect($hostname,$username,$password,$dbname);

if(!$conn){
    die("Can't connect to the db");
}


>>>>>>> origin/main
?>