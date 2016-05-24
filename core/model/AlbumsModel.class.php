<?php

Class AlbumsModel extends Model {

    public function GetAlbums() {

        $albums = array();
        
        $albumsRequest = $this->_db->query("SELECT * FROM `albums`");
        if($albumsRequest) {
            
            while($album = $albumsRequest->fetch_assoc()) {
                $albums[] = $album;
            }
        }

        return $albums;
    }

    public function GetAlbumsByQuery($query) {

        $albums = array(
            "suggestions"=>array()
        );
        
        
        $albumsRequest = $this->_db->query("SELECT * FROM `albums` WHERE `title` LIKE '%{$query}%'");
        if($albumsRequest) {
            
            while($album = $albumsRequest->fetch_assoc()) {
                $albums['suggestions'][] = array("value"=>$album['title'],"data"=>$album['id']);
            }
        }

        return $albums;
    }

    public function GetAlbumById($id) {
        $album = array();
        
        $albumRequest = $this->_db->query("SELECT * FROM `albums` WHERE `id`={$id}");
        if($albumRequest) {
            $album = $albumRequest->fetch_assoc();
        }

        return $album;
    }
}


?>