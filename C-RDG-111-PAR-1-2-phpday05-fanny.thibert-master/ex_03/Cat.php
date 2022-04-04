<?php
include_once("Animal.php");
class Cat extends Animal
{
    private $color;
    public function __construct($name="", $color = null)
    {
        $this->name = $name;
        $this->color = $color;
        parent::__construct($name, 4, Animal::MAMMAL);
        echo $this->name . ": MEEEOOWWWW\n";
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        return $this->color = $color;
    }
    public function meow()
    {
        if($this->color!==null)
        {
            echo $this->name . " the " . $this->color . " kitty is meowing.\n";
        }
        else
        {
            echo $this->name . " the grey kitty is meowing.\n";
        }
            
    }
}
