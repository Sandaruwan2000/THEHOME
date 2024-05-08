<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Send message</title>
        <style>
            .container{
                 max-width: 800px;
                 height: 500px;
                 margin:0;
                 padding-left:105px; 
                 border:1px solid black;
            }
            form{
                padding-left: 1px;
            }
            input,textarea,label{
                display: block;
                width: 40%;
            }
            input[type = submit]{
                background-color: rgb(222, 200, 200);
                color: white;
                padding:5px ;
                color: black;
                border-bottom: none;
                margin-top: 30px;
                cursor: pointer;
                width: 100px;
                height: 30px;
                border-radius: 7px;
                position: relative;
                float: right;
                left: -480px;
            }
            input[type = submit]:hover{
                 background-color:green;
                 color: black;
            }
        </style>
    </head>
    <body>
        <centre>
        <div class="container">
            <h2>Confirmation message</h2>
            <form action="mail.php" method="post">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
                <label for="subject">Subject: </label>
                <input type="text" name="subject" id="subject">
                <label for="message">message:</label>
                <textarea name="message" cols="30" rows="10"></textarea>
                <label for="budjet">Budject : </label>
                <input type="text" name="budjet"id="budjet">
                <input type="submit" value="send">
                


            </form>
        </div>
    </centre>
    </body>
</html>