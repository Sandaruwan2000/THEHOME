<!-- signup.html -->

<!DOCTYPE html>
<html>
  <head>
    <title>User Sign Up</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <script>
      // Function to display success or failure message
      function showMessage(message, isSuccess) {
        var messageElement = document.getElementById("message");
        messageElement.innerText = message;
        messageElement.classList.remove("success", "failure");
        messageElement.classList.add(isSuccess ? "success" : "failure");
        messageElement.style.display = "block";
      }

      // Function to validate the form before submission
      function validateForm() {
        // Perform additional form validation if needed
        return true;
      }

      // Function to handle form submission using AJAX
      function submitForm(event) {
        event.preventDefault();

        // Validate the form
        // if (!validateForm()) {
        //   return;
        // }

        // Create a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Prepare the form data
        var formData = new FormData(event.target);

        // Set up the request
        xhr.open("POST", "signup.php", true);

        // Set the event handler to handle the AJAX response
        xhr.onload = function () {
          if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            showMessage(response.message, response.success);
          }
        };

        // Send the request
        xhr.send(formData);
      }
    </script>
  </head>
  <body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> THE HOME </title>
    <link rel ="stylesheet" href="style.css">
   
</head>

<body class="bg-img">
<header class="header">
     <a href="#Home.html" class="logon">THE<span style="color: rgb(231, 231, 33);">HOME</span></a>
    <a href="#Home.html" ><img src="img/logo.png" alt="logo" title="THE HOME" class="logo"></a> 

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
     <img src="img/login.jpeg" alt="Login" class="login" >
     <div class="log">
     <ul >
        <li ><a href="#">LOGIN</a></li>
        <li style="color: #e0dbdb;"></a> / </li>
        <li><a href="#">RERISTER</a></li>
     </ul>
    </div>
</header>

    <div class="container mt-100">
      <h2>CREATE ACCOUNT</h2>
      <BR>

      <form method="POST" action="signup.php" onsubmit="submitForm(event);">
        <label>Full Name:</label>
        <input type="text" name="full_name" required /><br />

        <label>Username:</label>
        <input type="text" name="username" required /><br />

        <label>Email:</label>
        <input
          type="email"
          name="email"
          pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
          required
        /><br />

        <label>Password:</label>
        <input
          type="password"
          name="password"
          pattern="^.{8,}$"
          title="Password must be at least 8 characters long and contain at least one digit, one lowercase letter, one uppercase letter, and one special character."
          required
        /><br />

        <label>User Role:</label>
        <select name="user_role" required>
          <option value="admin">Admin</option>
          <option value="manager">Manager</option>
          <option value="supervisor">Supervisor</option>
          <option value="customer">Customer</option></select
        ><br /> 
        
        <BR>    
  
        <div id="message" class="alert" style="display: none"></div>
      <h2> <input type="submit" value="Sign Up" /></h2>
    
    </form>
    </div>
   
  </body>
</html>
