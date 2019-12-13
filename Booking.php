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

}

