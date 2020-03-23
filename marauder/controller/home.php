<?php
require_once("../model/ticket.php");
require_once("../model/dataAccess.php");

session_start();

$allTickets = getAllTickets();

require_once("../view/home_view.php");
?>
