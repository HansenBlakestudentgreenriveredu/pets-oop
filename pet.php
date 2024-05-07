<?php

// 328/pet-oop/pet.php

class Pet {
    // fields
    private $_name;
    private $_color;

    /**
     * Set pet name and color
     */
    function setName($name)
    {
        $this->_name = $name;
    }
    function setColor($color)
    {
        $this->_color = $color;
    }

    /**
     * Get pet name and color
     */
    function getName($name)
    {
        return $this->_name;
    }
    function getColor($color)
    {
        return $this->_color;
    }

    //Default constructor
    function __construct($name = "Unknown", $color = "??")
    {
        $this->_name = "$name";
        $this->_color = "$color";
    }

    function eat()
    {
        echo $this->_name . " is eating.<br>";
    }

    function sleep()
    {
        echo "Pet is sleeping<br>";
    }

    function talk()
    {
        echo "Pet is talking<br>";
    }

}