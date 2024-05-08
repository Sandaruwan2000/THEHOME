<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    
    <style>
        /* basic formating */
        *{
    margin: 0;
    padding: 0;
    font-family:'popins',sans-serif;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    transition: all .2s linear;
}

body{
    background-color:white;
}
.header{
    font-size:large ;
    position: sticky;
    box-shadow: var(box-shadow);
    top :0 ;left:0 ;right: 0;
    background-color:black;
    height: 100px;
    
}



    .logon{
        color:white ;
        font-size: larger;
        position:relative;
        top:30px ;
    }
    .logo{
        width: 100px;
        height: 100px;
        float :left ;
        padding: 10px;
    }
  
 
    .navbar{
        width: 100px;
        margin: 20px;
        padding: 20px;
        font-size: large ;
        text-decoration: none;
        text-align: right;
        padding-left: 220px;
        position: relative;
        top:-30px ;
      
        
    }.navbar ul  {
        display:inline-flex;
        list-style: none;
        position: relative;
      
       
    }
    .navbar ul li{
            margin: 10px;
            left: 40px;
            bottom: 15px;
            position: relative;
            text-align: right;
           
    }
    .navbar ul li a{
        color : white ;
    }
    .navbar ul input[type=text]{
        float :right ;
        padding-right: 10px;
        margin-top: 10px;
        margin-right: 30px;
        border:none ;
        font-size: large;
        position: relative;
        top:-23px;
        right: -60px;
        width: 70px;
    }
    .navbar ul input[type=text]:focus{
        width:200px ;
    }
    .log ul{
        display:inline-flex;
        list-style: none;
        position: relative;
        float:right ;
        top :-100px ;
        right:25px ;

    }

    .log ul li{
        position: relative;
        top:10px ;
    }

    .log ul li a {
        font-size: large;
        color:white;
        

    }
    .login{
        width:90px;
        height: 90px;
        float: right;
        padding: 10px;
        position: relative;
        top:-140px ;
        border: 1px solid white;
        right:20px;
    }

    .content {
        width: 100%;
        height: 100vh;
        display: flex;
        padding: 10px;

    }

    .left-items {
        width: 200px;
        font-size: 18px;
        font-weight: bold;
        font-family: 'Roboto', sans-serif;
        flex: 3;
        margin-left: 20px;
        /* background-color: rgb(234, 201, 219); */
        list-style: none;
        justify-content: space-evenly;
        flex: 2;
    }

    .center-items {
        /* background-color: rgb(235, 206, 185); */
        flex: 6;
        /* justify-content: space-evenly; */
    }

    .left-item {
        color: rgb(76, 76, 76);
        padding: 12px;
    }

    .title {

        font-size: 18px;
        font-weight: bold;
        font-family: 'Roboto', sans-serif;
    }

    .sub-title {
        width: 80%;

    }

    .sub-lists {
        list-style: none;
        display: flex;
        font-size: 18px;
        padding: 10px;
    }

    .slash {
        margin-left: 10px;
        margin-right: 10px;
    }

    .sub-lists a {
        text-decoration: none;
        color: black;
    }

    .sub-lists .active {
        color: #030303;
        font-weight: bold;
    }

    .btn {
        display: flex;
        align-items: center;
        border: none;
        cursor: pointer;
        width: 100px;
        padding: 10px;
        font-size: 18px;
        margin-top: 20px;
        justify-content: space-around;
        background-color: transparent;
    }
    .footer{
    font-size:large ;
    position: sticky;
    box-shadow: var(box-shadow);
    top :0 ;left:0 ;right: 0;
    background-color:black;
    height: 320px;
    }

    .f1,.f2,.f3{
        border:1px solid black ;
        width: 400px;
        height: 300px;
        display: inline-block;
        font-family:'Times New Roman', Times, serif;


    }
    .g,.f,.t{
        display: inline-block;

    }
    .f2{
        color: white;
        position: relative;
        top:0px ;
    }

    .f1{
        color: white;
        position: relative;
        top:0px;
    }
    .f1 a{
        color: white;
    }
    .t{
        position: relative;
        top:-20px;
    }.f{
        position: relative;
        top:0px;
    }
    .g{
        position: relative;
        top:5px;
    }
    .f3{
        position: relative;
        top:-80px;
        left:50px;
    }
    .end{
        border: 1px solid black;
        background-color:black;
        width: 1270px;
        height: 40px;
        position: relative;
        top:-120px ;
        text-align: center;
        color: white;
    }
    .end a{
        color: white;
    }
    a:visited{
        color:yellow;
    }

    a:hover{
        color: red;

    }
    a:active{
    color:red;

    }
    </style>

</head>

