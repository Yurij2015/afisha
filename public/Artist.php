<?php


class Artist
{
    public $name;
    public $description;

    function __construct($name, $description)
    {
        $this->name = trim(htmlspecialchars($name));
        $this->description = trim(htmlspecialchars($description));
    }

    public function name() {
        return "<h6>$this->name</h6>";
    }

    public function description() {
        return "<p>$this->description</p>";
    }

}