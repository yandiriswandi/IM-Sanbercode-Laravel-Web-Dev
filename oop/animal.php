<?php

class Animal {
    // Properti
    public $name;
    public $legs;
    public $cold_blooded;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
        $this->legs = 4;
        $this->cold_blooded = "no";
    }

    // Optional: Getter methods
    public function get_name() {
        return $this->name;
    }

    public function get_legs() {
        return $this->legs;
    }

    public function get_cold_blooded() {
        return $this->cold_blooded;
    }
}
