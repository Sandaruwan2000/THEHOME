<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> THE HOME </title>
    <link rel ="stylesheet" href="style.css">
   


   


</head>
<body>
<header class="header">
     <a href="Home.php" class="logon"><span style="color:white ;">THE</span><span style="color: rgb(231, 231, 33);">HOME</span></a>
    <a href="Home.php" ><img src="img/logo.png" alt="logo" title="THE HOME" class="logo"></a> 

     <div class="navbar">
        <ul >
            <li><a href="Home.php" >HOME</a></li><!--- Poppins --->
            <li><a href="IT22594372/ABOUT US/about.us.html.html" >ABOUT </a></li>   
            <li><a href="" >PROJECT</a></li>  
            <li><a href="IT22617378/news.php" >NEWS</a></li> 
           
            <li><a href="IT22608222\gallery.html" >GALLERY</a></li>
            <li><a href="IT22628404\career\careers_page.php" >CAREER</a></li>  
            <li><a href="IT22628404\ContactUs\Contact-US.php" >CONTACT </a></li>  

            <input type="text" placeholder="search...">

        </ul>
       
            
     </div>
     <img src="img/login.png" alt="Login" class="login" >
     <div class="log">
     <ul >
        <li ><a href="login.php">LOGIN</a></li>
        <li style="color: #e0dbdb;"></a> / </li>
        <li><a href="IT22628404\Sign Up\register.php">RERISTER</a></li>
     </ul>
    </div>
</header>


<div class="photo">
  
      <img src="img/i2.jpg" alt="#Project" width="1270px" height="500px"  class="slides">
      <img src="img/i1.jpg" alt="#Project" width="1270px" height="500px"  class="slides">
      <img src="img/i11.jpg" alt="#Project" width="1270px" height="500px"  class="slides" >
      <img src="img/i4.jpg" alt="#Project" width="1270px" height="500px"  class="slides" >
</div>
<?php //js function for image change
?>
<script>
    var a = 0 ;
    change() ;//function

function   change() {
var i ;
var x =document.getElementsByClassName("slides") ;
for(i = 0 ; i < x.length ; i++) //loop
{
    x[i].style.display ="none" ;
}
a++ ;
if(a > x.length){a=1}
x[a-1].style.display ="block" ;
setTimeout(change,3000) ; 
}
</script>

<div class="p1"><img src="img/i8.jpg" alt="Bulding" width="400px" height="300px"></div>

<div class="p2"><img src="img/i7.jpg" alt="Bulding" width="400px" height="300px"></div>   
<div class="p3"><img src="img/i4.jpg" alt="Bulding" width="400px" height="300px"></div> 

<div class="m1">

    Frame structures: Beams and columns Grids structures: latticed structure or dome Prestressed structures -Truss structures: Bar or truss members – Arch structure 
    With us, you’re getting a building that is designed, built, and installed by hand selected crews, thus ensuring reliable quality at best possible lead times. 
    We are among the most experienced and well-trusted steel building manufacturers in the country and live by our distinctions every day.
    </div>
<div class="m2">

    Frame structures: Beams and columns Grids structures: latticed structure or dome 
    Prestressed structures -Truss structures: Bar or truss members – Arch structure 
    With us, you’re getting a building that is designed, built, 
    and installed by hand selected crews, thus ensuring reliable quality at
     best possible lead times. We are among the most experienced and well-trusted steel building
      manufacturers in the country and live by our distinctions every day.
    </div>
<div class="m3" >

    Frame structures: Beams and columns Grids structures: latticed structure or
     dome Prestressed structures -Truss structures: Bar or truss members – Arch structure 
    With us, you’re getting a building that is designed, built, and installed by
     hand selected crews, thus ensuring reliable quality at best possible lead times. 
     We are among the most experienced and well-trusted steel building manufacturers in the 
     country and live by our distinctions every day.
    </div>

    <div class="l1"><img src="img/i15.jpg" width="620px" height="800px"></div>
    <div class="l1">
       

            <img src="img/i6.jpg" width="600px" height="260px">
            <img src="img/i5.jpg" width="600px" height="270px">
            <img src="img/i12.jpg" width="600px" height="260px">
    </div>

    <div class="gallary">
        <img src="img/i16.jpg" alt="gallary" width="400px" height="200px">
        <a href="#"><h2>Successful Previus Projects</h2><h3>
            Building for Manamperi Bathware (pvt) Ltd at Galle
            September 23, 2022 / Completed Projects
            Building for Manamperi Bathware (pvt) Ltd at Galle
        </h3></a>

    </div>

    <div class="news">
        <img src="img/i17.jpg" alt="News" width="400px" height="200px">
        <a href="#"><h2>Dalliy Updates</h2><h3>Building for Manamperi
             Bathware (pvt) Ltd at Galle
            September 23, 2022 / Completed Projects
            Building for Manamperi Bathware (pvt) Ltd at Galle</h3></a>

    </div>

    <div class="projects">
        <img src="img/i18.jpg" alt="Projects" width="400px" height="200px">
        <a href="Project"><h2>Select Good Things</h2>
            <h3>Triple “O” Six Luxury Hotel, Mirissa
            September 23, 2022 / Completed Projects
            Triple “O” Six Luxury Hotel, Mirissa,Southern</h3></a>
    </div>

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
                <h4>The Home Engineering, No. 245,</h4>
                <h4>Pallimulla,</h4>
                <h4>Matara, Sri Lanka</h4>
                <h4>info.thehome@gmail.com</h4>
                <h4>Tel : +94 412 221 111</h4>
                <h4>Fax : +94 412 228 777</h4>


            </div>
            <div class="f3">
                <div  class="g"><a href="gmail"><img src="img/g.jpg" width="80px" height="100px" ></a></div>
                <div  class="t"><a href="twitter"><img src="img/download.jpg" width="60px" height="60px" ></a></div>

                <div  class="f"><a href="facebook"><img src="img/fb.png" width="80px" height="100px" ></a></div>

            </div>

            <div class="end">
                <h4>© 2022 The Home Engineering | All Rights Reserved</h4>
                <a href=""><h4>Web design in Sri Lanka by Mobiz</h4></a>
            </div>


        </footer>
</body>
</html>