<?php


class Artist
{
    public $name;
    public $description;

    function __construct($name, $description)
    {
        $this->name = htmlspecialchars($name);
        $this->description = htmlspecialchars($description);
    }

    public function name() {
        return "<h4>$this->name</h4>";
    }

    public function description() {
        return "<p>$this->description</p>" . "<br>";
    }

}