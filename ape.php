<?php
require_once 'animal.php';
class Ape extends Animal{
    public $yell;

    public function __construct($name, $legs , $cold_blooded,$yell)
    {
        parent::__construct($name, $legs , $cold_blooded);
        $this->yell=$yell;
    }
    public function getAnimal()
    {
        $str = "<br>".parent::getAnimal() ."Jump : {$this->yell}";
        return $str;
    }
    public function yell (){
        return $this->yell;
    }
}

$sunggokong = new Ape("Kera Sakti",2,"no","Auoo");
echo $sunggokong->getAnimal();
echo "<br>";
// echo $sunggokong->yell();

?>
