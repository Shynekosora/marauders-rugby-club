<!doctype html>

<html>
    <head>
        <title>Checkout</title>
        <center><h1><b>Checkout</b></h1></center>
        <link rel="stylesheet" href="../style/border.css">
    </head>

    <boby>
      <center><input type="button" onclick="window.location.href = '../controller/home.php';" value="Home"/>
      <input type="button" onclick="window.location.href = '../controller/ticketlist.php';" value="Tickets"/>
      <input type="button" onclick="window.location.href = '../controller/basketlist.php';" value="Basket"/></center>

<table id="ticketTable">
      <thead>
        <tr>
          <th>Opponent</th>
          <th>Match Type</th>
          <th>Seating</th>
          <th>Date</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($ticketInBasket as $ticket): ?>
        <tr>
          <td><?=$ticket->opponent ?></td>
          <td><?=$ticket->matchType ?></td>
          <td><?=$ticket->seating ?></td>
          <td><?=$ticket->date ?></td>
          <td>£<?=$ticket->price ?></td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>

    <p>Total price: £<?= $totalPrice ?></p>
    
    <p>Ticket(s) in basket: <?= $numberOfTickets ?></p> 

    <form action="../controller/purchased.php" method="POST">
  		<label for="firstName">First name: </label>
  		<input type="text" id="firstName" name="firstName" placeholder="John" required><br>

  		<label for="lastName">Last name: </label>
  		<input type="text" id="lastName" name="lastName" placeholder="Smith" required><br>

  		<label for="addressLineOne">Address Line 1: </label>
  		<input type="text" id="addressLineOne" name="addressLineOne" placeholder="10 Harlow Rd" required><br>

  		<label for="addressLineTwo">Address Line 2: </label>
  		<input type="text" id="addressLineTwo" name="addressLineTwo" placeholder="London" required><br>

  		<label for="email">Email: </label>
  		<input type="email" id="email" name="email" placeholder="john-smith@example.com" required><br>

  		<label for="contactNumber">Contact Number: </label>
  		<input type="tel" id="contactNumber" name="contactNumber" placeholder="02837482736" required><br>

  		<input type="submit" value="Submit">
	</form> 

    </body>
    <footer>
    </footer>
</html>
