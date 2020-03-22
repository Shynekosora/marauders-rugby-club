<!doctype html>

<html>
    <head>
        <title>Tickets</title>
        <center><h1><b>Tickets</b></h1></center>
        <link rel="stylesheet" href="../style/border.css">
    </head>
    <boby>
    <center><input type="button" onclick="window.location.href = '../controller/home.php';" value="Home"/>
    <input type="button" onclick="window.location.href = '../controller/ticketlist.php';" value="Tickets"/>
    <input type="button" onclick="window.location.href = '../controller/basketlist.php';" value="Basket"/></center>


    <center><p>This is the ticket page where you can add and purchase tickets to the games in your basket.</p></center>

    <table id="ticketTable">
      <thead>
        <tr>
          <th>Opponent</th>
          <th>Match Type</th>
          <th>Seating</th>
          <th>Date</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($allTickets as $ticket): ?>
        <tr>
          <td><?=$ticket->opponent ?></td>
          <td><?=$ticket->matchType ?></td>
          <td><?=$ticket->seating ?></td>
          <td><?=$ticket->date ?></td>
          <td>
            <form action="ticketlist.php" method="GET">
              <input type="hidden" value="<?= $ticket->ticketNumber ?>" name="ticketId"/>
              <input name="AddButton" type="submit" value="Add ticket">
            </form>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>

    <form action="ticketlist.php" method="GET">
      <label for="ticketFilter">Filter ticket by: </label>
      <select id="ticketFilter" name="filterValue">
        <option value="all">All tickets</option>
        <option value="opponent">Opponent</option>
        <option value="matchType">Match Type</option>
        <option value="seating">Seating</option>
        <option value="date">Date</option>
      </select>
      <br>
      <label for="searchValue">Search: </label>
      <input type="text" name="searchValue">
      <input type="submit">
    </form> 

    <p>Ticket(s) in basket: <?= $numberOfTickets ?></p> 

    </body>
    <footer>
    <p>Thank you for your purchase.</p>
    </footer>
</html>
