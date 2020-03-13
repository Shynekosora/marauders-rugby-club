<!doctype html>

<html>
    <head>
        <title>Tickets</title>
        <center><h1><b>Tickets</b></h1></center>
    </head>
    <boby>
    <center><input type="button" onclick="window.location.href = 'home.php';" value="Home"/>
    <input type="button" onclick="window.location.href = 'ticketlist.php';" value="Tickets"/>
    <input type="button" onclick="window.location.href = 'basketlist.php';" value="Basket"/></center>


    <center><p>This is the ticket page where you can add and purchase tickets to the games in your basket.</p></center>

    <table>
      <thead>
        <tr>
          <th>Opponent</th>
          <th>Match Type</th>
          <th>Seating</th>
          <th>Date</th>
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

    <p>Ticket(s) in basket: <?= $numberOfTickets ?></p> 


    </body>
    <footer>
    <p>Thank you for your purchase.</p>
    </footer>
</html>
