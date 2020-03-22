<?php
require_once("../model/ticket.php");
require_once("../model/dataAccess.php");

session_start();

if (!isset($_SESSION["myBaskets"]))
{
  $_SESSION["myBaskets"] = [];
}

if (isset($_REQUEST["removeTicketId"]))
{
	$removeTicketId = $_REQUEST["removeTicketId"];
	$ticketById = getTicketByTicketNumber($removeTicketId);
	if (($key = array_search($ticketById, $_SESSION["myBaskets"])) !== false)
	{
		unset($_SESSION["myBaskets"][$key]);
	}
}

$ticketInBasket = $_SESSION["myBaskets"];
$numberOfTickets = sizeof($ticketInBasket);
$totalPrice = 0;
foreach ($ticketInBasket as $ticket) {
	$price = $ticket->price;
	$totalPrice += $price;
}


function clearAllTicketsInBasket() {
    session_unset("myBaskets");
  }
  
  if (isset($_GET["clearBasket"])) {
    clearAllTicketsInBasket();
  }

require_once("../view/basket_view.php");
?>
