<?php
/**
 * USER CLASS
 * 
 * parent class
 */

class User {
    // Properties
    protected $name;
    protected $lastname;
    protected $mail;
    protected $age;
    protected $discount;

    // Constructor
    function __construct($_name, $_lastname, $_mail, $_age) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->mail = $_mail;
        $this->age = $_age;
    }

    // Methods
    public function getFullName() {
        return $this->name . ' ' . $this->lastname;
    }

    public function getMail() {
        return $this->mail;
    }

    protected function calcDiscount() {
        $this->discount = $this->age > 55 ? 15 : 0;
    }

    public function getDiscount() {
        $this->calcDiscount();

        return $this->discount;
    }

}