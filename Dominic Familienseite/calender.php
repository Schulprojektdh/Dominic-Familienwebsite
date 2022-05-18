<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="calender.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminplan</title>
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
            <li><a class="active" href="calender.php">Terminplan</a></li>
            <li><a href="contact.php">Kontakt</a></li>
            <li><a href="logout.php"><img src="images/logout.png"></a></li>
         </ul>
      </nav>
   <div class="content">
         <div id="container">
            <div id="header">
               <div id="monthDisplay"></div>
               <div>
                  <button id="backButton">Letzten Monat</button>
                  <button id="nextButton">Nächten Monat</button>
               </div>
            </div>

            <div id="weekdays">
               <div>Sontag</div>
               <div>Montag</div>
               <div>Dienstag</div>
               <div>Mittwoch</div>
               <div>Donnerstag</div>
               <div>Freitag</div>
               <div>Samstag</div>
            </div>

            <div id="calendar"></div>
         </div>

         <div id="newEventModal">
            <h2>Neues Event</h2>

            <input id="eventTitleInput" placeholder="Event Title" />

            <button id="saveButton">speichern</button>
            <button id="cancelButton">abbrechen</button>
         </div>

         <div id="deleteEventModal">
            <h2>Event</h2>

            <p id="eventText"></p>

            <button id="deleteButton">Löschen</button>
            <button id="closeButton">Schliessen</button>
         </div>

         <div id="modalBackDrop"></div>

         <script src="calender.js"></script>
      </div>
</div>
</body>
</html>
