<?php
class Food{
  private $name;

  private $price;

  public function __construct($name,$price){
    $this->name = $name;
    $this->price = $price;
  }

  function show_price(){
    echo $this->price;
  }
}

class Animal{
  private $name;

  private $height;

  private $weight;

  public function __construct($name,$height,$weight){
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }

  function show_height(){
    echo $this->height;
  }
}

$orange = new Food('orange',100);
$hamster = new Animal('hamster',20,200);

print_r($orange);
echo "<br>";
print_r($hamster);
echo "<br>";
$orange ->show_price();
echo "<br>";
$hamster ->show_height();