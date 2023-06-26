<?php
$servername="localhost:3307";
$username="root";
$password="";
$dbname="crudoperation";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
?>