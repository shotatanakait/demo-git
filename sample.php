<?php

class Person {
  private $name;
  private $age;
  private $height;
  private $weight;

  public function __construct($name, $age, $height, $weight) {
    $this->name = $name;
    $this->age = $age;
    $this->height = $height;
    $this->weight = $weight;
  }

  public function hello() {
    echo "hello, " . $this->name . "!";
  }
}
