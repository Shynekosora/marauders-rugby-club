<!doctype html>
<html>
    <head>
        <title>Admin Home</title>
        <center><h1><b>Marauders Rugby Club - Admin Home</b></h1></center>
        <link rel="stylesheet" href="../style/border.css">
    </head>
    <boby>
      <center><input type="button" onclick="window.location.href = '../controller/home.php';" value="Home"/>
      <input type="button" onclick="window.location.href = '../controller/ticketlist.php';" value="Tickets"/>
      <input type="button" onclick="window.location.href = '../controller/basketlist.php';" value="Basket"/></center>

      <center><p>Welcome to Admin portal!</p></center>

      <p>Add new ticket to database</p>


      <form action="../controller/adminLoggedIn.php" method="POST">
      <label for="opponent">Opponent: </label>
      <input type="text" id="opponent" name="opponent" placeholder="Green FCI" required><br>

      <label for="matchType">Match Type: </label>
      <input type="text" id="matchType" name="matchType" placeholder="Cup" required><br>

      <label for="seating">Seating: </label>
      <input type="text" id="seating" name="seating" placeholder="North" required><br>

      <label for="date">Date: </label>
      <input type="text" id="date" name="date" placeholder="2020-05-04" required><br>

      <label for="price">Price: </label>
      <input type="number" id="price" name="price" placeholder="15.00" required><br>

      <input type="submit" name="submitNewTicket" value="Submit">
  </form> 

    </body>
</html>
