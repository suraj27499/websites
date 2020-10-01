


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="signup.css">
    </head>
    <body>
        
        <div id="form"><form action='server.php' method='post'>
                <fieldset>
                    <legend>SignUp Here</legend>
                    <label>First Name</label>
                    <input type='text' name='firstname' placeholder="Enter your first name" required style=" width: 200px;height: 20px;border-color: greenyellow;"><br><br><br>
                    <label>Last Name</label>
                    <input type='text' name='lastname' placeholder='Enter your last name' style=" width: 200px;height: 20px;border-color: greenyellow;"><br><br><br>
                    <label>Username</label>
                    <input type='email' name='username' placeholder="xyz@outlook.com"   required style=" width: 200px;height: 20px;border-color: greenyellow;"><br><br><br>
                    <label>Password</label>
                    <input type='password' name='password' required placeholder='Password' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{,6}" style=" width: 200px;height: 20px;border-color: greenyellow;"><br><br>
                    <input type="checkbox" required >I Agree to Terms and Policies<br><br>
                    <div style="text-align: center"> <input type="submit" value="Signup" name="signup" ></div>
               
             
                </fieldset>
            </form>
           
        
        </div>
    </body>
</html>

