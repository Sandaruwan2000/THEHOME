<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="table" content="width=device-width, initial-scale=1.0">
    <title>View Report</title>
    <link rel="stylesheet" href="plan_table.css">
</head>
<body>

 
    <div class="vtype">
        <a href="plan.html"><button class="addnew">ADD NEW</button></a>
        <table class="vr">
            <thead>
                <tr>
                    <th scope="col">ID</th><br>
                    <th scope="col">Plan</th>
                    <th scope="col">Budget</th>
                    <th class="a">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "plan_table config.php";

                $sql = "SELECT * FROM `draw`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><img src="uploads/<?php echo $row['plan']; ?>" alt="Plan" width="200px" height="100px"></td>
                        <td><?php echo $row['budget'] ?></td>
                        <td>
                            <a href="update.php?updateid=<?php echo $row['id'];?> "><button class="edit">Edit</button></a> 
                            <a href="delete.php?deleteid=<?php echo $row['id'];?> "><button class="delete">Delete</button></a>
                        </td>
                    </tr>
                    <?php
                }     
               ?>
                
            </tbody>
        </table>
        
    </div>
    
   
   
</body>
</html>
   


 
      
   








