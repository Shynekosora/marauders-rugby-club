<?php
class Purchases {
  private $purchaseID;
  private $customerID;
  private $ticketNumber;

  function __get($purchase) {
    return $this->$purchase;
  }

  function __set($purchase,$value) {
    $this->$purchase = $value;
  }
}
?>
