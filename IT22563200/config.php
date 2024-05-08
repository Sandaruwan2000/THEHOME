<?php

$con = mysqli_connect('localhost','root','','give_plan');

if(mysqli_connect_errno()){
    die("Cannot connect to Database".mysqli_connect_errno());
}
?>