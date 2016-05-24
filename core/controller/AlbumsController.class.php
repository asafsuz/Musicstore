<?php

Class AlbumsController extends Controller {
    
    public function __construct() {
        require_once _core.'/model/AlbumsModel.class.php';
        $this->albumsModel = new AlbumsModel();
    }
    
    public function GetAlbums() {
        
        
        return $this->albumsModel->GetAlbums();
    }

    public function GetAlbumById($id) {
        
        
        return $this->albumsModel->GetAlbumById($id);
    }
}


?>