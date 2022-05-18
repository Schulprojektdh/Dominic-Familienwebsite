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
     
      $wer = $_POST['hiddenuser'];
      $was = $_POST['chattext'];

      /* echo "wer wars: " . $wer . "<br>";
      echo "was hat er geschrieben?: " . $was; */

      $update = "INSERT INTO `chat` (`chat_time`, `chat_text`, `chat_wer`) 
                VALUES(CURRENT_TIMESTAMP, '" 
                . $was . 
                "', '" 
                . $wer . 
                "')";
      /*  echo "Updatestring: " . $update; */

      mysqli_query($connection, $update);

      header("Location: chat.php");
               
   ?>