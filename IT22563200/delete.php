<?php
include 'db_conn.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `plan` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        //echo "Deleted successfully";
        header('location:view.php') ;
    } else {
        die(mysqli_error($conn));
    }
}
?>
