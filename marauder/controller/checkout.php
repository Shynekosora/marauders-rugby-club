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

require_once("../view/checkout_view.php");
?>