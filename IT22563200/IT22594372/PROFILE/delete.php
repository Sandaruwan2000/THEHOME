<?php
include 'plan.config.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `draw` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        //echo "Deleted successfully";
        header('location:plan_table.php') ;
    } else {
        die(mysqli_error($conn));
    }
}
?>