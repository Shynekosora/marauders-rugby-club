<?php
class Ticket {
  private $ticketNumber;
  private $opponent;
  private $matchType;
  private $seating;
  private $date;
  private $addToBasket;

  function __get($ticket) {
    return $this->$ticket;
  }

  function __set($ticket,$value) {
    $this->$ticket = $value;
  }
}
?>
