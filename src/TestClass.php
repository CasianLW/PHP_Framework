<?php

class Fruit {
    // Properties
    public $name = "banane";
    public $color = "jaune";
  
    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
  }