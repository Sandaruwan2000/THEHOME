<!DOCTYPE html>
<html lang="en">
    <head>
        <title>send message</title>
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
                color:red
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
            .tab1{
                border: 1px solid black;
                width: 400px;
                height: 640px;
                background-color: blanchedalmond;
                margin-left: 500px;
                margin-top: 50px;
            }
            .btn1{
                padding: 10px;
                background-color: red;
                color: white;
                border-radius: 7px;
                cursor: pointer; 
                width: 150px;
                margin-top: 10px;
                margin-bottom: 10px;
                margin-left: 10px;
            }
            
        </style>
    </head>
    <body>
        <div class="logo"><a href="#"><img src="logo.jpeg"></a></div>
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
        <table align="center">
            <h3 style="text-align: center;"><u>confirmation message</u></h3>
            
            <tr>
                <td><h4>Email</h4></td>
                <td class="a"><input type="email"></td>
            </tr>
            <tr>
                <td><h4>Project ID</h4></td>
                <td class="a"><input type="text"></td>
            </tr>
            <tr>
                <td><h4>Construction Type</h4></td>
                <td class="a"><input type="text"></td>
            </tr>
            <tr>
                <td><h4>land</h4></td>
                <td class="a"><input type="text"></td>
            </tr>
            <tr>
                <td><h4>Budget</h4></td>
                <td class="a"><input type="number"></td>
            </tr>
            <tr>
                <td><h4>Message</h4></td>
                <td class="a"><input type="text"></td>
            </tr>
            <tr>
                <td><h4>Start Date</h4></td>
                <td class="a"><input type="date"></td>
            </tr>
            <tr>
                <td><h4>End Date</h4></td>
                <td class="a"><input type="date"></td>
            </tr>
            
            <tr>
                <td><button class="btn1">Save Changes</button></td>
            </tr> 
        </table>
      </div>
    </body>
</html>