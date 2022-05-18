<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
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
            <li><a class="active" href="welcome.php">Home</a></li>
            <li><a href="chat.php">Chat</a></li>
            <li><a href="calender.php">Terminplan</a></li>
            <li><a href="contact.php">Kontakt</a></li>
            <li><a href="logout.php"><img src="images/logout.png"></a></li>
         </ul>
      </nav>
   <div class="content">
      <?php echo "<h1>Willkommen " . $_SESSION['username'] . "</h1>"; ?>
   </div>
      <br></br>
</body>
</html>
