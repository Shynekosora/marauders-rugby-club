<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db_host = "kunet";
$db_user = "k1811423";
$db_name = "db_k1811423";
$db_password = "12345678";

$pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function getAllTickets()
{
  global $pdo;
  $statement = $pdo->prepare('SELECT ticketNumber,opponent,matchType,seating,date,addToBasket,price FROM tickets');
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Ticket');
  return $result;
}

function getTicketBySeating($seatingtoSearchFor)
{
  global $pdo;
  $statement = $pdo->prepare('SELECT ticketNumber,opponent,matchType,seating,date,addToBasket,price FROM tickets WHERE seating = ?');
  $statement->execute([$seatingtoSearchFor]);
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Ticket');
  return $result;
}

function getTicketByDate($dateToSearchFor)
{
  global $pdo;
  $statement = $pdo->prepare('SELECT ticketNumber,opponent,matchType,seating,date,addToBasket,price FROM tickets WHERE date = ?');
  $statement->execute([$dateToSearchFor]);
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Ticket');
  return $result;
}

function getTicketByOpponent($opponentToSearchFor)
{
  global $pdo;
  $statement = $pdo->prepare('SELECT ticketNumber,opponent,matchType,seating,date,addToBasket,price FROM tickets WHERE opponent = ?');
  $statement->execute([$opponentToSearchFor]);
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Ticket');
  return $result;
}

function getTicketByMatchType($matchTypeToSearchFor)
{
  global $pdo;
  $statement = $pdo->prepare('SELECT ticketNumber,opponent,matchType,seating,date,addToBasket,price FROM tickets WHERE matchType = ?');
  $statement->execute([$matchTypeToSearchFor]);
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Ticket');
  return $result;
}

function getTicketByTicketNumber($ticketNumberToSearchFor)
{
  global $pdo;
  $statement = $pdo->prepare('SELECT ticketNumber,opponent,matchType,seating,date,addToBasket,price FROM tickets WHERE ticketNumber = ?');
  $statement->execute([$ticketNumberToSearchFor]);
  $result = $statement->fetchObject('Ticket');
  return $result;
}

function getAdminByAdminUserName($adminUserNameToSearchFor)
{
  global $pdo;
  $statement = $pdo->prepare('SELECT adminID,adminRealName,adminUserName,adminPassword FROM admin WHERE adminUserName = ?');
  $statement->execute([$adminUserNameToSearchFor]);
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Admin');
  return $result;
}

function insertCustomersData($firstName, $sureName, $addressLineOne, $addressLineTwo, $email, $contactNumber, $purchaseID)
{
  global $pdo;
  $statement = $pdo->prepare('INSERT INTO customers (firstName, sureName, addressLineOne, addressLineTwo, email, contactNumber, purchaseID) VALUES (?, ?, ?, ?, ?, ?, ?)');
  $statement->execute([$firstName, $sureName, $addressLineOne, $addressLineTwo, $email, $contactNumber, $purchaseID]);
}

function insertTicketData($opponent, $matchType, $seating, $date, $addToBasket, $price)
{
  global $pdo;
  $statement = $pdo->prepare('INSERT INTO tickets (opponent, matchType, seating, date, addToBasket, price) VALUES (?, ?, ?, ?, ?, ?)');
  $statement->execute([$opponent, $matchType, $seating, $date, $addToBasket, $price]);
}
?>
