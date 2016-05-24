<?php

Class db {
    
    private static $instance;

    public static function getInstance() {
        if (null === static::$instance) {
            static::$instance = new mysqli("localhost","root","","musicstore");
        }
        
        return static::$instance;
    }

    protected function __construct() { }
    private function __clone() { }
    private function __wakeup() { }
}

?>