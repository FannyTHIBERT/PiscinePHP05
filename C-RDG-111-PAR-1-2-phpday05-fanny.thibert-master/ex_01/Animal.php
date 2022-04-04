<?php
class Animal{
    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;
    private $name;
    private $legs;
    private $type;
    private $Type;

    public function __construct($name="",$legs=0,$type=null)
    {
        $this->name = $name;
        $this->legs = $legs;
        $this->type = $type;
        if($this->type == Animal::MAMMAL)
        {
            $this->Type = "mammal";
            echo "My name is $this->name and I am a mammal!\n";
        }elseif($this->type == Animal::FISH)
        {
            $this->Type = "fish";
            echo "My name is $this->name and I am a fish!\n";
        }elseif($this->type == Animal::BIRD)
        {
            $this->Type = "bird";
            echo "My name is $this->name and I am a bird!\n";
        }
    }
    public function getName()
    {
        return $this->name;
    }
    public function getLegs()
    {
        return $this->legs;
    }
    public function getType()
    {
        return $this->Type;
    }
}

/*<?php
include_once("Animal.php");
$isidore = new Animal("Isidore", 4, Animal::MAMMAL);
echo $isidore->getName() . " has " . $isidore->getLegs() . " legs and is a " .
$isidore->getType() . ".\n";*/