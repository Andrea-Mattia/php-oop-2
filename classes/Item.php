<?php
require_once __DIR__ . '/Shop.php';
/**
 * ITEM CLASS
 * 
 * children class for Shop
 */

class Item extends Shop {
    // Properties
    protected $category;
    protected $price;

    // Constructor
    function __construct($_user_id, $_item, $_category, $_price) {
        parent::__construct($_user_id, $_item);
        $this->category = $_category;
        $this->price = $_price;
    }

    // Methods
    public function getCategory() {
        return $this->category;
    }

    public function getPrice() {
        return $this->price;
    }
}