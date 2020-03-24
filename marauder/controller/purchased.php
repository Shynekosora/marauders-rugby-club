<?php
require_once("../model/dataAccess.php");
require_once("../model/ticket.php");
require_once("../model/purchases.php");
require_once("../model/customers.php");

session_start();
session_unset("myBaskets");

require_once("../view/purchased_view.php");
?>