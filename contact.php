<?php
session_start();
    include("connection.php");
    include("functions.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        if(!empty($nom) && !empty($email) && !empty($message))
        {
            //save to db
            $query = "insert into message (nom,email,message) values('$nom','$email','$message')";

            mysqli_query($con, $query);
            header("Location: index.php");
            die;
        }else
        {
            echo"<p class='alert'>Please enter valid informarion!</p>";
        }
    }
?>
<!DOCTYPE html>
<html>
   <?php require("head.php");?>

    <body>
        <?php require("header.php");?>
        <section class="contact form-temp" id="contact">
        <h2>Pour nous <span>contacter</span></h2>
            <form action="contact.php" method="POST" target="_self">
                <input oninput="validInputs()" name="nom" type="text" placeholder="Nom" id="nom" class="ng-invalid">
                <input oninput="validInputs()" name="email" type="email" placeholder="Email" id="email" class="ng-invalid">
                <input oninput="validInputs()" name="message" type="text" placeholder="Votre message..." id="message" class="ng-invalid">
                <button class="btn">Soumettre</button>
            </form>
        </section>
        <?php require("footer.php");?>
        <script>
            function validInputs(){
                nom=document.getElementById('nom');
                email=document.getElementById('email');
                message=document.getElementById('message');
                //validate nom
                if(nom!="" && nom.value.length>=3){
                    nom.classList.add('ng-valid');
                    nom.classList.remove('ng-invalid');
                }else{
                    nom.classList.add('ng-invalid');
                    nom.classList.remove('ng-valid');
                }
                //validate email
                if(email.value!="" && email.value.includes('@')){
                    email.classList.add('ng-valid');
                    email.classList.remove('ng-invalid');
                }else{
                    email.classList.add('ng-invalid');
                    email.classList.remove('ng-valid');
                }
                //validate message
                if(message!="" && message.value.length>=10){
                    message.classList.add('ng-valid');
                    message.classList.remove('ng-invalid');
                }else{
                    message.classList.add('ng-invalid');
                    message.classList.remove('ng-valid');
                }    
            }
        </script>
    </body>
</html>