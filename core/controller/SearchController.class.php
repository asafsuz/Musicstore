<?php

Class SearchController extends Controller {
    
    public function __construct() {
        require_once _core.'/model/SearchModel.class.php';
        $this->searchModel = new SearchModel();
    }
        
    public function GetAlbumsByQuery($query) {
        
        return $this->searchModel->GetAlbumsByQuery($query);
    }
    
}


?>