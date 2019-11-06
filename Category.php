<?php


class Category
{
    private $name;
    private $descrtiption;

    function __construct($name, $descrtiption)
    {
        $this->name = $name;
        $this->descrtiption = $descrtiption;
    }

    public function name() {
        return "<h3>$this->name</h3>" . "<br>";
    }

}