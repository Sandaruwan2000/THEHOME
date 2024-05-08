<!DOCTYPE html>
<html lang="en">
    <head>
        <title>update</title>
        <link rel= "stylesheet" href="style.css">
        <style>
            .main{
                    background-color: gainsboro;
                    margin-top: 10px;
                    max-width: 400px;
                }
            input{
                    margin-top: 10px;
                } 
        </style>
    </head>
    <body>
      <?php
       include'config.php';
       $ID =  $_GET['Id'];
       $Record = mysqli_query($con,"SELECT * FROM `tblcard` WHERE Id='$ID'");
       $data = mysqli_fetch_array($Record);
      ?>
    <center>
        <div class="main">   
        <form action="insert.php"method="POST" enctype="multipart/form-data">
            <label for="">Name:</label> 
            <input type="text" value="<?php echo $data['Name']?>; " name="name"><br>

            <label for="">Price:</label>
            <input type="text" value="<?php echo $data['Price']?>; " name="price" id=""><br>

            <label for="">Image:</label>
            <td><input type="file"  name="image" value="<?php echo $data['Image']?>; "><img src="value="<?php echo $data['Image']?>; ></td><br>
            <button name="update" value="update">Update</button>
            </form>
        </div>    
        </center>
    </body>
</html>