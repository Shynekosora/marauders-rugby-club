<?php
require_once("../model/dataAccess.php");
require_once("../model/ticket.php");
require_once("../model/purchases.php");
require_once("../model/customers.php");

session_start();

if (!isset($_SESSION["myBaskets"]))
{
  $_SESSION["myBaskets"] = [];
}

$ticketInBasket = $_SESSION["myBaskets"];
$numberOfTickets = sizeof($ticketInBasket);
$totalPrice = 0;
foreach ($ticketInBasket as $ticket) {
	$price = $ticket->price;
	$totalPrice += $price;
}

if (isset($_POST["checkoutSubmit"]))
{
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$addressLineOne = $_POST["addressLineOne"];
	$addressLineTwo = $_POST["addressLineTwo"];
	$email = $_POST["email"];
	$contactNumber = $_POST["contactNumber"];
	$purchaseID = rand(1,10000);

	insertCustomersData($firstName, $lastName, $addressLineOne, $addressLineTwo, $email, $contactNumber, $purchaseID);
	header('Location: purchased.php');
}

require_once("../view/checkout_view.php");
?>