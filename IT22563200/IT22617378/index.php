<!DOCTYPE html>
<html lang ="en">
    <head>
        <title>Adds</title>
        <link rel= "stylesheet" href="style.css">
        <style>
        nav{
           width: 100%;
           background-color:black;
           overflow: auto;
       }
       ul{
           padding: 0;
           margin: 0 0 0 150px;
           list-style: none;
       }
       li{
           float: left;
       }
       .logo img{
           position: absolute;
           margin-top:15px ;
           margin-bottom: 10px;
           width: 60px;
           height: 60px;
       }
       nav a{
           width: 200px;
           height: 50PX;
           display: block;
           padding: 25px 15px;
           text-decoration:none ;
           color:white;
           text-align: center;
           font-size: 25PX;
       }
       nav a:link{
           color: white; 
       }
       nav a:visited{
           color: cadetblue;
       }
       nav   a:hover{
           color: red;
       }
       nav a:active{
           color:red;
       }
       .search-form{
           margin-top: 15px;
           float: right;
           margin-right: 100px;
       }
       input [type=text]{
           padding: 7 pxpx;
           font-size: 16px;
          
       }
       button{
           float: right;
           background-color: orange;
         
           padding: 7px;
           font-size: 16px;

       }
       .table{
        position: relative;
        top:200px ;
        left:40px ;
       }
       .main{
        position: relative;
        top:50px ;
        right:400px ;
       }
       body {
    background-image:url(images/b1.jpg);
    background-color: #cccccc;
    background-size: 1270px 830px;
  }
       </style>
         
    </head>
    
    <body>

<div class="logo"><a href="#"><img src="logo.jpeg"></a>
    </div>
    <nav>
        <ul>
            <li><a href="view the project.php">View the project</a></li>
            <li><a href="send message.php">send message</a></li>
            <li><a href="current status.php">Update the current status</a></li>
            <li><a href="index.php">Add</a></li>
        </ul>
        <form class="search-form">
            <input type="text" placeholder="search">
            <button>Search</button>
        </form>
    </nav>
   
        <center>
        <div class="main">   
        <form action="insert.php"method="POST" enctype="multipart/form-data">
            <label for="">Name:</label> 
            <input type="text" name="name"><br>

            <label for="">Price:</label>
            <input type="text" name="price" id=""><br>

            <label for="">Image:</label>
            <input type="file" name="image" id=""><br>
            <button name="upload">Upload</button>
            </form>
        </div>    
        </center>
        <!-----fetch data----->
        
        <table class="table" >
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
            </thead>
            <tbody>
                <?php
                include 'config.php';

                if(isset($_GET['Id'])){
                    $ID = $_GET['Id'];
                   $Delete =mysqli_query($con,"DELETE FROM `tblcard` WHERE Id= '$ID'");
                    
                }
                
                $pic = mysqli_query($con,"SELECT * FROM `tblcard`");
                while($row = mysqli_fetch_array($pic)){
                echo"
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[Name]</td>
                        <td>$row[Price]</td>
                        <td><img src='$row[Image]' width ='200px' height='100px'></td>
                        <td><a href='index.php? Id= ". $row['id']."' class='btn1'>Delete</a></td>
                        <td><a href='update.php? Id= ". $row['id']."' class='btn2'>Update</a></td>
                       
                        
                    </tr>
                    ";
                }
                ?>
            </tbody> 
        </table>
    </body>
</html>