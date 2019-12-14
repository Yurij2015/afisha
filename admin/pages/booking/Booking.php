<?php
/**
 * Project: afisha
 * Filename: Booking.php
 * Date: 12/13/2019
 * Time: 2:49 PM
 */

class Booking
{
    public $customername;
    public $phone;

    function __construct($customername, $phone)
    {
        $this->customername = $customername;
        $this->phone = $phone;
    }

    public function customername()
    {
        return $this->customername;
    }

    public function phone()
    {
        return $this->phone;
    }

    public function timetable($timetable_id)
    {
        $timetable_data = "";
        $host = "localhost";
        $user = "afisha";
        $db = "afisha";
        $pass = "3004917779";
        $db = new DbConnect($host, $user, $db, $pass);
        $timetable = $db->connect()->query("SELECT * FROM timetable WHERE id = '{$timetable_id}'");
        if ($timetable) {
            foreach ($timetable as $row) {
                $timetable_data = $row['date'] . " <br> " . $row['time'] . " <br> " . $row['duration'] . " <br> "  . $row['repertoire_idrepertoire'];
            }
        }
        $db = null;
        return $timetable_data;
    }
}

