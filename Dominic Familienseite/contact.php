<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kontakt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
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
            <li><a href="chat.php">Chat</a></li>
            <li><a href="calender.php">Terminplan</a></li>
            <li><a class="active" href="contact.php">Kontakt</a></li>
            <li><a href="logout.php"><img src="images/logout.png"></a></li>
         </ul>
      </nav>
        <section>
          <div class="container">
            <form action="https://formspree.io/f/xlezanbn" method="POST" id="my-form">

              <div class="titel">
                <p></p>
                <h1>Kontakt</h1>
                <br></p>
              </div>

              <div class="form-group">
                <label for="firstName"> Vorname</label>
                <input type="text" id="firstName" name="firstName">
              </div>

              <div class="form-group">
                <label for="latsName"> Nachname</label>
                <input type="text" id="lastName" name="lastName">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
              </div>

              <div class="form-group">
                <label for="massage">Nachricht</label>
                <textarea name="massage" id="massage" cols="30" rows="10"></textarea>
              </div>

              <button type="submit">Senden</button>
            </form>
          </div>
          <div id="status"></div>
          </section>
      </div>
</body>
</html>
