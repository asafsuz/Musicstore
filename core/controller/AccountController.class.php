<?php

Class AccountController extends Controller {
    
    public function __construct() {
        require_once _core.'/model/AccountModel.class.php';
        $this->accountModel = new AccountModel();
    }
    
    public function PostLogin($mail,$pass) {
        
        return $this->accountModel->PostLogin($mail,$pass);
    }
    
    public function GetLogout() {
        
        return $this->accountModel->GetLogout();
    }
    
}

?>