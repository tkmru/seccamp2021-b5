<?php
class Seccamp {
  private $year = 0;
  public function set_year($year){
    $this->year = $year;
  }
  public function get_year(){
    return $this->year;
  }
}

$object = new Seccamp();
$object->set_year(2021);
echo serialize($object);