<?php
require_once("../model/ticket.php");
require_once("../model/dataAccess.php");

session_start();

$ticketInBasket = $_SESSION["myBaskets"];

require_once("../view/basket_view.php");
?>
