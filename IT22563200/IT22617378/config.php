<?php

$con = mysqli_connect('localhost','root','','Thehome');

if(mysqli_connect_errno()){
    die("Cannot connect to Database".mysqli_connect_errno());
}
?>