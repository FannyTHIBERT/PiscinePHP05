<?php
include_once("Animal.php");
class Shark extends Animal
{
    private $frenzy;
    public function __construct($name="")
    {
        $this->name = $name;
        $this->frenzy = false;
        parent::__construct($name, 0, Animal::FISH);
        echo "A KILLER IS BORN!\n";
    }
    public function smellBlood($smell=true)
    {
        $this->frenzy = $smell;
        return;
    }
    public function status()
    {
        if($this->frenzy == true)
        {
            echo $this->name . " is smelling blood and wants to kill.\n";
        }
        else
        {
            echo $this->name . " is swimming peacefully.\n";
        }
    }
}