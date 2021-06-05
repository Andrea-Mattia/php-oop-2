<?php
/**
 * SHOP CLASS
 * 
 * parent class
 */

class Shop {
    // Properties
    protected $user_id;
    protected $item;

    // Constructor
    function __construct($_user_id, $_item) {
        $this->user_id = $_user_id;
        $this->item = $_item;
    }

    // Methods
    public function getUserID() {
        return $this->user_id;
    }

    public function getItem() {
        return $this->item;
    }
}