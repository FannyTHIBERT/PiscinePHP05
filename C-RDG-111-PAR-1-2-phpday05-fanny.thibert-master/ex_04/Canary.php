<?php
include_once("Animal.php");
class Canary extends Animal
{
    private static $eggs = 0;
    public function __construct($name="")
    {
        $this->name = $name;
        self::$eggs = 0;
        parent::__construct($name, 2, Animal::BIRD);
        echo "Yellow and smart? Here I am!\n";
    }

    public function getEggsCount()
    {
        return self::$eggs;
    }
    public static function layEgg()
    {
        self::$eggs++;
    }
}