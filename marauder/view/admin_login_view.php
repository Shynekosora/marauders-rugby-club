<!doctype html>
<html>
    <head>
        <title>Admin Login</title>
        <center><h1><b>Marauders Rugby Club - Admin Login</b></h1></center>
        <link rel="stylesheet" href="../style/border.css">
    </head>
    <boby>
      <center><input type="button" onclick="window.location.href = '../controller/home.php';" value="Home"/>
      <input type="button" onclick="window.location.href = '../controller/ticketlist.php';" value="Tickets"/>
      <input type="button" onclick="window.location.href = '../controller/basketlist.php';" value="Basket"/>
      <input type="button" onclick="window.location.href = '../controller/admin.php';" value="Admin login"/></center>

      <center><p>Log in using your user name and password to access admin page.</p></center>

  <form action="../controller/admin.php" method="POST">
      <label for="userName">Username: </label>
      <input type="text" id="userName" name="userName" placeholder="John" required><br>

      <label for="password">Password: </label>
      <input type="password" id="password" name="password" required><br>

      <input type="submit" name="submitAdminLogin" value="Submit">
  </form> 

    </body>
</html>
