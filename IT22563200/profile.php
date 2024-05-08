<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="footer.css" >
</head>
    <style> 
        body {
          background-image:url(img/b4.jpg);
          background-color: #cccccc;
          background-size: 1270px 700px;
          
         
        }
        </style>
</head>
<body>

<?php
include "header.php" ;
?>   
  
  <div class="vtype" style="height: 200px;">
     <div class="b">
        <table class="pro" style="border-radius: 10px; height: 200px;">
           
            <tr>
                    <th class="a"  scope="row">Full Name :</th> 
                    <th class="t" style="width:1000px ;"  scope="row" ></th> 

            </tr>
            
            <tr>   
                     <th class="a" scope="row" >User Name</th>
                     <th  class="t" ></th> 
            </tr>
            <tr>      
                    <th class="a" scope="row"  >Email :</th>
                    <th class="t" ></th>  
            </tr>
            <tr>     
                <th class="a" scope="row">User role :</th>
                 <th class="t" ></th> 
            </tr>
          
            
        </table>
        <button name="submit" id="submit" class="bt">Edit</button>
            </div>
        
    </div>

    <footer class="footer" style="position: relative;top:370px;">
        <img src="img/newlogo.png" class="logo">
        
    </footer>
   
   
    
</body>
</html>