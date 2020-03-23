<?php
class Customers {
  private $customerID;
  private $firstName;
  private $sureName;
  private $addressLineOne;
  private $addressLineTwo;
  private $email;
  private $contactNumber;
  private $purchaseID;

  function __get($customer) {
    return $this->$customer;
  }

  function __set($customer,$value) {
    $this->$customer = $value;
  }
}
?>
