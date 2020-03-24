<?php
class Admin {
  private $adminID;
  private $adminRealName;
  private $adminUserName;
  private $adminPassword;

  function __get($admin) {
    return $this->$admin;
  }

  function __set($admin,$value) {
    $this->$admin = $value;
  }
}
?>
