<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit the profile</title>
        <style>
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
            .a{
                background-color: bisque;

            }
            div{
                border: 1px solid black;
                width: 400px;
                height: 600px;
                background-color: blanchedalmond; 
                margin-left: 500px;
                margin-top: 50px;
            }
            td{
                width: 100px;
                height: 30px;
            }
            div input{
                height: 30px;
            }
           
        </style>
    </head>
    <body>
      <div class="tab1">
        <table align="center">
            <h3 style="text-align: center;">Edit the profile</h3>
            <tr>
                <td><h4>Name</h4></td>
                <td class="a"><input type="text"></td>
            </tr>
            <tr>
                <td><h4>Email</h4></td>
                <td class="a"><input type="email"></td>
            </tr>
            <tr>
                <td><h4>land</h4></td>
                <td class="a"><input type="text"></td>
            </tr>
            <tr>
                <td><h4>Construction Type</h4></td>
                <td class="a"><input type="text"></td>
            </tr>
            <tr>
                <td><h4>plan</h4></td>
                <td class="a"><input type="text"></td>
            </tr>
            <tr>
                <td><h4>Budget</h4></td>
                <td class="a"><input type="number"></td>
            </tr>
            
            <tr>
                <td><button class="btn1">Save Changes</button></td>
            </tr> 
        </table>
      </div>
        
    </body>
</html>