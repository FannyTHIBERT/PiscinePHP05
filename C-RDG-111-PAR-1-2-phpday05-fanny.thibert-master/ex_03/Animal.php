<?php
class Animal{
    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;
    protected $name;
    protected $legs;
    protected $type;
    private $_count;
    private static $count = 0;
    private $_nbrm;
    private static $nbrm = 0;
    private $_nbrf;
    private static $nbrf = 0;
    private $_nbrb;
    private static $nbrb = 0;

    public function __construct($name="", $legs=0, $type=null)
    {
        $this->name = $name;
        $this->legs = $legs;
        $this->type = $type;
        self::$count++;     

        if($this->type == Animal::MAMMAL)
        {
            self::$nbrm++;
            echo "My name is $this->name and I am a mammal!\n";
        }
        elseif($this->type == Animal::FISH)
        {
            self::$nbrf++;
            echo "My name is $this->name and I am a fish!\n";
        }
        elseif($this->type == Animal::BIRD)
        {
            self::$nbrb++;
            echo "My name is $this->name and I am a bird!\n";
        }
    }
    public function __destruct()
    {
        self::$count--;
        if($this->type == Animal::MAMMAL)
        {
            self::$nbrm--;
        }
        elseif($this->type == Animal::FISH)
        {
            self::$nbrf--;
        }
        elseif($this->type == Animal::BIRD)
        {
            self::$nbrb--;
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
        if($this->type == 0)
        {
            return "mammal";
        }
        elseif($this->type==1)
        {
            return "fish";
        }
        elseif($this->type==2)
        {
            return "bird";
        }
        
    }
    public static function getNumberOfAnimalsAlive()
    {
        if (self::$count == 1)
        {
             echo "There is currently " . self::$count . " animal alive in our world.\n";
             return self::$count;
        }else
        {
            echo "There are currently " . self::$count . " animals alive in our world.\n";
            return self::$count;
        }
    }
    public static function getNumberOfMammals()
    {
        if(self::$nbrm==1)
        {
            echo "There is currently " . self::$nbrm . " mammal alive in our world.\n";
            return self::$nbrm;
        }
        else
        {
            echo "There are currently " . self::$nbrm . " mammals alive in our world.\n";
            return self::$nbrm;
        }
    }
    public static function getNumberOfFishes()
    {
        if(self::$nbrf==1)
        {
            echo "There is currently " . self::$nbrf . " fish alive in our world.\n";
            return self::$nbrf;
        }
        elseif(self::$nbrf==0)
        {
            echo "There are currently " . self::$nbrf . " fish alive in our world.\n";
            return self::$nbrf;
        }
        else
        {
            echo "There are currently " . self::$nbrf . " fishs alive in our world.\n";
            return self::$nbrf;
        }
    }
    public static function getNumberOfBirds()
    {
        if(self::$nbrb==1)
        {
            echo "There is currently " . self::$nbrb . " bird alive in our world.\n";
            return self::$nbrb;
        }
        else
        {
            echo "There are currently " . self::$nbrb . " birds alive in our world.\n";
            return self::$nbrb;
        }
    }
}