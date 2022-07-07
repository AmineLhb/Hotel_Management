<?php
session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $Username = $_POST['username'];
        $Password = $_POST['password'];
        if(!empty($Username) && !empty($Password) && !is_numeric($Username))
        {
            //read from db
            $query = "select * from users where Username = '$Username' limit 1";

            $result = mysqli_query($con, $query);
            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['Password'] === $Password)
                    {
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: admin.php");
                        die;
                    }

                }
            }
            echo"<p class='alert'>Please enter valid Password or Username!</p>";
        }
        else
        {
            echo"<p class='alert'>Please enter valid Password or Username!</p>";
        }
    }
?>
<!DOCTYPE html>
<html>
   <?php require("head.php");?>

    <body>
    <?php require("header.php");?>
    <section class="contact" id="contact">

        <form method="POST" target="_self">
                <legend style="text-align:center"><h2><b>Sign in</b></h2></legend>
                    <input type="text" name="username" id="username" placeholder="Username" required><br>
                    <input type="password" name="password" id="password" placeholder="Password" required><br>
                <button class="btn"> Se connecter</button> 
        </form>
    </section>
    </body>
</html>