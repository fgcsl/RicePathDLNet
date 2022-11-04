<?php

ini_set ('display_error', '1');

$servername="localhost";
$username="root";
$password="netweb";
$databasename="RicePathDLNet";

$conn = mysqli_connect($servername,$username,$password,$databasename);

if ($conn) {
#echo "connect successfull";
}

else {
 echo "NOt Connected";
}
?>
