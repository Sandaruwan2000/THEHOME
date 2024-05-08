<!DOCTYPE html>
<html lang="en">
    <head>
        <title>View the project</title>
        <style>
            nav{
                width: 100%;
                background-color: black;
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
                color:red
            }
            .search-form{
                margin-top: 15px;
                float: right;
                margin-right: 100px;
            }
            .c{
                margin-top: 10px;
                margin-bottom: 10px;
                width: 750px;
                height: 300px;
                border: 1px solid black;
            }
            .table1{
                margin-top: 50px;
                margin-left: 30px;
            }
            table tr th{
                width: 100px;
                height: 20px;
                background-color: burlywood;
            }

            .table tr td {
                background-color:peachpuff;
            }
            .btn1{
                padding: 10px;
                background-color: red;
                color: white;
                border-radius: 7px;
                cursor: pointer; 
                width: 70px;
                margin-top: 10px;
                margin-bottom: 10px;
                margin-left: 10px;
            }
            
            .c,.d{
                display: inline-block;
                margin-top: 30px;
            }
            .c{
                background-color :honeydew ;
            }
            .d{
                border: 1px solid black;
                width: 480px;
                height: 300px;
                margin-top: -10px;
                position: relative;
                top:-10px;
                
            }
            .photo{
                width:480px ;
                height:300px ;
                
            }


            .g,.f,.t{
                
                
                position: relative;
                float: left;
               left: 800px;
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
                width: 1500px;
                height: 200px;
                background-color: black;
                color: white;
                margin-top: 30px;
                
            }
            .box1>a:link{
                color: white;
            }
            .box1>a:visited{
                color: cadetblue;
            }
            .box1>a:hover{
                color: red;
            }
            .box1>a:active{
                color: red;
            }

            
        </style>
    </head>
    <body>
        <div class="logo" ><a href="#"><img src="logo.jpeg"></a>
        </div>
        <nav>
            <ul>
                <li><a href="view the project.php">View the project</a></li>
                <li><a href="send message.php">send message</a></li>
                <li><a href="current status.php">Update the current status</a></li>
                <li><a href="index.php">Adds</a></li>

            </ul>
            <form class="search-form">
                <input type="text" placeholder="search">
                <button>Search</button>
            </form>

        </nav>
        
        <div class="b">
                <div class="c">
                    <table border="1" class="table1">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Land</th>
                            <th>Construction Type</th>
                            <th>Plan</th>
                            <th>Budget</th>
                            <th>Actions</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="edit2.html"><button class="btn1">Edit</button></a></td>
        
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="edit2.html"><button class="btn1">Edit</button></a></td>
        
                        </tr>
                        
                        </table>
                </div>
                <div class="d">
                    <a href="site2.avif"><img src="site2.avif" width="680px"height="320px" class="photo"></a>
                </div>
                <div class="end">
                    <div class="box1">
                        <h3>COMPANY</h3>
                        <ul>
                            <li><a href="About.html">About</a></li><br>
                            <li><a href="Gallery.html">Galllery</a></li><br>
                            <li><a href="career.html">carrer</a></li><br>
                            <li><a href="contact.html">Contact</a></li><br>
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
            
        </div>
    </body>
</html>