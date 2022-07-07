<?php
   session_start();
   include("connection.php");
   include("functions.php");
   $user_data = check_login($con);
   $messages = mysqli_query($con, "SELECT * FROM message ORDER BY id DESC");
   $data = mysqli_fetch_all($messages);

   $reservations = mysqli_query($con, "SELECT * FROM reservation ORDER BY id DESC");
   $reserve = mysqli_fetch_all($reservations);
?>
   
<!DOCTYPE html>
<html>
   <?php require("head.php");?>

    <body>
    <header>
            <nav>
                <ul>
                    <li id="logo"><img src="images/hotel_booking.jpg"><a href="index.php" class="color-black">Booking Hotel</a></li>
                    <li><a href="logout.php" class="color-black">log out</a></li>
                    <li><a href="#messages" class="color-black"> Messages </a></li>
                    <li><a href="#reservations" class="color-black"> Reservations </a></li>
                </ul>
            </nav>
    </header>
    <div id="messages">
        <h1 style="margin-top:4rem; color:yellow;"> messages </h1>
        <table id="customers">
      <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Message</th>
      </tr>
      <?php 
            foreach($data as $msg){
                echo "<tr>";
                echo "<td>$msg[1]</td>";
                echo "<td>$msg[2]</td>";
                echo "<td>$msg[3]</td>";
                echo "</tr>";
            }
        ?>
        
        </table>
    </div>
    <div id="reservations">
        <h1 style="margin-top:4rem; color:yellow;"> reservations </h1>
        <table id="customers">
      <tr>

        <th>Nom</th>
        <th>numéro tél</th>
        <th>date d'arrivé</th>
        <th>date de départ</th>
        <th>prix par nuit</th>
        <th>clé du chambre</th>
      </tr>
      <?php 
            foreach($reserve as $res){
                echo "<tr>";
                echo "<td>$res[1]</td>";
                echo "<td>$res[2]</td>";
                echo "<td>$res[3]</td>";
                echo "<td>$res[4]</td>";
                echo "<td>$res[5]</td>";
                echo "<td>$res[6]</td>";
                echo "</tr>";
            }
        ?>
        
        </table>
    </div>

    
        <?php require("footer.php");?>
        <script src="script.js"></script>
    </body>
</html>