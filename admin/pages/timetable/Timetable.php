<?php
/**
 * Project: afisha
 * Filename: Timetable.php
 * Date: 12/13/2019
 * Time: 11:06 PM
 */

class Timetable
{
    public $date;
    public $time;
    public $duration;

    function __construct($date, $time)
    {
        $this->date = $date;
        $this->time = $time;
    }

    public function date()
    {
        return $this->date;
    }

    public function time()
    {
        return $this->time;
    }

    public function duration()
    {
        return $this->duration;
    }
}