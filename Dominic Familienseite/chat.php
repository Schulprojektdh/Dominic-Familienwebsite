
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="chat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
</head>
<body>
    <nav>
         <div class="logo">
            Heule Website
         </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a href="welcome.php">Home</a></li>
            <li><a class="active" href="chat.php">Chat</a></li>
            <li><a href="calender.php">Terminplan</a></li>
            <li><a href="contact.php">Kontakt</a></li>
            <li><a href="logout.php"><img src="images/logout.png"></a></li>
         </ul>
      </nav>
<div class="container"> 

   <h1 class="h11">Chat</h1>
   <br></br>
   <table>
   <?php
      session_start();
            
      $server = "localhost";
      $user = "h144439_admin";
      $pass = "vscAf@SxynA2nXkp";
      $database = "h144439_dom";

      $connection = mysqli_connect($server, $user, $pass, $database);

      if (!$connection) {
            die("<script>alert('Verbindung Fehlgeschlagen.')</script>");
      }

      $abfrageZT = "SELECT * INTO temporarychat FROM chat ORDER BY chat_time DESC LIMIT 10";
      mysqli_query($connection, $abfrageZT);

      $abfrage = "SELECT * FROM chat ORDER BY chat_time DESC LIMIT 10";
      $result = mysqli_query($connection, $abfrage);

      while($row = mysqli_fetch_assoc($result))
      {
         $chatzeile = '<tr> ';
         $chatzeile .= '<td class="userzelle"> ' . $row["chat_wer"] . '</td>';
         $chatzeile .= '<td> ' . $row["chat_text"] . '</td>';
      
         $meindatum = strtotime($row["chat_time"]);
         $schoenesdatum = date('H:i  j. M Y',$meindatum);
         // echo $schoenesdatum;
         $chatzeile .= '<td class="zeitzelle"> ' . $schoenesdatum . '</td>';
         $chatzeile .= '</tr> ';

         echo $chatzeile;
      } 
               
   ?>
   </table>

   <form action="update_chat.php" method="post">
      <input type="text" id="id_chattext" name="chattext" placeholder="Deine Nachricht..." class="textein">
      <input type="hidden" id="id_hiddenuser" name="hiddenuser" value="<?php
      session_start();
      echo $_SESSION['username'];
   ?>">
      <input type="submit" value="senden" class="submit">
   </form>

</div>     

      
</body>
</html>
