<?php
require_once("../model/ticket.php");
require_once("../model/dataAccess.php");

session_start();

if (!isset($_SESSION["myBaskets"]))
{
  $_SESSION["myBaskets"] = [];
}

if (isset($_REQUEST["ticketId"]))
{
  $ticketId = $_REQUEST["ticketId"];
  $ticketById = getTicketByTicketNumber($ticketId);
  $_SESSION["myBaskets"][] = $ticketById;
}

$allTickets = getAllTickets();

require_once("../view/tickets_view.php");
?>