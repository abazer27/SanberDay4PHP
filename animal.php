<?php



class Animal{
    public $name , $legs , $cold_blooded;

    public function __construct($name, $legs , $cold_blooded)
    {
        $this->name=$name;
        $this->legs=$legs;
        $this->cold_blooded=$cold_blooded;
    }

    public function getAnimal(){
        $str = "Name : {$this->name}<br>Legs : {$this->legs}<br>Cold Blooded : {$this->cold_blooded}<br>";
        return $str;
    }
}
$sheep = new Animal("shaun", 4 , "no");
echo $sheep->getAnimal();

include 'frog.php';
include 'ape.php';
?>