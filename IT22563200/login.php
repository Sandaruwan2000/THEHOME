<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <style>
            .tab{
                border:1px solid black;
                width:400px;
                height:300px;
                margin-left:600px;
                background-color:blanchedalmond;
                margin-top:40px;
                border-radius :14px;
                font-size:20px;
                position: relative;
               top:50px;
                left:-170px ;

            }
            .a{
                border:1px solid black;
                width:400px;
                height:100px;
                
            }
            input(type = text){
                font-size = 30px;

            }
            .btn{
                background-color:rgb(223,143,143);
                color:black;
                border-radius:7px;
                width:100px;
                height:25px;
                position:relative;
                top:10px;
                left:100px;

            }
            body {
    background-image:url(img/b9.jpg);
    background-color: #cccccc;
    background-size: 1270px 570px;
  }
        </style>
        <script>
            function validation() {
                var username = document.getElementById("username").value;
                var password = document.getElementById("password").value;
                var type = document.getElementById("type").value;

                if (username === "lahiru" && password === "12345" && type === "Customer") {
                    window.location.href = "project.php";
                    window.alert("You have successfully logged in");
                } else if (username === "chamishka" && password === "67890" && type === "Admin") {
                    window.location.href = "IT22617378/project manager.php";
                    window.alert("You have successfully logged in");
                } else if (username === "sewmini" && password === "11121" && type === "Supplier") {
                    window.location.href = "supplier.php";
                    window.alert("You have successfully logged in");
                } else if (username === "divana" && password === "00000" && type === "Architecture") {
                    window.location.href = "IT22594372/PROFILE/profile.html";
                    window.alert("You have successfully logged in");
                }
                else if (username === "safwa" && password === "12345" && type === "Admin") {
                    window.location.href = "IT22628404/Sign Up/users/index.php";
                    window.alert("You have successfully logged in");
                } else {
                    window.alert("Can't login to your page");
                }
            }
        </script>
    </head>
    <body>
        <div class="tab">
        <form action="" method="post">
            <table align="center">
                <tr>
                    <th colspan="2"><h2 align="center">Login</h2></th>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" id="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td>
                        <select id="type" name="type">
                            <option value="Customer">Customer</option>
                            <option value="Admin">Admin</option>
                            <option value="Supplier">Supplier</option>
                            <option value="Architecture">Architecture</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="button" value="Submit" class="btn" onclick="validation()"></td>
                </tr>
            </table>
        </form>
        </div>
    </body>
</html>