<body>
    <header class="header">
        <a href="#Home.html" class="logon">THE<span style="color: rgb(231, 231, 33);">HOME</span></a>
       <a href="#Home.html" ><img src="images/logo.png.jpg" alt="logo" title="THE HOME" class="logo"></a> 
   
        <div class="navbar">
           <ul >
               <li><a href="#Home.html" >HOME</a></li><!--- Poppins --->
               <li><a href="#" >ABOUT </a></li>   
               <li><a href="#Project.html" >PROJECT</a></li>  
               <li><a href="#" >NEWS</a></li> 
              
               <li><a href="#" >GALLERY</a></li>
               <li><a href="#" >CAREER</a></li>  
               <li><a href="#" >CONTACT </a></li>  
   
               <input type="text" placeholder="search...">
   
           </ul>       
        </div>
        <img src="images/brand.png" alt="Login" class="login" >
        <div class="log">
        <ul >
           <li ><a href="#">LOGIN</a></li>
           <li style="color: #e0dbdb;"></a> / </li>
           <li><a href="#">RERISTER</a></li>
        </ul>
       </div>
   </header>
    <div class="content">
        <ul class="left-items">
            <a href="">
                <li class="left-item">Site Map</li>
            </a>
            <a href="">
                <li class="left-item">Supplier Registration</li>
            </a>
            <a href="">
                <li class="left-item">Intro</li>
            </a>
            <a href="">
                <li class="left-item">Home</li>
            </a>
            <a href="">
                <li class="left-item">Ongoing</li>
            </a>
            <a href="">
                <li class="left-item">About Us</li>
            </a>
            <a href="">
                <li class="left-item">Working At</li>
            </a>
            <a href="">
                <li class="left-item">Introduction</li>
            </a>
            <a href="">
                <li class="left-item">Market</li>
            </a>
            <a href="">
                <li class="left-item">Segments</li>
            </a>
            <a href="">
                <li class="left-item">Key Data</li>
            </a>
            <a href="">
                <li class="left-item">Projects</li>
            </a>
            <a href="">
                <li class="left-item">Human Rights</li>
            </a>
            <a href="">
                <li class="left-item">Our resources</li>
            </a>
            <a href="">
                <li class="left-item">Management Services</li>
            </a>
            <a href="">
                <li class="left-item">Health & Safety</li>
            </a>
            <a href="">
                <li class="left-item">Project & Services</li>
            </a>
        </ul>
        <div class="center-items">
            <div class="title">
                <h2>Supplier Registration</h2>
            </div>
            <br>
            <div class="sub-title">
                <hr>
                <ul class="sub-lists">
                    <a href="">
                        <li class="sub-list">Home</li>
                    </a> <span class="slash">/</span>
                    <a href="">
                        <li class="sub-list active">Supplier Registration</li>
                    </a>
                </ul>
                <hr>
            </div>
            <br>
            <p class="paragraph">
                Please use the following link to download SS CONSTRUCTIONS
                supplier Sub Contractor Information Form.
            </p>
            <a href="registration form new/main.html"><button class="btn" >
                <span class="material-symbols-outlined">
                     Download
                </span>
               </button></a>
        </div>
    </div>
    <br><br>
    <hr>
    <div class="upfooter">
        <footer class="footer">
        
            <div class="f1">
                <h2>Company</h2><br>
                <h4><a href="#">ABOUT</a></h4><br>
                <h4><a href="#">GALLERY</a></h4><br>
                <h4><a href="#">CAREER</a></h4><br>
                <h4><a href="#">CONTACT</a></h4>
        
            </div>
            <div class="f2">
                <h2>CONTACT</h2><br>
                <h4>Address :</h4>
                <h4>Manamperi Engineering, No. 245,</h4>
                <h4>Pallimulla,</h4>
                <h4>Matara, Sri Lanka</h4>
                <h4>info.thehome@gmail.com</h4>
                <h4>Tel : +94 412 221 111</h4>
                <h4>Fax : +94 412 228 777</h4>
        
        
            </div>
            <div class="f3">
                <div  class="g"><a href="gmail"><img src="images/google.jpg" width="80px" height="100px" ></a></div>
                <div  class="t"><a href="twitter"><img src="images/twitter.jpg" width="60px" height="60px" ></a></div>
                <div  class="f"><a href="facebook"><img src="images/facebook.jpg" width="80px" height="100px" ></a></div>
        
            </div>
        
            <div class="end">
                <h4>© 2022 Manamperi Engineering | All Rights Reserved</h4>
                <a href=""><h4>Web design in Sri Lanka by Mobiz</h4></a>
            </div>
        
        </footer>
    </div>    

    <script>
        function downloadWordFile() {
            var element = document.createElement('a');
            element.setAttribute('href', 'iwt register application.docx');
            element.setAttribute('download', 'iwt register application.docx');
            element.style.display = 'none';
            document.body.appendChild(element);
            element.click();
            document.body.removeChild(element);
        }
    </script>
</body>

</html>