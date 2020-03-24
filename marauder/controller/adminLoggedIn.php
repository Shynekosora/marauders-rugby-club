<?php
require_once("../model/admin.php");
require_once("../model/dataAccess.php");

session_start();

if (isset($_POST["submitNewTicket"])) 
{
	$opponent = $_POST["opponent"];
	$matchType = $_POST["matchType"];
	$seating = $_POST["seating"];
	$date = $_POST["date"];
	$addToBasket = 0;
	$price = $_POST["price"];

	insertTicketData($opponent, $matchType, $seating, $date, $addToBasket, $price);
}

require_once("../view/admin_logged_in_view.php");
?>