<?php
$host="localhost";
$user="root";
$password="";
$db_name="c&g";

$conn=mysqli_connect($host,$user,$password,$db_name);

if($conn)
{
    echo "connection sucsessful";
}
else
{
    echo "connection failed";
}   

?>