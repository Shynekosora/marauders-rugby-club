<?php
require_once("../model/ticket.php");
require_once("../model/dataAccess.php");

session_start();

if (!isset($_SESSION["myBaskets"]))
{
  $_SESSION["myBaskets"] = [];
}

$ticketInBasket = $_SESSION["myBaskets"];
$numberOfTickets = sizeof($ticketInBasket);

function clearAllTicketsInBasket() {
    session_unset("myBaskets");
  }
  
  if (isset($_GET["clearBasket"])) {
    clearAllTicketsInBasket();
  }

require_once("../view/basket_view.php");
?>
