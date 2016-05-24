<?php

require _lib.'/db.class.php';


Class Model {
    
    public function __construct() {
        $this->_db = db::getInstance();
        
    }
    
}


?>