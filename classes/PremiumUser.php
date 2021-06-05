<?php
require_once __DIR__ . '/User.php';

/**
 * PREMIUM USER CLASS
 * 
 * children class for User
 */

class PremiumUser extends User {
    // Properties
    private $is_premium;

    // Constructor
    function __construct($_name, $_lastname, $_mail, $_age, $_is_premium = false) {
        parent::__construct($_name, $_lastname, $_mail, $_age);
        $this->is_premium = $_is_premium;
    }

    // Methods
    protected function calcDiscount() {
        if ($this->is_premium) {
            $this->discount = 30;
        } elseif ($this->age > 60) {
            $this->discount = 20;
        } else {
            $this->discount = 0;
        }
    }
}