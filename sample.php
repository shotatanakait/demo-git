<?php

class Person {
  private $name;
  private $age;
  private $height;

  public function __construct($name, $age, $height) {
    $this->name = $name;
    $this->age = $age;
    $this->age = $height;
  }

  public function hello() {
    echo "hello, " . $this->name . "!";
  }
}
