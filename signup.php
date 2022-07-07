<?php
session_start();
    include("connection.php");
    include("functions.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $Username = $_POST['username'];
        $Password = $_POST['password'];
        $Name = $_POST['name'];
        if(!empty($Username) && !empty($Password) && !is_numeric($Username))
        {
            //save to db
            $user_id = random_num(20);
            $query = "insert into users (user_id,Username,Name,Password) values('$user_id','$Username','$Name','$Password')";

            mysqli_query($con, $query);

            header("Location: signin.php");
            die;
        }else
        {
            echo"Please enter valid informarion!";
        }
    }
?>
<!DOCTYPE html>
<html>
    <?php require("head.php");?>
    <body>
    <?php require("header.php");?>
        <form method="POST" target="_self">
            <div class="class1">
                <legend>Sign Up</legend><br>
                <p>
                    <input type="text" name="name" id="name" placeholder="Enter your name" required><br>
                </p>
                <p>
                    <input type="text" name="username" id="username" placeholder="Username" required><br>
                </p>
                <p>
                    <input type="Password" name="password" id="password" placeholder="Password" required><br>
                    <br>
                </p>
                <p>
                    <input type="submit" name="Register" id="Register" value="Register">
                </p>
                <p>
                    <input type="reset" name="Annuler" id="Annuler" value="Cancel">
                </p>
                <p> Do you have an account? <a href="signin.php"> Sign In </a><br> </p>
            </div>       
        </form>
    </body>
</html>