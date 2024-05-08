<?php



$servername = "localhost" ;
$username = "root" ;
$pasword = "" ;
$dbname = "thehome" ;

$conn = mysqli_connect($servername ,$username ,$pasword,$dbname) ;

if(!$conn){
    die("connection failed" . mysqli_connect_error()) ;

}
//echo "Connection successfully" ;
?>

