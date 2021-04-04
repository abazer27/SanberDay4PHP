<?php
require_once 'animal.php';
class Frog extends Animal{
    public $jump;

    public function __construct($name, $legs , $cold_blooded,$jump)
    {
        parent::__construct($name, $legs , $cold_blooded);
        $this->jump=$jump;
    }
    public function getAnimal()
    {
        $str = "<br>".parent::getAnimal() ."Jump : {$this->jump}";
        return $str;
    }
    public function jump (){
        return $this->jump;
    }
}

$kodok = new Frog("buduk",4,"no","hop hop");
echo $kodok->getAnimal();
echo "<br>";
// echo $kodok->jump();
// echo"<br>";

?>