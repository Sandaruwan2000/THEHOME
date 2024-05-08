<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE HOME</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header">
     <a href="#Home.html" class="logon">THE<span style="color: rgb(231, 231, 33);">HOME</span></a>
    <a href="#Home.html"><img src="logo.jpg" alt="logo" title="THE HOME" class="logo"></a> 

     <div class="navbar">
        <ul>
            <li><a href="#Home.html">HOME</a></li><!--- Poppins --->
            <li><a href="#">ABOUT</a></li>   
            <li><a href="#Project.html">PROJECT</a></li>  
            <li><a href="#">NEWS</a></li> 
           
            <li><a href="#">GALLERY</a></li>
            <li><a href="IT22628404/careers_page.php">CAREER</a></li>  
            <li><a href="#">CONTACT</a></li>  

            <input type="text" placeholder="search...">
        </ul>    
     </div>
     <img src="img/login.jpeg" alt="Login" class="login">
     <div class="log">
     <ul>
        <li><a href="#">LOGIN</a></li>
        <li style="color: #e0dbdb;"></li> /
        <li><a href="#">REGISTER</a></li>
     </ul>
    </div>
</header>

<!-- section 1 cover photo -->

<!-- <div class="section" style="background-image: url(cover.png);"></div> -->


<section class="image-section">
  <div class="image-overlay">
    <i><b><h1>CAREERS</h1><b></i>
    <b><p>Become A Chapter In The Progression Of Innovation</p></b>
  </div>
</section>

<!-- Section 2 career paragaraph -->

<!-- <div class="section1">
    <div class="centered-div">
      <h1>CAREERS</h1>
      <p>"Careers play a significant role in shaping our lives and providing us with opportunities to pursue our passions and make a meaningful impact. A career is more than just a job; it's a path of professional growth and personal development. It encompasses the skills, experiences, and achievements accumulated over time, leading to various job opportunities and positions. As individuals, we aspire to find fulfilling careers that align with our interests, values, and goals. In today's dynamic job market, exploring diverse career options and staying adaptable is crucial. Whether you're just starting your career journey or seeking new opportunities, job vacancies offer a gateway to exciting possibilities. They provide a chance to leverage your skills and expertise, learn and grow within a specific field, and contribute to a company's success. Embracing the right career path can bring satisfaction, fulfillment, and a sense of purpose as you navigate through the professional landscape."</p>
    </div>
</div>
 -->
<!-- section 3 php with content swapping -->

<div class="section3">

    <center>
        <form method="post">
            <button type="submit" name="button1" style="height: 50px;width:300px;background-color: #007fff; border-radius: 45px; color: white;"><b><h3>Overview</h3></b></button>
            <button type="submit" name="button2" style="height: 50px;width:300px;background-color: #007fff; border-radius: 45px;color: white;"><b><h3>Job Vacancies</h3></b></button>
        </form>
    </center>

    <div class="content" style="margin-top:50px;">
        <?php
       if (isset($_POST['button1']) || !isset($_POST['button1']) && !isset($_POST['button2'])) {
     echo '<center><h1><b><u>Overview.... </u></b></h1></center>';

    echo '<div class="container">';
    echo '<div class="image-container">';
    echo '<img src="overview1.jpeg" alt="Image">';
    echo '</div>';
    echo '<div class="text-container">';
    echo '<p>"Welcome to our Career Job Vacancy page! We are a dynamic and innovative company offering exciting opportunities for talented individuals like you. Join our team and embark on a rewarding career journey where you can make a real impact. We strive to create a collaborative and inclusive work environment that fosters growth and development. With a diverse range of roles across various departments, we provide a platform for you to unleash your potential and achieve professional success. Explore our job vacancies and take the next step towards shaping your future with us."</p>';
    echo '</div>';
    echo '</div>';

    echo '<style>
    .container {
        display: grid;
        grid-template-columns: auto 1fr;
        gap: 20px;
        align-items: center;
        background-color:white;
        width:100%;
        margin-top:40px;
    }
    
    .image-container img {
        max-width: 700px;
        height: 500px;
        border-radius:45px;
    }
    
    .text-container {
        font-size: 18px;
        line-height:1.5;
        background-color:white;
        color:grey;
        

    }
    </style>';
} elseif (isset($_POST['button2'])) {
            $jobVacancies = array(
                array(
                    'image' => 'image1.png',
                    'title' => 'Civil Engineer ',
                    'description' => 'Join our team as a Civil Engineer and contribute to exciting construction projects that shape the world around us.',
                ),
                array(
                    'image' => 'image2.png',
                    'title' => 'HR Manager ',
                    'description' => 'Seeking an experienced HR Manager to lead and optimize our human resources functions, ensuring the growth and success of our organization and its employees.',
                ),
                array(
                    'image' => 'image3.png',
                    'title' => 'Junior Architect ',
                    'description' => 'Join our team as a Junior Architect and contribute to the design and development of innovative architectural projects, while gaining valuable experience in a collaborative and dynamic environment.',
                ),
                array(
                    'image' => 'image4.png',
                    'title' => 'Quantity serviour',
                    'description' => 'Seeking a skilled and detail-oriented Quantity Surveyor to join our team. Responsible for accurately estimating project costs, conducting site visits, and providing cost control and procurement advice.',
                ),
            );

            echo '<style>
                .job-container {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-around;
                    margin-top:40px;
                }
                .job-card {
                    width: 300px;
                    background-color: #f4f4f4;
                    padding: 20px;
                    margin-bottom: 20px;
                    text-align: center;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                }
                .job-card img {
                    max-width: 100%;
                    height: auto;
                    margin-bottom: 10px;
                }
                .job-card h3 {
                    font-size: 20px;
                    margin-bottom: 10px;
                }
                .job-card p {
                    font-size: 16px;
                    margin-bottom: 20px;
                }
                .apply-button {
                    display: inline-block;
                    padding: 10px 20px;
                    background-color: #007bff;
                    color: #fff;
                    text-decoration: none;
                    border-radius: 4px;
                    transition: background-color 0.3s ease;
                }
                .apply-button:hover {
                    background-color: #0056b3;
                }
            </style>';

            echo '<center><h1><b><u>Our Jobs ... </u></b></h1></center>';

            echo '<div class="job-container">';
            foreach ($jobVacancies as $job) {
                echo '<div class="job-card">';
                echo '<img src="' . $job['image'] . '" alt="' . $job['title'] . '" onclick="showImage(\'' . $job['image'] . '\')" />';
                echo '<h3>' . $job['title'] . '</h3>';
                echo '<p>' . $job['description'] . '</p>';
                echo '<a href="https://docs.google.com/forms/d/1oL0GxdadheCOyWJih7bRuNpsQviMS1u9dNZtzyvfqGc/edit?ts=6473a367 " class="apply-button">Apply</a>';
                echo '</div>';
            }
            echo '</div>';
        }
        ?>
    </div>

</div>

<script>
function showImage(imageUrl) {
  window.open(imageUrl, '_blank', 'width=600,height=400');
}
</script>
     

</body>
</html>
