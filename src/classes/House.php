<?php
class House
{
    public $windows = 4;
    public $doors = 1;
    //we could make our variable private only letting inside methods change it and access it
    private $address = "unknown";

    public function __construct($address = "Kaut kur Rīgā")
    {
        echo "<hr>Starting a new class constructor!<br>";
        $this->setAddress($address);
        echo "After constructing Our address is " . $this->getAddress();
    }

    //private will not be callable from outside
    private function isValidAddress($newaddress)
    {
        //correct but too long in this case
        // if (strlen($newaddress) > 5) {
        //     return true;
        // } else {
        //     return false;
        // }
        return strlen($newaddress) > 5;
    }

    public function setAddress($newaddress)
    {
        echo "<br>***Setting address***<hr>";
        echo "<br>Old address was $this->address";
        if ($this->isValidAddress($newaddress)) {
            $this->address = $newaddress;
        } else {
            echo "<br>Invalid address!";
        }
        echo "<br>New address is $this->address";
    }

    public function getAddress()
    {
        //we could add formatting etc here, validation
        return $this->address;
    }

    public function openWindows()
    {
        echo "<br>Opening All $this->windows Windows";
    }

    public function prettyHouse($count)
    {
        for ($i = 0; $i < $count; $i++) {
            echo "<div>My House is Pretty!";
            echo " It has $this->windows windows</div>";
        }
    }
}
