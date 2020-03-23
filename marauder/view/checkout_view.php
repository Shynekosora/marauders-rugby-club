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

    <form>
  		<label for="firstName">First name: </label>
  		<input type="text" id="firstName" name="firstName" placeholder="John"><br>

  		<label for="lastName">Last name: </label>
  		<input type="text" id="lastName" name="lastName" placeholder="Smith"><br>

  		<label for="addressLineOne">Address Line 1: </label>
  		<input type="text" id="addressLineOne" name="addressLineOne" placeholder="10 Harlow Rd"><br>

  		<label for="addressLineTwo">Address Line 2: </label>
  		<input type="text" id="addressLineTwo" name="addressLineTwo" placeholder="London"><br>

  		<label for="email">Email: </label>
  		<input type="email" id="email" name="email" placeholder="test@google.com"><br>

  		<label for="contactNumber">Contact Number: </label>
  		<input type="text" id="contactNumber" name="contactNumber" placeholder="02837482736"><br>

  		<input type="submit" value="Submit">
	</form> 

    </body>
    <footer>
    </footer>
</html>
