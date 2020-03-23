<!doctype html>

<html>
    <head>
        <title>Home</title>
        <center><h1><b>Marauders Rugby Club</b></h1></center>
        <link rel="stylesheet" href="../style/border.css">
    </head>
    <boby>
      <center><input type="button" onclick="window.location.href = '../controller/home.php';" value="Home"/>
      <input type="button" onclick="window.location.href = '../controller/ticketlist.php';" value="Tickets"/>
      <input type="button" onclick="window.location.href = '../controller/basketlist.php';" value="Basket"/></center>

      <center><p>Welcome to the Marauders' home page, on this page you will be able to find all the games the Marauders play
    and the tickets availability.</p></center>

 <table id="ticketTable">
      <thead>
        <tr>
          <th>Opponent</th>
          <th>Match Type</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($allTickets as $ticket): ?>
        <tr>
          <td><?=$ticket->opponent ?></td>
          <td><?=$ticket->matchType ?></td>
          <td><?=$ticket->date ?></td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>

    <center><p>Click <a href="../controller/ticketlist.php">here</a> to navigate to "Tickets page".</p></center>
    </body>
</html>
