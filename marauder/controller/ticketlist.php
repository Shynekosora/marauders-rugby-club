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

if (!isset($_REQUEST["filterValue"]) && !isset($_REQUEST["searchValue"]))
{
	$allTickets = getAllTickets();
}

if (isset($_REQUEST["filterValue"]) && isset($_REQUEST["searchValue"]))
{
	$searchValue = $_REQUEST["searchValue"];
	$filterValue = $_REQUEST["filterValue"];
	switch ($filterValue) {
		case 'opponent':
			$allTickets = getTicketByOpponent($searchValue);
			break;
		case 'matchType':
			$allTickets = getTicketByMatchType($searchValue);
			break;
		case 'seating':
			$allTickets = getTicketBySeating($searchValue);
			break;
		case 'date':
			$allTickets = getTicketByDate($searchValue);
			break;
		default:
			$allTickets = getAllTickets();
			break;
	}
}

$numberOfTickets = sizeof($_SESSION["myBaskets"]);

require_once("../view/tickets_view.php");
?>