<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Report</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>
<?php
include "header.php" ;
?>    


    <div class="vtype">
        
        <table class="vr" style=" position: relative; left:270px;" >
            <thead>
                <tr>
                    <th scope="col" >ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Add</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php
                include "db_conn.php";//database conector

                $sql = "SELECT * FROM `tblcard`";//retrive
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['Name'] ?></td>
                        <td><?php echo $row['Price'] ?></td>
                       
                     
                        <td><img src = "IT22617378/uploadimage/<?php echo $row['Image']; ?>" alt="Add" width="200px" height="100px"></td>
                       
                  
                </tr>   
                    <?php
                }     
               ?>
                
            </tbody>
        </table>
    </div>
    <?php
    include "footer.php" ;
    ?>  
</body>
</html>