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
        <a href="project.php"><button class="addnew">ADD NEW</button></a>
        <table class="vr">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Construction Type</th>
                    <th scope="col">Land size</th>
                    <th scope="col">Plan</th>
                    <th scope="col">Budget</th>
                    <th class="a">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "db_conn.php";//dataase conector

                $sql = "SELECT * FROM `plan`";//retreive in database
                
                
            
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['Construction_type'] ?></td>
                        <td><?php echo $row['Land_Size'] ?></td>
                        <td><img src="upload/<?php echo $row['image']; ?>" alt="Plan" width="200px" height="100px"></td>
                        <td><?php echo $row['Budget'] ?></td>
                        <td>
                            <a href="update_form.php?updateid=<?php echo $row['id'];?> "><button class="edit">Edit</button></a> 
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