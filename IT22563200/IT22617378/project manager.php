<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Project Manager</title>
        <style>
             nav{
                width: 100%;
                background-color:black;
                overflow: auto;
                width: 1300px;
                position: relative;
                left:-8px;
                top:-8px;
                height: 100px;
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
                position: relative;
              left:50px;
                top:-85px;

            }
            input [type=text]{
                padding: 7 pxpx;
                font-size: 16px;
               
            }
            button{
                float: right;
                background-color: orange;
                position: relative;
                padding: 7px;
                font-size: 16px;
               

            }
            
            .tab1{
                border: 2px solid black;
                width:500px;
                height: 380px;
                margin-top: 10px;
                margin-left: 10px;
                background-color:lightgrey;
                margin-bottom: 20px;
            }
            .t1{
                margin-top: 20px;
                margin-right: 20px;
                

            }

            table tr{
                font-size: 20px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                background-color: lemonchiffon;
                
            }
            .b{
                width: 300px;
                height: 50px;
                background-color: white;
            }
            .a{
                width: 200px;
                height:50px;
            }
            .btn1{
               padding: 10px;
               background-color: green;
               color: white;
               border-radius: 7px;
               cursor: pointer;
               width: 50px;
               margin-top: 10px;
            }
            .g,.f,.t{
                
                
                position: relative;
                float: left;
               left: 500px;
            }

            .f a{
                position:relative ;
                top:25px;
                left:10px;
            }
            .t a{
                position: relative;
                top:25px;
            }
            .box1,.box2,.box3{
                float: left;
                margin-right: 40px;
                background-color: black;
            }
            .box1 ul li a{
            
               position: relative;
               left:-130px ;
               text-decoration: none;
            }
            .box2{
                position: relative;
                left :200px ;
                top:0px ;
                width :200px ;
                height: 150px;
            }
            .end{
                width: 1270px;
                height: 200px;
                background-color: black;
                color: white;
                position: relative;
                left:-5px ;
                
            }
            body {
    background-image:url(b7.jpg);
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
        <div class="tab1">
            <table border="1" class="t1">
                <tr>
                    <td class="a">Name</td>
                    <td class="b"></td>
                </tr>   
                <tr>
                    <td class="a">ComanyID</td>
                    <td class="b"></td>
                </tr>  
                <tr>
                    <td class="a">Post</td>
                    <td class="b"></td>
                </tr>  
                <tr>
                    <td class="a">Email</td>
                    <td class="b"></td>
                </tr>  
                <tr>
                    <td class="a">Phone Number</td>
                    <td class="b"></td>
                </tr>   
                   
                 
            </table>
          <a href="edit1.html"><p><button class="btn1">Edit</button></p></a>  
        </div>
       
        <div class="end">
            <div class="box1">
                <h3>COMPANY</h3>
                <ul>
                    <li><a href="#">About</a></li><br>
                    <li><a href="#">Galllery</a></li><br>
                    <li><a href="#">carrer</a></li><br>
                    <li><a href="#">Contact</a></li><br>
                </ul>
            </div>
            <div class="box2">
                <h2>Address</h2>
                <h3>The home Construction<br>No. 245,</h3>
                <h3>Pallimulla,</h3>
                <h3>Matara,SriLanka</h3>

            </div>
            <div class="box3">
                <div class="g"><a href="gmail"><img src="google.jpeg" width="80px"height="100px"></a></div>
                <div class="t"><a href="twitter"><img src="twitter.jpeg" width="40px"height="40px"></a></div>
                <div class="f"><a href="facebook"><img src="facebook.jpeg" width="40px" height="40px"></a></div>
                    
            </div>
            

        </div>
        
    </body>
</html>